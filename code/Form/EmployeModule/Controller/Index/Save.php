<?php
namespace Form\EmployeModule\Controller\Index;

use Magento\Framework\App\Action\Context;
use Form\EmployeModule\Model\Test;

class Save extends \Magento\Framework\App\Action\Action
{
    /**
     * @var Test
     */
    protected $_test;

    public function __construct(
        Context $context,
        Test $test
    ) {
        $this->_test = $test;
        parent::__construct($context);
    }
    public function execute()
    {

        $request_data = $this->getRequest()->getParams();
        //print_r($request_data);
        $data = [
            'empid'=>$request_data['empid'],
            'fname'=>$request_data['fname'],
            'lname'=>$request_data['lname'],
            'email'=>$request_data['email'],
            'company'=>$request_data['company'],
            'department'=>$request_data['department'],
            'occupation'=>$request_data['occupation'],
            'address'=>$request_data['address'],
            'phone'=>$request_data['phone'],
            'doj'=>$request_data['doj'],
            'dob'=>$request_data['dob'],

        ];
        $test = $this->_test;

        // $data = $this->getRequest()->getParams();
        // $test = $this->_test->create();

        //echo '<pre>'; print_r($test->getCollection()->getData());die((__FILE__).'-->'.(__FUNCTION__).'--Line('. (__LINE__).')');

        $test->setData($data);
        $test->save();
         print_r($data);

        if ($test->getId()) {
             $this->messageManager->addSuccessMessage(__('You saved the data.'));
        } else {
            $this->messageManager->addErrorMessage(__('Data was not saved.'));
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('employemodule/index/index');
        return $resultRedirect;
    }
}
