<?php



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style/style.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->


    <title><?= $title ?></title>
    <style>
        a.active {
            background-color: var(--accent);
            border: 1px solid var(--accent);
            color: white !important;
        }

        a.active:hover {
            color: white !important;
            background-color: black;
            border: 1px solid black;
        }
    </style>

</head>

<body>
    <header>
        <nav>
            <a href="index.php" class="link">Home</a>
            <a href="index.php?action=register" class="link">Daten</a>
            <a href="index.php?action=login" class="link">Login</a>
            <a href="index.php?action=anmelden" class="link">anmelden</a>
        </nav>
    </header>





    <article>

        <?php if (!empty($headline)) : ?>
            <h1><?php echo $headline; ?></h1>
        <?php endif; ?>