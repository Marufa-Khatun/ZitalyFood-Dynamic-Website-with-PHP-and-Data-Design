
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
				<li><a href="news.html">News</a></li>
			</ul>
		</div>
		<div id="main-content" class="col-2-3">
			<div class="wrap-content">
				<article>
					<div class="art-header">
						<div class="entry-title"> 
							<h2><?php echo $news['title']; ?></h2>
						</div>
						<div class="info"> <a href="#"><?php echo $news['postingDate']; ?></div>
					</div>
					<div class="art-content">
						<img src="<?php echo $news['photo']; ?>" />
						<div class="excerpt"><p><?php echo $news['description']; ?></p>
						<?php foreach($news['heading'] as $head): ?>
						<h2><?php echo $head['title']; ?></h2>
						<p><?php echo $head['description']; ?></p>
						<?php endforeach; ?>
						
						
					</div>
				</article>
				<div class="widget wid-related">
					<div class="wrap-col">
						<div class="wid-header">
							<h5>Related Post</h5>
						</div>
						<div class="wid-content">
							<div class="row">
								<?php foreach($relatedPost as $post): ?>
								<div class="col-1-3">
									<div class="wrap-col">
										<a href="#"><img src="<?php echo $post['photo']; ?>" /></a>
										<h4><a href="#"><?php echo $post['title']; ?></a></h4>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
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