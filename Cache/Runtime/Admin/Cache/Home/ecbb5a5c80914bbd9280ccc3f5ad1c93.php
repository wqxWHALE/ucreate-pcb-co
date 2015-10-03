<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>技术支持</title>
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
                技术支持
            </h1>
        </div>
    </div>
    <!-- 设备简介 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="icon-user"></i>
                    设备简介
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo ($device["content"]); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a type="button" style="width:100%;margin-top:8px;" class="btn btn-success" href="<?php echo U('Support/alter_device');?>?id=<?php echo ($device["id"]); ?>">修 改 设 备 简 介</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 设备展示 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="icon-group"></i>
                    设备展示
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8" style="padding-top:8px;">
                            <p>添加设备展示。</p>
                        </div>
                        <div class="col-md-4">
                            <div style="float:right;"><a href="<?php echo U('Support/add_show');?>" style="width:100px;"type="button" class="btn btn-primary"> 添 加 图 片 </a></div>
                        </div>
                    </div>
                </div>  
                <table class="table table-hover" style="border-bottom:1px solid #DDD;">
                    <thead>
                        <tr>
                          <th class="col-md-4"><div align="center">序号</div></th>
                          <th class="col-md-4"><div align="center">图片</div></th>
                          <th class="col-md-4"><div align="center">操作</div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($show)): foreach($show as $key=>$data): ?><tr>
                            <th scope="row">
                                <div align="center">
                                    <div style="padding-top:15px;"><?php echo ($key+1); ?></div>
                                </div>
                            </th>
                            <td>
                                <div align="center">
                                    <a href="#" onclick="callmyModal_1('/ucreate-pcb-co<?php echo ($data["pic_adr"]); ?>')">
                                        <img src="/ucreate-pcb-co<?php echo ($data["pic_adr"]); ?>" class="img-rounded" style="height:50px;">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    <div style="width:200px;padding-top:10px;">
                                        <a href="<?php echo U('Support/alter_show');?>?id=<?php echo ($data["id"]); ?>" type="button" class="btn btn-success">修 改</a>
                                        <a href="<?php echo U('Support/delete_show_handle');?>?id=<?php echo ($data["id"]); ?>" type="button" class="btn btn-danger">删 除</a>
                                    </div>
                                </div>
                            </td>
                        </tr><?php endforeach; endif; ?>
                    </tbody>
                </table>      
            </div>
        </div>
    </div>  
</div>
</body>
</html>