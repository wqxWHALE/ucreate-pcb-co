<?php
/**
 *  AUTHOR:CMB
 *  DATE:2015/9/20
 *  FUNCTION: 首页（后台）
 */
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
	
    /* 主页显示 */
    public function index(){
        // 显示模板
        $this->display();
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* JSON获取报名名单*/
    public function getApplicationCount(){
        // 读取数据
        $where = array(
            'is_read'   => 0,
            'is_active' => 1
        );
        $count = M('contact')->where($where)->count();
        // ajax返回
        $this->ajaxReturn($count);
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 技术支持界面 */
    public function help(){
    	$this->display();
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 修改密码界面 */
    public function changePassword(){
        // 读取昵称
        $data = M('admin')->find(1);
        $this->nickname = $data['nickname'];
        // 显示模板
    	$this->display();
    }

    /* 修改密码处理 */
    public function changePasswordHandle(){
        // 判断是否使用POST提交，防偷入
        if(!IS_POST) halt('页面不存在');
        // 获取提交的账号密码
        $current_loginname  = $_POST['current_loginname'];
        $current_password   = $_POST['current_password'];
        $new_password       = $_POST['new_password'];
        $new_password_again = $_POST['new_password_again'];
        if(!empty($current_loginname) && !empty($current_password) 
            && !empty($new_password) && !empty($new_password_again)){
            // 重复输入的密码与新密码不一致
            if($new_password != $new_password_again){
                $this->error('重复输入的密码与新密码不一致');
            }
            if($new_password == $current_password){
                $this->error('新密码与旧密码不能一致');
            }
            // 获取该账号信息
            $where['loginname'] = $current_loginname;
            // 判断账号是否存在
            if($data = M('admin')->where($where)->find())
            {
                /* 存在 */
                if($data['password'] == md5($current_password.$data['salt']))
                {
                    $data = array(
                        'id'        => $data['id'],
                        'loginname' => $current_loginname,
                        'password'  => md5($new_password.$data['salt'])
                    );
                    if(M('admin')->data($data)->save()){
                        $this->success('密码修改成功',U('Index/changePassword'));
                    }else{
                        $this->error('错误002');
                    }                
                }else{
                    $this->error('账号或密码错误');
                }
            }else{
                /* 不存在 */
                $this->error('账号不存在');
            }
        }else{
            $this->error('请正确输入所有项目');
        }
    }

}