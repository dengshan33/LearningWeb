<?php
namespace Home\Model;
use Think\Model;
class StudentsModel extends Model {
	protected $insertFields = 'sno,spwd,sname,ssex,sphone,semail,school,scolle,syear,smajor,sclass';
	protected $updateFields = 'sno,spwd,sname,ssex,sphone,semail,school,scolle,syear,smajor,sclass';
	protected $_validate = array(
		array('sno','require','学号不能为空',1,'',1),
		array('spwd','require','密码不能为空',1,'',1),
		array('sname','require','姓名不能为空',1,'',1),
		//array('user','2,20','用户名位数不合法（2~20位）',1,'length',1),
		array('spwd','6,20','密码位数不合法（6~20位）',1,'length',1),
		array('sno', '', '学号已经存在', 1, 'unique', 1),
		
		array('semail','require','邮箱不能为空',1,'',1),
		array('semail', 'email', '邮箱格式不正确', 1, 'regex', 2),
		array('sphone', 11, '手机号码格式不正确', 1, 'length', 2),
		//......实际项目需要更多的验证规则，读者可以自行实现。
		//array('user','/^[0-9a-zA-Z_\x{4e00}-\x{9fa5}]+$/u','用户名只能是汉字、字母、数字、下划线。',1,'',1),
		array('spwd','/^[\w]+$/','密码只能是字母、数字、下划线。',1,'',1),
		array('sclass','require','班级不能为空',1,'',1),
		array('sphone','require','手机号不能为空',1,'',2),
	
	);
	//校验用户名和密码
	public function checkUser($num,$pwd) {
		$data = $this->field('sid,sno,spwd,salt,freeze')->where(array('sno'=>$num))->find();
		if($data===null){
			return '学号不存在';
		}
		if($data['freeze']=="1"){
			return '该学生账号已被冻结';
		}
		if($data['spwd']==$this->password($pwd,$data['salt'])){
			//密码正确
			session('user_number',$num);
			session('user_id',$data['sid']);
			return true;
		}
		return '密码错误';
	}
	
	//密码加密函数
	private function password($pwd,$salt){
		return md5(md5($pwd).$salt);
	}
	//插入数据前的回调方法
	protected function _before_insert(&$data,$option) {
		$data['salt'] = substr(uniqid(), -6);
		$data['spwd'] = $this->password($data['spwd'],$data['salt']);
	}
}
