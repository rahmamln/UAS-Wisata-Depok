
  <body>
    <div class="text-center mt-4">
  <h1>Komentar</h1>
  </div>
    <div class="container-fluid">
	<div class="row m-5">
		<div class="col-md-12">
<?php echo form_open("komentar/save")?>
  <div class="form-group row">
    <label for="komentar" class="col-4 col-form-label"><b>Beri Komentar</b></label> 
    <div class="col-8">
      <textarea id="komentar" name="komentar" cols="40" rows="6" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="rating" class="col-4 col-form-label"><b>Beri Rating</b></label> 
    <div class="col-8">
      <select id="rating" name="rating" class="custom-select">
        <option value="jelek">Jelek</option>
        <option value="kurang">Kurang Bagus</option>
        <option value="biasa">Biasa Aja</option>
        <option value="bagus">Bagus</option>
        <option value="sangat">Sangat Bagus</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  <?php echo form_close()?>

		</div>
	</div>
</div>

    <script src="<?php echo base_url('assets/js2/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js2/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js2/scripts.js')?>"></script>
  </body>
</html>