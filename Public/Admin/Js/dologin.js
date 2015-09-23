/**
 * Created by Joseph on 2014/5/16.
 */
$(document).ready(function(){
    addLoginClickable();
});

function addLoginClickable(){
    $('button#loginButton').click(function(index){
        if($('input#loginname').val()==""){
            $('p#error').text("请输入用户名！");
        }
        if($('input#password').val()==""){
            $('p#error').text("请输入密码！");
        }
        if($('input#loginname').val()=="" && $('input#password').val()==""){
            $('p#error').text("请输入用户名和密码！");
        }
        if($('input#loginname').val()!="" && $('input#password').val()!=""){
        　　$.ajax({
            　　type:'post',//可选get
            　　url: loginURL,//这里是接收数据的PHP程序
            　　data:'loginname='+$('input#loginname').val()+'&password='+$('input#password').val(),//传给PHP的数据，多个参数用&连接
            　　dataType:'json',//服务器返回的数据类型 可选XML ,Json jsonp script html text等

            　　success:function(data){
            　　//这里是ajax提交成功后，PHP程序返回的数据处理函数。msg是返回的数据，数据类型在dataType参数里定义!
                    if(data.status==1){
                        $('p#error').text(data.content);
                    }
                    else if(data.status==2){
                        $('p#error').text(data.content);
                    }
                    else if(data.status==3){
                        $('p#error').text(data.content);
                        $('form#form').submit();
                    }
            　　},
            　　error:function(){
            　　//ajax提交失败的处理函数!
                   $('p#error').text("提交失败");     
            　　}
            });
        }

    });
}