<?php

//require_once("../include/Interface.formulas.php")
class rombo extends figura implements formulas {

	
	private $diagonalM;
	private $diagonalm;

	public function __construct($dM, $dm){
		$this->diagonalM = $dM;
		$this->diagonalm = $dm;
	}


	public function area(){
		$area = ($this->diagonalM*$this->diagonalm)/2;
		return $area;
	}

	public function perimetro(){
		$lado = sqrt(pow(($this->diagonalM/2), 2) + pow(($this->diagonalm/2), 2));
		
		$perimetro = $lado * 4;
		return $perimetro;

	}

	public function GetArea(){
		$area = ($this->diagonalM*$this->diagonalm)/2;
		return $area;

	}
	    
	    
	public function GetPerimetro(){
		$lado = sqrt(pow(($this->diagonalM/2), 2) + pow(($this->diagonalm/2), 2));
		
		$perimetro = $lado * 4;
		return $perimetro;

	}
	   
	    
	public function GetTipo(){
		return "rombo";

	}

}
?>
