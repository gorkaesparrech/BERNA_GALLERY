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
    require_once ("header.php");
    require_once ("assets/objetos/bernaDAO.php");
?>

<?php 
    


?>

<section class="container-lg mt-5">
  
  <div class="row">
    
      <div class="col-sm-12 col-md-16 my-5" >
        <div class="formulario bg-secondary text-light rounded-3  px-5  py-4">
          <h2 class="text-center mb-5 fs-1">Inicia sessió</h2>
          <form action="registrar-login.php" method="post">
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Email*</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="staticEmail" name="staticEmail" required>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label mw-300">Contrasenya*</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" name="inputPassword" required>
              </div>
            </div>
            <p>*Camps oblitatoris</p>
            <input class="btn btn-secondary" type="submit" value="LOG IN" name="inicio">
            <p><br> No tens compte? <a href="registro.php">Regístra't</a></p>
          </form>
        </div>
      </div>
  </div>
</section>
</body>
<div class="text-light" >
<?php 
                    
try {
    if (isset($_POST["inicio"])) {
        $password = $_POST['inputPassword'];
        $mail = $_POST['staticEmail'];
        $login = bernaDAO::getLogInfo($mail);
        $correoDB = $login['mail'];
        $contraComparar = $login['user_password'];
        if(password_verify($password ,$contraComparar)) {
            echo "<script>alert('Sesión iniciada')</script>";
            $_SESSION['mail'] = $correoDB;
            $id = $login['ID'];
            $_SESSION['id_usuario'] = $id;
            var_dump($id );
            var_dump($_SESSION['id_usuario'] );
            header('Location:index.php');
            exit();
        } else {
            echo "<script>alert('Inicio de sesión fallido')</script>";
        }
    }
} catch (Exception $e) {
    // Manejo de la excepción
}

?>
 </div>
<?php
    include 'footer.php';
?>