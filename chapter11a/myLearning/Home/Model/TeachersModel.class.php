<?php
namespace Home\Model;
use Think\Model;
class TeachersModel extends Model {
	protected $insertFields = 'tno,tpwd,tname,tsex,tphone,temail,tschool,tcolle';
	protected $updateFields = 'tno,tpwd,tname,tsex,tphone,temail,tschool,tcolle';
	protected $_validate = array(
		array('tno','require','工号不能为空',1,'',1),
		array('tpwd','require','密码不能为空',1,'',1),
		array('tname','require','姓名不能为空',1,'',1),
		//array('user','2,20','用户名位数不合法（2~20位）',1,'length',1),
		array('tpwd','6,20','密码位数不合法（6~20位）',1,'length',1),
		array('tno', '', '学号已经存在', 1, 'unique', 1),
		
		array('temail','require','邮箱不能为空',1,'',1),
		array('temail', 'email', '邮箱格式不正确', 1, 'regex', 2),
		array('tphone', 11, '手机号码格式不正确', 1, 'length', 2),
		//......实际项目需要更多的验证规则，读者可以自行实现。
		//array('user','/^[0-9a-zA-Z_\x{4e00}-\x{9fa5}]+$/u','用户名只能是汉字、字母、数字、下划线。',1,'',1),
		array('tpwd','/^[\w]+$/','密码只能是字母、数字、下划线。',1,'',1),
		//array('sclass','require','班级不能为空',1,'',1),
		array('tphone','require','手机号不能为空',1,'',2),
	
	);
	//校验用户名和密码
	public function checkUserT($num,$pwd) {
		$data = $this->field('tid,tno,tpwd,salt,freeze')->where(array('tno'=>$num))->find();
		if($data===null){
			return '工号不存在';
		}
		if($data['freeze']=="1"){
			return '该老师账号已被冻结';
		}
		if($data['tpwd']==$this->password($pwd,$data['salt'])){
			//密码正确
			session('user_number',$num);
			session('user_id',$data['tid']);
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
		$data['tpwd'] = $this->password($data['tpwd'],$data['salt']);
	}
}
