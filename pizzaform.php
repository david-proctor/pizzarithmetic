		<h2>
			Do some Pizzarithmetic&trade;
		</h2>
		
		<center>
		<?php
			// Random image on homepage
			$number = rand(1,7);
			switch($number){
				case 1:
					echo '<img src="images/breakingbadpizza.gif" alt="Walter would feel better if he ate that pizza" title="Walter would feel better if he ate that pizza" />';
					break;
				case 2:
					echo '<img src="images/homerpizza.gif" alt="I wish I could bury myself in pizza too" title="I wish I could bury myself in pizza too" />';
					break;
				case 3:
					echo '<img src="images/pizzadog.gif" alt="I would eat this dog" title="I would eat this dog" />';
					break;
				case 4:
					echo '<img src="images/pizzavinyl.gif" alt="This is not good for your pizza or your turntable" title="This is not good for your pizza or your turntable" />';
					break;
				case 5:
					echo '<img src="images/spacepizza.gif" alt="In space nobody can hear your stomach rumble. (for pizza)" title="In space nobody can hear your stomach rumble. (for pizza)" />';
					break;
				case 6:
					echo '<img src="images/arrestedpizza.gif" alt="pizza. the final fronteir" title="pizza. the final fronteir" />';
					break;
				case 7:
					echo '<img src="images/eternalpizza.gif" alt="I wish I knew how to bake a recursive pizza" title="I wish I knew how to bake a recursive pizza" />';
					break;
				default:
					echo '<img src="images/whoops.gif" alt="We done goofed. This number was generated: ' + number + '" title="We done goofed. This number was generated: ' + number + '" />';
			}
		?>
		</center>
		
		<p>
			Find out how much pizza you need the cheap and easy way - the PIZZARITHMETIC way!
		</p>
		
		<form name="pizzamath">
		
			<p>
				How many boys eating pizza?<br />
				<input type="button" name="dp" value="+" onclick="mod(1, 1)" />
				<span id="dudes">0</span>
				<input type="button" name="dm" value="-" onclick="mod(1, -1)" />
			</p>
		
			<p>
				How many gilrs eat the pizza?<br />
				<input type="button" name="cp" value="+" onclick="mod(2, 1)" />
				<span id="ladies">0</span>
				<input type="button" name="cm" value="-" onclick="mod(2, -1)" />
			</p>
			
			<input type="button" name="go" value="Do that pizzarithmetic!" onclick="secret_algorithm()" />
			<p id="output">Enter your pizza problem above!</p>
		</form>
