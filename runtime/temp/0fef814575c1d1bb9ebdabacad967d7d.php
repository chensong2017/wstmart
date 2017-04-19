<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:51:"D:\wamp32\www\wstmart/wstmart/admin\view\login.html";i:1490670122;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="Keywords" content=""/>
<meta name="Description" content=""/> 
<link href="__ADMIN__/css/login.css?v=<?php echo $v; ?>" rel="stylesheet" type="text/css" />
<title>后台管理中心登录 - <?php echo WSTConf('CONF.mallName'); ?></title>
</head>
<body>
<div class="wst-lo-center">
	<div class="wst-lo">
		<div class="wst-lo-left"><img src='__ADMIN__/img/left.png' height='300'/></div>
	</div>
	<div class="wst-lo">
	<form class="wst-lo-form">
	<table>
	  <tr>
	    <td><div class="frame">
	    	<span class="loginname"></span>
	    	<input type='text' id='loginName' class='ipt text' value='admin'>
	    </div></td>
	  </tr>
	  <tr>
	    <td><div class="frame">
		    <span class="loginpwd"></span>
		    <input type='password' id='loginPwd' class='ipt text'>
	    </div></td>
	  </tr>
	  <tr>
	    <td><div class="frame" style='padding-right:0px;'>
		    <span class="verifycode"></span>
		    <input type='text' id='verifyCode' class='ipt text2'><img id='verifyImg' src="<?php echo url('admin/index/getVerify'); ?>" onclick='javascript:getVerify(this)'>
	    </div></td>
	  </tr>
	  <tr>
	    <td colspan='2' align='center'>
	    <div class="but">
	      <input type='button' value='登录' onclick='javascript:login()'>
	      <input type='reset' value='清除'>
	    </div>
	    </td>
	  </tr>
	</table>
	</form>
	</div>
</div>
<script type='text/javascript' src='__STATIC__/js/jquery.min.js'></script>
<script>
window.conf = {"ROOT"   : "__ROOT__","APP"    : "__APP__","STATIC" : "__STATIC__", "SUFFIX" : "<?php echo config('url_html_suffix'); ?>"}
</script>
<script type='text/javascript' src='__STATIC__/js/common.js'></script>
<script type='text/javascript' src='__STATIC__/plugins/layer/layer.js'></script>
<script type='text/javascript' src='__ADMIN__/js/common.js'></script>
<script src="__ADMIN__/js/login.js?v=<?php echo $v; ?>" type="text/javascript"></script>
</body>
</html>