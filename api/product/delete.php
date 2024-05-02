<?php

require('../../includes/init.php');
$Id = $_POST['Id'];
$query = "DELETE FROM products WHERE Id = ?";
$param = [$Id];
$result = execute($query,$param);
header('location:../../pages/products/index.php');

?>