<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="css/ResponsiveTopNavDropdown.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/doubletaptogo.min.js" type="text/javascript"></script>
    <script src="js/toggleNav.js" type="text/javascript"></script>
    <title><?php echo($title); ?> | Her2O</title>
</head>

<body>
    <header>
        <a class="logo" href="index.php">
            <img src="images/logo.jpg" alt="Her2O logo, featuring a butterfly">
        </a>
         <div id="toggleNav" align="center"><a onclick="toggleNav()"><img src="images/hamburger-icon.png" alt="Hamburger Icon indicating where to click to access the mobile dropdown menu"></a></div>
        <?php include('includes/nav.html'); ?>
    </header>