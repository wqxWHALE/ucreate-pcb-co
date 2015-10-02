<?php
/**
 *  AUTHOR:CMB
 *  DATE:2015/10/02
 *  FUNCTION: 运维信息（后台）
 */
namespace Home\Controller;
use Think\Controller;
class OperationController extends CommonController {
	
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

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 访问者详情显示 */
    public function visitor(){
        // 获得当前页数
        $pageNumber = $_GET['p'];
        if($pageNumber == "") $pageNumber = 0;
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $visitor = M('visitor')->order('created_time desc')->page($pageNumber,C('分页'))->select();
        // 查询满足要求的总记录数
        $count             = M('visitor')->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $page              = new \Think\Page($count,C('分页'));
        // 分页显示输出
        $show              = $page->show();
        // 数据映射
        $this->page        = $show;
        $this->visitor     = $visitor;
        // 显示模板
        $this->display();
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 用户信息显示 */
    public function user(){
        // 基础信息
        $this->name      = M('webinfo')->where(array('type' => C('公司名')))->find();
        $this->beian     = M('webinfo')->where(array('type' => C('备案')))->find();
        $this->telephone = M('webinfo')->where(array('type' => C('电话')))->find();
        $this->fax       = M('webinfo')->where(array('type' => C('传真')))->find();
        $this->email     = M('webinfo')->where(array('type' => C('邮箱')))->find();
        $this->website   = M('webinfo')->where(array('type' => C('网站')))->find();
        $this->office    = M('webinfo')->where(array('type' => C('办公室')))->find();
        $this->factory_shenzhen = M('webinfo')->where(array('type' => C('深圳工厂')))->find();
        $this->factory_huizhou  = M('webinfo')->where(array('type' => C('惠州工厂')))->find();
        // 显示模板
        $this->display();
    }

    /* 用户信息修改显示 */
    public function user_alter(){
        // 获取GET参数
        $id   = $_GET['id'];
        $name = $_GET['name'];
        // 查找数据
        $data = M('webinfo')->find($id);
        $data['name'] = $name;
        $this->data = $data;
        // 显示模板
        $this->display();
    }

    /* 用户信息修改处理 */
    public function user_alter_handle(){
        // 获取POST参数
        $id      = $_POST['id'];
        $content = $_POST['content'];
        // 构造数据
        $data = array(
            'id'           => $id,
            'content'      => $content,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据更新
        if(!M('webinfo')->data($data)->save())
        {
            echo 'webinfo表更新数据出错';die;
        }else{
            $this->success('修改成功',U('Operation/User'));
        }
    }

}