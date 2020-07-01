<?php include('u-class_bmi.php'); 
include("./connectDB.php"); ?>

<!-- Jumbotron -->
<div class="container">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Jaspers BMI Calculator!</h1>
      <p class="lead">Voor hier al je gegevens in om je BMI te berekenen!</p>
      <a href="https://www.voedingscentrum.nl/professionals/kindervoeding-0-4-jaar/babyenkindervoeding/bmi-jongens-en-meisjes.aspx">
        <p>Klik hier voor de officiële cijfers.</p>
      </a>
    </div>
  </div>

  <!-- Formulier -->
  <div class="row">
    <div class="col-6">
      <form method="post" action="./index.php?content=jasper/u-bmi">
        <div class="form-group">
          <label for="exampleInputAge1">Leeftijd</label>
          <input name="age" type="text" class="form-control" id="InputAge1" aria-describedby="ageHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputHeight1">Lengte (cm)</label>
          <input name="height" type="text" class="form-control" id="InputHeight1" aria-describedby="heightHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputWeight1">Gewicht (kg)</label>
          <input name="weight" type="text" class="form-control" id="InputWeight1" aria-describedby="weightHelp">
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-lg">Bereken!</button>
      </form>
    </div>

    <!-- Resultaat -->
    <div class="col-6 result">
      <?php
      if (!empty($_POST)) {
        $bmi->weight = $_POST["weight"];
        $bmi->height = $_POST["height"];
        $bmi->age = $_POST["age"];
        
        $bmi->calculate();

        $id = $_SESSION["id"];

        $sql = "UPDATE  `customer_information` 
                                    SET     `bmi` = '$bmi->calculated_bmi', `age` = '$bmi->age', `height` = '$bmi->height', `weight` = '$bmi->weight'
                                    WHERE   `customer_id` = '$id'";

        // echo $sql; exit();
        mysqli_query($conn, $sql);

      }
      ?>
    </div>
  </div>