<?php 

class BMIPasien{
	public  $id,
		    $tanggal,
		    $pasien,
		    $BMI;

	public function __construct($tanggal, $pasien, $BMI){
			$this->tanggal=$tanggal;
			$this->pasien=$pasien;
			$this->BMI=$BMI;
	}
}

 ?>
