<?php
require_once 'header.inc.php';


  if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    if (isset($_GET["ok"])) {
      try {
        $db = new PDO("mysql:dbname=edv1;host=localhost", "root", "");
        $sql = "DELETE FROM studenten WHERE id=?";
        $werte = array($_GET["id"]);
        $kommando = $db->prepare($sql);
        $kommando->execute($werte);
        echo "<p>Eintrag gelöscht.</p> <p><a href=\"select.php\">Zurück zur Übersicht</a></p>";
      } catch (PDOException $e) {
        echo 'Fehler: ' . htmlspecialchars($e->getMessage());
      }
    } else {
      printf("<a href=\"select.php?id=%s&ok=1\">Wirklich löschen?</a>", urlencode($_GET["id"]));
    }
  } else {
    try {
      $db = new PDO("mysql:dbname=edv1;host=localhost", "root", "");
      $sql = "SELECT * FROM studenten ORDER BY nachname DESC";
      $ergebnis = $db->query($sql);

      echo "<table>";
      echo '<caption>Studentenliste</caption>';
      echo "<tr><th>Id</th><th>Anrede</th><th>Name</th><th>Vorname</th><th>Ort</th><th>Löschen</th><th>Ändern</th></tr>";

      foreach ($ergebnis as $zeile) {
        printf("<tr>");
        printf("<td>%s</td>", htmlspecialchars($zeile["id"]));
        printf("<td>%s</td>", htmlspecialchars($zeile["anrede"]));
        printf("<td>%s</td>", htmlspecialchars($zeile["nachname"]));
        printf("<td>%s</td>", htmlspecialchars($zeile["vorname"]));
        printf("<td>%s</td>", htmlspecialchars($zeile["ort"]));
        printf("<td><a href=\"select.php?id=%s\">Diesen Eintrag löschen</a></td>", urlencode($zeile["id"]));
        printf("<td><a href=\"gb_edit.php?id=%s\">Diesen Eintrag ändern</a></td>", urlencode($zeile["id"]));
        printf("</tr>");
      }

      echo "</table>";
    } catch (PDOException $e) {
      echo 'Fehler: ' . htmlspecialchars($e->getMessage());
    }
  }
  ?>

