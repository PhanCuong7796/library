<?php
//ket noi CSDL
include 'db.php';

//lay du lieu tren url
$id = $_REQUEST['id'];
//cau query
// print_r($_REQUEST);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "UPDATE LibraryManager SET
    NameBook = '" . $_POST['NameBook'] . "',
    Price = '" . $_POST['Price'] . "',
    Author = '" . $_POST['Author'] . "',
    ImageBook = '" . $_POST['ImageBook'] . "'
    WHERE LibraryManager.ID = $id";
    //check sql
    print_r($sql);

    //thuc hien truy van
    $conn->exec($sql);
    header('location: list.php');
}
?>
<form action="" method="post">
    NameBook:
    <input type="text" name="NameBook" value=""><br><br>
    Price:
    <input type="text" name="Price" value=""><br><br>
    Author:
    <input type="text" name="Author" value=""><br><br>
    ImageBook:
    <input type="file" name="ImageBook" value=""><br><br>

    <button type="submit">Lưu</button>
</form>