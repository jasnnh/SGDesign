<?php
require("config.php");
$referral = $_GET["referral"];
?>

<html>
<head>
<title>Sacred Guardians Mobile</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/main.js"></script>
<script>
</script>
</head>
<body>


<div id="screen_container">
<div id="bg"></div>
<div id="logo"></div>
<div id="side"></div>
<div id="register">
<div class="container">
<form method="POST" action="reg.php">
<input type="text" name="gift" placeholder="Gift Code">
<input type="submit" name="submit" value="claim!">
</form>

<table>
<tr>
<td><a href="<?php echo $home; ?>">home</a></td><td><a href="<?php echo $register; ?>">register</a></td><td><a href="<?php echo $gallery; ?>">gallery</a></td><td><a href="<?php echo $discord; ?>">discord</a></td><td><a href="<?php echo $download; ?>">download</a></td>
</tr>
</table>


</div>
</div>
</div>
<div id="social"></div>
<div id="platform"></div>
</body>
</html>