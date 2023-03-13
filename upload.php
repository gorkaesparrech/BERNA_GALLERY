
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
  if (isset($_SESSION['id_usuario'])){
    ?>
<section class="container-lg mt-5 text-light bg-secondary rounded-3 recuadro">
  
<form action="" method="post" enctype="multipart/form-data">
  <label for="dname" class="text-light">Document name:*</label><br>
  <input type="text" name="dname" name="dname" required><br>
  <br>

  <p>Tipo de documento*</p>
   <select name="tipo" id="tipos" required>
        <option value="foto">foto</option>
        <option value="video">video</option>
  </select>
  <br><br>
  <p>Estado*</p>
   <select name="estado" id="estado" required>
        <option value="visible">visible</option>
        <option value="no visible">no visible</option>
  </select>
  <br><br><br>
  <p>Seleccciona la imagen para subirla:*</p>
  <input class="form-control lg-secondary login boton" type="file" id="formFile" name="img" multiple=””><p></p>
  <input type="submit" value="Upload Image" name="submit" class="btn btn-secondary">
  
  
  <br>
  <br>
  <p>Camps obligatoris *</p>
</form>
<?php

// Include the database configuration file
require_once ("assets/objetos/connection.php");
$statusMsg = 'Please select a file to upload.';
if(isset($_POST["submit"])){
$nombreArchivo = $_POST["dname"];
$tipodeArchivo = $_POST["tipo"];
$estadoDeArchivo = $_POST["estado"];

// File upload path
$targetDir = "assets/images/uploads/";
$fileName = basename($_FILES["img"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$targetNewPath=$targetDir.$nombreArchivo.".".$fileType;

if(isset($_POST["submit"]) && !empty($_FILES["img"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf','mp4','mov');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["img"]["tmp_name"], $targetNewPath)){
            // Insert image file name into database
            $insert = $connexio -> query("INSERT into contenido VALUES ( null,'$tipodeArchivo','$nombreArchivo.$fileType','$estadoDeArchivo')");
            if($insert){
                $statusMsg = "The file ".$nombreArchivo.".".$fileType. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}
}
// Display status message
echo $statusMsg;

?>
</section>
</body>


<?php 
    require_once ("footer.php");
?>
<?php 
    require_once ("footer.php");
}
?>

</html>