<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<meta name="author" content="">
<link rel="icon" type="image/ico" href="<?php echo APP_PATH;?>favicon.ico">
<!--STYLESHEETS-->
<link href="<?php echo CSS_PATH;?>pxgrids/reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo CSS_PATH;?>pxgrids/banner.css" rel="stylesheet" type="text/css">
<link href="<?php echo CSS_PATH;?>pxgrids/blue.css" rel="stylesheet" type="text/css">
<link href="<?php echo CSS_PATH;?>pxgrids/common.css" rel="stylesheet" type="text/css">
<link href="<?php echo CSS_PATH;?>pxgrids/liebiao.css" rel="stylesheet" type="text/css">
<!--JAVASCRIPTS-->
<script type="text/javascript" src="<?php echo JS_PATH;?>pxgrids/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>pxgrids/focus.js"></script>
</head>
<body>
<!--start header-wrapper-->
<div id="header-wrapper">
    <!--start header-->
    <div id="header">
      <div class="logoheader"><a href="<?php echo siteurl($siteid);?>" id="logo"></a></div>
		<!--导航开始-->
		<div id="navigation">
			<ul id="nav" class="dropmenu">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0227c13b46d48ec55a275efaaa5ca38f&action=category&catid=0&num=6&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'listorder ASC','limit'=>'6',));}?>
				<li><a href="<?php echo siteurl($siteid);?>"><span>首&nbsp;页</span></a></li>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li><a href="<?php echo $r['url'];?>"><span><?php echo $r['catname'];?></span></a></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</div>
		<!--导航结束-->
		<!--登录注册按钮-->
		<!--<div class="login lh24 blue">
			<span class="rt">
				<script type="text/javascript">document.write('<iframe src="<?php echo APP_PATH;?>index.php?m=member&c=index&a=mini&forward='+encodeURIComponent(location.href)+'&siteid=<?php echo get_siteid();?>" allowTransparency="true"  width="230" height="70" frameborder="0" scrolling="no"></iframe>')</script>
			</span>
		</div>-->
		<!--搜索框-->
		<!--<div class="side-search">
			<input type="text" readonly="readonly" class="search-ipt" placeholder="搜全文-暂不可用">
			<a class="search-btn"></a>
		</div>
		-->
    </div>
    <!--[END] header-->
</div>
<!--[END] header-wrapper-->