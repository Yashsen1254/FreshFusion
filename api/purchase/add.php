<?php

require ('../../includes/init.php');

$branchId = $_POST["branchId"];
$productId = $_POST["productId"];
$Quantity = $_POST["Quantity"];

$query = "INSERT INTO purchase (branchId,productId,Quantity) VALUES (?,?,?)";
$param = [$branchId, $productId, $Quantity];

execute($query, $param);

?>