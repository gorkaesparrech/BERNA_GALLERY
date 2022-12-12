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
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" media="screen">

</head>


<body class="bg-dark">
  
<?php 
  include ("header.php");
?>

<section class="container-lg mt-5 text-light bg-secondary rounded-3 recuadro">
  
<form action="bernatelferrer@gmail" method="post" enctype="multipart/form-data">
  <label for="dname" class="text-light">Document name:*</label><br>
  <input type="text" id="dname" name="dname" required><br>
  <br>

  <p>Tipo de documento*</p>
  <input type="radio" id="photo" name="fav_language" value="Photo" required>
  <label for="photo">Foto</label><br>
  <input type="radio" id="video" name="fav_language" value="Video" required>
  <label for="video">Video</label><br>
  <br>

  <p>Seleccciona la imagen para subirla:*</p>
  <input class="form-control lg-secondary login boton" type="file" id="formFile" >
  <input type="submit" value="Upload Image" name="submit" class="btn btn-secondary">

  <br>
  <br>
  <p>Camps obligatoris *</p>
</form>
</section>
</body>

<?php 
    require_once ("footer.php");
?>

</html>