<?php
require  'conn.php';
$id=$_GET['id'];
$sql = "DELETE FROM feedback WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header('Location: dash.php');
} else {
    echo "Error deleting record:", mysqli_error($conn);
}
?>