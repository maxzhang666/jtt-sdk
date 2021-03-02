<?php


namespace MaxZhang\JttSdk\Request\Feature;


use MaxZhang\JttSdk\JttRequest;

/**
 * 9块9
 * Class NineRequest
 * @package MaxZhang\JttSdk\Request\Feature
 */
class getBrandListRequest extends JttRequest
{

    protected $apiMethodName = 'get_brand_list';
    protected $version = 'v3';


    /**
     * @var int 分页获取数据 默认1
     */
    public $pageIndex = 1;

    /**
     * @var int 单页面显示条数(最大100条最少10条)
     */
    public $pageSize;

    /**
     * @var int 京推推商品一级类目： 0全部；1居家日用；2食品；3生鲜；4图书；5美妆个护；6母婴；7数码家电；8内衣；9配饰；10女装；11男装；12鞋品；13家装家纺；14文娱车品；15箱包；16户外运动（支持多类目筛选，如1,2获取类目为女装、男装的商品，逗号仅限英文逗号）
     */
    public $goodsType;

    /**
     * @var int 品牌数据类型 item-详情（构建品牌内商品列表清单需加此参数。例type=item&brand_id=1）
     */
    public $type;

    /**
     * @var int 京推推品牌id
     */
    public $brandId;

    /**
     * @var string 三只松鼠    品牌名称搜索
     */
    public $brandName;

    /**
     * 生成参数数组
     * @return array
     */
    function generateParams(): array
    {
        return [
            'pageIndex'  => $this->pageIndex,
            'pageSize'   => $this->pageSize,
            'goods_type' => $this->goodsType,
            'type'       => $this->type,
            'brand_id'   => $this->brandId,
            'brand_name' => $this->brandName
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