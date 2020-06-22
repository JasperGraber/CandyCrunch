<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Log in!</h1>
            <p class="lead">En maak bestellen nóg eenvoudiger.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <form action="./index.php?content=loginScript" method="post">
                <div class="form-row">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input name="email" type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Wachtwoord</label>
                    <input name="password" type="password" class="form-control" id="InputPassword1" aria-describedby="passwordHelp">
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-lg">Login</button>
            </form>
        </div>
        <div class="col-6">
                <h6>Nog geen account? <a href="./index.php?content=register">Registreer</a>.</h6>
        </div>
        <div class="col-6">
                <h6>Door in te loggen accepteer je de <a href="#">algemene voorwaarden</a>.</6>
        </div>
    </div>
</div>