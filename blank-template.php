 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" type="text/css">
<meta name="Author" content="YOUR NAME HERE">
<meta name="Keywords" content="KEYWORD1, KEYWORD2, KEYWORD3">
<meta name="Description" content="BRIEF DESCRIPTION OF PAGE HERE.">
<title>TITLE HERE</title>
</head>
<body>

<div id="banner">
<img src="images/xyzlogo.gif" alt="XYZ, Inc. logo">
</div>

<div id="menu">
<a href="index.php">Home</a> |
<a href="sitemap.php">Sitemap</a> |
<a href="products.php">Products</a> |
<a href="contact.php">Contact Us</a>
</div>

<div id="content">
CONTENT HERE
</div>

<div id="footer">
Last revised:
<?php
putenv("TZ=America/Los_Angeles");
echo date("m/d/y", filemtime($_SERVER["SCRIPT_FILENAME"]));
?>
</div>

</body>
</html>
