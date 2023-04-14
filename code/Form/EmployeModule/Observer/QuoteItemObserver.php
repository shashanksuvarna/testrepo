<?php
 
namespace Form\EmployeModule\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\RequestInterface;

class QuoteItemObserver implements ObserverInterface
{
  
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        try {
           

            $item=$observer->getEvent()->getData('quote_item');
            $item=($item->getParentItem()?$item->getParentItem():$item);
            //here our custom price goes
            $customPrice=100;
            $item->setCustomPrice($customPrice);
            $item->setOriginalCustomPrice($customPrice);
            $item->getProduct()->setIsSuperMode(true);


        } catch (\Throwable $th) {
            $th->getMessage();
        }
    }

    public function getQuoteItem()
    {
        // $sql=$this->connection->select()
        // ->from($this->resource->getTableName('catalog_category_entity',['path']));

        // return $this->connection->fetchCol($sql);

    }
}