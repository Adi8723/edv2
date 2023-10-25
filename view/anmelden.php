<?php


/*
#include_once '../include/init_blog.inc.php';

$title = 'anmelden';
$headline = 'Anmelden';

	


$sub = '';

$user         = '';
$pwd          = '';
$meldung = 'Geben Sie den richtigen Usernamen und das Passwort ein.';



if (isset($_POST['user']) && isset($_POST['pwd'])) {
    $user = $_POST['user'];
    $pwd  = $_POST['pwd'];

    if ($user == 'admin' && $pwd == 'geheim') {
        $_SESSION['admin'] = true;
        header('Location: ' . $_SERVER['PHP_SELF']);
        die;
    }
    // if(isset($_POST['pwd']) && !$login){

    //     if($blog->login($_POST['pwd'])) {
    //         header('Location: ' . $_SERVER['PHP_SELF']);
    //         die;
    //     }
    // }
    
    
}else{
    echo $meldung;
}


*/
?>

<?php include_once 'view/header.inc.php'; ?>
<?php # if (!$login) { ?>

    <form style="margin-left: 3em" action="index.php?action=anmelden" method="post">
        <i style="color:red;"><?= $meldung; ?></i>
        <p>
            Username:<br>
            <input type="text" name="user" required value="">
        </p>
        <p>
            Passwort:<br>
            <input type="text" name="pwd" required value="">
        </p>
        <p>
            <input type="submit" name="Absenden">
        </p>
    </form>
<?php # } else { ?>

    <!-- <h2 style="text-align: center; color: green">
        Sie sind angemeldet als Admin.
    </h2> -->
<?php # } ?>
<p>
    <hr><br>
    <a href="./">Zurück zur Startseite</a>
</p>