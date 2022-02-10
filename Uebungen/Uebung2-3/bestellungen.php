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

    $query = $conn->prepare("SELECT orders.id, products.product_name, customers.first_name, customers.last_name 
        FROM orders
        JOIN order_details ON orders.id = order_details.order_id
        JOIN products ON products.id = order_details.product_id
        JOIN customers ON customers.id = orders.customer_id
        WHERE customers.id=:customers_id");
    
    if($query->execute([':customers_id' => $_GET['id']]))
    {
        $results = $query->fetchall();
        if(!$results)
        {
            echo "No Orders for said ID: {$_GET['id']}";
            die();
        }
        ?>
        <h2>Results for <?= $results[0]['first_name']." ".$results[0]['last_name'] ?></h2>
        <table>
            <tr>
                <th>Product Name</th>
                <th></th>
        <?php
            foreach ($results as $row)
            {
            ?>
                <tr>
                    <td><?= $row['product_name']?></td>
                    <td><?= "<a href='delete.php?id={$row['id']}'> Delete </a>"?></td>
                </tr>
            <?php
            }
        ?>
        </table>
        <?php
    }
    else
    {
        echo "SQL Error <br />";
        echo $statement->queryString."<br />";
        echo $statement->errorInfo()[2];
    }
?>