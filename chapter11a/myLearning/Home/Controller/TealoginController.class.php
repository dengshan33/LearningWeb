<?php
namespace Home\Controller;
use Org\Net\UploadFile;
use Think\Page;
use Think\Controller;
class TealoginController extends CommonController {
	public function __construct() {
		parent::__construct();
		$allow_action = array( //指定不需要检查登录的方法列表
			'tealogin','captcha','tearegister'
		);
		if($this->userInfo === false && !in_array(ACTION_NAME,$allow_action)){
			$this->error('请进入登录入口。',U('Index/index'));
		}
	}
	
	public function tealogin(){
		if (IS_POST) {
			//判断验证码
			$this->checkVerify(I('post.captcha'));
			//判断用户名和密码
			$num = I('post.numb','','trim');
			$pwd = I('post.password','','trim');
			$rst = D('teachers')->checkUserT($num,$pwd);
			if($rst!==true){
				$this->error($rst);
			}
			$this->success('登录成功，请稍后',U('Index/index'));
			return;
		}
		$this->display();
	}
	public function tearegister(){
		if(IS_POST){
			$this->checkVerify(I('post.captcha'));
			$rst = $this->create('teachers','add');
			if($rst===false){
				$this->error($rst->getError());
			}
			$this->success('用户注册成功',U('Index/index'));
			//注册后自动登录
			$num = I('post.tno','','trim');
			$pwd = I('post.tpwd','','trim');
			D('teachers')->checkUserT($num,$pwd);
			return ;
		}
		$this->display();
	}
	//生成验证码
	public function captcha() {
		$verify = new \Think\Verify();
		return $verify->entry();
	}
	//检查验证码
	private function checkVerify($code, $id = '') {
		$verify = new \Think\Verify();
		$rst = $verify->check($code, $id);
		if($rst!==true){
			$this->error('验证码输入有误');
		}
	}
//退出
	public function logout(){
		session('[destroy]');
		$this->success('退出成功',U('Index/index'));
	}
}