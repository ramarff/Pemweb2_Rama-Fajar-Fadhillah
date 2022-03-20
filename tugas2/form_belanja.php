<?php 
$nama=$_POST['nama'];
$produk=$_POST['radio'];
$jumlah=$_POST["jumlah"];
$total;
if ($produk === "tv"){
	$total=$jumlah * 4200000;
}elseif($produk === "kulkas"){
	$total=$jumlah * 3100000;
}
elseif($produk === "mesin_cuci"){
	$total=$jumlah * 3800000;
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Belanja</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<style type="text/css">
		.row{
			position: relative;
		}
		.row .col-md-4{
			position:absolute;
			right:0;
			top: 0;
		}
	</style>

</head>
<body>
<form method="POST" action="form_belanja.php">
<div class="row">
  <div class="col-md-8 ml-4">
  	<h1>Belanja Online</h1>
	<div class="form-group row">
	    <label for="text" class="col-sm-2 col-form-label">Customer</label> 
	    <div class="col-5">
	      <input id="text" name="nama" placeholder="Nama Customer" type="text" class="form-control">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label class="col-sm-2">Pilih Produk</label> 
	    <div class="col-5">
	      <div class="custom-control custom-radio custom-control-inline">
	        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
	        <label for="radio_0" class="custom-control-label">TV</label>
	      </div>
	      <div class="custom-control custom-radio custom-control-inline">
	        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
	        <label for="radio_1" class="custom-control-label">KULKAS</label>
	      </div>
	      <div class="custom-control custom-radio custom-control-inline">
	        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="mesin_cuci"> 
	        <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
	      </div>
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label> 
	    <div class="col-5">
	      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
	    </div>
	  </div> 
	  <div class="form-group row">
	    <div class="offset-2 col-5">
	      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
	    </div>
	  </div>
	</div>
	<div class="col-md-4">
		<ul class="list-group">
		  <li class="list-group-item text-white active">Daftar Harga</li>
		  <li class="list-group-item">TV        :Rp4.200.000</li>
		  <li class="list-group-item">Kulkas    :Rp3.100.000</li>
		  <li class="list-group-item">Mesin Cuci:Rp3.800.000</li>
		  <li class="list-group-item active text-white">Harga dapat berubah setiap saat</li>
		</ul>
	</div>
</div>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th>Nama Customer</th>
			      <th>Produk Pilihan</th>
			      <th>Jumlah</th>
			      <th>Total Belanja</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<tr>
			  		<td><?= $nama; ?></td>
			  		<td><?= $produk; ?></td>
			  		<td><?= $jumlah; ?></td>
			  		<td><?= $total; ?></td>
			  	</tr>
			  </tbody>
		</div>
	</div>
</div>
</form>

</body>
</html>