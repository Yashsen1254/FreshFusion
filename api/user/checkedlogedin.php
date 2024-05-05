<?php

require '../includes/init.php';
header("Content-type:application/json");

$name = $_POST['Name'];
$password = $_POST['Password'];

$query = "INSERT INTO Users (Name,Password) VALUES(?,?)";
$params = [$name, $password];
$result = execute($query, $params);

$userId = lastInsertId();
$permissionQuery = "INSERT INTO Permissions (UserId,ModuleId,AddPermission,EditPermission,DeletePermission,ViewPermission) VALUES(?,?,?,?,?,?)";

$categoriesPermissionParams = [$userId, 1, 0, 0, 0, 0];
$productsPermissionParams = [$userId, 2, 0, 0, 0, 0];
$purchasePermissionParams = [$userId, 3, 0, 0, 0, 0];
$salesPermissionParams = [$userId, 4, 0, 0, 0, 0];
$stocksPermissionParams = [$userId, 5, 0, 0, 0, 0];
$expensesPermissionParams = [$userId, 6, 0, 0, 0, 0];
$userPermissionParams = [$userId, 7, 0, 0, 0, 0];
$cityPermissionParams = [$userId, 8, 0, 0, 0, 0];
$branchdetailsPermissionParams = [$userId, 9, 0, 0, 0, 0];
$rolesPermissionParams = [$userId, 10, 0, 0, 0, 0];

execute($permissionQuery, $categoriesPermissionParams);
execute($permissionQuery, $productsPermissionParams);
execute($permissionQuery, $purchasePermissionParams);
execute($permissionQuery, $salesPermissionParams);
execute($permissionQuery, $stocksPermissionParams);
execute($permissionQuery, $expensesPermissionParams);
execute($permissionQuery, $userPermissionParams);
execute($permissionQuery, $cityPermissionParams);
execute($permissionQuery, $branchdetailsPermissionParams);
execute($permissionQuery, $rolesPermissionParams);

if ($result)
    echo json_encode(["success" => true]);
else
    echo json_encode(["success" => false]);
