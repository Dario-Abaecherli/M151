<?php
    $servername = "localhost";
    $username = "vmadmin";
    $password = "sml12345";
    $database = "northwind";

    try 
    {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

    $query = $conn->prepare("SELECT * FROM customers");
    if($query->execute())
    {
        echo "<ul>";
        while ($row = $query->fetch())
        {
            echo "<li>{$row['first_name']}</li>";
        }
        echo "</ul>";
    }
    else
    {
        echo "SQL Error <br />";
        echo $statement->queryString."<br />";
        echo $statement->errorInfo()[2];
    }
?>