<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-07-31 14:08 CST */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="admin_main_nr_dbox">
 <div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("link/admin_link_nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <div class="clear"></div>
</div>
<div class="toptip">
	<h2>��ʾ��</h2>
	<p>
ͼƬ�����������ϴ�LOGO����дLOGO·��
</p>
</div>
<div class="toptit">������������</div>
<form action="?act=addsave" method="post" enctype="multipart/form-data" name="FormData" id="FormData"  >
<?php echo $this->_vars['inputtoken']; ?>

        <table width="100%" border="0" cellspacing="3" cellpadding="3">
          <tr>
            <td width="88" align="right">�������ƣ�</td>
            <td><input name="link_name" type="text" class="input_text_200" id="link_name" maxlength="10"/></td>
          </tr>
          <tr>
            <td align="right">���ӵ�ַ��</td>
            <td><input name="link_url" type="text" class="input_text_200" id="link_url" value="http://" maxlength="80"/></td>
          </tr>
          <tr>
            <td align="right">�� �� ����</td>
<td><select name="alias"   id="category_id"alias>
<?php if (count((array)$this->_vars['cat'])): foreach ((array)$this->_vars['cat'] as $this->_vars['li']): ?>	
  <option value="<?php echo $this->_vars['li']['c_alias']; ?>
"  ><?php echo $this->_vars['li']['categoryname']; ?>
</option>          
<?php endforeach; endif; ?>              
</select>
</td>
</tr>
          <tr>
            <td align="right">��ʾ˳��</td>
            <td><input name="show_order" type="text" class="input_text_200" id="show_order"  value="50" maxlength="3" />
            ����Խ��Խ��ǰ</td>
          </tr>
		   <?php if ($this->_vars['QISHI']['subsite'] == "1"): ?>
		  <tr>
            <td align="right">��ʾ�ڣ�</td>
            <td>
			<label ><input name="subsite_id" type="radio" value="0"  <?php if ($this->_vars['QISHI']['subsite_id'] == "0"): ?>checked="checked"<?php endif; ?> />ȫվ</label>
		&nbsp;&nbsp;&nbsp;
		<?php if (count((array)$this->_vars['subsite'])): foreach ((array)$this->_vars['subsite'] as $this->_vars['li']): ?>
		<label ><input name="subsite_id" type="radio" value="<?php echo $this->_vars['li']['s_id']; ?>
" <?php if ($this->_vars['QISHI']['subsite_id'] == $this->_vars['li']['s_id']): ?>checked="checked"<?php endif; ?> /><?php echo $this->_vars['li']['s_districtname']; ?>
</label>
		&nbsp;&nbsp;&nbsp;
		<?php endforeach; endif; ?>
			</td>
          </tr>
		   <?php endif; ?>
		  <tr>
            <td align="right">��ʾ״̬��</td>
            <td>
			<label>
              <input name="display" type="radio" value="1" checked="checked" />
              ��ʾ</label>
			  &nbsp; &nbsp; &nbsp;
			  <label>
              <input type="radio" name="display" value="2" />
              ����ʾ</label>
			  </td>
          </tr>
          <tr>
            <td align="right">����LOGO��</td>
            <td><input type="file" name="logo"  style="height:24px; width:272px; font-size:12px; line-height:20px;"  onkeydown="alert('�����Ҳࡰ�����ѡ���������ϵ�ͼƬ��');return false"/></td>
          </tr>
          <tr>
            <td align="right">��LOGO��ַ��</td>
            <td><input name="link_logo" type="text" class="input_text_200" id="link_logo" maxlength="80"/></td>
          </tr>
		  <tr>
            <td align="right" valign="top">��ע��</td>
            <td><textarea name="Notes" style="width:300px; height:50px; font-size:12px; line-height:180%" onpropertychange="if(this.value.length>100){this.value=this.value.slice(0,100)}"></textarea>
              <br />
              (��ע����ǰ̨��ʾ��ֻ��Ϊ����Ա�ı������) </td>
		  </tr>
          <tr>
            <td align="center">&nbsp;</td>
            <td align="left"><input type="submit" name="Submit3" value="ȷ���ύ" class="admin_submit"   />
			<input name="submit22" type="button" class="admin_submit"    value="�� ��" onclick="window.location='?act='"/>
			</td>
          </tr>
        </table>
      </form>
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>