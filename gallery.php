
<?php
require("config.php");
?>

<html>
<head>
<title>Sacred Guardians Mobile</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/gallery.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/gallery.js"></script>
<script>
</script>
</head>
<body>


<div id="screen_container">

<div id="bg"></div>
<div id="logo"></div>
<div id="side"></div>
<div id="social"></div>
<div id="home_platform"></div>
<div id="gallery">
<center>
<div class="container">
<!-- Images used to open the lightbox -->
<div class="row">
  <div class="column">
    <img src="ss.png" width="300" height="150" onclick="openModal();currentSlide(1)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="ss.png" width="300" height="150" onclick="openModal();currentSlide(2)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="ss.png" width="300" height="150" onclick="openModal();currentSlide(3)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="ss.png" width="300" height="150" onclick="openModal();currentSlide(4)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="ss.png" width="300" height="150" onclick="openModal();currentSlide(4)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="ss.png" width="300" height="150" onclick="openModal();currentSlide(4)" class="hover-shadow">
  </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="ss.png" style="width:100%;height:500px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="ss.png" style="width:100%;height:500px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="ss.png" style="width:100%;height:500px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="ss.png" style="width:100%;height:500px;">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" style="position:absolute;left:0px;" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->
    <div class="column">
      <img class="demo" src="ss.png" onclick="currentSlide(1)" alt="Nature">
    </div>

    <div class="column">
      <img class="demo" src="ss.png" onclick="currentSlide(2)" alt="Snow">
    </div>

    <div class="column">
      <img class="demo" src="ss.png" onclick="currentSlide(3)" alt="Mountains">
    </div>

    <div class="column">
      <img class="demo" src="ss.png" onclick="currentSlide(4)" alt="Lights">
    </div>
  </div>
</div>

</br>
<table>
<tr>
<td><a href="<?php echo $home; ?>">home</a></td><td><a href="<?php echo $register; ?>">register</a></td><td><a href="<?php echo $gallery; ?>">gallery</a></td><td><a href="<?php echo $discord; ?>">discord</a></td><td><a href="<?php echo $download; ?>">download</a></td>
</tr>
</table>

</div>

</div>
</div>
</center>

</body>
</html>