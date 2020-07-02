<?php
namespace Home\Controller;
use Think\Controller;
class DiscussController extends CommonController {
    public function index(){
    	$Firm = M('huati'); 
		$count1 = $Firm->count();
		$Page1 = new \Think\nPage($count1,5,'p1');
		$show1 = $Page1->show();
		$list1 = $Firm->limit($Page1->firstRow.','.$Page1->listRows)->select();
		//老师类别
		$teacher='老师';
		$count2 = $Firm->where("hfenlei='{$teacher}'")->count();
		//工程师分类
		$engineer='工程师';
		$count3 = $Firm->where("hfenlei='{$engineer}'")->count();
		//四六级分类
		$sixfour='四六级';
		$count4 = $Firm->where("hfenlei='{$sixfour}'")->count();
		//前端开发
		$qianduan='前端开发';
		$count5 = $Firm->where("hfenlei='{$qianduan}'")->count();
		//后端开发
		$houduan='后端开发';
		$count6 = $Firm->where("hfenlei='{$houduan}'")->count();
		//人工智能
		$intellative='人工智能';
		$count7 = $Firm->where("hfenlei='{$intellative}'")->count();
		//个人讨论部分
		//回复
		
		$userNum=$_SESSION['user_number'];
		$student=M('Students');
		$userinfo=$student->where("sno='$userNum'")->find();
		$this->assign('userinfo',$userinfo);
		
		$this->assign('count1',$count1);
		$this->assign('count2',$count2);
		$this->assign('count3',$count3);
		$this->assign('count4',$count4);
		$this->assign('count5',$count5);
		$this->assign('count6',$count6);
		$this->assign('count7',$count7);
		$this->assign('list1',$list1);// 赋值数据集
		$this->assign('page1',$show1);
        $this->display();
    	
    }
    public function detail(){
    	$a=I('hid');
    	$User=M('reply');
		$count1 = $User->where("rtitleid='{$a}'")->count();
		$Page1 = new \Think\nPage($count1,10,'p1');
		$show1 = $Page1->show();
		$list1 = $User->where("rtitleid='{$a}'")->limit($Page1->firstRow.','.$Page1->listRows)->select();
		
		$f=$list1['htitle'];
		$Firm=M('huati');
		$count= $Firm->count();
		//老师类别
		$teacher='老师';
		$count2 = $Firm->where("hfenlei='{$teacher}'")->count();
		//工程师分类
		$engineer='工程师';
		$count3 = $Firm->where("hfenlei='{$engineer}'")->count();
		//四六级分类
		$sixfour='四六级';
		$count4 = $Firm->where("hfenlei='{$sixfour}'")->count();
		//前端开发
		$qianduan='前端开发';
		$count5 = $Firm->where("hfenlei='{$qianduan}'")->count();
		//后端开发
		$houduan='后端开发';
		$count6 = $Firm->where("hfenlei='{$houduan}'")->count();
		//人工智能
		$intellative='人工智能';
		$count7 = $Firm->where("hfenlei='{$intellative}'")->count();
		$this->assign('count',$count1);
		$this->assign('count2',$count2);
		$this->assign('count3',$count3);
		$this->assign('count4',$count4);
		$this->assign('count5',$count5);
		$this->assign('count6',$count6);
		$this->assign('count7',$count7);
		$this->assign('hid',$a);
		$this->assign('htitle',$f);
		$b= M('huati');
		$res = $b->where("hid='{$a}'")->select();
   		$this->assign('detail',$res);
		
   		$userNum=$_SESSION['user_number'];
		$student=M('Students');
		$userinfo=$student->where("sno='$userNum'")->find();
		$this->assign('userinfo',$userinfo);
		
		$this->assign('list1',$list1);// 赋值数据集
		$this->assign('page1',$show1);
        $this->display();
    }
    public function answer(){
    	$c=M('reply');
    	$b=I('hid');
    	$d=I('htitle');
    	$a=$_REQUEST['textarea'];
    	$data=array();
    	$data['rtitleid']=1;
    	$data['rtitlrname']=$d;
    	$data['replyname']='邓姗';
    	$data['replytime']=time();
    	$data['replyhot']='0';
    	$data['replyinformation']=$a;
    	$data['replypersonid']='3';
    	$result = $c->add($data);
    	if($result){
    		echo '<script>alert("回复成功");location.href="javascript:history.go(-1)"</script>';
    	}
    	else{
    		echo '<script>alert("回复失败");location.href="javascript:history.go(-1)"</script>';
    	}
    	
    }
}