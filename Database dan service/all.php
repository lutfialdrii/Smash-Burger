<?php

include "./connection.php";
/**
 * @var $connection PDO
 */

$query = "SELECT * FROM barang";
$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);

$result = $statement->fetchAll();
//query
header('Content-Type: application/json');
echo json_encode($result);

//