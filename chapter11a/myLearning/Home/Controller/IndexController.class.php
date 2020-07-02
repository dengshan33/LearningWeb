<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
	
	public function __construct() {
		parent::__construct();
		$allow_action = array( //指定不需要检查登录的方法列表
			'index',
		);
	}
    public function index(){
    	
    	$this->display();
    }
   
}