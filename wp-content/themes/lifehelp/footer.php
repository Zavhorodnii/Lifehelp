<footer class="footer">
	<div class="footer__links">
		<div class="container">
			<div class="footer__links-main">
				<ul>
                    <?php wp_nav_menu( [
                        'theme_location'  => 'footer',
                        'container'       => null,
                    ] );?>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer__main">
		<div class="container">
			<p><?php echo get_option('options_crisis'); ?></p>
		</div>
	</div>
	<div class="footer__bottom">
		<div class="footer__bottom-left">
			<?php echo get_option('options_copyright'); ?>
		</div>
		<div class="footer__bottom-right">
			<p><?php echo get_option('options_follow_us'); ?></p>
			<ul>
                <?php
                    $social = get_field('repeat_contact', 'options');
//                    var_export($social);
                    if(is_array($social)){
                        foreach ($social as $so){
                ?>
                            <li><a href="<?php echo $so['Link']; ?>" target="_blank" class="social">
                                    <?php echo $so['title']; ?>
                            </a></li>
                <?php
                        }
                    }
                ?>
			</ul>
		</div>
	</div>

</footer>
<button class="btn-top" title="Go to top"><i class="fas fa-angle-up"></i></button>
</div>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri() . "/"; ?>js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() . "/"; ?>js/main.js"></script>
</body>

</html>