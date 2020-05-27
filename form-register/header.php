<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
              </li>
              <?php
                if($_SESSION['login'] == ''):
              ?>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Интересная статья</a>
              </li>
               <?php else: ?>
                  <li class="nav-item">
                    <a class="nav-link" href='/history.php'>Интересная статья</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href='/PageSaveContact.php'>Personal Contacts</a>
                  </li>
               <?php endif;?>
            </ul>
            <?php
                if($_SESSION['login'] == ''):
            ?>
            <form class="form-inline my-2 my-lg-0">
              <button class="btn btn-outline-success my-2 my-sm-0"  type="submit">
                <a href='/authorization.php' class="badge ">Log In</a></button>
            </form>
            <?php else: ?>
              <form class="form-inline my-2 my-lg-0">
              <button class="btn btn-outline-success my-2 my-sm-0"  type="submit">
                <a href="/exit.php" class="badge">Log Out</a></button>
            </form>
            <?php endif;?>
          </div>
        </nav>
    </header>
    <script src="pages/main.js"></script>
    <script src="func.js"></script>
</body>
</html>