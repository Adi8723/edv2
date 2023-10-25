<html>
<head>
  <title>G&auml;stebuch</title>
</head>
<body>
<h1>G&auml;stebuch</h1>
<?php
  if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    if (isset($_GET["ok"])) {
      try {
        $db = new PDO("mysql:dbname=edv1;host=localhost",
                      "root",
                      "");
        $sql = "DELETE FROM studenten WHERE id=?";
        $werte = array($_GET["id"]);
        $kommando = $db->prepare($sql);
        $kommando->execute($werte);
        echo "<p>Eintrag gel&ouml;scht.</p>
              <p><a href=\"gb-admin.php\">Zur&uuml;ck zur &Uuml;bersicht</a></p>";
      } catch (PDOException $e) {
          echo 'Fehler: ' . htmlspecialchars($e->getMessage());
      }
    } else {
      printf("<a href=\"gb-admin.php?id=%s&ok=1\">Wirklich l&ouml;schen?</a>", urlencode($_GET["id"]));
    }
  } else {
    try {
      $db = new PDO("mysql:dbname=edv1;host=localhost",
                    "root",
                    "");
      $sql = "SELECT * FROM studenten ORDER BY nachname DESC";
      $ergebnis = $db->query($sql);
      foreach ($ergebnis as $zeile) {
        printf("<p><b><a href=\"gb-admin.php?id=%s\">Diesen Eintrag l&ouml;schen</a> - <a href=\"gb-edit.php?id=%s\">Diesen Eintrag &auml;ndern</a></b></p>
        
          <h1>Anrede: %s</h1>
          <h1>Name: %s</h1>
          <h3>Vorname: %s</h3>
          <h3>Ort: %s</h3>
          <hr noshade=\"noshade\" />",
          urlencode($zeile["id"]),
          urlencode($zeile["id"]),
          htmlspecialchars($zeile["anrede"]),
          htmlspecialchars($zeile["nachname"]),
          htmlspecialchars($zeile["vorname"]),
          htmlspecialchars($zeile["ort"]),
         
        );
      }
    } catch (PDOException $e) {
      echo 'Fehler: ' . htmlspecialchars($e->getMessage());
    }
  }
?>
</body>
</html>