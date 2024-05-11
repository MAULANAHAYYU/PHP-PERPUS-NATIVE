<?php 
    include "header.php";
    include "koneksi.php";
    $qry_detail_buku=mysqli_query($conn,"select * from daftar_buku where id_buku = '".$_GET['id_buku']."'");
    $dt_buku=mysqli_fetch_array($qry_detail_buku);

    // Check if $dt_buku is null
    if ($dt_buku) {
?>
        <h2>Pinjam Buku</h2>
        <div class="row">      
            <div class="col-md-4">
                <img src="<?=$dt_buku['foto']?>" class="card-img-top">
            </div>
            <div class="col-md-8">
                <form action="masukankeranjang.php?id_buku=<?=$dt_buku['id_buku']?>" method="post">
                    <table class="table table-hover table-striped">
                        <thead> 
                            <tr>
                                <td>Nama Buku</td><td><?=$dt_buku['nama_buku']?></td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td><td><?=$dt_buku['deskripsi']?></td>
                            </tr>
                            <tr>
                                <td>Jumlah Pinjam</td><td><input type="number" name="jumlah_pinjam" value="1"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input class="btn btn-success" type="submit" value="PINJAM"></td>
                            </tr>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
<?php 
    } else {
        echo "Buku tidak ditemukan"; // Or handle this situation accordingly
    }

    include "footer.php";
?>
