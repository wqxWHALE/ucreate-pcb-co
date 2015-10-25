<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($name["content"]); ?></title>
<link href="/ucreate-pcb-co/Public/Index/css/style.css" rel="stylesheet" type="text/css" media="all">
<script src="/ucreate-pcb-co/Public/Index/js/jquery.min.js"></script>
<script type="text/javascript" src="/ucreate-pcb-co/Public/Index/js/zzsc.js"></script>
</head>

<body class="home blog custom-background">
    <div class="wrapper">
        <header id="branding" >
            <!--<img src="images/LOGO.jpg">---->
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
<!--导航---->
<nav id="main-nav" class="clearfix">
	<div class="container clearfix">
    	<ul class="root">
    		<li><a href="<?php echo U('Index/index');?>?lang=zh-cn">首页</a></li>
			<li class="current_page_item current-menu-item"><a href="<?php echo U('About/index');?>?lang=zh-cn">关于我们</a>
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
			<li><a title="" href="#">技术支持</a>
            	<ul class="sub-menu">
					<li><a href="macshow.html">设备展示</a></li>
					<li><a href="process.html">生产流程</a></li>
                    <li><a href="capacity.html">生产能力</a></li>
				</ul>
            </li>
			<li><a title="" href="quality.html">资质证书</a></li>
			<li><a title="" href="#">企业文化</a>
            	<ul class="sub-menu">
					<li><a href="culture.html">企业理念</a></li>
					<li><a href="new.html">新闻中心</a></li>
				</ul>
            </li>
			<li><a title="" href="#">人才招聘</a>
            	<ul class="sub-menu">
					<li><a href="talentidea.html">人才理念</a></li>
					<li><a href="welfare.html">酬薪福利</a></li>
				</ul>
            </li>
			<li><a title="" href="contact.html">联系我们</a></li>
			<li class="default-menu"><a href="#" title="Navigation">Navigation</a></li></ul></div>
</nav><!-- #main-nav -->
</header>
<!--导航结束--->




<!--内容-->
<div class="callbacks_container">
        	<img src="/ucreate-pcb-co<?php echo ($figure["pic_adr"]); ?>" width="100%" alt="">
        </div>

<div id="main">
	<div class="container">
		<main_left>
        <div class="left_box">
                <h5>关于我们</h5>
                <div class="p_box">
                    <?php echo ($about["content"]); ?>
                </div>
            </div>
            
            
      	<div style="margin-top:15px" class="left_box">
                <h5><a href="#">组织结构</a></h5>
                <img src="/ucreate-pcb-co<?php echo ($construction["pic_adr"]); ?>">
            </div>
            
            
            
		</main_left>
        
        <main_right>
        
           <div style="margin-top:0px;" class="right_contact">
        		<h6>联系我们</h6>
            	<ul>
            		<li>
                		<font>电话：<?php echo ($telephone["content"]); ?></font>
                	</li>
                	<li>
                		<font>传真：<?php echo ($fax["content"]); ?></font>
                	</li>
                	<li>
                		<font><a href="<?php echo ($email["content"]); ?>">邮箱：<?php echo ($email["content"]); ?></a></font>
                	</li>
                    <li>
                		<font>网站：<?php echo ($website["content"]); ?></font>
                	</li>
                    <li>
                		<font>办公室：<?php echo ($office["content"]); ?></font>
                	</li>
            	</ul>     
        	</div>  
            
            <div class="right_contact">
        		<h6>企业理念</h6>
                <div class="show_title show_culture">
                    <?php echo ($spirit["content"]); ?>
                </div>
            </div>
             
         </main_right>
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