<?php
namespace Form\EmployeModule\Model;
use Magento\Framework\Model\AbstractModel;
class Test extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Form\EmployeModule\Model\ResourceModel\Test');
    }
}
