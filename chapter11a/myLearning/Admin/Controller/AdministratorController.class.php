<?php
namespace Admin\Controller;
use Think\Controller;
class AdministratorController extends Controller{
    /**
     * 查看管理员信息
     */
    public function administratorInfo(){

        $adminObj = M('administrator');       //实例化模型
        $data = $adminObj->select(); //获取数据表数据
        $this->assign('data',$data);    //分配变量
        $this->display();   //调用视图

    }


    /**
     * 修改密码
     */
    public function alterPwd(){
        session_start();  //启动会话
        if (IS_POST){
            //获取表单数据
            $password = I('post.password');
            $apassword = I('post.apassword');//确认密码
            $npassword = I('post.npassword');//新密码
            if ($npassword==$apassword) {
                //实例化模型类
                $adminObj = M('administrator');
                $data = $adminObj->where("name='".$_SESSION['adminName']."'")->getField('pwd'); //获取数据
                if ($data and md5($password) == $data) {
                    $res = $adminObj->where("name='".$_SESSION['adminName']."'")->setField('pwd', md5($npassword));//修改原密码
                    if ($res === false) {
                        echo "<script>alert('修改密码失败!');</script>";
                    } else {
                        echo "<script>alert('修改密码成功!');</script>";
                    }

                }else{
                    echo "<script>alert('原密码错误!');</script>";
                }
            }else{
                echo "<script>alert('两次输入的密码不一样，请重新输入!');</script>";
            }

        }
        $this->assign('adminName',$_SESSION['adminName']);
        $this->display();

    }

}
