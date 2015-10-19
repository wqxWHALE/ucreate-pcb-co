<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>修改企业精神(英文)</title>
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
<body>
<div id="page-wrapper" >
    <div class="row">
        <div class="col-md-12">        
            <h1 class="page-header">
                修改企业精神(英文)
            </h1>
        </div>
    </div>
    <!-- 导航 -->
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
              <li><a href="<?php echo U('Culture/spirit_en');?>">企业精神(英文)</a></li>
              <li class="active">修改企业精神</li>
            </ol>
        </div>
    </div>
    <form class="form-signin" enctype="multipart/form-data" role="form" action="<?php echo U('Culture/alter_spirit_text_en_handle');?>" method='post' id="form">
    <!-- 主体 -->
    <div class="row">
        <div class="col-md-12">
            <textarea name="content" style="width:100%;height:300px;visibility:hidden;"><?php echo ($data["content"]); ?></textarea>
            <br/>
            <input name="id" value="<?php echo ($data["id"]); ?>" type="hidden">
            <div style="float:right;"><button type="submit" class="btn btn-primary">提 交</button></div>
        </div>
    </div>
    </form>
    <!-- 说明 -->
    <div class="row">
        <div class="col-md-12">
            <div class="bs-callout bs-callout-info" id="callout-alerts-dismiss-plugin">
                <h4>说明</h4>
                <p>修改企业精神(英文)。</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>