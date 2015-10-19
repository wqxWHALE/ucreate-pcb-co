<?php
/**
 *  AUTHOR:CMB
 *  DATE:2015/10/03
 *  FUNCTION: 技术支持（后台）
 */
namespace Home\Controller;
use Think\Controller;
class SupportController extends CommonController {
	
    /* 显示 */
    public function device(){
    	// 设备简介
    	$where       = array('type' => C('设备简介'));
    	$this->device = M('text')->where($where)->find();

        // 设备展示
        $where       = array('type' => C('设备展示'));
        $this->show  = M('picture')->where($where)->select();

        // 显示模板
        $this->display();
    }

    /* 修改 */
    public function alter_device(){
    	// 获取GET数据
    	$id          = $_GET['id'];
    	$this->data  = M('text')->find($id);
        // 显示模板
        $this->display();
    }

    /* 修改处理 */
    public function alter_device_handle(){
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
            $this->success('修改成功',U('Support/device'));
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 显示 */
    public function device_en(){
        // 设备简介
        $where       = array('type' => C('设备简介英文'));
        $this->device = M('text')->where($where)->find();

        // 显示模板
        $this->display();
    }

    /* 修改 */
    public function alter_device_en(){
        // 获取GET数据
        $id          = $_GET['id'];
        $this->data  = M('text')->find($id);
        // 显示模板
        $this->display();
    }

    /* 修改处理 */
    public function alter_device_en_handle(){
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
            $this->success('修改成功',U('Support/device_en'));
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 设备展示显示 */
    public function show(){
        // 条件
        $where = array('type'=> C('设备展示'));
        $data  = M('picture')->where($where)->select();
        $this->count = COUNT($data);
        $this->show  = $data;
        // 显示模板
        $this->display();
    }

    /* 设备展示添加 */
    public function add_show(){
        // 显示模板
        $this->display();
    }

    /* 设备展示添加处理 */
    public function add_show_handle(){
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
            'type'         => C('设备展示'),
            'pic_adr'      => $pic_adr,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据插入
        if(!M('picture')->add($data))
        {
            echo 'picture表插入数据出错';die;
        }else{
            $this->success('添加成功',U('Support/device'));
        }
    }

    /* 修改设备展示 */
    public function alter_show(){
        // 获取参数
        $id         = $_GET['id'];
        // 获取当前处理的数据
        $this->data = M('picture')->find($id);
        // 显示模板
        $this->display();
    }

    /* 修改设备展示处理 */
    public function alter_show_handle(){
        // 输入限制
        if($_POST['img'] == 0 ){
            $this->error("请选择图片上传");
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
        if($this->deleteFile($filename) == 1)
        {
            M('picture')->data($data)->save();
            $this->success('修改成功',U('Support/device'));
        }else{
            echo "文件删除错误";
        }
    }

    /* 设备展示删除处理 */
    public function delete_show_handle(){
        // 获取参数
        $id           = $_GET['id'];
        // 获取当前处理的数据
        $current_data = M('picture')->find($id);
        $filename     = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $current_data['pic_adr'];
        // 获取排在当前数据后面的元素
        $data         = M('picture')->where("sort > %d AND type = '%s'",$current_data['sort'],C('设备展示'))->select();
        for($i=0;$i<COUNT($data);$i++){
            $data[$i]['sort']-=1;
            M('picture')->data($data[$i])->save();
        }
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

    /* 显示 */
    public function process(){
        // 条件
        $where         = array('type' => C('生产流程'));
        $this->process = M('text')->where($where)->find();
        // 显示模板
        $this->display();
    }

    /* 修改 */
    public function alter_process(){
        // 获取GET数据
        $id            = $_GET['id'];
        $this->process = M('text')->find($id);
        // 显示模板
        $this->display();
    }

    /* 修改处理 */
    public function alter_process_handle(){
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
            $this->success('修改成功',U('Support/process'));
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 显示 */
    public function process_en(){
        // 条件
        $where         = array('type' => C('生产流程英文'));
        $this->process = M('text')->where($where)->find();
        // 显示模板
        $this->display();
    }

    /* 修改 */
    public function alter_process_en(){
        // 获取GET数据
        $id            = $_GET['id'];
        $this->process = M('text')->find($id);
        // 显示模板
        $this->display();
    }

    /* 修改处理 */
    public function alter_process_en_handle(){
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
            $this->success('修改成功',U('Support/process_en'));
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 显示 */
    public function ability(){
        // 读取数据
        $ability       = M('ability')->select();
        $this->count   = COUNT($ability);
        $this->ability = $ability;
        // 显示模板
        $this->display();
    }

    /* 添加处理 */
    public function add_ability(){
        // 显示模板
        $this->display();
    }

    /* 添加 */
    public function add_ability_handle(){
        // 获取POST参数
        $title     = $_POST['title'];
        $parameter = $_POST['parameter'];
        $remark    = $_POST['remark'];
        // 输入限制
        if($title == "" ){
            $this->error("请输入名称");
        }
        if($parameter == "" ){
            $this->error("请输入参数");
        }
        // 构造数据
        $data = array(
            'title'        => $title,
            'parameter'    => $parameter,
            'remark'       => $remark,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据插入
        if(!M('ability')->add($data))
        {
            echo 'ability表插入数据出错';die;
        }else{
            $this->success('添加成功',U('Support/ability'));
        }
    }

    /* 修改 */
    public function alter_ability(){
        // 获取GET参数
        $id = $_GET['id'];
        // 读取数据
        $this->data = M('ability')->find($id);
        // 显示模板
        $this->display();
    }

    /* 修改处理 */
    public function alter_ability_handle(){
        // 获取POST参数
        $id        = $_POST['id'];
        $title     = $_POST['title'];
        $parameter = $_POST['parameter'];
        $remark    = $_POST['remark'];
        // 输入限制
        if($title == "" ){
            $this->error("请输入名称");
        }
        if($parameter == "" ){
            $this->error("请输入参数");
        }
        // 构造数据
        $data = array(
            'id'           => $id,
            'title'        => $title,
            'parameter'    => $parameter,
            'remark'       => $remark,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        if(!M('ability')->data($data)->save()){
            echo 'ability表更新数据出错';die;
        }else{
            $this->success('修改成功',U('Support/ability'));
        }
    }

    /* 删除处理 */
    public function delete_ability_handle(){
        // 获取GET参数
        $id = $_GET['id'];
        // 读取数据
        if(!M('ability')->delete($id)){
            echo 'ability表删除数据出错';die;
        }else{
            $this->success('删除成功',U('Support/ability'));
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 显示 */
    public function ability_en(){
        // 读取数据
        $ability       = M('ability_en')->select();
        $this->count   = COUNT($ability);
        $this->ability = $ability;
        // 显示模板
        $this->display();
    }

    /* 添加处理 */
    public function add_ability_en(){
        // 显示模板
        $this->display();
    }

    /* 添加 */
    public function add_ability_en_handle(){
        // 获取POST参数
        $title     = $_POST['title'];
        $parameter = $_POST['parameter'];
        $remark    = $_POST['remark'];
        // 输入限制
        if($title == "" ){
            $this->error("请输入名称");
        }
        if($parameter == "" ){
            $this->error("请输入参数");
        }
        // 构造数据
        $data = array(
            'title'        => $title,
            'parameter'    => $parameter,
            'remark'       => $remark,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据插入
        if(!M('ability_en')->add($data))
        {
            echo 'ability_en表插入数据出错';die;
        }else{
            $this->success('添加成功',U('Support/ability_en'));
        }
    }

    /* 修改 */
    public function alter_ability_en(){
        // 获取GET参数
        $id = $_GET['id'];
        // 读取数据
        $this->data = M('ability_en')->find($id);
        // 显示模板
        $this->display();
    }

    /* 修改处理 */
    public function alter_ability_en_handle(){
        // 获取POST参数
        $id        = $_POST['id'];
        $title     = $_POST['title'];
        $parameter = $_POST['parameter'];
        $remark    = $_POST['remark'];
        // 输入限制
        if($title == "" ){
            $this->error("请输入名称");
        }
        if($parameter == "" ){
            $this->error("请输入参数");
        }
        // 构造数据
        $data = array(
            'id'           => $id,
            'title'        => $title,
            'parameter'    => $parameter,
            'remark'       => $remark,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        if(!M('ability_en')->data($data)->save()){
            echo 'ability_en表更新数据出错';die;
        }else{
            $this->success('修改成功',U('Support/ability_en'));
        }
    }

    /* 删除处理 */
    public function delete_ability_en_handle(){
        // 获取GET参数
        $id = $_GET['id'];
        // 读取数据
        if(!M('ability_en')->delete($id)){
            echo 'ability_en表删除数据出错';die;
        }else{
            $this->success('删除成功',U('Support/ability_en'));
        }
    }

}