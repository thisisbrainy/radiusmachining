<?php if(!is_front_page()): ?>
<footer class="footer">
	
	<div class="wrap">
		
		
		<h3><?php echo pll__('RADIUS Machining OÜ'); ?></h3>
		
		<p><?php echo pll__('Meie tegevusaladeks on CNC treimis-, freesimis-, keevitustööde ja laserlõikuse allhange. Meie kodulehelt leiate täpsemat infot erinevate võimaluste kohta. Täpsustavad küsimused või päringud saatke:
			radius[at]radius.ee või +372 503 2310'); ?></p>
	
		<hr>
	
		<p>
		<?php echo pll__('Loovälja tee 5, 75401 Kiili, Harjumaa, ESTONIA'); ?></p>
		
	</div>

	
</footer>

<div class="clear"></div>

<?php if(!is_home() && !is_front_page()): ?></div><?php endif; ?>

<?php endif; ?>

<script src="//code.jquery.com/jquery-latest.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.swipebox.min.js"></script>
<script type="text/javascript">
jQuery(function($) {
	$(".swipebox").swipebox();
});
	
$(function(){
	var wh = $(window).height();
	$('body').css({'background-size': '100% 100%'});
	
	<?php if(!wp_is_mobile()): ?>
	$('.opbg').css({'width': + $(document).width() + 'px', 'height':'660px'});
	<?php else: ?>
	$('.opbg').hide();
	<?php endif; ?>

	$('.box').each(function() {
	    if($(this).find('iframe').length) {
	        $(this).addClass('mappy');
	    }
	});

});

</script>
<?php if(is_home() || is_front_page()): ?>
<script src="//unslider.com/unslider.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
