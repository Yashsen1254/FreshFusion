<?php

require ('../../includes/init.php');
$Id = $_POST['Id'];
$query = "DELETE FROM sales WHERE Id = ?";
$param = [$Id];
$result = execute($query, $param);
header('location:../../pages/sales/index.php');

?>