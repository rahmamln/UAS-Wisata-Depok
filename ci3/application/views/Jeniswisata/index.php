<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Wisata</title>

    <?php
    $username = $this->session->userdata('username');
    if($username){
        echo "<h2>Selamat Datang $username</h2>";
    }
?>
    
</head>
<div class="container">
<body>
<div class="card">

<div class="card-body">
<div class="col-md-12">
    <h3 class="text-center">Jenis wisata</h3>
    <table border="1"  class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1 ;
            foreach($jeniswisata as $jenis){
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $jenis -> nama ?></td>
                <td>
                <a href="<?php echo base_url("index.php/jeniswisata/detail/$jenis->id") ?>" 
                class="btn btn-info btn-lg active" role="button" aria-pressed="true">Detail</a>
                &nbsp;
                <a href= <?php echo base_url("index.php/jeniswisata/edit/$jenis->id") ?> 
                class="btn btn-success btn-lg active" role="button" aria-pressed="true">Edit</a>
                &nbsp;
                <a href= <?php echo base_url("index.php/jeniswisata/delete/$jenis->id") ?> class="btn btn-danger btn-lg active" role="button" aria-pressed="true" 
                onclick=" return hapusJenis('Anda Yakin ingin menghapus jenis wisata  <?php echo $jenis->nama ?>?')">Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    </div>
    <a href="<?=base_url()?>index.php/jeniswisata/form" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah</a>
</div>
</div>
</body>
</div>
</html>
