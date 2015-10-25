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
    		<li class="current_page_item current-menu-item"><a href="<?php echo U('Index/index');?>?lang=zh-cn">首页</a></li>
			<li><a href="<?php echo U('About/index');?>?lang=zh-cn">关于我们</a>
            	<ul class="sub-menu">
					<li><a href="<?php echo U('About/index');?>?lang=zh-cn">公司简介</a></li>
					<li><a href="<?php echo U('About/achievement');?>?lang=zh-cn">市场成就</a></li>
				</ul>
            </li>
			<li><a title="" href="#">产品中心</a>
            	<ul class="sub-menu">
					<li><a href="proshowhard.html">硬板</a></li>
					<li><a href="proshowsoft.html">软板</a></li>
                    <li><a href="proshowhs.html">软硬结合版</a></li>
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
					<li><a href="culture.html">企业精神</a></li>
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
                <h5>关于我们</h5>
                <div>
                    <p><?php echo ($about["content"]); ?></p>
                </div>
                <div class="box_a">
                    <a href="about.html" class="btn btn-bottom">更多</a>
                </div>
            </div>
		</main_left>
        
        <main_right>
        	
            <div class="right_search">
            	<input class="input-search" type="text"><button class="btn btn-search">搜索</button>
            </div>
            
        	<div class="right_new">
        		<h6>企业新闻</h6>
            	<ul style="">
            		<li>
                        <a href="newdetail.html">上海嘉定首届科技博览会开幕</a>
                        <div class="new_time">2011-08-29</div>
                    </li>
                    <li>
                        <a href="newdetail.html">余杭将再次成为全国电子商务焦点</a>
                        <div class="new_time">2011-08-29</div>
                    </li>
                    <li>
                        <a href="newdetail.html">台资扩张大陆电子市场 机遇挑战并存</a>
                        <div class="new_time">2015-8-29</div>
                    </li>
            	</ul>
                
                 <div class="pageTest"></div>
                    <script type="text/javascript" src="/ucreate-pcb-co/Public/Index/js/page.js"></script>
                    <script type="text/javascript">
                    $('.pageTest').page({
                      leng: 3,//分页总数
                      activeClass: 'activP' , //active 类样式定义
                    })
                    </script>
                	
        	</div>  
            
            
           <div class="right_contact">
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
            
             
         </main_right>
         
         <div class="pro_show">
            	<h6>产品展示</h6>
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
            	<a href="macshow.html"><h6>设备展示</h6></a>
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
    		<div class="foot_box">Copyright © <?php echo ($name["content"]); ?> 电话:<?php echo ($telephone["content"]); ?> 传真:<?php echo ($fax["content"]); ?> 备案:<?php echo ($beian["content"]); ?>
</div>
        	
        </div>
    </div>
    
</div>

	
</div>



</body>
</html>