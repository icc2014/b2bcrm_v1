<?php 

class SysCodeController extends BaseController 
{
	protected $layout = 'back_end_v1.sys_layouts.main';
	
	
	public function index()
	{
		/*得到用户列表*/
		//$cname_list = AppCustomer::getCustomerList();
		
		//得到项目ID
		$project_list = AppProject::getProjectList();
		
		
		
		/*得到礼品列表*/
		//$present_list = AppPresent::getCustomerList();
		
		return View::make('back_end_v1.sys_codes.index')->withWelcome('欢迎使用 B2B-iCRM-WX v1.0')->with('projectList',$project_list)->with('adminId','3');
	}
	
	//添加数据
	public function add()
	{
		
		
		$title = Input::get('title');
		$user = new AppCodes;
		$user->codes = $title;
		$user->save();
  		return Redirect::to('codes');

	
	}
	
	//
	public function create()
	{
		
		$code= App::make('appCodesServices');
		echo $code->create_guid();
		
		exit;
	
	}
	
	
	
	
	
	
}