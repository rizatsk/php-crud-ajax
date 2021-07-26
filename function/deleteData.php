<?php 

require_once 'connection.php';
$id = $_POST['id'];

$query = mysqli_query($connection,"DELETE FROM mahasiswa WHERE id = $id");

if($query){
    $result['status'] = 1;
    $result['message'] = 'Data Berhasil Di Hapus';
}else{
    $result['status'] = 0;
    $result['message'] = 'Data Gagal Di Hapus';
}

echo json_encode($result);