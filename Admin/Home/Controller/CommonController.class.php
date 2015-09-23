<?php
namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller {
    /**
    * 防盗链
    * @return
    */
    public function _initialize() {
        // utf-8编码
        header('Content-Type: text/html; charset=utf-8');
        if(!isset($_SESSION['loginname']) || empty($_SESSION['loginname'])){
            $this->out();
        }
    }

    protected  function randomkeys($length) {
        $returnStr='';
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLOMNOPQRSTUVWXYZ';
        for($i = 0; $i < $length; $i ++) {
            $returnStr .= $pattern {mt_rand ( 0, 61 )}; //生成php随机数
        }
        return $returnStr;
    }

    /**
    * 获取域名
    * @return 
    */
    public function getHttpHost(){
        return $_SERVER['HTTP_HOST'];
    }

    public function out(){
        echo "<script type='text/javascript'>parent.window.location.href ='".U('Login/index')."'</script>";
    }

    public function uploadImage() {

        // 取得时间戳
        $date = date('Y',time());

        // 设置存储路径
        $dirname = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . '/Uploads/img/'. $date;

        // 建立存储文件夹，如果不存在则建立
        // Windows版本
        // if (!file_exists($dirname)){
        //     mkdir($dirname);
        // }

        // 建立存储文件夹，如果不存在则建立
        // linux版本
        if (!file_exists($dirname)){
            mkdir($dirname, 0777, true);
        }

        // 实例化上传类对象
        $upload = new \Org\Util\UploadFile();
        // 限制上传的类型
        $upload->allowExts = array('jpg', 'png', 'jpeg', 'bmp','gif'); 
        // 设置上传的路径
        $upload->savePath = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . '/Uploads/img/'. $date .'/';
        // 上传图片并判断是否上传成功
        if (!$upload->upload()){
            // 上传失败打印信息
            $upload->getErrorMsg();
            return -1;
        }else{
            // 上传成功打印信息
            $info = $upload->getUploadFileInfo();
            // 去掉文件名的后缀
            $filename = $info[0]['name'];
            $filetype = strrchr($filename, ".");
            $filename = str_replace($filetype,"",$filename);
            $savePath = '/Uploads/img/'. $date .'/'.$info[0]['savename'];      
        }
        // 返回Uploads表对应的id
        return $savePath;
    }

    public function sortGetTop($data,$table){
        for($i=0;$i<count($data);$i++)
        {
            $dataWrite = array(
                'id'   => $data[$i]['id'],
                'sort' => ++$data[$i]['sort']
            );
            if(!M($table)->data($dataWrite)->save()){
                echo '错误003';
                die;
            }
        }
        return 1;
    }

    public function sortGetBottom($data){
        $max = 0;
        for($i=0;$i<count($data);$i++)
        {
            if($data[$i]['sort'] > $max){
                $max = $data[$i]['sort'];
            }
        }
        return ++$max;
    }

    public function deleteFile($filename){
        if( is_file( $filename ) )
        {
            if( unlink($filename) )
            {
                return 1; //删除成功
            }
            else
            {
                return 2; 
            }
        }
        else
        {
            return 0;
        }
    }

    // 转移换行和空格为html标签
    public function replaceLineAndSpace($data)
    {
        $data = str_replace(" ","&nbsp",$data);
        $data = nl2br($data); 
        return $data;
    }

    public function checkPic(){

        // 取得时间戳
        $date = date('Y',time());

        $upload = new \Org\Util\UploadFile();
        $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->autoSub =true ;
        $upload->subType ='date' ;
        $upload->dateFormat ='ym' ;
        $upload->savePath =  '/Uploads/img/'. $date .'/';// 设置附件上传目录
        if($upload->upload()){
            $info =  $upload->getUploadFileInfo();
            echo json_encode(array(
               'url'=>$info[0]['savename'],
               'title'=>htmlspecialchars($_POST['pictitle'], ENT_QUOTES),
               'original'=>$info[0]['name'],
               'state'=>'SUCCESS'
            ));
        }else{
                echo json_encode(array(
                'state'=>$upload->getErrorMsg()
             ));
        }
    }

}