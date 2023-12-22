<?php include "./getAllUser.php";

session_start();

if (isset($_GET['ma'])) {
    $editUser = $_SESSION["editUser"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    </link>
</head>

<body>
    <div>
        <form action="./process.php" method="post">
            <div>
                <label>Mã cán bộ</label>
                <input name="ma" type="text" value="<?php echo isset($editUser['ma']) ? $editUser['ma'] : ''; ?>" />
            </div>
            <div>
                <label>CMND</label>
                <input name="cmnd" type="number" value="<?php echo isset($editUser['cmnd']) ? $editUser['cmnd'] : ""; ?>" />
            </div>
            <div>
                <label>Họ</label>
                <input name="ho" type="text" value="<?php echo isset($editUser['ho']) ? $editUser['ho'] : ""; ?>" />
            </div>
            <div>
                <label>Tên</label>
                <input name="ten" type="text" value="<?php echo isset($editUser['ten']) ? $editUser['ten'] : ""; ?>" />
            </div>
            <div>
                <label>Tỉnh</label>
                <select name="tinh">
                    <option value="Hà nội" <?php if (isset($editUser['tinh']) && $editUser['tinh'] == 'Hà nội') echo 'selected'; ?>>Hà nội</option>
                    <option value="Huế" <?php if (isset($editUser['tinh']) && $editUser['tinh'] == 'Huế') echo 'selected'; ?>>Huế</option>
                    <option value="Hải phòng" <?php if (isset($editUser['tinh']) && $editUser['tinh'] == 'Hải phòng') echo 'selected'; ?>>Hải phòng</option>
                </select>
            </div>
            <button name="addNew" value="addNew" type="submit">Add new user</button>
            <button name="edit" value="edit" type="submit"> Update user</button>
        </form>
    </div>
    <div>
        <table>
            <tr>
                <th>Mã cán bộ</th>
                <th>CMND</th>
                <th>Họ</th>
                <th>Tên</th>
                <th>Tỉnh</th>
            </tr>
            <?php
            foreach ($result as $user) {
                echo "<tr>";
                echo "<td>" . $user['ma'] . "</td>";
                echo "<td>" . $user['cmnd'] . "</td>";
                echo "<td>" . $user['ho'] . "</td>";
                echo "<td>" . $user['ten'] . "</td>";
                echo "<td>" . $user['tinh'] . "</td>";
                echo "<td>" . "<a href='./deleteUser.php?ma=" . $user['ma'] . "'>DELETE</a>" . "</td>";
                echo "<td>" . "<a href='./getUser.php?ma=" . $user['ma'] . "'>EDIT</a>" . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>