<?php
namespace Home\Controller;
use Think\Controller;
class QualityController extends CommonController {

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
        // 基础信息
        $this->name     = M('webinfo')->where(array('type' => C('公司名')))->find();
    	$this->display('index_cn');
    }

    // 英文
    public function index_en(){

		$this->display('index_en');
    }

    // 公共
    public function common(){
        // 基础信息
        $this->beian     = M('webinfo')->where(array('type' => C('备案')))->find();
        $this->telephone = M('webinfo')->where(array('type' => C('电话')))->find();
        $this->fax       = M('webinfo')->where(array('type' => C('传真')))->find();
        $this->email     = M('webinfo')->where(array('type' => C('邮箱')))->find();
        $this->website   = M('webinfo')->where(array('type' => C('网站')))->find();

        // 图片
        $where = array('type'=> C('资格证书'));
        $data  = M('picture')->where($where)->order('id desc')->select();
        $this->count = COUNT($data);
        $this->picture  = $data;

    }

}