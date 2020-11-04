<?php


namespace MaxZhang\JttSdk\Request\Update;


use MaxZhang\JttSdk\JttRequest;

/**
 * 商品详情
 * Class GoodsInfoRequest
 * @package MaxZhang\JttSdk\Request\Update
 */
class GoodsInfoRequest extends JttRequest
{
    protected $apiMethodName = 'get_goods_info';
    protected $version = 'v2';
    /**
     * 商品sku搜索，最高可输入100个，多sku搜索时请用英文逗号分割 （注：1、v1版本支持传商品链接；2、如果输入的sku串中某个skuID的商品不在推广中[就是没有佣金]，返回结果会自动过滤该商品）
     * @var
     */
    private $skuIds;

    function generateParams()
    {
        return [
            '$skuIds' => $this->skuIds
        ];
    }

    function check()
    {
    }
}