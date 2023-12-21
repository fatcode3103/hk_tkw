<?php
include_once "./db.php";

if (isset($_GET['ma'])) {
    $ma = $_GET['ma'];

    $sql =
        "SELECT * FROM tblcanbo WHERE ma = $ma";
    $res = $connect->query($sql);

    $result = $res->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    <form action="./editProcess.php" method="post">
        <div>
            <label>Mã cán bộ</label>
            <input name="ma" type="text" value=<?php echo $result['ma'] ?> />
        </div>
        <div>
            <label>CMND</label>
            <input name="cmnd" type="number" value=<?php echo $result['cmnd'] ?> />
        </div>
        <div>
            <label>Họ</label>
            <input name="ho" type="text" value=<?php echo $result['ho'] ?> />
        </div>
        <div>
            <label>Tên</label>
            <input name="ten" type="text" value=<?php echo $result['ten'] ?> />
        </div>
        <div>
            <label>Tỉnh</label>
            <select name="tinh">
                <option value="Hà nội" <?php if ($result['tinh'] == 'Hà nội') echo 'selected'; ?>>Hà nội</option>
                <option value="Huế" <?php if ($result['tinh'] == 'Huế') echo 'selected'; ?>>Huế</option>
                <option value="Hải phòng" <?php if ($result['tinh'] == 'Hải phòng') echo 'selected'; ?>>Hải phòng</option>
            </select>
        </div>
        <button name="btn" type="submit"> Update user</button>
    </form>
</body>

</html>