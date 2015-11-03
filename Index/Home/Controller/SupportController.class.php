<?php
namespace Home\Controller;
use Think\Controller;
class SupportController extends CommonController {

    public function device(){
    	// 公共数据
    	$this->common();
    	$this->device_common();
    	//判断版本
    	if($_GET['lang'] == 'zh-cn'){
    		$this->device_cn();
    	}else{
    		$this->device_en();
    	}
    }

    // 中文
    public function device_cn(){
        // 设备简介
        $where       = array('type' => C('设备简介'));
        $this->device = M('text')->where($where)->find();
        // 基础信息
        $this->name     = M('webinfo')->where(array('type' => C('公司名')))->find();
    	$this->display('device_cn');
    }

    // 英文
    public function device_en(){
        // 设备简介
        $where       = array('type' => C('设备简介英文'));
        $this->device = M('text')->where($where)->find();
        // 基础信息
        $this->name     = M('webinfo')->where(array('type' => C('公司名英文')))->find();
		$this->display('device_en');
    }

    // 硬件公共
    public function device_common(){
        // 设备展示
        $where       = array('type' => C('设备展示'));
        $this->show  = M('picture')->where($where)->select();

        // 配图
        $where        = array('type' => C('配图'));
        $this->figure = M('picture')->where($where)->find();
    }

    public function process(){
        // 公共数据
        $this->common();
        //判断版本
        if($_GET['lang'] == 'zh-cn'){
            $this->process_cn();
        }else{
            $this->process_en();
        }
    }

    // 中文
    public function process_cn(){
        // 条件
        $where         = array('type' => C('生产流程'));
        $this->process = M('text')->where($where)->find();
        $this->display('process_cn');
    }

    // 英文
    public function process_en(){
        // 条件
        $where         = array('type' => C('生产流程英文'));
        $this->process = M('text')->where($where)->find();
        $this->display('process_en');
    }

    public function ability(){
        // 公共数据
        $this->common();
        //判断版本
        if($_GET['lang'] == 'zh-cn'){
            $this->ability_cn();
        }else{
            $this->ability_en();
        }
    }

    // 中文
    public function ability_cn(){
        // 读取数据
        $ability       = M('ability')->select();
        $this->count   = COUNT($ability);
        $this->ability = $ability;
        $this->display('ability_cn');
    }

    // 英文
    public function ability_en(){
        // 读取数据
        $ability       = M('ability_en')->select();
        $this->count   = COUNT($ability);
        $this->ability = $ability;
        $this->display('ability_en');
    }


    // 公共
    public function common(){
        // 基础信息
        $this->beian     = M('webinfo')->where(array('type' => C('备案')))->find();
        $this->telephone = M('webinfo')->where(array('type' => C('电话')))->find();
        $this->fax       = M('webinfo')->where(array('type' => C('传真')))->find();
        $this->email     = M('webinfo')->where(array('type' => C('邮箱')))->find();
        $this->website   = M('webinfo')->where(array('type' => C('网站')))->find();
    }

}