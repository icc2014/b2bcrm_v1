<?php 

class SysMainController extends BaseController 
{
	protected $layout = 'back_end_v1.sys_layouts.main';
	public function index()
	{
		return View::make('back_end_v1.sys_main.index')->withWelcome('欢迎使用 B2B-iCRM-WX v1.0');
	}

}