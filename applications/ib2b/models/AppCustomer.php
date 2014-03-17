<?php

class AppCustomer extends Eloquent
{
	protected $table = 'sys_customer';
	protected $list =array();
	
	public static function getCustomerList()
	{
		 $list = AppCustomer::all(array('buid','name_cn'));
		 foreach($list as $k=>$v)
		 {
			$list[$k]['id']=$v->buid;
			$list[$k]['name_cn']=$v->name_cn;
				
		 }
		 return $list;
	}

	
}