<?php require_once(__DIR__.'/../vendor/autoload.php'); ?>
<html>
    <head>
        <title>Test Project</title>
    </head>
    <body>
        <h1><?php
		$date = new Flatnine\FriendlyTime();
		echo $date->getFriendlyTime();
        ?></h1>
    </body>
</html>

