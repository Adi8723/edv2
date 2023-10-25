<?php
session_start();
require_once 'include/datenbank.php';
require_once 'include/function.php';
require_once 'include/autoloader_funktion.php';

require_once "model/Student.class.php";
require_once "view/header.inc.php";


$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;

$view = $action;


switch ($action) {
    case 'register':
        # code...
        if (
            !empty($_POST['anrede']) && !empty($_POST['vorname']) &&
            !empty($_POST['nachname']) && !empty($_POST['ort'])
        ) {
            $student = new Student($_POST);
            $student->insert($db);
            set_message('vielen dank anmeldung erfolgreich');
        } else {
            $_SESSION['message'] = "Bitte Formular ausfüllen!";
        }
        break;
    case 'anmelden':
        if (isset($_POST["benutzer"]) && isset($_POST["passwort"])) {
            if (
                $_POST["benutzer"] == "admin" &&
                $_POST["passwort"] == "geheim"
            ) {
                $_SESSION["login"] = "ok";


                $url = (isset($_GET["url"])) ? nl2br($_GET["url"]) : "index.php";
                header("Location: $url");

            }
        } else {
            $_SESSION['message'] = "Bitte Benutzer und Passwort eingeben!";
        }
        break;

    case 'impressum':
        # code...

        break;

    case 'kontakt':
        # code...

        break;
    case 'seminare':
        # code...
        if (
            !empty($_POST['titel']) && !empty($_POST['beschreibung']) &&
            !empty($_POST['price'])
        ) {
            $seminar = new Seminar($_POST);
            $seminar->insert($db);
            set_message('seminar eingetragen');
        } 
        break;
    case 'agbs':
        # code...

        break;
    
    case 'select':
        # code...

        break;
    case 'seminarTabelle':
        # code...

        break;
    default:
        $view = 'index';
        break;
}

require_once "view/" . $view . ".php";

?>

<div class="green">
    <?php echo get_message(); ?>

</div>
<div class="red">


</div>

<?php include_once 'view/footer.inc.php'; ?>