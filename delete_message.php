<?php
require_once 'database.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($link, "DELETE FROM message WHERE id=$id");
    if ($query)
        header("location: new_message.php");
}