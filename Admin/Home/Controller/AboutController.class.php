<?php
/**
 *  AUTHOR:CMB
 *  DATE:2015/10/03
 *  FUNCTION: 关于我们（后台）
 */
namespace Home\Controller;
use Think\Controller;
class AboutController extends CommonController {
	
    /* 主页显示 */
    public function index(){
    	// 关于我们
    	$where       = array('type' => C('关于我们'));
    	$this->about = M('text')->where($where)->find();

    	// 关于我们
    	$where       = array('type' => C('组织架构'));
    	$this->construction = M('picture')->where($where)->find();

        // 显示模板
        $this->display();
    }

    /* 修改 */
    public function alter(){
    	// 获取GET数据
    	$id          = $_GET['id'];
    	$this->about = M('text')->find($id);
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
            $this->success('修改成功',U('About/index'));
        }
    }

    /* 修改组织架构 */
    public function alter_construction(){
    	// 获取参数
        $id         = $_GET['id'];
        // 获取当前处理的数据
        $this->data = M('picture')->find($id);
        // 显示模板
        $this->display();
    }

    /* 修改组织架构处理 */
    public function alter_construction_handle(){
    	// 输入限制
        if($_POST['img'] == 0 ){
            $this->error("请选择图片上传");
        }
        // 获取参数
        $id       = $_POST['id'];
        // 获取当前处理的数据
        $where    = array('type' => C('组织架构'));
        $data     = M('picture')->where($where)->find();
        $filename = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $data['pic_adr'];
        $pic_adr  = $this->uploadImage();
        if($pic_adr == -1){
            echo '图片上传错误';die;
        }
        $loginname = $_SESSION['loginname'];
        // 构造数据
        $data = array(
            'id'           => $id,
            'pic_adr'      => $pic_adr,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        if($this->deleteFile($filename) == 1)
        {
            M('picture')->data($data)->save();
            $this->success('修改成功',U('About/index'));
        }else{
            echo "文件删除错误";
        }
    }

}