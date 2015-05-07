<!-- Calculator -->
<section class="wrapper style2 container special-alt">
	<div class="row 50%">
		<div class="8u 12u(narrower) -2u">

			<header>
				<h2 style="margin-bottom:0.45em;">How much can you save?</h2>
			</header>

			<form name="convert">
				<i style="color: #777">Customers save an average of $39 per transaction versus a bank</i>
				<br>
				<br>
				Send:
				<div class="styled-select">
					<select id="conversionType">
					    <option value="dollar">US Dollar</option>
					    <option value="yuan">Chinese Yuan</option>
					    <option value="yen">Japanese Yen</option>
					    <option value="won">Korean Won</option>
					</select>
				</div>
				<br>
				Receive:
				<div class="styled-select">
					<select id="conversionTo">
					    <option value="yuan">Chinese Yuan</option>
					    <option value="yen">Japanese Yen</option>
					    <option value="won">Korean Won</option>
					    <option value="dollar">US Dollar</option>
					</select>
				</div>
				<br>
				Amount: <input id="amount" class="amounts" type="text" placeholder="0.00"/>
				<br>
				Receive: <input id="answer" class="amounts" type="text" placeholder="0.00" name="answer" readonly="readonly"/>
				<br>
				<input id="convertButton" type="button" value="Convert"/>

			</form>


		</div>

	</div>
</section>