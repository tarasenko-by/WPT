<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php $args = array( // опции для вывода нижнего меню, чтобы они работали, меню должно быть создано в админке
						'theme_location' => 'bottom', // идентификатор меню, определен в register_nav_menus() в function.php
						'container'=> false, // обертка списка, false - это ничего
						'menu_class' => 'nav nav-pills bottom-menu', // класс для ul
				  		'menu_id' => 'bottom-nav', // id для ul
				  		'fallback_cb' => false
				  	);
					wp_nav_menu($args); // выводим нижние меню
					?>
				</div>
			</div>
		</div>
	</footer>
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>


<script type="text/javascript">
	jQuery(function($){
		$.get('/wp-content/themes/WPT/images/icons.svg', function(data) {
			var div = document.createElement("div");
			div.innerHTML = new XMLSerializer().serializeToString(data.documentElement);
			document.body.insertBefore(div, document.body.childNodes[0]);
		});
	});
</script>

</body>
</html>