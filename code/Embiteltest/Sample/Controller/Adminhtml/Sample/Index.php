<?php

namespace Embiteltest\Sample\Controller\Adminhtml\Sample;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\Model\View\Result\ForwardFactory;

class Index extends Action implements HttpGetActionInterface{

    /**
     * @see _isAllowed()
     */

     const ACTION_RESOURCE = 'Embiteltest_Sample::sample';

     /**
      * @var Resgistry
      */

      protected $coreRegistry;

      /**
       * @var PageFactory
       */

       protected $resultPageFactory;

       /**
        * @var ForwardFactory
        */

        protected $resultForwardFactory;

        /**
         * @param Registry $registry
         * @param PageFactory $resultPageFactory
         * @param ForwardFactory $resultForwardFactory
         * @param Context $context
         */

         public function __construct(
            Registry $registry,
            PageFactory $resultPageFactory,
            ForwardFactory $resultForwardFactory,
            Context $context
         )
         {
            $this->coreRegistry   =$registry;
            $this->resultPageFactory = $resultPageFactory;
            $this->resultForwardFactory = $resultForwardFactory;
            parent::__construct($context);
         }

         /**
          * @return \Magento\Framework\View\Result\Page
          */

          public function execute()
          {
            //die ("dv");
            $resultPage = $this->resultPageFactory ->create();
            $resultPage -> setActiveMenu('Embiteltest_Sample::sample');
            $resultPage -> addBreadcrumb(__('New Sample'),__('New Sample'));
            $resultPage -> getConfig()->getTitle()->prepend(__('New Sample'));
            return $resultPage;
          }
}

?>
