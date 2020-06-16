<div class="container-fluid px-0">
  <nav class="navbar navbar-expand-lg">
    <ul class="nav navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="./index.php?content=shop">Winkel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./index.php?content=brands">Merken</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./index.php?content=company">Over ons</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          BMI
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php
          if (isset($_SESSION["email"])) {
            echo '<a class="dropdown-item" href="./index.php?content=jasper/u-bmi">Jasper</a>';
            echo '<a class="dropdown-item" href="./index.php?content=christian/">Christian</a>';
          } else {
            echo '<a class="dropdown-item" href="./index.php?content=jasper/bmi">Jasper</a>';
            echo '<a class="dropdown-item" href="./index.php?content=christian/">Christian</a>';
          }
          ?>
        </div>
      </li>
    </ul>

    <ul class="nav navbar-nav mr-auto">
      <?php
      if (isset($_SESSION["email"])) {
        switch ($_SESSION["userrole"]) {
          case 'user':
            echo '<li class="nav-item"><a class="home" href="./index.php?content=user/u-home">Candy Crunch</a></li>';
            break;
        }
      } else {
        echo '<li class="nav-item"><a class="home" href="./index.php?content=home">Candy Crunch</a></li>';
      }
      ?>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <?php
      if (isset($_SESSION["email"])) {
        echo '<a class="nav-link cart" href="./index.php?content=user/u-cart"></a></li>';
        echo '<li class="nav-item"><a class="nav-link" href="./index.php?content=user/logout">Uitloggen</a></li>';
        echo '<a class="nav-link account" href="./index.php?content=user/account"></a>';
      } else {
        echo '<a class="nav-link cart" href="./index.php?content=cart"></a></li>';
        echo '<li class="nav-item"><a class="nav-link" href="./index.php?content=login">Inloggen</a></li>';
        echo '<li class="nav-item"><a class="nav-link" href="./index.php?content=register">Registreren</a></li>';
      }
      ?>
    </ul>
  </nav>
</div>