<?php


namespace MaxZhang\JttSdk\Request\Feature;


use MaxZhang\JttSdk\Exceptions\InvalidArgumentException;
use MaxZhang\JttSdk\JttRequest;

class RelatedGoodsRequest extends JttRequest
{

    protected $apiMethodName = 'related_goods';

    /**
     * 商品id
     * @var
     */
    public $goodsId;

    /**
     * 生成参数数组
     * @return array
     */
    function generateParams()
    {
        return ['goods_id' => $this->goodsId];
    }

    /**
     * 参数验证
     * @return void
     * @throws InvalidArgumentException
     */
    function check()
    {
        if (empty($this->goodsId)) {
            throw new InvalidArgumentException('goodsIt is required!');
        }
    }
}