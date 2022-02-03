<?php
    if($_GET['username'])
    {
        $username = $_GET['username'];
        echo "Hallo {$username}!<br />";
    }
    else
    {
        echo "Hallo Mr. Unknown<br />";
    }

    if ($_GET['age']) {
        $age = $_GET['age'];
        echo "Du bist {$age} Jahre alt.";
    }
?>