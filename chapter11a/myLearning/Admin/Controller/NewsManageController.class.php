<?php
namespace Admin\Controller;
use Think\Controller;
class NewsManageController extends Controller{
    /**
     * 增加新闻
     */
    public function addNews(){
        if (IS_POST){                   //判断是否是POST提交表单
            //获取表单提交数据
            $ntitle = I('post.ntitle');
            $nauthor = I('post.nauthor');
            $ncontent = I('post.ncontent');

            $model = M('news');  //实例化模型类
            $data = $model->create();//使用create方法获取POST表单数据
            $res = $model->add(); //向表中添加数据
            if ($res){
                echo "<script>alert('添加新闻成功！');</script>";
            }else{
                echo "<script>alert('添加新闻失败！');</script>";
            }

        }
        $this->display();   //调用视图
    }

    /**
     * 删除新闻
     */
    public function deleteNews(){
        session_start();  //启动会话
        if(isset($_GET['nid']) and IS_POST){
            $password = I('post.password');
            $pmodel = M('administrator'); //实例化模型类操作m_administrator表
            $tmp_password = $pmodel->where("name='".$_SESSION['adminName']."'")->getField('pwd'); //获取密码
            if($tmp_password and md5($password) == $tmp_password){  //如果密码正确
                $nid = $_GET['nid'];   //获取新闻id
                $nmodel = M('news'); //实例化模型类操作m_news表
                $res = $nmodel->where("nid=".$nid)->delete(); //删除数据
                if($res===false){
                    echo "<script>alert('删除新闻失败!');</script>";
                }elseif ($res===0){
                    echo "<script>alert('要删除的数据不存在')</script>";
                }else{
                    echo "<script>alert('删除新闻成功!');window.location='".U('NewsManage/viewNews')."'</script>";
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
     * 修改新闻
     */
    public function alterNews(){
        if(isset($_GET['nid'])){
            $nid = $_GET['nid'];
            $model = M('news');  //实例化模型
            $data = $model->where('nid='.$nid)->find(); //查询数据
            if (IS_POST) {
                $data1 = $model->create(I('post.')); //获取表单数据
                var_dump($data1);
                $res = $model->where('nid='.$nid)->save(); //数据更新
                if ($res === false) {
                    echo "<script>alert('修改新闻失败!');</script>";
                } else {
                    echo "<script>alert('修改新闻成功!');window.location='" . U('Admin/NewsManage/detailNews/nid/' . $nid) . "';</script>";
                }
            }
            $this->assign('nid',$nid);//分配变量
            $this->assign('data',$data); //分配变量
            $this->display();   //调用视图
        }
    }

    /**
     * 查看新闻
     */
    public function viewNews(){
        $model = M('news');   //实力化模型类
        $data = $model->select(); //查询所有数据
        $count = $model->where('1')->count();//计算所有记录数
        $Page = new \Think\Page($count,10);//实例化分页类，传入总记录数和每页显示的总记录数

        $show = $Page->show();//分页显示输出
        $list = $model->limit($Page->firstRow.','.$Page->listRows)->order('nid desc')->select();//进行分页查询，注意limit方法的参数要使用Page类的属性

        $this->assign('list',$list);    //赋值数据类
        $this->assign('page',$show);   //赋值分页输出
        $this->display();    //调用视图
    }

    /**
     * 查看新闻详细信息
     */
    public function detailNews(){
        if (isset($_GET['nid'])){
            $nid = $_GET['nid'];  //获取GET数据
            $model = M('news');  //实例化模型类
            $data = $model->where("nid=".$nid)->find();   //查询数据
            $this->assign('data',$data);   //分配变量
            $this->display();   //调用视图
        }
    }

}