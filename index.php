
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
	
	<div class="zerogrid">
		<div class="callbacks_container">
			<ul class="rslides" id="slider4">
				<?php foreach($sliders as $slider): ?>
				<li>
					<img src="<?php echo $slider['photo'] ?>" alt="">
					<div class="caption">
						<h2><?php echo $slider['title'] ?></h2></br>
						<p><?php echo $slider['description'] ?> </p>
					</div>
				</li>
				<?php endforeach; ?>
				
			</ul>
		</div>
	</div>
	
<!--////////////////////////////////////Container-->
<section id="container" class="index-page">
	<div class="wrap-container zerogrid">
		<!-----------------content-box-1-------------------->
		<section class="content-box box-1">
			<div class="zerogrid">
				<div class="row box-item"><!--Start Box-->
					<h2><?php echo $heroSections['headTitle']; ?></h2>
					<span><?php echo $heroSections['headSubTitle']; ?></span>
				</div>
			</div>
		</section>
		<!-----------------content-box-2-------------------->
		<section class="content-box box-2">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<h2><?php echo $heroSections['title']; ?></h2>
						<hr class="line">
						<span><?php echo $heroSections['subTitle']; ?></span>
					</div>
					<div class="row">
						<?php foreach($heroSections['details'] as $detail): ?>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="box-item">
									<span class="ribbon"><?php echo $detail['title']; ?><b></b></span>
									<img src="<?php echo $detail['photo']; ?>" alt="">
									<p><?php echo $detail['description']; ?></p>
									
									<a href="<?php echo $detail['button']['link']; ?>" class="button button-1"><?php echo $detail['button']['name']; ?></a>
									
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
					
				</div>
			</div>
		</section>
	</div>
</section>

<!--////////////////////////////////////Footer-->
<?php
 if(file_exists(__DIR__."/templates/footer.php")){
	require_once __DIR__."/templates/footer.php";
 }

 
 ?>