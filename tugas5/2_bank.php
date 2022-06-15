<?php 
require "class/class_AccountBank.php";
$ahmad=new AccountBank("C001",6000000,"Ahmad");
$budi=new AccountBank("C002", 3350000, "Budi",);
$kurniawan=new AccountBank("C003",2500000, "Kurniawan");
$allCustomers=[$ahmad, $budi, $kurniawan];
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
<div class="container mt text-center">
<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">No Account</th>
      <th scope="col">Pemilik</th>
      <th scope="col">Saldo</th>
    </tr>
  </thead>
  <tbody>
  	<?php $i=1; ?>
	<?php foreach($allCustomers as $customer) : ?>

	<tr>
      <th><?= $i; ?></th>
      <td><?= $customer->getNomor(); 	?></td>
      <td><?= $customer->getName(); 	?></td>
      <td><?= $customer->getSaldo();?></td>
    </tr>
	<?php $i++; ?>
	<?php endforeach; ?>

  </tbody>
</table>
<?php 
   
    $ahmad->deposit(1000000);
?>
<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">No Account</th>
      <th scope="col">Pemilik</th>
      <th scope="col">Saldo</th>
    </tr>
  </thead>
  <tbody>
  	<?php $i=1; ?>
	<?php foreach($allCustomers as $customer) : ?>

	<tr>
      <th><?= $i; ?></th>
      <td><?= $customer->getNomor(); 	?></td>
      <td><?= $customer->getName(); 	?></td>
      <td><?= $customer->getSaldo();?></td>
    </tr>
	<?php $i++; ?>
	<?php endforeach; ?>

  </tbody>
</table>
<?php 
    $ahmad->transfer($budi, 500000);
    $ahmad->transfer($kurniawan, 1500000);
    $budi->withdraw(2500000);
?>
<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">No Account</th>
      <th scope="col">Pemilik</th>
      <th scope="col">Saldo</th>
    </tr>
  </thead>
  <tbody>
  	<?php $i=1; ?>
	<?php foreach($allCustomers as $customer) : ?>

	<tr>
      <th><?= $i; ?></th>
      <td><?= $customer->getNomor(); 	?></td>
      <td><?= $customer->getName(); 	?></td>
      <td><?= $customer->getSaldo();?></td>
    </tr>
	<?php $i++; ?>
	<?php endforeach; ?>

  </tbody>
</table>
</div>
</body>
</html>