<?php include 'header.php';?>

		<!-- Banner -->
			<section id="banner" class="enterprise-banner">

				<!--
					".inner" is set up as an inline-block so it automatically expands
					in both directions to fit whatever's inside it. This means it won't
					automatically wrap lines, so be sure to use line breaks where
					appropriate (<br />).
				-->
				<div class="inner">

					<header>
						<h2>Enterprise</h2>
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
							<h2>Cut costs and ensure profit margins</h2>
						</header>

						<p style="text-align:justify">Fiex created an innovative tech based mechanism that simplifies and decreases major costs associated with international payments. </p>
						<span style="text-align:left">
							<p>Fiex recognizes that companies have twofold needs in regards to cross-border transactions: <br>						
							- International payments in relation to employees working overseas <br>
							- Expensive international fees related to B2B payments </p>
							

							<p>Fiex fulfills these needs by <br>
							- Efficient and simple user interfaces via our mobile and web Fiex platform for both partners and employers to utilize in transferring money abroad <br>
							- Utilizing our secure mechanism to cut out all extraneous costs unrelated to the direct payment i.e. bank and other third party fees on international payments, etc... </li>
							</ol>
						</span>

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