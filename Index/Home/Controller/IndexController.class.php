<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {

    // 首页
    public function index(){
    	// 公共数据
    	$this->common();
    	//判断版本
    	if($_GET['lang'] == 'zh-cn'){
    		$this->index_cn();
    	}else{
    		$this->index_en();
    	}
    }

    // 首页中文
    public function index_cn(){
        // 关于我们
        $where       = array('type' => C('关于我们'));
        $this->about = M('text')->where($where)->find();
        // 基础信息
        $this->name     = M('webinfo')->where(array('type' => C('公司名')))->find();
        $this->office   = M('webinfo')->where(array('type' => C('办公室')))->find();
        $this->factory  = M('webinfo')->where(array('type' => C('深圳工厂')))->find();
        $this->factory  = M('webinfo')->where(array('type' => C('惠州工厂')))->find();
    	$this->display('index_cn');
    }

    // 首页英文
    public function index_en(){
        // 关于我们
        $where       = array('type' => C('关于我们英文'));
        $this->about = M('text')->where($where)->find();
        // 基础信息
        $this->name             = M('webinfo')->where(array('type' => C('公司名英文')))->find();
        $this->office           = M('webinfo')->where(array('type' => C('办公室英文')))->find();
        $this->factory_shenzhen = M('webinfo')->where(array('type' => C('深圳工厂英文')))->find();
        $this->factory_huizhou  = M('webinfo')->where(array('type' => C('惠州工厂英文')))->find();
		$this->display('index_en');
    }

    // 市场成就
    public function achievement(){
        // 公共数据
        $this->common();
        //判断版本
        if($_GET['lang'] == 'zh-cn'){
            $this->index_cn();
        }else{
            $this->index_en();
        }
    }

    // 公共
    public function common(){
    	// 幻灯片
        $where = array('type'=> C('首页模块'));
        $data  = M('picture')->where($where)->order('id desc')->select();
        $this->count   = COUNT($data);
        $this->scroll  = $data;
        // 基础信息
        $this->beian     = M('webinfo')->where(array('type' => C('备案')))->find();
        $this->telephone = M('webinfo')->where(array('type' => C('电话')))->find();
        $this->fax       = M('webinfo')->where(array('type' => C('传真')))->find();
        $this->email     = M('webinfo')->where(array('type' => C('邮箱')))->find();
        $this->website   = M('webinfo')->where(array('type' => C('网站')))->find();
        // 设备展示
        $where       = array('type' => C('设备展示'));
        $this->show  = M('picture')->where($where)->limit(4)->select();
        // 作品展示
        $this->work  = M('production')->limit(12)->select();  
    }

}