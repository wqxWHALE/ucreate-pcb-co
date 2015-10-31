<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($name["content"]); ?></title>
<link href="/ucreate-pcb-co/Public/Index/css/style.css" rel="stylesheet" type="text/css" media="all">
<script src="/ucreate-pcb-co/Public/Index/js/jquery.min.js"></script>
<script type="text/javascript" src="/ucreate-pcb-co/Public/Index/js/macscript.js"></script>
</head>

<body class="home blog custom-background">
    <div class="wrapper">
        <header id="branding" >
            <!--<img src="images/LOGO.jpg">-->
             <div class="main_top">
                <img alt="" src="/ucreate-pcb-co/Public/Image/LOGO2.png">
                <div id="trans">
                    <div class="contry_box">
                        <a href="#">
                            <img alt="" src="/ucreate-pcb-co/Public/Image/contry01.jpg">
                            <div class="text_center">中文</div>
                       </a>
                   </div> 
                   <div class="contry_box">
                        <a href="#">
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



<!--内容-->
<div id="main">
	<div class="container">
        
        <div class="pro_introduce">
         	<div class="pro_title">
            	<h5>工艺流程</h5>
            </div>
         	<div class="pro_box">
            	<p> <img class="arrow" alt="" src="images/arrowright.png">我们的印刷线路板生产流程经过专业优化，具有高于PCB生产业内平均水平的良好品质和生产效率。我们的每一个工程师都拥有丰富的PCB生产领域的专业知识和出色的敬业以及创新精神。我们PCB生产线上的每一个技术工人对其工作相关的机器、物料，都经过严格的精益生产管理培训。<p>

   <p><img class="arrow" alt="" src="images/arrowright.png">我们每道工序都经过严格的监控，能保证客户的交期。我们的宗旨是“一流的质量，准确的交期，客户的满意，持续跟进，不断发展，共同创新"。</p>
        		<div class="make_show img_center">
        			<img alt="" src="images/process01.jpg">
        		</div>
            </div>
        </div>
        


	</div><!-- .container -->
</div>
    
    <div id="footer">
    	<div class="container">
    		<div class="foot_box">Copyright © 合创电路有限公司 电话:+86 0755-89230220 传真:0755-89250616     粤ICP备11072830
</div>
        	
        </div>
    </div>
    
</div>

	
</div>



</body>
</html>