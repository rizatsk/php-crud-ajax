<?php 

require_once 'connection.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nrp = $_POST['nrp'];
$email = $_POST['email'];
$jurusan = $_POST['jurusan'];

$query = mysqli_query($connection,"UPDATE mahasiswa SET
        nama = '$nama',
        nrp = '$nrp',
        email = '$email',
        jurusan = '$jurusan'
        WHERE id = '$id'
        ");

if($query){
    $result['status'] = 1;
    $result['message'] = 'Data Berhasil Di Edit';
}else{
    $result['status'] = 0;
    $result['message'] = 'Data Gagal Di Edit';
}

echo json_encode($result);

