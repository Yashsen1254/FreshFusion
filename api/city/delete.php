<?php

require ('../../includes/init.php');
header('Content-Type: application/json');

$Id = $_POST['Id'];
$query = "DELETE FROM city WHERE Id = ?";
$param = [$Id];
$result = execute($query, $param);
header('location:../../pages/city/index.php');

if($result)
    echo json_encode(["success" => true]);
else
    echo json_encode(["success" => false]);

?>