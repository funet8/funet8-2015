<?php if( _hui('layout') == 'ui-c2' ) return false; ?>
<aside class="sidebar">	
<?php 
if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_sitesidebar')) : endif; 

if (is_single()){
	if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_postsidebar')) : endif; 
}
else if (is_page()){
	if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_pagesidebar')) : endif; 
}
else if (is_home()){
	if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_sidebar')) : endif; 
}
else {
	if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_othersidebar')) : endif; 
}
?>
<div class="widget widget_links"><h3 class="title"><strong>友情链接</strong></h3>
	<ul class="xoxo blogroll">
		<?php get_links('', ' <li>', ' </li>', ' ', FALSE, 'id', FALSE, FALSE, -1, FALSE); ?>
	</ul>
</div>
</aside>