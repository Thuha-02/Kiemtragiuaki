<?php
    $hostName = 'localhost';
    $databaseName = 'dhtl_2021';
    $userName = 'root';
    $passWord = '';
    $connect = mysqli_connect($hostName, $userName, $passWord, $databaseName);

    if (!$connect) {
        die('Không thể kết nối: ' . mysqli_error($conn));
        exit();
    }
