<?php
namespace Home\Controller;
use Think\Controller;
class ContactController extends CommonController {

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
        $this->office   = M('webinfo')->where(array('type' => C('办公室')))->find();
        $this->factory_shenzhen  = M('webinfo')->where(array('type' => C('深圳工厂')))->find();
        $this->factory_huizhou   = M('webinfo')->where(array('type' => C('惠州工厂')))->find();
    	$this->display('index_cn');
    }

    // 英文
    public function index_en(){
    	// 基础信息
        $this->name             = M('webinfo')->where(array('type' => C('公司名英文')))->find();
        $this->office           = M('webinfo')->where(array('type' => C('办公室英文')))->find();
        $this->factory_shenzhen = M('webinfo')->where(array('type' => C('深圳工厂英文')))->find();
        $this->factory_huizhou  = M('webinfo')->where(array('type' => C('惠州工厂英文')))->find();
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

    }

    public function add_contact_cn(){
        $name = $_POST['name'];
        if($name = ''){
            $this->error('请输入发件人');
        }
        $email = $_POST['email'];
        if($email = ''){
            $this->error('请输入e-mail');
        }
        $company = $_POST['company'];
        if($company = ''){
            $this->error('请输入公司名');
        }
        $telephone = $_POST['telephone'];
        if($telephone = ''){
            $this->error('请输入电话');
        }
        $content = $_POST['content'];
        if($content = ''){
            $this->error('请输入内容');
        }
        
    }
}