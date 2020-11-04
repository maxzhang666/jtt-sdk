<?php


namespace MaxZhang\JttSdk\Request\Update;


use MaxZhang\JttSdk\JttRequest;

class GoodsUpdateRequest extends JttRequest
{

    protected $apiMethodName = 'get_goods_update';

    /**
     * 分页获取数据 默认1 最多获取到50页
     * @var
     */
    public $page = 1;
    /**
     * 单页面显示条数(最大100条最少10条)
     * @var
     */
    public $num = 10;
    /**
     * 拉取商品开始时间，时间戳到秒:1603956576（注:time()-2*60*60，建议每10分钟拉取一次）
     * @var
     */
    public $startTime;
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
     * 京推推商品一级类目：1居家日用；2食品；3生鲜；4图书；5美妆个护；6母婴；7数码家电；8内衣；9配饰；10女装；11男装；12鞋品；13家装家纺；14文娱车品；15箱包；16户外运动（支持多类目筛选，如1,2获取类目为女装、男装的商品，逗号仅限英文逗号（不传则为全部商品）
     * @var
     */
    public $goodsNewType;
    /**
     * 二级类目ID
     * @var
     */
    public $goodsSecondType;
    /**
     * 商品筛选： collage-京东拼购; self-京东自营; sift-精选好货; wtype-京东配送产品; finally-券后价最低; finally_desc-券后价最高; brokerage-佣金比例最高; brokerage_asc-佣金比例最低; sale-优惠最多; sale_asc-优惠最少; OrderCount30Days-30天引入订单量最高;
     * @var
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
            'start_time'        => $this->startTime,
            'price_start'       => $this->priceStart,
            'price_end'         => $this->priceEnd,
            'goods_new_type'    => $this->goodsNewType,
            'goods_second_type' => $this->goodsSecondType,
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