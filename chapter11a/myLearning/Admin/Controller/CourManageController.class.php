<?php
namespace Admin\Controller;
use Think\Controller;
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
    
         $res = $m_returns->where('cid='.$id)->delete();
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
    
}
