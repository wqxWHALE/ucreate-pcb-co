<?php
/**
 *  AUTHOR:CMB
 *  DATE:2015/10/07
 *  FUNCTION: 新闻中心（后台）
 */
namespace Home\Controller;
use Think\Controller;
class NewsController extends CommonController {
	
    /* 主页显示 */
    public function index(){
        // 获得当前页数
        $pageNumber = $_GET['p'];
        if($pageNumber == "") $pageNumber = 0;
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $news = M('news')->order('created_time desc')->page($pageNumber,C('分页'))->select();
        // 查询满足要求的总记录数
        $count   = M('news')->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $page          = new \Think\Page($count,C('分页'));
        // 分页显示输出
        $show          = $page->show();
        // 数据映射
        $this->news    = $news;
        $this->page    = $show;
        $this->count   = $count;
        // 输出模板
        $this->display(); 
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 添加界面 */
    public function add(){
        // 输出模板
    	$this->display();
    }

    /* 添加处理 */
    public function add_handle(){
        // 获取参数
        $title        = $_POST['title'];
        $content      = $_POST['content'];
        // 输入限制
        if($title == ""){
            $this->error('请输入标题');
        }
        if($content == ""){
            $this->error('请输入内容');
        }
        // 获取操作者
        $loginname = $_SESSION['loginname'];
        // 构造数据
        $data = array(
            'title'        => $title,
            'content'      => $content,
            'click'        => 0,
            'controller'   => $loginname,
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据插入
        if(!M('news')->add($data))
        {
            echo 'news表插入数据出错';die;
        }else{
            $this->success('添加成功',U('News/index'));
        }
    }

    /* 修改界面 */
    public function alter(){
        // 获取参数
        $id = $_GET['id'];
        // 查询数据
        $this->data = M('news')->find($id);
        // 输出模板
    	$this->display();
    }

    /* 修改处理 */
    public function alter_handle(){
        // 获取参数
        $id           = $_POST['id'];
        $title        = $_POST['title'];
        $content      = $_POST['content'];
        // 输入限制
        if($title == ""){
            $this->error('请输入标题');
        }
        if($content == ""){
            $this->error('请输入内容');
        }
        // 获取操作者
        $loginname = $_SESSION['loginname'];
        // 构造数据
        $data = array(
            'id'           => $id,
            'title'        => $title,
            'content'      => $content,
            'controller'   => $loginname
        );
        // 数据更新
        if(!M('news')->data($data)->save())
        {
            echo 'news表更新数据出错';die;
        }else{
            $this->success('修改成功',U('News/index'));
        } 
    }

    /* 删除处理 */
    public function delete_handle(){
        // 获取参数
        $id           = $_GET['id'];
        // 数据删除
        if(!M('news')->delete($id))
        {
            echo 'news表删除数据出错';die;
        }else{
            $this->success('修改成功',U('News/index'));
        }
    }
}