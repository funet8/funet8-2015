<?php if( _hui('layout') == 'ui-c2' ) return false; ?>
<aside class="sidebar">	
<div class="widget widget_recent_entries">
	<h3 class="title"><strong>最新鲜</strong></h3>
	<ul>
		<?php $rand_post = get_posts('numberposts=10&orderby=time'); foreach( $rand_post as $post ) : ?>
		<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank"><?php the_title(); ?></a></li>
		<?php endforeach; ?>
	</ul>
</div>
<div class="widget widget_ads affix-top">
<h3 class="title"><strong>广告也精彩</strong></h3>
	<div class="widget_ads_inner">
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/adjs/Right_Ad1.js"></script>
	</div>
</div>
<div class="widget widget_categories"><h3 class="title"><strong>好多栏目</strong></h3>
<ul>
	
	<?php wp_list_cats("sort_column=ID&hide_empty=0&optioncount=0&hierarchical=0");?>
</ul>
</div>
<div class="widget widget_postlist">
<h3 class="title"><strong>最新评论</strong></h3>
<ul class="items-01">
		<?php	
			global $wpdb;$sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID,comment_post_ID, comment_author, comment_date_gmt, comment_approved,comment_type,comment_author_url,comment_author_email,SUBSTRING(comment_content,1,34) AS com_excerpt FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID = 
			$wpdb->posts.ID) WHERE comment_approved = '1' AND comment_type = '' AND post_password = '' AND user_id='0' ORDER BY comment_date_gmt DESC LIMIT 6";
			$comments = $wpdb->get_results($sql);
			$output = $pre_HTML;			
			foreach ($comments as $comment) {$output .= " \n<li><a href=\"" . get_permalink($comment->ID) ."#comment-" . $comment->comment_ID . "\" title=\"关于 " .$comment->post_title . "\"><span class=\"thumbnail\">".get_avatar(get_comment_author_email(), 60)."</span>".strip_tags($comment->comment_author)." 吐槽：" . strip_tags($comment->com_excerpt)."&hellip; "."</a></li>";}$output .= $post_HTML;
			echo $output;
	   ?> 
</ul>
</div>
	
<div class="widget widget_recent_entries">
<h3 class="title"><strong>标签云</strong></h3>
	<ul class="widget_tags_inner">
		<li><?php wp_tag_cloud('smallest=14&largest=14&unit=px&number=21&orderby=count&order=DESC');?></li>
	</ul>
</div>
<div class="widget widget_recent_entries">
<h3 class="title"><strong>猜你喜欢</strong></h3>
<ul>
<?php $rand_post = get_posts('numberposts=5&orderby=rand');foreach( $rand_post as $post ) : ?>
	<li><a href="<?php the_permalink(); ?>?new_cainixihuan" title="<?php the_title(); ?>" target="_blank"><?php the_title(); ?></a></li>
<?php endforeach; ?>  
</ul>
</div>
<!--<div class="widget widget_ads affix-top">
<h3 class="title"><strong>我是广告</strong></h3>
	<div class="widget_ads_inner">
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/adjs/Right_Ad2.js"></script>
	</div>
</div>-->
<div class="widget widget_links"><h3 class="title"><strong>友情链接</strong></h3>
	<ul class="xoxo blogroll">
		<?php get_links('', ' <li>', ' </li>', ' ', FALSE, 'id', FALSE, FALSE, -1, FALSE); ?>
	</ul>
</div>

</aside>