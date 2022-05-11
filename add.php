<?php
//ket noi CSDL
include 'db.php';

// Controller
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $NameBook = $_REQUEST['NameBook'];
    $Price = $_REQUEST['Price'];
    $Author = $_REQUEST['Author'];
    $ImageBook = $_REQUEST['ImageBook'];
    //Model
    //cau query
    $sql = "INSERT INTO LibraryManager(NameBook,Price,Author,ImageBook) VALUES('$NameBook', '$Price','$Author','$ImageBook')";
    //check sql
    // print_r($sql);die();
    //thuc hien truy van
    $conn->exec($sql);
    header('location: list.php');
}
?>
<!-- VIEW -->
<form action="" method="post">
    NameBook:
    <input type="text" name="NameBook"><br><br>
    Price:
    <input type="text" name="Price"><br><br>
    Author:
    <input type="text" name="Author"><br><br>
    ImageBook:
    <input type="file" name="ImageBook"><br><br>

    <button type="submit">Thêm</button>
</form>