<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="../index.php">My Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li> 
      
      <li class="nav-item <?php echo getContent() == "About" ? "active" : null ?>">
        <a class="nav-link" href="./about.php">About</a>
      </li>

      <li class="nav-item" >
        <a class="nav-link" href="./gallery.php">Gallery</a>
      </li>
    
      <?php 
      // var_dump($_SESSION);

      if (!isset($_SESSION['user']['email'])) {
        echo '
          <li class="nav-item" >
            <a class="nav-link" href="./register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="./login.php">Log In</a>
          </li>
        ';
      } elseif(isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 1) {
        echo '
          <li class="nav-item">
            <p class="nav-link">Welcome, Admin <span classs="font-weight-bold">'. $_SESSION['user']['first_name'] . '</span>!</p>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./add_product.php">Add Product</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./logout.php">Log out</a>
          </li> 
        ';        
      } else {
         echo '
          <li class="nav-item">
            <p class="nav-link">Welcome, <span classs="font-weight-bold">'. $_SESSION['user']['first_name'] . '</span>!</p>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./logout.php">Log out</a>
          </li> 
        ';        
      }
      ?>
    </ul>
  </div>
</nav>