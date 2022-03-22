<?php 
class PersegiPanjang{
	public $luas;
	public $keliling;
	public $panjang;
	public $lebar;


	function __construct($panjang, $lebar){
		$this->panjang=$panjang;
		$this->lebar=$lebar;
	}

	function luas(){
		$luas=$this->panjang * $this->lebar;
		return $luas;
	}

	function keliling(){
		$keliling=2*($this->panjang + $this->lebar);
		return $keliling;
	}
}

 ?>