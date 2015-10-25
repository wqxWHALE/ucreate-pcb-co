<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>合创电路有限公司</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<script src="./js/jquery.min.js"></script>
<script type="text/javascript" src="js/zzsc.js"></script>
</head>

<body class="home blog custom-background">
	<div class="wrapper">
		<header id="branding" >
        	<!--<img src="images/LOGO.jpg">---->
             <div class="main_top">
            	<img alt="" src="images/LOGO2.png">
            	<div id="trans">
                	<div class="contry_box">
                    	<a href="#">
                        	<img alt="" src="images/contry01.jpg">
                            <div class="text_center">中文</div>
                       </a>
                   </div> 
                   <div class="contry_box">
                   		<a href="#">
                        	<img alt="" src="images/contry02.jpg">
                            <div class="text_center">English</div>
                       </a>
                  </div>
              </div>
            </div>
<!--导航---->
<nav id="main-nav" class="clearfix">
	<div class="container clearfix">
    	<ul class="root">
    		<li class="current_page_item current-menu-item"><a href="index.html">首页</a></li>
			<li><a href="about.html">关于我们</a>
            	<ul class="sub-menu">
					<li><a href="about.html">公司简介</a></li>
					<li><a href="achievement.html">市场成就</a></li>
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
var fullAdName = 'images/27730.swf';
if(fullAdName){
	if(fullAdType == 'swf'){
		gg960Con = '<embed wmode="transparent" height="400" width="980" flashvars="alink1='+fullAdUrl+'" allowscriptaccess="always" quality="high" name="Advertisement" id="Advertisement" style="" src="images/27730.swf" type="application/x-shockwave-flash"></embed>';
		
	}else{
		gg960Con = '<a href="'+fullAdUrl+'" target="_blank"><img width="980" height="400" src="images/main02.jpg"/></a>';//flash无法显示时，显示JPG广告
	}
	
	setTimeout(open_gg960,500);//延迟显示
}
</script>







<!--silder-->
<script src="js/responsiveslides.min.js"></script>
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
    	<li>
        	<img src="images/featured-1.jpg" alt="">
        </li>
        <li>
        	<img src="images/featured-2.jpg" alt="">
        </li>
        <li>
        	<img src="images/featured-3.jpg" alt="">
        </li>
        <li>
        	<img src="images/featured-1.jpg" alt="">
        </li>
    </ul>
</div>

<!--内容-->
<div id="main">
	<div class="container">
		<main_left>
        	<div class="left_box">
                <h5>关于我们</h5>
                <img src="images/main02.jpg">
                <div>
                    <p>合创电路公司，成立于2004年，是一家专业从事高密度多层印制板的制造企业。公司经过多年的发展为 满足了客户对快交期，高品质，大批量一站式的需求于深圳和惠州设立工厂，总占地面积超过12000平米，月生产能力达到30000平米，现有员工800人，其中具有10年以上行业的管理、工程技术人员共150人。</p>
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
                    <script type="text/javascript" src="js/page.js"></script>
                    <script type="text/javascript">
                    $('.pageTest').page({
                      leng: 3,//分页总数
                      activeClass: 'activP' , //active 类样式定义
                    })
                    </script>
                	
            	<!---<div class="wp-pagenavi">
            		<span class="pages">Page 1 of 3</span><span class="current">1</span>
                		<a class="page larger" href="#">2</a>
                		<a class="page larger" href="#">3</a>
                		<a class="nextpostslink" rel="next" href="#">»</a>
            	</div>        --->
        	</div>  
            
            
           <div class="right_contact">
        		<h6>联系我们</h6>
            	<ul>
            		<li>
                		<font>电话：+86 0755-89230220</font>
                	</li>
                	<li>
                		<font>传真：+86 0755-89250616</font>
                	</li>
                	<li>
                		<font><a href="mailto:sales@ucreatepcb.com">邮箱：sales@ucreatepcb.com</a></font>
                	</li>
                    <li>
                		<font>网站：www.ucreatepcb.com</font>
                	</li>
                    <li>
                		<font>办公室：中国广东省深圳市龙岗区吉祥地铁站旁湖广通创业大厦611</font>
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
                            	<li><a href="#" target="_blank"><img src="images/prohard01.jpg" /></a></li>
            					<li><a href="#" target="_blank"><img src="images/prohard02.jpg" /></a></li>
								<li><a href="#" target="_blank"><img src="images/prohard05.jpg" /></a></li>
								<li><a href="#" target="_blank"><img src="images/prohard04.jpg" /></a></li>
                                <li><a href="#" target="_blank"><img src="images/prohard05.jpg" /></a></li>
            					<li><a href="#" target="_blank"><img src="images/prohard06.jpg" /></a></li>
                                <li><a href="#" target="_blank"><img src="images/prohs03.jpg" /></a></li>
								<li><a href="#" target="_blank"><img src="images/prohs06.png" /></a></li>
								<li><a href="#" target="_blank"><img src="images/prosoft01.png" /></a></li>
								<li><a href="#" target="_blank"><img src="images/prosoft02.png" /></a></li>
								<li><a href="#" target="_blank"><img src="images/prosoft03.jpg" /></a></li>
								<li><a href="#" target="_blank"><img src="images/prosoft04.jpg" /></a></li>
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
            		<div class="img_show">
                		<img src="images/macshow01.jpg" alt="">
                	</div >
                	<div class="img_show">
                		<img src="images/macshow02.jpg" alt="">
                	</div>
                	<div class="img_show">
                		<img src="images/macshow03.jpg" alt="">
                	</div>
                	<div class="img_show">
                		<img src="images/macshow04.jpg" alt="">
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