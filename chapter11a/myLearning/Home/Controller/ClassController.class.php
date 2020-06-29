<?php
namespace Home\Controller;
use Think\Controller;

class ClassController extends CommonController {
	//构造方法
	public function __construct() {
		parent::__construct();
		if($this->userInfo === false){
			$this->error('请先登录。',U('Index/index'));
		}
		
	}
  public function index(){
  	//猜你喜欢的内容进行选择查询在分页显示
  		$User = M('tcourse'); // 实例化User对象
  		
  		$a='xihuan';
		$count3 = $User->where("tleixing='{$a}'")->count();// 查询满足要求的总记录数
		$Page3 = new \Think\nPage($count3,4,'p3');// 实例化分页类 传入总记录数和每页显示的记录数(3)
		$show3 = $Page3->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list3 = $User->where("tleixing='{$a}'")->limit($Page3->firstRow.','.$Page3->listRows)->select();
		
		
		$b='jinrong';
		$count1 = $User->where("tleixing='{$b}'")->count();
		$Page1 = new \Think\nPage($count1,4,'p1');
		$show1 = $Page1->show();
		$list1 = $User->where("tleixing='{$b}'")->limit($Page1->firstRow.','.$Page1->listRows)->select();
	
		$c= 'yingyu';
		$count2 = $User->where("tleixing='{$c}'")->count();
		$Page2 = new \Think\nPage($count2,4,'p2');
		$show2 = $Page2->show();
		$list2 = $User->where("tleixing='{$c}'")->limit($Page2->firstRow.','.$Page2->listRows)->select();
	
		$userNum=$_SESSION['user_number'];
		$student=M('Students');
		$userinfo=$student->where("sno='$userNum'")->find();
		$this->assign('userinfo',$userinfo);
		
		$this->assign('list3',$list3);// 赋值数据集
		$this->assign('page3',$show3);// 赋值分页输出
		$this->assign('list1',$list1);// 赋值数据集
		$this->assign('page1',$show1);
		$this->assign('list2',$list2);// 赋值数据集
		$this->assign('page2',$show2);
		$this->display(); // 输出模板
    }
  public function detail(){
   	$b = M('tcourse');
   	$a=I('tid');
   	$res = $b->where("tno='{$a}'")->select();
   	
   	$userNum=$_SESSION['user_number'];
		$student=M('Students');
		$userinfo=$student->where("sno='$userNum'")->find();
		$this->assign('userinfo',$userinfo);
		
   	$this->assign('detail',$res);
   	$this->display();
  }

}