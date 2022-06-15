<?php 
    require "class/class_dispenser.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div class="container  text-center">
    <h2>Daftar Minuman</h2>
<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Minuman</th>
      <th scope="col">Harga Segelas</th>
      <th scope="col">Volume Minuman</th>
    </tr>
  </thead>
  <tbody>
  	<?php $i=1; ?>
	<?php foreach($minumans as $minuman) : ?>

	<tr>
      <th><?= $i; ?></th>
      <td><?= $minuman->getNamaMinuman(); 	?></td>
      <td><?= $minuman->getHargaSegelas(); 	?></td>
      <td><?= $minuman->getVolumes()." L";?></td>
    </tr>
	<?php $i++; ?>
	<?php endforeach; ?>

  </tbody>
</table>
<?php
    $es_teh->beli();
    $es_teh->beli();
    $es_teh->beli();

    $es_buah->beli();
    $es_buah->beli();
    $es_buah->beli();
    
    $es_teh->isi(200);
?>
<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Minuman</th>
      <th scope="col">Harga Segelas</th>
      <th scope="col">Volume Minuman</th>
    </tr>
  </thead>
  <tbody>
  	<?php $i=1; ?>
	<?php foreach($minumans as $minuman) : ?>

	<tr>
      <th><?= $i; ?></th>
      <td><?= $minuman->getNamaMinuman(); 	?></td>
      <td><?= $minuman->getHargaSegelas(); 	?></td>
      <td><?= $minuman->getVolumes()." L";?></td>
    </tr>
	<?php $i++; ?>
	<?php endforeach; ?>

  </tbody>
</table>
</div>

</body>
</html>