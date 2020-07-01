<!-- Navbar. -->
<div class="container-fluid px-0">
  <nav class="navbar navbar-expand-lg">
    <ul class="nav navbar-nav mr-auto">
      <!-- Winkel. -->
      <li class="nav-item">
        <a class="nav-link" href="./index.php?content=shop">Winkel</a>
      </li>
      <!-- About. -->
      <li class="nav-item">
        <a class="nav-link" href="./index.php?content=company">Over ons</a>
      </li>
      <!-- Bmi. -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          BMI
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php
          // Naar u-bmi als gebruiker ingelogd is.
          if (isset($_SESSION["email"])) {
            echo '<a class="dropdown-item" href="./index.php?content=jasper/u-bmi">Jasper</a>';
            echo '<a class="dropdown-item" href="./index.php?content=christian/u-bmi_c">Christian</a>';
          } else {
            // Naar bmi als gebruiker niet ingelogd is.
            echo '<a class="dropdown-item" href="./index.php?content=jasper/bmi">Jasper</a>';
            echo '<a class="dropdown-item" href="./index.php?content=christian/bmi_c">Christian</a>';
          }
          ?>
        </div>
      </li>
    </ul>

    <!-- Home. -->
    <ul class="nav navbar-nav mr-auto">
      <?php
      // Naar u-home als gebruiker ingelogd is.
      if (isset($_SESSION["email"])) {
        switch ($_SESSION["userrole"]) {
          case 'user':
            echo '<li class="nav-item"><a class="home" href="./index.php?content=user/u-home">Candy Crunch</a></li>';
            break;
        }
      } else {
       // Naar home als gebruiker niet ingelogd is.
        echo '<li class="nav-item"><a class="home" href="./index.php?content=home">Candy Crunch</a></li>';
      }
      ?>
    </ul>

    <!-- Cart, login, account, register, logout -->
    <ul class="nav navbar-nav navbar-right">
      <?php
      // Naar Cart, logout, account als gebruiker ingelogd is.
      if (isset($_SESSION["email"])) {
        echo '<a class="nav-link cart" href="./index.php?content=cart"></a></li>';
        echo '<li class="nav-item"><a class="nav-link" href="./index.php?content=user/logout">Uitloggen</a></li>';
        echo '<a class="nav-link account" href="./index.php?content=user/account"></a>';
        // Naar Cart, login, register als gebruiker niet ingelogd is.
      } else {
        echo '<a class="nav-link cart" href="./index.php?content=cart"></a></li>';
        echo '<li class="nav-item"><a class="nav-link" href="./index.php?content=login">Inloggen</a></li>';
        echo '<li class="nav-item"><a class="nav-link" href="./index.php?content=register">Registreren</a></li>';
      }
      ?>
    </ul>
  </nav>
</div>