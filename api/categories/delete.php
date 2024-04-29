<?php

require('../../includes/init.php');
$Id = $_GET['id'];
$query = "DELETE FROM categories WHERE Id = ?";
$param = [$Id];
$result = execute($query,$param);
header('location:../../pages/categories/index.php');

?>