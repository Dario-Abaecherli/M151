<?php
    session_start();

    $anzahl_aufrufe = 1;
    if (!isset($_SESSION['anzahl_aufrufe'])) {
        $_SESSION['anzahl_aufrufe'] = 1;
    }

    echo "Die Seite wurde {$_SESSION['anzahl_aufrufe']}x aufgerufen.";
    
    $_SESSION['anzahl_aufrufe']++;
?>