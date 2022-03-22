<?php 
class Mahasiswa{
	var $nim;
	var $nama;
	var $thn_angkatan;
	var $prodi;
	var $ipk;

	function __construct($nama, $nim, $prodi, $thn_angkatan, $ipk){
		$this->nama=$nama;
		$this->nim=$nim;
		$this->prodi=$prodi;
		$this->ipk=$ipk;
		$this->thn_angkatan=$thn_angkatan;
	}

	function predikat_ipk(){
		if ($this->ipk < 2.0) return "Cukup";
		elseif ($this->ipk >= 2.0 && $this->ipk < 3.0) return "Baik";
		elseif ($this->ipk >= 3.0 && $this ->ipk < 3.75) return "Memuaskan";
		elseif ($this->ipk >= 3.75 && $this->ipk <= 4.0) return "Cum Laude";
	}
}


class NilaiMahasiswa{
	var $matkul;
	var $nilai;
	var $nim;

	function __construct($matkul, $nilai, $nim){
		$this->matkul=$matkul;
		$this->nilai=$nilai;
		$this->nim=$nim;
	}

	function grade(){
		$nilai=$this->nilai;
		$grade;
		if ($nilai >=85 && $nilai <= 100){
			$grade="A";
		}elseif($nilai >= 70 && $nilai < 85){
			$grade="B";
		}elseif($nilai >= 56 && $nilai < 70){
			$grade="C";
		}elseif($nilai >= 36 && $nilai < 56){
			$grade="D";
		}elseif($nilai >= 0 &&	 $nilai < 36){
			$grade="E";
		}
		return $grade;
	}

	function hasil(){
		$nilai=$this->nilai;
		if ($nilai < 56){
			return "Tidak Lulus";
		}
		return "Lulus";

	}
}

 ?>