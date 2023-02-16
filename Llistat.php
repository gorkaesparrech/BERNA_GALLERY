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
require_once ("connection.php");
  include ("header.php");
 
?>


<h1 style="color:white;">Listado de Contenido</h1>
<table class="espacio_tabla" style="width:80%; border-style: solid; color:white;">

<tr>
  <th>Archivo</th>
  <th>ID</th>
  <th>Tipo de Archivo</th>
  <th>Titulo</th>
  <th>Estado</th>
</tr>  
<?php 

  $rows = array();
  $sql = "SELECT * FROM contenido";
  $result = $connexio->query($sql);
  while($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
}
  $i=0;
  while($i<count($rows)){
    ?>
  
  <tr>

    <td> <?php if ($rows[$i]['tipo_contenido']=='foto') {?>
    
  <img src="assets/images/uploads/<?php echo $rows[$i]['nombre_de_archivo'] ?>"  style=" height:70px; width:auto; object-fit: contain;
  position: relative;">

  <?php }else{?>
    
 



    <video class="img-fluid" style=" height:70px; width:auto; object-fit: contain;
  position: relative; margin:auto; padding:auto;" autoplay loop muted>
            <source src="assets/images/uploads/<?php echo $rows[$i]['nombre_de_archivo'] ?>" type="video/mp4" />
  

</div>
  <?php } ?>
</td>
    <td><?php echo $rows[$i]['ID']?></td>
    <td><?php echo $rows[$i]['tipo_contenido']?></td>
    <td><?php echo $rows[$i]['nombre_de_archivo']?></td>
    <td><?php echo $rows[$i]['estado_de_archivo']?></td>
  </tr>
  <?php
  $i++; 
}
  ?>


 
</table>

</body>

<?php 
    include "footer.php";
?>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</html>