<?php
include 'db.php';

//cau truy van
$sql = "SELECT * FROM `LibraryManager`";

//truyen cau truy van vao
$stmt = $conn->query($sql);

//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);

//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();

?>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>NameBook</th>
            <th>Price</th>
            <th>Author</th>
            <th>ImageBook</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <a href="add.php?id=<?php echo $row->ID; ?>">Thêm</a>
        <?php foreach ($rows as $key => $row) : ?>
            <tr>
                <td><?php echo $row->ID; ?></td>
                <td><?php echo $row->NameBook; ?></td>
                <td><?php echo $row->Price; ?></td>
                <td><?php echo $row->Author; ?></td>
                <td> <img src="./img/<?php echo $row->ImageBook; ?>" width = "100px" height = "100px"></td>
                <td>

                    <a href="edit.php?id=<?php echo $row->ID ?>">Sửa</a> |
                    <a href="delete.php?id=<?php echo $row->ID ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>