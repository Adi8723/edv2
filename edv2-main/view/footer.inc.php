</article>

<footer>
    <?php /*
    <nav>
        <!-- <ul class=""> -->
        <?php if (!isset($title)) $title = ''; ?>
       
        <!-- <li class="nav-item"> -->
        <a href="kontakt.php" <?php if ($title === 'kontakt') : ?> class="active" <?php endif; ?>>Kontakt</a>
        <!-- </li> -->
        <!-- <li class="nav-item"> -->
        <a href="impressum.php" <?php if ($title === 'impressum') : ?> class="active" <?php endif; ?>>Impressum</a>
        <!-- </li> -->
        <!-- <li class="nav-item"> -->
        <a href="AGB.php" <?php if ($title === 'agb') : ?> class="active" <?php endif; ?>>AGB</a>
        <!-- </li> -->
        <!-- </ul> -->
    </nav>

                   */ ?>
          <nav>
            <a href="index.php" class="link">Home</a>
            <a href="index.php?action=impressum" class="link">Impressum</a>
            <a href="index.php?action=agbs" class="link">AGBs</a>
            <a href="index.php?action=kontakt" class="link">Kontakt</a>
        </nav>
    <img style="border-radius: 5px; max-width: 100%; width: 250px;">
    <p>Ein erstes Projekt vom PHP Kurs</p>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>