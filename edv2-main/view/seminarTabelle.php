<?php
require_once 'header.inc.php';


  if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    if (isset($_GET["ok"])) {
      try {
        $db = new PDO("mysql:dbname=edv1;host=localhost", "root", "");
        $sql = "DELETE FROM seminare WHERE id=?";
        $werte = array($_GET["id"]);
        $kommando = $db->prepare($sql);
        $kommando->execute($werte);
        echo "<p>Eintrag gelöscht.</p> <p><a href=\"seminarTabelle.php\">Zurück zur Übersicht</a></p>";
      } catch (PDOException $e) {
        echo 'Fehler: ' . htmlspecialchars($e->getMessage());
      }
    } else {
      printf("<a href=\"seminarTabelle.php?id=%s&ok=1\">Wirklich löschen?</a>", urlencode($_GET["id"]));
    }
  } else {
    try {
      $db = new PDO("mysql:dbname=edv1;host=localhost", "root", "");
      $sql = "SELECT * FROM seminare ORDER BY titel DESC";
      $ergebnis = $db->query($sql);

      echo "<table>";
      echo '<caption>Seminarenliste</caption>';
      echo "<tr><th>Id</th><th>Titel</th><th>Beschreibung</th><th>Price</th><th>Löschen</th><th>Ändern</th></tr>";

      foreach ($ergebnis as $zeile) {
        printf("<tr>");
        printf("<td>%s</td>", htmlspecialchars($zeile["id"]));
        printf("<td>%s</td>", htmlspecialchars($zeile["titel"]));
        printf("<td>%s</td>", htmlspecialchars($zeile["beschreibung"]));
        printf("<td>%s</td>", htmlspecialchars($zeile["price"]));
        printf("<td><a href=\"seminarTabelle.php?id=%s\">Diesen Eintrag löschen</a></td>", urlencode($zeile["id"]));
        printf("<td><a href=\"gb_edit.php?id=%s\">Diesen Eintrag ändern</a></td>", urlencode($zeile["id"]));
        printf("</tr>");
      }

      echo "</table>";
    } catch (PDOException $e) {
      echo 'Fehler: ' . htmlspecialchars($e->getMessage());
    }
  }
  ?>

