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
				<li><a href="archive.html">Blog</a></li>
			</ul>
		</div>
		<div id="main-content" class="col-2-3">
			<div class="wrap-content">

				<article>
					<?php foreach($blogs as $blog):?>
					<div class="art-header">
						<a href="#"><h3><?php echo $blog['title']; ?> </h3></a>
						<div class="info"><?php echo $blog['postingDate']; ?> <a href="#">Event</a></div>
					</div>
					<div class="art-content">
						<img src="<?php echo $blog['photo']; ?>" />
						<p><?php echo $blog['description']; ?></p>
					</div>
					<a class="button button02" href="#">MORE</a>
					<?php endforeach; ?>
				</article>
				
			</div>
		</div>
		<?php 
		if(file_exists(__DIR__."/about.php")){
			require_once __DIR__."/about.php";
		}
		?>
	</div>
</section>

<!--////////////////////////////////////Footer-->
<?php
 if(file_exists(__DIR__."/templates/footer.php")){
	require_once __DIR__."/templates/footer.php";
 }

 
 ?>