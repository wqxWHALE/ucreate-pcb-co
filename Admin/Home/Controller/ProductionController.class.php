<?php
/**
 *  AUTHOR:CMB
 *  DATE:2015/10/03
 *  FUNCTION: 产品中心（后台）
 */
namespace Home\Controller;
use Think\Controller;
class ProductionController extends CommonController {

    /* 硬板显示 */
    public function hard(){
        // 条件
        $where = array('type'=> C('硬板'));
        $data  = M('production')->where($where)->order('sort')->select();
        $this->count = COUNT($data);
        $this->hard  = $data;
        // 显示模板
        $this->display();
    }

    /* 硬板添加 */
    public function add_hard(){
        // 显示模板
        $this->display();
    }

    /* 硬板添加处理 */
    public function add_hard_handle(){
        // 获取POST参数
        $name             = $_POST['name'];
        $boardlayer       = $_POST['boardlayer'];
        $boardthickness   = $_POST['boardthickness'];
        $minilinewidth    = $_POST['minilinewidth'];
        $bga              = $_POST['bga'];
        $minihole         = $_POST['minihole'];
        $copperthickness  = $_POST['copperthickness'];
        $surfacetreatment = $_POST['surfacetreatment'];
        $size             = $_POST['size'];
        if($_POST['img'] == 0 ){
            $this->error("请选择图片上传");
        }
        // 图片上传
        $pic_adr = $this->uploadImage();
        if($pic_adr == -1){
            echo '图片上传错误';die;
        }
        $loginname = $_SESSION['loginname'];
        // 读取所有数据，为了排序
        $where = array('type' => C('硬板'));
        $dataRead = M('production')->where($where)->select();
        if($_POST['optionsRadios'] == C('TOP')){
            // 置顶
            $sort = $this->sortGetTop($dataRead,'production');
        }else{
            // 非置顶
            $sort = $this->sortGetBottom($dataRead);
        }
        // 构造数据
        $data = array(
            'name'         => $name,
            'type'         => C('硬板'),
            'pic_adr'      => $pic_adr,
            'boardlayer'   => $boardlayer,
            'boardthickness'   => $boardthickness,
            'minilinewidth'    => $minilinewidth,
            'BGA'              => $bga,
            'minihole'         => $minihole,
            'copperthickness'  => $copperthickness,
            'surfacetreatment' => $surfacetreatment,
            'size'             => $size,
            'sort'         => $sort,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据插入
        if(!M('production')->add($data))
        {
            echo 'production表插入数据出错';die;
        }else{
            $this->success('添加成功',U('Production/hard'));
        }
    }

    /* 硬板修改 */
    public function alter_hard(){
        // 获取GET参数
        $id   = $_GET['id'];
        $this->data = M('production')->find($id);
        // 显示模板
        $this->display();
    }

    /* 硬板修改处理 */
    public function alter_hard_handle(){
        // 获取POST参数
        $id               = $_POST['id'];
        $name             = $_POST['name'];
        $boardlayer       = $_POST['boardlayer'];
        $boardthickness   = $_POST['boardthickness'];
        $minilinewidth    = $_POST['minilinewidth'];
        $bga              = $_POST['bga'];
        $minihole         = $_POST['minihole'];
        $copperthickness  = $_POST['copperthickness'];
        $surfacetreatment = $_POST['surfacetreatment'];
        $size             = $_POST['size'];
        // // 输入限制
        // if($name == "" ){
        //     $this->error("请输入名称");
        // }
        // if($boardlayer == "" ){
        //     $this->error("请输入层数");
        // }
        // if($boardthickness == "" ){
        //     $this->error("请输入板厚");
        // }
        // if($minilinewidth == "" ){
        //     $this->error("请输入最小线宽线距");
        // }
        // if($minihole == "" ){
        //     $this->error("请输入最小孔");
        // }
        // if($copperthickness == "" ){
        //     $this->error("请输入铜厚");
        // }
        // if($surfacetreatment == "" ){
        //     $this->error("请输入表面处理");
        // }
        // if($size == "" ){
        //     $this->error("请输入尺寸");
        // }
        // 获取当前处理的数据
        $data     = M('production')->find($id);
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
        // 获取操作者
        $loginname = $_SESSION['loginname'];
        // 构造数据
        $data = array(
            'id'           => $id,
            'name'         => $name,
            'type'         => C('硬板'),
            'pic_adr'      => $pic_adr,
            'boardlayer'   => $boardlayer,
            'boardthickness'   => $boardthickness,
            'minilinewidth'    => $minilinewidth,
            'BGA'              => $bga,
            'minihole'         => $minihole,
            'copperthickness'  => $copperthickness,
            'surfacetreatment' => $surfacetreatment,
            'size'             => $size,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 是否为新上传图片
        if($_POST['img'] == 1)
        {
            // 判断删除文件
            if($this->deleteFile($filename) == 1)
            {
                if(!M('production')->data($data)->save()){
                    echo 'production表更新数据出错';die;
                }else{
                    $this->success('修改成功',U('Production/hard'));
                }
            }else{
                echo "删除文件错误";
            }
        }else{
            if(!M('production')->data($data)->save()){
                echo 'production表更新数据出错';die;
            }else{
                $this->success('修改成功',U('Production/hard'));
            }
        }
    }

    /* 硬板删除处理 */
    public function delete_hard_handle(){
        // 获取参数
        $id           = $_GET['id'];
        // 获取当前处理的数据
        $current_data = M('production')->find($id);
        $filename     = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $current_data['pic_adr'];
        // 获取排在当前数据后面的元素
        $data         = M('production')->where("sort > %d AND type = '%s'",$current_data['sort'],C('硬板'))->select();
        for($i=0;$i<COUNT($data);$i++){
            $data[$i]['sort']-=1;
            M('production')->data($data[$i])->save();
        }
        // 删除文件并修改数据库    
        if($this->deleteFile($filename) == 1)
        {
            M('production')->delete($id);
            $this->success('删除成功');
        }else{
            echo "删除文件错误";
        }
    }

    /* 硬板排序处理 */
    public function sort_hard_handle(){
        // 获取参数
        $id   = $_GET['id'];
        $type = $_GET['type'];
        // 判断
        $where   = array('type' => C('硬板'));
        $num = M('production')->where($where)->count();
        if($num <= 1){
            $this->error('排序失败，数量不足');
        }
        // 获取当前处理的数据
        $c1_data = M('production')->find($id);
        $c1_sort = $c1_data['sort'];
        // 获取要对换的数据
        if($type == 'up'){
            $c2_sort = $c1_sort-1;
        }else{
            $c2_sort = $c1_sort+1;
        }
        $where   = array('sort' => $c2_sort, 'type' => C('硬板'));
        $c2_data = M('production')->where($where)->find();
        // 排序对换
        $c1_data['sort'] = $c2_sort;
        $c2_data['sort'] = $c1_sort;
        M('production')->data($c1_data)->save();
        M('production')->data($c2_data)->save();
        $this->success('排序成功');
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 软板显示 */
    public function soft(){
        // 条件
        $where = array('type'=> C('软板'));
        $data  = M('production')->where($where)->order('sort')->select();
        $this->count = COUNT($data);
        $this->soft  = $data;
        // 显示模板
        $this->display();
    }

    /* 软板添加 */
    public function add_soft(){
        // 显示模板
        $this->display();
    }

    /* 软板添加处理 */
    public function add_soft_handle(){
        // 获取POST参数
        $name             = $_POST['name'];
        $boardlayer       = $_POST['boardlayer'];
        $boardthickness   = $_POST['boardthickness'];
        $minilinewidth    = $_POST['minilinewidth'];
        $bga              = $_POST['bga'];
        $minihole         = $_POST['minihole'];
        $copperthickness  = $_POST['copperthickness'];
        $surfacetreatment = $_POST['surfacetreatment'];
        $size             = $_POST['size'];
        // 图片上传
        $pic_adr = $this->uploadImage();
        if($pic_adr == -1){
            echo '图片上传错误';die;
        }
        $loginname = $_SESSION['loginname'];
        // 读取所有数据，为了排序
        $where = array('type' => C('软板'));
        $dataRead = M('production')->where($where)->select();
        if($_POST['optionsRadios'] == C('TOP')){
            // 置顶
            $sort = $this->sortGetTop($dataRead,'production');
        }else{
            // 非置顶
            $sort = $this->sortGetBottom($dataRead);
        }
        // 构造数据
        $data = array(
            'name'         => $name,
            'type'         => C('软板'),
            'pic_adr'      => $pic_adr,
            'boardlayer'   => $boardlayer,
            'boardthickness'   => $boardthickness,
            'minilinewidth'    => $minilinewidth,
            'BGA'              => $bga,
            'minihole'         => $minihole,
            'copperthickness'  => $copperthickness,
            'surfacetreatment' => $surfacetreatment,
            'size'             => $size,
            'sort'         => $sort,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据插入
        if(!M('production')->add($data))
        {
            echo 'production表插入数据出错';die;
        }else{
            $this->success('添加成功',U('Production/soft'));
        }
    }

    /* 软板修改 */
    public function alter_soft(){
        // 获取GET参数
        $id   = $_GET['id'];
        $this->data = M('production')->find($id);
        // 显示模板
        $this->display();
    }

    /* 软板修改处理 */
    public function alter_soft_handle(){
        // 获取POST参数
        $id               = $_POST['id'];
        $name             = $_POST['name'];
        $boardlayer       = $_POST['boardlayer'];
        $boardthickness   = $_POST['boardthickness'];
        $minilinewidth    = $_POST['minilinewidth'];
        $bga              = $_POST['bga'];
        $minihole         = $_POST['minihole'];
        $copperthickness  = $_POST['copperthickness'];
        $surfacetreatment = $_POST['surfacetreatment'];
        $size             = $_POST['size'];
        // 获取当前处理的数据
        $data     = M('production')->find($id);
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
        // 获取操作者
        $loginname = $_SESSION['loginname'];
        // 构造数据
        $data = array(
            'id'           => $id,
            'name'         => $name,
            'type'         => C('软板'),
            'pic_adr'      => $pic_adr,
            'boardlayer'   => $boardlayer,
            'boardthickness'   => $boardthickness,
            'minilinewidth'    => $minilinewidth,
            'BGA'              => $bga,
            'minihole'         => $minihole,
            'copperthickness'  => $copperthickness,
            'surfacetreatment' => $surfacetreatment,
            'size'             => $size,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 是否为新上传图片
        if($_POST['img'] == 1)
        {
            // 判断删除文件
            if($this->deleteFile($filename) == 1)
            {
                if(!M('production')->data($data)->save()){
                    echo 'production表更新数据出错';die;
                }else{
                    $this->success('修改成功',U('Production/soft'));
                }
            }else{
                echo "删除文件错误";
            }
        }else{
            if(!M('production')->data($data)->save()){
                echo 'production表更新数据出错';die;
            }else{
                $this->success('修改成功',U('Production/soft'));
            }
        }
    }

    /* 软板删除处理 */
    public function delete_soft_handle(){
        // 获取参数
        $id           = $_GET['id'];
        // 获取当前处理的数据
        $current_data = M('production')->find($id);
        $filename     = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $current_data['pic_adr'];
        // 获取排在当前数据后面的元素
        $data         = M('production')->where("sort > %d AND type = '%s'",$current_data['sort'],C('软板'))->select();
        for($i=0;$i<COUNT($data);$i++){
            $data[$i]['sort']-=1;
            M('production')->data($data[$i])->save();
        }
        // 删除文件并修改数据库    
        if($this->deleteFile($filename) == 1)
        {
            M('production')->delete($id);
            $this->success('删除成功');
        }else{
            echo "删除文件错误";
        }
    }

    /* 软板排序处理 */
    public function sort_soft_handle(){
        // 获取参数
        $id   = $_GET['id'];
        $type = $_GET['type'];
        // 判断
        $where   = array('type' => C('软板'));
        $num = M('production')->where($where)->count();
        if($num <= 1){
            $this->error('排序失败，数量不足');
        }
        // 获取当前处理的数据
        $c1_data = M('production')->find($id);
        $c1_sort = $c1_data['sort'];
        // 获取要对换的数据
        if($type == 'up'){
            $c2_sort = $c1_sort-1;
        }else{
            $c2_sort = $c1_sort+1;
        }
        $where   = array('sort' => $c2_sort, 'type' => C('软板'));
        $c2_data = M('production')->where($where)->find();
        // 排序对换
        $c1_data['sort'] = $c2_sort;
        $c2_data['sort'] = $c1_sort;
        M('production')->data($c1_data)->save();
        M('production')->data($c2_data)->save();
        $this->success('排序成功');
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 软硬结合板显示 */
    public function mixture(){
        // 条件
        $where = array('type'=> C('软硬结合板'));
        $data  = M('production')->where($where)->order('sort')->select();
        $this->count = COUNT($data);
        $this->mixture  = $data;
        // 显示模板
        $this->display();
    }

    /* 软硬结合板添加 */
    public function add_mixture(){
        // 显示模板
        $this->display();
    }

    /* 软硬结合板添加处理 */
    public function add_mixture_handle(){
        // 获取POST参数
        $name             = $_POST['name'];
        $boardlayer       = $_POST['boardlayer'];
        $boardthickness   = $_POST['boardthickness'];
        $minilinewidth    = $_POST['minilinewidth'];
        $bga              = $_POST['bga'];
        $minihole         = $_POST['minihole'];
        $copperthickness  = $_POST['copperthickness'];
        $surfacetreatment = $_POST['surfacetreatment'];
        $size             = $_POST['size'];
        if($_POST['img'] == 0 ){
            $this->error("请选择图片上传");
        }
        // 图片上传
        $pic_adr = $this->uploadImage();
        if($pic_adr == -1){
            echo '图片上传错误';die;
        }
        $loginname = $_SESSION['loginname'];
        // 读取所有数据，为了排序
        $where = array('type' => C('软硬结合板'));
        $dataRead = M('production')->where($where)->select();
        if($_POST['optionsRadios'] == C('TOP')){
            // 置顶
            $sort = $this->sortGetTop($dataRead,'production');
        }else{
            // 非置顶
            $sort = $this->sortGetBottom($dataRead);
        }
        // 构造数据
        $data = array(
            'name'         => $name,
            'type'         => C('软硬结合板'),
            'pic_adr'      => $pic_adr,
            'boardlayer'   => $boardlayer,
            'boardthickness'   => $boardthickness,
            'minilinewidth'    => $minilinewidth,
            'BGA'              => $bga,
            'minihole'         => $minihole,
            'copperthickness'  => $copperthickness,
            'surfacetreatment' => $surfacetreatment,
            'size'             => $size,
            'sort'         => $sort,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据插入
        if(!M('production')->add($data))
        {
            echo 'production表插入数据出错';die;
        }else{
            $this->success('添加成功',U('Production/mixture'));
        }
    }

    /* 软硬结合板修改 */
    public function alter_mixture(){
        // 获取GET参数
        $id   = $_GET['id'];
        $this->data = M('production')->find($id);
        // 显示模板
        $this->display();
    }

    /* 软硬结合板修改处理 */
    public function alter_mixture_handle(){
        // 获取POST参数
        $id               = $_POST['id'];
        $name             = $_POST['name'];
        $boardlayer       = $_POST['boardlayer'];
        $boardthickness   = $_POST['boardthickness'];
        $minilinewidth    = $_POST['minilinewidth'];
        $bga              = $_POST['bga'];
        $minihole         = $_POST['minihole'];
        $copperthickness  = $_POST['copperthickness'];
        $surfacetreatment = $_POST['surfacetreatment'];
        $size             = $_POST['size'];
        // 获取当前处理的数据
        $data     = M('production')->find($id);
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
        // 获取操作者
        $loginname = $_SESSION['loginname'];
        // 构造数据
        $data = array(
            'id'           => $id,
            'name'         => $name,
            'type'         => C('软硬结合板'),
            'pic_adr'      => $pic_adr,
            'boardlayer'   => $boardlayer,
            'boardthickness'   => $boardthickness,
            'minilinewidth'    => $minilinewidth,
            'BGA'              => $bga,
            'minihole'         => $minihole,
            'copperthickness'  => $copperthickness,
            'surfacetreatment' => $surfacetreatment,
            'size'             => $size,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 是否为新上传图片
        if($_POST['img'] == 1)
        {
            // 判断删除文件
            if($this->deleteFile($filename) == 1)
            {
                if(!M('production')->data($data)->save()){
                    echo 'production表更新数据出错';die;
                }else{
                    $this->success('修改成功',U('Production/mixture'));
                }
            }else{
                echo "删除文件错误";
            }
        }else{
            if(!M('production')->data($data)->save()){
                echo 'production表更新数据出错';die;
            }else{
                $this->success('修改成功',U('Production/mixture'));
            }
        }
    }

    /* 软硬结合板删除处理 */
    public function delete_mixture_handle(){
        // 获取参数
        $id           = $_GET['id'];
        // 获取当前处理的数据
        $current_data = M('production')->find($id);
        $filename     = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $current_data['pic_adr'];
        // 获取排在当前数据后面的元素
        $data         = M('production')->where("sort > %d AND type = '%s'",$current_data['sort'],C('软硬结合板'))->select();
        for($i=0;$i<COUNT($data);$i++){
            $data[$i]['sort']-=1;
            M('production')->data($data[$i])->save();
        }
        // 删除文件并修改数据库    
        if($this->deleteFile($filename) == 1)
        {
            M('production')->delete($id);
            $this->success('删除成功');
        }else{
            echo "删除文件错误";
        }
    }

    /* 软硬结合板排序处理 */
    public function sort_mixture_handle(){
        // 获取参数
        $id   = $_GET['id'];
        $type = $_GET['type'];
        // 判断
        $where   = array('type' => C('软硬结合板'));
        $num = M('production')->where($where)->count();
        if($num <= 1){
            $this->error('排序失败，数量不足');
        }
        // 获取当前处理的数据
        $c1_data = M('production')->find($id);
        $c1_sort = $c1_data['sort'];
        // 获取要对换的数据
        if($type == 'up'){
            $c2_sort = $c1_sort-1;
        }else{
            $c2_sort = $c1_sort+1;
        }
        $where   = array('sort' => $c2_sort, 'type' => C('软硬结合板'));
        $c2_data = M('production')->where($where)->find();
        // 排序对换
        $c1_data['sort'] = $c2_sort;
        $c2_data['sort'] = $c1_sort;
        M('production')->data($c1_data)->save();
        M('production')->data($c2_data)->save();
        $this->success('排序成功');
    }
}