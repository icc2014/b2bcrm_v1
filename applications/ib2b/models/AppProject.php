<?php

class AppProject extends Eloquent
{
	protected $table = 'sys_project';
	protected $list =array();
	
	public static function getProjectList()
	{
		 $list = AppProject::all(array('pid','pno','name_cn','pm_id'));
		 foreach($list as $k=>$v)
		 {
			$list[$k]['pid']=$v->pid;
			$list[$k]['pno']=$v->pno;
			$list[$k]['name_cn']=$v->name_cn;
			$list[$k]['pm_id']=$v->pm_id;
		 }
		 return $list;
	}

	
}