<?php

namespace MaxZhang\JttSdk\Request\Feature;

use MaxZhang\JttSdk\JttRequest;

/**
 * 奖励商品
 * 实力精选全网爆款商品，此频道下所有商品都有超高服务费，除原本您可以获取的推广佣金收益外，您还能额外获取到该商品的推广服务费，而这部分额外收益能达到您订单金额的8%～10%（注意：是付款金额的比例）
 * Class SubsidyGoodsRequest
 * @package MaxZhang\JttSdk\Request\Feature
 */
class SubsidyGoodsRequest extends JttRequest
{

    protected $apiMethodName = 'subsidy_goods';

    /**
     * 分页获取数据（默认第1页）
     * @var int
     */
    public $page = 1;
    /**
     * 单页面显示条数(最大100条最少10条)
     * @var int
     */
    public $num = 10;
    /**
     * 京推推商品一级类目： 0全部；1居家日用；2食品；3生鲜；4图书；5美妆个护；6母婴；7数码家电；8内衣；9配饰；10女装；11男装；12鞋品；13家装家纺；14文娱车品；15箱包；16户外运动（支持多类目筛选，如1,2获取类目为女装、男装的商品，逗号仅限英文逗号）
     * @var
     */
    public $goodsNewType;

    /**
     * 生成参数数组
     * @return array
     */
    function generateParams()
    {
        return [
            'page'           => $this->page,
            'num'            => $this->num,
            'goods_new_type' => $this->goodsNewType
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