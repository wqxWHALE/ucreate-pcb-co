<?php
namespace Home\Controller;
use Think\Controller;
class ProductionController extends CommonController {

    public function hard(){
    	// 公共数据
    	$this->common();
    	$this->hard_common();
    	//判断版本
    	if($_GET['lang'] == 'zh-cn'){
    		$this->hard_cn();
    	}else{
    		$this->hard_en();
    	}
    }

    // 中文
    public function hard_cn(){
        // 基础信息
        $this->name     = M('webinfo')->where(array('type' => C('公司名')))->find();
    	$this->display('hard_cn');
    }

    // 英文
    public function hard_en(){
        // 基础信息
        $this->name     = M('webinfo')->where(array('type' => C('公司名英文')))->find();
		$this->display('hard_en');
    }

    // 硬件公共
    public function hard_common(){
    	// 条件
        $where = array('type'=> C('硬板'));
        $data  = M('production')->where($where)->order('sort')->select();
        $this->count = COUNT($data);
        $this->hard  = $data;
    }

    public function soft(){
    	// 公共数据
    	$this->common();
    	$this->soft_common();
    	//判断版本
    	if($_GET['lang'] == 'zh-cn'){
    		$this->soft_cn();
    	}else{
    		$this->soft_en();
    	}
    }

    // 中文
    public function soft_cn(){
    	$this->display('soft_cn');
    }

    // 英文
    public function soft_en(){
		$this->display('soft_en');
    }

    // 硬件公共
    public function soft_common(){
    	// 条件
        $where = array('type'=> C('软板'));
        $data  = M('production')->where($where)->order('sort')->select();
        $this->count = COUNT($data);
        $this->soft  = $data;
    }

    public function mixture(){
    	// 公共数据
    	$this->common();
    	$this->mixture_common();
    	//判断版本
    	if($_GET['lang'] == 'zh-cn'){
    		$this->mixture_cn();
    	}else{
    		$this->mixture_en();
    	}
    }

    // 中文
    public function mixture_cn(){
    	$this->display('mixture_cn');
    }

    // 英文
    public function mixture_en(){
		$this->display('mixture_en');
    }

    // 硬件公共
    public function mixture_common(){
    	// 条件
        $where = array('type'=> C('软硬结合板'));
        $data  = M('production')->where($where)->order('sort')->select();
        $this->count = COUNT($data);
        $this->mixture  = $data;
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