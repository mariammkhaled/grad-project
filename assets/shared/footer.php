	<?php
	ob_end_flush();
	?>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;600;700;800&display=swap"
		rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
		integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<style>
	@keyframes pulse {

		0%,
		100% {
			animation-timing-function: ease-in;
		}

		50% {
			transform: scale(1.25);
		}
	}

	.footer-heading {
		color: black;
	}

	a {
		color: #737373;
	}

	.footer-slogan {
		font-weight: 100;
		font-size: 35px;
		text-transform: uppercase;
		line-height: 2rem;
		color: #3b66f5;
	}

	.footer-slogan::before {
		content: "";
		border-left: 2px solid #3B66F5;
		margin: 0 1rem;

	}

	.footer-icon:hover {
		animation: pulse 1s infinite;
	}

#shadow-footer{
	height: 25vh;
}

	@media screen and (max-width: 1850px) {
		#nav-about {
			margin-left: 1rem;
		}
	}

	@media screen and (max-width: 1370px) {
		#nav-about {
			margin-left: 2rem;
		}
	}

	@media screen and (max-width: 1146px) {
		#nav-about {
			margin-left: 4rem;
		}

		#nav-resources {
			margin-left: 1rem;
		}
	}
</style>
</head>

<body>
<div id="shadow-footer"></div>
	<footer class="footer bg-light">
		<div class="container-fluid px-lg-5">
			<div class="row">
				<div class="col-md-12 py-5">
					<div class="row">
						<div class="col-lg-1 col-md-1">

						</div>
						<div class="col-md-5 mb-md-0 mb-4 ">
							<img src="/yourheart'ssight/assets/images/footer.png"
								class="footer-icon align-middle justify-content-center" alt="">
							<span class="footer-slogan align-middle justify-content-center"><b> your heart sight
								</b></span>
						</div>
						<div class="col-md-6">
							<div class="row ">
								<div class="col-md-12 col-lg-9">
									<div class="row">
										<div class="col-md-4 mb-md-0 mb-4 ">
											<h2 class="footer-heading">Solution</h2>
											<ul class="list-unstyled">
												<li><?php if(isset($_SESSION["patient_id"])){ ?>
											  <a href="/yourheart'ssight/assets/users/doctors.php" >
											  Doctors </a>
                                              <?php } else{ ?>
                                              <a href="/yourheart'ssight/index.php" >
                                              Doctors </a>
                                              <?php } ?> </li>
												
												<li><?php if(isset($_SESSION["patient_id"])){ ?>
													<a href="/yourheart'ssight/assets/users/contactus.php">Q&A</a>
													<?php } else{ ?>
														<a href="/yourheart'ssight/index.php" >
														Q&A</a>
                                              <?php } ?> </li>
												</li>
											</ul>
										</div>
										<div class="col-md-4 mb-md-0 mb-4">
											<div id="nav-resources">
												<h2 class="footer-heading">Resourses</h2>
												<ul class="list-unstyled">
													
													<li><a href="/yourheart'ssight/assets/users/idex.php">Health
															Information</a></li>
													<li><a href="/yourheart'ssight/assets/users/index.php">Blog</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-4 mb-md-0 mb-4">
											<div id="nav-about">
												<h2 class="footer-heading">About</h2>
												<ul class="list-unstyled">
												<li><?php if(isset($_SESSION["patient_id"])){ ?>
											  <a href="/yourheart'ssight/assets/users/contactus.php" >
											  Contact Us </a>
                                              <?php } else{ ?>
                                              <a href="/yourheart'ssight/index.php" >
											  Contact Us </a>
                                              <?php } ?> </li>
													
													<li><a
															href="https://www.facebook.com/Your-Hearts-Sight-101389565974728/">facebook</a>
													</li>
													<li><a
															href="https://instagram.com/yourheartssight?igshid=YmMyMTA2M2Y=">Instagram</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</footer>
</body>

</html>