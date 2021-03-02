<?php


namespace MaxZhang\JttSdk\Request\Feature;


use MaxZhang\JttSdk\JttRequest;

/**
 * 京东秒杀
 * Class SpikeRequest
 * @package MaxZhang\JttSdk\Request\Feature
 */
class SpikeRequest extends JttRequest
{
    protected $apiMethodName = 'sekill';
    protected $version = 'v3';

    /**
     * 当前时段（秒杀时间段：0、6、8、10、12、14、16、18、20、22、24（0点返回当日所有商品，24点返回次日所有商品，可用24点构建第二天的预告清单）
     * @var
     */
    public $h;
    /**
     * 分页页码
     * @var int
     */
    public $page = 1;
    /**
     * 单页面显示条数
     * @var int
     */
    public $num = 10;

    /**
     * 生成参数数组
     * @return array
     */
    function generateParams():array
    {
        return [
            'h'    => $this->h,
            'page' => $this->page,
            'num'  => $this->num
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