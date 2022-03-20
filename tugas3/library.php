<?php 
function grade($total_nilai){
	$grade;
	if ($total_nilai >= 85 && $total_nilai <= 100){
		$grade="A";
	}elseif($total_nilai >= 70 && $total_nilai < 85){
		$grade="B";
	}elseif($total_nilai >= 56 && $total_nilai < 70){
		$grade="C";
	}elseif($total_nilai >= 36 && $total_nilai < 56){
		$grade="D";
	}elseif ($total_nilai >= 0 && $total_nilai < 36){
		$grade="E";
	}else{
		$grade="I";
	}
	return $grade;
}


function status($total_nilai){
	$status;
	if ($total_nilai >= 55){
		$status="Lulus";
	}else{
		$status="Tidak Lulus";
	}
	return $status;
}

function predikat($grade){
	$predikat;
	switch ($grade) {
		case 'A':
			$predikat="Sangat Memuaskan";
			break;
		case "B":
			$predikat="Memuaskan";
			break;
		case "C":
			$predikat="Cukup";
			break;
		case "D":
			$predikat="Kurang";
			break;
		case "E":
			$predikat="Sangat Kurang";
			break;
		default:
			$predikat="Tidak Ada";
			break;
	}
	return $predikat;
}

 ?>