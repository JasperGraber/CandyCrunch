<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Registreer nu!</h1>
            <p class="lead">En maak bestellen nóg eenvoudiger.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <form action="./index.php?content=registerScript" method="post">
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
                    <label for="exampleInputEmail1">E-mail</label>
                    <input name="email" type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Wachtwoord</label>
                    <input name="password" type="password" class="form-control" id="InputPassword1" aria-describedby="passwordHelp">
                    <small id="passwordHelpBlock" class="form-text text-muted">Wij versturen u een verificatie e-mail.</small>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-lg">Registreer</button>
            </form>
        </div>
        <div class="col-6">
            <h6>Al een account? <a href="./index.php?content=login">Login</a>.</h6>
        </div>
        <div class="col-6">
            <h6> Door te registeren accepteer je de <a href="#">algemene voorwaarden</a>.
        </div>
    </div>
</div>