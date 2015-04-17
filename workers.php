<?php include 'header.php';?>

		<!-- Banner -->
			<section id="banner" class="worker-banner">

				<!--
					".inner" is set up as an inline-block so it automatically expands
					in both directions to fit whatever's inside it. This means it won't
					automatically wrap lines, so be sure to use line breaks where
					appropriate (<br />).
				-->
				<div class="inner">

					<header>
						<h2>Workers</h2>
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
							<h2>Send money home with a 100% safety guarantee</h2>
						</header>

						<p style="text-align:justify">	
							Fiex’s team knows from personal experience how important it is to send our hard earned money to our mother, grandfather, mother, or anyone back home. That’s why, the amount of work we have put into securing your money makes us extremely confident in our ability to safely send your money home. In fact, Fiex is so confident, that if anything happens to your money, we pledge to take money out of our own pockets to send to your family at no extra cost to you.
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