<?php
namespace Home\Controller;
use Org\Net\UploadFile;
use Think\Page;
use Think\Controller;
class StusercenterController extends CommonController {
	//构造方法
	public function __construct() {
		parent::__construct();
		if($this->userInfo === false){
			$this->error('请先登录。',U('Index/index'));
		}
		
	}
	//个人中心
	public function index(){
		$userNum=$_SESSION['user_number'];
		$student=M('Students');
		$userinfo=$student->where("sno='$userNum'")->find();
		$this->assign('userinfo',$userinfo);
		$this->display();
	}
	
	
    public function changepwdtest(){//修改密码
    	header('Content-Type:text/html;charset=utf-8');
    	
    	$usernum=$_SESSION['user_number'];
    	$old=trim($_POST['old']);
    	$new=trim($_POST['new1']);
    	$new1=trim($_POST['new2']);
    	
	    $Member=M('Students');
	    $chack['sno']=$usernum;
	    $sql=$Member->where($chack)->getField('spwd');
	    $salt=$Member->where($chack)->getField('salt');
	    $Old=md5(md5($old).$salt);
	    if($sql){
		    if($sql==$Old){
		    	if($new==$new1){
		    		$data['spwd']=md5(md5($new).$salt);
		    		$result=$Member->where($chack)->save($data);//更改密码
		    		if($result){
		    			echo "<script>alert('修改成功，请重新登录!');window.location='".U('Index/index')."'</script>";;
		    		}else{
		    			$this->error('更改失败');
		    		}
		    	}else{
		    		$this->error('两次密码不一致！');
		    	}
		    		
		    }else{
		    	$this->error('原密码错误');
		    }
	    }else{
	    	$this->error('用户不存在');
	    }
    }
    
//修改个人信息
	public function changeinfo(){
		header('Content-Type:text/html; charset=utf-8');
    	$student = M('Students');
    	$num=$_SESSION['user_number'];
    	$userinfo=$student->where("sno='$num'")->find();
		
    	if ($_FILES['fpic']){
    		
    		//文件上传配置
    		$upload = new UploadFile();// 实例化上传类
    		$upload->maxSize  = 1000000 ;// 设置附件上传大小
    		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    		$upload->savePath =  './Public/Uploads/stuPic/';// 设置附件上传目录
    		$upload->saveRule = 'time';
    			
    		//开始上传
    		if(!$upload->upload()){
    			$this->error($upload->getErrorMsg());
    		}else{
    			$info1 =  $upload->getUploadFileInfo();
    		}
    		
    		$info['semail']=$_POST['semail'];
    		$info['sphone']=$_POST['sphone'];
    		$info['scolle']=$_POST['scolle'];
    		$info['smajor']=$_POST['smajor'];
    		$info['spic'] =$info1[0]['savename'];
    		$info['syear']=$_POST['syear'];
    		$info['sclass']=$_POST['sclass'];
    		
    		$chack['sno']=$num;
    		$result=$student->where($chack)->save($info);//更改信息
    		//$result=$Findthings->add($info);
    		if ($result){
    			echo "<script>alert('修改成功!');window.location='".U('Stusercenter/changeinfo')."'</script>";;
    		}else{
    			
    			$this->error('修改失败');
    		}
    			  		
    		
    	}
    	$this->assign('userinfo',$userinfo);
    	$this->display();
	}
    //我的老师课程
	public function mycourse(){
   			
   		$num=$_SESSION['user_number'];
    	$cour=M('Course');//课程信息表
    	$course=M('Selectcour');//选课表
    	
    	
    	$count=$course->where("sstuno='$num'")->count();
    	$Page =new Page($count,3);//分页
    	
		$list_cour = $course->join('as scour left join m_course as courinfo on scour.sno = courinfo.cno') 
		->field('courinfo.cno,courinfo.cname,courinfo.cprofile,courinfo.cpic,scour.sid') 
		->where("scour.sstuno='$num'") 
		->limit($Page->firstRow.','.$Page->listRows)
		->order('scour.sid desc')
		//->group('cours.cid') 
		->select();
		
	    $Page->setConfig('header', '条记录');
	    $Page->setConfig('prev', '上一页');
	    $Page->setConfig('next', '下一页');
	    $Page->setConfig('first', '第一页');
	    $Page->setConfig('last', '最后一页');
	     
	    $show=$Page->show();
	    
	   	$this->assign('cours',$list_cour);
	  
	    $this->assign('page',$show);
	    $this->display();
   }
   //我的推荐课程
	public function tjcourse(){
   			
   		$num=$_SESSION['user_number'];
    	$cour=M('Tcourse');//推荐课程信息表
    	$course=M('Selectcourtj');//推荐选课表
    	
    	
    	$count=$course->where("sstuno='$num'")->count();
    	$Page =new Page($count,3);//分页
    	//多表查询
		$list_cour = $course->join('as scour left join m_tcourse as courinfo on scour.sno = courinfo.tno') 
		->field('courinfo.tno,courinfo.tname,courinfo.tprofile,courinfo.tpic,scour.sid') 
		->where("scour.sstuno='$num'") 
		->limit($Page->firstRow.','.$Page->listRows)
		->order('scour.sid desc')
		//->group('cours.cid') 
		->select();
		
	    $Page->setConfig('header', '条记录');
	    $Page->setConfig('prev', '上一页');
	    $Page->setConfig('next', '下一页');
	    $Page->setConfig('first', '第一页');
	    $Page->setConfig('last', '最后一页');
	     
	    $show=$Page->show();
	    
	   	$this->assign('cours',$list_cour);
	  
	    $this->assign('page',$show);
	    $this->display();
   }
   //老师课程详情
	public function content(){
    	
    	$cono=I('b'); //课程号   	
    	$userNum=$_SESSION['user_number'];
    	
    	//$cou=M('Courseq');//选课表
    	$cour=M('Course');//课程信息表
    	$cou=M('Selectcour');//选课表
		$stu=M('Students');//学生信息表
		$tea=M('Teachers');//老师信息表
		
		$sql=$cour->where("cno='$cono'")->getField('ctno');//取得老师工号
		$teainfo=$tea->where("tno='$sql'")->find();//获取老师信息
		
    	$cournum=$cour->where("cno='$cono'")->find();//取得课程信息
    	$count=$cou->where("sno='$cono'")->count();//统计选课数量
		//$scour=$cou->where("cno='$cono'")->find();//取得选课信息
		
	    $Page1 =new Page($count,5);//分页
    	

		$list_stud = $cou->join('as cours left join m_students as students on cours.sstuno = students.sno') 
		->field('students.sno,students.sname,students.ssex,students.scolle,students.spic,cours.sid') 
		->where("cours.sno='$cono'") 
		->limit($Page1->firstRow.','.$Page1->listRows)
		->order('cours.sid desc')
		//->group('cours.cid') 
		->select();
		
	    $Page1->setConfig('header', '条记录');
	    $Page1->setConfig('prev', '上一页');
	    $Page1->setConfig('next', '下一页');
	    $Page1->setConfig('first', '第一页');
	    $Page1->setConfig('last', '最后一页');
	     
	    $show1=$Page1->show();
	    
		$this->assign('teacher',$teainfo);
    	$this->assign('cour',$cournum);
    	$this->assign('count',$count);
    	$this->assign('stu',$list_stud);
    	$this->assign('page',$show1);
    	
    	$this->display();
    }
//推荐课程详情
	public function contentTjc(){
    	
    	$cono=I('b'); //课程号   	
    	$userNum=$_SESSION['user_number'];
    	
    	//$cou=M('Courseq');//选课表
    	$cour=M('Tcourse');//课程信息表
    	$cou=M('Selectcourtj');//选课表
		$stu=M('Students');//学生信息表
		//$tea=M('Teachers');//老师信息表
		
		//$sql=$cour->where("cno='$cono'")->getField('ctno');//取得老师工号
		//$teainfo=$tea->where("tno='$sql'")->find();//获取老师信息
		
    	$cournum=$cour->where("tno='$cono'")->find();//取得课程信息
    	$count=$cou->where("sno='$cono'")->count();//统计选课数量
		
		
	    $Page1 =new Page($count,5);//分页
    	

		$list_stud = $cou->join('as cours left join m_students as students on cours.sstuno = students.sno') 
		->field('students.sno,students.sname,students.ssex,students.scolle,students.spic,cours.sid') 
		->where("cours.sno='$cono'") 
		->limit($Page1->firstRow.','.$Page1->listRows)
		->order('cours.sid desc')
		//->group('cours.cid') 
		->select();
		
	    $Page1->setConfig('header', '条记录');
	    $Page1->setConfig('prev', '上一页');
	    $Page1->setConfig('next', '下一页');
	    $Page1->setConfig('first', '第一页');
	    $Page1->setConfig('last', '最后一页');
	     
	    $show1=$Page1->show();
	    
		//$this->assign('teacher',$teainfo);
    	$this->assign('cour',$cournum);
    	$this->assign('count',$count);
    	$this->assign('stu',$list_stud);
    	$this->assign('page',$show1);
    	
    	$this->display();
    }
 //我的课程收藏
	public function mycollect(){
   			
   		$num=$_SESSION['user_number'];
    	$cour=M('Course');//课程信息表
    	$collect=M('Rcollect');
    	
    	//$where=array('rtype'=>'0');
    	$count=$collect->where("rno='$num'")->count();
    	$Page =new Page($count,6);//分页
    	
		$list_cour = $collect->join('as scour left join m_course as courinfo on scour.ridentify = courinfo.cno') 
		->field('courinfo.cno,courinfo.cname,courinfo.cprofile,courinfo.cpic,scour.rid,scour.rtime') 
		->where("scour.rno='$num'") 
		->limit($Page->firstRow.','.$Page->listRows)
		->order('scour.rid desc')
		//->group('cours.cid') 
		->select();
		
	    $Page->setConfig('header', '条记录');
	    $Page->setConfig('prev', '上一页');
	    $Page->setConfig('next', '下一页');
	    $Page->setConfig('first', '第一页');
	    $Page->setConfig('last', '最后一页');
	     
	    $show=$Page->show();
	    
	   	$this->assign('cours',$list_cour);
	  
	    $this->assign('page',$show);
	    $this->display();
   }
   
//我的推荐收藏
	public function mycollecttj(){
   			
   		$num=$_SESSION['user_number'];
    	$cour=M('Tcourse');//课程信息表
    	$collect=M('Rcollecttj');
    	
    	//$where=array('rtype'=>'0');
    	$count=$collect->where("rno='$num'")->count();
    	$Page =new Page($count,6);//分页
    	
		$list_cour = $collect->join('as scour left join m_tcourse as courinfo on scour.ridentify = courinfo.tno') 
		->field('courinfo.tno,courinfo.tname,courinfo.tprofile,courinfo.tpic,scour.rid,scour.rtime') 
		->where("scour.rno='$num'") 
		->limit($Page->firstRow.','.$Page->listRows)
		->order('scour.rid desc')
		//->group('cours.cid') 
		->select();
		
	    $Page->setConfig('header', '条记录');
	    $Page->setConfig('prev', '上一页');
	    $Page->setConfig('next', '下一页');
	    $Page->setConfig('first', '第一页');
	    $Page->setConfig('last', '最后一页');
	     
	    $show=$Page->show();
	    
	   	$this->assign('cours',$list_cour);
	  
	    $this->assign('page',$show);
	    $this->display();
   }

	
	//推荐课程选课
	public function addcoursetj(){
		header('Content-Type:text/html; charset=utf-8');
    	$Add = M('Selectcourtj');
   		$num=$_SESSION['user_number'];	
    	$ids = rtrim($_GET['s'],',');	
    	//$ids=I('s');
        $c['sstuno']=$num;
        $a['sno'] = $ids;
		$a['_complex'] = $c;
        $aad=$Add->where($a)->where($c)->find();//判断是否已经选过
        //$aa=$Add->where($ids)->find();
        if($aad){
        	echo "<script>alert('该课程已选!');window.history.go(-1)</script>";
    		
        	//$this->error('该课程已选');
        }else{
        	$info['sno']=$ids;
    		$info['sstuno']=$num;
    		$result=$Add->add($info);//添加信息
			if ($result){
				echo "<script>alert('选课成功!');window.history.go(-1)</script>";
    			//$this->success('选课成功');
    		}else{
    			//$this->error('选课失败');
    			echo "<script>alert('选课失败!');window.history.go(-1)</script>";
    		}
        }
    	
	}
	//推荐课程收藏
	public function addcollecttj(){
		header('Content-Type:text/html; charset=utf-8');
    	$Add = M('Rcollecttj');
   		$num=$_SESSION['user_number'];	
    	$ids = rtrim($_GET['s'],',');	
    	//$ids=I('s');
        $c['rno']=$num;
        $a['ridentify'] = $ids;
		$a['_complex'] = $c;
        $aad=$Add->where($a)->where($c)->find();//判断是否已经收藏
        //$aa=$Add->where($ids)->find();
        if($aad){
        	//$this->error('该课程已收藏');
        	echo "<script>alert('该课程已收藏!');window.history.go(-1)</script>";
        }else{
        	$info['ridentify']=$ids;
    		$info['rno']=$num;
    		$result=$Add->add($info);//添加信息
			if ($result){
    			//$this->success('收藏成功');
    			echo "<script>alert('收藏成功!');window.history.go(-1)</script>";
    		}else{
    			//$this->error('收藏失败');
    			echo "<script>alert('收藏失败!');window.history.go(-1)</script>";
    		}
        }
    	
	}
	
   //退课
   public function deleteCour(){
  		header('Content-Type:text/html;charset=utf-8');
    	$Liuyan=M('Selectcour');
    	$ids = rtrim($_GET['sid'],',');
    	if ($Liuyan->where('sid in('.$ids.')')->delete()){
    		echo "<script>alert('退课成功!');window.location='".U('Stusercenter/mycourse')."'</script>";
    		//$this->success('退课成功，请稍后',U('Stusercenter/mycourse'));
    		//$this->success('退课成功，请稍后');
    	}else{
    		echo "<script>alert('退课失败!')</script>";
    	}
   }
 	public function deleteCourtj(){
  		header('Content-Type:text/html;charset=utf-8');
    	$Liuyan=M('Selectcourtj');
    	$ids = rtrim($_GET['sid'],',');
    	if ($Liuyan->where('sid in('.$ids.')')->delete()){
    		echo "<script>alert('退课成功!');window.location='".U('Stusercenter/tjcourse')."'</script>";
    		//$this->success('退课成功，请稍后',U('Stusercenter/mycourse'));
    		//$this->success('退课成功，请稍后');
    	}else{
    		echo "<script>alert('退课失败!')</script>";
    	}
   }
   
   
   //
	
	
	
    
   
	
}