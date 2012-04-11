<?php
class Dreieck {

	function berechUmfang($seiteA, $seiteB, $seiteC){
		if(isset($seiteA) && isset($seiteB) && isset($seiteC)){
			$umfang = $seiteA+$seiteB+$seiteC;
			return $umfang;
		} else {
			return 1;		
	}
	function berechGleichSeitig($seiteA, $seiteB, $seiteC){
		if($seiteA == $seiteB && $seiteB == $seiteC) {
			return "Dreieck ist gleichseitig";
		} else {
			return "Dreieck ist nicht gleichseitig";
		}		
	}
}

?>