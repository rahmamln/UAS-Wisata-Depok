<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Form Input Kecamatan</h2>
<?php echo form_open("kecamatan/save")?>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Kecamatan</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="masukkan nama kecamatan" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close()?>
</div>