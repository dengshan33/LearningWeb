<?php
namespace Admin\Controller;
use Think\Controller;
use Org\Net\UploadFile;
class PubController extends Controller{
    /**
     * 推荐学校
     */
    public function school(){
    	header('Content-Type:text/html;charset=utf-8');
        $model = M('Kschool');   //实力化模型类
        $data = $model->select(); //查询所有数据
        $count = $model->count();//计算所有记录数
        $Page = new \Think\Page($count,10);//实例化分页类，传入总记录数和每页显示的总记录数

        $show = $Page->show();//分页显示输出
        $list = $model->limit($Page->firstRow.','.$Page->listRows)->order('kid desc')->select();//进行分页查询，注意limit方法的参数要使用Page类的属性

        $this->assign('list',$list);    //赋值数据类
        $this->assign('page',$show);   //赋值分页输出
        $this->display();    //调用视图
    }
/**
     * 推荐老师
     */
    public function teacher(){
    	header('Content-Type:text/html;charset=utf-8');
        $model = M('Tjteacher');   //实力化模型类
        $data = $model->select(); //查询所有数据
        $count = $model->count();//计算所有记录数
        $Page = new \Think\Page($count,10);//实例化分页类，传入总记录数和每页显示的总记录数

        $show = $Page->show();//分页显示输出
        $list = $model->limit($Page->firstRow.','.$Page->listRows)->order('jid desc')->select();//进行分页查询，注意limit方法的参数要使用Page类的属性

        $this->assign('list',$list);    //赋值数据类
        $this->assign('page',$show);   //赋值分页输出
        $this->display();    //调用视图
    }
/**
     * 推荐书籍
     */
    public function book(){
    	header('Content-Type:text/html;charset=utf-8');
        $model = M('Shuji');   //实力化模型类
        $data = $model->select(); //查询所有数据
        $count = $model->count();//计算所有记录数
        $Page = new \Think\Page($count,10);//实例化分页类，传入总记录数和每页显示的总记录数

        $show = $Page->show();//分页显示输出
        $list = $model->limit($Page->firstRow.','.$Page->listRows)->order('sid desc')->select();//进行分页查询，注意limit方法的参数要使用Page类的属性

        $this->assign('list',$list);    //赋值数据类
        $this->assign('page',$show);   //赋值分页输出
        $this->display();    //调用视图
    }
    /**
     * 删除推荐老师
     */
    public function deleteTea(){
    	header('Content-Type:text/html;charset=utf-8');
       	$model = M('Tjteacher');
        $id = $_GET['nid'];
    
         $res = $model->where('jid='.$id)->delete();
         if ($res){
             echo "<script>alert('删除成功');window.location='".U('Pub/teacher')."'</script>";
         }else{
             echo "<script>alert('删除失败');window.location='".U('Pub/teacher')."'</script>";
         }
    }
/**
     * 删除推荐学校
     */
    public function deleteSch(){
    	header('Content-Type:text/html;charset=utf-8');
       	$model = M('Kschool');
        $id = $_GET['nid'];
    
         $res = $model->where('kid='.$id)->delete();
         if ($res){
             echo "<script>alert('删除成功');window.location='".U('Pub/school')."'</script>";
         }else{
             echo "<script>alert('删除失败');window.location='".U('Pub/school')."'</script>";
         }
    }
	/**
     * 删除推荐书籍
     */
    public function deleteBoo(){
    	header('Content-Type:text/html;charset=utf-8');
       	$model = M('Shuji');
        $id = $_GET['nid'];
    
         $res = $model->where('sid='.$id)->delete();
         if ($res){
             echo "<script>alert('删除成功');window.location='".U('Pub/book')."'</script>";
         }else{
             echo "<script>alert('删除失败');window.location='".U('Pub/book')."'</script>";
         }
    }
    
	/**
     * 查看推荐老师详细信息
     */
	public function detailteacher(){
        if (isset($_GET['nid'])){
            $nid = $_GET['nid'];  //获取GET数据
            $model = M('Tjteacher');  //实例化模型类
            $data = $model->where("jid=".$nid)->find();   //查询数据
            $this->assign('data',$data);   //分配变量
            $this->display();   //调用视图
        }
    }
/**
     * 查看推荐学校详细信息
     */
	public function detailschool(){
        if (isset($_GET['nid'])){
            $nid = $_GET['nid'];  //获取GET数据
            $model = M('Kschool');  //实例化模型类
            $data = $model->where("kid=".$nid)->find();   //查询数据
            $this->assign('data',$data);   //分配变量
            $this->display();   //调用视图
        }
    }
    /**
     * 添加推荐学校
     */
	public function addschool(){
        header('Content-Type:text/html; charset=utf-8');		
    	if ($_FILES['kpic']){
    		
    		//文件上传配置
    		$upload = new UploadFile();// 实例化上传类
    		$upload->maxSize  = 1000000 ;// 设置附件上传大小
    		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    		$upload->savePath =  './Public/Uploads/schPic/';// 设置附件上传目录
    		$upload->saveRule = 'time';
    			
    		//开始上传
    		if(!$upload->upload()){
    			$this->error($upload->getErrorMsg());
    		}else{
    			$info1 =  $upload->getUploadFileInfo();
    		}
    		
    		$info['tprofile']=$_POST['tprofile'];
    		$info['klication']=$_POST['klication'];
    		$info['kname']=$_POST['kname'];
    		$info['txiaoshun']=$_POST['txiaoshun'];
    		$info['kpic'] =$info1[0]['savename'];
    		$info['kpresident']=$_POST['kpresident'];
    		$info['kleixing']=$_POST['kleixing'];
    		$info['ktime']=$_POST['ktime'];
    		$info['kshuoshi']=$_POST['kshuoshi'];
    		$info['khistory']=$_POST['khistory'];
    		$info['kcondition']=$_POST['kcondition'];
    		
    		$model = M('Kschool');  //实例化模型类
            //$data = $model->create();//使用create方法获取POST表单数据
            $res=$model->add($info); //向表中添加数据
            if ($res){
                echo "<script>alert('添加学校成功！');</script>";
            }else{
                echo "<script>alert('添加学校失败！');</script>";
            }
    	 		
 	
    	}
    	
    	
        $this->display();
    }
	
     /**
     * 添加推荐老师
     */
	public function addteacher(){
        header('Content-Type:text/html; charset=utf-8');		
    	if ($_FILES['jpic']){
    		
    		//文件上传配置
    		$upload = new UploadFile();// 实例化上传类
    		$upload->maxSize  = 1000000 ;// 设置附件上传大小
    		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    		$upload->savePath =  './Public/Uploads/teacherPic/';// 设置附件上传目录
    		$upload->saveRule = 'time';
    			
    		//开始上传
    		if(!$upload->upload()){
    			$this->error($upload->getErrorMsg());
    		}else{
    			$info1 =  $upload->getUploadFileInfo();
    		}
    		
    		$info['jprofile']=$_POST['jprofile'];
    		$info['jname']=$_POST['jname'];
    		$info['tspec']=$_POST['tspec'];
    		$info['teacherid']=$_POST['teacherid'];
    		$info['jpic'] =$info1[0]['savename'];
    		$info['jjingli']=$_POST['jjingli'];
    
    		
    		$model = M('Tjteacher');  //实例化模型类
            //$data = $model->create();//使用create方法获取POST表单数据
            $res=$model->add($info); //向表中添加数据
            if ($res){
                echo "<script>alert('添加老师成功！');</script>";
            }else{
                echo "<script>alert('添加老师失败！');</script>";
            }
    	 		
 	
    	}
    	
    	
        $this->display();
    }
	 /**
     * 添加推荐书籍
     */
	public function addbook(){
        header('Content-Type:text/html; charset=utf-8');		
    	if ($_FILES['spic']){
    		
    		//文件上传配置
    		$upload = new UploadFile();// 实例化上传类
    		$upload->maxSize  = 1000000 ;// 设置附件上传大小
    		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    		$upload->savePath =  './Public/Uploads/bookPic/';// 设置附件上传目录
    		$upload->saveRule = 'time';
    			
    		//开始上传
    		if(!$upload->upload()){
    			$this->error($upload->getErrorMsg());
    		}else{
    			$info1 =  $upload->getUploadFileInfo();
    		}
    		
    		$info['sname']=$_POST['sname'];
    		$info['sprice']=$_POST['sprice'];
    	
    		$info['spic'] =$info1[0]['savename'];
    		
    		
    		$model = M('Shuji');  //实例化模型类
            //$data = $model->create();//使用create方法获取POST表单数据
            $res=$model->add($info); //向表中添加数据
            if ($res){
                echo "<script>alert('添加书籍成功！');</script>";
            }else{
                echo "<script>alert('添加书籍失败！');</script>";
            }
    	 		
 	
    	}
    	
    	
        $this->display();
    }
	
}
