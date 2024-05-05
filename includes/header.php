<?php

$url = urlOf('pages/login');
if (!isset($_SESSION['LoggedIn'])) {
    header("Location: $url");
    exit;
}

?>

<!doctype html>
<html lang="en">


<!-- Mirrored from demo.riktheme.com/fojota/top-menu/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Apr 2024 10:07:31 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fojota - Admin Dashboard Template</title>
    <link rel="icon" href="<?= urlOf('assets/img/core-img/favicon.ico'); ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/classynav.css'); ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/animate.css'); ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/introjs.min.css'); ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/dataTables.bootstrap5.min.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/buttons.bootstrap5.min.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/select.dataTables.min.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/select2.min.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/bootstrap-datepicker.min.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/spectrum.min.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/css/jquery.bootstrap-touchspin.css') ?>">
    <link rel="stylesheet" href="<?= urlOf('assets/style.css') ?>">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-book">
            <div class="inner">
                <div class="left"></div>
                <div class="middle"></div>
                <div class="right"></div>
            </div>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <!-- /Preloader -->