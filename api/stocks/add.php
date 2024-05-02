<?php

require ('../../includes/init.php');

$branchId = $_POST["branchId"];
$CurrentQuantity = $_POST["CurrentQuantity"];
$productId = $_POST["productId"];

$query = "INSERT INTO stocks (branchId,productId,CurrentQuantity) VALUES (?,?,?)";
$param = [$branchId, $productId, $CurrentQuantity];

execute($query, $param);

?>