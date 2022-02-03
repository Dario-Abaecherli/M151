<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if($_POST['name'])
        {
            $username = $_POST['name'];
            echo "Hallo {$username}!";
        }
        else
        {
            echo "Hallo Max Muster, Bitte einen gültigen Namen eingeben";
        }
        echo "<br />";

        if($_POST['classSelect'])
        {
            echo "Klasse {$_POST['classSelect']}";
        }
    }
?>

<form method="POST" action="index.php">
    <input type="text" name="name" placeholder="Benutzername">
    <select name="classSelect">
        <option value="S-INF19s">S-INF19s</option>
        <option value="S-INF19a">S-INF19a</option>
        <option value="S-INF19b">S-INF19b</option>
    </select>
    <input type="submit" value="Absenden" />
</form>