<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= isset($title) ? $title : '' ?></title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body class="<?= isset($body_class) ? $body_class : '' ?>">
	<?php include('partials/nav.php') ?>