<?php require_once('/Users/zhaoxiaolong/php_work/ezjob/job/include/template_lite/plugins/modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('/Users/zhaoxiaolong/php_work/ezjob/job/include/template_lite/plugins/function.qishi_news_list.php'); $this->register_function("qishi_news_list", "tpl_function_qishi_news_list",false);  require_once('/Users/zhaoxiaolong/php_work/ezjob/job/include/template_lite/plugins/function.qishi_news_category.php'); $this->register_function("qishi_news_category", "tpl_function_qishi_news_category",false);  require_once('/Users/zhaoxiaolong/php_work/ezjob/job/include/template_lite/plugins/function.qishi_pageinfo.php'); $this->register_function("qishi_pageinfo", "tpl_function_qishi_pageinfo",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-03 16:56 CST */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /><?php echo tpl_function_qishi_pageinfo(array('set' => "�б���:page,����:QS_news"), $this);?>
<title><?php echo $this->_vars['page']['title']; ?>
</title>
<meta name="description" content="<?php echo $this->_vars['page']['description']; ?>
">
<meta name="keywords" content="<?php echo $this->_vars['page']['keywords']; ?>
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
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.KinSlideshow.min.js" type="text/javascript"></script>
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div id="news_body">
  <div class="search">
    <p class="title">��Ƹְ����Ѷ</p>
    <p class="auxiliary_title">רҵ��ְ������֪ʶƽ̨</p>
    <div class="clear"></div>
    <div class="key_box">
      <input type="text" class="search_key" />
      <input type="button" class="search_btn">
    </div>
    <div class="clear"></div>
    <div class="hot_key">
      <label>��������:</label>
      <a href="#">����</a>
      <a href="#">����</a>
      <a href="#">����</a>
      <a href="#">ӦƸ</a>
    </div>
  </div>
  <div class="right_bbs_link">
    <a href="#"><img src="/templates/default/images/news-right-bbs-link.jpg" alt="bbs"></a>
  </div>
  <div class="news_list">
    <div class="menu">
      <ul>
        <li class="current"><a href="/news">��ҳ</a></li>
        <?php echo tpl_function_qishi_news_category(array('set' => "�б���:show"), $this);?>
        <?php if (count((array)$this->_vars['show'])): foreach ((array)$this->_vars['show'] as $this->_vars['list']): ?>
        <li><a href="<?php echo $this->_vars['list']['url']; ?>
"><?php echo $this->_vars['list']['title']; ?>
</a></li>
        <?php endforeach; endif; ?>
      </ul>
    </div>
    <div class="list">
      <div class="head">
        ��ǰλ�ã�<?php echo $this->_vars['category']['title_']; ?>

      </div>
      <div class="clear"></div>
      
      
  	  <?php echo tpl_function_qishi_news_list(array('set' => "�б���:news,��ʾ��Ŀ:10,���ⳤ��:35,��ѶС��:GET[id],��ҳ��ʾ:6,���ⳤ��:35,ժҪ����:100,��ַ�:...,����:article_order>desc"), $this);?>
  		<?php if (count((array)$this->_vars['news'])): foreach ((array)$this->_vars['news'] as $this->_vars['list']): ?>  
      <div class="news_box">
        <div class="title"><?php echo $this->_vars['list']['title']; ?>
</div>
        <div class="info">�������ڣ�<?php echo $this->_run_modifier($this->_vars['list']['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
 �������<?php echo $this->_vars['list']['click']; ?>
�� ��ǩ�� <?php echo $this->_vars['list']['keywords']; ?>
</div>
        <div class="desc"><?php echo $this->_vars['list']['briefly']; ?>
</div>
        <div class="bottom">
          <div class="share">
            <!-- Baidu Button BEGIN -->
            <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
            <span class="bds_more">������</span>
            <a class="bds_qzone"></a>
            <a class="bds_tsina"></a>
            <a class="bds_tqq"></a>
            <a class="bds_renren"></a>
            <a class="bds_t163"></a>
            <a class="shareCount"></a>
            </div>
            <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=1475074" ></script>
            <script type="text/javascript" id="bdshell_js"></script>
            <script type="text/javascript">
            document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
            </script>
            <!-- Baidu Button END -->
          </div>
          <a href="<?php echo $this->_vars['list']['url']; ?>
" class="more">�����Ķ�</a>
          <div class="clear"></div>
        </div>
      </div>
  	  <?php endforeach; endif; ?>
      <?php echo $this->_vars['page']; ?>

      <div class="clear"></div>
    </div>
  </div>
  <div class="right_ad_1">
    <a href="#"><img src="/templates/default/images/news-right-ad_1.jpg" alt="ad_1"></a>
  </div>
  <div class="right_hot_tag">
    <div class="title"></div>
    <div class="list">
      <a href="#">����</a>
      <a href="#">���Թ�</a>
      <a href="#">��ҵ��</a>
      <a href="#">�˼ʹ�ϵ</a>
      <a href="#">����</a>
      <a href="#">��ҵ��</a>
      <a href="#">�˼ʹ�ϵ</a>
      <a href="#">��ְ</a>
      <a href="#">���Թ�</a>
      <a href="#">��ҵ��</a>
      <a href="#">����</a>
      <a href="#">���Թ�</a>
      <a href="#">��ҵ��</a>
      <a href="#">�˼ʹ�ϵ</a>
      <a href="#">��ְ</a>
      <a href="#">���Թ�</a>
      <a href="#">��ҵ��</a>
      <a href="#">�˼ʹ�ϵ</a>
      <a href="#">����</a>
      <a href="#">���Թ�</a>
      <a href="#">��ҵ��</a>
      <a href="#">�˼ʹ�ϵ</a>
      <a href="#">��ְ</a>
      <a href="#">���Թ�</a>
      <a href="#">��ҵ��</a>
      <a href="#">�˼ʹ�ϵ</a>
      <a href="#">����</a>
      <a href="#">���Թ�</a>
      <a href="#">��ҵ��</a>
      <a href="#">�˼ʹ�ϵ</a>
      <a href="#">��ְ</a>
      <a href="#">���Թ�</a>
      <a href="#">��ҵ��</a>
      <a href="#">�˼ʹ�ϵ</a>
      <a href="#">����</a>
      <a href="#">���Թ�</a>
      <a href="#">��ҵ��</a>
      <a href="#">�˼ʹ�ϵ</a>
      <a href="#">��ְ</a>
    </div>
  </div>
  <div class="right_hot_discuss">
    <div class="title"></div>
    <div class="list">
      <div class="discuss_box">
        <p class="index">01</p>
        <p class="discuss_title">Լ�����ְ���������������ʱ</p>
        <p class="counter">[100/200]</p>
      </div>
      <div class="discuss_box">
        <div class="index">02</div>
        <div class="discuss_title">Լ�����ְ���������������ʱ</div>
        <div class="counter">[100/200]</div>
      </div>
      <div class="discuss_box">
        <div class="index">03</div>
        <div class="discuss_title">Լ�����ְ���������������ʱ</div>
        <div class="counter">[100/200]</div>
      </div>
      <div class="discuss_box">
        <div class="index">04</div>
        <div class="discuss_title">Լ�����ְ���������������ʱ</div>
        <div class="counter">[100/200]</div>
      </div>
      <div class="discuss_box">
        <div class="index">05</div>
        <div class="discuss_title">Լ�����ְ���������������ʱ</div>
        <div class="counter">[100/200]</div>
      </div>
      <div class="discuss_box">
        <div class="index">06</div>
        <div class="discuss_title">Լ�����ְ���������������ʱ</div>
        <div class="counter">[100/200]</div>
      </div>
      <div class="discuss_box">
        <div class="index">07</div>
        <div class="discuss_title">Լ�����ְ���������������ʱ</div>
        <div class="counter">[100/200]</div>
      </div>
      <div class="discuss_box">
        <div class="index">08</div>
        <div class="discuss_title">Լ�����ְ���������������ʱ</div>
        <div class="counter">[100/200]</div>
      </div>
      <div class="discuss_box">
        <div class="index">09</div>
        <div class="discuss_title">Լ�����ְ���������������ʱ</div>
        <div class="counter">[100/200]</div>
      </div>
      <div class="discuss_box">
        <div class="index">10</div>
        <div class="discuss_title">Լ�����ְ���������������ʱ</div>
        <div class="counter">[100/200]</div>
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
