<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kecamatan Kota Depok</title>

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
    <h3>Kelola Kecamatan Kota Depok</h3>
    <table border="1" class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($kecamatan as $kcm) {
            ?>
            <tr>
                <td><?php echo $nomor?></td>
                <td><?php echo $kcm -> nama?></td>
                <td>                    
                    <a href=<?php echo base_url("index.php/kecamatan/delete/$kcm->id")?>
                    class="btn btn-danger active" onclick="return hapusKecamatan('Apakah anda yakin ingin menghapus Kecamatan <?php echo $kcm->nama?>?')">Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href=<?php echo base_url("index.php/kecamatan/form")?> 
    class="btn btn-primary active">Tambah</a>
    </div>
</body>
</div>
</html>