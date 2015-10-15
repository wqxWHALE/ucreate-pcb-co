<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>资格证书</title>
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

    <script type="text/javascript">  
        $(document).ready(function() 
        {  
            window.top.window.iFrameHeight();
            window.top.window.callApplicationCount();
        });

        function callmyModal_1(u){
            window.top.window.myModalImage(u);
        }
    </script>
    
</head>
<body>

<div id="page-wrapper" >
    <div class="row">
        <div class="col-md-12">        
            <h1 class="page-header">
                资格证书
            </h1>
        </div>
    </div>
    <!-- 资格证书 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="icon-group"></i>
                    资格证书
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8" style="padding-top:8px;">
                            <p>添加资格证书图片。</p>
                        </div>
                        <div class="col-md-4">
                            <div style="float:right;"><a href="<?php echo U('Quality/add_picture');?>" style="width:100px;"type="button" class="btn btn-primary"> 添 加 图 片 </a></div>
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
                        <?php if(is_array($picture)): foreach($picture as $key=>$data): ?><tr>
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
                                        <a href="<?php echo U('Quality/alter_picture');?>?id=<?php echo ($data["id"]); ?>" type="button" class="btn btn-success">修 改</a>
                                        <a href="<?php echo U('Quality/delete_picture_handle');?>?id=<?php echo ($data["id"]); ?>" type="button" class="btn btn-danger">删 除</a>
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