<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
    /**
     * 登录
     */
    public function login(){
        session_start();
        if (IS_POST){
            $username = I('post.username');
            $password = I('post.password');
            $code = I('post.captcha');
            $verify = new \Think\Verify();
            if($verify->check($code)) {//验证码输入正确
                $userObj = M('administrator');
                $where = array('name' => $username);
                $tmp_password = $userObj->where($where)->getField('pwd');
                if ($tmp_password && md5($password) == $tmp_password) {
                    
              
                    $_SESSION['adminName'] = $username; //创建会话变量adminName
                    $this->success('登录成功，正在为您跳转！' . $_SESSION['adminName'], U('UserManagement/userstudentsView'), 2);
                } else {
                    $this->error('登录失败，请重新登录!');
                }
                die;
            }else{
                echo "<script>alert('验证码输入错误!');</script>";
            }
        }
        $this->display();

    }
    /**
     * 生成验证码
     */
    public function captcha(){
        //实例化验证码类
        $Verify = new \Think\Verify();
        //生成验证码
        $Verify->entry();
    }
}

