<header class="header stricky">
	<div class="containerFull">
		<div class="inlineHeader d-flex align-items-center justify-content-between">
			<div class="leftLogo">
				<a href="index.php">
					<picture>
						<source srcset="images/logo.webp" type="image/webp" />
						<img src="images/logo.png" />
					</picture>
				</a>
			</div>
			<div class="rightMenu">
				<ul class="d-none d-md-flex	">
					<li class="<?php if ($page == 'home') {
									echo 'active';
								} ?>"><a href="index.php">Home</a></li>
					<li class="<?php if ($page == 'about') {
									echo 'active';
								} ?>"><a href="#">About</a></li>
					<li class="<?php if ($page == 'search') {
									echo 'active';
								} ?>"><a href="#">Search</a></li>
					<li class="<?php if ($page == 'pricing') {
									echo 'active';
								} ?>"><a href="#">Pricing</a></li>
					<li class="<?php if ($page == 'contact') {
									echo 'active';
								} ?>"><a href="#">Contact</a></li>

				</ul>


			</div>


			<div class="rightBtns d-flex align-items-lg-center">
				<a href="login.php" class="btnTheme2 mx-2"><span>Login </span></a>
				<a href="index.php" class="btnTheme mx-2"><span>Register </span></a>
			</div>



			<button class="btnMenu d-block d-md-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa fa-bars"></i></button>
		</div>
	</div>
</header>





<div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header">
		<div class="leftLogo ">
			<a href="index.php">
				<picture>
					<source srcset="images/logo.webp" type="image/webp" />
					<img src="images/logo.jpg" />
				</picture>
			</a>
		</div>
		<h5 id="offcanvasRightLabel">&nbsp;</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<div class="d-md-none">
			<ul>

			</ul>
			<hr>
		</div>

	</div>
</div>