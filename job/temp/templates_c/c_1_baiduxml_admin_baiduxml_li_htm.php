<?php require_once('/Users/zhaoxiaolong/php_work/ezjob/job/include/template_lite/plugins/modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-02 16:14 CST */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="admin_main_nr_dbox">
 <div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("baiduxml/admin_baiduxml_nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <div class="clear"></div>
</div>
<div class="toptip">
	<h2>��ʾ��</h2>
	<p>
�ƻ������п����ö���������Դ�ĵ���<br />
������ͨ���޸�������Ϣ���������ɽ����<br />
</p>
</div>
 <form id="form1" name="form1" method="post" action="?act=del">
  <?php echo $this->_vars['inputtoken']; ?>

  <table width="100%" border="0" cellpadding="0" cellspacing="0"  id="list" class="link_lan">
    <tr>
      <td width="15%" class="admin_list_tit admin_list_first" >
	  <label id="chkAll"><input type="checkbox" name="chkAll"  id="chk" title="ȫѡ/��ѡ" />����</label></td>
	       
            <td class="admin_list_tit">�ĵ�·��</td>
		    <td width="180" align="center"  class="admin_list_tit">����ʱ��</td>
        <td width="160" align="center"   class="admin_list_tit">�ĵ���С<em  style="font-size:10px;">MB</em></td>
	
      </tr>
	 <?php if (count((array)$this->_vars['flist'])): foreach ((array)$this->_vars['flist'] as $this->_vars['li']): ?>
	 <tr> 
      <td  class="admin_list admin_list_first">
      <input name="file_name[]" type="checkbox" id="file_name" value="<?php echo $this->_vars['li']['file_name']; ?>
" />
	<?php echo $this->_vars['li']['file_type']; ?>
</a>
	        
        <td  class="admin_list"><a href="<?php echo $this->_vars['li']['file_url']; ?>
" target="_blank"><?php echo $this->_vars['li']['file_url']; ?>
</a></td>
			<td align="center"  class="admin_list">
			<?php echo $this->_run_modifier($this->_vars['li']['file_time'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M:%S"); ?>

			</td>
        <td align="center"  class="admin_list">
		<?php echo $this->_vars['li']['file_size']; ?>
<em  style="font-size:10px;">MB</em>
		</td>
	
      </tr>
	 <?php endforeach; endif; ?>
  </table>
	  <?php if (! $this->_vars['flist']): ?>
<div class="admin_list_no_info">û���κ���Ϣ��</div>
<?php endif; ?>
<table width="100%" border="0" cellspacing="10" cellpadding="0" class="admin_list_btm">
      <tr>
        <td>
		  <input name="But" type="button" class="admin_submit" id="But" value="�����ĵ�"  onclick="window.location='?act=make'"/>
<input name="del" type="submit" class="admin_submit" id="ButDel" value="ɾ����ѡ" onclick="return confirm('��ȷ��Ҫɾ����')"/>
		</td>
        <td width="305" align="right">		
	    </td>
      </tr>
  </table>
  </form>
<div class="page link_bk"><?php echo $this->_vars['page']; ?>
</div>
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>