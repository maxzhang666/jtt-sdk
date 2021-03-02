<?php


namespace MaxZhang\JttSdk\Request\Basic;


use MaxZhang\JttSdk\Exceptions\InvalidArgumentException;
use MaxZhang\JttSdk\JttRequest;

/**
 * 相似商品推荐
 * Class RelatedGoodsRequest
 * @package MaxZhang\JttSdk\Request\Feature
 */
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
    function generateParams(): array
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