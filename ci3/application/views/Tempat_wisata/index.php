<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Tempat Wisata</title>
</head>

<div class="container">
<body>
<div class="card">
<div class="card-body">
          <div class="col-lg-12">
            <h3 class="text-center">Tempat wisata</h3>
            <table border="1"  class="table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Latlong</th>
                        <th>Jenis_id</th>
                        <th>Skor / Rating</th>
                        <th>Harga Tiket</th>
                        <th>Kecamatan</th>
                        <th>Website</th>
                        <th>Fasilitas</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1 ;
                    foreach($tempat_wisata as $jenis){
                    ?>
                    <tr>
                        <td><?php echo $nomor ?></td>
                        <td><?php echo $jenis -> nama ?></td>
                        <td><?php echo $jenis -> alamat ?></td>
                        <td><?php echo $jenis -> latlong ?></td>
                        <td><?php echo $jenis -> jenis_id ?></td>
                        <td><?php echo $jenis -> skor_rating ?></td>
                        <td><?php echo $jenis -> harga_tiket ?></td>
                        <td><?php echo $jenis -> kecamatan_id ?></td>
                        <td><?php echo $jenis -> website ?></td>
                        <td><?php echo $jenis -> fasilitas ?></td>
                        <td>
                        <a href="<?php echo base_url("index.php/tempat_wisata/detail/$jenis->id") ?>" 
                        class="btn btn-info btn-sm active" role="button" aria-pressed="true">Detail</a>
                        &nbsp;
                        <br>
                        <a href= <?php echo base_url("index.php/tempat_wisata/edit/$jenis->id") ?> 
                        class="btn btn-success btn-sm active" role="button" aria-pressed="true">Edit</a>
                        &nbsp;
                        <br>
                        &nbsp;
                        <a href= <?php echo base_url("index.php/tempat_wisata/delete/$jenis->id") ?> class="btn btn-danger btn-sm active" role="button" aria-pressed="true" 
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
            <a href="<?=base_url()?>index.php/tempat_wisata/form" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah</a>
        </div>
      </div>
</div>
</html>
