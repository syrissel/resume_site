<?php /*
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
 */?>

<!doctype html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="styles.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" media="(max-width:600px)" href="styles_small.css" />
	<link rel="stylesheet" media="(min-width:601px)" href="styles_large.css" />
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Turret+Road&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="background">
		<div class="container">
			<?php include'nav.php'; ?>

			<div id="info">
				<h2>TEST</h2>
			</div>
		</div>
		</div>

		<script>
		function myFunction() {
			var x = document.getElementById("menu_items");
			if (x.style.display === "block") {
			x.style.display = "none";
			} else {
			x.style.display = "block";
			}
		} 
		</script>
	</body>
</html>
