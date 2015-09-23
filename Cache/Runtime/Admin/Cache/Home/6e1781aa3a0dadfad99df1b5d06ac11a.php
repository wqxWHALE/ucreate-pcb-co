<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>修改登录密码</title>
    <link rel="icon" href="/ucreate-pcb-co/Public/Uploads/img/logo.png">
    <!-- Bootstrap core CSS -->
    <link href="/ucreate-pcb-co/Public/Admin/Css/bootstrap.min.css" rel="stylesheet">
    <script src="/ucreate-pcb-co/Public/Admin/Js/jquery.min.js"></script>
    <script src="/ucreate-pcb-co/Public/Admin/Js/bootstrap.min.js"></script>
    <script src="/ucreate-pcb-co/Public/Admin/Js/docs.min.js"></script>
    <script src="/ucreate-pcb-co/Public/Admin/Js/ie10-viewport-bug-workaround.js"></script>

    <!-- Font-awesome core CSS -->
    <link href="/ucreate-pcb-co/Public/Admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="/ucreate-pcb-co/Public/Admin/Css/Homepage.css" rel="stylesheet">
    
</head>
<body>

<div id="page-wrapper" >
    <div class="row">
        <div class="col-md-12">        
            <h1 class="page-header">
                修改登录密码
            </h1>
        </div>
    </div>
    <form class="form-signin" role="form" action="<?php echo U('Index/changePasswordHandle');?>" method='post' id="form">
    <!-- 主体 -->
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td>名称:</td>
                  <td><?php echo ($nickname); ?></td>
                </tr>
                <tr>
                  <td>账号:</td>
                  <td><input type="text" class="form-control" style="width:320px;" name="current_loginname" placeholder="请输入当前账号"></td>
                </tr>
                <tr>
                  <td>当前密码:</td>
                  <td><input type="password" class="form-control" style="width:320px;" name="current_password" placeholder="请输入当前密码"></td>
                </tr>
                <tr>
                  <td>新密码:</td>
                  <td><input type="password" class="form-control" style="width:320px;" name="new_password" placeholder="请输入新的密码"></td>
                </tr>
                <tr>
                  <td>再次输入新密码:</td>
                  <td><input type="password" class="form-control" style="width:320px;" name="new_password_again" placeholder="请输入再次输入新的密码"></td>
                </tr>
              </tbody>
            </table>
            <div style="float:right;"><button type="submit" class="btn btn-primary">确认修改</button></div>
        </div>
    </div>
    </form>
    <!-- 说明 -->
    <div class="row">
        <div class="col-md-12">
            <div class="bs-callout bs-callout-warning" id="callout-alerts-dismiss-plugin">
                <h4>提示</h4>
                <p>目前仅为一个管理员无权限区分，需要请联系。</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>