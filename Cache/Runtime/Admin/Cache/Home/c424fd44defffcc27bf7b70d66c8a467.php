<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>用户信息</title>
    <link rel="icon" href="/ucreate-pcb-co/Public/Uploads/img/logo.png">
    <!-- Bootstrap core CSS -->
    <link href="/ucreate-pcb-co/Public/Admin/Css/bootstrap.min.css" rel="stylesheet">
    <script src="/ucreate-pcb-co/Public/Admin/Js/jquery.min.js"></script>
    <script src="/ucreate-pcb-co/Public/Admin/Js/bootstrap.min.js"></script>
    <script src="/ucreate-pcb-co/Public/Admin/Js/docs.min.js"></script>
    <script src="/ucreate-pcb-co/Public/Admin/Js/ie10-viewport-bug-workaround.js"></script>

    <!-- Font-awesome core CSS -->
    <link href="/ucreate-pcb-co/Public/Admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="/ucreate-pcb-co/Public/Admin/Css/Operation.css" rel="stylesheet">

    <script type="text/javascript">
        $(document).ready(function() 
        {  

        });
    </script>
    
</head>
<body>

<div id="page-wrapper" >
    <div class="row">
        <div class="col-md-12">        
            <h1 class="page-header">
                用户信息
            </h1>
        </div>
    </div>
    <!-- 报名方式 -->
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">              
                    <table class="table table-bordered" style="border-bottom:1px solid #DDD;">
                      <tbody>
                        <tr>
                          <td style="col-md-4">公司名：</td>
                          <td style="col-md-6"><?php echo ($name['content']); ?></td>
                          <td style="col-md-2"><a href="<?php echo U('Operation/alter_user');?>?id=<?php echo ($name['id']); ?>&name=公司名" type="submit" style="width:100%;" class="btn btn-success">修 改</a></td>
                        </tr>
                        <tr>
                          <td style="col-md-4">备案：</td>
                          <td style="col-md-6"> <?php echo ($beian['content']); ?></td>
                          <td style="col-md-2"><a href="<?php echo U('Operation/alter_user');?>?id=<?php echo ($beian['id']); ?>&name=备案" type="submit" style="width:100%;" class="btn btn-success">修 改</a></td>
                        </tr> 
                        <tr>
                          <td style="col-md-3">电话：</td>
                          <td style="col-md-8"><?php echo ($telephone['content']); ?></td>
                          <td style="col-md-2"><a href="<?php echo U('Operation/alter_user');?>?id=<?php echo ($telephone['id']); ?>&name=电话" type="submit" style="width:100%;" class="btn btn-success">修 改</a></td>
                        </tr>
                        <tr>
                          <td style="col-md-4">传真：</td>
                          <td style="col-md-6"><?php echo ($fax['content']); ?></td>
                          <td style="col-md-2"><a href="<?php echo U('Operation/alter_user');?>?id=<?php echo ($fax['id']); ?>&name=传真" type="submit" style="width:100%;" class="btn btn-success">修 改</a></td>
                        </tr>
                        <tr>
                          <td style="col-md-3">邮箱：</td>
                          <td style="col-md-8"><?php echo ($email['content']); ?></td>
                          <td style="col-md-2"><a href="<?php echo U('Operation/alter_user');?>?id=<?php echo ($email['id']); ?>&name=邮箱" type="submit" style="width:100%;" class="btn btn-success">修 改</a></td>
                        </tr> 
                        <tr>
                          <td style="col-md-4">网站：</td>
                          <td style="col-md-6"><?php echo ($website['content']); ?></td>
                          <td style="col-md-2"><a href="<?php echo U('Operation/alter_user');?>?id=<?php echo ($website['id']); ?>&name=网站" type="submit" style="width:100%;" class="btn btn-success">修 改</a></td>
                        </tr>
                        <tr>
                          <td style="col-md-4">办公室：</td>
                          <td style="col-md-6"><?php echo ($office['content']); ?></td>
                          <td style="col-md-2"><a href="<?php echo U('Operation/alter_user');?>?id=<?php echo ($office['id']); ?>&name=办公室" type="submit" style="width:100%;" class="btn btn-success">修 改</a></td>
                        </tr>
                        <tr>
                          <td style="col-md-4">深圳工厂：</td>
                          <td style="col-md-6"><?php echo ($factory_shenzhen['content']); ?></td>
                          <td style="col-md-2"><a href="<?php echo U('Operation/alter_user');?>?id=<?php echo ($factory_shenzhen['id']); ?>&name=深圳工厂" type="submit" style="width:100%;" class="btn btn-success">修 改</a></td>
                        </tr> 
                        <tr>
                          <td style="col-md-4">惠州工厂：</td>
                          <td style="col-md-6"><?php echo ($factory_huizhou['content']); ?></td>
                          <td style="col-md-2"><a href="<?php echo U('Operation/alter_user');?>?id=<?php echo ($factory_huizhou['id']); ?>&name=惠州工厂" type="submit" style="width:100%;" class="btn btn-success">修 改</a></td>
                        </tr>       
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>