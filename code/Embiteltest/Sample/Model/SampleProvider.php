<?php

namespace Embiteltest\Sample\Model;

use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Ui\DataProvider\AbstractDataProvider;
use Embiteltest\Sample\Model\ResourceModel\Sample\CollectionFactory;



class SampleProvider extends AbstractDataProvider
{
    /**
     * @var DataPersistorInterface
     */

     protected $dataPersistor;

     /**
      * @var array
      */

      protected $loadedData;

      public function __construct(
        $name,
        $primaryFeildName,
        $requestFeildName,
        CollectionFactory $sampleCollectionFactory,
        array $meta =[],
        array $data =[]
      )
      {
        $this->collection = $sampleCollectionFactory->create();
        parent::__construct($name,$primaryFeildName,$requestFeildName,$meta,$data);
      }

      public function getData()
      {
        $this->loadedData = [];
        return $this->loadedData;
      }
}

?>