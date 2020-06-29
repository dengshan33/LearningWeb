<?php
namespace Admin\Controller;
use Think\Controller;
use Org\Net\UploadFile;
class EmployManageController extends Controller{
    
    /**
     * 删除行业信息
     */
    public function deleteind(){
        session_start();  //启动会话
        if(isset($_GET['nid']) and IS_POST){
            $password = I('post.password');
            $pmodel = M('administrator'); //实例化模型类操作m_administrator表
            $tmp_password = $pmodel->where("name='".$_SESSION['adminName']."'")->getField('pwd'); //获取密码
            if($tmp_password and md5($password) == $tmp_password){  //如果密码正确
                $nid = $_GET['nid'];   //获取新闻id
                $nmodel = M('industry'); //实例化模型类操作m_news表
                $res = $nmodel->where("iid=".$nid)->delete(); //删除数据
                if($res===false){
                    echo "<script>alert('删除失败!');</script>";
                }elseif ($res===0){
                    echo "<script>alert('要删除的数据不存在')</script>";
                }else{
                    echo "<script>alert('删除成功!');window.location='".U('EmployManage/industryinfo')."'</script>";
                }
            }else{
                echo "<script>alert('密码输入错误!')</script>";
            }
        }
        //分配变量
        $this->assign('adminName',$_SESSION['adminName']);
        $this->assign('nid',$_GET['nid']);
        //调用视图
        $this->display();
    }

    /**
     * 添加行业信息
     */
    public function addind(){
        header('Content-Type:text/html; charset=utf-8');		
    	if ($_FILES['ipic']){
    		
    		//文件上传配置
    		$upload = new UploadFile();// 实例化上传类
    		$upload->maxSize  = 1000000 ;// 设置附件上传大小
    		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    		$upload->savePath =  './Public/home/job/img/';// 设置附件上传目录
    		$upload->saveRule = 'time';
    			
    		//开始上传
    		if(!$upload->upload()){
    			$this->error($upload->getErrorMsg());
    		}else{
    			$info1 =  $upload->getUploadFileInfo();
    		}
    		
    		$info['iprofile']=$_POST['iprofile'];
    		$info['inow']=$_POST['inow'];
    		$info['iindustry']=$_POST['iindustry'];
    		$info['ifazhan']=$_POST['ifazhan'];
    		$info['ipic'] =$info1[0]['savename'];
    		$info['ijob']=$_POST['ijob'];
    		
    		
    		$model = M('industry');  //实例化模型类
            //$data = $model->create();//使用create方法获取POST表单数据
            $res=$model->add($info); //向表中添加数据
            if ($res){
                echo "<script>alert('添加行业成功！');</script>";
            }else{
                echo "<script>alert('添加行业失败！');</script>";
            }
    	 		
 	
    	}
    	
    	
        $this->display();
    }

    /**
     * 查看所有行业
     */
    public function industryinfo(){
        $model = M('Industry');   //实力化模型类
        $data = $model->select(); //查询所有数据
        $count = $model->count();//计算所有记录数
        $Page = new \Think\Page($count,10);//实例化分页类，传入总记录数和每页显示的总记录数

        $show = $Page->show();//分页显示输出
        $list = $model->limit($Page->firstRow.','.$Page->listRows)->order('iid desc')->select();//进行分页查询，注意limit方法的参数要使用Page类的属性

        $this->assign('list',$list);    //赋值数据类
        $this->assign('page',$show);   //赋值分页输出
        $this->display();    //调用视图
    }

    /**
     * 查看行业详细信息
     */
    public function detailind(){
        if (isset($_GET['nid'])){
            $nid = $_GET['nid'];  //获取GET数据
            $model = M('Industry');  //实例化模型类
            $data = $model->where("iid=".$nid)->find();   //查询数据
            $this->assign('data',$data);   //分配变量
            $this->display();   //调用视图
        }
    }
    
	/**
     * 删除公司信息
     */
    public function deletefirm(){
        session_start();  //启动会话
        if(isset($_GET['nid']) and IS_POST){
            $password = I('post.password');
            $pmodel = M('administrator'); //实例化模型类操作m_administrator表
            $tmp_password = $pmodel->where("name='".$_SESSION['adminName']."'")->getField('pwd'); //获取密码
            if($tmp_password and md5($password) == $tmp_password){  //如果密码正确
                $nid = $_GET['nid'];   //获取新闻id
                $nmodel = M('firm'); //实例化模型类操作m_news表
                $res = $nmodel->where("gid=".$nid)->delete(); //删除数据
                if($res===false){
                    echo "<script>alert('删除失败!');</script>";
                }elseif ($res===0){
                    echo "<script>alert('要删除的数据不存在')</script>";
                }else{
                    echo "<script>alert('删除成功!');window.location='".U('EmployManage/firminfo')."'</script>";
                }
            }else{
                echo "<script>alert('密码输入错误!')</script>";
            }
        }
        //分配变量
        $this->assign('adminName',$_SESSION['adminName']);
        $this->assign('nid',$_GET['nid']);
        //调用视图
        $this->display();
    }

    /**
     * 添加公司信息
     */
    public function addfirm(){
        header('Content-Type:text/html; charset=utf-8');		
    	if ($_FILES['gpic']){
    		
    		//文件上传配置
    		$upload = new UploadFile();// 实例化上传类
    		$upload->maxSize  = 1000000 ;// 设置附件上传大小
    		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    		$upload->savePath =  './Public/home/job/img/';// 设置附件上传目录
    		$upload->saveRule = 'time';
    			
    		//开始上传
    		if(!$upload->upload()){
    			$this->error($upload->getErrorMsg());
    		}else{
    			$info1 =  $upload->getUploadFileInfo();
    		}
    		
    		$info['gprofile']=$_POST['gprofile'];
    		$info['gfounder']=$_POST['gfounder'];
    		$info['gname']=$_POST['gname'];
    		$info['glocation']=$_POST['glocation'];
    		$info['gpic'] =$info1[0]['savename'];
    		$info['gnumber']=$_POST['gnumber'];
    		$info['gearn']=$_POST['gearn'];
    		$info['glinian']=$_POST['glinian'];
    		$info['glicheng']=$_POST['glicheng'];
    		
    		$model = M('firm');  //实例化模型类
            //$data = $model->create();//使用create方法获取POST表单数据
            $res=$model->add($info); //向表中添加数据
            if ($res){
                echo "<script>alert('添加公司成功！');</script>";
            }else{
                echo "<script>alert('添加公司失败！');</script>";
            }
    	 		
 	
    	}
    	
    	
        $this->display();
    }

    /**
     * 查看所有公司
     */
    public function firminfo(){
        $model = M('Firm');   //实力化模型类
        $data = $model->select(); //查询所有数据
        $count = $model->count();//计算所有记录数
        $Page = new \Think\Page($count,10);//实例化分页类，传入总记录数和每页显示的总记录数

        $show = $Page->show();//分页显示输出
        $list = $model->limit($Page->firstRow.','.$Page->listRows)
        ->order('gid desc')->select();//进行分页查询，注意limit方法的参数要使用Page类的属性

        $this->assign('list',$list);    //赋值数据类
        $this->assign('page',$show);   //赋值分页输出
        $this->display();    //调用视图
    }

    /**
     * 查看公司详细信息
     */
    public function detailfirm(){
        if (isset($_GET['nid'])){
            $nid = $_GET['nid'];  //获取GET数据
            $model = M('firm');  //实例化模型类
            $data = $model->where("gid=".$nid)->find();   //查询数据
            $this->assign('data',$data);   //分配变量
            $this->display();   //调用视图
        }
    }
    
	/**
     * 删除招聘信息
     */
    public function deletemp(){
        session_start();  //启动会话
        if(isset($_GET['nid']) and IS_POST){
            $password = I('post.password');
            $pmodel = M('administrator'); //实例化模型类操作m_administrator表
            $tmp_password = $pmodel->where("name='".$_SESSION['adminName']."'")->getField('pwd'); //获取密码
            if($tmp_password and md5($password) == $tmp_password){  //如果密码正确
                $nid = $_GET['nid'];   //获取新闻id
                $nmodel = M('imploye'); //实例化模型类操作m_news表
                $res = $nmodel->where("mid=".$nid)->delete(); //删除数据
                if($res===false){
                    echo "<script>alert('删除失败!');</script>";
                }elseif ($res===0){
                    echo "<script>alert('要删除的数据不存在')</script>";
                }else{
                    echo "<script>alert('删除成功!');window.location='".U('EmployManage/mpinfo')."'</script>";
                }
            }else{
                echo "<script>alert('密码输入错误!')</script>";
            }
        }
        //分配变量
        $this->assign('adminName',$_SESSION['adminName']);
        $this->assign('nid',$_GET['nid']);
        //调用视图
        $this->display();
    }

    /**
     * 添加招聘信息
     */
    public function addmp(){
        header('Content-Type:text/html; charset=utf-8');		
    	if ($_FILES['mpic']){
    		
    		//文件上传配置
    		$upload = new UploadFile();// 实例化上传类
    		$upload->maxSize  = 1000000 ;// 设置附件上传大小
    		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    		$upload->savePath =  './Public/home/job/img/';// 设置附件上传目录
    		$upload->saveRule = 'time';
    			
    		//开始上传
    		if(!$upload->upload()){
    			$this->error($upload->getErrorMsg());
    		}else{
    			$info1 =  $upload->getUploadFileInfo();
    		}
    		
    		$info['mname']=$_POST['mame'];
    		$info['mrequire']=$_POST['mrequire'];
    		$info['msalary']=$_POST['msalary'];
    		$info['mlocation']=$_POST['mlocation'];
    		$info['mpic'] =$info1[0]['savename'];
    		$info['mfirm']=$_POST['mfirm'];
    		$info['mfirmleixing']=$_POST['mfirmleixing'];
    		$info['mzhizhe']=$_POST['mzhizhe'];
    		$info['mtime']=$_POST['mtime'];
    		$info['mlocate']=$_POST['mlocate'];
    		$info['mform']=$_POST['mform'];
    		$info['mxueli']=$_POST['mxueli'];
    		$info['mpeople']=$_POST['mpeople'];
    		$info['mnumber']=$_POST['mnumber'];
    		
    		
    		$model = M('imploye');  //实例化模型类
            //$data = $model->create();//使用create方法获取POST表单数据
            $res=$model->add($info); //向表中添加数据
            if ($res){
                echo "<script>alert('添加招聘成功！');</script>";
            }else{
                echo "<script>alert('添加招聘失败！');</script>";
            }
    	 		
 	
    	}
    	
    	
        $this->display();
    }

    /**
     * 查看所有招聘信息
     */
    public function mpinfo(){
        $model = M('imploye');   //实力化模型类
        $data = $model->select(); //查询所有数据
        $count = $model->count();//计算所有记录数
        $Page = new \Think\Page($count,10);//实例化分页类，传入总记录数和每页显示的总记录数

        $show = $Page->show();//分页显示输出
        $list = $model->limit($Page->firstRow.','.$Page->listRows)
        ->order('mid desc')->select();//进行分页查询，注意limit方法的参数要使用Page类的属性

        $this->assign('list',$list);    //赋值数据类
        $this->assign('page',$show);   //赋值分页输出
        $this->display();    //调用视图
    }

    /**
     * 查看招聘详细信息
     */
    public function detailmp(){
        if (isset($_GET['nid'])){
            $nid = $_GET['nid'];  //获取GET数据
            $model = M('imploye');  //实例化模型类
            $data = $model->where("mid=".$nid)->find();   //查询数据
            $this->assign('data',$data);   //分配变量
            $this->display();   //调用视图
        }
    }

}