<?php
include_once "./db.php";


$sql = "SELECT * FROM tblcanbo";

$res = $connect->query($sql);

$result = [];

while ($row = $res->fetch_assoc()) {
    $result[] = $row;
}

$connect->close();
