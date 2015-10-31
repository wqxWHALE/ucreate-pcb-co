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
            <li><a href="<?php echo U('Index/index');?>">Home</a></li>
            <li><a href="<?php echo U('About/index');?>">About us</a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('About/index');?>">Company Profile</a></li>
                    <li><a href="<?php echo U('About/achievement');?>">Market Success</a></li>
                </ul>
            </li>
            <li><a title="" href="#">Product Center</a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Production/hard');?>">Rigid PCB</a></li>
                    <li><a href="<?php echo U('Production/soft');?>">FPC</a></li>
                    <li><a href="<?php echo U('Production/mixture');?>">Rigid-flex</a></li>
                </ul>
            </li>
            <li class="current_page_item current-menu-item" ><a title="" href="#">Technical Support</a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Support/device');?>">Equipment Display</a></li>
                    <li><a href="<?php echo U('Support/process');?>">Technological Process</a></li>
                    <li><a href="<?php echo U('Support/ability');?>">Technical Capability</a></li>
                </ul>
            </li>
            <li><a title="" href="<?php echo U('Quality/index');?>">Qualification Certificate</a></li>
            <li><a title="" href="#">Culture</a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Culture/index');?>">Corporate Philosophy</a></li>
                    <li><a href="<?php echo U('Culture/news');?>">News</a></li>
                </ul>
            </li>
            <li><a title="" href="#">Join Us</a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Recruit/idea');?>">Talents Principle</a></li>
                    <li><a href="<?php echo U('Recruit/welfare');?>">Compensation And Benefit</a></li>
                </ul>
            </li>
            <li><a title="" href="<?php echo U('Contact/index');?>">Contact us</a></li>
            <li class="default-menu"><a href="#" title="Navigation">Navigation</a></li></ul></div>
</nav><!-- #main-nav -->
</header>
<!--导航结束-->

<div class="callbacks_container">
          <img src="/ucreate-pcb-co<?php echo ($figure["pic_adr"]); ?>" width="100%" alt="">
        </div>


<!--内容-->
<div id="main">
	<div class="container">
		
        
        <div class="pro_introduce">
         	<div class="pro_title">
            	<h5>Equipment Introduction</h5>
            </div>
         	<div class="pro_box">
        		<div class="make_show_left">
        			<p><?php echo ($device["content"]); ?></p>
        		</div>
                <div class="make_show_right">
                    <div id="tFocus">
                        <div class="prev" id="prev"></div>
                        <div class="next" id="next"></div>
                        <ul id="tFocus-pic">
                          <?php if(is_array($show)): $i = 0; $__LIST__ = $show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="#"><img src="/ucreate-pcb-co<?php echo ($data["pic_adr"]); ?>" width="100%" alt="" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <div id="tFocusBtn">
                            <a href="javascript:void(0);" id="tFocus-leftbtn">Previous</a>
                            <div id="tFocus-btn">
                                <ul>
                                    <?php if(is_array($show)): $i = 0; $__LIST__ = $show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="#"><img src="/ucreate-pcb-co<?php echo ($data["pic_adr"]); ?>" width="100%" alt="" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                            <a href="javascript:void(0);" id="tFocus-rightbtn">Next</a>
                        </div>
                    </div><!--tFocus end-->
                        <script type="text/javascript">addLoadEvent(Focus());</script>
                    
                    
                    
        		</div>
            </div>
        </div>
        
        
        <div class="pro_introduce">
         	<div class="pro_title">
            	<h5>Equipment Display</h5>
            </div>
            
         	<div class="pro_box">
            <?php if(is_array($show)): $i = 0; $__LIST__ = $show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="test_img_box">
                <div class="test_img">
                  <img alt="" src="/ucreate-pcb-co<?php echo ($data["pic_adr"]); ?>" />
<!--                   <h6>钻孔机</h6> -->
                </div>
              </div><?php endforeach; endif; else: echo "" ;endif; ?>
          </div>
        </div>
        
        
        


	</div><!-- .container -->
</div>
    
    <div id="footer">
        <div class="container">
            <div class="foot_box">Copyright © <?php echo ($name["content"]); ?> Tel:<?php echo ($telephone["content"]); ?> Fax:<?php echo ($fax["content"]); ?> Records:<?php echo ($beian["content"]); ?></div>   
        </div>
    </div>
    
</div>

	
</div>



</body>
</html>