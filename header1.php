
  <header >
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary ">
      <div class="container-lg " >
        <a class="navbar-brand fw-bold fs-3 me-5 " href="index.php" >BernaGallery</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item my-1">
              <a class="nav-link btn btn-outline-primary px-md-3 me-md-2" href="cursos_especialitzats.php">Cursos especialitzats</a>
            </li>
            <li class="nav-item my-1">
              <a class="nav-link btn btn-outline-primary px-md-3 me-md-2" href="registrar-login.php">Registrar-se o iniciar sessió</a>
            </li>
            <?php if (isset($_SESSION['id_usuario'])){ ?>  
              <li class="nav-item my-1">
              <form action="index.php" method="post" enctype="multipart/form-data">
              <button class="nav-link btn btn-outline-primary px-md-3 me-md-2"  type="submit" id="logout" name="logout" value="logout">Tancar sessió </button>
            </form>
            
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
    
  </header>



