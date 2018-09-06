<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
        <a class="navbar-brand" href="main.php">Robots</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="main.php">Home
          <span class="sr-only">(current)</span>
        </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        About
      </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#footer">About us</a>
                    </div>
                </li>
            </ul>
            <?php 
  if(isset($_SESSION['username'])){
    echo '<form method="get" action="logout.php"><button class="btn btn-outline-success mr-sm-2 my-2 my-sm-0" type="submit">Log Out of 
      ' . $_SESSION["username"] .'</button></form>';
    }

  else {
    echo '<form method="post" action="index.php"><button class="btn btn-outline-success mr-sm-2 my-2 my-sm-0" type="submit">Sign In 
      </button></form>
      <form method="post" action="register.php"><button class="btn btn-outline-success mr-sm-2 my-2 my-sm-0" type="submit">Sign Up
      </button></form>';
    } ?>
        </div>
    </nav>