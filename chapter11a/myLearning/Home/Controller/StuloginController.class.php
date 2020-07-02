<?php
namespace Home\Controller;
use Org\Net\UploadFile;
use Think\Page;
use Think\Controller;
class StuloginController extends CommonController {
	public function __construct() {
		parent::__construct();
		$allow_action = array( //指定不需要检查登录的方法列表
			'stulogin','captcha','sturegister'
		);
		if($this->userInfo === false && !in_array(ACTION_NAME,$allow_action)){
			$this->error('请进入登录入口。',U('Index/index'));
		}
	}
	
	public function stulogin(){
		header('Content-Type:text/html; charset=utf-8');
		if (IS_POST) {
			//判断验证码
			$this->checkVerify(I('post.captcha'));
			//判断用户名和密码
			$num = I('post.numb','','trim');
			$pwd = I('post.password','','trim');
			$rst = D('students')->checkUser($num,$pwd);
			if($rst!==true){
				$this->error($rst);
			}
			echo "<script>alert('登录成功!');window.location='".U('Zhuye/index')."'</script>";
			//$this->success('登录成功，请稍后',U('Zhuye/index'));
			return;
		}
		$this->display();
	}
	public function sturegister(){
		header('Content-Type:text/html; charset=utf-8');
		if(IS_POST){
			$this->checkVerify(I('post.captcha'));
			$rst = $this->create('students','add');
			if($rst===false){
				$this->error($rst->getError());
			}
			echo "<script>alert('注册成功，请登录!');window.location='".U('Index/index')."'</script>";
			//$this->success('用户注册成功',U('Stusercenter/index'));
			//注册后自动登录
			//$num = I('post.sno','','trim');
			//$pwd = I('post.spwd','','trim');
			//D('students')->checkUser($num,$pwd);
			//return ;
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
		header('Content-Type:text/html; charset=utf-8');
		$verify = new \Think\Verify();
		$rst = $verify->check($code, $id);
		if($rst!==true){
			//echo "<script>alert('验证码输入有误!')</script>";
			$this->error('验证码输入有误');
		}
	}
//退出
	public function logout(){
		header('Content-Type:text/html; charset=utf-8');
		session('[destroy]');
		echo "<script>alert('退出成功!');window.location='".U('Index/index')."'</script>";
		//$this->success('退出成功',U('Index/index'));
	}
}