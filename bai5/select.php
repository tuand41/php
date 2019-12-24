<?php
    include 'connect.php';

    $sql = "SELECT * FROM products WHERE id = ".$_POST['id'];
    $resultAllProduct = $conn->query($sql);
    if ($resultAllProduct->num_rows > 0)
    {
        while ($row = $resultAllProduct->fetch_array())
        {
            $dataProducts["name"] = $row["name"];
            $dataProducts["price"] = $row["price"];
            $dataProducts["img"] = $row["img"];
        }
    }
    echo json_encode($dataProducts);