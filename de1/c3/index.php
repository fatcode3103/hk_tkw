<?php include "./getAllUser.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    </link>
</head>

<body>
    <div>
        <form action="./addNewUser.php" method="post">
            <div>
                <label>Mã cán bộ</label>
                <input name="ma" type="text" />
            </div>
            <div>
                <label>CMND</label>
                <input name="cmnd" type="number" />
            </div>
            <div>
                <label>Họ</label>
                <input name="ho" type="text" />
            </div>
            <div>
                <label>Tên</label>
                <input name="ten" type="text" />
            </div>
            <div>
                <label>Tỉnh</label>
                <select name="tinh">
                    <option value="Hà nội">Hà nội</option>
                    <option value="Huế">Huế</option>
                    <option value="Hải phòng">Hải phòng</option>
                </select>
            </div>
            <button name="btn" type="submit">Add new user</button>
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
                echo "<td>" . "<a href='./editUser.php?ma=" . $user['ma'] . "'>EDIT</a>" . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>