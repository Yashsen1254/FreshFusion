<?php

require ('../../includes/init.php');
header('Content-Type: application/json');

$Id = $_POST['Id'];
$query = "DELETE FROM stocks WHERE Id = ?";
$param = [$Id];
$result = execute($query, $param);
if($result)
    echo json_encode(["success" => true]);
else
    echo json_encode(["success" => false]);

header('location:../../pages/stocks/index.php');

?>