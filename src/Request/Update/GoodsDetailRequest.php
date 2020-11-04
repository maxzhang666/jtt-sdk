<?php


namespace MaxZhang\JttSdk\Request\Update;


use MaxZhang\JttSdk\JttRequest;

/**
 * 获取商品详情(图片形式)
 * Class GoodsDetailRequest
 * @package MaxZhang\JttSdk\Request\Update
 */
class GoodsDetailRequest extends JttRequest
{

    protected $apiMethodName = 'get_ware_style';
    protected $version = 'v2';

    public $skuIds;

    /**
     * 生成参数数组
     * @return array
     */
    function generateParams()
    {
        return [
            'skuIds' => $this->skuIds
        ];
    }

    /**
     * 参数验证
     * @return void
     */
    function check()
    {
        // TODO: Implement check() method.
    }
}