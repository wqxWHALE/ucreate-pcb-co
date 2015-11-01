<?php
/**
 *  AUTHOR:CMB
 *  DATE:2015/11/01
 *  FUNCTION: 联系我们（后台）
 */
namespace Home\Controller;
use Think\Controller;
class ContactController extends CommonController {

    /* 主页显示 */
    public function index(){
        // 获得当前页数
        $pageNumber = $_GET['p'];
        if($pageNumber == "") $pageNumber = 0;
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $contact = M('contact')->where(array('is_active' => 1))->order('created_time desc')->page($pageNumber,C('分页'))->select();
        // 查询满足要求的总记录数
        $count             = COUNT($contact);
        // 实例化分页类 传入总记录数和每页显示的记录数
        $page              = new \Think\Page($count,C('分页'));
        // 分页显示输出
        $show              = $page->show();
        // 数据映射
        $this->contact     = $contact;
        $this->page        = $show;
        $this->count       = M('contact')->where(array('is_read' => 0,'is_active' => 1))->count();
        // 输出模板
        $this->display(); 
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 查看界面 */
    public function watch(){
        // 获得参数
        $id = $_GET['id'];
        // 读取数据
        $data = M('contact')->find($id);
        // 数据映射
        $this->data = $data; 
        // 显示模板
        $this->display();
    }

    /* 已读状态处理 */
    public function isRead_handle(){
        // 获得参数
        $id = $_POST['id'];
        // 数据构造
        $data = array(
            'id'      => $id,
            'is_read' => 1
        );
        // 数据更新
        if(!M('contact')->data($data)->save()){
            echo 'contact表更新数据出错';
        }else{
            $this->success('成功标记为已读',U('Contact/index'));
        }
    }

    /* 删除处理 */
    public function delete_handle(){
        // 获取参数
        $id   = $_GET['id'];
        // 构造数据
        $data = array(
            'id'        => $id,
            'is_active' => 0
        );
        // 修改数据
        if(!M('contact')->data($data)->save()){
            echo 'contact表更新数据出错';die;
        }else{
            $this->success('删除成功',U('Contact/index'));
        }
    }


}