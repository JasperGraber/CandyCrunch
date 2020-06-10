<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">

  <title>Jaspers BMI Calculator!</title>
</head>

<body>
  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Jaspers BMI Calculator!</h1>
      <p class="lead">Voor hier al je gegevens in om je BMI te berekenen!</p>
      <a href="https://www.voedingscentrum.nl/professionals/kindervoeding-0-4-jaar/babyenkindervoeding/bmi-jongens-en-meisjes.aspx">
        <p>Klik hier voor de officiële cijfers.</p>
      </a>
    </div>
  </div>

  <!-- Content -->
  <div class="container">
    <div class="row">
      <div class="col-2">
      </div>

      <!-- Formulier -->
      <div class="col-4 form">
        <form method="post">

          <!-- Leeftijd -->
          <div class="form-group row">
            <label class="col-sm-6 col-form-label">
              <h4>Leeftijd</h4>
            </label>
            <div class="col-sm-4">
              <input type="int" class="form-control" name="age">
            </div>
          </div>

          <!-- Lengte -->
          <div class="form-group row">
            <label class="col-sm-6 col-form-label">
              <h4>Lengte (cm)</h4>
            </label>
            <div class="col-sm-4">
              <input type="int" class="form-control" name="height">
            </div>
          </div>

          <!-- Gewicht -->
          <div class="form-group row">
            <label class="col-sm-6 col-form-label">
              <h4>Gewicht (kg)</h4>
            </label>
            <div class="col-sm-4">
              <input type="int" class="form-control" name="weight">
            </div>
          </div>

          <!-- Buttons -->
          <button type="submit" class="btn btn-primary btn-lg cal" onClick="calculate()">Bereken!</button>
          <button type="reset" class="btn btn-primary btn-lg reset">Reset</button>
        </form>
      </div>

      <!-- Resultaat -->
      <div class="col-4 result">
        <?php
        class bmi
        {
          // Variabelen
          public $weight;
          public $height;
          public $age;


          // Functie
          function calculate()
          {
            if ($this->age < 2) {
              echo ("<font color='red'><h4>Vul een leeftijd vanaf 2 jaar in!</h4><font><br />");
            } elseif ($this->height < 1) {
              echo ("<font color='red'><h4>Vul een lengte vanaf 1 cm in!</h4><font><br />");
            } elseif ($this->weight < 1) {
              echo ("<font color='red'><h4>Vul een gewicht vanaf 1 kg in!</h4><font><br />");
            } elseif (empty($_POST["weight"]) || empty($_POST["height"]) || empty($_POST["age"])) {
              echo ("<font color='red'><h4>Vul alle gegevens juist in!</h4><font><br />");
            } else {
              $bmi = $this->weight / ($this->height / 100 * $this->height / 100);
              $bmi = round($bmi, 2);

              // Output BMI
              echo ("<h4>Je BMI is " . $bmi . ".</h4><br />");

              // Output voor 18+
              if ($this->age > 18 && $bmi <= 18.5) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
              } elseif ($this->age > 18 && $bmi > 18.5 && $bmi < 25) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
              } elseif ($this->age > 18 && $bmi >= 25 && $bmi < 30) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
              } elseif ($this->age > 18 && $bmi >= 30 && $bmi < 40) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
              } elseif ($this->age > 18 && $bmi >= 40) {
                echo ("<font color='red'><h4>Je hebt ziekelijk overgewicht.</h4><font><br />");
              }

              // Output voor 18 jaar
              if ($this->age == 18 && $bmi <= 16) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
              } elseif ($this->age == 18 && $bmi > 16 && $bmi < 17) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
              } elseif ($this->age == 18 && $bmi >= 17 && $bmi < 25) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
              } elseif ($this->age == 18 && $bmi >= 25 && $bmi < 30) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
              } elseif ($this->age == 18 && $bmi >= 30) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
              }

              // Output voor 17 jaar
              if ($this->age == 17 && $bmi <= 15.6) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
              } elseif ($this->age == 17 && $bmi > 15.6 && $bmi < 16.58) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
              } elseif ($this->age == 17 && $bmi >= 16.58 && $bmi < 24.5) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
              } elseif ($this->age == 17 && $bmi >= 24.5 && $bmi < 29.4) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
              } elseif ($this->age == 17 && $bmi >= 29.4) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
              }

              // Output voor 16 jaar
              if ($this->age == 16 && $bmi <= 15.12) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
              } elseif ($this->age == 16 && $bmi > 15.12 && $bmi < 16.08) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
              } elseif ($this->age == 16 && $bmi >= 16.08 && $bmi < 23.9) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
              } elseif ($this->age == 16 && $bmi >= 23.9 && $bmi < 28.9) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
              } elseif ($this->age == 16 && $bmi >= 28.9) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
              }

              // Output voor 15 jaar
              if ($this->age == 15 && $bmi <= 14.6) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
              } elseif ($this->age == 15 && $bmi > 14.6 && $bmi < 15.55) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
              } elseif ($this->age == 15 && $bmi >= 15.55 && $bmi < 23.3) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
              } elseif ($this->age == 15 && $bmi >= 23.3 && $bmi < 28.3) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
              } elseif ($this->age == 15 && $bmi >= 28.3) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
              }

              // Output voor 14 jaar
              if ($this->age == 14 && $bmi <= 14.09) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
              } elseif ($this->age == 14 && $bmi > 14.09 && $bmi < 15.01) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
              } elseif ($this->age == 14 && $bmi >= 15.01 && $bmi < 22.6) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
              } elseif ($this->age == 14 && $bmi >= 22.6 && $bmi < 27.6) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
              } elseif ($this->age == 14 && $bmi >= 27.6) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
              }

              // Output voor 13 jaar
              if ($this->age == 13 && $bmi <= 13.59) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
              } elseif ($this->age == 13 && $bmi > 13.59 && $bmi < 14.48) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
              } elseif ($this->age == 13 && $bmi >= 14.48 && $bmi < 21.9) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
              } elseif ($this->age == 13 && $bmi >= 21.9 && $bmi < 26.8) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
              } elseif ($this->age == 13 && $bmi >= 26.8) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
              }

              // Output voor 12 jaar
              if ($this->age == 12 && $bmi <= 13.18) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
              } elseif ($this->age == 12 && $bmi > 13.18 && $bmi < 14.05) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
              } elseif ($this->age == 12 && $bmi >= 14.05 && $bmi < 21.2) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
              } elseif ($this->age == 12 && $bmi >= 21.2 && $bmi < 26) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
              } elseif ($this->age == 12 && $bmi >= 26) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
              }

              // Output voor 11 jaar
              if ($this->age == 11 && $bmi <= 12.89) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
              } elseif ($this->age == 11 && $bmi > 12.89 && $bmi < 13.72) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
              } elseif ($this->age == 11 && $bmi >= 13.72 && $bmi < 20.6) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
              } elseif ($this->age == 11 && $bmi >= 20.6 && $bmi < 25.1) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
              } elseif ($this->age == 11 && $bmi >= 25.1) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
              }

              // Output voor 10 jaar
              if ($this->age == 10 && $bmi <= 12.66) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
              } elseif ($this->age == 10 && $bmi > 12.66 && $bmi < 13.45) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
              } elseif ($this->age == 10 && $bmi >= 13.45 && $bmi < 19.8) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
              } elseif ($this->age == 10 && $bmi >= 19.8 && $bmi < 24) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
              } elseif ($this->age == 10 && $bmi >= 24) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
              }

              // Output voor 9 jaar
              if ($this->age == 9 && $bmi <= 12.5) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
              } elseif ($this->age == 9 && $bmi > 12.5 && $bmi < 13.24) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
              } elseif ($this->age == 9 && $bmi >= 13.24 && $bmi < 19.1) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
              } elseif ($this->age == 9 && $bmi >= 19.1 && $bmi < 22.7) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
              } elseif ($this->age == 9 && $bmi >= 22.7) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
              }

              // Output voor 8 jaar
              if ($this->age == 8 && $bmi <= 12.42) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
              } elseif ($this->age == 8 && $bmi > 12.42 && $bmi < 13.11) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
              } elseif ($this->age == 8 && $bmi >= 13.11 && $bmi < 18.4) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
              } elseif ($this->age == 8 && $bmi >= 18.4 && $bmi < 21.6) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
              } elseif ($this->age == 8 && $bmi >= 21.6) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
              }

              // Output voor 7 jaar
              if ($this->age == 7 && $bmi <= 12.42) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
              } elseif ($this->age == 7 && $bmi > 12.42 && $bmi < 13.08) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
              } elseif ($this->age == 7 && $bmi >= 13.08 && $bmi < 17.9) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
              } elseif ($this->age == 7 && $bmi >= 17.9 && $bmi < 20.6) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
              } elseif ($this->age == 7 && $bmi >= 20.6) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
              }

              // Output voor 6 jaar
              if ($this->age == 6 && $bmi <= 12.5) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
              } elseif ($this->age == 6 && $bmi > 12.5 && $bmi < 13.15) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
              } elseif ($this->age == 6 && $bmi >= 13.15 && $bmi < 17.6) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
              } elseif ($this->age == 6 && $bmi >= 17.6 && $bmi < 19.8) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
              } elseif ($this->age == 6 && $bmi >= 19.8) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
              }

              // Output voor 5 jaar
              if ($this->age == 5 && $bmi <= 12.66) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
              } elseif ($this->age == 5 && $bmi > 12.66 && $bmi < 13.31) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
              } elseif ($this->age == 5 && $bmi >= 13.31 && $bmi < 17.4) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
              } elseif ($this->age == 5 && $bmi >= 17.4 && $bmi < 19.3) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
              } elseif ($this->age == 5 && $bmi >= 19.3) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
              }

              // Output voor 4 jaar
              if ($this->age == 4 && $bmi <= 12.86) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
              } elseif ($this->age == 4 && $bmi > 12.86 && $bmi < 13.52) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
              } elseif ($this->age == 4 && $bmi >= 13.52 && $bmi < 17.6) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
              } elseif ($this->age == 4 && $bmi >= 17.6 && $bmi < 19.3) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
              } elseif ($this->age == 4 && $bmi >= 19.3) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
              }

              // Output voor 3 jaar
              if ($this->age == 3 && $bmi <= 13.09) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
              } elseif ($this->age == 3 && $bmi > 13.09 && $bmi < 13.79) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
              } elseif ($this->age == 3 && $bmi >= 13.79 && $bmi < 17.9) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
              } elseif ($this->age == 3 && $bmi >= 17.9 && $bmi < 19.6) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
              } elseif ($this->age == 3 && $bmi >= 19.6) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
              }

              // Output voor 2 jaar
              if ($this->age == 2 && $bmi <= 13.37) {
                echo ("<font color='purple'><h4>Je hebt ernstig ondergewicht.</h4><font><br />");
              } elseif ($this->age == 2 && $bmi > 13.37 && $bmi < 14.12) {
                echo ("<font color='blue'><h4>Je hebt ondergewicht.</h4><font><br />");
              } elseif ($this->age == 2 && $bmi >= 14.12 && $bmi < 18.4) {
                echo ("<font color='green'><h4>Je hebt een gezond gewicht.</h4><font><br />");
              } elseif ($this->age == 2 && $bmi >= 18.4 && $bmi < 20.1) {
                echo ("<font color='yellow'><h4>Je hebt overgewicht.</h4><font><br />");
              } elseif ($this->age == 2 && $bmi >= 20.1) {
                echo ("<font color='orange'><h4>Je hebt ernstig overgewicht.</h4><font><br />");
              }
            }
          }
        }

        // Input via POST array
        $bmi = new bmi;
        $bmi->weight = $_POST["weight"];
        $bmi->height = $_POST["height"];
        $bmi->age = $_POST["age"];

        echo $bmi->calculate();
        ?>
      </div>
    </div>

  </div> <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>