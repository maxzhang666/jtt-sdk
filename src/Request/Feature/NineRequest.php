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
    protected $version = 'v2';
//pageIndex Int 	否 	1
//pageSize Int 	否 	50
//keyword String 	否 	纸巾 	关键词搜索（可以输入关键词、SKU、商品链接、店铺名称）


    /**
     * @var int 分页获取数据（默认第1页）
     */
    public $pageIndex = 1;
    /**
     * @var integer 单页面显示条数(最大100条最少10条)
     */
    public $pageSize = 10;
    /**
     * 商品搜索：商品名称/商品SKU
     * @var string
     */
    public $keyword;
    /**
     * @var  int 京推推商品一级类目： 1居家日用；2食品；3生鲜；4图书；5美妆个护；6母婴；7数码家电；8内衣；9配饰；10女装；11男装；12鞋品；13家装家纺；14文娱车品；15箱包；16户外运动（支持多类目筛选，如1,2获取类目为居家日用、食品的所有商品，请用英文都好隔开，不传则为全部商品）
     */
    public $goodsType;
    /**
     * @var int 京推推二级分类（可通过超级分类API获取全部的二级分类id，本接口也有返回）
     */
    public $goodsSecondType;
    /**
     * @var string OrderCount30Days    排序字段： finally券后价；brokerage佣金比例；sale折扣力度；OrderCount30Days 30天引入订单量；inOrderComm30Days 30天支出佣金；getCouponNum领券量；comments评论数；goodComments好评数
     */
    public $sortName;
    /**
     * @var string 排序： asc升序, desc降序
     */
    public $sort;
    /**
     * @var double 价格筛选:最低价格
     */
    public $priceStart;
    /**
     * @var double 价格筛选:最高价格
     */
    public $priceEnd;
    /**
     * @var int 京推推品牌ID筛选
     */
    public $brandId;
    /**
     * @var int 店铺id筛选
     */
    public $shopId;

    /**
     * 生成参数数组
     * @return array
     */
    function generateParams(): array
    {
        return [
            'pageIndex'         => $this->pageIndex,
            'pageSize'          => $this->pageSize,
            'keyword'           => $this->keyword,
            'goods_type'        => $this->goodsType,
            'goods_second_type' => $this->goodsSecondType,
            'sortName'          => $this->sortName,
            'sort'              => $this->sort,
            'price_start'       => $this->priceStart,
            'price_end'         => $this->priceEnd,
            'brand_id'          => $this->brandId,
            'shop_id'           => $this->shopId
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