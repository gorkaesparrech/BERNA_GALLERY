
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


<body class="bg-dark" style="color:white">
  
<?php 
require_once ("connection.php");
  include ("header.php");
  $rows = array();
  $sql = "SELECT * FROM contenido where estado_de_archivo='visible'";
  $result = $connexio->query($sql);
  while($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
}


  
?>

<section class="container-lg mt-5 " style="color:white">
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel"  >
  <div class="carousel-inner lol" style="   !important; margin-top:8%; margin-bottom:8%;">
  <?php if ($rows[0]['tipo_contenido']=='foto') {?>
    <div class="carousel-item active" data-bs-interval="10000">
  <img src="assets/images/uploads/<?php echo $rows[0]['nombre_de_archivo'] ?>" class="d-block w-100" style=" height:600px; width:auto; object-fit: contain;
  position: relative;">
</div>
  <?php }else{?>
    
 


<div class="carousel-item active" data-bs-interval="10000">
    <video class="img-fluid" autoplay loop muted>
            <source src="assets/images/uploads/<?php echo $rows[0]['nombre_de_archivo'] ?>" type="video/mp4" />
    </video>

</div>
  <?php } ?>
  
  <?php 
  
  $i=1;
  while($i<count($rows)){
     if ($rows[$i]['tipo_contenido']=='foto') {
    ?>
    
    <div class="carousel-item" data-bs-interval="10000">
      <img src="assets/images/uploads/<?php echo $rows[$i]['nombre_de_archivo'] ?>" class="d-block w-100" style=" height:600px; width:auto; object-fit: contain;
  position: relative;"/>
    </div>
    <?php 
     }else{?>

<div class="carousel-item" data-bs-interval="10000">
    <video class="img-fluid d-block w-100" style=" height:600px; width:auto; object-fit: contain;
  position: relative;" autoplay loop muted>
            <source src="assets/images/uploads/<?php echo $rows[$i]['nombre_de_archivo'] ?>" type="video/mp4" />
    </video>

</div>
    
<?php }  $i++;  }?>
 


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
<?php 
    include "footer.php";
  
?>
</body>


<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>