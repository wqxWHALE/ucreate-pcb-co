<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller {
	
    /* 主页显示 */
    public function index(){
        $this->display();
    }

    /* 验证账号和密码 */
    public function verify(){
    	// 判断是否使用POST提交，防偷入
        if(!IS_POST) halt('页面不存在');
        // 获取提交的账号密码
    	$loginname = $_POST['loginname'];
    	$password  = $_POST['password'];
    	if(!empty($loginname) && !empty($password)){
    		// 获取该账号信息
    		$where['loginname'] = $loginname;
    		// 判断账号是否存在
    		if($data = M('admin')->where($where)->find())
    		{
    			/* 存在 */
    			if($data['password'] == md5($password.$data['salt']))
    			{
    				$this->updateLastLoginTime($data['id']);
    				$_SESSION['loginname'] = $loginname;
    				$this->success('登录成功',U('Index/index'));
    			}else{
    				$this->error('账号或密码错误');
    			}

    		}else{
    			/* 不存在 */
				$this->error('账号不存在');
    		}
    	}else{
    		$this->error('请输入账号或密码');
    	}
    }

    /* 更新最后登录时间 */
    public function updateLastLoginTime($id){
    	// 获取当前时间
    	$lastLoginTime = Date('Y-m-d H:i:s');
    	// 构造数据结构
    	$data = array(
    		'id'              => $id,
    		'last_login_time' => $lastLoginTime
    	);
    	// 插入数据库
    	if(M('admin')->data($data)->save()){
    		return true;
    	}else{
    		$this->error('错误001');
    	}
    }

    /* 登出 */
    public function loginout(){
        unset($_SESSION['loginname']);
        $this->success('退出成功',U('Index/index'));
        //$this->redirect('Index/index');
        //echo "<script type='text/javascript'>parent.window.location.href ='".U('Login/index')."'</script>";
    }

}