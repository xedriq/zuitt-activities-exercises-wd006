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

    
      <?php 
      // isset() function checks if a variable/element has been assigne a value
      // if session email has no assigned value/has not been set.
      // display register and login in navbar
      // else, display the logout button

      // $active = getContent() == "About" ? "active" : null;

      if (!isset($_SESSION['email'])) {
        echo '
          <li class="nav-item" >
            <a class="nav-link" href="./register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="./login.php">Log In</a>
          </li>
        ';
      } else {

        echo '
          <li class="nav-item">
            <p class="nav-link">Welcome, '. $_SESSION['first'] . '!</p>
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