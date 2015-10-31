<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($name["content"]); ?></title>
<title><?php echo ($name["content"]); ?></title>
<link href="/ucreate-pcb-co/Public/Index/css/style.css" rel="stylesheet" type="text/css" media="all">
<script src="/ucreate-pcb-co/Public/Index/js/jquery.min.js"></script>
<script src="/ucreate-pcb-co/Public/Index/js/jquery.js"></script>
<script src="/ucreate-pcb-co/Public/Index/js/jquery.tableui.js"></script>
<script type="text/javascript">
	$(function(){
		$(".table_solid").tableUI();
	});
</script>
</head>

<body class="home blog custom-background">
    <div class="wrapper">
        <header id="branding" >
            <!--<img src="images/LOGO.jpg">-->
             <div class="main_top">
                <img alt="" src="/ucreate-pcb-co/Public/Image/LOGO2.png">
                <div id="trans">
                    <div class="contry_box">
                        <a href="?lang=zh-cn">
                            <img alt="" src="/ucreate-pcb-co/Public/Image/contry01.jpg">
                            <div class="text_center">中文</div>
                       </a>
                   </div> 
                   <div class="contry_box">
                        <a href="?lang=en-us">
                            <img alt="" src="/ucreate-pcb-co/Public/Image/contry02.jpg">
                            <div class="text_center">English</div>
                       </a>
                  </div>
              </div>
            </div>
<!--导航-->
<nav id="main-nav" class="clearfix">
    <div class="container clearfix">
        <ul class="root">
            <li><a href="<?php echo U('Index/index');?>?lang=zh-cn">首页</a></li>
            <li><a href="<?php echo U('About/index');?>?lang=zh-cn">关于我们</a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('About/index');?>?lang=zh-cn">公司简介</a></li>
                    <li><a href="<?php echo U('About/achievement');?>?lang=zh-cn">市场成就</a></li>
                </ul>
            </li>
            <li><a title="" href="#">产品中心</a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Production/hard');?>?lang=zh-cn">硬板</a></li>
                    <li><a href="<?php echo U('Production/soft');?>?lang=zh-cn">软板</a></li>
                    <li><a href="<?php echo U('Production/mixture');?>?lang=zh-cn">软硬结合版</a></li>
                </ul>
            </li>
            <li class="current_page_item current-menu-item" ><a title="" href="#">技术支持</a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Support/device');?>?lang=zh-cn">设备展示</a></li>
                    <li><a href="<?php echo U('Support/process');?>?lang=zh-cn">生产流程</a></li>
                    <li><a href="<?php echo U('Support/ability');?>?lang=zh-cn">生产能力</a></li>
                </ul>
            </li>
            <li><a title="" href="<?php echo U('Quality/index');?>?lang=zh-cn">资质证书</a></li>
            <li><a title="" href="#">企业文化</a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Culture/index');?>?lang=zh-cn">企业理念</a></li>
                    <li><a href="<?php echo U('Culture/news');?>?lang=zh-cn">新闻中心</a></li>
                </ul>
            </li>
            <li><a title="" href="#">人才招聘</a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Recruit/idea');?>?lang=zh-cn">人才理念</a></li>
                    <li><a href="<?php echo U('Recruit/welfare');?>?lang=zh-cn">酬薪福利</a></li>
                </ul>
            </li>
            <li><a title="" href="<?php echo U('Contact/index');?>?lang=zh-cn">联系我们</a></li>
            <li class="default-menu"><a href="#" title="Navigation">Navigation</a></li></ul></div>
</nav><!-- #main-nav -->
</header>
<!--导航结束--->



<!--内容-->
<div id="main">
	<div class="container">
        <div class="pro_introduce">
         	<div class="pro_title">
            	<h5>制程能力</h5>
            </div>
         	<div class="pro_box">
        		<div class="img_center">
                
        			<table class="table_solid" border="0" cellspacing="0">
                        <tr><th>项目</th><th>参数</th><th>备注</th></tr>
                        <?php if(is_array($ability)): $i = 0; $__LIST__ = $ability;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($data["title"]); ?></td><td><?php echo ($data["parameter"]); ?></td><td><?php echo ($data["remark"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
        		</div>
            </div>
        </div>
        


	</div><!-- .container -->
</div>
    
    <div id="footer">
      <div class="container">
        <div class="foot_box">Copyright © <?php echo ($name["content"]); ?> 电话:<?php echo ($telephone["content"]); ?> 传真:<?php echo ($fax["content"]); ?> 备案:<?php echo ($beian["content"]); ?>
            </div>
        </div>
    </div>
    
</div>

	
</div>



</body>
</html>