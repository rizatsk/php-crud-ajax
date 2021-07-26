<?php 

require_once 'connection.php';

$nama = $_POST['nama'];
$nrp = $_POST['nrp'];
$email = $_POST['email'];
$jurusan = $_POST['jurusan'];

$query = mysqli_query($connection,"INSERT INTO mahasiswa VALUES(
        '',
        '$nama',
        '$nrp',
        '$email',
        '$jurusan')
        ");

if($query){
    $result['status'] = 1;
    $result['message'] = 'Data Berhasil Ditambahkan';
}else{
    $result['status'] = 0;
    $result['message'] = 'Data Gagal Ditambahkan';
}

echo json_encode($result);

