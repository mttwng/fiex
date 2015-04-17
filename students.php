<?php include 'header.php';?>

		<!-- Banner -->
			<section id="banner" class="student-banner">

				<!--
					".inner" is set up as an inline-block so it automatically expands
					in both directions to fit whatever's inside it. This means it won't
					automatically wrap lines, so be sure to use line breaks where
					appropriate (<br />).
				-->
				<div class="inner">

					<header>
						<h2>Students</h2>
					</header>

				</div>

			</section>

		<!-- Main -->
			<article id="main">

				<header class="container">
					<hr>
				</header>

				<!-- One -->
					<section class="wrapper style3 container special">
						<header class="major">	
							<h2>Pay tuition and expenses with just one click</h2>
						</header>

						<p style="text-align:justify">	
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>

					</section>


				<!-- Two -->
					<section class="wrapper style2 container special-alt">
						<div class="row 50%">
							<div class="8u 12u(narrower) -2u">

								<header>
									<h2>How much can you save?</h2>
								</header>

								<form name="convert">

									Convert USD to:
									<div class="styled-select">
										<select id="conversionType">
										    <option value="chinese">Chinese Yuan</option>
										    <option value="japanese">Japanese Yen</option>
										    <option value="korean">Korean Won</option>
										</select>
									</div>
									<br>
									Send ($USD): <input id="amount" type="text" />
									<br>
									Receive: <input id="answer" type="text" name="answer" readonly="readonly"/>
									<br>
									<input id="convertButton" type="button" value="Convert"/>


								</form>


							</div>
						</div>
					</section>

			</article>


<?php include 'footer.php';?>