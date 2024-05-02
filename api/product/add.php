<?php
require '../../includes/init.php';
header("Content-type:application/json");

$categoryId = $_POST['categoryId'];
$Name = $_POST['Name'];
$Details = $_POST['Details'];
$Price = $_POST['Price'];

$time = time();
$fileName = "$time-" . $_FILES['Image']['Name'];
$tmpFileName = $_FILES['Image']['tmp_name'];
move_uploaded_file($tmpFileName, pathOf("assets/img/uploads/$fileName"));

$query = "INSERT INTO Products (categoryId, Name, Details, Price, ImageFileName) VALUES(?,?,?,?,?)";
$params = [$categoryId, $Name, $Details, $Price, $fileName];

$result = execute($query, $params);
if ($result)
    echo json_encode(["success" => true]);
else
    echo json_encode(["success" => false]);
?>