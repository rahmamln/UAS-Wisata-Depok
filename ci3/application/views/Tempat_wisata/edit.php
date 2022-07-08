<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Tempat Wisata</title>
</head>
<br>
<div class="container">
<body>
<div class="card">
<div class="container-fluid">
        <?php
          $hidden = ['idedit'=>$obj_Tempat_wisata->id];
        ?>
          <?php echo form_open("tempat_wisata/save",'',$hidden) ?>
            <div class="form-group row">
              <label for="nama" class="col-3 col-form-label">Nama</label> 
              <div class="col-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-address-card-o"></i>
                    </div>
                  </div> 
                  <input id="nama" name="nama" type="text" class="form-control" required="required" value="<?php echo $obj_Tempat_wisata->nama?>">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="alamat" class="col-3 col-form-label">Alamat</label> 
              <div class="col-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-location-arrow"></i>
                    </div>
                  </div> 
                  <input id="alamat" name="alamat" type="text" class="form-control" required="required" value="<?php echo $obj_Tempat_wisata->alamat?>">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="latlong" class="col-3 col-form-label">Latlong</label> 
              <div class="col-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-map-marker"></i>
                    </div>
                  </div> 
                  <input id="latlong" name="latlong" type="text" required="required" class="form-control" value="<?php echo $obj_Tempat_wisata->latlong?>">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="jenis_id" class="col-3 col-form-label">Jenis Id</label> 
              <div class="col-6">
                <select class="form-control" name="jenis_id" id="jenis_id">
                <?php
                include "config.php";
                $result = mysqli_query($connect,"SELECT * FROM jenis_wisata");
                while ($row = mysqli_fetch_array($result))
                { ?>
                <option value="<?= $row[0]?>">
                <?= $row[0]?>
                </option>
                <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="skor" class="col-3 col-form-label">Skor / Rating</label> 
              <div class="col-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-gratipay"></i>
                    </div>
                  </div> 
                  <input id="skor_rating" name="skor_rating" type="text" class="form-control" required="required" value="<?php echo $obj_Tempat_wisata->skor_rating?>">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="harga_tiket" class="col-3 col-form-label">Harga Tiket</label> 
              <div class="col-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-money"></i>
                    </div>
                  </div> 
                  <input id="harga_tiket" name="harga_tiket" type="text" class="form-control" required="required" value="<?php echo $obj_Tempat_wisata->harga_tiket?>">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="kecamatan_id" class="col-3 col-form-label">Kecamatan</label> 
              <div class="col-6">
                <select class="form-control" name="kecamatan_id" id="kecamatan_id">
                  <?php
                  include "config.php";
                  $result = mysqli_query($connect,"SELECT * FROM kecamatan");
                  while ($row = mysqli_fetch_array($result))
                  { ?>
                  <option value="<?= $row[0]?>">
                  <?= $row[0]?>
                  </option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="website" class="col-3 col-form-label">Website</label> 
              <div class="col-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-chrome"></i>
                    </div>
                  </div> 
                  <input id="website" name="website" type="text" class="form-control" required="required" value="<?php echo $obj_Tempat_wisata->website?>">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="fasilitas" class="col-3 col-form-label">Fasilitas</label> 
              <div class="col-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-beer"></i>
                    </div>
                  </div> 
                  <input id="fasilitas" name="fasilitas" type="text" class="form-control" required="required" value="<?php echo $obj_Tempat_wisata->fasilitas?>">
                </div>
              </div>
            </div> 
            <div class="form-group row">
              <div class="offset-3 col-6">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          <?php echo form_close() ?>
        </div>
          </div>
        </div>
      </div>
    </div>
</div>
</html>
