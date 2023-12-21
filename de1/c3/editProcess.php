<?php
include_once "./db.php";

if (isset($_POST['btn'])) {
    $ten = $_POST['ten'];
    $ma = $_POST['ma'];
    $cmnd = $_POST['cmnd'];
    $ho = $_POST['ho'];
    $tinh = $_POST['tinh'];

    $sql =
        "UPDATE tblcanbo SET ma='$ma', ten='$ten', cmnd='$cmnd', ho='$ho', tinh='$tinh' WHERE ma=$ma ";

    $connect->query($sql);
    header("Location: ./index.php");
}
