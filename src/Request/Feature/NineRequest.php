<?php


namespace MaxZhang\JttSdk\Request\Feature;


use MaxZhang\JttSdk\JttRequest;

/**
 * 9块9
 * Class NineRequest
 * @package MaxZhang\JttSdk\Request\Feature
 */
class NineRequest extends JttRequest
{

    protected $apiMethodName = 'get_price_9_9';


    /**
     * 分页获取数据 默认1 最多获取到50页
     * @var int
     */
    public $page = 1;
    /**
     * 单页面显示条数(最大100条最少10条)
     * @var integer
     */
    public $num = 10;
    /**
     * 商品搜索：商品名称/商品SKU
     * @var string
     */
    public $so;
    /**
     * 品牌ID筛选
     * @var string
     */
    public $brandId;
    /**
     * 京推推商品一级类目：1居家日用；2食品；3生鲜；4图书；5美妆个护；6母婴；7数码家电；8内衣；9配饰；10女装；11男装；12鞋品；13家装家纺；14文娱车品；15箱包；16户外运动（支持多类目筛选，如1, 2获取类目为女装、男装的商品，逗号仅限英文逗号（不传则为全部商品）
     * @var string
     */
    public $goodsNewType;
    /**
     * 京推推二级分类
     * @var integer
     */
    public $goodsSecondType;
    /**
     * 商品分类：(弃用) 1.女装 2.男装 3.内衣配饰 4.母婴玩具 5.美妆个护 6.食品保健 7.居家生活 8.鞋品箱包 9.运动户外 10.文体车品 11.数码家电
     * @var integer
     */
    public $type;
    /**
     * 商品筛选：
     * collage-京东拼购;
     * self-京东自营;
     * sift-精选好货;
     * wtype-京东配送产品;
     * finally-券后价最低;
     * finally_desc-券后价最高;
     * brokerage-佣金比例最高;
     * brokerage_asc-佣金比例最低;
     * sale-优惠最多;
     * sale_asc-优惠最少;
     * @var string
     */
    public $rank;

    /**
     * 生成参数数组
     * @return array
     */
    function generateParams()
    {
        return [
            'page'              => $this->page,
            'num'               => $this->num,
            'so'                => $this->so,
            'brand_id'          => $this->brandId,
            'goods_new_type'    => $this->goodsNewType,
            'goods_second_type' => $this->goodsSecondType,
            'type'              => $this->type,
            'rank'              => $this->rank
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