<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Nilai</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-12">
			<form method="POST" action="nilai_mahasiswa.php">
				<h1>Form Nilai Siswa</h1>
				<hr>
				<div class="form-group row">
				    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="nama" name="nama"  placeholder="Nama Lengkap">
				    </div>
				</div>
				<div class="form-group row">
				    <label for="matkul" class="col-sm-2 col-form-label">Mata Kuliah</label>
				   	<div class="col-sm-10">
				   	  <select class="form-control" name="matkul"  id="matkul">
					      <option value="Dasar-dasar Pemrograman">Dasar-dasar Pemrograman</option>
					      <option value="Pemrograman Web">Pemrograman Web</option>
					      <option value="Sistem Operasi">Sistem Operasi</option>
					      <option value="Bahasa Indonesia">Bahasa Indonesia</option>
					      <option value="Agama Islam">Agama Islam</option>
				      </select>
				   	</div>
				</div>
				<div class="form-group row">
				    <label for="inputPassword" class="col-sm-2 col-form-label">Nilai UTS</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="text"  placeholder="Nilai UTS" name="nilai_uts">
				    </div>
				</div>
				<div class="form-group row">
				    <label for="inputPassword" class="col-sm-2 col-form-label">Nilai UAS</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="text" placeholder="Nilai UAS" name="nilai_uas">
				    </div>
				</div>
				<div class="form-group row">
				    <label for="inputPassword" class="col-sm-2 col-form-label" name="nilai_tugas">Nilai Tugas</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="text"  placeholder="Nilai Tugas" name="nilai_tugas">
				    </div>
				</div>
				<div class="form-group row">
					<div class="offset-2">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-danger" name="batal">Batal</button>
							<button type="submit" class="btn btn-primary" name="kirim">Kirim</button>
						</div>
					</div>					
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>