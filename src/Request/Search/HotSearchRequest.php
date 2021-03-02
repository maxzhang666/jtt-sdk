<?php


namespace MaxZhang\JttSdk\Request\Search;


use MaxZhang\JttSdk\JttRequest;

/**
 * 热搜词
 * Class HotSearchRequest
 * @package MaxZhang\JttSdk\Request\Search
 */
class HotSearchRequest extends JttRequest
{

    protected $apiMethodName = 'hot_search';


    /**
     * 生成参数数组
     * @return array
     */
    function generateParams():array
    {
        return [];
    }

    /**
     * 参数验证
     * @return void
     */
    function check()
    {

    }
}