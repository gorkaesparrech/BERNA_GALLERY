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


<body class="bg-dark ">

<?php 
    include ("header.php");
    include ("assets/objetos/bernaDAO.php");
?>

<?php 
?>

<section class="container-lg mt-5">
  
  <div >
      
      <div class="my-5" >
        <div class="formulario bg-secondary text-light rounded-3 px-5  py-4">
          <h2 class="text-center mb-5 fs-1">Registrar-se</h2>
          <form action="registro.php" method="post">
            <div class="mb-3 row">
              <label for="nom" class="col-sm-2 col-form-label">Nom*</label>
              <div class="col-sm-10 mb-3">
                <input type="text" class="form-control" id="nom" name="nom" required>
              </div>
              <label for="cognom" class="col-sm-2 col-form-label">Cognom*</label>
              <div class="col-sm-10 mb-3">
                <input type="text" class="form-control" id="cognom" name="cognom" required>
              </div>
              <label for="staticEmail" class="col-sm-2 col-form-label">Email*</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="staticEmail" name="staticEmail" required>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label pr-5">Contrasenya*</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" name="inputPassword" required>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="inputPassword2" class="col-sm-2 col-form-label">Repeteix contrasenya*</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword2" name="inputPassword2" required>
              </div>
            </div>
            <p >*Camps oblitatoris</p>
            <input class="btn btn-secondary" type="submit" value="Registrar-se" name="Registrar-se"><div class="my-2"><p><br>Ja tens compte? <a href="registrar-login.php">Inicia sessió</a></p></div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <div class="text-light" >
<?php
if (isset($_POST["Registrar-se"])) {
  try {
      $nombre = $_POST['nom'];
      $apellido = $_POST['cognom'];
      $mail = $_POST['staticEmail'];
      $password = $_POST['inputPassword'];
      $password2 = $_POST['inputPassword2'];
      if($password == $password2){
        bernaDAO::register($mail, $password);
        echo "<script>alert('El usuario ha sido creado')</script>";
        header('Location:registrar-login.php');
        exit();
      }else{
        echo "<script>alert('Las contraseñas no coinciden')</script>";
      }
  }catch(Exception $e) {
    echo "<script>alert('Error al guardar el usuario: " . $e->getMessage() . "')</script>";
  }
}
?>
  </div>
  <?php
include 'footer.php'; ?>