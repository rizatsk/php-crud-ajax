<?php 

require_once 'connection.php';
$query = mysqli_query($connection,"SELECT * FROM mahasiswa");
$rows = [];
while($row = mysqli_fetch_assoc($query)){
    $rows[] = $row;
}
echo json_encode($rows);