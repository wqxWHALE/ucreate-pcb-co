<?php
/**
 *  AUTHOR:CMB
 *  DATE:2015/10/07
 *  FUNCTION: 企业文化（后台）
 */
namespace Home\Controller;
use Think\Controller;
class CultureController extends CommonController {
	
    /* 主页显示 */
    public function spirit(){
    	// 企业精神
    	$where       = array('type' => C('企业精神'));
    	$this->spirit = M('text')->where($where)->find();

        // 显示模板
        $this->display();
    }

    /* 修改 */
    public function alter_spirit_text(){
    	// 获取GET数据
    	$id          = $_GET['id'];
    	$this->data  = M('text')->find($id);
        // 显示模板
        $this->display();
    }

    /* 修改处理 */
    public function alter_spirit_text_handle(){
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
            $this->success('修改成功',U('Culture/spirit'));
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 主页显示 */
    public function spirit_en(){
        // 企业精神
        $where       = array('type' => C('企业精神英文'));
        $this->spirit = M('text')->where($where)->find();

        // 显示模板
        $this->display();
    }

    /* 修改 */
    public function alter_spirit_text_en(){
        // 获取GET数据
        $id          = $_GET['id'];
        $this->data  = M('text')->find($id);
        // 显示模板
        $this->display();
    }

    /* 修改处理 */
    public function alter_spirit_text_en_handle(){
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
            $this->success('修改成功',U('Culture/spirit_en'));
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 主页显示 */
    public function build(){
        // 文字
        $where       = array('type' => C('企业文化建设'));
        $this->build = M('text')->where($where)->find();

        // 图片
        $where = array('type'=> C('企业文化建设'));
        $data  = M('picture')->where($where)->select();
        $this->count = COUNT($data);
        $this->picture  = $data;

        // 显示模板
        $this->display();
    }

    /* 修改 */
    public function alter_build_text(){
        // 获取GET数据
        $id          = $_GET['id'];
        $this->data  = M('text')->find($id);
        // 显示模板
        $this->display();
    }

    /* 修改处理 */
    public function alter_build_text_handle(){
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
            $this->success('修改成功',U('Culture/build'));
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 主页显示 */
    public function build_en(){
        // 文字
        $where       = array('type' => C('企业文化建设英文'));
        $this->build = M('text')->where($where)->find();

        // 显示模板
        $this->display();
    }

    /* 修改 */
    public function alter_build_text_en(){
        // 获取GET数据
        $id          = $_GET['id'];
        $this->data  = M('text')->find($id);
        // 显示模板
        $this->display();
    }

    /* 修改处理 */
    public function alter_build_text_en_handle(){
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
            $this->success('修改成功',U('Culture/build_en'));
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 设备展示添加 */
    public function add_picture(){
        // 显示模板
        $this->display();
    }

    /* 设备展示添加处理 */
    public function add_picture_handle(){
        // 输入限制
        if($_POST['title'] == "" ){
            $this->error("请输入标题");
        }
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
            'title'        => $_POST['title'],
            'type'         => C('企业文化建设'),
            'pic_adr'      => $pic_adr,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据插入
        if(!M('picture')->add($data))
        {
            echo 'picture表插入数据出错';die;
        }else{
            $this->success('添加成功',U('Culture/build'));
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
        if($_POST['title'] == "" ){
            $this->error("请输入标题");
        }
        // 获取参数
        $id       = $_POST['id'];
        // 获取当前处理的数据
        $data     = M('picture')->find($id);
        $filename = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $data['pic_adr'];
        // 是否为新上传图片
        if(!$_POST['img'] == 0 ){
            // 文件上传判断,获取文件路径
            $pic_adr = $this->uploadImage();
            if($pic_adr == -1){
                echo '图片上传错误';die;
            }
        }else{
            $pic_adr = $data['pic_adr'];
        }
        $loginname = $_SESSION['loginname'];
        // 构造数据
        $data = array(
            'id'           => $id,
            'title'        => $_POST['title'],
            'pic_adr'      => $pic_adr,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 是否为新上传图片
        if($_POST['img'] == 1)
        {
            // 判断删除文件
            if($this->deleteFile($filename) == 1)
            {
                if(!M('picture')->data($data)->save()){
                    echo 'picture表更新数据出错';die;
                }else{
                    $this->success('修改成功',U('Culture/build'));
                }
            }else{
                echo "删除文件错误";
            }
        }else{
            if(!M('picture')->data($data)->save()){
                echo 'picture表更新数据出错';die;
            }else{
                $this->success('修改成功',U('Culture/build'));
            }
        }
    }

    /* 设备展示删除处理 */
    public function delete_picture_handle(){
        // 获取参数
        $id           = $_GET['id'];
        // 获取当前处理的数据
        $current_data = M('picture')->find($id);
        $filename     = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $current_data['pic_adr'];
        // 获取排在当前数据后面的元素
        $where = array('type' => C('企业文化建设'));
        $data  = M('picture')->where($where)->select();
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