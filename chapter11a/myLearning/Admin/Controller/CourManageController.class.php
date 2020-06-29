<?php
namespace Admin\Controller;
use Think\Controller;
use Org\Net\UploadFile;
class CourManageController extends Controller{
    /**
     * 老师课程
     */
    public function teachercour(){
    	header('Content-Type:text/html;charset=utf-8');
        $model = M('Course');   //实力化模型类
        $data = $model->select(); //查询所有数据
        $count = $model->count();//计算所有记录数
        $Page = new \Think\Page($count,10);//实例化分页类，传入总记录数和每页显示的总记录数

        $show = $Page->show();//分页显示输出
        $list = $model->limit($Page->firstRow.','.$Page->listRows)->order('cid desc')->select();//进行分页查询，注意limit方法的参数要使用Page类的属性

        $this->assign('list',$list);    //赋值数据类
        $this->assign('page',$show);   //赋值分页输出
        $this->display();    //调用视图
    }
    /**
     * 删除老师课程
     */
    public function deleteTC(){
    	header('Content-Type:text/html;charset=utf-8');
       	$model = M('Course');
        $id = $_GET['nid'];
    
         $res = $model->where('cid='.$id)->delete();
         if ($res){
             echo "<script>alert('删除成功');window.location='".U('CourManage/teachercour')."'</script>";
         }else{
             echo "<script>alert('删除失败');window.location='".U('CourManage/teachercour')."'</script>";
         }
    }
    /**
     * 推荐课程
     */
	public function tuijcour(){
    	header('Content-Type:text/html;charset=utf-8');
        $model = M('Tcourse');   //实力化模型类
        $data = $model->select(); //查询所有数据
        $count = $model->count();//计算所有记录数
        $Page = new \Think\Page($count,10);//实例化分页类，传入总记录数和每页显示的总记录数

        $show = $Page->show();//分页显示输出
        $list = $model->limit($Page->firstRow.','.$Page->listRows)->order('tid desc')->select();//进行分页查询，注意limit方法的参数要使用Page类的属性

        $this->assign('list',$list);    //赋值数据类
        $this->assign('page',$show);   //赋值分页输出
        $this->display();    //调用视图
    }
    /**
     * 查看推荐课程详细信息
     */
	public function detailtuij(){
        if (isset($_GET['nid'])){
            $nid = $_GET['nid'];  //获取GET数据
            $model = M('Tcourse');  //实例化模型类
            $data = $model->where("tid=".$nid)->find();   //查询数据
            $this->assign('data',$data);   //分配变量
            $this->display();   //调用视图
        }
    }
    /**
     * 添加推荐课程
     */
	public function addTjcour(){
        header('Content-Type:text/html; charset=utf-8');		
    	if ($_FILES['tpic']){
    		
    		//文件上传配置
    		$upload = new UploadFile();// 实例化上传类
    		$upload->maxSize  = 1000000 ;// 设置附件上传大小
    		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    		$upload->savePath =  './Public/Uploads/couPic/';// 设置附件上传目录
    		$upload->saveRule = 'time';
    			
    		//开始上传
    		if(!$upload->upload()){
    			$this->error($upload->getErrorMsg());
    		}else{
    			$info1 =  $upload->getUploadFileInfo();
    		}
    		
    		$info['tprofile']=$_POST['tprofile'];
    		$info['teachername']=$_POST['teachername'];
    		$info['tname']=$_POST['tname'];
    		$info['tno']=$_POST['tno'];
    		$info['tpic'] =$info1[0]['savename'];
    		$info['tschool']=$_POST['tschool'];
    		$info['thot']='1';
    		$info['ttime']=$_POST['ttime'];
    		$info['tleixing']=$_POST['tleixing'];
    		//$info['tname']=$_POST['tname'];
    		
    		$model = M('Tcourse');  //实例化模型类
            //$data = $model->create();//使用create方法获取POST表单数据
            $res=$model->add($info); //向表中添加数据
            if ($res){
                echo "<script>alert('添加课程成功！');</script>";
            }else{
                echo "<script>alert('添加课程失败！');</script>";
            }
    	 		
 	
    	}
    	
    	
        $this->display();
    }
	/**
     * 删除推荐课程
     */
    public function deletetj(){
    	header('Content-Type:text/html;charset=utf-8');
       	$model = M('Tcourse');
        $id = $_GET['nid'];
    
         $res = $model->where('tid='.$id)->delete();
         if ($res){
             echo "<script>alert('删除成功');window.location='".U('CourManage/tuijcour')."'</script>";
         }else{
             echo "<script>alert('删除失败');window.location='".U('CourManage/tuijcour')."'</script>";
         }
    }
    
}
