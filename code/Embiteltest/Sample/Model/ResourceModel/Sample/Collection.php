<?php
namespace Embiteltest\Sample\Model\ResourceModel\Sample;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     * @codingStandaradsIgnoreStart
     */

    protected $_idFeildName="id";


    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        //@codingStandaradsIgnoreEnd

        $this->_init(

             \Embiteltest\Sample\Model\Sample::class,
             \Embiteltest\Sample\Model\ResourceModel\Sample::class,

            // 'Embiteltest\Sample\Model\Sample',
            // 'Embiteltest\Sample\Model\ResourceModel\Sample',
        );
    }
}