<?php
namespace Form\EmployeModule\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Form\EmployeModule\Model\Test',
            'Form\EmployeModule\Model\ResourceModel\Test'
        );
    }
}