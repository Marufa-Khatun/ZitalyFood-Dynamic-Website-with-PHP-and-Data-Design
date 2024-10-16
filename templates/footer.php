<footer class="zerogrid">
	<div class="wrap-footer">
		<div class="row">
			<div class="col-1-3">
				<div class="wrap-col">
					<h4><?php echo $footerSec1["title"]; ?></h4>
					<div class="row">
						<img src="<?php echo $footerSec1["photo"]; ?>">
						<h5><?php echo $footerSec1["name"]; ?></h5>
						<p><?php echo $footerSec1["description"]; ?></p>
					</div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4><?php echo $footerSec2["title"]; ?></h4>
					<div class="wrap-map"><iframe src="<?php echo $footerSec2["location"]; ?>"></iframe></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4><?php echo $footerSec3["title"]; ?></h4>
					<?php foreach($footerSec3["schedules"] as $schedule): ?>
					<p><span><?php echo $schedule['day']; ?></span> <?php echo $schedule['time']; ?></p>
					<?php endforeach; ?>
					<p><span>Need help getting home?</span></br>
					We will call a cab for you!</p>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="wrapper">
			<?php echo $header['copyRight']; ?></a>
			<ul class="quick-link f-right">
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms of Use</a></li>
			</ul>
		</div>
	</div>
</footer>


	<!-- js -->
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>

	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script>
	$(function () {
	  // Slideshow 4
	  $("#slider4").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 500,
		namespace: "callbacks",
		before: function () {
		  $('.events').append("<li>before event fired.</li>");
		},
		after: function () {
		  $('.events').append("<li>after event fired.</li>");
		}
	  });
	});
	</script>
</div>
</body></html>