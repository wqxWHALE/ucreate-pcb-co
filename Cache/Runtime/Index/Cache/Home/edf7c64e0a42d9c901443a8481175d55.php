<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($name["content"]); ?></title>
<link href="/ucreate-pcb-co/Public/Index/css/style.css" rel="stylesheet" type="text/css" media="all">
<script src="/ucreate-pcb-co/Public/Index/js/jquery.min.js"></script>
<script src="/ucreate-pcb-co/Public/Index/js/1-6-10.esl.js"></script>
<script src="/ucreate-pcb-co/Public/Index/js/jquery.circliful.min.js"></script>
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
        	
            <div class="achieve_text">
                <div class="market_title">
                    <h5>市场成就</h5>
                </div>
               <div class="market_show">
                    <ul>
                        <li>公司产品主要出口欧美</li>
                        <li>客户群遍布全球30多个国家</li>
                        <li>公司产品广泛应用于各种行业</li>
                    </ul>
               </div>
        </div>
        
        
            <div class="achieve_4">
            	<h3>市场分布</h3>
                <font>Market distribution</font>
                <img alt="" src="/ucreate-pcb-co/Public/Image/map.jpg">
                <div class="achieve_box">
        			<div class="box" id="myStat01" data-dimension="200" data-text="10%" data-info="" data-width="30" data-fontsize="38" data-percent="10" data-fgcolor="#61a9dc" data-bgcolor="#eee"></div>
                    <h4>China</h4>
                </div>
                <div class="achieve_box">
        			<div class="box" id="myStat02" data-dimension="200" data-text="9%" data-info="" data-width="30" data-fontsize="38" data-percent="9" data-fgcolor="#87d7a5" data-bgcolor="#eee"></div>
                    <h4>Asia</h4>
                </div>
                <div class="achieve_box">
        			<div class="box" id="myStat03" data-dimension="200" data-text="48%" data-info="" data-width="30" data-fontsize="38" data-percent="48" data-fgcolor="#fbad4c" data-bgcolor="#eee"></div>
                    <h4>Europe</h4>
                </div>
                <div class="achieve_box">
        			<div class="box" id="myStat04" data-dimension="200" data-text="33%" data-info="" data-width="30" data-fontsize="38" data-percent="33" data-fgcolor="#7ea568" data-bgcolor="#eee"></div>
                    <h4>America</h4>
                </div>

                <script type="text/javascript">
				$( document ).ready(function() {
				$('#myStat01').circliful();
				$('#myStat02').circliful();
   				$('#myStat03').circliful();
    			$('#myStat04').circliful();
    			});
			</script>
        	</div>
        	
            
            
            
                     <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
            <div id="showdata" style="height:500px;margin-top:20px;background:#FFF;"></div>
					<script type="text/javascript">
                // 路径配置
                require.config({
                    paths:{ 
                        'echarts' : '/ucreate-pcb-co/Public/Index/js/echarts',
                        'echarts/chart/pie' : '/ucreate-pcb-co/Public/Index/js/echarts'
                    }
                });
                
                // 使用
                require(
                    [
                        'echarts',
                        'echarts/chart/pie' // 使用柱状图就加载bar模块，按需加载
                    ],
                    function (ec) {
                        // 基于准备好的dom，初始化echarts图表
                        var myChart = ec.init(document.getElementById('showdata')); 
                        var option = {
            title : {
                text: '产品应用',
				subtext:'Product application',
                x:'center',
				y:'30'
            },
            tooltip : {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            legend: {
                orient : 'vertical',
                x : 'left',
                data:['industry control工业控制','consuming消费类电子','computer计算机','security安防电子','automotive汽车电子','power electronics电源电子','aerospace航空航天','medical医疗仪器','telecom通信设备','others其他']
            },
           
            calculable : true,
            series : [
                {
                    name:'百分百',
                    type:'pie',
                    radius : '55%',
                    center: ['50%', '50%'],
                    data:[
						{value:26, name:'consuming消费类电子'},
                        {value:3, name:'industry control工业控制'},
						{value:7, name:'computer计算机'},
						{value:5.5, name:'security安防电子'},
						{value:1, name:'automotive汽车电子'},
						{value:16, name:'power electronics电源电子'},
						{value:2, name:'aerospace航空航天'},
						{value:10, name:'medical医疗仪器'},
						{value:0.5, name:'others其他'},
                        {value:29, name:'telecom通信设备'},
                    ]
                }
            ]
        };	
        myChart.setOption(option); 
            }
        );
        </script>
  		
            
        
        
		
		
	
	
        
	</div><!-- .container -->
</div>
    
    <div id="footer">
    	<div class="container">
    		<div class="foot_box">Copyright © <?php echo ($name["content"]); ?> 电话:<?php echo ($telephone["content"]); ?> 传真:<?php echo ($fax["content"]); ?> 备案:<?php echo ($beian["content"]); ?>
</div>
        	
        </div>
    </div><!--.footer-->
    
</div>

	
</div>



</body>
</html>