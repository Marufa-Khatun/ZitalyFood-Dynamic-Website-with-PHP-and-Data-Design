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
				<li><a href="menu.html">Menu</a></li>
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
				<div class="row">
					<?php foreach($detailMenu as $menu): ?>
					<div class="col-1-3">
						<div class="wrap-col">
							<h3><?php echo  $menu['menuTitle']; ?></h3>

							<?php 
							$latestItems=array_slice($menu['items'],-3);
							foreach($latestItems as $item): ?>

							<div class="post">
								<a href="#"><img src="<?php echo  $item['photo']; ?>"/></a>
								<div class="wrapper">
								  <h5><a href="#"><?php echo  $item['name']; ?></a></h5>

								  <?php if($item['salePrice']==null): ?>
									<span><?php echo  $item['price']; ?></span>
								    <?php else: ?>
										<del><span><?php echo  $item['price']; ?></span></del> <span><?php echo  $item['salePrice']; ?></span> 
								  <?php endif; ?>
								
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
					<?php endforeach; ?>
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