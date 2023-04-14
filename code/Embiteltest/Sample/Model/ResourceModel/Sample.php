<?php
namespace Embiteltest\Sample\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

use Magento\Framework\Model\ResourceModel\Db\Context;




class Sample extends AbstractDb
{

 /**
 * define resource model
 * @var \Magento\Framework\stdlib\DateTime\DateTime
 */

 protected $date;

 /**
  * 
  * @param Context $context
  */

  public function __construct(
    Context $context,
  ){
    parent::__construct($context);
  }

  /**
   * @CodingStandardsIgnoreStart
   */




    protected function _construct()
    {
        //@CodingStandardsIgnoreEnd
        $this->_init('sample', 'sample_id');  
    }
}

?>