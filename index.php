<?php
session_start();
require_once 'include/datenbank.php';
require_once 'include/function.php';

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
    case 'login':
        # code...
        if (!empty($_POST['login']) && !empty($_POST['passwort'])) {
            $login = $_POST['login'];
            $passwort = $_POST['passwort'];
        } else {
            $_SESSION['errors'] = "Bitte Formular ausfüllen!";
        }
        break;

    case 'anmelden':
        # code..
        // $login = isset($_COOKIE['admin']);
        $user         = '';
        $pwd          = '';
        $meldung = 'Geben Sie den richtigen Usernamen und das Passwort ein.';

            if (isset($_POST['user']) && isset($_POST['pwd'])) {
                $user = $_POST['user'];
                $pwd  = $_POST['pwd'];

                if ($user == 'admin' && $pwd == 'geheim') {
                    $_SESSION['admin'] = true;
                    header('Location: index.php');
                    die;
                }else{
                    $meldung;
                }
                
            } else {
                $meldung = 'sie sind als admin angemeldet';
            }
        
        break;

    case 'impressum':
        # code...

        break;

    case 'kontakt':
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