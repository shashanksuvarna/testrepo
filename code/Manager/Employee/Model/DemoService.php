<?php

namespace Manager\Employee\Model;

use Magento\Framework\App\Action\Context;
use \Vendor\Module\Api\getCustomInterface;
use Magento\Customer\Model\GroupFactory;

class DemoService implements \Manager\Employee\Api\TestActionManagementInterface
{

    // protected $_group;

    // public function __construct(
    //     GroupFactory $group)
    // {
    //     $this->_group = $group;
    // }


    public function getProfile()
    {
        return "hello demo";
    }

    public function getCustomerList()
    {
    return [[
            'firstname' => 'shashank',
            'lastname' => 'suvarna',
            'email' => 'sha@embitel.com',
            'mobile' => '9876543210',
            'city' => 'indiranagara',
            'state' => 'karnataka',
            'country' => 'india'
            ],
            [
            'firstname' => 'shashank suvarna',
            'lastname' => 'bangalore',
            'email' => 'shashaa@embitel.com',
            'mobile' => '9876543210',
            'city' => 'indiranagara',
            'state' => 'karnataka',
            'country' => 'india'
            ],
            [
            'firstname' => 'hanuman',
           'lastname' => 'suvarna',
            'email' => 'shasuv@embitel.com',
            'mobile' => '9876543210',
            'city' => 'indiranagara',
            'state' => 'karnataka',
            'country' => 'india'
           ]];
    }

  

    // public function getCustomerGroup($userData)
    // {
    //     try{

    //         // $data=[
    //         //     'customer_group_code' => $userData['groupName'],
    //         //     'tax_class_id' => 3
    //         // ];

    //         // $group = $this -> _group -> create();
    //         // $group -> setData($data);
    //         // $group -> save();

    //         // $dataArray=[
    //         //     'group_id' => $group -> getCustomerGroupId(),
    //         //     'group_name' => $group -> getCustomerGroupCode()
    //         // ];

    //         // return $userData['groupName'];

    //         return "skadg";


            


    //     } catch (\Throwable $th)
    //     {
    //         $th -> getMessage();
    //     }

    // }
}