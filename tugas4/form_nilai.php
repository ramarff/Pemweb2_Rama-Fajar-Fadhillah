<?php
include "classMahasiswa.php";
$nim=$_POST["nim"];
$matkul=$_POST["matkul"];
$nilai=$_POST["nilai"];	

$mahasiswa=new NilaiMahasiswa($matkul, $nilai, $nim);
?>


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
			<form method="POST" action="form_nilai.php">
				<h1>Form Nilai Ujian</h1>
				<hr>
				<div class="form-group row">
				    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="nim" name="nim"  placeholder="NIM">
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
				    <label for="nilai" class="col-sm-2 col-form-label">Nilai</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="nilai"  placeholder="Nilai" name="nilai">
				    </div>
				</div>
				<div class="form-group row">
					<div class="offset-2">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-success" name="kirim">Simpan</button>
						</div>
					</div>					
				</div>
			</form>
		</div>
	</div>

	<div class="row">
     <div class="col-12">
         <table class="table text-center">
              <thead class="thead-dark">
                <tr>
                  <th>NIM</th>
                  <th>Mata Kuliah</th>
                  <th>Nilai</th>
                  <th>Grade</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?= $mahasiswa->nim; ?></td>
                  <td><?= $mahasiswa->matkul; ?></td>
                  <td><?= $mahasiswa->nilai; ?></td>
                  <td><?= $mahasiswa->grade(); ?></td>
                  <td><?= $mahasiswa->hasil(); ?></td>
              </tbody>
            </table>
     </div>
 </div>

</div>

</body>
</html>