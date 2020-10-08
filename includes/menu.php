<nav class="navbar  navbar-expand-sm navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php" style="font-size: 130%;">El Salvador</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="catEN.php">Categories</a>
      </li>
 
      
      <?php session_start(); 

      if(isset($_SESSION['usuario'])){
        echo "
        <li class='nav-item'>
              <a class='nav-link' href='cerrarSesion.php'>Log Out</a>
        </li>
        ";

        if(isset($_SESSION['rolid']) && $_SESSION['rolid'] == 1){
          echo"
          <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            Manage
          </a>
          <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                <a class=\"dropdown-item\"  href=\"addSites.php\">Add Sites</a>
                <a class=\"dropdown-item\" href=\"PAQUETEen/paquete.html\">Create Package</a>
                <a class=\"dropdown-item\" href=\"editSitios.php\">Modify Sites</a>
                <a class=\"dropdown-item\" href=\"editCats.html\">Create Category</a>
         </div>
          </li>
          ";
        }else{
          echo "";
        }
        }else{
          echo"
           <li class=\"nav-item\">
                  <a class=\"nav-link\"  href=\"login.php\">Sign In</a>
                  </li>
                  <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"register.php\">Sign Up</a>
                  </li>
          ";
          
       } 
     ?>
      <li class="nav-item">
        <a class="nav-link" href="home.php">Packages</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="../PTCes/index.php">Spanish</a>
      </li>
       <li class="nav-item">
      </li>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 

       <?php 

      include('Backend/db.php');

      

      if (isset($_SESSION['usuario']))
      {
        $usuario = mysqli_real_escape_string($connection, utf8_decode($_SESSION['usuario']));
        
        echo "
        <li class=\"nav-item\">
        <a class=\"nav-link\">$usuario</a>
        </li>";

        echo "<img src=\"Fotos/user3.png\" style=\"width:3%;\">";
      }
      ?>

  </div>
</nav>