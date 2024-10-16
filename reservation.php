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
				<li><a href="reservation.html">Reservation</a></li>
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
				<div class="row">
					<div class="col-1-3">
						<div class="wrap-col">
							<h3>Complete the Submission Form</h3>
							<p><?php echo $reservations['description']; ?></p><br/>
							<h3>Or Just Make a Call</h3>
							<p><?php echo $reservations['phone1']; ?> <br>
							<?php echo $reservations['phone2']; ?></p>
							<p><?php echo $reservations['email']; ?></p>
						</div>
					</div>
					<div class="col-2-3">
						<div class="wrap-col">
							<div class="contact">
								<div id="contact_form">
									<form name="contact" id="contact" method="post" action="reservation.php">
										<label class="row">
											<div class="col-1-2">
												<div class="wrap-col">
													<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
												</div>
											</div>
											<div class="col-1-2">
												<div class="wrap-col">
													<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
												</div>
											</div>
										</label>
										<label class="row">
											<div class="col-2-4">
												<div class="wrap-col">
												<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
												</div>
											</div>
											<div class="col-1-4">
												<div class="wrap-col">
												<input type="date"  name="date" id="date" placeholder="Date"/>
												</div>
											</div>
											<div class="col-1-4">
												<div class="wrap-col">
												<input type="time"  name="time" id="time" placeholder="Time"/>
												</div>
											</div>											
										</label>
										<label class="row">
											<div class="wrap-col">
												<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
												placeholder="Message"></textarea>
											</div>
										</label>
										<center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>
									</form>
								</div>
							</div>
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