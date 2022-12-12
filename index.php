<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//ES">
<html>
<head>
    <title>BernaGallery</title>
    <meta charset="UTF-8">
    <meta name="description" content="Web exemple">
    <meta name="keywords" content="HTML5,CSS3, WEB">
    <meta name="author" content="Mohammed Fariat">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/hoja_estilo.css" rel="stylesheet" type="text/css" media="screen">

</head>


<body class="bg-dark">
  
<?php 
  include ("header.php");
?>

<section class="container-lg mt-5">
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel"  >
  <div class="carousel-inner lol" style="  height: 480px !important; margin-top:8%; margin-bottom:8%;">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="assets\images\img1.jpg" class="d-block w-100" alt="img1">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="assets\images\images.png" class="d-block w-100" alt="img2">
    </div>
    <div class="carousel-item">
      <img src="assets\images\images (1).jpg" class="d-block w-100"  alt="img3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
</body>

<?php 
    include "footer.php";
?>
<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>