<?php
namespace Admin\Controller;
use Think\Controller;

//用户管理
class UserManagementController extends Controller{
    /**
     * 查看用户信息
     */
    public function userView(){
        $userObj = M('member');  //实例化模型类
        $data = $userObj->select(); //查询所有数据
        $count = $userObj->where('1')->count();//计算所有记录数
        $Page = new \Think\Page($count, 10);//实例化分页类，传入总记录数和每页显示的总记录数

        $show = $Page->show();//分页显示输出
        $list = $userObj->limit($Page->firstRow . ',' . $Page->listRows)->order('mid desc')->select();//进行分页查询，注意limit方法的参数要使用Page类的属性

        $this->assign('list', $list);    //赋值数据类
        $this->assign('page', $show);   //赋值分页输出
        $this->display();    //调用视图
    }
    /**
     * 搜索用户信息
     */
    public function searchUser()
    {
        if (IS_POST) {
            $search = I('post.search');
            $model = M('member'); //实例化模型类
            $dataId = $model->where("mid='" . $search."'")->find();  //查询$search为用户ID字段
            if ($dataId) {
                //赋值变量
                $this->assign('array', array('id', '用户名', '联系电话', '邮箱', '是否冻结', '注册时间'));
                $this->assign('a', '封禁');
                $this->assign('data', $dataId);
            } else {
                $dataUser = $model->where("user='" . $search . "'")->find();//查询user字段等于$serch的数据
                if ($dataUser) {
                    //赋值变量
                    $this->assign('array', array('id', '用户名', '联系电话', '邮箱', '是否冻结', '注册时间'));
                    $this->assign('a', '封禁');
                    $this->assign('data', $dataUser);
                } else {
                    echo "<script>alert('无此用户')</script>";
                }
            }
            $this->display();//调用视图

        }
        $this->display();//调用视图
    }

    /**
     * 查询要封禁的用户
     */

    public function  selectBanUser(){
        if(IS_POST){
            $search= I('post.search');
            $model = M('member');  //实例化模型类
            $data = $model->where("user='".$search."'")->find();  //获取数据
            if($data) {
                //赋值变量
                $this->assign('array', array('id', '用户名', '联系电话', '邮箱', '是否冻结', '注册时间'));
                $this->assign('a', '封禁');
                $this->assign('data', $data);
                $this->display();//调用视图
            }else{
                echo "<script>alert('此用户不存在');</script>";
            }
        }
        $this->display();//调用视图
    }

    /**
     * 封禁用户
     */
    public function banUser(){
        session_start();//启动会话
        if (IS_POST){
            $mid = I('post.mid'); //封禁用户的id
            $time = I('post.time'); //封禁用户时限
            $reason = I('post.reason'); //封禁用户理由
            $password = I('post.password'); //管理员密码

            $m_administrator = M('administrator'); //实例化模型类处理m_administrator数据表
            $tmp_password = $m_administrator->where("name='".$_SESSION['adminName']."'")->getField('pwd');//获取pwd字段
            if ($tmp_password and md5($password) == $tmp_password) {
                $m_member = M('member');//实例化模型类处理m_member数据表
                if ($m_member->where('mid=' . $mid)->getField('freeze') == 0) {
                    $res = $m_member->where('mid=' . $mid)->setField('freeze', '1'); //将m_member数据表该用户freeze字段设置为1
                    if ($res) {
                        $m_user_block = M('user_block');//实例化模型类处理m_user_block数据表
                        $res1 = $m_user_block->add(array('user_id' => $mid, 'block_reason' => $reason, 'block_end_time' => $time));//向表中添加数据
                        if ($res1) {
                            echo "<script>alert('封禁用户成功!');window.location='" . U('UserManagement/userView') . "'</script>";
                        }else{
                            echo "<script>alert('封禁用户失败!');</script>";
                        }
                    } else {
                        echo "<script>alert('封禁用户失败!设置值失败！');</script>";
                    }
                }else{
                    echo "<script>alert('该用户处于封禁中!');window.location='" . U('UserManagement/selectBanUser') ."'</script>";
                }
            } else {
                echo "<script>alert('管理员密码错误');</script>";
            }
        }

        //赋值变量
        $this->assign('mid',$_GET['mid']);
        $this->assign('adminName',$_SESSION['adminName']);
        $this->display(); //调用视图
    }
}
