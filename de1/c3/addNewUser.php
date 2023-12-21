<?php
include_once "./db.php";

if (isset($_POST['btn'])) {
    $ten = $_POST['ten'];
    $ma = $_POST['ma'];
    $cmnd = $_POST['cmnd'];
    $ho = $_POST['ho'];
    $tinh = $_POST['tinh'];

    $sql =
        "INSERT INTO tblcanbo (ma, cmnd, ho, ten, tinh)
VALUES ('$ma', '$cmnd', '$ho', '$ten', '$tinh')";

    $connect->query($sql);
    header("Location: ./index.php");
}
