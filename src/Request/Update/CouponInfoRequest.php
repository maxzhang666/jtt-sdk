<?php


namespace MaxZhang\JttSdk\Request\Update;


use MaxZhang\JttSdk\JttRequest;

/**
 * 商品详情
 * Class GoodsInfoRequest
 * @package MaxZhang\JttSdk\Request\Update
 */
class CouponInfoRequest extends JttRequest
{
    protected $apiMethodName = 'get_coupom_info';
    protected $version = 'v2';

    /**
     * 优惠券链接查询，支持优惠券链接集合，用英文“,”隔开，： 上限10（GET请求）；上限50（POST请求）
     * @var
     */
    public $couponUrls;

    /**
     * 商品sku搜索，最高可输入100个，多sku搜索时请用英文逗号分割 （注：1、v1版本支持传商品链接；2、如果输入的sku串中某个skuID的商品不在推广中[就是没有佣金]，返回结果会自动过滤该商品）
     * @var
     */
    private $skuIds;

    function generateParams():array
    {
        return [
            '$skuIds' => $this->skuIds
        ];
    }

    function check()
    {
    }
}