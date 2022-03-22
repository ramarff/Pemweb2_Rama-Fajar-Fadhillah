<?php 
require_once "classMahasiswa.php";

$rama=new Mahasiswa("Rama Fajar Fadhillah","12103910","Teknik Informatika","2021",3.4);
$fatimah=new Mahasiswa("Fatimah Aznur","12103912","Teknik Informatika","2021", 3.06);
$paizal=new Mahasiswa("Paizal Merdijaya","12103913","Teknik Informatika","2021", 3.7);
$fiqri=new Mahasiswa("Muhammad Fiqri Dwi Nugraha","12103914","Teknik Informatika","2021", 3.7);
$data=[$rama, $fatimah, $paizal, $fiqri];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <title>Daftar Mahasiswa</title>
 </head>
 <body>
<div class="container">
 <div class="row">
     <div class="col-12">
         <h1 class="text-center">Daftar Mahasiswa</h1> 
         <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
     </div>
 </div>
 <div class="row">
     <div class="col-12">
         <table class="table text-center">
              <thead class="thead-dark">
                <tr>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>Prodi</th>
                  <th>IPK</th>
                  <th>Predikat</th>
                  <th>Tahun Angkatan</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $mahasiswa) : ?>
                <tr>
                  <td><?= $mahasiswa->nama; ?></td>
                  <td><?= $mahasiswa->nim; ?></td>
                  <td><?= $mahasiswa->prodi; ?></td>
                  <td><?= $mahasiswa->ipk; ?></td>
                  <td><?= $mahasiswa->predikat_ipk(); ?></td>
                  <td><?= $mahasiswa->thn_angkatan; ?></td>
              </tbody>
                <?php endforeach; ?>
            </table>
     </div>
 </div>
 </div>
 </body>
 </html>