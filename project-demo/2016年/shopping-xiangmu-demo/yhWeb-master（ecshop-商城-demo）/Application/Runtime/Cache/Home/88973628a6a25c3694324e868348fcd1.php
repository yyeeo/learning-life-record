<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="text/javascript" src="/yhWeb/Public/Home/Js/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="/yhWeb/Public/Home/Css/style.css"/>
    <!--[if IE 6]>
    <script src="/yhWeb/Public/Home/Js/iepng.js" type="text/javascript"></script>
    <script type="text/javascript">
        EvPNG.fix('div, ul, img, li, input, a');
    </script>
    <![endif]-->
    <!--
        <script type="text/javascript" src="/yhWeb/Public/Home/Js/jquery.bxslider_e88acd1b.js"></script>
        <script type="text/javascript" src="/yhWeb/Public/Home/Js/menu.js"></script>
        <script type="text/javascript" src="/yhWeb/Public/Home/Js/select.js"></script>
        <script type="text/javascript" src="/yhWeb/Public/Home/Js/lrscroll.js"></script>
        <script type="text/javascript" src="/yhWeb/Public/Home/Js/iban.js"></script>
        <script type="text/javascript" src="/yhWeb/Public/Home/Js/fban.js"></script>
        <script type="text/javascript" src="/yhWeb/Public/Home/Js/f_ban.js"></script>
        <script type="text/javascript" src="/yhWeb/Public/Home/Js/mban.js"></script>
        <script type="text/javascript" src="/yhWeb/Public/Home/Js/bban.js"></script>
        <script type="text/javascript" src="/yhWeb/Public/Home/Js/hban.js"></script>
        <script type="text/javascript" src="/yhWeb/Public/Home/Js/tban.js"></script>
        <script type="text/javascript" src="/yhWeb/Public/Home/Js/lrscroll_1.js"></script>-->
    <script type="text/javascript" src="/yhWeb/Public/Home/Js/jquery.validate.js"></script>
    <!--<script type="text/javascript" src="/yhWeb/Public/Home/Js/login.js"></script>-->
    <style>
        .error {
            color: red;
        }
    </style>
    <title>尤洪</title>
</head>
<body>
<!--Begin Header Begin-->
<div class="soubg">
    <div class="sou">
        <span class="fr">
        	<span class="fl">你好，请<a href="/yhWeb/Home/User/Login">登录</a>&nbsp; <a class="m" href="/yhWeb/Home/User/Regist" style="color:#ff4e00;">免费注册</a>&nbsp; </span>
            <span class="fl">|&nbsp;关注我们：</span>
            <span class="s_sh"><a href="#" class="sh1">新浪</a><a href="#" class="sh2">微信</a></span>
            <span class="fr">|&nbsp;<a href="#">手机版&nbsp;<img src="/yhWeb/Public/Home/Images/s_tel.png" align="absmiddle"/></a></span>
        </span>
    </div>
</div>
<!--End Header End-->
<!--Begin Login Begin-->
<div class="log_bg">
    <div class="top">
        <div class="logo"><a href="../Index.html"><img src="/yhWeb/Public/Home/Images/logo.png"/></a></div>
    </div>
    <div class="login">
        <div class="log_img"><img src="/yhWeb/Public/Home/Images/l_img.png" width="611" height="425"/></div>
        <div class="log_c">
            <form id="form1" method="post">
                <table border="0" style="width:370px; font-size:14px; margin-top:30px;" cellspacing="0" cellpadding="0">
                    <tr height="50" valign="top">
                        <td width="55">&nbsp;</td>
                        <td>
                            <span class="fl" style="font-size:24px;">登录</span>
                            <span class="fr">还没有商城账号，<a href="Regist.html" style="color:#ff4e00;">立即注册</a></span>
                        </td>
                    </tr>
                    <tr height="70">
                        <td>用户名</td>
                        <td>
                            <input type="text" value="" class="l_user" name="userName" id="uName"/>
                        </td>
                    </tr>
                    <tr height="70">
                        <td>密&nbsp; &nbsp;码</td>
                        <td><input type="password" value="" class="l_pwd" name="passWord" id="uPwd"/></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td style="font-size:14px; padding:2px 10px 6px 0;">
                            <span class="fr"><a href="#" style="color:#ff4e00;">忘记密码</a></span>
                        </td>
                    </tr>
                    <tr height="60">
                        <td>&nbsp;</td>
                        <td><input type="submit" value="登录" class="log_btn"/></td>
                    </tr>
                </table>
            </form>
        </div>

    </div>
</div>
<!--End Login End-->
<!--Begin Footer Begin-->
<div class="btmbg">
    <div class="btm">
        备案/许可证编号：豫ICP备12009302号-1-www.dingguagua.com Copyright © 2015-2018 尤洪商城网 All Rights Reserved. 复制必究 , Technical Support: Dgg Group <br/>
        <img src="/yhWeb/Public/Home/Images/b_1.gif" width="98" height="33"/><img src="/yhWeb/Public/Home/Images/b_2.gif" width="98" height="33"/><img src="/yhWeb/Public/Home/Images/b_3.gif" width="98" height="33"/><img src="/yhWeb/Public/Home/Images/b_4.gif" width="98" height="33"/><img src="/yhWeb/Public/Home/Images/b_5.gif" width="98" height="33"/><img src="/yhWeb/Public/Home/Images/b_6.gif" width="98" height="33"/>
    </div>
</div>
<!--End Footer End -->

</body>

<!--[if IE 6]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
</html>
<script>
    $(function () {
        $('.log_btn').click(function () {
            if ($('#form1').valid()) {
                /*  $('#form1').submit();*/
                var userName = $('#uName').val();
                var passWord = $('#uPwd').val();

                $.post('/yhWeb/Home/User/login_action', {userName: userName, passWord: passWord}, function (data) {
                    if (data.status == 1) {
                        window.location.href = '../Index/Index';
                    } else if (data.status == 2) {
                        alert('用户名或密码错误');
                    }
                    else if(data.status == 3)
                    {
                        alert('该用户可能已被禁用，请联系客服人员');
                    }
                }, 'json')
            }

        })
        $(window).keydown(function(){
            if (event.keyCode==13)
            {
                $('.log_btn').click()
            }
        })
        $('#form1').validate({
            rules: {
                userName: {
                    required: true,
                },
                passWord: {
                    required: true,
                },
            },
            messages: {
                userName: {
                    required: '*用户名不能为空',
                },
                passWord: {
                    required: '*密码不能为空',
                }
            }
        })
    })
</script>