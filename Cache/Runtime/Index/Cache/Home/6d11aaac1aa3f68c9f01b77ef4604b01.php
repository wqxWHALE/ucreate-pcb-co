<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($name["content"]); ?></title>
<link href="/ucreate-pcb-co/Public/Index/css/style.css" rel="stylesheet" type="text/css" media="all">
<script src="/ucreate-pcb-co/Public/Index/js/jquery.min.js"></script>
<script type="text/javascript" src="/ucreate-pcb-co/Public/Index/js/zzsc.js"></script>
<script type="text/javascript" src="/ucreate-pcb-co/Public/Index/js/macscript.js"></script>
<!-- <script type="text/javascript" src="/ucreate-pcb-co/Public/Index/js/mz-packed.js"></script> -->
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
            <li><a title="" href="#">Technical Support</a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Support/device');?>">Equipment Display</a></li>
                    <li><a href="<?php echo U('Support/process');?>">Technological Process</a></li>
                    <li><a href="<?php echo U('Support/ability');?>">Technical Capability</a></li>
                </ul>
            </li>
            <li class="current_page_item current-menu-item" ><a title="" href="<?php echo U('Quality/index');?>">Qualification Certificate</a></li>
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



<!--内容-->
<div id="main">
	<div class="container">
		
        <div class="qual_introduce">
              	
	                <div class="qual_title">
	                    <h5>System Certificate</h5>
	                </div>
                    <div class="qual_bbox">
                    	<h6>100% electrical test and AOI Inspection</h6>
                        	<div class="management">
                                <ul>
                                    <li>Compliance with IPC-6012A qualification and performance specification for rigid circuit board</li>
                                    <li>Compliance with IPC-A-600 G circuit board acceptance criteria</li>
                                    <li>In line with European PERFAG2E, 3C PCB standards</li>
                                    <li>In line with printed circuit boards UL and CUL certification standards </li>
                                    <li>Compliance with ROHS</li>
                                </ul>
                            </div>
                            <div class="management">
                                <ul>
                                    <li>Compliance with UL796 printed circuit board safety standards</li>
                                    <li>ISO9001: 2008 certification</li>
                                    <li>UL and CUL certification/li>
                                    <li>UL certification Number: E468793</li>
                                    <li>SGS certified suppliers</li>
                                </ul>
                            </div>
                        </div>
                        
                    <div class="qual_bbox">
                        <div class="qual_imgbox">

                            <?php if(is_array($picture)): $i = 0; $__LIST__ = $picture;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="qual_img">
                                     <a href="/ucreate-pcb-co<?php echo ($data["pic_adr"]); ?>" title="点击放大" class="MagicZoom"><img src="/ucreate-pcb-co<?php echo ($data["pic_adr"]); ?>" alt=""></a>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>

                      </div>
                  </div>
         	</div><!--qual_introduce---->
        
        
         <div class="qual_introduce">
         	<div class="qual_title">
            	<h5>Quality Principle:</h5>
            </div>
         	<div class="qual_box">
                <div class="management">
                	<h6>Quality policy:</h6>
                    <ul>
                        <li>
                            To create high quality of product
                        </li>
                        <li>
                           To provide fast response service
                        </li>
                        <li>
                            To work with integrity
                        </li>
                        <li>
                           To improve continuously, meet and exceed customer’s needs
                        </li>
          			</ul>
                </div>
                <div class="management">
                    <h6>Management Target:</h6>
                    <ul>
                        <li>
                            Customer complaint
                            <div class="qual_data"> <0.5% </div>
                        </li>
                        <li>
                            Qualified rate of finished disposable
                            <div class="qual_data">>99%</div>
                        </li>
                        <li>
                            Defective fraction
                            <div class="qual_data"><=300ppm</div>
                        </li>
                        <li>
                           On-time delivery
                            <div class="qual_data">100%</div>
                        </li>
                        <li>
                           	Customers’ satisfaction
                            <div class="qual_data">>99%</div>
                        </li>
                    </ul>
                </div>
              </div>
            </div>  <!--qual_introduce---->
              
             
      

			
  </div>
      
</div><!-- .container -->       
	
    
    <div id="footer">
        <div class="container">
            <div class="foot_box">Copyright © <?php echo ($name["content"]); ?> Tel:<?php echo ($telephone["content"]); ?> Fax:<?php echo ($fax["content"]); ?> Records:<?php echo ($beian["content"]); ?></div>   
        </div>
    </div>
    
</div>

	
</div>



</body>
</html>