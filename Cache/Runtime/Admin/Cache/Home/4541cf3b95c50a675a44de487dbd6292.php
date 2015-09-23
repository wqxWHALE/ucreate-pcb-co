<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>修改基础信息</title>
    <link rel="icon" href="/taobaoke/Public/Uploads/img/logo.png">
    <!-- Bootstrap core CSS -->
    <link href="/taobaoke/Public/Admin/Css/bootstrap.min.css" rel="stylesheet">
    <script src="/taobaoke/Public/Admin/Js/jquery.min.js"></script>
    <script src="/taobaoke/Public/Admin/Js/bootstrap.min.js"></script>
    <script src="/taobaoke/Public/Admin/Js/docs.min.js"></script>
    <script src="/taobaoke/Public/Admin/Js/ie10-viewport-bug-workaround.js"></script>

    <!-- Font-awesome core CSS -->
    <link href="/taobaoke/Public/Admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="/taobaoke/Public/Admin/Css/Homepage.css" rel="stylesheet">
    
</head>
<body>

<div id="page-wrapper" >
    <div class="row">
        <div class="col-md-12">        
            <h1 class="page-header">
                修改基础信息 
            </h1>
        </div>
    </div>
    <!-- 导航 -->
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
              <li><a href="<?php echo U('Webinfo/index');?>">网站基础信息</a></li>
              <li class="active">修改基础信息</li>
            </ol>
        </div>
    </div>
    <form class="form-signin" role="form" action="<?php echo U('Webinfo/alter_info_handle');?>" method='post' id="form">
    <!-- 主体 -->
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td style="width:120px;">电话:</td>
                  <td><input name="phone" type="text" class="form-control" placeholder="请输入电话" value="<?php echo ($phone["content"]); ?>"></td>
                </tr>
                <tr>
                  <td>备案:</td>
                  <td><input name="beian" type="text" class="form-control" placeholder="请输入备案" value="<?php echo ($beian["content"]); ?>"></td>
                </tr>
                <tr>
                  <td>版权:</td>
                  <td><input name="banquan" type="text" class="form-control" placeholder="请输入版权" value="<?php echo ($banquan["content"]); ?>"></td>
                </tr>
                <tr>
                  <td>地址:</td>
                  <td><input name="address" type="text" class="form-control" placeholder="请输入地址" value="<?php echo ($address["content"]); ?>"></td>
                </tr>
              </tbody>
            </table>
            <div style="float:right;"><button type="submit" class="btn btn-primary">提 交</button></div>
        </div>
    </div>
    </form>
    <!-- 说明 -->
    <div class="row">
        <div class="col-md-12">
            <div class="bs-callout bs-callout-info" id="callout-alerts-dismiss-plugin">
                <h4>说明</h4>
                <p>网站基础信息修改基础信息。</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>