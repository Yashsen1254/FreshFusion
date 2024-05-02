<?php

require ('../../includes/init.php');
$Id = $_POST['Id'];
$branchId = $_POST["branchId"];
$CurrentQuantity = $_POST["CurrentQuantity"];
$productId = $_POST["productId"];

$query = "UPDATE sales SET branchId=?, productId=?, CurrentQuantity=? WHERE Id=?";
$param = [$branchId, $productId, $CurrentQuantity, $Id];

execute($query, $param);

?>