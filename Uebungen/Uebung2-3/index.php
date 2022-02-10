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
        echo "Connected successfully";
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
        die();
    }
?>

<?php
    $query = $conn->prepare("SELECT id, first_name, last_name FROM customers");
    if($query->execute())
    {
        $results = $query->fetchall()
        ?>
        <table>
        <?php
            foreach ($results as $row)
            {
            ?>
                <tr>
                    <td><?= $row['first_name']?></td>
                    <td><?= $row['last_name']?></td>
                    <td><?= "<a href='bestellungen.php?id={$row['id']}'>link</a>"?></td>
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