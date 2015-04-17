<?php include 'header.php';?>

		<!-- Banner -->
			<section id="banner" class="home-banner">

				<!--
					".inner" is set up as an inline-block so it automatically expands
					in both directions to fit whatever's inside it. This means it won't
					automatically wrap lines, so be sure to use line breaks where
					appropriate (<br />).
				-->
				<div class="inner">

					<header>
						<h2>Sign up</h2>
					</header>
					<p>Fiex is still under development. <br>
						Sign up with your email to be notified <br>
						when we release. </p>
					<footer>
						<form method="post" action="signup_submit.php">
							<p>Name: <input type="text" name="Name" size="20" class="white-border"></p>
							<p>Email: <input type="text" name="Email" size="20" class="white-border"></p>
							<br>
							<p><input class="full-width" type="submit" value="Submit" name="Submit"></p>
						</form>
					</footer>

				</div>

			</section>

<?php include 'footer.php';?>
