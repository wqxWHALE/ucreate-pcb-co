<?php
/**
 *  AUTHOR:CMB
 *  DATE:2015/10/25
 *  FUNCTION: 首页模块（后台）
 */
namespace Home\Controller;
use Think\Controller;
class HomepageController extends CommonController {

	/* 主页显示 */
    public function index(){
        // 幻灯片
        $where = array('type'=> C('首页模块'));
        $data  = M('picture')->where($where)->order('id desc')->select();
        $this->count   = COUNT($data);
        $this->scroll  = $data;

        // 配图
        $where        = array('type' => C('配图'));
        $this->figure = M('picture')->where($where)->find();

        // 显示模板
        $this->display();
    }

	/* 添加幻灯片 */
    public function add_scroll(){
        // 显示模板
        $this->display();
    }

	/* 添加幻灯片处理 */
    public function add_scroll_handle(){
        // 输入限制
        if($_POST['img'] == 0 ){
            $this->error("请选择图片上传");
        }
        $filename = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $data['pic_adr'];
        $pic_adr  = $this->uploadImage();
        if($pic_adr == -1){
            echo '图片上传错误';die;
        }
        $loginname = $_SESSION['loginname'];
        // 构造数据
        $data = array(
            'id'           => $id,
            'type'         => C('首页模块'),
            'pic_adr'      => $pic_adr,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据插入
        if(!M('picture')->add($data))
        {
            echo 'picture表插入数据出错';die;
        }else{
            $this->success('添加成功',U('Homepage/index'));
        }
    }

    /* 修改幻灯片 */
    public function alter_scroll(){
        // 获取参数
        $id         = $_GET['id'];
        // 获取当前处理的数据
        $this->data = M('picture')->find($id);
        // 显示模板
        $this->display();
    }

    /* 修改幻灯片处理 */
    public function alter_scroll_handle(){
        // 是否为新上传图片
        if($_POST['img'] == 0 ){
            $this->error('请上传图片');
        }
        // 获取参数
        $id       = $_POST['id'];
        // 获取当前处理的数据
        $data     = M('picture')->find($id);
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
        // 判断删除文件
        if($this->deleteFile($filename) == 1)
        {
            if(!M('picture')->data($data)->save()){
                echo 'picture表更新数据出错';die;
            }else{
                $this->success('修改成功',U('Homepage/index'));
            }
        }else{
            echo "删除文件错误";
        }
    }

    /* 删除幻灯片处理 */
    public function delete_scroll_handle(){
        // 获取参数
        $id           = $_GET['id'];
        // 获取当前处理的数据
        $current_data = M('picture')->find($id);
        $filename     = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $current_data['pic_adr'];
        // 删除文件并修改数据库    
        if($this->deleteFile($filename) == 1)
        {
            M('picture')->delete($id);
            $this->success('删除成功');
        }else{
            echo "删除文件错误";
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 修改配图 */
    public function alter_figure(){
        // 获取参数
        $id         = $_GET['id'];
        // 获取当前处理的数据
        $this->data = M('picture')->find($id);
        // 显示模板
        $this->display();
    }

    /* 修改配图处理 */
    public function alter_figure_handle(){
        // 输入限制
        if($_POST['img'] == 0 ){
            $this->error("请选择图片上传");
        }
        // 获取参数
        $id       = $_POST['id'];
        // 获取当前处理的数据
        $where    = array('type' => C('配图'));
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
            $this->success('修改成功',U('Homepage/index'));
        }else{
            echo "文件删除错误";
        }
    }
}