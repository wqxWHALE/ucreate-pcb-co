<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>新闻中心</title>
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

    <link href="/ucreate-pcb-co/Public/Admin/Css/Common.css" rel="stylesheet">

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
                新闻中心
            </h1>
        </div>
    </div>
    <!-- 文章 -->
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12" style="margin-bottom:10px;">
                    <div style="float:left;margin-top:-5px;">
                        <h4>总共<?php echo ($count); ?>篇新闻</h4>
                    </div>
                    <div style="float:right;"><a href="<?php echo U('News/add');?>" style="width:150px;"type="button" class="btn btn-primary">新 增 新 闻</a></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                  <th class="col-md-2"><div align="center">序号</div></th>
                                  <th class="col-md-3"><div align="center">标题</div></th>
                                  <th class="col-md-3"><div align="center">点击数</div></th>
                                  <th class="col-md-3"><div align="center">时间</div></th>
                                  <th class="col-md-2"><div align="center">操作</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($news)): foreach($news as $key=>$data): ?><tr>
                                    <th scope="row">
                                        <div align="center" style="padding-top:6px;">
                                            <?php echo ($key+1); ?>
                                        </div>
                                    </th>
                                    <td>
                                        <div align="center" style="padding-top:6px;">
                                            <?php echo ($data["title"]); ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div align="center" style="padding-top:6px;">
                                            <?php echo ($data["click"]); ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div align="center" style="padding-top:6px;">
                                            <?php echo ($data["created_time"]); ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div align="center">
                                            <div style="width:200px;">
                                                <a type="button" class="btn btn-success" href="<?php echo U('News/alter');?>?id=<?php echo ($data["id"]); ?>">修 改</a>
                                                <a type="button" class="btn btn-danger" href="<?php echo U('News/delete_handle');?>?id=<?php echo ($data["id"]); ?>">删 除</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr><?php endforeach; endif; ?>
                            </tbody>
                        </table>       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="float:right;">
                    <nav>
                      <ul class="pagination">
                        <?php echo ($page); ?>
                     </ul>
                    </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>