<?php
    $servername = "localhost";
    $username = "vmadmin";
    $password = "sml12345";
    $dbname = "northwind";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    $sql = "SELECT * FROM customers WHERE job_title = 'Purchasing Representative'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        echo "<ul>";
        foreach($result as $row)
        {
            echo "<li>{$row["first_name"]}</li>";
        }
        echo "</ul>";
    }
    else
    {
    echo "Keine Resultate vorhanden";
    }

    mysqli_close($conn);
?>