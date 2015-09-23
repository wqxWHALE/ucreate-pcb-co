<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/ucreate-pcb-co/Uploads/logo.png">

    <title>合创电路有限公司-后台登录</title>

    <!-- Bootstrap core CSS -->
    <link href="/ucreate-pcb-co/Public/Admin/Css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/ucreate-pcb-co/Public/Admin/Css/signin.css" rel="stylesheet">

    <script src="/ucreate-pcb-co/Public/Admin/Js/ie10-viewport-bug-workaround.js"></script>

  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form" action="<?php echo U('Login/verify');?>" method='post' id="form">
        <h2 class="form-signin-heading">请登录</h2>
        <label for="inputEmail" class="sr-only">账号：</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="请输入账号" name="loginname" required autofocus>
        <label for="inputPassword" class="sr-only">密码：</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="请输入密码" name="password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> 记住密码
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登 录</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/ucreate-pcb-co/Public/Admin/Js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>