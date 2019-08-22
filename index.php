
<?php
require("config.php");
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
<div id="home">
<div class="container">

<table class="tftable" border="0">
<tr>
<th>subject</th><th>body</th><th>date</th>
</tr>
<tr>
<td>release</td><td>so it's been awhile and the release has been delayed a few ...</td><td>4/1/19</td>
</tr>
<tr>
<td>code rework</td><td>most of the code has been rewritten to be more stable the ...</td><td>4/1/19</td>
</tr>
</tr>
<tr>
<td>nerfs</td><td>here comes the very first nerfs ...</td><td>4/1/19</td>
</tr>
</table>
</br>
<table class="gallery">
<tr>
<td><img src="gallery/ss.png" width="150" height="80"></td>
<td><img src="gallery/ss.png" width="150" height="80"></td>
<td><img src="gallery/ss.png" width="150" height="80"></td>
</tr>
</table>

</br>
<table>
<tr>
<td><a href="<?php echo $home; ?>">home</a></td><td><a href="<?php echo $register; ?>">register</a></td><td><a href="<?php echo $gallery; ?>">gallery</a></td><td><a href="<?php echo $discord; ?>">discord</a></td><td><a href="<?php echo $download; ?>">download</a></td>
</tr>
</table>

</div>
</div>
</div>

<video autoplay muted loop>
  <source src="video.mp4" type="video/mp4" />
</video>

<div id="social"></div>
<div id="home_platform"></div>
</body>
</html>