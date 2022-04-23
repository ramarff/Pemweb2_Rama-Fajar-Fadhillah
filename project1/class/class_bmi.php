<?php 

class BMI{
    public $berat, $tinggi;
    function __construct($berat, $tinggi){
        $this->berat=$berat;
        $this->tinggi=$tinggi;
    }

    function nilaiBMI(){
        $nilaiBMI=$this->berat/(pow($this->tinggi/100, 2));
        return number_format($nilaiBMI, 1);
    }

    function statusBMI(){
        $nilaiBMI=self::nilaiBMI();
        $statusBMI;
        
        if ($nilaiBMI >= 30.0){
            $statusBMI="Kegemukan (Obesitas)";
        }else if ($nilaiBMI > 25.0 && $nilaiBMI < 29.9) {
            $statusBMI="Kelebihan berat badan";
        }else if ($nilaiBMI > 18.5 && $nilaiBMI < 25.0){
            $statusBMI="Normal (Ideal)";
        }else if($nilaiBMI < 18.5){
            $statusBMI="Kekurangan berat badan";
        }
        return $statusBMI;
    }
}



 ?>
   