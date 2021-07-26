<?php 

require_once 'connection.php';
$id = $_POST['id'];

$query = mysqli_query($connection,"SELECT * FROM mahasiswa WHERE id = $id");
$result = mysqli_fetch_assoc($query);
echo json_encode($result);