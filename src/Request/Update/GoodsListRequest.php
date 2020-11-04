<?php


namespace MaxZhang\JttSdk\Request\Update;


use MaxZhang\JttSdk\JttRequest;

/**
 * 商品列表
 * Class GoodsListRequest
 * @package MaxZhang\JttSdk\Request\Update
 */
class GoodsListRequest extends JttRequest
{
    protected $apiMethodName = 'get_goods_list';
    /**
     * 分页获取数据 默认1 最多获取到50页
     * @var int
     */
    public $page = 1;
    /**
     * 单页面显示条数(最大100条最少10条)
     * @var int
     */
    public $num = 10;
    /**
     * 搜索关键词
     * @var
     */
    public $so;
    /**
     * 品牌ID筛选
     * @var
     */
    public $brandId;
    /**
     * 价格筛选：最低价格
     * @var
     */
    public $priceStart;
    /**
     * 价格筛选：最高价格
     * @var
     */
    public $priceEnd;
    /**
     * 京推推商品一级类目： 1居家日用；2食品；3生鲜；4图书；5美妆个护；6母婴；7数码家电；8内衣；9配饰；10女装；11男装；12鞋品；13家装家纺；14文娱车品；15箱包；16户外运动（支持多类目筛选，如1,2获取类目为居家日用、食品的所有商品，请用英文都好隔开，不传则为全部商品）
     * @var
     */
    public $goodsNewType;
    /**
     * 京推推二级分类
     * @var
     */
    public $goodsSecondType;
    /**
     * 商品分类：(弃用) 1.女装 2.男装 3.内衣配饰 4.母婴玩具 5.美妆个护 6.食品保健 7.居家生活 8.鞋品箱包 9.运动户外 10.文体车品 11.数码家电
     * @var
     */
    public $type;
    /**
     * 商品筛选： collage-京东拼购; self-京东自营; sift-精选好货; wtype-京东配送产品; finally-券后价最低; finally_desc-券后价最高; brokerage-佣金比例最高; brokerage_asc-佣金比例最低; sale-优惠最多; sale_asc-优惠最少; OrderCount30Days-30天引入订单量最高;
     * @var
     */
    public $rand;

    function generateParams()
    {
        return [
            'page'              => $this->page,
            'num'               => $this->num,
            'so'                => $this->so,
            'brand_id'          => $this->brandId,
            'price_start'       => $this->priceStart,
            'price_end'         => $this->priceEnd,
            'goods_new_type'    => $this->goodsNewType,
            'goods_second_type' => $this->goodsSecondType,
            'type'              => $this->type,
            'rand'              => $this->rand
        ];
    }

    function check()
    {

    }
}