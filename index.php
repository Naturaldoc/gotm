<?php require_once('templates/header.php'); ?>

<div class="container">
	<!-- Main hero unit for a primary marketing message or call to action -->
	<div class="row">
		<div class="hero-unit span6">
			<div id="myCarousel" class="carousel slide">
				<!-- Carousel items -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="resources/img/briefs_diesel.jpg" alt="" />
					</div>
					<div class="item">
						<img src="resources/img/boxer_tommy.jpg" alt="" />
					</div>
					<div class="item">
						<img src="resources/img/boxer_pinkbum.jpg" alt="" />
					</div>
					<div class="item">
						<img src="resources/img/boxer_ck.jpg" alt="" />
					</div>
					<div class="item">
						<img src="resources/img/boxer_ck2.jpg" alt="" />
					</div>
					<div class="item">
						<img src="resources/img/boxerbriefs_puntoblanco.jpg" alt="" />
					</div>
					<div class="item">
						<img src="resources/img/sexypants.jpg" alt="" />
					</div>
				</div>
				<!-- Carousel nav -->
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
		</div>
		
		<div class="span4">
			<h1 id="centerit">Underwear of the Month</h1>
			<hr />
			<div class="accordion" id="accordion1">
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">
							Boxers
						</a>
					</div>
					<div id="collapseOne" class="accordion-body collapse in">
						<div class="accordion-inner">
							<ul>
								<li>One pair of boxers delivered to your door each month.</li>
								<li>High-end brand name apparell delivered approximately every three months</li>
								<li>Sizes: S, M, L, XL</li>
								<li>Subscriptions available for 3 months, 6 months, and 12 months</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo">
							Boxer Briefs
						</a>
					</div>
					<div id="collapseTwo" class="accordion-body collapse">
						<div class="accordion-inner">
							<ul>
								<li>One pair of boxer briefs delivered to your door each month.</li>
								<li>High-end brand name apparell delivered approximately every three months</li>
								<li>Sizes: S, M, L, XL</li>
								<li>Subscriptions available for 3 months, 6 months, and 12 months</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree">
							Briefs
						</a>
					</div>
					<div id="collapseThree" class="accordion-body collapse">
						<div class="accordion-inner">
							<ul>
								<li>One pair of briefs delivered to your door each month.</li>
								<li>High-end brand name apparell delivered approximately every three months</li>
								<li>Sizes: S, M, L, XL</li>
								<li>Subscriptions available for 3 months, 6 months, and 12 months</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour">
							Adventurous
						</a>
					</div>
					<div id="collapseFour" class="accordion-body collapse">
						<div class="accordion-inner">
							<ul>
								<li>One pair of boxers delivered to your door each month.</li>
								<li>High-end brand name apparell delivered approximately every three months</li>
								<li>Sizes: S, M, L, XL</li>
								<li>Subscriptions available for 3 months, 6 months, and 12 months</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<a href="order.php"><button class="btn btn-large btn-block">
			Order Now!
		</button></a>
	</div>
</div>

<?php require_once('templates/footer.php'); ?>