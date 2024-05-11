<?php
if($_POST){
    $nama_buku=$_POST['nama_buku'];
    $deskripsi=$_POST['deskripsi'];
    $foto=$_POST['foto'];
    if(empty($nama_buku)){
        echo "<script>alert('nama buku tidak boleh kosong');location.href='tambah_buku.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into daftar_buku (nama_buku, deskripsi, foto) value ('".$nama_buku."','".$deskripsi."','".$foto."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan buku');location.href='tambah_buku.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan buku');location.href='tambah_buku.php';</script>";
        }
    }
}
?>