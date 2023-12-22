<?php
include_once "./db.php";

if (isset($_POST['edit']) || isset($_POST['addNew'])) {
    $ten = $_POST['ten'];
    $ma = $_POST['ma'];
    $cmnd = $_POST['cmnd'];
    $ho = $_POST['ho'];
    $tinh = $_POST['tinh'];

    if (isset($_POST['edit'])) {
        $sql = "UPDATE tblcanbo SET ma='$ma', ten='$ten', cmnd='$cmnd', ho='$ho', tinh='$tinh' WHERE ma=$ma ";
    } else if (isset($_POST['addNew'])) {
        $sql = "INSERT INTO tblcanbo (ma, cmnd, ho, ten, tinh) VALUES ('$ma', '$cmnd', '$ho', '$ten', '$tinh')";
    }

    $connect->query($sql);
    header("Location: ./index.php");
}
