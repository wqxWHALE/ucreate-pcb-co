<?php
/**
 *  AUTHOR:CMB
 *  DATE:2015/10/07
 *  FUNCTION: 人才招聘（后台）
 */
namespace Home\Controller;
use Think\Controller;
class RecruitController extends CommonController {
	
    /* 主页显示 */
    public function index(){
    	// 人才理念
    	$where       = array('type' => C('人才理念'));
    	$this->idea = M('text')->where($where)->find();

    	// 酬薪福利
    	$where       = array('type' => C('酬薪福利'));
    	$this->welfare = M('text')->where($where)->find();

        // 显示模板
        $this->display();
    }

    /* 修改 */
    public function alter(){
    	// 获取GET数据
    	$id          = $_GET['id'];
        $this->name  = $_GET['name'];
    	$this->data  = M('text')->find($id);
        // 显示模板
        $this->display();
    }

    /* 修改处理 */
    public function alter_handle(){
    	// 获取POST数据
    	$id      = $_POST['id'];
    	$content = $_POST['content'];
    	// 构造数据
    	$data = array(
    		'id'      => $id,
    		'content' => $content,
    		'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
    	);
        // 数据更新
        if(!M('text')->data($data)->save())
        {
            echo 'text表更新数据出错';die;
        }else{
            $this->success('修改成功',U('Recruit/index'));
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 主页显示 */
    public function index_en(){
        // 人才理念
        $where       = array('type' => C('人才理念英文'));
        $this->idea = M('text')->where($where)->find();

        // 酬薪福利
        $where       = array('type' => C('酬薪福利英文'));
        $this->welfare = M('text')->where($where)->find();

        // 显示模板
        $this->display();
    }

    /* 修改 */
    public function alter_en(){
        // 获取GET数据
        $id          = $_GET['id'];
        $this->name  = $_GET['name'];
        $this->data  = M('text')->find($id);
        // 显示模板
        $this->display();
    }

    /* 修改处理 */
    public function alter_en_handle(){
        // 获取POST数据
        $id      = $_POST['id'];
        $content = $_POST['content'];
        // 构造数据
        $data = array(
            'id'      => $id,
            'content' => $content,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据更新
        if(!M('text')->data($data)->save())
        {
            echo 'text表更新数据出错';die;
        }else{
            $this->success('修改成功',U('Recruit/index_en'));
        }
    }
}