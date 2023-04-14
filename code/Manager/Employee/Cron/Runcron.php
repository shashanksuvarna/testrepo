<?php

namespace Manager\Employee\Cron;

class Runcron
{

	public function cronexecute()
	{
        $currentDate=date("Ymd_his"); //getting current date nd time
        $fileName='customer'.$currentDate.'.csv';
        $userInfo=array('frstname','lastname','email','mobile');
        
        $userInfo=array_combine($userInfo,$userInfo);
         $info=[];
         $info[]=$userInfo;
         $info[]=[
            'firstname' => 'hanuman',
            'lastname' => 'suvarna',
             'email' => 'shasuv@embitel.com',
             'mobile' => '9876543210', 
         ];

         $info[]=[
            'firstname' => 'shashank',
            'lastname' => 'suvarna',
             'email' => 'shasuv@embitel.com',
             'mobile' => '9876543210', 
         ];

         $file=fopen('/var/www/html/freshtest/magento2/var/export/'.$fileName,'w');

         foreach ($info as $data)
         {
            fputcsv($file,$data);
         }
    }
}
