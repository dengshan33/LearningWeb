<?php
namespace Admin\Controller;
use Think\Controller;
class PostManageController extends Controller{
    /**
     * 查看帖子
     */
    public function postInfo(){
    	header('Content-Type:text/html;charset=utf-8');
        if (IS_POST){
            $search = I('post.search');
            if ($search == 'return'){
                $m_returns = M('returns'); //实例化模型类操作数据表m_returns
                $count = $m_returns->count();//计算所有记录数
                $Page = new \Think\Page($count,7);//实例化分页类，传入总记录数和每页显示的总记录数

                $show = $Page->show();//分页显示输出
                $data = $m_returns->limit($Page->firstRow.','.$Page->listRows)->order('rid desc')->select();//进行分页查询，注意limit方法的参数要使用Page类的属性
                if ($data){
                    $this->assign('array',array('id','归还物品名称','物品图片','是否归还','是否被封禁'));//分配变量
                    $this->assign('data1',$data);//分配变量
                    $this->assign('page',$show);   //赋值分页输出
                    $this->assign('a', '详情...');
                }else{
                    echo "<script>alert('查询m_returns数据表失败')</script>";
                }
            }elseif ($search == 'find'){
                $m_findthings = M('findthings'); //实例化模型类操作数据表m_findthings
                $count = $m_findthings->count();//计算所有记录数
                $Page = new \Think\Page($count,7);//实例化分页类，传入总记录数和每页显示的总记录数

                $show = $Page->show();//分页显示输出
                $data = $m_findthings->limit($Page->firstRow.','.$Page->listRows)->order('fid desc')->select();//进行分页查询，注意limit方法的参数要使用Page类的属性
                if ($data){
                    $this->assign('array',array('id','丢失物品名称','物品图片','是否找到','是否被封禁'));//分配变量
                    $this->assign('data2',$data);//分配变量
                    $this->assign('page',$show);   //赋值分页输出
                    $this->assign('a', '详情...');
                }else{
                    echo "<script>alert('查询数据表m_findthings失败');</script>";
                }
            }else{
                echo "<script>alert('请输入return或者find');</script>";
            }
        }
        $this->assign('type',$search);//分配变量
        $this->display();//调用视图
    }
    /**
     * 查看帖子详细信息
     */
    public function detailPostInfo(){
    	header('Content-Type:text/html;charset=utf-8');
        $type = $_GET['type'];
        $id = $_GET['id'];
        if ($type == 'return'){
            $m_returns = M('returns');//实例化模型类
            $data = $m_returns->where('rid='.$id)->find();
            if($data){
                $this->assign('type','归还物品');//分配变量
                $this->assign('data1',$data);//分配变量
                $this->display('detailPostInfo1');//调用视图
            }else{
                echo "<script>alert('查询m_returns表失败');</script>";
            }
        }elseif ($type == 'find'){
            $m_findthings = M('findthings');//实例化模型类
            $data = $m_findthings->where('fid='.$id)->find();
            if ($data){
                $this->assign('type','寻找物品');//分配变量
                $this->assign('data2',$data);
                $this->display('detailPostInfo2');//调用视图
            }else{
                echo "<script>alert('查询m_findthings表失败');</script>";
            }
        }else{
            echo "<script>alert('未找到该类型帖子');window.location='".U('PostManage/postInfo')."'</script>";
        }
    }
    /**
     * 查找帖子
     */
    public function searchPost(){
    	header('Content-Type:text/html;charset=utf-8');
        if (IS_POST){
            $type = I('post.type');
            $id = I('post.id');
            if ($type == 'return'){
                $m_returns = M('returns');//实例化模型类
                $data = $m_returns->where('rid='.$id)->find();
                if ($data){
                    $this->assign('array',array('id','归还物品名称','物品图片','是否归还','是否被封禁'));//分配变量
                    $this->assign('data1',$data);//分配变量
                    $this->assign('a', '详情...');
                }else{
                    echo "<script>alert('未从m_returns表中找到帖子');</script>";
                }

            }elseif($type == 'find'){
                $m_findthings = M('findthings');//实例化模型类
                $data = $m_findthings->where('fid='.$id)->find();
                if ($data){
                    $this->assign('array',array('id','丢失物品名称','物品图片','是否找到','是否被封禁'));//分配变量
                    $this->assign('data2',$data);//分配变量
                    $this->assign('b', '详情...');

                }else{
                    echo "<script>alert('未从m_findthings表中找到帖子');</script>";
                }
            }else{
                echo "<script>alert('请输入正确的类型');</script>";
            }
        }

        $this->assign('type',$type);//分配变量
        $this->display();//调用视图
    }

    /**
     * 封禁帖子
     */
    public function banPost(){
    	header('Content-Type:text/html;charset=utf-8');
        $type = $_GET['type'];
        $id   =$_GET['id'];
        echo $id;
        if ($type == 'return'){
            $m_returns = M('returns');//实例化模型类
            $res = $m_returns->where('rid='.$id)->setField('isflag','1');
            if ($res){
                echo "<script>alert('封禁成功');window.location='".U('PostManage/postInfo')."'</script>";
            }else{
                echo "<script>alert('封禁失败');window.location='".U('PostManage/detailPostInfo',array('type'=>'return','id'=>$id))."'</script>";
            }
        }elseif ($type == 'find'){
            $m_findthings = M('findthings');//实例化模型类
            $res = $m_findthings->where('fid='.$id)->setField('isflag','1');
            if ($res){
                echo "<script>alert('封禁成功');window.location='".U('PostManage/postInfo')."'</script>";
            }else{
                echo "<script>alert('封禁失败');window.location='".U('PostManage/detailPostInfo',array('type'=>'find','id'=>$id))."'</script>";
            }
        }else{
            echo "<script>alert('未找到该类型帖子');window.location='".U('PostManage/postInfo')."'</script>";
        }
    }
}
