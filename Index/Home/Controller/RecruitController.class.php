<?php
namespace Home\Controller;
use Think\Controller;
class RecruitController extends CommonController {

	public function idea(){
    	// 公共数据
    	$this->common();
    	//判断版本
    	if($_GET['lang'] == 'zh-cn'){
    		$this->idea_cn();
    	}else{
    		$this->idea_en();
    	}
    }

    // 中文
    public function idea_cn(){
    	// 人才理念
    	$where       = array('type' => C('人才理念'));
    	$this->idea = M('text')->where($where)->find();
        // 基础信息
        $this->name     = M('webinfo')->where(array('type' => C('公司名')))->find();
    	$this->display('idea_cn');
    }

    // 英文
    public function idea_en(){
        // 人才理念
        $where       = array('type' => C('人才理念英文'));
        $this->idea = M('text')->where($where)->find();
        // 基础信息
        $this->name     = M('webinfo')->where(array('type' => C('公司名英文')))->find();
		$this->display('idea_en');
    }

    public function welfare(){
    	// 公共数据
    	$this->common();
    	//判断版本
    	if($_GET['lang'] == 'zh-cn'){
    		$this->welfare_cn();
    	}else{
    		$this->welfare_en();
    	}
    }

    // 中文
    public function welfare_cn(){
    	// 酬薪福利
    	$where       = array('type' => C('酬薪福利'));
    	$this->welfare = M('text')->where($where)->find();
        // 基础信息
        $this->name     = M('webinfo')->where(array('type' => C('公司名')))->find();
    	$this->display('welfare_cn');
    }

    // 英文
    public function welfare_en(){
        // 酬薪福利
        $where       = array('type' => C('酬薪福利英文'));
        $this->welfare = M('text')->where($where)->find();
        // 基础信息
        $this->name     = M('webinfo')->where(array('type' => C('公司名英文')))->find();
		$this->display('welfare_en');
    }

    // 公共
    public function common(){
        // 基础信息
        $this->beian     = M('webinfo')->where(array('type' => C('备案')))->find();
        $this->telephone = M('webinfo')->where(array('type' => C('电话')))->find();
        $this->fax       = M('webinfo')->where(array('type' => C('传真')))->find();
        $this->email     = M('webinfo')->where(array('type' => C('邮箱')))->find();
        $this->website   = M('webinfo')->where(array('type' => C('网站')))->find();

        // 配图
        $where        = array('type' => C('配图'));
        $this->figure = M('picture')->where($where)->find();
    }
}