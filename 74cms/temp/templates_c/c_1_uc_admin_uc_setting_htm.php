<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-07-11 11:15 CST */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="admin_main_nr_dbox">
<div class="toptip">
	<h2>��ʾ��</h2>
	<p>
����UCenter��Ϻ��Զ���������������Ϣ���������������༭����Ϣ��
</p>
</div>
<div class="toptit">�༭UCenter������Ϣ</div>
 
 
 <table width="100%" border="0" cellspacing="0" cellpadding="4">
 
    <tr>
      <td style=" line-height:220%; color:#666666; padding-left:15px;">
	    <form id="form1" name="form1" method="post" action="?act=uc_set_save">
	    <table>
<tr>
   <td colspan="2" align="left">Ӧ��ID��<?php echo $this->_vars['uc_config']['appid']; ?>
</td>
</tr>
<tr>
    <td><input type="text" name="uc_config[appid]" value="<?php echo $this->_vars['uc_config']['appid']; ?>
"  class="input_text_200" /></td>
    <td>��дUCenter���Ӧ�õ�id��</td>
 </tr>
<tr>
   <td colspan="2" align="left">����˵�ַ:</td>
</tr>
<tr>
   <td width="200"><input type="text" name="uc_config[ucapi]" value="<?php echo $this->_vars['uc_config']['ucapi']; ?>
"  class="input_text_200"/></td>
   <td>���� UCenter��ַ����Ŀ¼�ı������£��޸Ĵ��һ������벻Ҫ�Ķ�
				  ����: http://www.site.com/ucenter (���Ҫ��'/')��</td>
</tr>
<tr>
    <td colspan="2" align="left">����� IP:</td>
</tr>
<tr>
    <td><input type="text" name="uc_config[ucip]" value="<?php echo $this->_vars['uc_config']['ucip']; ?>
"  class="input_text_200" /></td>
    <td>������������ռ��ɡ�������������������⵼�� UCenter ���Ӧ��ͨ��ʧ�ܣ��볢������Ϊ��Ӧ�����ڷ������� IP ��ַ��</td>
 </tr>
<tr>
    <td colspan="2" align="left">ͨ����Կ:</td>
 </tr>
 <tr>
    <td><input type="text" name="uc_config[uckey]"  value="<?php echo $this->_vars['uc_config']['uckey']; ?>
"  class="input_text_200"/></td>
    <td>ֻ����ʹ��Ӣ����ĸ�����֣��� 64 �ֽڡ�Ӧ�ö˵�ͨ����Կ����������ñ���һ�£������Ӧ�ý��޷��� UCenter ����ͨ��</td>
</tr>
<tr>
    <td colspan="2" align="left">���ӷ�ʽ:</td>
</tr>
    <tr>
        <td>      
        <select name="uc_config[ucconnect]" onChange="if(this.value==''){document.getElementById('ucmysql').style.display = 'none';}else{document.getElementById('ucmysql').style.display = '';}" style=" width:207px;font-size:12px;">
			<option value="mysql" <?php if ($this->_vars['uc_config']['ucconnect'] == 'mysql'): ?>selected="selected"<?php endif; ?>> ���ݿⷽʽ(MySQL) </option>
			<option value="" <?php if ($this->_vars['uc_config']['ucconnect'] == ''): ?>selected="selected"<?php endif; ?>> �ӿڷ�ʽ(fsockopen) </option>
        </select>
        </td>
        <td>��������ķ��������绷��ѡ���ʵ������ӷ�ʽ</td>
    </tr>

    <tr>
        <td colspan="2">
            <table id="ucmysql" >
                <tr>
                    <td colspan="2" align="left">���ݿ������:</td>
                </tr>
                <tr>
                    <td width="200">
                    <input type="text"   name="uc_config[ucdbhost]" value="<?php echo $this->_vars['uc_config']['ucdbhost']; ?>
"  class="input_text_200"/>                  </td>
                    <td>Ĭ��:localhost, ��� MySQL �˿ڲ���Ĭ�ϵ� 3306������д������ʽ��127.0.0.1:�˿ں�</td>
                </tr>
                
                <tr>
                    <td colspan="2" align="left">���ݿ��û���:</td>
                </tr>
                <tr>
                    <td>
                    <input type="text"   name="uc_config[ucdbuser]" value="<?php echo $this->_vars['uc_config']['ucdbuser']; ?>
" class="input_text_200"/>	
                    </td>
                    <td>��¼uc����˵����ݿ��û���</td>		
                </tr>
                
                <tr>
                    <td colspan="2" align="left">���ݿ�����:</td>
                </tr>                
                <tr>
                    <td>
                    <input type="text" name="uc_config[ucdbpw]" value="<?php echo $this->_vars['uc_config']['ucdbpw']; ?>
" class="input_text_200"/>	
                    </td>
                    <td>��¼uc��������ݿ�ʹ�õ�����</td>		
                </tr>
                
                <tr>
                    <td colspan="2" align="left">���ݿ���:</td>
                </tr>                
                <tr>
                    <td>
                    <input type="text"  name="uc_config[ucdbname]" value="<?php echo $this->_vars['uc_config']['ucdbname']; ?>
" class="input_text_200"/>	
                    </td>
                    <td>uc����˵����ݿ����ơ�</td>		
                </tr>
                
                <tr>
                    <td colspan="2" align="left">���ݿ��ǰ׺:</td>
                </tr>                
                <tr>
                    <td>
                    <input type="text"   name="uc_config[ucdbtablepre]" value="<?php echo $this->_vars['uc_config']['ucdbtablepre']; ?>
" class="input_text_200"/>	
                    </td>
                    <td>uc�����ʹ�õ����ݿ��ǰ׺</td>		
                </tr>
            </table>            
        </td>
    </tr>    
    
    <tr>
        <td colspan="2" align="left">��ȷ��������Ϣ:</td>
    </tr>
    <tr>
        <td>
            <textarea  onFocus="this.select()" style="width:200px; height:100px; font-size:14px; font-family: Arial, Helvetica, sans-serif">
define('UC_CONNECT', '<?php echo $this->_vars['uc_config']['ucconnect']; ?>
');
define('UC_DBHOST', '<?php echo $this->_vars['uc_config']['ucdbhost']; ?>
');
define('UC_DBUSER', '<?php echo $this->_vars['uc_config']['ucdbuser']; ?>
');
define('UC_DBPW', '********');
define('UC_DBNAME', '<?php echo $this->_vars['uc_config']['ucdbname']; ?>
');
define('UC_DBCHARSET', '<?php echo $this->_vars['uc_config']['ucdbcharest']; ?>
');
define('UC_DBTABLEPRE', '<?php echo $this->_vars['uc_config']['ucdbtablepre']; ?>
');
define('UC_DBCONNECT', '0');
define('UC_KEY', '<?php echo $this->_vars['uc_config']['uckey']; ?>
');
define('UC_API', '<?php echo $this->_vars['uc_config']['ucapi']; ?>
');
define('UC_CHARSET', '<?php echo $this->_vars['uc_config']['uccharest']; ?>
');
define('UC_IP', '<?php echo $this->_vars['uc_config']['ucip']; ?>
');
define('UC_APPID', '<?php echo $this->_vars['uc_config']['ucappid']; ?>
');
define('UC_PPP', '20');
            </textarea>
        </td>
        <td>��Ӧ�õ� UCenter ������Ϣ��ʧʱ�ɸ������Ĵ��뵽Ӧ�õ������ļ���</td>
    </tr>
	<tr>
    <td height="88" colspan="2">
      <input name="save" type="submit" class="admin_submit"    value="�޸�"/></td>
  </tr>
</table>
        </form>
	  </td>
    </tr>
  </table>
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>