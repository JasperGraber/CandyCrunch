<!-- About. -->
<div class="about-section">
  <h1>Over ons</h1>
  <p>Wij zijn een een snoepwinkel gevestigd in utrecht wij specializeren ons in amerikaanse lekkernijen.</p>
  <p>Alles wat u hier op de website ziet kunt u ook in onze winkels vinden dus kom gerust een keer langs.</p>
  <h2>Contact Informatie</h2>
    <p>Tel:06-63826579
    E-mail: contact.candycrunch@gmail.com 
  </p>
</div>

<<<<<<< HEAD
<h2 style="text-align:center">Ons Team</h2>
=======
<!-- Ons team. -->

<!-- Jasper. -->
<h2 style="text-align:center">ons Team</h2>
>>>>>>> 9fb6431f775ff4e22df7a72e9ed69dede0133384
<div class="row">
  <div class="column">
    <div class="card">
      <img src="./img/jasper.jpeg" alt="jasper" width="50%">
      <div class="container">
        <h2>Jasper Gräber</h2>
        <p class="title">CEO</p>
        <p>Jasper is 17 jaar oud en woont in amersfoort, Utrecht</p>
        <p>328218@student.mboutrecht.nl</p>
      </div>
    </div>
  </div>

<!-- Christian -->
  <div class="column">
    <div class="card">
      <img src="./img/elon.jpg" alt="elon" style="width:50%">
      <div class="container">
        <h2>Christian Dokter</h2>
        <p class="title">CEO</p>
        <p>Christian is 18 jaar oud en woont in Vleuten, Utrecht</p>
        <p>328370@student.mboutrecht.nl</p>
      </div>
    </div>
  </div>
</div>

<!-- Css. -->
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: middle;
  width: 50%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #ff5756;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

</style>