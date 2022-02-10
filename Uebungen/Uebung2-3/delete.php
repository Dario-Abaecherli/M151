<?php
    $servername = "localhost";
    $username = "vmadmin";
    $password = "sml12345";
    $database = "northwind";
    $options = [
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
    $conn = null;

    try 
    {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password, $options);
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
        die();
    }

    $query = $conn->prepare("DELETE o, od, i FROM orders AS o 
        JOIN order_details AS od ON o.id = od.order_id 
        -- INNER JOIN inventory_transactions AS it ON o.id = it.customer_order_id
        JOIN invoices AS i ON o.id = i.order_id
        WHERE id = :order_id");

    echo "<pre>";
    var_dump($query);

    if($query->execute([':order_id' => $_GET['id']]))
    {
        echo "deletion complete";
    }
    else
    {
        echo "SQL Error <br />";
        echo $statement->queryString."<br />";
        echo $statement->errorInfo()[2];
    }

?>