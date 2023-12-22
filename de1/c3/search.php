<?php
include_once "./db.php";

if (isset($_GET['search'])) {
    $q = $_GET['param'];

    $sql = "SELECT * FROM tblcanbo WHERE ten LIKE '%$q%'";

    $res = $connect->query($sql);
    $searchData = [];
    while ($row = $res->fetch_assoc()) {
        $searchData[] = $row;
    }
}
?>

<body>
    <?php
    foreach ($searchData as $user) {
        echo "<tr>";
        echo "<td>" . $user['ma'] . "</td>";
        echo "<td>" . $user['cmnd'] . "</td>";
        echo "<td>" . $user['ho'] . "</td>";
        echo "<td>" . $user['ten'] . "</td>";
        echo "<td>" . $user['tinh'] . "</td>";
        echo "</tr>";
    }
    ?>
</body>