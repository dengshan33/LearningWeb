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
                    $complaint = M('complaint'); //实例化模型操作m_complain数据表
                    $count = $complaint->where("flag='0'")->count();//计算未处理投诉的数量
                    if(isset($count)){
                        $_SESSION['complaint'] = $count; //创建会话变量complain表示投诉数量
                    }else{
                        echo "<script>alert('查询m_complaint表失败!');</script>";
                    }
                    $m_liuyan = M('liuyan');//实例化模型类操作_liuyan表
                    $count1 = $m_liuyan->where("reply ='0'")->count();//计算未回复留言的数量
                    if(isset($count1)) {
                        $_SESSION['userLiuyan'] = $count1;//创建会话变量userliuyan表示投诉数量
                    }else{
                        echo "<script>alert('查询m_liuyan表失败!');</script>";
                    }
                    $_SESSION['adminName'] = $username; //创建会话变量adminName
                    $this->success('登录成功，正在为您跳转！' . $_SESSION['adminName'], U('UserManagement/userView'), 2);
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

