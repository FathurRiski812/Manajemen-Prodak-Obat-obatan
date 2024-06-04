<?php 
include '../koneksi.php';

function upload() {
    $namaFile = $_FILES['Photo']['name'];
    $error = $_FILES['Photo']['error'];
    $tmpName = $_FILES['Photo']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if($error === 4) {
        echo "
            <script>
                alert('Gambar Harus Diisi');
                window.location = 'harga-entry.php';
            </script>
        ";

        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstentiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if(!in_array($ekstensiGambar, $ekstentiGambarValid)) {
        echo "
            <script>
                alert('File Harus Berupa Gambar');
                window.location = 'harga-entry.php';
            </script>
        ";

        return null;
    }

    // lolos pengecekan, upload gambar
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    $oke =  move_uploaded_file($tmpName, '../img_categories/' . $namaFileBaru);
    return $namaFileBaru;

}

if(isset($_POST['simpan'])) {
    $Tanggal = $_POST['tanggal'];
    $Harga = $_POST['harga'];

    $sql = "INSERT INTO tb_harga VALUES(NULL, '$Harga', '$Tanggal')";

    if(empty($Tanggal) || empty($Harga)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'harga-entry.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data harga Berhasil Ditambahkan');
                window.location = 'harga.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'harga-entry.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id         = $_POST['id'];
    $Tanggal = $_POST['tanggal'];
    $Harga     = $_POST['harga'];

    $sql = "UPDATE tb_harga SET 
            Tanggal = '$Tanggal',
            Harga = '$Harga'
            WHERE id = $id";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Harga Berhasil Diubah');
                window.location = 'harga.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'harga-edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    

    $sql = "DELETE FROM tb_harga WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Harga Berhasil Dihapus');
                window.location = 'harga.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Harga Gagal Dihapus');
                window.location = 'harga.php';
            </script>
        ";
    }
}else {
    header('location: harga.php');
}
