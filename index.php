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
	<script type="text/javascript" src="styles.js"></script>
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
				<div class="paragraph">
					<h3>Title</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque elit sit amet accumsan blandit. Nunc tempor sapien vitae odio ornare, et ullamcorper metus convallis. Fusce tristique euismod lectus non pellentesque. Suspendisse potenti. Suspendisse potenti. Ut quam diam, suscipit ac volutpat sed, efficitur a nisl. Morbi ut lacus nec ligula porttitor ullamcorper et eu metus. Nunc neque nunc, varius sit amet facilisis a, bibendum sit amet felis. Aliquam dolor nisl, varius a varius eu, rhoncus quis turpis. Quisque vel mauris dignissim, tincidunt velit id, vulputate odio. Fusce cursus felis erat, eget gravida turpis efficitur a. </p>
				</div>
				<div class="paragraph">
					<h3 id="click_me">Title</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque elit sit amet accumsan blandit. Nunc tempor sapien vitae odio ornare, et ullamcorper metus convallis. Fusce tristique euismod lectus non pellentesque. Suspendisse potenti. Suspendisse potenti. Ut quam diam, suscipit ac volutpat sed, efficitur a nisl. Morbi ut lacus nec ligula porttitor ullamcorper et eu metus. Nunc neque nunc, varius sit amet facilisis a, bibendum sit amet felis. Aliquam dolor nisl, varius a varius eu, rhoncus quis turpis. Quisque vel mauris dignissim, tincidunt velit id, vulputate odio. Fusce cursus felis erat, eget gravida turpis efficitur a. </p>
				</div>
			</div>
		</div>
		</div>
	</body>
</html>
