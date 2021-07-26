<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD AJAX</title>
</head>
<body>
    <h1>PHP CRUD AJAX</h1>
    <table border="1" style="width: 50%;" >
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NRP</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="table-data">
            
        </tbody>
    </table>
    <hr>
    <br>
    <table>
            <input type="hidden" class="input-id">
            <tr><td>Nama : </td><td><input type="text" name="nama" class="input-nama"></td></tr>
            <tr><td>NRP : </td><td><input type="number" name="nrp" class="input-nrp"></td></tr>
            <tr><td>Email : </td><td><input type="text" name="email" class="input-email"></td></tr>
            <tr><td>Jurusan : </td><td><input type="text" name="jurusan" class="input-jurusan"></td></tr>
            <tr><td></td><td>
                <button class="button-tambah">Tambah</button>
                <button class="button-simpan" style="display: none;">Simpan</button>
                <button class="button-batal" style="display: none;">Cancel</button>
            </td></tr>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>