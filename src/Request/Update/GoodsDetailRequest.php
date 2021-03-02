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

    /**
     *  商品sku搜索，最高可输入100个，多sku搜索时请用英文逗号分割
     * @var
     */
    public $skuIds;

    /**
     * 生成参数数组
     * @return array
     */
    function generateParams():array
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