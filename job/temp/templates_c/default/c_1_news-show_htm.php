<?php require_once('/Users/zhaoxiaolong/php_work/ezjob/job/include/template_lite/plugins/function.qishi_news_list.php'); $this->register_function("qishi_news_list", "tpl_function_qishi_news_list",false);  require_once('/Users/zhaoxiaolong/php_work/ezjob/job/include/template_lite/plugins/modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('/Users/zhaoxiaolong/php_work/ezjob/job/include/template_lite/plugins/modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  require_once('/Users/zhaoxiaolong/php_work/ezjob/job/include/template_lite/plugins/modifier.cat.php'); $this->register_modifier("cat", "tpl_modifier_cat",false);  require_once('/Users/zhaoxiaolong/php_work/ezjob/job/include/template_lite/plugins/function.qishi_news_category.php'); $this->register_function("qishi_news_category", "tpl_function_qishi_news_category",false);  require_once('/Users/zhaoxiaolong/php_work/ezjob/job/include/template_lite/plugins/function.qishi_news_show.php'); $this->register_function("qishi_news_show", "tpl_function_qishi_news_show",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-03 16:56 CST */  echo tpl_function_qishi_news_show(array('set' => "�б���:show,��ѶID:GET[id]"), $this);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_vars['show']['title']; ?>
 - <?php echo $this->_vars['QISHI']['site_name']; ?>
</title>
<meta name="description" content="<?php echo $this->_vars['show']['description']; ?>
">
<meta name="keywords" content="<?php echo $this->_vars['show']['keywords']; ?>
">
<meta name="author" content="��ʿCMS" />
<meta name="copyright" content="74cms.com" />
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
favicon.ico" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/news.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type='text/javascript' ></script>
<script type="text/javascript">
$(document).ready(function()
{
		var id="<?php echo $_GET['id']; ?>
";
		var tsTimeStamp= new Date().getTime();
		$.get("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_click.php", { "id": id,"time":tsTimeStamp,"act":"news_click"},
			function (data,textStatus)
			 {			
				$("#click").html(data);
			 }
		);
});
</script>
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="page_location link_bk">
<?php echo tpl_function_qishi_news_category(array('set' => $this->_run_modifier("�б���:category,���Ƴ���:10,��ѶС��:", 'cat', 'plugin', 1, $this->_vars['show']['type_id'])), $this);?>
��ǰλ�ã�<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
">��ҳ</a>&nbsp;>>&nbsp;<a href="<?php echo $this->_run_modifier("QS_news", 'qishi_url', 'plugin', 1); ?>
">������Ѷ</a>&nbsp;>>&nbsp;
<a href="<?php echo $this->_vars['category']['url']; ?>
"><?php echo $this->_vars['category']['title_']; ?>
</a>&nbsp;>>&nbsp;����
</div>
<div class="news-show">
  <div class="left">
    <div class="show">
		<h1><?php echo $this->_vars['show']['title']; ?>
</h1>	
		<div class="date link_bk">
		�����<span id="click"></span> ��&nbsp;&nbsp;&nbsp;&nbsp; ������ڣ�<?php echo $this->_run_modifier($this->_vars['show']['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
 &nbsp;&nbsp;&nbsp;&nbsp; [ <a href="javascript:window.print();">��ӡ</a> ]&nbsp;&nbsp;[ <a href="#" onclick="window.external.addFavorite(parent.location.href,document.title);">�ղ�</a> ]&nbsp;&nbsp;[ <a href="javascript:self.close()">�ر�</a> ] 
		</div>
		<div class="txt"><?php echo $this->_vars['show']['content']; ?>
</div>
    </div>
  </div>
  <div class="right">
  	<div class="listbox">
			<div class="tit"><strong>��Ѷ����</strong></div>
				  <div class="category">
				<?php echo tpl_function_qishi_news_category(array('set' => "�б���:categorylist,���Ƴ���:7,��Ѷ����:1"), $this);?>
				<?php if (count((array)$this->_vars['categorylist'])): foreach ((array)$this->_vars['categorylist'] as $this->_vars['list']): ?>
				<a href="<?php echo $this->_vars['list']['url']; ?>
"><?php echo $this->_vars['list']['categoryname']; ?>
</a>
				<?php endforeach; endif; ?>
				<div class="clear"></div>
				</div>
		</div>

<div class="sobox">
		<form action="<?php echo $this->_run_modifier("QS_newssearch", 'qishi_url', 'plugin', 1); ?>
" method="get">
		  <div class="sleft"><input name="key" type="text" maxlength="10" /></div>
		  <div class="sright"><input type="submit" value="����" /></div>
		  <div class="clear"></div>
		  </form>
		</div>

		<div class="listbox">
			<div class="tit"><strong>�Ƽ���Ѷ</strong></div>		
			<div class="txt">
			<ul class="link_bk">
			<?php echo tpl_function_qishi_news_list(array('set' => "�б���:news,��ʾ��Ŀ:10,����:4,���ⳤ��:16,����:id>desc"), $this);?>
			<?php if (count((array)$this->_vars['news'])): foreach ((array)$this->_vars['news'] as $this->_vars['list']): ?>
			<li><a href="<?php echo $this->_vars['list']['url']; ?>
" target="_blank"><?php echo $this->_vars['list']['title']; ?>
</a></li>
			<?php endforeach; endif; ?>
			</ul>
			</div>
		</div>
		<div class="listbox">
			<div class="tit"><strong>������Ѷ</strong></div>		
			<div class="txt">
			<ul class="link_bk">
			<?php echo tpl_function_qishi_news_list(array('set' => "�б���:news,��ʾ��Ŀ:10,���ⳤ��:16,����:id>desc"), $this);?>
			<?php if (count((array)$this->_vars['news'])): foreach ((array)$this->_vars['news'] as $this->_vars['list']): ?>
			<li><a href="<?php echo $this->_vars['list']['url']; ?>
" target="_blank"><?php echo $this->_vars['list']['title']; ?>
</a></li>
			<?php endforeach; endif; ?>
			</ul>
			</div>
		</div>
  </div>
  <div class="clear"></div>
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>