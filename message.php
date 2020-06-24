<?php
$alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
$id = (isset($_GET["id"]))? $_GET["id"]: "default";
$pwh = (isset($_GET["pwh"]))? $_GET["pwh"]: "default";
$email = (isset($_GET["email"]))? $_GET["email"]: "default";

// Alle messages die je kan krijgen tijdens het registratie- en login proces.
switch($alert) {
    case 'no-email': 
        echo '<div class="alert alert-info w-50 mx-auto mt-5 text-center" role="alert"> Vul je emailadres in! </div>';
        header("Refresh: 3; url=./index.php?content=register");
    break;
    case 'emailexists':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5 text-center" role="alert"> Het door u ingevulde e-mailadres bestaat al. </div>';
        header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'register-success':
        echo '<div class="alert alert-success w-50 mx-auto mt-5 text-center" role="alert"> uw e-mailadres is geregistreerd, u ontvangt een activatiemail </div>';
        header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'register-error':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5 text-center" role="alert"> Het registratie process is afgebroken, probeer het opnieuw </div>';
        header("Refresh: 3; url=./index.php?content=register");
    break;
    case 'hacker-alert':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5 text-center" role="alert"> U heeft geen rechten op deze pagina</div>';
        header("Refresh: 3; url=./index.php?content=home");
    break;
    case 'password-empty':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5 text-center" role="alert"> U heeft een van beide wachtwoordvelden niet ingevuld, probeer het opnieuw.</div>';
        header("Refresh: 3; url=./index.php?content=activation&id=$id&pwh=$pwh");
    break;
    case 'nomatch-password':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5 text-center" role="alert"> Uw ingevulde wachtwoorden zijn niet gelijk, probeer het opnieuw.</div>';
        header("Refresh: 3; url=./index.php?content=activation&id=$id&pwh=$pwh");
    break;
    case 'no-id-pwh-match':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5 text-center" role="alert"> U bent niet geregistreerd in de database, u wordt doorgestuurd naar de registratiepagina.</div>';
        header("Refresh: 3; url=./index.php?content=register");
    break;
    case 'update-success':
        echo '<div class="alert alert-success w-50 mx-auto mt-5 text-center" role="alert"> U bent succesvol geregistreerd, u wordt doorgestuurd naar de loginpagina.</div>';
        header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'update-error':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5 text-center" role="alert"> Het registratieproces is niet gelukt, kies een nieuw wachtwoord.</div>';
        header("Refresh: 3; url=./index.php?content=activation&id=$id&pwh=$pwh");
    break;
    case 'already-active':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5 text-center" role="alert"> Uw account is al actief, log in met uw zelfgekozen wachtwoord en emailadres.</div>';
        header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'no-match-pwh':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5 text-center" role="alert"> Uw activatiegegevens zijn niet correct, registreer opnieuw.</div>';
        header("Refresh: 3; url=./index.php?content=register");
    break;
    case 'loginform-empty':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5 text-center" role="alert"> U heeft een van beide velden niet ingevuld, probeer het opnieuw.</div>';
        header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'email-unkown':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5 text-center" role="alert"> Het door u ingevulde emailadres is niet bij ons bekend, probeer het opnieuw.</div>';
        header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'not-activated':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5 text-center" role="alert"> Uw account is nog niet geactiveerd. Check uw e-mail <span class="badge badge-primary' . $email . '</span> op een activatiemail.</div>';
        header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'no-pw-match':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5 text-center" role="alert"> Uw ingevulde wachtwoord voor het e-mailadres is onjuist, probeer het opnieuw.</div>';
        header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'log-out':
        echo '<div class="alert alert-success w-50 mx-auto mt-5 text-center" role="alert"> U bent uitgelogd, u wordt doorgestuurd naar de home-pagina.</div>';
        header("Refresh: 3; url=./index.php?content=home");
    break;
    case 'auth-error':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5 text-center" role="alert"> U bent niet ingelogd, u wordt doorgestuurd naar de login-pagina.</div>';
        header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'auth-error-user':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5 text-center" role="alert"> U bent niet goed ingelogd, u wordt doorgestuurd naar de login-pagina.</div>';
        header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'change-info':
        echo '<div class="alert alert-success w-50 mx-auto mt-5 text-center" role="alert"> De wijzigingen zijn gelukt.</div>';
        header("Refresh: 3; url=./index.php?content=user/account");
    break;
    case 'empty-info':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5 text-center" role="alert"> Voer alle gegevens in.</div>';
        header("Refresh: 3; url=./index.php?content=user/account");
    break;
    case 'error-info':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5 text-center" role="alert"> Er is iets fout gegaan.</div>';
        header("Refresh: 3; url=./index.php?content=user/account");
    break;
    default:
    header("Location: ./index.php?content=home");
break;
}
?>