<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta http-equiv="Cache-Control" content="no-siteapp">
<title><?php $t = trim(wp_title('', false)); if($t) echo $t._hui('connector'); else ''; bloginfo('name'); if (is_home ()) echo _hui('connector').get_option('blogdescription'); if ($paged > 1) echo '-Page ', $paged; ?></title>
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<?php wp_head(); ?>
<link rel="shortcut icon" href="<?php echo HOME_URI.'/favicon.ico' ?>">
<!--[if lt IE 9]><script src="<?php echo THEME_URI ?>/js/html5.js"></script><![endif]-->
</head>
<body <?php body_class( hui_bodyclass() ); ?>>
<?php if( _hui('layout') == 'ui-navtop' ){ ?>
<header class="header">
<div class="container">
<?php }else{ ?>
<section class="container">
<header class="header">
<?php } ?>
	<?php hui_logo(); ?>
	<?php hui_nav_menu(); ?>
	
	<?php if( _hui('layout') == 'ui-navtop' ){
		if( _hui('search_baidu') && _hui('search_baidu_code') ){
			echo _hui('search_baidu_code');
		}else{
			echo '<form method="get" class="search-form" action="'.esc_url( home_url( '/' ) ).'" ><input class="form-control" name="s" type="text" placeholder="输入关键字" value="'.htmlspecialchars($s).'"><input class="btn" type="submit" value="搜索"></form>';
		}
	} ?>
	
	<div class="feeds">
		<?php if( _hui('weibo') ){ ?>
			<a class="feed feed-weibo" rel="external nofollow" href="<?php echo _hui('weibo') ?>" target="_blank"><i></i><?php echo __('微博', 'haoui') ?></a>
		<?php }if( _hui('tqq') ){ ?>
			<a class="feed feed-tqq" rel="external nofollow" href="<?php echo _hui('tqq') ?>" target="_blank"><i></i><?php echo __('腾讯微博', 'haoui') ?></a>
		<?php }if( _hui('facebook') ){ ?>
			<a class="feed feed-facebook" rel="external nofollow" href="<?php echo _hui('facebook') ?>" target="_blank"><i></i><?php echo __('Facebook', 'haoui') ?></a>
		<?php }if( _hui('twitter') ){ ?>
			<a class="feed feed-twitter" rel="external nofollow" href="<?php echo _hui('twitter') ?>" target="_blank"><i></i><?php echo __('Twitter', 'haoui') ?></a>
		<?php }if( _hui('feed') ){ ?>
			<a class="feed feed-rss" rel="external nofollow" href="<?php echo _hui('feed') ?>" target="_blank"><i></i><?php echo __('RSS订阅', 'haoui') ?></a>
		<?php }if( _hui('wechat') ){ ?>
			<a class="feed feed-weixin" rel="external nofollow" href="javascript:;" title="<?php echo __('关注', 'haoui') ?>”<?php echo _hui('wechat') ?>“" data-content="<img src='<?php echo _hui("wechat_qr") ?>'>"><i></i><?php echo __('微信', 'haoui') ?></a>
		<?php } ?>
	</div>
	<div class="slinks">
		<?php echo _hui('menu_links') ?>
	</div>
	
<?php if( _hui('layout') == 'ui-navtop' ){ ?>
</div>
</header>
<section class="container">
<?php }else{ ?>
</header>
<?php } ?>