<?php
namespace Home\Controller;
use Think\Controller;
class EnglishController extends CommonController {
	//构造方法
	public function __construct() {
		parent::__construct();
		if($this->userInfo === false){
			$this->error('请先登录。',U('Index/index'));
		}
		
	}
	public function index(){
		$User = M('tcourse'); // 实例化User对象
  		
  		$a='foursix';
		$count3 = $User->where("tleixing='{$a}'")->count();// 查询满足要求的总记录数
		$Page3 = new \Think\nPage($count3,6,'p3');// 实例化分页类 传入总记录数和每页显示的记录数(3)
		$show3 = $Page3->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list3 = $User->where("tleixing='{$a}'")->limit($Page3->firstRow.','.$Page3->listRows)->select();
		
		$U = M('shuji'); // 实例化User对象
		$count2= $U->count();// 查询满足要求的总记录数
		$Page2= new \Think\nPage($count3,4,'p2');// 实例化分页类 传入总记录数和每页显示的记录数(3)
		$show2 = $Page2->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list2 = $U->limit($Page2->firstRow.','.$Page2->listRows)->select();
		
		$userNum=$_SESSION['user_number'];
		$student=M('Students');
		$userinfo=$student->where("sno='$userNum'")->find();
		$this->assign('userinfo',$userinfo);
		
		$this->assign('list2',$list2);// 赋值数据集
		$this->assign('page2',$show2);
		$this->assign('list3',$list3);// 赋值数据集
		$this->assign('page3',$show3);// 赋值分页输出
		$this->display();
	}
	public function all(){
		$User = M('tcourse'); // 实例化User对象
  		
  		$a='foursix';
		$count3 = $User->where("tleixing='{$a}'")->count();// 查询满足要求的总记录数
		$Page3 = new \Think\nPage($count3,6,'p3');// 实例化分页类 传入总记录数和每页显示的记录数(3)
		$show3 = $Page3->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list3 = $User->where("tleixing='{$a}'")->limit($Page3->firstRow.','.$Page3->listRows)->select();
		
		$userNum=$_SESSION['user_number'];
		$student=M('Students');
		$userinfo=$student->where("sno='$userNum'")->find();
		$this->assign('userinfo',$userinfo);
		
		$this->assign('list3',$list3);// 赋值数据集
		$this->assign('page3',$show3);// 赋值分页输出
		$this->display();
	}
	public function detail(){
		$b = M('tcourse');
   		$a=I('tid');
   		$res = $b->where("tid='{$a}'")->select();
   		
   		$userNum=$_SESSION['user_number'];
		$student=M('Students');
		$userinfo=$student->where("sno='$userNum'")->find();
		$this->assign('userinfo',$userinfo);
		
   		$this->assign('detail',$res);
   		$this->display();
	}
}