<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title><?php echo ($name["content"]); ?></title>
<link href="/ucreate-pcb-co/Public/Index/css/style.css" rel="stylesheet" type="text/css" media="all">
<script src="/ucreate-pcb-co/Public/Index/js/jquery.min.js"></script>
<script type="text/javascript" src="/ucreate-pcb-co/Public/Index/js/zzsc.js"></script>
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
<nav id="main-nav" class="clearfix">
    <div class="container clearfix">
        <ul class="root">
            <li class="current_page_item current-menu-item" ><a href="<?php echo U('Index/index');?>">Home</a></li>
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



<div class="advbox">

    <div class="advcon"></div>

</div><!--advbox end-->
<script type="text/javascript">
//首页大广告
var gg960ShowTime = 5000; //播放时间
var gg960Time = null;

function open_gg960(showBtn){
    $('.advbox .advcon').html(gg960Con).slideDown(300,function(){
        if(showBtn !== false){
            $('.advbox .advbtn').fadeIn();
        }
        if(gg960Time){clearTimeout(gg960Time);}
        gg960Time = setTimeout(close_gg960,gg960ShowTime);
    });
}
function close_gg960(){
    $('.advbox .advcon').slideUp(500,function(){
        $(this).html('');
        $('.advclose').hide();
        $('.advreplay').show();
    });
}
$('.advclose').click(function(){
    if(gg960Time){clearTimeout(gg960Time);}
    close_gg960();
    return false;
});
$('.advreplay').click(function(){
    if(gg960Time){clearTimeout(gg960Time);}
    open_gg960(false);
    $('.advreplay').hide();
    $('.advclose').show();
    return false;
});

var gg960Con;
var fullAdType = 'swf';
var fullAdUrl = '';
var fullAdName = '/ucreate-pcb-co/Public/Image/flash.swf';
if(fullAdName){
    if(fullAdType == 'swf'){
        gg960Con = '<embed wmode="transparent" height="400" width="980" flashvars="alink1='+fullAdUrl+'" allowscriptaccess="always" quality="high" name="Advertisement" id="Advertisement" style="" src="/ucreate-pcb-co/Public/Image/flash.swf" type="application/x-shockwave-flash"></embed>';
        
    }else{
        gg960Con = '<a href="'+fullAdUrl+'" target="_blank"><img width="980" height="400" src="/ucreate-pcb-co/Public/Image/main.jpg"/></a>';//flash无法显示时，显示JPG广告
    }
    
    setTimeout(open_gg960,500);//延迟显示
}
</script>







<!--silder-->
<script src="/ucreate-pcb-co/Public/Index/js/responsiveslides.min.js"></script>
             <script>
                // 可用 "$(window).load(function() {"
                $(function () {
                  // Slideshow 4
                  $("#slider4").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                      $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                      $('.events').append("<li>after event fired.</li>");
                    }
                  });
            
                });
              </script>
<div id="fwslider" class="callbacks_container">
    <ul class="rslides"  id="slider4">
        <?php if(is_array($scroll)): foreach($scroll as $key=>$data): ?><li>
            <img src="/ucreate-pcb-co<?php echo ($data["pic_adr"]); ?>" alt="">
        </li><?php endforeach; endif; ?>
    </ul>
</div>

<!--内容-->
<div id="main">
    <div class="container">
        <main_left>
            <div class="left_box">
                <h5>About us</h5>
                <div>
                    <p><?php echo ($about["content"]); ?></p>
                </div>
                <div class="box_a">
                    <a href="<?php echo U('About/index');?>" class="btn btn-bottom">More</a>
                </div>
            </div>
        </main_left>
        
        <main_right>
            
<!--             <div class="right_search">
                <input class="input-search" type="text"><button class="btn btn-search">搜索</button>
            </div> -->
            
            <div class="right_new">
                <h6>News</h6>
                <ul style="">
                    <?php if(is_array($news)): foreach($news as $key=>$data): ?><li>
                            <a href="<?php echo U('Culture/news_content_cn');?>?id=<?php echo ($data["id"]); ?>"><?php echo ($data["title"]); ?></a>
                            <div class="new_time"><?php echo ($data["created_time"]); ?></div>
                        </li><?php endforeach; endif; ?>
                </ul>

                    
            </div>  
            
            
           <div class="right_contact">
                <h6>Contact Us</h6>
                <ul>
                    <li>
                        <font>Tel：<?php echo ($telephone["content"]); ?></font>
                    </li>
                    <li>
                        <font>Fax：<?php echo ($fax["content"]); ?></font>
                    </li>
                    <li>
                        <font><a href="<?php echo ($email["content"]); ?>">E-mail：<?php echo ($email["content"]); ?></a></font>
                    </li>
                    <li>
                        <font>Website：<?php echo ($website["content"]); ?></font>
                    </li>
                    <li>
                        <font>Office：<?php echo ($office["content"]); ?></font>
                    </li>
                </ul>     
            </div>  
            
             
         </main_right>
         
         <div class="pro_show">
                <h6>Products Display</h6>
                <div class="box_before">
                    <div class="box">
                        <div class="picbox">
                            <ul class="piclist mainlist">
                                <?php if(is_array($work)): foreach($work as $key=>$data): ?><li><a href="#" target="_blank"><img src="/ucreate-pcb-co<?php echo ($data["pic_adr"]); ?>" /></a></li><?php endforeach; endif; ?>
                            </ul>
                            <ul class="piclist swaplist"></ul>
                        </div>
                        <div class="og_prev"></div>
                        <div class="og_next"></div>
                   </div> 
             </div>
         </div>
         
          <div class="mac_show">
                <a href="macshow.html"><h6>Equipment Display</h6></a>
                <div class="img_box">
                    <?php if(is_array($show)): foreach($show as $key=>$data): ?><div class="img_show">
                        <img src="/ucreate-pcb-co<?php echo ($data["pic_adr"]); ?>" alt="">
                    </div ><?php endforeach; endif; ?>
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