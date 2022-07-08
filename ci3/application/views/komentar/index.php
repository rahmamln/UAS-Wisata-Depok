<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar</title>

    <script>
        function hapusKecamatan(pesan){
            if (confirm(pesan)){
                return true;
            }else{
                return false;
            }
        }
    </script>
</head>

<div class="container">
<body>
    <div>
    <h3>Kelola Komentar</h3>
    <table border="1" class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Isi</th>
                <th>User_Id</th>
                <th>Wisata_Id</th>
                <th>Nilai_Rating_Id</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($komentar as $kmntr) {
            ?>
            <tr>
                <td><?php echo $nomor?></td>
                <td><?php echo $kmntr -> tanggal?></td>
                <td><?php echo $kmntr -> isi?></td>
                <td><?php echo $kmntr -> users_id?></td>
                <td><?php echo $kmntr -> wisata_id?></td>
                <td><?php echo $kmntr -> nilai_rating_id?></td>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href=<?php echo base_url("index.php/komentar/form")?> 
    class="btn btn-primary active">Tambah</a>
    </div>
</body>
</div>
</html>