<?php
namespace Embiteltest\Sample\Model;

use Magento\Framework\Model\AbstractModel;

class Sample extends AbstractModel
{
    /**
     * initialisung resource model here
     * @codingStandardsIgnoreStart
     */
    protected function _contruct()
    {
        //@codingStandardsIgnoreEnd
        $this -> _init(\Embiteltest\Sample\Model\ResourceModel\Sample::class);
    }
}