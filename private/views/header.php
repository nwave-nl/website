<?php
$css = "main.css";
if($_SERVER['REQUEST_URI'] == "/") {
	$css = "public/css/home.css";
} else {
	if(strpos($_SERVER['REQUEST_URI'], "?")) {
		$css = "public/css/" . str_replace("/", '', substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], "?"))) . ".css";
	} else {
		$css = "public/css/" . str_replace("/", '', $_SERVER['REQUEST_URI']) . ".css";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo getTitle(); ?></title>
	<meta charset="utf-8"/>
	<meta name="description" content="<?php echo getDescription(); ?>">
	<meta name="keywords" content="<?php echo getKeywords(); ?>">
	<meta name="author" content="<?php echo getAuthor(); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<link rel="stylesheet" href="public/css/main.css">
	<link rel="stylesheet" href="<?php echo $css; ?>">
</head>
<body>
