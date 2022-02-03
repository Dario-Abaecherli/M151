<?php

    session_start();
    $zutaten = array();

    echo "Deine Pizza: <br />";

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if($_SESSION['zutaten'])
        {
            $zutaten = $_SESSION['zutaten'];
        }
        
        if($_POST['zutat'])
        {
            array_push($zutaten, $_POST['zutat']);
        }

        echo "<ul>";
        foreach($zutaten as $zutat)
        {
            echo "<li>{$zutat}</li>";
        }
        echo "</ul>";

        $_SESSION['zutaten'] = $zutaten;
    }

?>

<form method="POST" action="pizza.php">
    <label for="zutat">Zutat hinzufügen: </label>
    <input type="text" name="zutat" placeholder="Zutat">
    <input type="submit" value="Absenden" />
</form>