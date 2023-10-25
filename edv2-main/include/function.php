<?php


function set_message($message) {
    $_SESSION['message'] = $message;
}

function get_message() {
   if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
   }
}

function set_error($error)
{
    $_SESSION['errors'] = $error;
}

function get_error()
{
    $err = $_SESSION['errors'];
    unset($_err);
    return $err;
}
?>
