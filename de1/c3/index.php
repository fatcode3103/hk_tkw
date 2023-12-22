<?php include "./getAllUser.php";

session_start();

if (isset($_GET['ma'])) {
    $editUser = $_SESSION["editUser"];
}

?>


<body>
    <div>
        <form action="./process.php" method="post">
            <div>
                <label>Mã cán bộ</label>
                <input name="ma" type="text" value="<?php echo $editUser['ma'] ?? ''; ?>" />
            </div>
            <div>
                <label>CMND</label>
                <input name="cmnd" type="number" value="<?php echo $editUser['cmnd'] ?? ''; ?>" />
            </div>
            <div>
                <label>Họ</label>
                <input name="ho" type="text" value="<?php echo $editUser['ho'] ?? ''; ?>" />
            </div>
            <div>
                <label>Tên</label>
                <input name="ten" type="text" value="<?php echo $editUser['ten'] ?? ''; ?>" />
            </div>
            <div>
                <label>Tỉnh</label>
                <select name="tinh">
                    <<?php
                        $locations = array("Hà nội", "Huế", "Hải phòng");
                        foreach ($locations as $location) {
                            $selected = (isset($editUser['tinh']) && $editUser['tinh'] == $location) ? 'selected' : '';
                            echo "<option value='$location' $selected>$location</option>";
                        }
                        ?> </select>
            </div>
            <button name="addNew" type="submit">Add new user</button>
            <button name="edit" type="submit"> Update user</button>
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