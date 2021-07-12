<?php
    $replaceString = "";
    $uri = ($_SERVER['REQUEST_URI']);
    if ((strpos($uri, 'people') !== false) or (strpos($uri, 'places') !== false) or (strpos($uri, 'progress') !== false)) {
        $replaceString = "../";
    } ?>
    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title><?php echo($title); ?> | Cool QC</title>
<link href="<?php echo($replaceString); ?>ResponsiveTopNavDropdown.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo($replaceString); ?>doubletaptogo.min.js" type="text/javascript"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700&display=swap" rel="stylesheet">
<!--[if IE]>
	<script src="picturefill.min.js" async="async"></script>
<![endif]-->
<!--[if lt IE 9]>
	<script src="dist/html5shiv.js"></script>
<![endif]-->
</head>

<body>
	<div class="container">
        <header class="site-header">
            <p class="center"><img src="<?php echo($replaceString); ?>images/cool-qc-logo.png" alt="Logo that says Cool QC Quad Cities with different shades of blue making a wheel inside of the Q of QC" /></p>
            <nav id="nav">
                <!--placeholder so you have the code - turn this into a PHP include-->
                <a href="#nav" title="Show navigation"><img src="<?php echo($replaceString); ?>images/hamburger-icon.png" style="vertical-align:middle;" alt="Icon with three lines that indicates that clicking it will open the website navigation" /> Show Menu</a>
                <a href="#" title="Hide navigation"><img src="<?php echo($replaceString); ?>images/hamburger-icon.png" style="vertical-align:middle;" alt="Icon with three lines that indicates that clicking it will hide the website navigation" /> Hide Menu</a>
                <ul>
                    <li><a href="<?php echo($replaceString); ?>index.php">Home</a></li>
                    <li><a href="<?php echo($replaceString); ?>about.php">About</a></li>
                    <li><a href="<?php echo($replaceString); ?>stories.php">Stories</a></li>
                    <li><a href="<?php echo($replaceString); ?>people">People</a></li>
                    <li><a href="<?php echo($replaceString); ?>places">Places</a></li>
                    <li><a href="<?php echo($replaceString); ?>progress">Progress</a></li>
                    <!--<li><a href="<?php echo($replaceString); ?>#">Events</a></li>-->
                    <li><a href="<?php echo($replaceString); ?>contact.php">Contact</a></li>
                </ul>
                <script>
                    $( function()
                    {
                        $( '#nav li:has(ul)' ).doubleTapToGo();
                    });
                </script>
            </nav>
        </header>