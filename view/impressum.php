<?php



?>
<?php
if ($db = mysqli_connect("localhost", "root", "", "edv1")) {
    $sql = "SELECT * FROM studenten ORDER BY nachname DESC";
    $ergebnis = mysqli_query($db, $sql);
    while ($zeile = mysqli_fetch_object($ergebnis)) {
        printf(
            "
      <h3>Anrede: %s</h3>
        <h3>vorname: %s</h3> 
        <h3>Nachname: %s</h3>
        <h3>ort: %s</h3>
        <hr noshade=\"noshade\" />",
            // urlencode($zeile->email),
            htmlspecialchars($zeile->anrede),
            htmlspecialchars($zeile->vorname),
            // htmlspecialchars(date("d.m.Y, H:i", strtotime($zeile->datum))),
            htmlspecialchars($zeile->nachname),
            nl2br(htmlspecialchars($zeile->ort))
        );
    }
    mysqli_close($db);
} else {
    echo "Fehler: " . mysqli_connect_error() . "!";
}
?>
<hr>
<hr>