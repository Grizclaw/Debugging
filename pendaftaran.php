<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

    <body>

<nav class="navbar navbar-dark bg-primary">
	<div class="container">
	  <a class="navbar-brand">PENDAFTARAN SISWA BARU SMP 73 JAKARTA SELATAN </a>
  	</div>
</nav>

<div class="container">

<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "<div class='alert alert-success' role='alert'>
						  Pendaftaran Siswa Berhasil!
						</div>";
			} else {
				echo "<div class='alert alert-danger' role='alert'>
						  Pendaftaran Siswa Gagal!
						</div>";
			}
		?>
	</p>
<?php endif; ?>

	<div class="jumbotron mt-3">
	  <h1 class="display-4 mx-auto">FORMULIR PENDAFTARAN SISWA BARU</h1>
	<hr>
	
	<form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="nama">Nama Lengkap</label>
			<input type="text" class="form-control" name="nama"/>
		</div>

		<div class="form-group">
			<label for="foto">Foto</label><br>
            <input type="file" name="foto" class="form-control" required>
        </div>

		<div class="form-group">
			<label for="tgl_lahir">Tanggal Lahir</label><br>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control"/>
        </div>

		<div class="form-group">
			<label for="jenis_kelamin">Jenis Kelamin</label>

			<div class="form-check">
			  <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
			  <label class="form-check-label" for="laki-laki">
			    Laki-Laki
			  </label>
			</div>

			<div class="form-check">
			  <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
			  <label class="form-check-label" for="perempuan">
			    Perempuan
			  </label>
			</div>
		</div>
		
		<div class="form-group">
			<label for="agama">Agama</label>
			<select name="agama" class="form-control">
			<option value="">-- Agama --</option>
				<option>Islam</option>
				<option>Kristen</option>
				<option>Hindu</option>
				<option>Budha</option>
				<option>Konghucu</option>
			</select>
		</div>

		<div class="form-group">
			<label for="sekolah_asal">Sekolah Asal</label>
			<input type="text" name="sekolah_asal" class="form-control" />
		</div>

		<div class="form-group">
			<label for="ortu_wali">Orang Tua/Wali</label>
			<input type="text" name="ortu_wali" class="form-control" />
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" name="email" class="form-control" />
		</div>

		<div class="form-group">
			<label for="wa">Nomer telephone</label>
			<input type="text" name="wa" class="form-control" />
		</div>

		<div class="form-group">
			<label for="alamat">Alamat</label>
			<textarea class="form-control" name="alamat"></textarea>
		</div>

		<input type="submit" value="Daftar" class="btn btn-md btn-primary" name="daftar" />	
	</form>

</div>
</body>
</html>
