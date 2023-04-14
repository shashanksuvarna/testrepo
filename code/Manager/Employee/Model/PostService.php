<?php

namespace Manager\Employee\Model;

use Magento\Framework\App\Action\Context;
use \Vendor\Module\Api\getCustomInterface;
use Magento\Customer\Model\GroupFactory;


class PostService implements  \Manager\Employee\Api\Post
 {

    protected $_group;

    public function __construct(
        GroupFactory $group)
    {
        $this->_group = $group;
    }

   /**
     * set Data
     * 
     * @param string[] $userInfo
     * @return array
     */
    

   public function getCustomerGroup($userInfo){

 
try{
    $data=[
        'customer_group_code'=>$userInfo['groupName'],
        'tax_class_id'=>3
    ];

    $group=$this->_group->create();
    $group->setData($data);
    $group->save();


    $data_info=[
        'group_id'=>$group->getCustomerGroupId(),
        'group_name'=>$group->getCustomerGroupCode()
    ];

    return $userInfo['groupName'];
    
    // return "hii";
}
    catch (\Throwable $th)
    {
        $th->getmessage();
    }      
       

    }
 }