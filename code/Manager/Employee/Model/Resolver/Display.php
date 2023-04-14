<?php


namespace Manager\Employee\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Customer\Model\GroupFactory;

class Display implements ResolverInterface
{
    protected $_group;
    public function __construct(
        GroupFactory $group
    ){
        $this->_group=$group;
    }

    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value=null,
        array $args=null
    )
    {
        try{
            $data_fetch=[
                'customer_group_code'=>$args['input']['groupName'],
                'tax_class_id'=> 69
            ];
            $group = $this->_group->create();
            $group->setData($data_fetch);
            $group->save();

            return[
           'groupName'=>$args['input']['groupName']
             ];
            
        }catch(\Throwable $th){
            $th->getMessage();
        }
    }
}
