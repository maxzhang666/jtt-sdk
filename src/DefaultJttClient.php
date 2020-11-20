<?php


namespace MaxZhang\JttSdk;

use MaxZhang\JttSdk\Exceptions\Exception;
use MaxZhang\JttSdk\Exceptions\HttpException;
use MaxZhang\JttSdk\Exceptions\InvalidArgumentException;

class DefaultJttClient
{
    private $appId;
    private $appKey;

    private $serverUrl;

    /**
     * 构造方法.
     *
     * @param string|null $appId 应用访问Id
     * @param string $appKey 应用访问key
     * @param string $serverUrl 服务调用地址
     */
    public function __construct(string $appId = null, string $appKey = null, string $serverUrl = "http://japi.jingtuitui.com/api")
    {
        $this->serverUrl = $serverUrl;
        $this->appId     = $appId;
        $this->appKey    = $appKey;
    }

    /**
     * @param JttRequest $request
     * @return bool|string
     * @throws HttpException
     * @throws InvalidArgumentException
     */
    public function execute(JttRequest $request)
    {
        //参数检查
        if (empty($this->appKey)) {
            throw new InvalidArgumentException("appKey can not empty ！");
        }
        if (empty($this->serverUrl)) {
            throw new InvalidArgumentException("serverUrl can not empty ！");
        }
        if (empty($this->appId)) {
            throw new InvalidArgumentException("appId can not empty ！");
        }
        try {
            $request->check();
        } catch (Exception $e) {
            throw new InvalidArgumentException('Invalid format:' . $e->getMessage());
        }
        $paramsArray = $request->getApiParams();
        if (empty($paramsArray)) {
            $paramsArray = "";
        }
        $paramsArray['appid']  = $this->appId;
        $paramsArray['appkey'] = $this->appKey;

        try {
            $resp = self::curl($this->serverUrl . '/' . $request->getApiMethodName() . '?' . http_build_query($paramsArray));
            $obj  = json_decode($resp, true);
            return json_last_error_msg() ? $resp : $obj;
        } catch (Exception $e) {
            throw  new HttpException($e->getMessage(), $e->getCode());
        }

    }

    /**
     * @param $url
     * @param jsno|xml $postFields
     * @param array $header
     * @return bool|string
     * @throws HttpException
     */
    public static function curl($url, $postFields = null, $header = array())
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        // curl_setopt($ch, CURLOPT_TIMEOUT, self::$readTimeout);
        // curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, self::$connectTimeout);
        // curl_setopt($ch, CURLOPT_POST, true);
        if (!empty($postFields)) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
        }

        // https 请求
        if (strlen($url) > 5 && strtolower(substr($url, 0, 5)) == 'https') {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            throw new HttpException(curl_error($ch), 0);
        } else {
            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode) {
                throw new HttpException('Jtt API Network Error！httpStatusCode' . $response, $httpStatusCode);
            }
        }
        curl_close($ch);

        return $response;
    }
}