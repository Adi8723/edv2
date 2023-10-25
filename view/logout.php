<?php
$title = 'abmelden';
session_start();
session_destroy();
header('Location: ../anmelden.php');
