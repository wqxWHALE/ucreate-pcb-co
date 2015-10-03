<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>生产能力</title>
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
            window.top.window.iFrameHeight();
            window.top.window.callApplicationCount();
        });
    </script>
    
</head>
<body>

<div id="page-wrapper" >
    <div class="row">
        <div class="col-md-12">        
            <h1 class="page-header">
                生产能力
            </h1>
        </div>
    </div>
    <!-- 生产能力 -->
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12" style="margin-bottom:10px;">
                    <div style="float:left;margin-top:-5px;">
                        <h4>总共<?php echo ($count); ?>个生产能力</h4>
                    </div>
                    <div style="float:right;"><a href="<?php echo U('Support/add_ability');?>" style="width:150px;"type="button" class="btn btn-primary">新 增 生 产 能 力</a></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                  <th class="col-md-1"><div align="center">序号</div></th>
                                  <th class="col-md-3"><div align="center">项目</div></th>
                                  <th class="col-md-3"><div align="center">参数</div></th>
                                  <th class="col-md-3"><div align="center">备注</div></th>
                                  <th class="col-md-2"><div align="center">操作</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($ability)): foreach($ability as $key=>$data): ?><tr>
                                    <th scope="row">
                                        <div align="center">
                                            <div style="padding-top:10px;"><?php echo ($key+1); ?></div>
                                        </div>
                                    </th>
                                    <td>
                                        <div align="center">
                                            <div style="padding-top:10px;"><?php echo ($data["title"]); ?></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div align="center">
                                            <div style="padding-top:10px;"><?php echo ($data["parameter"]); ?></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div align="center">
                                            <div style="padding-top:10px;"><?php echo ($data["remark"]); ?></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div align="center">
                                            <div style="width:200px;padding-top:5px;">
                                                <a href="<?php echo U('Support/alter_ability');?>?id=<?php echo ($data["id"]); ?>" type="button" class="btn btn-success">修 改</a>
                                                <a href="<?php echo U('Support/delete_ability_handle');?>?id=<?php echo ($data["id"]); ?>" type="button" class="btn btn-danger">删 除</a>
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
    </div>
</div>

</body>
</html>