<?php
namespace Home\Controller;
use Think\Controller;
class JobController extends CommonController {
	//构造方法
	public function __construct() {
		parent::__construct();
		if($this->userInfo === false){
			$this->error('请先登录。',U('Index/index'));
		}
		
	}
    public function index(){
    	$Firm = M('firm'); 
		$count1 = $Firm->count();
		$Page1 = new \Think\nPage($count1,5,'p1');
		$show1 = $Page1->show();
		$list1 = $Firm->limit($Page1->firstRow.','.$Page1->listRows)->select();
	
		$userNum=$_SESSION['user_number'];
		$student=M('Students');
		$userinfo=$student->where("sno='$userNum'")->find();
		$this->assign('userinfo',$userinfo);
		
		$this->assign('list1',$list1);// 赋值数据集
		$this->assign('page1',$show1);
        $this->display();
    }
    public function industry(){
    	$Firm = M('industry'); 
		$count1 = $Firm->count();
		$Page1 = new \Think\nPage($count1,5,'p1');
		$show1 = $Page1->show();
		$list1 = $Firm->limit($Page1->firstRow.','.$Page1->listRows)->select();
	
		$userNum=$_SESSION['user_number'];
		$student=M('Students');
		$userinfo=$student->where("sno='$userNum'")->find();
		$this->assign('userinfo',$userinfo);
		
		$this->assign('list1',$list1);// 赋值数据集
		$this->assign('page1',$show1);
        $this->display();
    }
    public function employe(){
    	$Firm = M('imploye'); 
		$count1 = $Firm->count();
		$Page1 = new \Think\nPage($count1,5,'p1');
		$show1 = $Page1->show();
		$list1 = $Firm->limit($Page1->firstRow.','.$Page1->listRows)->select();
	
		$userNum=$_SESSION['user_number'];
		$student=M('Students');
		$userinfo=$student->where("sno='$userNum'")->find();
		$this->assign('userinfo',$userinfo);
		
		$this->assign('list1',$list1);// 赋值数据集
		$this->assign('page1',$show1);
        $this->display();
    	
    }
    public function detail(){
    	$b = M('firm');
   		$a=I('gid');
   		$res = $b->where("gid='{$a}'")->select();
   		
   		$userNum=$_SESSION['user_number'];
		$student=M('Students');
		$userinfo=$student->where("sno='$userNum'")->find();
		$this->assign('userinfo',$userinfo);
		
   		$this->assign('detail',$res);
   		$this->display();
    
    }
 	public function idetail(){
    	$b = M('industry');
   		$a=I('iid');
   		$res = $b->where("iid='{$a}'")->select();
   		
   		$userNum=$_SESSION['user_number'];
		$student=M('Students');
		$userinfo=$student->where("sno='$userNum'")->find();
		$this->assign('userinfo',$userinfo);
		
   		$this->assign('detail',$res);
   		$this->display();
    
    }
	public function mdetail(){
    	$b = M('imploye');
   		$a=I('mid');
   		$res = $b->where("mid='{$a}'")->select();
   		
   		$userNum=$_SESSION['user_number'];
		$student=M('Students');
		$userinfo=$student->where("sno='$userNum'")->find();
		$this->assign('userinfo',$userinfo);
		
   		$this->assign('detail',$res);
   		$this->display();
    
    }
}