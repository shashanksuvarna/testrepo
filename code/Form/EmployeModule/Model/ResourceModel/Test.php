<?php
namespace Form\EmployeModule\Model\ResourceModel;
class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    
      //Define main table
     
    protected function _construct()
    {
        $this->_init('user_login', 'id');  
    }
}