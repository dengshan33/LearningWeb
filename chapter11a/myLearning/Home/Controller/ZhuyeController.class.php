<?php
namespace Home\Controller;
use Think\Controller;

class ZhuyeController extends CommonController {
	//构造方法
	public function __construct() {
		parent::__construct();
		if($this->userInfo === false){
			$this->error('请先登录。',U('Index/index'));
		}
		
	}
	public function index(){
		$userNum=$_SESSION['user_number'];
		$student=M('Students');
		$userinfo=$student->where("sno='$userNum'")->find();
		$this->assign('userinfo',$userinfo);
		$this->display();
	}
}