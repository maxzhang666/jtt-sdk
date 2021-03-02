<?php


namespace MaxZhang\JttSdk\Request\Basic;


use MaxZhang\JttSdk\Exceptions\InvalidArgumentException;
use MaxZhang\JttSdk\JttRequest;

/**
 * 高校转链
 * 将您的联盟信息、商品SKU以及优惠券链接进行转链，返回商品的二合一领券下单链接，转链后的结果可进行推广
 * Class GoodsConvertRequest
 * @package MaxZhang\JttSdk\Request\Feature
 */
class GoodsConvertRequest extends JttRequest
{

    protected $apiMethodName = 'get_goods_link';

    /**
     * 联盟ID
     * @var
     */
    public $unionId;
    /**
     * 推广位ID （可自定义推广位id，也可自由填写京东联盟账号下已经创建的任一推广位ID，若未填写，则默认生成一个唯一此接口推广位-名称：微信手Q短链接）
     * @var
     */
    public $positionId;
    /**
     * 落地页、商品ID(支持传入会场链接,二合一链接，当只传单品落地页或SKU时，自动匹配有效最优券，进行二合一转链， 建议转链后检查跟单)
     * @var
     */
    public $gid;
    /**
     * 优惠券链接(为空则自动匹配有效最优券，若无可使用优惠券则为单品转链)
     * @var
     */
    public $couponUrl;
    /**
     * 您的sub子渠道标识，您可自定义传入字母、数字或下划线，最多支持80个字符，该参数会在订单行查询接口中展示（需向京东联盟申请权限，申请方法请见https://union.jd.com/helpcenter/13246-13247-46301），与positionid只传入一处即可
     * @var
     */
    public $subUnionId;

    /**
     * 生成参数数组
     * @return array
     */
    function generateParams():array
    {
        return [
            'unionid'    => $this->unionId,
            'positionid' => $this->positionId,
            'gid'        => $this->gid,
            'coupon_url' => $this->couponUrl,
            'subUnionId' => $this->subUnionId
        ];
    }

    /**
     * 参数验证
     * @return void
     */
    function check()
    {
        if (empty($this->unionId)) {
            throw  new InvalidArgumentException('unionId is required!');
        }
    }
}