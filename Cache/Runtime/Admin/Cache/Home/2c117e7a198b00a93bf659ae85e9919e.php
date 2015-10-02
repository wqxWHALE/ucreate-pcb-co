<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
</head>
<body class=""> 
  <div class="navbar">
    <div class="navbar-inner">
      <ul class="nav pull-right"></ul>
      <a class="brand">
        <span class="second" style="color:#FFF;">合创电路有限公司后台</span>
      </a>
    </div>
  </div>
  <form class="form-signin" role="form" action="<?php echo U('Login/verify');?>" method='post' id="form" data-ajax="false" > 
  <div class="row-fluid">
    <div class="dialog">
      <div class="block">
        <p class="block-heading">后台登入</p>
        <div class="block-body">
          <form>
            <label>账号</label>
            <input type="text" class="span12" name="loginname">
            <label>密码</label>
            <input type="password" class="span12" name="password">
            <button class="btn btn-primary pull-right" type="submit" data-ajax="false" >登 入</button>
            <label class="remember-me"><input type="checkbox">记住密码</label>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </form>
</body>
</html>