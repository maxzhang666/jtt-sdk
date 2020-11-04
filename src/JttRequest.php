<?php

namespace MaxZhang\JttSdk;

abstract class JttRequest
{
    protected $apiParams = array();
    protected $apiMethodName;
    protected $version;

    abstract function generateParams();

    abstract function check();

    /**
     * 获取请求数据
     */
    public function getApiParams()
    {
        $this->apiParams = $this->generateParams();
        //版本号默认不传
        if (!empty($this->version)) {
            $this->apiParams['v'] = $this->version;
        }
        return $this->apiParams;
    }


    /**
     * 获取接口方法名称
     */
    public function getApiMethodName()
    {
        return $this->apiMethodName;
    }
}