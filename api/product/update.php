<?php
require '../../includes/init.php';
header("Content-type:application/json");

$Id = $_POST['Id'];
$categoryId = $_POST['categoryId'];
$Name = $_POST['Name'];
$Details = $_POST['Details'];
$Price = $_POST['Price'];

$time = time();
$fileName = "$time-" . $_FILES['Image']['name'];
$tmpFileName = $_FILES['Image']['tmp_name'];
move_uploaded_file($tmpFileName, pathOf("assets/img/uploads/$fileName"));

$query = "UPDATE Products SET categoryId=?, Name=?, Details=?, Price=?, ImageFileName=? WHERE Id=?";
$params = [$categoryId, $Name, $Details, $Price, $fileName, $Id];

$result = execute($query, $params);
if ($result)
    echo json_encode(["success" => true]);
else
    echo json_encode(["success" => false]);

    header('Location: ../../pages/product/index');
?>