<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-07-11 11:15 CST */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="X-UA-Compatible" content="IE=7">
<title>Powered by 74CMS</title>
<link href="css/common.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$("li").first().addClass("hover");
$("li>a").click(function(){
	$("li").removeClass("hover");
	$(this).parent().addClass("hover");
	$(this).blur();
	})
})
</script>
</head>
<body>
<div  class="admin_left_box">
<ul>
<li >
<a href="admin_clearcache.php"  target="mainFrame" >���»���</a>
</li>
<!--<li >
<a href="admin_html.php"  target="mainFrame" >����html </a>
</li> -->
<li >
<a href="admin_database.php"  target="mainFrame" >���ݿ�</a>
</li>
<li >
<a href="admin_uc_setting.php"  target="mainFrame"  >����UCenter </a>
</li> 
<li  >
<a href="admin_locoyspider.php"  target="mainFrame"  >��ͷ�ɼ�</a>
</li>
<li  >
<a href="admin_pay.php"  target="mainFrame"  >֧����ʽ</a>
</li>
<li  >
<a href="admin_set.php?act=site_set_map"  target="mainFrame"  >���ӵ�ͼ</a>
</li>
</ul>
</div>
</body>
</html>