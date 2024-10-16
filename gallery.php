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
				<li><a href="gallery.html">Gallery</a></li>
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
				<div class="row">
					<?php foreach($gallerys as $gallery): ?>
					<div class="col-1-4">
						<div class="zoom-container">
							<a href="#">
								<span class="zoom-caption">
									<span><?php echo $gallery['title'];?></span>
								</span>
								<img src="<?php echo $gallery['photo'];?>" />
							</a>
						</div>
					</div>
					<?php endforeach;?>
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
			