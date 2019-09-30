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
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet"> 
	</head>
	<body>
		<div id="container">
		<header>
			<nav>
			<h2>Stephane Mireault</h2>
				<div class="table">
					<ul>
						<li><a href="#">About</a></li>
						<li><a href="#">Experience</a></li>
						<li><a href="#">GitHub</a></li>
					</ul>
				</div>
			</nav>
		
		</header>
		</div>
		
	</body>
</html>
