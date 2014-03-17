<?php 

class SysFrameController extends BaseController 
{
	public function index()
	{
		return View::make('back_end_v1.sys_frame.index');
	}

}