<?php require_once('/Users/zhaoxiaolong/php_work/ezjob/job/include/template_lite/plugins/modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  require_once('/Users/zhaoxiaolong/php_work/ezjob/job/include/template_lite/plugins/function.qishi_jobs_list.php'); $this->register_function("qishi_jobs_list", "tpl_function_qishi_jobs_list",false);  require_once('/Users/zhaoxiaolong/php_work/ezjob/job/include/template_lite/plugins/modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('/Users/zhaoxiaolong/php_work/ezjob/job/include/template_lite/plugins/modifier.cat.php'); $this->register_modifier("cat", "tpl_modifier_cat",false);  require_once('/Users/zhaoxiaolong/php_work/ezjob/job/include/template_lite/plugins/modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  require_once('/Users/zhaoxiaolong/php_work/ezjob/job/include/template_lite/plugins/function.qishi_jobs_show.php'); $this->register_function("qishi_jobs_show", "tpl_function_qishi_jobs_show",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-03 17:01 CST */  echo tpl_function_qishi_jobs_show(array('set' => "�б���:show,ְλID:GET[id]"), $this);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_vars['show']['jobs_name']; ?>
 - <?php echo $this->_vars['show']['companyname']; ?>
 - <?php echo $this->_vars['QISHI']['site_name']; ?>
</title>
<meta name="description" content="<?php echo $this->_vars['show']['companyname']; ?>
��Ƹ<?php echo $this->_vars['show']['jobs_name']; ?>
">
<meta name="keywords" content="<?php echo $this->_vars['show']['jobs_name']; ?>
��<?php echo $this->_vars['show']['companyname']; ?>
">
<meta name="author" content="��ʿCMS" />
<meta name="copyright" content="74cms.com" />
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
favicon.ico" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['user_tpl']; ?>
css/css.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type='text/javascript' ></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.dialog.js" type='text/javascript' ></script>
<script type="text/javascript">
$(document).ready(function()
{
		var id="<?php echo $this->_vars['show']['id']; ?>
";
		var company_id="<?php echo $this->_vars['show']['company_id']; ?>
";
		var tsTimeStamp= new Date().getTime();
		$.get("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_click.php", { "id": id,"time":tsTimeStamp,"act":"jobs_click"},
			function (data,textStatus)
			 {			
				$(".click").html(data);
			 }
		);
		$.get("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_contact.php", { "id": id,"time":tsTimeStamp,"act":"jobs_contact"},
			function (data,textStatus)
			 {			
				$("#jobs_contact").html(data);
			 }
		);
		//����ְλ
		$(".app_jobs").click(function(){
		dialog("����ְλ","url:get?<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_apply_jobs.php?id="+id+"&act=app","500px","auto","");
		});	
		//��������ղ�
		$(".add_favorites").click(function(){
		dialog("�����ղ�","url:get?<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_favorites_job.php?id="+id+"&act=add","500px","auto","");
		});
		
		$("#newbuddy").click(function(){
		dialog("��Ϊ����","url:get?<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_buddy.php?tuid=<?php echo $this->_vars['show']['uid']; ?>
","350px","auto","");
		});
		$("#addpms").click(function(){
		var url="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_pms.php?tuid=<?php echo $this->_vars['show']['uid']; ?>
";
		dialog("���Ͷ���Ϣ","url:get?"+url,"400px","auto","");
		});
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
��ǰλ�ã�<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
">��ҳ</a>&nbsp;>>&nbsp;<a href="<?php echo $this->_run_modifier("QS_jobs", 'qishi_url', 'plugin', 1); ?>
">��Ƹ��Ϣ</a>&nbsp;>>&nbsp;<a href="<?php echo $this->_vars['show']['company_url']; ?>
"><?php echo $this->_vars['show']['companyname']; ?>
</a>&nbsp;>>&nbsp;<?php echo $this->_vars['show']['jobs_name']; ?>

</div>

<div class="company-show-topnav">
  <div class="topcomname">
  <h1><?php echo $this->_vars['show']['companyname']; ?>
</h1>
  <?php if ($this->_vars['show']['company']['audit'] == "1"): ?>
  <div class="company_license1" title="Ӫҵִ������֤"></div>
			<?php else: ?>
	<div class="company_license2" title="Ӫҵִ��δ��֤"></div>
	<?php endif; ?>
	<div class="clear"></div>
  </div>
  <div class="snav">
		<a href="<?php echo $this->_run_modifier($this->_run_modifier("QS_companyshow,id:", 'cat', 'plugin', 1, $this->_vars['show']['company']['id']), 'qishi_url', 'plugin', 1); ?>
" >��˾����</a>
		<a href="<?php echo $this->_run_modifier($this->_run_modifier("QS_companyjobs,id:", 'cat', 'plugin', 1, $this->_vars['show']['company']['id']), 'qishi_url', 'plugin', 1); ?>
" class="selected">��Ƹְλ</a>
		<div class="clear"></div>
  </div>
</div>
<div class="jobs-show">
  <div class="left">
    <div class="show link_lan">
  	  <div class="jobsshow">
	   <h1><?php echo $this->_vars['show']['jobs_name']; ?>

	<?php if ($this->_vars['show']['emergency'] == "1"): ?> <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/61.gif" border="0" align="absmiddle" /><?php endif; ?>
	<?php if ($this->_vars['show']['recommend'] == "1"): ?> <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/62.gif" border="0" align="absmiddle" /><?php endif; ?>
	</h1>
<div class="imgtipbox">
<div class="liimg li1"><?php echo $this->_run_modifier($this->_vars['show']['refreshtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
<br />����ʱ��</div>
<div class="liimg li2"><span class="click">0</span><br />�������</div>
<div class="liimg li3"><?php echo $this->_vars['show']['countresume']; ?>
<br />����Ͷ����</div>
<div class="liimg li4"><?php echo $this->_vars['show']['comment']; ?>
<br />ְλ����</div>
<div class="liimg li5"><?php if ($this->_vars['show']['company']['audit'] == "1"): ?>����֤<?php else: ?>δ��֤<?php endif; ?><br />Ӫҵִ��</div>
<div class="clear"></div>	
</div>
			<div class="tip">
			<?php if ($this->_vars['show']['deadline'] > time()): ?>
			��Ƹ�����У���ӭͶ�ݼ�������ֹ����Ϊ��<?php echo $this->_run_modifier($this->_vars['show']['deadline'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>

			<?php else: ?>
			<span style="color:#FF0000">����Ϣ�Ѿ����ڣ�</span>
			<?php endif; ?>
			</div>	  
		  <ul class="floatli link_bku">
		  <li>��Ƹְλ��<?php echo $this->_vars['show']['jobs_name']; ?>
</li>
		  <li>��Ƹ��˾��<a href="<?php echo $this->_vars['show']['company_url']; ?>
"><?php echo $this->_vars['show']['companyname']; ?>
</a></li>
		  <li>ְλ���ͣ�<a href="<?php echo $this->_run_modifier($this->_run_modifier("QS_jobslist,nature:", 'cat', 'plugin', 1, $this->_vars['show']['nature']), 'qishi_url', 'plugin', 1); ?>
" target="_blank"><?php echo $this->_vars['show']['nature_cn']; ?>
</a></li>
		  <li>н�������<a href="<?php echo $this->_run_modifier($this->_run_modifier("QS_jobslist,wage:", 'cat', 'plugin', 1, $this->_vars['show']['wage']), 'qishi_url', 'plugin', 1); ?>
" target="_blank"><?php echo $this->_vars['show']['wage_cn']; ?>
</a></li>
		  <li>��Ƹ������<?php echo $this->_vars['show']['amount']; ?>
 ��</li>
		  <li>�Ա�Ҫ��<?php echo $this->_vars['show']['sex_cn']; ?>
</li>
		  <li>ѧ��Ҫ��<?php echo $this->_vars['show']['education_cn']; ?>
</li>
		  <li>����������<a href="<?php echo $this->_run_modifier($this->_run_modifier($this->_run_modifier($this->_run_modifier("QS_jobslist,district:", 'cat', 'plugin', 1, $this->_vars['show']['district']), 'cat', 'plugin', 1, "-sdistrict:"), 'cat', 'plugin', 1, $this->_vars['show']['sdistrict']), 'qishi_url', 'plugin', 1); ?>
" target="_blank"><?php echo $this->_vars['show']['district_cn']; ?>
</a><?php if ($this->_vars['show']['street_cn']): ?>&nbsp;&nbsp;<a href="<?php echo $this->_run_modifier($this->_run_modifier("QS_street,streetid:", 'cat', 'plugin', 1, $this->_vars['show']['street']), 'qishi_url', 'plugin', 1); ?>
" target="_blank"><?php echo $this->_vars['show']['street_cn']; ?>
</a><?php endif;  if ($this->_vars['show']['officebuilding_cn']): ?>&nbsp;&nbsp;<a href="<?php echo $this->_run_modifier($this->_run_modifier("QS_officebuilding,officebuildingid:", 'cat', 'plugin', 1, $this->_vars['show']['officebuilding']), 'qishi_url', 'plugin', 1); ?>
" target="_blank"><?php echo $this->_vars['show']['officebuilding_cn']; ?>
</a><?php endif; ?></li>
		  <li>������ҵ��<a href="<?php echo $this->_run_modifier($this->_run_modifier("QS_jobslist,trade:", 'cat', 'plugin', 1, $this->_vars['show']['trade']), 'qishi_url', 'plugin', 1); ?>
" target="_blank"><?php echo $this->_vars['show']['trade_cn']; ?>
</a></li>		 
		  <li>�������飺<?php echo $this->_vars['show']['experience_cn']; ?>
</li>
		  <li>�鿴������<span class="click"></span>��</li>
		  <li>�������ڣ�<?php echo $this->_run_modifier($this->_vars['show']['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
</li>
		  <li>ˢ�����ڣ�<?php echo $this->_run_modifier($this->_vars['show']['refreshtime'], 'date_format', 'plugin', 1, "%Y-%m-%d  %H:%M"); ?>
</li>
		  <li>��ֹ���ڣ�<?php echo $this->_run_modifier($this->_vars['show']['deadline'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
</li>
		  <li  style="width:90%">��ǩ��<?php if (count((array)$this->_vars['show']['tag'])): foreach ((array)$this->_vars['show']['tag'] as $this->_vars['tagli']): ?><a href="<?php echo $this->_run_modifier("QS_jobtag", 'qishi_url', 'plugin', 1); ?>
?jobtag=<?php echo $this->_vars['tagli']['0']; ?>
" target="_blank"><?php echo $this->_vars['tagli']['1']; ?>
</a>&nbsp;&nbsp;<?php endforeach; else: ?> ��<?php endif; ?></li>
		  </ul>	
		  <div class="clear"></div>	  
	      <div class="title"><strong>ְλ����</strong></div>
		  <?php echo $this->_run_modifier($this->_vars['show']['contents'], 'nl2br', 'PHP', 1); ?>

		  <div class="title"><strong>��ϵ��ʽ</strong></div>
		  <!--AJAX ��ϵ��ʽ --><div id="jobs_contact"></div>
		   <?php if ($this->_vars['show']['company']['map_open'] == "1" && $this->_vars['show']['company']['map_x'] && $this->_vars['show']['company']['map_y']): ?>
		   <script src="http://api.map.baidu.com/api?v=1.2" type="text/javascript"></script>
		  <div class="title"><strong>��˾λ��</strong></div>
		  <div style="width:100%;height:200px ; border:1px #CCCCCC solid; margin:0 auto; margin-top:6px;" id="map"></div>
			<script type="text/javascript">
  			var map = new BMap.Map("map");   
			var point = new BMap.Point(<?php echo $this->_vars['show']['company']['map_x']; ?>
, <?php echo $this->_vars['show']['company']['map_y']; ?>
);   
			map.centerAndZoom(point, <?php echo $this->_vars['show']['company']['map_zoom']; ?>
);
			var opts = {type: BMAP_NAVIGATION_CONTROL_SMALL,anchor: BMAP_ANCHOR_TOP_RIGHT}   
			map.addControl(new BMap.NavigationControl(opts));		
			var qs_marker = new BMap.Marker(point);           
			map.addOverlay(qs_marker); 
			// ������ע 
			// ����Ϣ���� 
			var opts = {   
			  width : 150,     // ��Ϣ���ڿ��   
			  height: 50,     // ��Ϣ���ڸ߶�   
			  title : "<?php echo $this->_vars['show']['company']['companyname']; ?>
"  // ��Ϣ���ڱ���   
			}   
			var infoWindow = new BMap.InfoWindow("<?php echo $this->_vars['show']['company']['address']; ?>
", opts);  // ������Ϣ���ڶ���   
			map.openInfoWindow(infoWindow, point);
			// ����Ϣ����  			
			</script>	  
		  <?php endif; ?>
		 	 <div align="center" class="link_lan"><br />
			<img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/60.gif" border="0"  class="app_jobs"    style="cursor:pointer"/><br />
			<br />
			<a href="javascript:void(0)" class="add_favorites" >[�ղ�ְλ]</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/personal/personal_report.php?act=report&jobs_id=<?php echo $_GET['id']; ?>
&jobs_name=<?php echo $this->_vars['show']['jobs_name']; ?>
&jobs_addtime=<?php echo $this->_vars['show']['addtime']; ?>
">[�ٱ�����Ϣ]</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" onClick="window.opener='anyone';window.close();">[�رձ�ҳ]</a><br />
			 </div>			 
			 <div class="share">
			<!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
        <a class="bds_qzone">QQ�ռ�</a>
        <a class="bds_tsina">����΢��</a>
        <a class="bds_tqq">��Ѷ΢��</a>
        <a class="bds_renren">������</a>
        <span class="bds_more">����</span>
    </div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=659075" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>
<div class="clear"></div>	
<!-- Baidu Button END -->
			</div>
			<div class="remind">��ƭ���ѣ� ��Ƹ��λ��Ȩ����ְ����ȡ�κη��ã����е�λ�����Թ�����������ȡѺ�𡢱�֤�����ѡ����Ϸѡ��ɱ��ѵ�Υ����ã�ָ��ҽԺ���Ⱦ�Ϊթƭ��Ϊ����ӭ�ٱ���</div>
	  </div>
	</div>
	<!--���� -->
	<div id="pl"></div>
</div>
  <div class="right">
  	<div class="txtbox">
	<div class="qrcode"><img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/url_qrcode.php?url=<?php echo $this->_vars['QISHI']['site_domain'];  echo $this->_run_modifier($this->_run_modifier("QS_companyshow,id:", 'cat', 'plugin', 1, $this->_vars['show']['company']['id']), 'qishi_url', 'plugin', 1); ?>
" alt="<?php echo $this->_vars['show']['companyname']; ?>
 - ��ά��" /></div>	
		  <div class="tit">��ҵ����</div>	  
		  <div class="txt">
			  <ul class="link_bku">
				<li>��ҵ���ʣ�<?php echo $this->_vars['show']['company']['nature_cn']; ?>
</li>
						<li>������ҵ��<a href="<?php echo $this->_run_modifier($this->_run_modifier("QS_jobslist,trade:", 'cat', 'plugin', 1, $this->_vars['show']['company']['trade']), 'qishi_url', 'plugin', 1); ?>
" target="_blank"><?php echo $this->_vars['show']['company']['trade_cn']; ?>
</a></li>
						<li>��˾��ģ��<a href="<?php echo $this->_run_modifier($this->_run_modifier("QS_jobslist,scale:", 'cat', 'plugin', 1, $this->_vars['show']['company']['scale']), 'qishi_url', 'plugin', 1); ?>
" target="_blank"><?php echo $this->_vars['show']['company']['scale_cn']; ?>
</a></li>
						<li>���ڵ�����<a href="<?php echo $this->_run_modifier($this->_run_modifier($this->_run_modifier($this->_run_modifier("QS_jobslist,district:", 'cat', 'plugin', 1, $this->_vars['show']['company']['district']), 'cat', 'plugin', 1, "-sdistrict:"), 'cat', 'plugin', 1, $this->_vars['show']['company']['sdistrict']), 'qishi_url', 'plugin', 1); ?>
" target="_blank"><?php echo $this->_vars['show']['company']['district_cn']; ?>
</a></li>
			  </ul>
		  </div>
		  <div class="pm link_bk">
					    <div class="pleft"><a href="javascript:void(0)" id="addpms">������Ϣ</a></div>
						<div class="pright"><a href="javascript:void(0)" id="newbuddy">��Ϊ����</a></div>
						<div class="clear"></div>
				</div>
  	</div>
	 <div class="txtbox">
		  <div class="tit">�����ܸ���Ȥ��ְλ</div>	  
		  	<?php echo tpl_function_qishi_jobs_list(array('set' => $this->_run_modifier("�б���:jobs,��ʾ��Ŀ:5,��ַ�:...,ְλ������:14,����:rtime,ְλС��:", 'cat', 'plugin', 1, $this->_vars['show']['subclass'])), $this);?>
			<?php if (count((array)$this->_vars['jobs'])): foreach ((array)$this->_vars['jobs'] as $this->_vars['list']): ?>
			<div class="txt1 link_lan">
			<strong><a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['jobs_name']; ?>
</a></strong><br />
			<a href="<?php echo $this->_vars['list']['company_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['companyname']; ?>
</a><br />
			н�ʴ�����<?php echo $this->_vars['list']['wage_cn']; ?>
<br />��Ƹ������<?php echo $this->_vars['list']['amount']; ?>
��<br />ѧ��Ҫ��<?php echo $this->_run_modifier($this->_vars['list']['education_cn'], 'default', 'plugin', 1, "����"); ?>

			</div>
			<?php endforeach; endif; ?>
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
