<?php
namespace Admin\Controller;
use Think\Controller;
class MessagesController extends Controller{
     /**
      * 投诉信息
      */
     public function complaintInfo(){
         $model = M('complaint');//实例化模型类
         $count = $model->where("flag='0'")->count();//计算未处理投诉的数量
         $Page = new \Think\Page($count,5);//实例化分页类，传入总记录数和每页显示的总记录数

         $show = $Page->show();//分页显示输出
         $list = $model->where("flag='0'")->limit($Page->firstRow.','.$Page->listRows)->select();//进行分页查询，注意limit方法的参数要使用Page类的属性

         if($list){
             $this->assign('data',$list);
             $this->assign('page',$show);
             $_SESSION['complaint'] = $count; //修改会话变量complain
         }else{
             echo "<script>alert('没有投诉信息');</script>";
         }
         $this->display();

     }

     /**
      * 详细投诉信息
      */
     public function detailComplaintInfo(){
         $id = $_GET['id'];
         $model = M('complaint'); //实例化模型类
         $data = $model->where("id=".$id)->find(); //获取数据表数据
         if ($data){
             $this->assign('data',$data); //分配变量
         }else{
             echo "<script>alert('查询失败!');</script>";
         }
         $this->display();//调用视图
     }
     /**
      * 设置对投诉信息设置已处理
      */
     public function dealWith(){
         $id = $_GET['id'];
         $model = M('complaint'); //实例化模型类
         $res = $model->where("id=".$id)->setField('flag','1'); //更新flag字段
         if ($res){
             $_SESSION['complaint'] -= 1; //投诉信息减少一条
             echo "<script>alert('设置成功!');window.location='".U('Messages/complaintInfo')."';</script>";
         }else{
             echo "<script>alert('设置失败!');window.location='".U('Messages/detailComplaintInfo')."';</script>";
         }
     }

     /**
      * 用户留言
      */
     public function userLiuyan(){
         $m_liuyan = M('liuyan');//实例化模型类
         $data = $m_liuyan->where("reply='0'")->select();
         $count= $m_liuyan->where("reply='0'")->count();//计数
         if ($data){
             if (isset($count)){
                 $_SESSION['userLiuyan'] = $count;
             }else{
                 echo "<script>alert('计算为回复留言数失败!');</script>";
             }
             $this->assign('data',$data);
         }else{
             echo "<script>alert('没有留言');</script>";
         }
         $this->display();//调用视图
     }
     /**
      * 详细留言
      */
     public function detailLiuyan(){
         $id = $_GET['id'];
         $m_liuyan = M('liuyan');//实例化模型类
         $data = $m_liuyan->where('lid='.$id)->find();
         if ($data){
             $this->assign('data',$data);
         }else{
             echo "<script>alert('liuyan中没有此id的数据');</script>";
         }

         if (IS_POST){
             $reply = $_POST['reply'];
             $res = $m_liuyan->where('lid='.$id)->setField('reply',$reply);
             if ($res){
                 $_SESSION['userLiuyan'] -=1;//未回复留言数-1
                 echo "<script>alert('回复成功');location='".U('Messages/userLiuyan')."'</script>";
             }else{
                 echo "<script>alert('回复失败');</script>";
             }
         }
         $this->display();//调用视图
     }

}
