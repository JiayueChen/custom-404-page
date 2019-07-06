<?php 
$baseUrl = "http://" .$_SERVER["HTTP_HOST"]; // http://localhost

$pieces = explode("/", $_SERVER["REQUEST_URI"]); // array

$projectName = $pieces[1];

unset($pieces[0],$pieces[1]);

$gibberish = implode("/", $pieces);

$cssPath = "{$baseUrl}/{$projectName}/css/style.css";
$homepagePath = "{$baseUrl}/{$projectName}";
$imgPath = "{$baseUrl}/{$projectName}/img";

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Error Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=DM+Serif+Display|Hind+Siliguri&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $cssPath ?>">
</head>

<body class="page-404">
	
	<div class="outer">
		<div class="box">
			<img src="<?php echo $imgPath ?>/monster.png">
		</div>
		<div class="box">
			<h1>404 NOT FOUND</h1>
			<h4>Oops! Our secret monster hide your page.</h4>
			<p>We couldn't find the page: <?php echo $gibberish ?></p>
			<a href="<?php echo $homepagePath; ?>">get back to my homepage</a>
		</div>
	</div>
	
	
</body>

</html>
