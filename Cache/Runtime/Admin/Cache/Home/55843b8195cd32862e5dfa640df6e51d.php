<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<base target="iframe"/>
<head>
  <meta charset="utf-8">
  <title>合创电路有限公司</title>
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="/ucreate-pcb-co/Public/Admin/Index/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/ucreate-pcb-co/Public/Admin/Index/theme.css">
  <link href="/ucreate-pcb-co/Public/Admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <script src="/ucreate-pcb-co/Public/Admin/Index/jquery-1.7.2.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() 
    {  
      $("li").click(function(){
          $('.nav').children('li').attr('class','#');
          $('.nav-list').children('li').attr('class','#');
          $(this).attr('class','active');
      });
      $(".nav-header").click(function(){
          $('.nav').children('li').attr('class','#');
          $('.nav-list').children('li').attr('class','#');
      });
    });

    function myModalImage(src){
      $("#mymodali").attr("src",src);
      $("#myModalImage").modal('toggle');
    }

    var browserVersion = window.navigator.userAgent.toUpperCase();
    var isOpera = false;
    var isFireFox = false;
    var isChrome = false;
    var isSafari = false;
    var isIE = false;
    var iframeTime;
    function reinitIframe(iframeId, minHeight) {
        try {
            var iframe = document.getElementById(iframeId);
            var bHeight = 0;
            if (isChrome == false && isSafari == false)
                bHeight = iframe.contentWindow.document.body.scrollHeight;

            var dHeight = 0;
            if (isFireFox == true)
                dHeight = iframe.contentWindow.document.documentElement.offsetHeight + 2;
            else if (isIE == false && isOpera == false)
                dHeight = iframe.contentWindow.document.documentElement.scrollHeight;
            else
                bHeight += 3;
            var height = Math.max(bHeight, dHeight);
            if (height < minHeight) height = minHeight;
            iframe.style.height = height + "px";
        } catch (ex) { }
    }
    function startInit(iframeId, minHeight) {
        isOpera = browserVersion.indexOf("OPERA") > -1 ? true : false;
        isFireFox = browserVersion.indexOf("FIREFOX") > -1 ? true : false;
        isChrome = browserVersion.indexOf("CHROME") > -1 ? true : false;
        isSafari = browserVersion.indexOf("SAFARI") > -1 ? true : false;
        if (!!window.ActiveXObject || "ActiveXObject" in window)
            isIE = true;
        reinitIframe(iframeId, minHeight);
        if (iframeTime != null)
            clearInterval(iframeTime)
        iframeTime = window.setInterval("reinitIframe('" + iframeId + "'," + minHeight + ")", 100);
    }
  </script>

  <!-- Demo page code -->
  <style type="text/css">
    #line-chart {
      height:300px;
      width:800px;
      margin: 0px auto;
      margin-top: 1em;
    }
    .brand { 
      font-family: georgia, serif; 
    }
    .brand .first {
      color: #ccc;
      font-style: italic;
    }
    .brand .second {
      color: #fff;
      font-weight: bold;
    }
  </style>

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="lib/html5.js"></script>
  <![endif]-->

  <!-- Le fav and touch icons -->
  <link rel="shortcut icon" href="../assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
</head>

<!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
<!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
<!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
<!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<body class="">  
  <div class="navbar">
    <div class="navbar-inner">
      <ul class="nav pull-right">                
        <li>
          <a href="<?php echo U('Index/help');?>" class="hidden-phone visible-tablet visible-desktop" role="button">技术支持</a>
        </li>
        <li id="fat-menu" class="dropdown">
          <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
            <i class="icon-user"></i>超级管理员
            <i class="icon-caret-down"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a tabindex="-1" href="<?php echo U('Index/changePassword');?>">修改密码</a></li>
            <li class="divider"></li>
            <li class="divider visible-phone"></li>
            <li><a tabindex="-1" href="<?php echo U('Login/loginout');?>">登出</a></li>
          </ul>
        </li>              
      </ul>
      <a class="brand">
        <span class="second">合创电路有限公司</span>
      </a>
    </div>
  </div>
    
  <div class="sidebar-nav">

    <a href="#dashboard-menu" class="nav-header" data-toggle="collapse">
      <i class="icon-dashboard"></i>网站基础信息
      <i class="icon-chevron-up" style="margin-top: 10px;"></i>
    </a>
    <ul id="dashboard-menu" class="nav nav-list collapse in">
      <li class="active"><a href="<?php echo U('Operation/index');?>">运维信息</a></li>
      <li><a href="<?php echo U('Operation/User');?>">用户信息</a></li>
      <li ><a href="<?php echo U('Operation/Visitor');?>">访问者详情</a></li>      
    </ul>

    <a href="<?php echo U('About/index');?>" class="nav-header">
      <i class="icon-user"></i>关于我们
    </a>

    <a href="#production-menu" class="nav-header collapsed" data-toggle="collapse">
      <i class="icon-file"></i>产品中心
      <i class="icon-chevron-up" style="margin-top: 10px;"></i>
    </a>
    <ul id="production-menu" class="nav nav-list collapse">
      <li ><a href="<?php echo U('Production/hard');?>">硬板</a></li>
      <li ><a href="<?php echo U('Production/soft');?>">软板</a></li>
      <li ><a href="<?php echo U('Production/mixture');?>">软硬结合板</a></li>
    </ul>

    <a href="#support-menu" class="nav-header collapsed" data-toggle="collapse">
      <i class="icon-question-sign"></i>技术支持
      <i class="icon-chevron-up" style="margin-top: 10px;"></i>
    </a>
    <ul id="support-menu" class="nav nav-list collapse">
      <li ><a href="<?php echo U('Support/device');?>">设备展示</a></li>
      <li ><a href="<?php echo U('Support/process');?>">生产流程</a></li>
      <li ><a href="<?php echo U('Support/ability');?>">生产能力</a></li>
    </ul>

    <a href="#quality-menu" class="nav-header collapsed" data-toggle="collapse">
      <i class="icon-book"></i>资质证书
      <i class="icon-chevron-up" style="margin-top: 10px;"></i>
    </a>
    <ul id="quality-menu" class="nav nav-list collapse">
      <li ><a href="privacy-policy.html">体系认证</a></li>
      <li ><a href="terms-and-conditions.html">质量方针</a></li>
    </ul>

    <a href="#cultrue-menu" class="nav-header collapsed" data-toggle="collapse">
      <i class="icon-glass"></i>企业文化
      <i class="icon-chevron-up" style="margin-top: 10px;"></i>
    </a>
    <ul id="cultrue-menu" class="nav nav-list collapse">
      <li ><a href="<?php echo U('Culture/spirit');?>">企业精神</a></li>
      <li ><a href="<?php echo U('Culture/build');?>">企业文化建设</a></li>
    </ul>

    <a href="<?php echo U('Recruit/index');?>" class="nav-header">
      <i class="icon-legal"></i>人才招聘
    </a>

    <a href="#" class="nav-header" data-toggle="collapse">
      <i class="icon-comment"></i>联系我们
      <span class="label label-info" style="background-color:#C03111;">+3</span>
    </a>

    <a href="<?php echo U('News/index');?>" class="nav-header" >
      <i class="icon-bullhorn"></i>新闻中心
    </a>

  </div>
      
  <div class="content">
    <iframe id="iframe" name="iframe" src="<?php echo U('Operation/index');?>" frameBorder=0 scrolling=no style="padding: 0px; width: 100%; height: 1250px;" ></iframe>
  </div>
  <script type="text/javascript">
    startInit('iframe', 560);
  </script>
  <script src="/ucreate-pcb-co/Public/Admin/Index/bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript">
      $("[rel=tooltip]").tooltip();
      $(function() {
          $('.demo-cancel-click').click(function(){return false;});
      });
  </script> 
  </body>
</html>

<!-- Modal_Image -->
<div class="modal fade" id="myModalImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">图片预览</h4>
      </div>
      <div class="modal-body">
        <img id="mymodali" src="" class="img-rounded" style="width:570px;">
      </div>
    </div>
  </div>
</div>