<?php
class Dispenser
{
	protected $volume;
	protected $hargaSegelas;
	private $volumeGelas;
	public $namaMinuman;

    public function __construct($volume, $hargaSegelas, $volumeGelas, $namaMinuman){
		$this->volume=$volume;
		$this->hargaSegelas=$hargaSegelas;
		$this->volumeGelas=$volumeGelas;
		$this->namaMinuman=$namaMinuman;
	}
   

    public function isi($vol)
    {
        $this->volume += $vol;
		echo "Dipenser ".$this->namaMinuman." berhasil diisi ".$vol." L";
    }
	public function getNamaMinuman(){
		return $this->namaMinuman;
	}
	public function getHargaSegelas(){
		return $this->hargaSegelas;
	}
	public function getVolumes(){
		return $this->volume;
	}
	public function getVolumeGelas(){
		return $this->volumeGelas;
	}
    public function beli()
    {
        $this->volume-=$this->volumeGelas;

        if ($this->volume >= 0) {
           echo "Pembelian minuman ".$this->namaMinuman." Berhasil"."<br>"; 
        } else {
            echo "Maaf minuman " . $this->namaMinuman . " sudah habis"."<br>";
        }
    }
}

$es_teh = new Dispenser(500, 1000, 100, "Es teh");
$es_buah = new Dispenser(700, 1000, 200, "Es buah");
$es_mk = new Dispenser(900, 1000, 50, "Es mk");
$minumans=[$es_teh, $es_buah, $es_mk];

?>