   <?php include('class_bmi_c.php'); ?>


   <div class="container">
     <div class="jumbotron jumbotron-fluid">
       <div class="container">
         <h1 class="display-4">Christian's BMI Calculator!</h1>
         <p class="lead">Voor hier je gegevens in om je BMI te berekenen!</p>
         </a>
       </div>
     </div>


     <div class="row">
       <div class="col-6">
         <form method="post" action="./index.php?content=christian/bmi_c">
           <div class="form-group">
             <label for="exampleInputAge1">Leeftijd</label>
             <input name="age" type="age" class="form-control" id="InputAge1" aria-describedby="ageHelp">
           </div>
           <div class="form-group">
             <label for="exampleInputHeight1">Lengte in CM</label>
             <input name="height" type="text" class="form-control" id="InputHeight1" aria-describedby="heightHelp">
           </div>
           <div class="form-group">
             <label for="exampleInputWeight1">Gewicht in KG</label>
             <input name="weight" type="weight" class="form-control" id="InputWeight1" aria-describedby="weightHelp">
           </div>
           <button type="submit" class="btn btn-primary btn-block btn-lg">Bereken!</button>
         </form>
       </div>


       <div class="col-6 result">
         <?php
          if (!empty($_POST)) {
            $bmi->weight = $_POST["weight"];
            $bmi->height = $_POST["height"];
            $bmi->age = $_POST["age"];

            echo $bmi->calculate();
          }
          ?>
       </div>
     </div>