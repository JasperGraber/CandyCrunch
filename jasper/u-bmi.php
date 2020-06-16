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
         <form method="post">
           <div class="form-group">
             <label for="exampleInputAge1">Leeftijd</label>
             <input name="age" type="age" class="form-control" id="InputAge1" aria-describedby="ageHelp">
           </div>
           <div class="form-group">
             <label for="exampleInputHeight1">Lengte</label>
             <input name="height" type="height" class="form-control" id="InputHeight1" aria-describedby="heightHelp">
           </div>
           <div class="form-group">
             <label for="exampleInputWeight1">Gewicht</label>
             <input name="weight" type="weight" class="form-control" id="InputWeight1" aria-describedby="weightHelp">
           </div>
           <button type="submit" class="btn btn-primary btn-block btn-lg">Bereken!</button>
         </form>
       </div>

       <!-- Resultaat -->
       <div class="col-6 result">
         <?php
          // Include script
          include('u-script.php');
          ?>
       </div>
     </div>