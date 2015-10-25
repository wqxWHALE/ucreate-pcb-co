<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends CommonController {

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

    // 中文
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

    // 英文
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
            $this->achievement_cn();
        }else{
            $this->achievement_en();
        }
    }

    // 市场成就中文
    public function achievement_cn(){
        $this->display('achievement_cn');
    }

    // 市场成就英文
    public function achievement_en(){
        $this->display('achievement_en');
    }

    // 公共
    public function common(){
        // 基础信息
        $this->beian     = M('webinfo')->where(array('type' => C('备案')))->find();
        $this->telephone = M('webinfo')->where(array('type' => C('电话')))->find();
        $this->fax       = M('webinfo')->where(array('type' => C('传真')))->find();
        $this->email     = M('webinfo')->where(array('type' => C('邮箱')))->find();
        $this->website   = M('webinfo')->where(array('type' => C('网站')))->find();
        // 组织架构
        $where       = array('type' => C('组织架构'));
        $this->construction = M('picture')->where($where)->find(); 
        // 企业精神
        $where       = array('type' => C('企业精神'));
        $this->spirit = M('text')->where($where)->find();
        // 配图
        $where        = array('type' => C('配图'));
        $this->figure = M('picture')->where($where)->find();
    }

}