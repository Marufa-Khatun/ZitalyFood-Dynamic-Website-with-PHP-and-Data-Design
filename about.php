<div id="sidebar" class="col-1-3">
			<div class="wrap-sidebar">
				<!---- Start Widget ---->
				<div class="widget wid-about">
					<div class="wid-header">
						<h5>About Us</h5>
					</div>
					
					<div class="wid-content">
						<img src="<?php echo $aboutUs['photo']; ?>"/>
						<p><?php echo substr($aboutUs['description'], 0, 150); ?></p>
					</div>
				</div>
				<!---- Start Widget ---->
				<div class="widget wid-post">
					<div class="wid-header">
						<h5>Latest Posts</h5>
					</div>
					<div class="wid-content">
						<?php 
						$latestValue=array_slice(($latestPosts),-3);
						foreach($latestValue as $latestPost):?>
						<div class="post">
							<a href="#"><img src="<?php echo $latestPost['photo']; ?>"/></a>
							<div class="wrapper">
							  <h5><a href="#"><?php echo $latestPost['name']; ?></a></h5>

							  <?php if($latestPost['salePrice']==null): ?>

							   <span><?php echo $latestPost['price']; ?></span>

							   <?php else: ?>
								<span><?php echo $latestPost['salePrice']; ?></span> <del><span><?php echo $latestPost['price']; ?></span></del>
								<?php endif; ?>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
				
				<div class="widget wid-gallery">
					<div class="wid-header">
						<h5>Gallery</h5>
					</div>
					<div class="wid-content">
						<?php 
						$latestValue=array_slice(($gallerys), -6);
						foreach($latestValue as $gallery): ?>
						<a href="#"><img src="<?php echo $gallery['photo']; ?>"></a>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>