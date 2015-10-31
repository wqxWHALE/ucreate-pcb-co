<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($name["content"]); ?></title>
<link href="/ucreate-pcb-co/Public/Index/css/style.css" rel="stylesheet" type="text/css" media="all">
<script src="/ucreate-pcb-co/Public/Index/js/jquery.min.js"></script>
<script type="text/javascript" src="/ucreate-pcb-co/Public/Index/js/zzsc.js"></script>
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
            <li class="current_page_item current-menu-item"><a title="" href="#">产品中心</a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Production/hard');?>?lang=zh-cn">硬板</a></li>
                    <li><a href="<?php echo U('Production/soft');?>?lang=zh-cn">软板</a></li>
                    <li><a href="<?php echo U('Production/mixture');?>?lang=zh-cn">软硬结合版</a></li>
                </ul>
            </li>
            <li><a title="" href="#">技术支持</a>
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
<!--导航结束-->

<!--内容-->
<div id="main">
    <div class="container">
        <!-- <div class="pro_introduce">
            <div class="pro_title">
                <h5>硬板</h5>
            </div>
            <div class="pro_box pro_top">
                <ul>
                    <li><a href="#hs01">超大尺寸厚铜板</a></li>
                    <li><a href="#hs02">高频板</a></li>
                    <li><a href="#hs03">盲孔板</a></li>
                    <li><a href="#hs04">盲埋孔板</a></li>
                    <li><a href="#hs05">一阶HDI板</a></li>
                    <li><a href="#hs06">二阶HDI板</a></li>
                    <li><a href="#hs07">金手指卡板</a></li>
                    <li><a href="#hs08">任意层互联HDI板</a></li>
                </ul>
                 <ul>
                     <li><a href="#hs09">手机层板</a></li>
                     <li><a href="#hs10">黑油板</a></li>
                     <li><a href="#hs11">多层板</a></li>   
                     <li><a href="#hs12">多层绿油板</a></li>
                     <li><a href="#hs13">多层铝基板</a></li>    
                     <li><a href="#hs14">双面铝基板</a></li>    
                     <li><a href="#hs15">单面铝基板</a></li>
                </ul>
            </div>
        </div> -->
            
            
            
        
            <div class="pro_introduce">
            <div class="pro_title">
                <h5>产品介绍——软硬结合板</h5>
            </div>
            
          
             <div class="pro_box">
            <div class="pro_show">
                <div class="box_before">
                    <div class="box">
                        <div class="picbox">
                            <ul class="piclist mainlist">
                                <?php if(is_array($mixture)): $i = 0; $__LIST__ = array_slice($mixture,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="#" target="_blank"><img src="/ucreate-pcb-co<?php echo ($data["pic_adr"]); ?>"/></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                            <ul class="piclist swaplist"></ul>
                        </div>
                        <div class="og_prev"></div>
                        <div class="og_next"></div>
                   </div> 
             </div>
         </div>
         </div>   
            
        <?php if(is_array($mixture)): $i = 0; $__LIST__ = $mixture;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="pro_box">
                <div class="pro_img">
                    <img alt="" src="/ucreate-pcb-co<?php echo ($data["pic_adr"]); ?>">
                </div>
                <div class="pro_textshow">
                    <h6><a name="hs01"><?php echo ($data["name"]); ?></a></h6>
                    <ul>
                        <li>
                            层数
                            <div class="pro_data"><?php echo ($data["boardlayer"]); ?></div>
                        </li>
                        <li>
                            板厚
                            <div class="pro_data"><?php echo ($data["boardthickness"]); ?></div>
                        </li>
                        <li>
                            BGA
                            <div class="pro_data"><?php echo ($data["BGA"]); ?></div>
                        </li>
                        <li>
                            最小线宽线距
                            <div class="pro_data"><?php echo ($data["minilinewidth"]); ?></div>
                        </li>
                         <li>
                            最小孔
                            <div class="pro_data"><?php echo ($data["minihole"]); ?></div>
                        </li>
                        <li>
                            铜厚
                            <div class="pro_data"><?php echo ($data["copperthickness"]); ?></div>
                        </li>
                        <li>
                            表面处理
                            <div class="pro_data"><?php echo ($data["surfacetreatment"]); ?></div>
                        </li>
                         <li>
                            尺寸
                            <div class="pro_data"><?php echo ($data["size"]); ?></div>
                        </li>
                    </ul>
                </div>
            </div><!--pro_box----><?php endforeach; endif; else: echo "" ;endif; ?>
              
         
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