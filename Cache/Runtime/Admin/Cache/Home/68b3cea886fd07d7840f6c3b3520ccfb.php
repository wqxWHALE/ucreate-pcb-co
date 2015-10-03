<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>修改软硬结合板产品</title>
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
                修改软硬结合板产品
            </h1>
        </div>
    </div>
    <!-- 导航 -->
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
              <li><a href="<?php echo U('Production/mixture');?>">软硬结合板产品</a></li>
              <li class="active">修改软硬结合板产品</li>
            </ol>
        </div>
    </div>
    <form enctype="multipart/form-data" class="form-signin" role="form" action="<?php echo U('Production/alter_mixture_handle');?>" method='post' id="form">
    <!-- 主体 -->
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td>名称:</td>
                  <td><input name="name" class="form-control" style="width:320px;" placeholder="请输入名称" value="<?php echo ($data["name"]); ?>" type="text"></td>
                </tr>
                <tr>
                  <td>层数:</td>
                  <td><input name="boardlayer" class="form-control" style="width:320px;" placeholder="请输入层数" value="<?php echo ($data["boardlayer"]); ?>" type="text"></td>
                </tr>
                <tr>
                  <td>板厚:</td>
                  <td><input name="boardthickness" class="form-control" style="width:320px;" placeholder="请输入板厚" value="<?php echo ($data["boardthickness"]); ?>" type="text"></td>
                </tr>
                <tr>
                  <td>最小线宽线距:</td>
                  <td><input name="minilinewidth" class="form-control" style="width:320px;" placeholder="请输入最小线宽线距" value="<?php echo ($data["minilinewidth"]); ?>" type="text"></td>
                </tr>
                <tr>
                  <td>BGA:</td>
                  <td><input name="bga" class="form-control" style="width:320px;" placeholder="请输入BGA" value="<?php echo ($data["bga"]); ?>" type="text"></td>
                </tr>
                <tr>
                  <td>最小孔:</td>
                  <td><input name="minihole" class="form-control" style="width:320px;" placeholder="请输入最小孔" value="<?php echo ($data["minihole"]); ?>" type="text"></td>
                </tr>
                <tr>
                  <td>铜厚:</td>
                  <td><input name="copperthickness" class="form-control" style="width:320px;" placeholder="请输入铜厚" value="<?php echo ($data["copperthickness"]); ?>" type="text"></td>
                </tr>
                <tr>
                  <td>表面处理:</td>
                  <td><input name="surfacetreatment" class="form-control" style="width:320px;" placeholder="请输入表面处理" value="<?php echo ($data["surfacetreatment"]); ?>" type="text"></td>
                </tr>
                <tr>
                  <td>尺寸:</td>
                  <td><input name="size" class="form-control" style="width:320px;" placeholder="请输入尺寸" value="<?php echo ($data["size"]); ?>" type="text"></td>
                </tr>
                <tr>
                  <td>当前图片:</td>
                  <td><a href="#" onclick="callmyModal_1('/ucreate-pcb-co<?php echo ($data["pic_adr"]); ?>');"><img src="/ucreate-pcb-co<?php echo ($data["pic_adr"]); ?>" class="img-thumbnail" style="height:200px;width:200px;float:left;"/></a></td>
                </tr>
                <tr>
                  <td>上传新的图片:</td>
                  <td><input name="image" type="file" class="form-control"></td>
                </tr>
                <tr>
                    <td>上传预览:</td>
                    <td id="imput"><p id="altput" >上传后才可预览，请选择文件。</p></td>
                </tr>
              </tbody>
            </table>
            <input id="id" name="id" value="<?php echo ($data["id"]); ?>" type="hidden" >
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
                <p>修改软硬结合板产品</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>