<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:92:"E:\WebRoot\PersonalCommunity\public/../application/admin\view\admin\webSite\uploadLayer.html";i:1492790547;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!-- 低版本浏览器兼容显示 -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>添加图片</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/static/admin/css/uploads.css">
    <script src="/static/common/jquery-3.1.1.js"></script>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="/static/common/layer/layer.js"></script>
    <script src="/static/common/layui/layui.js"></script>
    <link rel="stylesheet" href="/static/common/layui/css/layui.css">
    <script src="/static/common/common.js"></script>
	<script>
		var uploadPhotosController = "<?php echo url('PhotosController/uploadPhotosController'); ?>";
	</script>
</head>
<body>
 <div class="">
 <div class="col-md-12"  style="background: #f5f4f5;height: 60px;" >
<input id="file" type="file" multiple="multiple" style="display:none">  
 <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"  aria-expanded="true">
    <img id="0" src="/static/index/album/cover/2017-04-18143949.jpg" alt="">&nbsp;&nbsp;请选择相册
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <?php if(is_array($album_data) || $album_data instanceof \think\Collection || $album_data instanceof \think\Paginator): $i = 0; $__LIST__ = $album_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <li><img id="<?php echo $vo['a_id']; ?>" src="<?php echo $vo['a_cover']; ?>">&nbsp;&nbsp;<?php echo $vo['a_title']; ?>
    </li>
    <li role="separator" class="divider"></li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </ul>
  <button type="button" id="upload"  class="btn btn-info  glyphicon glyphicon-upload">添加图片</button>
  <button type="button"  id="submit" class="btn btn-success  glyphicon glyphicon-cloud-upload">开始上传</button>
	<div class="layui-progress layui-progress-big" lay-filter="percent" lay-showPercent="true">
	<div class="layui-progress-bar layui-bg-blue" lay-percent="0%"></div>
	</div>
    </div>
    <div  style="margin-left: 10px;display:inline;" >
        <ul id="photos" class="nav nav-pills" >
        </ul>
    </div>
  </div>
 </div>
 <script src="/static/admin/js/uploadPhotos.js"></script>
</body>
</html>
