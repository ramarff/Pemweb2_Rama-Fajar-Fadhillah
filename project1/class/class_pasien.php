<?php
class Pasien{
	 public    $id,
			   $kode,
			   $nama,
			   $tgl_lahir,
			   $email,
			   $gender;

	 public function __construct($id, $kode, $nama, $tgl_lahir, $email, $gender){
			$this->id=$id;
			$this->kode=$kode;
			$this->nama=$nama;
			$this->tgl_lahir=$tgl_lahir;
			$this->email=$email;
			$this->gender=$gender;

		}
}


?>




