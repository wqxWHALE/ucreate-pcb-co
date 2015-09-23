<?php
/**
 *  AUTHOR:CMB
 *  DATE:2015/6/08
 *  FUNCTION: 网站基础信息（后台）
 */
namespace Home\Controller;
use Think\Controller;
class WebinfoController extends CommonController {
	
    /* 主页显示 */
    public function index(){
        // 日访问量分布
        $visitorDay = M('visitor')->select();
        $this->visitorDay = $this->getDay($visitorDay);
        // 月访问量分布
        $visitorMonth = M('visitor')->select();
        $this->visitorMonth = $this->getMonth($visitorMonth);
        // 服务器信息
    	$this->system_type_version = php_uname();
    	$this->run_type            = php_sapi_name();
    	$this->php_version         = PHP_VERSION;
    	$this->php_path            = DEFAULT_INCLUDE_PATH;
    	$this->current_server_ip   = GetHostByName($_SERVER['SERVER_NAME']);
        $this->current_server_port = $_SERVER['SERVER_PORT'];
        $this->domain              = $_SERVER["HTTP_HOST"];
        $this->server_software     = $_SERVER['SERVER_SOFTWARE'];
        // 基础信息
        $phone   = M('webinfo')->where(array('type' => C('电话')))->find();
        $beian   = M('webinfo')->where(array('type' => C('备案')))->find();
        $banquan = M('webinfo')->where(array('type' => C('版权')))->find();
        $address = M('webinfo')->where(array('type' => C('地址')))->find();
        $this->phone   = $phone['content'];
        $this->beian   = $beian['content'];
        $this->banquan = $banquan['content'];
        $this->address = $address['content'];
        // 显示模板
        $this->display();
    }

    public function alter_info(){
        // 获取电话
        $this->phone   = M('webinfo')->where(array('type' => C('电话')))->find();
        // 获取备案
        $this->beian   = M('webinfo')->where(array('type' => C('备案')))->find();
        // 获取版权
        $this->banquan = M('webinfo')->where(array('type' => C('版权')))->find();
        // 获取地址
        $this->address = M('webinfo')->where(array('type' => C('地址')))->find();
        // 显示模板
        $this->display();
    }

    public function alter_info_handle(){
        // 获取参数
        $phone   = $_POST['phone'];
        $beian   = $_POST['beian'];
        $banquan = $_POST['banquan'];
        $address = $_POST['address'];
        // 输入限制
        if($phone   == ""){
            $this->error('请输入电话');
        }
        if($beian   == ""){
            $this->error('请输入备案');
        }
        if($banquan == ""){
            $this->error('请输入版权');
        }
        if($address == ""){
            $this->error('请输入地址');
        }
        // 构造数据
        $phone = array(
            'id'           => 1,
             'content'     => $phone,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        $beian = array(
            'id'           => 2,
            'content'      => $beian,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        $banquan = array(
            'id'           => 3,
            'content'      => $banquan,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        $address = array(
            'id'           => 4,
            'content'      => $address,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        M('webinfo')->data($phone)->save();
        M('webinfo')->data($beian)->save();
        M('webinfo')->data($banquan)->save();
        M('webinfo')->data($address)->save();
        $this->success('修改成功',U('Webinfo/index'));
    }

    /* 获取月 */
    public function getMonth($data){
        $month = array(
            '01' => 0, '02' => 0, '03' => 0, '04' => 0, '05' => 0, '06' => 0, '07' => 0, '08' => 0, '09' => 0, '10' => 0, '11' => 0, '12' => 0
        );
        for($i=0,$j=0;$i<COUNT($data);$i++){
            $day[$i] = $data[$i]['created_time'];
            // 取得日期
            $middle = explode(' ',$day[$i]);
            $date  = $middle['0'];
            // 取得年月日
            $middle = explode('-',$date);
            $data[$i]['year']  = $middle['0'];
            $data[$i]['month'] = $middle['1'];
            $data[$i]['day']   = $middle['2'];
            // 截取年份后的日期
            $year = Date('Y');
            if($data[$i]['year'] == $year){
                $month[$data[$i]['month']]++;
            }
        }
        return $month;
    } 

    /* 获取一周 */
    public function getDay($data){
        // 获取一周日期
        $day_1 = date("m-d",strtotime("-1 day"));
        $day_2 = date("m-d",strtotime("-2 day"));
        $day_3 = date("m-d",strtotime("-3 day"));
        $day_4 = date("m-d",strtotime("-4 day"));
        $day_5 = date("m-d",strtotime("-5 day"));
        $day_6 = date("m-d",strtotime("-6 day"));
        $dateTime  = array(
            '0' => $day_6,
            '1' => $day_5,
            '2' => $day_4,
            '3' => $day_3,
            '4' => $day_2,
            '5' => $day_1,
            '6' => "今天",
        );
        $count  = array(
            '0' => 0,
            '1' => 0,
            '2' => 0,
            '3' => 0,
            '4' => 0,
            '5' => 0,
            '6' => 0,
        );
        $sum = 0;
        // 遍历
        for($i=0,$j=0;$i<COUNT($data);$i++){
            $day[$i] = $data[$i]['created_time'];
            // 取得日期
            $middle = explode(' ',$day[$i]);
            $date  = $middle['0'];
            if($date == date('Y-m-d')){
                $count['6']++;
                $sum++;
            }
            if($date == date('Y-m-d',strtotime("-1 day"))){
                $count['5']++;
                $sum++;
            }
            if($date == date('Y-m-d',strtotime("-2 day"))){
                $count['4']++;
                $sum++;
            }
            if($date == date('Y-m-d',strtotime("-3 day"))){
                $count['3']++;
                $sum++;
            }
            if($date == date('Y-m-d',strtotime("-4 day"))){
                $count['2']++;
                $sum++;
            }
            if($date == date('Y-m-d',strtotime("-5 day"))){
                $count['1']++;
                $sum++;
            }
            if($date == date('Y-m-d',strtotime("-6 day"))){
                $count['0']++;
                $sum++;
            }
        }
        $day = array(
            'date'  => $dateTime,
            'count' => $count,
            'ave'   => (int)($sum/7),
        );
        return $day;
    } 

}