<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<footer class="container-fluid footer">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<p>Copyright © 2015–2017 Creade.ru All Rights Reserved.</p>
					<p>Powered by WordPress © 2017</p>
				</div>
				<div class="col-sm-6 pmn text-right arrow-up">
					<a href="#top" id="upper">
						<svg class="icon icon-arrow-up">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-arrow-up"></use>
						</svg>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>


<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>


<script type="text/javascript">
	jQuery(function($){
		$.get('/wp-content/themes/creade/images/icons.svg', function(data) {
			var div = document.createElement("div");
			div.innerHTML = new XMLSerializer().serializeToString(data.documentElement);
			document.body.insertBefore(div, document.body.childNodes[0]);
		});
	});
</script>

<!-- Планость ссылок -->
	<script>
		$(function(){
			$(document).ready(function() {
				$("#upper").click(function() {
					$("html, body").animate({
						scrollTop: $($(this).attr("href")).offset().top-61
					}, {
						duration: 500,

					});
					return false;
				});
			});
		});
	</script>


</body>
</html>