<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Jenis_wisata</title>
</head>
<body>
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row m-5">
        <div class="col-md-8">
            <h3 class="text-center m-3">Jenis wisata</h3>
            <br>
                <table   class="table table-striped ">
                  <tbody>
                        <tr>
                          <td>Id</td>
                          <td><?= $tempat_wisata->id ?></td>
                        <tr>
                          <td>Nama</td> 
                          <td><?= $tempat_wisata->nama ?></td>
                        </tr>
                        <tr>
                          <td>Alamat</td> 
                          <td><?= $tempat_wisata->alamat ?></td>
                        </tr>
                        <tr>
                          <td>Latlong</td> 
                          <td><?= $tempat_wisata->latlong ?></td>
                        </tr>
                        <tr>
                          <td>Jenis_id</td>  
                          <td><?= $tempat_wisata->jenis_id ?></td>
                        </tr>
                        <tr>
                          <td>Skor / Rating</td>
                          <td><?= $tempat_wisata->skor_rating?></td>
                        </tr>
                        <tr>
                          <td> Harga Tiket</td>
                          <td><?= $tempat_wisata->harga_tiket ?></td>
                        </tr>
                        <tr>
                          <td>Kecamatan</td>  
                          <td><?= $tempat_wisata->kecamatan_id ?></td>
                        </tr>
                        <tr>
                          <td>Website</td> 
                          <td><?= $tempat_wisata->website ?></td> 
                        </tr>
                        <tr>
                          <td>Fasilitas</td>
                          <td><?= $tempat_wisata->fasilitas ?></td>
                        </tr>
                    </tbody>
                </table>
        </div>
        <div class="col-md-4 mt-5">
          <br>
          <br>
          <img src="<?=base_url()?>uploads/photos/<?=$tempat_wisata->id?>.jpg" class="" width="300"/>
                <br>
                <p>Nama File : <?= $tempat_wisata->nama?></p>
                <?= 
                form_open_multipart('tempat_wisata/upload');
                ?>
                <input type="file" name="foto" size="300" />
                <input type="hidden" name="idtmp" value="<?=$tempat_wisata->id?>"/>
                <br/><br/>
                <input type="submit" value="Upload foto" class="btn btn-info"/>
                </form>
      
        </div>
      </div>
        <!-- /.card-body -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</body>
</html>