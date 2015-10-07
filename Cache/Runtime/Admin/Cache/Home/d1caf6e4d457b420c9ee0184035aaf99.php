<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>添加新闻</title>
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

    <!-- kindeditor -->
    <link rel="stylesheet" href="/ucreate-pcb-co/Public/Vendor/Kindeditor/themes/default/default.css" />
    <link rel="stylesheet" href="/ucreate-pcb-co/Public/Vendor/Kindeditor/plugins/code/prettify.css" />
    <script charset="utf-8" src="/ucreate-pcb-co/Public/Vendor/Kindeditor/kindeditor.js"></script>
    <script charset="utf-8" src="/ucreate-pcb-co/Public/Vendor/Kindeditor/lang/zh_CN.js"></script>
    <script charset="utf-8" src="/ucreate-pcb-co/Public/Vendor/Kindeditor/plugins/code/prettify.js"></script>
    <script>
        KindEditor.ready(function(K) {
            var editor1 = K.create('textarea[name="content"]', {
                cssPath : '/ucreate-pcb-co/Public/Vendor/Kindeditor/plugins/code/prettify.css',
                uploadJson : '/ucreate-pcb-co/Public/Vendor/Kindeditor/upload_json.php',
                fileManagerJson : '/ucreate-pcb-co/Public/Vendor/Kindeditor/file_manager_json.php',
                allowFileManager : true,
                afterCreate : function() {
                    var self = this;
                    K.ctrl(document, 13, function() {
                        self.sync();
                        K('form[name=example]')[0].submit();
                    });
                    K.ctrl(self.edit.doc, 13, function() {
                        self.sync();
                        K('form[name=example]')[0].submit();
                    });
                },
                themeType : 'simple'
            });
            prettyPrint();
        });
    </script>
    <!-- end -->

    <script type="text/javascript">
        $(document).ready(function() 
        {  

        });
    </script>
    
</head>
<div id="page-wrapper" >
    <div class="row">
        <div class="col-md-12">        
            <h1 class="page-header">
                添加新闻
            </h1>
        </div>
    </div>
    <!-- 导航 -->
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb" style="margin-bottom:0px">
              <li><a href="<?php echo U('News/index');?>">新闻中心</a></li>
              <li class="active">添加新闻</li>
            </ol>
        </div>
    </div>
    <!-- 说明 -->
    <div class="row">
        <div class="col-md-12">
            <div class="bs-callout bs-callout-advice" id="callout-alerts-dismiss-plugin">
                <h4>建议</h4>
                <p>标题最好不要超过15个字；<br>居中文字时请使用工具栏上“居中对齐”，图片最好都居中；<br>排版时由于宽度和实际文章显示界面不同，建议一边排版一边刷新前台文章界面。</p>
            </div>
        </div>
    </div>
    <form class="form-signin" role="form" action="<?php echo U('News/add_handle');?>" method='post' id="form">
    <!-- 主体 -->
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td><div style="margin-top:6px;width:80px;">标题:</div></td>
                  <td><input name="title" type="text" class="form-control" style="width:320px;" placeholder="请输入文章标题"></td>
                </tr>
                <tr>
                  <td>内容:</td>
                  <td>
                    <textarea name="content" style="width:100%;height:500px;visibility:hidden;"></textarea>
                  </td>
                </tr>
              </tbody>
            </table>
            <div style="float:right;"><button type="submit" class="btn btn-primary">确认发布</button></div>
        </div>
    </div>
    </form>
</div>
</body>
</html>