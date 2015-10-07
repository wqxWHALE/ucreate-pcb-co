<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>人才招聘</title>
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
                人才招聘
            </h1>
        </div>
    </div>
    <!-- 人才理念 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="icon-user"></i>
                    人才理念
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo ($idea["content"]); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a type="button" style="width:100%;margin-top:8px;" class="btn btn-success" href="<?php echo U('Recruit/alter');?>?id=<?php echo ($idea["id"]); ?>&name=人才理念">修 改 人 才 理 念</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 酬薪福利 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="icon-user"></i>
                    酬薪福利
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo ($welfare["content"]); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a type="button" style="width:100%;margin-top:8px;" class="btn btn-success" href="<?php echo U('Recruit/alter');?>?id=<?php echo ($welfare["id"]); ?>&name=酬薪福利">修 改 酬 薪 福 利</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>