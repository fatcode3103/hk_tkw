<?php
include_once "./db.php";

if (isset($_GET['ma'])) {
    $ma = $_GET['ma'];

    $sql =
        "DELETE FROM tblcanbo WHERE ma = $ma ";
    header("Location: ./index.php");

    $connect->query($sql);
}
