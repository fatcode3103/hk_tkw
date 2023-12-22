<?php
include_once "./db.php";

session_start();

if (isset($_GET['ma'])) {
    $ma = $_GET['ma'];

    $sql =
        "SELECT * FROM tblcanbo WHERE ma = '$ma'";
    $res = $connect->query($sql);

    $editUser = $res->fetch_assoc();

    $_SESSION["editUser"] = $editUser;

    header("Location: ./index.php?ma=$ma");
}
