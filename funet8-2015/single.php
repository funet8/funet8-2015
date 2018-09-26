<?php get_header(); ?>
<div class="content-wrap">
	<div class="content">
		<?php while (have_posts()) : the_post(); ?>
		<header class="article-header">
			<h1 class="article-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			<ul class="article-meta">
				<?php $author = get_the_author();
    if( _hui('author_link') ){
        $author = '<a href="'.get_author_posts_url( get_the_author_meta( 'ID' ) ).'">'.$author.'</a>';
    } ?>
				<li><?php echo $author ?> <?php echo __('发布于', 'haoui') ?> <?php echo timeago( get_gmt_from_date(get_the_time('Y-m-d G:i:s')) ); ?></li>
				<li><?php echo __('分类：', 'haoui');the_category(' / '); ?></li>
				<?php echo _hui('post_from_s') && hui_get_post_from() ? '<li>'.hui_get_post_from().'</li>' : '' ?>
				<li><?php echo hui_get_views() ?></li>
				<li><?php echo hui_get_comment_number() ?></li>
				<li><?php edit_post_link('['.__('编辑', 'haoui').']'); ?></li>
			</ul>
		</header>
		<?php if( _hui('ads_post_01_s') ) echo '<div class="ads ads-content ads-post">'.hui_get_adcode('ads_post_01').'</div>'; ?>
		<article class="article-content">
			<?php the_content(); ?>
		</article>		
		<?php wp_link_pages('link_before=<span>&link_after=</span>&before=<div class="article-paging">&after=</div>&next_or_number=number'); ?>
		<?php endwhile;  ?>
		<!--打赏-->
		<div style="text-align:center;padding-bottom:15px;padding-top:5px;">
			<div id="cyReward" role="cylabs" data-use="reward"></div>
		</div>

		<!--<div class="article-social"><?php echo hui_get_post_like($class='action action-like'); ?><?php if( _hui('post_link_single_s') ) hui_post_link(); ?></div>-->
		<div class="action-share bdsharebuttonbox">		
			<a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_bdysc" data-cmd="bdysc" title="分享到百度云收藏"></a><a href="#" class="bds_bdhome" data-cmd="bdhome" title="分享到百度新首页"></a><a href="#" class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{},"image":{"viewList":["weixin","tsina","qzone","tqq","renren","bdysc","bdhome","youdao"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["weixin","tsina","qzone","tqq","renren","bdysc","bdhome","youdao"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>	
		</div>
		<div class="article-tags">
			<?php the_tags(__('标签：', 'haoui'),'',''); ?>
		</div>
		<p class="post-copyright">未经允许不得转载：<a href="http://www.funet8.com">好玩吧</a> &raquo; <a href="<?php the_permalink() ?>"><?php the_title(); ?></a></a></p>
		<nav class="article-nav">
			<span class="article-nav-prev"><?php previous_post_link(__('上一篇', 'haoui').'<br>%link'); ?></span>
			<span class="article-nav-next"><?php next_post_link(__('下一篇', 'haoui').'<br>%link'); ?></span>
		</nav>
		<!--无觅推荐-->
		<div id="wumiiDisplayDiv"></div>
		<?php if( _hui('ads_post_02_s') ) echo '<div class="ads ads-content ads-related">'.hui_get_adcode('ads_post_02').'</div>'; ?>
		<?php if( _hui('post_related_s') ) hui_posts_related( _hui('related_title'), _hui('post_related_n') ) ?>
		<?php 
			if( !$paged && _hui('sticky_post_s') ) {
				hui_moloader('hui_posts_sticky');
			}
		?>
		<?php if( _hui('ads_post_03_s') ) echo '<div class="ads ads-content ads-comment">'.hui_get_adcode('ads_post_03').'</div>'; ?>		
		<?php comments_template('', true); ?>
		
	</div>
</div>
<?php get_sidebar(); get_footer(); ?>
<!--打赏js-->		
<script type="text/javascript" charset="utf-8" src="http://changyan.itc.cn/js/lib/jquery.js"></script>
<script type="text/javascript" charset="utf-8" src="https://changyan.sohu.com/js/changyan.labs.https.js?appid=cysymBJfO"></script>