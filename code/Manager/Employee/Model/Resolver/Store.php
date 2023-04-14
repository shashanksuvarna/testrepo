<?php
declare(strict_types=1);

namespace Manager\Employee\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

class Store implements ResolverInterface
{
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    )
    {
        $stores = [
            [
                'firstname' => 'hanuman',
                'lastname' => 'suvarna',
                 'email' => 'shasuv@embitel.com',
                 'mobile' => '9876543210', 
            ],
            [
                'firstname' => 'shashank',
                'lastname' => 'suvarna',
                'email' => 'sha@embitel.com',
                'mobile' => '9876543210',
            ],
            [
                'firstname' => 'hanuman',
                'lastname' => 'suvarna',
                 'email' => 'shasuv@embitel.com',
                 'mobile' => '9876543210', 
            ]
            ];
            return[
                'total_count' => count($stores),
                'item' => $stores
            ];
    }
}