<?php

namespace MaxZhang\JttSdk\Request\Search;

use MaxZhang\JttSdk\JttRequest;

class UnionSearchRequest extends JttRequest
{

    protected $apiMethodName = 'jd_goods_query';

    /**
     * 一级类目id
     * @var
     */
    public $cid1;
    /**
     * 二级类目id
     * @var
     */
    public $cid2;
    /**
     * 三级类目id
     * @var
     */
    public $cid3;
    /**
     * 页码
     * @var
     */
    public $pageIndex = 1;
    /**
     * 每页数量（单页数最大30，默认20）
     * @var
     */
    public $pageSize = 20;
    /**
     * 商品sku搜索，最高可输入100个，多sku搜索时请用英文逗号分割 （如果输入的sku串中某个skuID的商品不在推广中[就是没有佣金]，返回结果会自动过滤该商品）
     * @var
     */
    public $skuIds;
    /**
     * 关键词搜索（可以输入关键词、SKU、商品链接、店铺名称）
     * @var
     */
    public $keyword;
    /**
     * 商品价格下限
     * @var
     */
    public $pricefrom;
    /**
     * 商品价格下限
     * @var
     */
    public $priceto;
    /**
     * 佣金比例区间开始时间戳（java精确到毫秒，其他语言都可以精确到秒）
     * @var
     */
    public $commissionShareStart;
    /**
     * 佣金比例区间结束时间戳（java精确到毫秒，其他语言都可以精确到秒）
     * @var
     */
    public $commissionShareEnd;
    /**
     * 排序字段 price单价； commissionShare佣金比例； commission佣金；inOrderCount30Days 30天引单量；inOrderComm30Days 30天支出佣金
     * @var
     */
    public $sortName;
    /**
     * asc=升降序；desc=默认降序
     * @var
     */
    public $sort;
    /**
     * 是否是优惠券商品 1=有优惠券；0=无优惠券
     * @var
     */
    public $isCoupon;
    /**
     * 是否是拼购商品 1=拼购商品；0=非拼购商品
     * @var
     */
    public $isPG;
    /**
     * 拼购价格区间开始（java精确到毫秒，其他语言都可以精确到秒）
     * @var
     */
    public $pingouPriceStart;
    /**
     * 拼购价格区间结束（java精确到毫秒，其他语言都可以精确到秒）
     * @var
     */
    public $pingouPriceEnd;
    /**
     * 京东品牌code筛选
     * @var
     */
    public $brandCode;
    /**
     * 店铺id筛选
     * @var
     */
    public $shopId;
    /**
     * 1:查询内容商品；其他值过滤掉此入参条件
     * @var
     */
    public $hasContent;
    /**
     * 1:查询有最优惠券商品；其他值过滤掉此入参条件
     * @var
     */
    public $hasBestCoupon;
    /**
     * 联盟id_应用iD_推广位id
     * @var
     */
    public $pid;
    /**
     * 支持出参数据筛选，多个参数以英文逗号分割，目前可用： videoInfo视频信息；hotWords热词；similar相似推荐商品；documentInfo段子信息
     * @var
     */
    public $fields;
    /**
     * 微信京东购物小程序禁售商品过滤规则，入参表示不展示该规则数据，多个参数以英文逗号分割： 2OTC商品；3加油卡；4游戏充值卡；5合约机；6京保养；7虚拟组套；8定制商品
     * @var
     */
    public $forbidTypes;
    /**
     * 店铺评分 支持传入0.0、2.5、3.0、3.5、4.0、4.5、4.9，默认为空表示不筛选评分
     * @var
     */
    public $shopLevelFrom;
    /**
     * 京喜商品类型 1京喜；2京喜工厂直供；3京喜优选（包含3时可在京东APP购买），入参多个值表示或条件查询
     * @var
     */
    public $jxFlags;
    /**
     * 京东配送 1:是；0:不是
     * @var
     */
    public $deliveryType;
    /**
     * 商品类型 g:自营；p:POP
     * @var
     */
    public $owner;

    /**
     * 生成参数数组
     * @return mixed
     */
    function generateParams()
    {
        return [
            'cid1'                 => $this->cid1,
            'cid2'                 => $this->cid2,
            'cid3'                 => $this->cid3,
            'pageIndex'            => $this->pageIndex,
            'pageSize'             => $this->pageSize,
            'skuIds'               => $this->skuIds,
            'keyword'              => $this->keyword,
            'pricefrom'            => $this->pricefrom,
            'priceto'              => $this->priceto,
            'commissionShareStart' => $this->commissionShareStart,
            'commissionShareEnd'   => $this->commissionShareEnd,
            'sortName'             => $this->sortName,
            'sort'                 => $this->sort,
            'isCoupon'             => $this->isCoupon,
            'isPG'                 => $this->isPG,
            'pingouPriceStart'     => $this->pingouPriceStart,
            'pingouPriceEnd'       => $this->pingouPriceEnd,
            'brandCode'            => $this->brandCode,
            'shopId'               => $this->shopId,
            'hasContent'           => $this->hasContent,
            'hasBestCoupon'        => $this->hasBestCoupon,
            'pid'                  => $this->pid,
            'fields'               => $this->fields,
            'forbidTypes'          => $this->forbidTypes,
            'shopLevelFrom'        => $this->shopLevelFrom,
            'jxFlags'              => $this->jxFlags,
            'deliveryType'         => $this->deliveryType,
            'owner'                => $this->owner
        ];
    }

    /**
     * 参数验证
     * @return mixed
     */
    function check()
    {
        // TODO: Implement check() method.
    }
}