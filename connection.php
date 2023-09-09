<?php
try {
    $pdodom = new PDO('mysql:host=localhost;dbname=pag_rsc', 'root', '');
    $pdoev = new PDO('mysql:host=localhost;dbname=events_iacym', 'root', '');
} catch (PDOException $e) {
    print "¡Error se ha desconectado de la base de datos!: " . $e->getMessage() . "<br/>";
    die();
}
?>