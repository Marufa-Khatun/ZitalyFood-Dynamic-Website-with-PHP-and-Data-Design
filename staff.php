
<?php
 if(file_exists(__DIR__."/autoload.php")){
	require_once __DIR__."/autoload.php";
 }
 if(file_exists(__DIR__."/templates/header.php")){
	require_once __DIR__."/templates/header.php";
 }

 if(file_exists(__DIR__."/templates/menubar.php")){
	require_once __DIR__."/templates/menubar.php";
 }
 ?>
	
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="staff.html">Staff</a></li>
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
				<div class="chef">
					<div class="row">
						<?php foreach($staffs as $staff): ?>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="zoom-container">
									<a href="#">
										<img src="<?php echo $staff['photo']; ?>" />
									</a>
								</div>
								<h3><?php echo $staff['name']; ?></h3>
								<ul class="social t-center">
									<?php foreach($staff['social'] as $icon): ?>
									<li><a href="<?php echo $icon['link']; ?>"><i class="<?php echo $icon['className']; ?>"></i></a></li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div> 
	</div>
</section>

<!--////////////////////////////////////Footer-->
<?php
 if(file_exists(__DIR__."/templates/footer.php")){
	require_once __DIR__."/templates/footer.php";
 }

 
 ?>