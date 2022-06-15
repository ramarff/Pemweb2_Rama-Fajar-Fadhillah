<?php 
class Account{
	protected $nomorAccount, $saldo;

	public function __construct($nomorAccount, $saldo){
		$this->nomorAccount=$nomorAccount;
		$this->saldo=$saldo;
	}
	public function cetakSukses($aksi, $nama, $nomor, $jumlah){	
		if($aksi == "menabung"){
			echo "======================"."<br>";
			echo "Berhasil ".$aksi."<br>";
			echo "======================"."<br>";
			echo "Nama :".$nama."<br>";
			echo "Nomor Akun:".$nomor."<br>";
			echo "Jumlah uang yang ditabung:".$jumlah."<br>";
			echo "========================"."<br>";
		}else if($aksi == "transfer"){
			echo "======================"."<br>";
			echo "Berhasil ".$aksi."<br>";
			echo "======================"."<br>";
			echo "Akun tujuan:".$nama."<br>";
			echo "Nomor Akun:".$nomor."<br>";
			echo "Jumlah uang yang ditransfer:".$jumlah."<br>";
			echo "========================"."<br>";
		}else if($aksi == "tarik-tunai"){
			echo "======================"."<br>";
			echo "Berhasil ".$aksi."<br>";
			echo "======================"."<br>";
			echo "Nama :".$nama."<br>";
			echo "Nomor Akun:".$nomor."<br>";
			echo "Jumlah uang yang diambil tunai:".$jumlah."<br>";
			echo "========================"."<br>";
		}
	}
	public function cetakGagal($aksi, $nama, $nomor, $minimal){
		if($aksi == "menabung"){
			echo "======================"."<br>";
			echo "Gagal ".$aksi."<br>";
			echo "======================"."<br>";
			echo "Maaf kamu gagal menabung"."<br>";
			echo "Jumlah uang yang bisa ditabung minimal sebesar ".$minimal."<br>";
			echo "========================"."<br>";
		}else if($aksi == "transfer"){
			echo "======================"."<br>";
			echo "Gagal ".$aksi."<br>";
			echo "======================"."<br>";
			echo "Akun tujuan :".$nama."<br>";
			echo "Nomor Akun:".$nomor."<br>";
			echo "Maaf kamu gagal transfer"."<br>";
			echo "Jumlah uang yang bisa ditransfer minimal sebesar ".$this->rupiah($minimal)."<br>";
			echo "========================"."<br>";
		}
	}
	public function deposit($jumlahUang, $aksi="menabung"){
		$minimalDeposit=50000;
		if ($jumlahUang >= $minimalDeposit){
			$this->saldo+=$jumlahUang;
			return $this->cetakSukses("menabung", $this->namaPemilik, $this->nomorAccount, $this->rupiah($jumlahUang));
		}else{ 	 
			return $this->cetakGagal("menabung", $minimalDeposit);
		}
	}

	public function withdraw($jumlahUang){
		$this->saldo-=$jumlahUang;
		return $this->cetakSukses("tarik-tunai", $this->namaPemilik, $this->nomorAccount, $this->rupiah($jumlahUang));
	}

	public function rupiah($angka){
		$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
		return $hasil_rupiah;
	 
	}


}

class AccountBank extends Account{
	protected $namaPemilik;

	public function __construct($nomorAccount, $saldo, $namaPemilik){
		parent::__construct($nomorAccount, $saldo);
		$this->namaPemilik=$namaPemilik;
	}
	public function transfer($tujuan, $jumlahUang){
		$minimalTransfer=50000;
		if ($jumlahUang >= $minimalTransfer){
			$tujuan->saldo+=$jumlahUang;
			$this->saldo-=$jumlahUang;
			return $this->cetakSukses("transfer", $tujuan->namaPemilik, $tujuan->nomorAccount, $this->rupiah($jumlahUang));
		}else{
			return $this->cetakGagal("transfer", $tujuan->namaPemilik, $tujuan->nomorAccount, $minimalTransfer);
		}
	}
	public function getName(){
		return $this->namaPemilik;
	}
	public function getSaldo(){
		return $this->rupiah($this->saldo);
	}
	public function getNomor(){
		return $this->nomorAccount;
	}
}
 ?>
