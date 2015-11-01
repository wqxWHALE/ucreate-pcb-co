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

        // 配图
        $where        = array('type' => C('配图'));
        $this->figure = M('picture')->where($where)->find();

    }

    public function add_contact_cn(){
        $name = $_POST['name'];
        if($name == ''){
            $this->error('请输入发件人');
        }
        $email = $_POST['email'];
        if($email == ''){
            $this->error('请输入e-mail');
        }
        $company_name = $_POST['company_name'];
        if($company_name == ''){
            $this->error('请输入公司名');
        }
        $telephone = $_POST['telephone'];
        if($telephone == ''){
            $this->error('请输入电话');
        }
        $comments = $_POST['comments'];
        if($comments == ''){
            $this->error('请输入内容');
        }
        $data = array(
            'name'         => $name,
            'email'        => $email,
            'company_name' => $company_name,
            'telephone'    => $telephone,
            'comments'     => $comments,
            'created_time' => Date('Y-m-d H:i:s'),
            'is_read'      => 0,
            'is_active'    => 1
        );
        // 数据插入
        if(!M('contact')->add($data))
        {
            echo 'contact表插入数据出错';die;
        }else{
            $this->success('提交成功，我们会以最快速度与您联系',U('Contact/index',array('lang'=>'zh-cn')));
        }
    }

    public function add_contact_en(){
        $name = $_POST['name'];
        if($name == ''){
            $this->error('please input Name');
        }
        $email = $_POST['email'];
        if($email == ''){
            $this->error('please input E-mail');
        }
        $company_name = $_POST['company_name'];
        if($company_name == ''){
            $this->error('please input Company Name');
        }
        $telephone = $_POST['telephone'];
        if($telephone == ''){
            $this->error('please input Telephone');
        }
        $comments = $_POST['comments'];
        if($comments == ''){
            $this->error('please input Comments');
        }
        // $title   = $company_name . '公司发来的邮件';
        // $content = "联系人姓名：" . $name . "\nE-mail地址：" . $email . "\n公司名：" . $company_name . 
        //             "\n电话：" . $telephone . "\n内容：" . $comments;
        // if(SendMail('418328802@qq.com',$title,$content)){
        //     $is_send = 1;
        // }else{
        //     $is_send = 0;
        // }
        $data = array(
            'name'         => $name,
            'email'        => $email,
            'company_name' => $company_name,
            'telephone'    => $telephone,
            'comments'     => $comments,
            'created_time' => Date('Y-m-d H:i:s'),
            'is_read'      => 0,
            'is_send'      => $is_send,
            'is_active'    => 1
        );
        // 数据插入
        if(!M('contact')->add($data))
        {
            echo 'contact表插入数据出错';die;
        }else{
            $this->success('Success, We will contact you soon！',U('Contact/index',array('lang'=>'en-us')));
        }
    }

}