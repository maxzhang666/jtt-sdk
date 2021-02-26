<?php


namespace MaxZhang\JttSdk\Request\Update;


use MaxZhang\JttSdk\JttRequest;

class GoodsUpdateRequest extends JttRequest
{

    protected $apiMethodName = 'get_goods_update';

    protected $version = 'v2';
    /**
     * 分页获取数据 默认1 最多获取到50页
     * @var
     */
    public $pageIndex = 1;
    /**
     * 单页面显示条数(最大100条最少10条)
     * @var
     */
    public $pageSize = 10;

    /**
     * @var int 京推推商品一级类目： 1居家日用；2食品；3生鲜；4图书；5美妆个护；6母婴；7数码家电；8内衣；9配饰；10女装；11男装；12鞋品；13家装家纺；14文娱车品；15箱包；16户外运动（支持多类目筛选，如1,2获取类目为居家日用、食品的所有商品，请用英文都好隔开，不传则为全部商品）
     */
    public $goodsType;
    /**
     * 二级类目ID
     * @var int 京推推二级分类（可通过超级分类API获取全部的二级分类id，本接口也有返回）
     */
    public $goodsSecondType;

    /**
     * @var string  频道id： sift精选好货；nineSift“9块9”精选；collage京东拼购；self京东自营；wtype京东配送；goodShop京东好店；flagShop官方旗舰店；giftGoods奖励商品
     */
    public $eliteId;

    /**
     * @var string  排序字段： finally券后价；brokerage佣金比例；sale折扣力度；OrderCount30Days 30天引入订单量；inOrderComm30Days 30天支出佣金；getCouponNum领券量；comments评论数；goodComments好评数
     */
    public $sortName;

    /**
     * @var string  排序： asc升序,desc降序
     */
    public $sort;


    /**
     * 价格筛选：最低价格
     * @var double 价格筛选：最低价格
     */
    public $priceStart;

    /**
     * 价格筛选：最高价格
     * @var double 价格筛选：最高价格
     */
    public $priceEnd;

    /**
     * 拉取商品开始时间，时间戳到秒:1603956576（注:time()-2*60*60，建议每10分钟拉取一次）
     * @var
     */
    public $startTime;

    /**
     * @var int  更新商品状态筛选： 1状态异常；2状态正常
     */
    public $state;

    /**
     * 生成参数数组
     * @return array
     */
    function generateParams(): array
    {
        return [
            'pageIndex'         => $this->pageIndex,
            'pageSize'          => $this->pageSize,
            'goods_type'        => $this->goodsType,
            'goods_second_type' => $this->goodsSecondType,
            'eliteId'           => $this->eliteId,
            'sortName'          => $this->sortName,
            'sort'              => $this->sort,
            'price_start'       => $this->priceStart,
            'price_end'         => $this->priceEnd,
            'start_time'        => $this->startTime,
            'state'             => $this->state
        ];
    }

    /**
     * 参数验证
     * @return void
     */
    function check()
    {

    }
}