<!-- Account page. -->
<div class="container accountpage">
    <div class="row">
        <div class="col-6">
            <!-- Formulier.-->
            <form action="./index.php?content=user/accountScript" method="post">
                <div class="form-row">
                    <div class="form-group">
                        <label for="exampleInputFirstname1">Voornaam</label>
                        <input name="firstname" type="firstname" class="form-control" id="InputFirstname1" aria-describedby="firstnameHelp">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="exampleInputInfix1">Tussenvoegsel(s)</label>
                        <input name="infix" type="infix" class="form-control" id="InputInfix1" aria-describedby="infixHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLastname1">Achternaam</label>
                        <input name="lastname" type="lastname" class="form-control" id="InputLastname1" aria-describedby="lastnameHelp">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputAddress1">Adres</label>
                    <input name="address" type="address" class="form-control" id="InputAddress1" aria-describedby="addressHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputZipcode1">Postcode</label>
                    <input name="zipcode" type="zipcode" class="form-control" id="InputZipcode1" aria-describedby="zipcodeHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input name="email" type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelpBlock" class="form-text text-muted">Alle informatie invullen.</small>
                </div>
                <!-- Button. -->
                <button type="submit" class="btn btn-primary btn-lg btn-block">Wijzig</button>
            </form>
        </div>
        <!-- Huidige Gegevens. -->
        <div class="col-6">
            <h1>Uw gegevens</h1>
            <p>Naam: <?php echo $_SESSION["firstname"] . ' ' . $_SESSION["infix"] . ' ' . $_SESSION["lastname"]; ?></p>
            <p>Adres: <?php echo $_SESSION["address"]; ?></p>
            <p>Postcode: <?php echo $_SESSION["zipcode"]; ?></p>
            <p>E-mail: <?php echo $_SESSION["email"]; ?></p>
        </div>
    </div>
</div>