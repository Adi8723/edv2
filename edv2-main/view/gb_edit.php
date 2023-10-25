<html>

<head>
  <title>G&auml;stebuch</title>
</head>

<body>
  <h1>G&auml;stebuch</h1>
  <?php
  
  $anrede = "";
  $vorname = "";
  $nachname = "";
  $ort = "";

  if (
    isset($_GET["id"]) &&
    is_numeric($_GET["id"])
  ) {

    try {
      $db = new PDO(
        "mysql:dbname=edv1;host=localhost",
        "root",
        ""
      );
      if (
        isset($_POST["anrede"]) &&
        isset($_POST["vorname"]) &&
        isset($_POST["nachname"]) &&
        isset($_POST["ort"])
      ) {
        $sql = "UPDATE studenten SET 
                anrede = ?, 
                vorname = ?,
                nachname = ?,
                ort = ?
                WHERE id=?";
        $werte = [
          $_POST["anrede"],
          $_POST["vorname"],
          $_POST["nachname"],
          $_POST["ort"],
          $_GET["id"]
        ];
        $kommando = $db->prepare($sql);
        $kommando->execute($werte);
        echo "<p> Eintrag ge&auml;ndert.</p>
              <p><a href=\"select.php\">Zur&uuml;ck zur &Uuml;bersicht</a></p>";
      }

      $sql = "SELECT * FROM studenten WHERE id=?";
      $kommando = $db->prepare($sql);
      $wert = array($_GET["id"]);
      $kommando->execute($wert);
      if ($zeile = $kommando->fetchObject()) {
        $anrede = $zeile->anrede;
        $vorname = $zeile->vorname;
        $nachname = $zeile->nachname;
        $ort = $zeile->ort;
      }
    } catch (PDOException $e) {
      echo 'Fehler: ' . htmlspecialchars($e->getMessage());
    }
  }
  ?>
  <form method="post" action="">
    anrede <input type="text" name="anrede" value="
    <?php
    echo htmlspecialchars($anrede);
    ?>" /><br />
    E-Mail-Adresse <input type="text" name="vorname" value="
    <?php
    echo htmlspecialchars($vorname);
    ?>" /><br />
    &Uuml;berschrift <input type="text" name="nachname" value="
    <?php
    echo htmlspecialchars($nachname);
    ?>" /><br />
    
    <textarea cols="70" rows="10" name="ort">
      <?php
      echo htmlspecialchars($ort);
      ?></textarea><br />
    <input type="submit" name="Submit" value="Aktualisieren" />
  </form>
</body>
</html>