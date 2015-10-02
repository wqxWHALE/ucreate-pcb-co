<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>运维信息</title>
    <link rel="icon" href="/ucreate-pcb-co/Public/Uploads/img/logo.png">
    <!-- Bootstrap core CSS -->
    <link href="/ucreate-pcb-co/Public/Admin/Css/bootstrap.min.css" rel="stylesheet">
    <script src="/ucreate-pcb-co/Public/Admin/Js/jquery.min.js"></script>
    <script src="/ucreate-pcb-co/Public/Admin/Js/bootstrap.min.js"></script>
    <script src="/ucreate-pcb-co/Public/Admin/Js/docs.min.js"></script>
    <script src="/ucreate-pcb-co/Public/Admin/Js/ie10-viewport-bug-workaround.js"></script>

    <!-- Font-awesome core CSS -->
    <link href="/ucreate-pcb-co/Public/Admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Chart core JS -->
    <script src="/ucreate-pcb-co/Public/Admin/Js/Chart.js"></script>

    <link href="/ucreate-pcb-co/Public/Admin/Css/Operation.css" rel="stylesheet">

    <script type="text/javascript">
        $(document).ready(function() 
        {  
            window.top.window.iFrameHeight();
            window.top.window.callApplicationCount();
        });
    </script>
    
        <style>
            canvas{
                width:100%;
            }
        </style>
    
</head>
<body>

<div id="page-wrapper">
    <div class="row">
        <div class="col-md-12">        
            <h1 class="page-header">
                运维信息
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="icon-bar-chart"></i>
                    日访问量统计
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12" style="height:200px;overflow:hidden;">
                            <canvas id="line" width="450" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="icon-time"></i>
                    月访问量分布
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8" style="height:200px;overflow:hidden;">
                            <canvas id="pie" height="200"></canvas>
                        </div>
                        <div class="col-md-2">
                            <div class="row" style="margin-top:14px;">
                                <div style="background-color:#F38630;width:15px;height:15px;float:left;"></div>
                                <div style="float:left;font-size:12px;margin-left:10px; ">一月</div>
                            </div>
                            <div class="row" style="margin-top:14px;">
                                <div style="background-color:#F472A0;width:15px;height:15px;float:left;"></div>
                                <div style="float:left;font-size:12px;margin-left:10px; ">二月</div>
                            </div>
                            <div class="row" style="margin-top:14px;">
                                <div style="background-color:#E51400;width:15px;height:15px;float:left;"></div>
                                <div style="float:left;font-size:12px;margin-left:10px; ">三月</div>
                            </div>
                            <div class="row" style="margin-top:14px;">
                                <div style="background-color:#69D2E7;width:15px;height:15px;float:left;"></div>
                                <div style="float:left;font-size:12px;margin-left:10px; ">四月</div>
                            </div>
                            <div class="row" style="margin-top:14px;">
                                <div style="background-color:#1BA1E2;width:15px;height:15px;float:left;"></div>
                                <div style="float:left;font-size:12px;margin-left:10px; ">五月</div>
                            </div>
                            <div class="row" style="margin-top:14px;">
                                <div style="background-color:#647687;width:15px;height:15px;float:left;"></div>
                                <div style="float:left;font-size:12px;margin-left:10px; ">六月</div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row" style="margin-top:14px;">
                                <div style="background-color:#E0E4CC;width:15px;height:15px;float:left;"></div>
                                <div style="float:left;font-size:12px;margin-left:10px; ">七月</div>
                            </div>
                            <div class="row" style="margin-top:14px;">
                                <div style="background-color:#00ABA9;width:15px;height:15px;float:left;"></div>
                                <div style="float:left;font-size:12px;margin-left:10px; ">八月</div>
                            </div>
                            <div class="row" style="margin-top:14px;">
                                <div style="background-color:#008A00;width:15px;height:15px;float:left;"></div>
                                <div style="float:left;font-size:12px;margin-left:10px; ">九月</div>
                            </div>
                            <div class="row" style="margin-top:14px;">
                                <div style="background-color:#6D8764;width:15px;height:15px;float:left;"></div>
                                <div style="float:left;font-size:12px;margin-left:10px; ">十月</div>
                            </div>
                            <div class="row" style="margin-top:14px;">
                                <div style="background-color:#E3C800;width:15px;height:15px;float:left;"></div>
                                <div style="float:left;font-size:12px;margin-left:10px; ">十一月</div>
                            </div>
                            <div class="row" style="margin-top:14px;">
                                <div style="background-color:#AA00FF;width:15px;height:15px;float:left;"></div>
                                <div style="float:left;font-size:12px;margin-left:10px; ">十二月</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class=" icon-cog"></i>
                    服务器信息
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row" style="margin:11px;">
                                系统类型及版本号：<?php echo ($system_type_version); ?>
                            </div>
                            <div class="row" style="margin:11px;">
                                PHP运行方式：<?php echo ($run_type); ?>
                            </div>
                            <div class="row" style="margin:11px;">
                                PHP版本：<?php echo ($php_version); ?>
                            </div>
                            <div class="row" style="margin:11px;">
                                PHP安装路径：<?php echo ($php_path); ?>
                            </div>
                            <div class="row" style="margin:11px;">
                                当前服务器ip：<?php echo ($current_server_ip); ?>
                            </div>
                            <div class="row" style="margin:11px;">
                                当前服务器端口号：<?php echo ($current_server_port); ?>
                            </div>
                            <div class="row" style="margin:11px;">
                                域名：<?php echo ($domain); ?>
                            </div>
                            <div class="row" style="margin:8px;">
                                所有解析引擎：<?php echo ($server_software); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class=" icon-hdd"></i>
                    存储状况
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row" style="margin-top:5px;">
                                <div class="col-md-8">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    FTP存储空间
                                </div>
                            </div>
                            <div class="row" style="margin-top:5px;">
                                <div class="col-md-8">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    数据库存储空间
                                </div>
                            </div>
                            <div class="row" style="margin-top:5px;">
                                <div class="col-md-8">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    CPU使用率
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>

        var lineChartData = {
            labels : ['<?php echo ($visitorDay["date"]["0"]); ?>','<?php echo ($visitorDay["date"]["1"]); ?>','<?php echo ($visitorDay["date"]["2"]); ?>','<?php echo ($visitorDay["date"]["3"]); ?>','<?php echo ($visitorDay["date"]["4"]); ?>','<?php echo ($visitorDay["date"]["5"]); ?>','<?php echo ($visitorDay["date"]["6"]); ?>'],
            datasets : [
                {
                    fillColor : "rgba(220,220,220,0.5)",
                    strokeColor : "rgba(220,220,220,1)",
                    pointColor : "rgba(220,220,220,1)",
                    pointStrokeColor : "#fff",
                    data : [<?php echo ($visitorDay["ave"]); ?>,<?php echo ($visitorDay["ave"]); ?>,<?php echo ($visitorDay["ave"]); ?>,<?php echo ($visitorDay["ave"]); ?>,<?php echo ($visitorDay["ave"]); ?>,<?php echo ($visitorDay["ave"]); ?>,<?php echo ($visitorDay["ave"]); ?>]
                },
                {
                    fillColor : "rgba(151,187,205,0.5)",
                    strokeColor : "rgba(151,187,205,1)",
                    pointColor : "rgba(151,187,205,1)",
                    pointStrokeColor : "#fff",
                    data : [<?php echo ($visitorDay["count"]["0"]); ?>,<?php echo ($visitorDay["count"]["1"]); ?>,<?php echo ($visitorDay["count"]["2"]); ?>,<?php echo ($visitorDay["count"]["3"]); ?>,<?php echo ($visitorDay["count"]["4"]); ?>,<?php echo ($visitorDay["count"]["5"]); ?>,<?php echo ($visitorDay["count"]["6"]); ?>]
                }
            ]
            
        }

    var myLine = new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);

            var pieData = [
                {
                    value: <?php echo ($visitorMonth['01']); ?>,
                    color:"#F38630"
                },
                {
                    value : <?php echo ($visitorMonth['02']); ?>,
                    color : "#F472A0"
                },
                {
                    value : <?php echo ($visitorMonth['03']); ?>,
                    color : "#E51400"
                },
                {
                    value : <?php echo ($visitorMonth['04']); ?>,
                    color : "#69D2E7"
                },
                {
                    value : <?php echo ($visitorMonth['05']); ?>,
                    color : "#1BA1E2"
                },
                {
                    value : <?php echo ($visitorMonth['06']); ?>,
                    color : "#647687"
                },
                {
                    value : <?php echo ($visitorMonth['07']); ?>,
                    color : "#E0E4CC"
                },
                {
                    value : <?php echo ($visitorMonth['08']); ?>,
                    color : "#00ABA9"
                },
                {
                    value : <?php echo ($visitorMonth['09']); ?>,
                    color : "#008A00"
                },
                {
                    value : <?php echo ($visitorMonth['10']); ?>,
                    color : "#6D8764"
                },
                {
                    value : <?php echo ($visitorMonth['11']); ?>,
                    color : "#E3C800"
                },
                {
                    value : <?php echo ($visitorMonth['12']); ?>,
                    color : "#AA00FF"
                }
            ];

    var myPie = new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
    
    </script>
</body>
</html>