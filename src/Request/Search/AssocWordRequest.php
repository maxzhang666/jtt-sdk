<?php


namespace MaxZhang\JttSdk\Request\Search;


use MaxZhang\JttSdk\Exceptions\InvalidArgumentException;
use MaxZhang\JttSdk\JttRequest;

/**
 * 联想词
 * Class AssocWordRequest
 * @package MaxZhang\JttSdk\Request\Search
 */
class AssocWordRequest extends JttRequest
{
    protected $apiMethodName = 'assoc_word';


    /**
     * 关键词
     * @var string
     */
    public $word;

    /**
     * 生成参数数组
     * @return array
     */
    function generateParams():array
    {
        return ['word' => $this->word];
    }

    /**
     * 参数验证
     * @return void
     * @throws InvalidArgumentException
     */
    function check()
    {
        if (empty($this->word)) {
            throw new InvalidArgumentException('word is required!');
        }
    }
}