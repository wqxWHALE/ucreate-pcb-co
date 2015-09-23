<?php
/**
 *  AUTHOR:CMB
 *  DATE:2015/6/20
 *  FUNCTION:访问者信息（后台）
 */
namespace Home\Controller;
use Think\Controller;
class VisitorController extends CommonController {
	
	/* 主页显示 */
    public function index(){
        // 获得当前页数
        $pageNumber = $_GET['p'];
        if($pageNumber == "") $pageNumber = 0;
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $visitor = M('visitor')->order('created_time desc')->page($pageNumber,C('分页'))->select();
        // 查询满足要求的总记录数
        $count             = M('visitor')->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $page              = new \Think\Page($count,C('分页'));
        // 分页显示输出
        $show              = $page->show();
        // 数据映射
        $this->page        = $show;
        $this->visitor     = $visitor;
        // 显示模板
        $this->display();
    }

}