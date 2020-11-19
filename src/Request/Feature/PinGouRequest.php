<?php


namespace MaxZhang\JttSdk\Request\Feature;


use MaxZhang\JttSdk\JttRequest;

class PinGouRequest extends JttRequest
{
    protected $apiMethodName = 'get_goods_list';
    protected $version = 'v2';

    /**
     * 分页获取数据（默认第1页）
     * @var integer
     */
    public $pageIndex = 1;
    /**
     * 单页面显示条数(最大100条最少10条)
     * @var string
     */
    public $pageSize = 10;
    /**
     * 关键词搜索（可以输入关键词、SKU、商品链接、店铺名称）
     * @var string
     */
    public $keyword;
    /**
     * 京推推商品一级类目： 1居家日用；2食品；3生鲜；4图书；5美妆个护；6母婴；7数码家电；8内衣；9配饰；10女装；11男装；12鞋品；13家装家纺；14文娱车品；15箱包；16户外运动（支持多类目筛选，如1,2获取类目为居家日用、食品的所有商品，请用英文都好隔开，不传则为全部商品）
     * @var integer
     */
    public $goodsType;
    /**
     * 京推推二级分类（可通过超级分类API获取全部的二级分类id，本接口也有返回）
     * @var integer
     */
    public $goodsSecondType;
    /**
     * 排序字段： finally券后价；brokerage佣金比例；sale折扣力度；OrderCount30Days 30天引入订单量；inOrderComm30Days 30天支出佣金；getCouponNum领券量；comments评论数；goodComments好评数
     * @var string
     */
    public $sortName;
    /**
     * 排序： asc升序,desc降序
     * @var string
     */
    public $sort;
    /**
     * 价格筛选:最低价格
     * @var float
     */
    public $priceStart;
    /**
     * 价格筛选:最高价格
     * @var float
     */
    public $priceEnd;
    /**
     * 京推推品牌ID筛选
     * @var string
     */
    public $brandId;
    /**
     * 店铺id筛选
     * @var string
     */
    public $shopId;

    /**
     * 生成参数数组
     * @return array
     */
    function generateParams()
    {
        return [
            "eliteId"           => "collage",
            "pageIndex"         => $this->pageIndex,
            "pageSize"          => $this->pageSize,
            "keyword"           => $this->keyword,
            "goods_type"        => $this->goodsType,
            "goods_second_type" => $this->goodsSecondType,
            "sortName"          => $this->sortName,
            "sort"              => $this->sort,
            "price_start"       => $this->priceStart,
            "price_end"         => $this->priceEnd,
            "brand_id"          => $this->brandId,
            "shopid"            => $this->shopId,
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