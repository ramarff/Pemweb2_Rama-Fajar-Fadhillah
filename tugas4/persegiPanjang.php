<?php 
require_once "classPersegiPanjang.php";

$persegi_panjang=new PersegiPanjang(10, 20);

$luasPersegiPanjang=$persegi_panjang->luas();


echo "Persegi Panjang"."<br>";
echo "Panjang:".$persegi_panjang->panjang." cm <br>";
echo "Lebar:".$persegi_panjang->lebar." cm <br>";
echo "Luas:".$persegi_panjang->luas()." cm <br>";
echo "Keliling:".$persegi_panjang->keliling()." cm <br>";
 ?>