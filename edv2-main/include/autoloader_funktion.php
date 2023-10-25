<?php
// autoload lädt automatisch alle klassen
function autoloader(string $param)
{
    if (file_exists("model/" . $param . ".class.php")) {
        require_once "model/" . $param . ".class.php";
    }
}
spl_autoload_register('autoloader');

?>