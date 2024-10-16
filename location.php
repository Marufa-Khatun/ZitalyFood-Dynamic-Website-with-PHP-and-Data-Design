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
				<li><a href="location.html">Location</a></li>
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
				<div class="row">
					<div class="col-1-3">
						<div class="wrap-col">
							<h3>Address</h3>
							<p><?php echo $locations['address'];?></p><br/>
							<h3>Hours Of Operation</h3>
							<?php foreach($locations['schedule'] as $opening): ?>
							<p><span><?php echo $opening['day'];?> </span><?php echo $opening['time'];?></p>
							<?php endforeach; ?>
							<h3>Contact Info</h3>
							<p><span>EMAIL ADDRESS: </span><?php echo $locations['contact']['email'];?></p>
							<p><span>TELEPHONE: </span><?php echo $locations['contact']['phone'];?></p>
							<p><span>FAX: </span><?php echo $locations['contact']['fax'];?></p>
						</div>
					</div>
					<div class="col-2-3">
						<div class="wrap-col">
							<div class="wrap-map"><iframe src="<?php echo $locations['location']; ?>"></iframe></div>
						</div>
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