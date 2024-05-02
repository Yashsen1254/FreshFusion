<?php

require ('../../includes/init.php');
$Id = $_POST['Id'];
$query = "DELETE FROM stocks WHERE Id = ?";
$param = [$Id];
$result = execute($query, $param);
header('location:../../pages/stocks/index.php');

?>