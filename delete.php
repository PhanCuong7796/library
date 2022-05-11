<?php
//ket noi CSDL
include 'db.php';

//lay du lieu tren url
$id = $_REQUEST['id'];
//  var_dump($rows->ID);
//cau query
$sql = "DELETE FROM LibraryManager WHERE ID = $id";
header('location: list.php');
//check sql
//  var_dump($sql);

//thuc hien truy van
$conn->exec($sql);
