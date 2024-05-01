<?php

require('../../includes/init.php');
$Id = $_POST['Id'];
$query = "DELETE FROM categories WHERE Id = ?";
$param = [$Id];
$result = execute($query,$param);
header('location:../../pages/categories/index.php');

?>