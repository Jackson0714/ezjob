<?php require_once('/Users/zhaoxiaolong/php_work/ezjob/job/include/template_lite/plugins/function.qishi_nav.php'); $this->register_function("qishi_nav", "tpl_function_qishi_nav",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-03 16:54 CST */ ?>
<div class="global_head_top">
  <div class="body">
    <div class="logo"></div>
    <div class="nav">
      <a href="/">��ҳ</a>
      <div class="nav_space">/</div>
      <a href="#">
        ��Ƹ
        <div class="more"></div>
      </a>
      <div class="nav_space">/</div>
      <a href="#">���ֲ�</a>
      <div class="nav_space">/</div>
      <a href="#">�ٷ�������</a>
      <div class="nav_space">/</div>
      <a href="#">
        ����
        <div class="more"></div>
      </a>
    </div>
    <div class="user_zone">
      <a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/login.php">��½</a>
      <a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_reg.php">ע��</a>
      <a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_getpass.php">��������</a>
      <a class="mail" href="#"></a>
      <a class="setting" href="#"></a>
    </div>
  </div>
  <div class="clear"></div>
  <div class="bottom_border"></div>
</div>
<div class="head_top">
	<div class="logo"></div>
  <div class="nav">
	<?php echo tpl_function_qishi_nav(array('set' => "��������:QS_top,�б���:list"), $this);?>
	<?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['list']): ?>
	<a href="<?php echo $this->_vars['list']['url']; ?>
" target="<?php echo $this->_vars['list']['target']; ?>
" <?php if ($this->_vars['list']['tag'] == $this->_vars['page_select'] && $this->_vars['list']['tag'] != ""): ?>class="select"<?php endif; ?>><?php echo $this->_vars['list']['title']; ?>
</a>
	<?php endforeach; endif; ?>
    <a class="service" href="#"></a>
  </div>
  <div class="clear"></div>
  <div class="bottom"></div>
</div>
<div class="clear"></div>