<?php
/**
 *  AUTHOR:CMB
 *  DATE:2015/10/11
 *  FUNCTION: 资格证书（后台）
 */
namespace Home\Controller;
use Think\Controller;
class QualityController extends CommonController {

	/* 主页显示 */
    public function index(){
        // 图片
        $where = array('type'=> C('资格证书'));
        $data  = M('picture')->where($where)->select();
        $this->count = COUNT($data);
        $this->picture  = $data;

        // 显示模板
        $this->display();
    }

	/* 设备展示添加 */
    public function add_picture(){
        // 显示模板
        $this->display();
    }

	/* 设备展示添加处理 */
    public function add_picture_handle(){
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
            'type'         => C('资格证书'),
            'pic_adr'      => $pic_adr,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据插入
        if(!M('picture')->add($data))
        {
            echo 'picture表插入数据出错';die;
        }else{
            $this->success('添加成功',U('Quality/index'));
        }
    }

    /* 修改设备展示 */
    public function alter_picture(){
        // 获取参数
        $id         = $_GET['id'];
        // 获取当前处理的数据
        $this->data = M('picture')->find($id);
        // 显示模板
        $this->display();
    }

    /* 修改设备展示处理 */
    public function alter_picture_handle(){
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
                $this->success('修改成功',U('Quality/index'));
            }
        }else{
            echo "删除文件错误";
        }
    }

    /* 设备展示删除处理 */
    public function delete_picture_handle(){
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
}