<?php


namespace MaxZhang\JttSdk\Request\Feature;


use MaxZhang\JttSdk\JttRequest;

/**
 * 奖励商品
 * Class RewardRequest
 * @package MaxZhang\JttSdk\Request\Feature
 */
class RewardRequest extends JttRequest
{

    protected $apiMethodName = 'subsidy_goods';


    /**
     * 分页获取数据（默认第1页）
     * @var integer
     */
    public $page = 1;
    /**
     * 单页面显示条数(最大100条最少10条)
     * @var integer
     */
    public $num = 10;
    /**
     * 京推推商品一级类目： 0全部；1居家日用；2食品；3生鲜；4图书；5美妆个护；6母婴；7数码家电；8内衣；9配饰；10女装；11男装；12鞋品；13家装家纺；14文娱车品；15箱包；16户外运动（支持多类目筛选，如1, 2获取类目为女装、男装的商品，逗号仅限英文逗号）
     * @var string
     */
    public $goodsNewType;


    /**
     * 生成参数数组
     * @return array
     */
    function generateParams():array
    {
        return [
            "page"           => $this->page,
            "num"            => $this->num,
            "goods_new_type" => $this->goodsNewType,
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