<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>添加企业文化建设图片介绍</title>
    <link rel="icon" href="/ucreate-pcb-co/Public/Uploads/img/logo.png">
    <!-- Bootstrap core CSS -->
    <link href="/ucreate-pcb-co/Public/Admin/Css/bootstrap.min.css" rel="stylesheet">
    <script src="/ucreate-pcb-co/Public/Admin/Js/jquery.min.js"></script>
    <script src="/ucreate-pcb-co/Public/Admin/Js/bootstrap.min.js"></script>
    <script src="/ucreate-pcb-co/Public/Admin/Js/docs.min.js"></script>
    <script src="/ucreate-pcb-co/Public/Admin/Js/ie10-viewport-bug-workaround.js"></script>

    <!-- Font-awesome core CSS -->
    <link href="/ucreate-pcb-co/Public/Admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="/ucreate-pcb-co/Public/Admin/Css/Common.css" rel="stylesheet">

    <link href="/ucreate-pcb-co/Public/Admin/Css/Operation.css" rel="stylesheet">

    <script type="text/javascript">
        $(document).ready(function() 
        {  

        });
    </script>

    <script type="text/javascript">
        var url;
        $(document).ready(function(){
            $("input[type=file]").change(function(e){
                var fileInput = $(this)[0];
                var file = fileInput.files[0];
                if(file){
                    var reader = new FileReader();
                    reader.onload=function(e){
                        $("#img").attr("value","1");
                        url = reader.result;
                        if($("#imageInput").length > 0){
                            $("#imageInput").attr("src",reader.result);
                        }else{
                            $("#altput").hide();
                            $("#imput").append('<a href="#" onclick="callmyModal();"><img id="imageInput" class="img-thumbnail" src="'+reader.result+'" style="height:200px;width:200px;float:left;"/></a>');
                            window.parent.window.iFrameHeight();
                        }    

                    }
                    reader.readAsDataURL(file);
                }
            });
        });

        function callmyModal(){
            window.top.window.myModalImage(url);
        }

        function callmyModal_1(uu){
            window.top.window.myModalImage(uu);
        }

    </script>
    
</head>
<body>

<div id="page-wrapper" >
    <div class="row">
        <div class="col-md-12">        
            <h1 class="page-header">
                添加图片介绍
            </h1>
        </div>
    </div>
    <!-- 导航 -->
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
              <li><a href="<?php echo U('Culture/build');?>">企业文化建设</a></li>
              <li class="active">添加图片介绍</li>
            </ol>
        </div>
    </div>
    <form class="form-signin" enctype="multipart/form-data" role="form" action="<?php echo U('Culture/add_picture_handle');?>" method='post' id="form">
    <!-- 主体 -->
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td>标题:</td>
                  <td><input name="title" type="text" class="form-control" style="width:250px" placeholder="请输入标题" value=""></td>
                </tr>
                <tr>
                  <td>上传图片:</td>
                  <td><input name="file" type="file" class="form-control"></td>
                </tr>
                <tr>
                    <td>上传预览:</td>
                    <td id="imput"><p id="altput" >上传后才可预览，请选择文件。</p></td>
                </tr>
              </tbody>
            </table>
            <input id="img" name="img" value="0" type="hidden" >
            <div style="float:right;"><button type="submit" class="btn btn-primary">提 交</button></div>
        </div>
    </div>
    </form>
    <!-- 说明 -->
    <div class="row">
        <div class="col-md-12">
            <div class="bs-callout bs-callout-info" id="callout-alerts-dismiss-plugin">
                <h4>说明</h4>
                <p>添加企业文化建设图片介绍</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>