	<?php
		$tijdzone = ("Europe/Amsterdam");
		date_default_timezone_set($tijdzone);
		$tijd = date('H:i');

		if ($tijd >  "06:00" && $tijd < "12:00"){
			echo '<p class="tijdstip">Goedemorgen!</p>';
			echo '<p class="tijd">Het is nu '.$tijd.'</p>';
			echo '<body style="background-image: url(./backgrounds/morning.png)"';
		}
		elseif ($tijd >  "12:00" && $tijd < "18:00"){
			echo '<p class="tijdstip">Goede Middag!</p>';
			echo '<p class="tijd">Het is nu '.$tijd.'</p>';
			echo '<body style="background-image: url(./backgrounds/afternoon.png)"';
		}	
		elseif ($tijd >  "18:00" && $tijd < "00:00"){
			echo '<p class="tijdstip">Goede Avond!</p>';
			echo '<p class="tijd">Het is nu '.$tijd.'</p>';
			echo '<body style="background-image: url(./backgrounds/evening.png)"';
		}
		elseif ($tijd >  "00:00" && $tijd < "06:00"){
			echo '<p class="tijdstip">Goede Nacht!</p>';
			echo '<p class="tijd">Het is nu '.$tijd.'</p>';
			echo '<body style="background-image: url(./backgrounds/night.png)"';
		}

	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Hoe laat is het?</title>
</head>
<body>

</body>
</html>