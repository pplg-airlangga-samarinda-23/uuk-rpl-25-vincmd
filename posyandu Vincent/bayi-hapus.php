<?php
session_start();
require "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    $sql = "DELETE FROM kader WHERE id=?";
    $row = $koneksi->execute_query($sql, [$id]);
    if ($row) {
        header("location:databayi.php");
    }
}
