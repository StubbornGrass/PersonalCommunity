<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"E:\WebRoot\PersonalCommunity\public/../application/admin\view\admin\login.html";i:1492698483;}*/ ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $desc; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <meta name="apple-mobile-web-app-title" content="刘强后台管理"/>
  <link rel="stylesheet" href="/static/admin/assets/css/amazeui.min.css" />
  <link rel="stylesheet" href="/static/admin/assets/css/admin.css">
  <link rel="stylesheet" href="/static/admin/assets/css/app.css">
</head>

<body data-type="login">

  <div class="am-g myapp-login">
	<div class="myapp-login-logo-block  tpl-login-max">
		<div class="myapp-login-logo-text">
			<div class="myapp-login-logo-text">
				LiuQiangPersonalCommunity<span> Login</span> <i class="am-icon-skyatlas"></i>
			</div>
		</div>
		<div class="am-u-sm-10 login-am-center">
			<form class="am-form" action="<?php echo url('admin/Index/verify'); ?>" method="post" >
				<fieldset>
					<div class="am-form-group">
						<input type="text" name="username" class="" id="doc-ipt-email-1" placeholder="请输入登录用户">
					</div>
					<div class="am-form-group">
						<input type="password" name="password" class="" id="doc-ipt-pwd-1" placeholder="请输入密码">
					</div>
					<p><button type="submit" class="am-btn am-btn-default">登录</button></p>
				</fieldset>
			</form>
		</div>
	</div>
</div>