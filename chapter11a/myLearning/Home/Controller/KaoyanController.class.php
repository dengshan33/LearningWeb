<?php
namespace Home\Controller;
use Think\Controller;

class KaoyanController extends CommonController {
	//构造方法
	public function __construct() {
		parent::__construct();
		if($this->userInfo === false){
			$this->error('请先登录。',U('Index/index'));
		}
		
	}
   public function index(){
         $User = M('tjteacher'); // 实例化User对象
         $U=M('tcourse');
         $S=M('kschool');
		$count3 = $User->count();// 查询满足要求的总记录数
		$Page3 = new \Think\nPage($count3,4,'p3');// 实例化分页类 传入总记录数和每页显示的记录数(3)
		$show3 = $Page3->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list3 = $User->limit($Page3->firstRow.','.$Page3->listRows)->select();

		$count2 = $U->count();
		$Page2 = new \Think\nPage($count2,4,'p2');
		$show2 = $Page2->show();
		$list2 = $U->limit($Page2->firstRow.','.$Page2->listRows)->select();
	
		$count1 = $S->count();
		$Page1 = new \Think\nPage($count1,4,'p1');
		$show1 = $Page1->show();
		$list1 = $S->limit($Page1->firstRow.','.$Page1->listRows)->select();
	
		$userNum=$_SESSION['user_number'];
		$student=M('Students');
		$userinfo=$student->where("sno='$userNum'")->find();
		$this->assign('userinfo',$userinfo);
		$this->assign('list3',$list3);// 赋值数据集
		$this->assign('page3',$show3);
			$this->assign('list1',$list1);// 赋值数据集
		$this->assign('page1',$show1);
		$this->assign('list2',$list2);// 赋值数据集
		$this->assign('page2',$show2);
         $this->display();

     }
     
     public function latest(){
     	$U = M('tcourse');
     	 $User = M('tjteacher'); 
     	 
         $S=M('kschool');
     	$count1 = $S->count();
		$Page1 = new \Think\nPage($count1,4,'p1');
		$show1 = $Page1->show();
		$list1 = $S->limit($Page1->firstRow.','.$Page1->listRows)->select();
		$count3 = $User->count();// 查询满足要求的总记录数
		$Page3 = new \Think\nPage($count3,4,'p3');// 实例化分页类 传入总记录数和每页显示的记录数(3)
		$show3 = $Page3->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list3 = $User->limit($Page3->firstRow.','.$Page3->listRows)->select();

		$count2 = $U->count();
		$Page2 = new \Think\nPage($count2,4,'p2');
		$show2 = $Page2->show();
		//$list2 = $U->limit($Page2->firstRow.','.$Page2->listRows)->select();
		
		$list2 = $U->order('tnowtime')->limit($Page2->firstRow.','.$Page2->listRows)->select();
		$userNum=$_SESSION['user_number'];
		$student=M('Students');
		$userinfo=$student->where("sno='$userNum'")->find();
		$this->assign('userinfo',$userinfo);
     	$this->assign('list3',$list3);// 赋值数据集
		$this->assign('page3',$show3);
			$this->assign('list1',$list1);// 赋值数据集
		$this->assign('page1',$show1);
		$this->assign('list2',$list2);// 赋值数据集
		$this->assign('page2',$show2);
		$this->display();
     }
	
      public function hot(){
      	$userNum=$_SESSION['user_number'];
		$student=M('Students');
		$userinfo=$student->where("sno='$userNum'")->find();
		$this->assign('userinfo',$userinfo);
      if(isset($_GET['tid'])){
            $tid = $_GET['tid'];
            $model = M('tcourse');  //实例化模型
            $data = $model->where('tid='.$tid)->find(); //查询数据
            $res = $data->where('thot=thot+1')->save(); //数据更新
            
            $this->display();   //调用视图
        }
      }
      public function teacher(){
      	$teacher= M('tjteacher');
      	$f=M('tcourse');
      	$a=I('jid');
      	$res = $teacher->where("jid='{$a}'")->select();
      	//$b = $res->teacherid;
      	//$c = $f->where("tno='{$b}'")->select();
      	//$this->assign('b',$b);
      	$d=$teacher->where("jid='{$a}'")->getfield('teacherid');
      	$b = $f->where("tno = '{$d}'")->select();
      	
      	$userNum=$_SESSION['user_number'];
		$student=M('Students');
		$userinfo=$student->where("sno='$userNum'")->find();
		$this->assign('userinfo',$userinfo);
      	$this->assign('d',$d);
      	$this->assign('class',$b);
      	$this->assign('res',$res);
      	$this->assign('c',$c);
      	$this->display();
      }
    public function school(){
      	
   		$b = M('kschool');
   		$a=I('kid');
   		$res = $b->where("kid='{$a}'")->select();
   	
   		$userNum=$_SESSION['user_number'];
		$student=M('Students');
		$userinfo=$student->where("sno='$userNum'")->find();
		$this->assign('userinfo',$userinfo);
   		$this->assign('detail',$res);
   		$this->display();
   }

}