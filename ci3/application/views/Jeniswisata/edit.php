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
    <h2 class="m-5">Form Edit Jenis wisata</h2>          
    <?php
      $hidden = ['idedit'=>$obj_Jeniswisata->id];
    ?>
  <?php echo form_open("jeniswisata/save",'',$hidden) ?>  
  <div class="form-group row align-item-center">
      <label for="nama" class="col-2 col-form-label ml-3">Nama</label> 
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-user-circle-o"></i>
            </div>
          </div> 
          <input id="nama" name="nama" placeholder="Masukkan nama" type="text" value="<?php echo $obj_Jeniswisata->nama?>" class="form-control">
        </div>
      </div>
    </div> 

    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  <?php echo form_close() ?>
    </div>
</div>
</html>