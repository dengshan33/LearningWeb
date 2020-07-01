<?php
/**
 * Created by PhpStorm.
 * User: QinHsiu
 * Date: 2020/5/3
 * Time: 16:07
 */
namespace Home\Model;
//引入父类
use Think\Model;
class BackModel extends Model{

    //addData
    public function addData($post,$file){
        //数据分为文件+字符
        if($file['error'] == '0'){
            //有文件需要处理
            $cfg = array('rootPath' => WORKING_PATH . UPLOAD_ROOT_PATH);
            //实例化上传类
            $upload = new \Think\Upload($cfg);
            //开始上传
            $info = $upload -> uploadOne($file);
            //dump($info);die;
            //判断上传结果
            if($info){
                //上传成功，此时需要处理数据表中需要的字段
                //file、hasfile、filename
                $post['file'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];	//文件在磁盘上存储路径
                $post['hasfile'] = '1';	//表示是否有文件
                $post['filename'] = $info['name'];	//文件的原始名称
            }
        }
        //补充字段from_id、addtime
        $post['from_id'] = session('id');	//发件人的id
        $post['addtime'] =date('Y-m-d');	//发送时间
        //数据的保存
        return $this -> add($post);
    }
}