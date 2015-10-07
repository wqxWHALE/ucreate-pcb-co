<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>企业精神</title>
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
                企业精神
            </h1>
        </div>
    </div>
    <!-- 企业精神 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="icon-user"></i>
                    企业精神
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo ($spirit["content"]); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a type="button" style="width:100%;margin-top:8px;" class="btn btn-success" href="<?php echo U('Cultrue/alter_spirit_text');?>?id=<?php echo ($spirit["id"]); ?>">修 改 企 业 精 神</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>