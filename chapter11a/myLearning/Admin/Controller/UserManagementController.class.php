<?php
namespace Admin\Controller;
use Think\Controller;

//用户管理
class UserManagementController extends Controller{
    /**
     * 查看用户信息
     */
    public function userstudentsView(){
        $userObj = M('students');  //实例化模型类
        $data = $userObj->select(); //查询所有数据
        $count = $userObj->count();//计算所有记录数
        $Page = new \Think\Page($count, 10);//实例化分页类，传入总记录数和每页显示的总记录数

        $show = $Page->show();//分页显示输出
        $list = $userObj->limit($Page->firstRow . ',' . $Page->listRows)->order('sid desc')->select();//进行分页查询，注意limit方法的参数要使用Page类的属性

        $this->assign('list', $list);    //赋值数据类
        $this->assign('page', $show);   //赋值分页输出
        $this->display();    //调用视图
    }
	public function userteachersView(){
        $userObj = M('teachers');  //实例化模型类
        $data = $userObj->select(); //查询所有数据
        $count = $userObj->count();//计算所有记录数
        $Page = new \Think\Page($count, 10);//实例化分页类，传入总记录数和每页显示的总记录数

        $show = $Page->show();//分页显示输出
        $list = $userObj->limit($Page->firstRow . ',' . $Page->listRows)->order('tid desc')->select();//进行分页查询，注意limit方法的参数要使用Page类的属性

        $this->assign('list', $list);    //赋值数据类
        $this->assign('page', $show);   //赋值分页输出
        $this->display();    //调用视图
    }
    /**
     * 搜索用户信息
     */
    public function searchUser(){
    	header('Content-Type:text/html;charset=utf-8');
        if(IS_POST){
            $type = I('post.type');
            $search = I('post.search');
            if ($type == 'students'){
                $m_students = M('students');//实例化模型类
                $dataNo = $m_students->where("sno='$search'")->find();
                if ($dataNo){
                	
                    $this->assign('array',array('id','学号','性别','姓名','所属学院','注册时间','是否被封禁'));//分配变量
                    $this->assign('data1',$dataNo);//分配变量
                    $this->assign('a', '详情...');
                }else{
                	
                    echo "<script>alert('未找到该学生');</script>";
                }
         

            }elseif($type == 'teachers'){
                $m_teachers = M('teachers');//实例化模型类
                $data = $m_teachers->where("tno='$search'")->find();
                if ($data){
                    $this->assign('array',array('id','工号','姓别','姓名','所属学院','注册时间','是否被封禁'));//分配变量
                    $this->assign('data2',$data);//分配变量
                    $this->assign('a', '详情...');

                }else{
               	 
                	echo "<script>alert('未找到该老师');</script>";
                }
                
            }else{
                
            	echo "<script>alert('请输入正确的类型');</script>";
        	}
    	}
		$this->assign('type',$type);
     	$this->display();
    }

    /**
     * 冻结用户
     */
	function isfreezeT(){
  		header('Content-Type:text/html;charset=utf-8');
    	$Students=M('teachers');
    	$ids = rtrim($_GET['fid'],',');
    	$data['freeze']="1";
		$result=$Students->where('tid in('.$ids.')')->save($data);
    	if ($result){
    		echo "<script>alert('冻结成功');</script>";
    	}else{
    		echo "<script>alert('冻结失败');</script>";
    	}
   }
	function nofreezeT(){
  		header('Content-Type:text/html;charset=utf-8');
    	$Students=M('teachers');
    	$ids = rtrim($_GET['fid'],',');
    	$data['freeze']="0";
		$result=$Students->where('tid in('.$ids.')')->save($data);
    	if ($result){
    		echo "<script>alert('解冻成功');</script>";
    	}else{
    		echo "<script>alert('解冻失败');</script>";
    	}
   }
	function isfreezeS(){
  		header('Content-Type:text/html;charset=utf-8');
    	$Students=M('students');
    	$ids = rtrim($_GET['fid'],',');
    	$data['freeze']="1";
		$result=$Students->where('sid in('.$ids.')')->save($data);
    	if ($result){
    		echo "<script>alert('冻结成功');</script>";
    	}else{
    		echo "<script>alert('冻结失败');</script>";
    	}
   }
	function nofreezeS(){
  		header('Content-Type:text/html;charset=utf-8');
    	$Students=M('students');
    	$ids = rtrim($_GET['fid'],',');
    	$data['freeze']="0";
		$result=$Students->where('sid in('.$ids.')')->save($data);
    	if ($result){
    		echo "<script>alert('解冻成功');</script>";
    	}else{
    		echo "<script>alert('解冻失败');</script>";
    	}
   }

}
