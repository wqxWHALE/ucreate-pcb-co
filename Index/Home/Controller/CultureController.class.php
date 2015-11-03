<?php
namespace Home\Controller;
use Think\Controller;
class CultureController extends CommonController {

    public function index(){
    	// 公共数据
    	$this->common();
        $this->index_common();
    	//判断版本
    	if($_GET['lang'] == 'zh-cn'){
    		$this->index_cn();
    	}else{
    		$this->index_en();
    	}
    }

    // 中文
    public function index_cn(){
        // 企业精神
        $where       = array('type' => C('企业精神'));
        $this->spirit = M('text')->where($where)->find();
        // 文字
        $where       = array('type' => C('企业文化建设'));
        $this->build = M('text')->where($where)->find();
        // 基础信息
        $this->name     = M('webinfo')->where(array('type' => C('公司名')))->find();

    	$this->display('index_cn');
    }

    // 英文
    public function index_en(){
        // 企业精神
        $where       = array('type' => C('企业精神英文'));
        $this->spirit = M('text')->where($where)->find();
        // 文字
        $where       = array('type' => C('企业文化建设英文'));
        $this->build = M('text')->where($where)->find();
        // 基础信息
        $this->name     = M('webinfo')->where(array('type' => C('公司名英文')))->find();
        
		$this->display('index_en');
    }

    public function index_common(){
        // 图片
        $where = array('type'=> C('企业文化建设'));
        $data  = M('picture')->where($where)->select();
        $this->count = COUNT($data);
        $this->picture  = $data;
    }

    public function news(){
        // 公共数据
        $this->common();
        //判断版本
        if($_GET['lang'] == 'zh-cn'){
            $this->news_cn();
        }else{
            $this->news_en();
        }
    }

    // 中文
    public function news_cn(){
        // 基础信息
        $this->name     = M('webinfo')->where(array('type' => C('公司名')))->find();
        $this->office   = M('webinfo')->where(array('type' => C('办公室')))->find();
        // 获得当前页数
        $pageNumber = $_GET['p'];
        if($pageNumber == "") $pageNumber = 0;
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $news = M('news')->order('created_time desc')->page($pageNumber,C('分页'))->select();
        // 查询满足要求的总记录数
        $count   = COUNT($new);
        // 实例化分页类 传入总记录数和每页显示的记录数
        $page          = new \Think\Page($count,C('分页'));
        // 分页显示输出
        $show          = $page->show();
        // 数据映射
        $this->news    = $news;
        $this->page    = $show;
        $this->count   = $count;
        $this->display('news_cn');
    }

    // 英文
    public function news_en(){
        // 基础信息
        $this->name     = M('webinfo')->where(array('type' => C('公司名英文')))->find();
        $this->office   = M('webinfo')->where(array('type' => C('办公室英文')))->find();
        // 获得当前页数
        $pageNumber = $_GET['p'];
        if($pageNumber == "") $pageNumber = 0;
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $news = M('news_en')->order('created_time desc')->page($pageNumber,C('分页'))->select();
        // 查询满足要求的总记录数
        $count   = COUNT($new);
        // 实例化分页类 传入总记录数和每页显示的记录数
        $page          = new \Think\Page($count,C('分页'));
        // 分页显示输出
        $show          = $page->show();
        // 数据映射
        $this->news    = $news;
        $this->page    = $show;
        $this->count   = $count;
        $this->display('news_en');
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

    public function news_content_cn(){
        // 具体新闻
        $id = $_GET['id'];
        $this->data = M('news')->find($id);
        // 侧边新闻
        $news = M('news')->order('created_time desc')->limit(5)->select();
        foreach ($news as $key => $value) {
            $temp = explode(' ',$value['created_time']);
            $news[$key]['created_time'] = $temp[0];
        }
        $this->news = $news;
        // 侧边信息
        $this->common();
        // 基础信息
        $this->name     = M('webinfo')->where(array('type' => C('公司名')))->find();
        $this->office   = M('webinfo')->where(array('type' => C('办公室')))->find();
        $this->display();
    }

    public function news_content_en(){
        // 具体新闻
        $id = $_GET['id'];
        $this->data = M('news_en')->find($id);
        // 侧边新闻
        $news = M('news_en')->order('created_time desc')->limit(5)->select();
        foreach ($news as $key => $value) {
            $temp = explode(' ',$value['created_time']);
            $news[$key]['created_time'] = $temp[0];
        }
        $this->news = $news;
        // 侧边信息
        $this->common();
        // 基础信息
        $this->name     = M('webinfo')->where(array('type' => C('公司名英文')))->find();
        $this->office   = M('webinfo')->where(array('type' => C('办公室英文')))->find();
        $this->display();
    }

}