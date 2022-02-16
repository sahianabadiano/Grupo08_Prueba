<?php

//require_once("../include/Interface.formulas.php")
class romboide extends figura implements formulas{

	private $lado1;
	private $lado2;
    private $altura;

	public function __construct($l1, $l2, $a){
		$this->lado1 = $l1;
		$this->lado2 = $l2;
        $this->altura = $a;
	}

	public function area(){
		$area = $this->lado1 * $this->altura;
		return $area;
	}

	public function perimetro(){
		$perimetro = ($this->lado1 * 2)+ ($this->lado2 * 2);
		return $perimetro;
	}

	public function GetArea(){
		$area = $this->lado1 * $this->altura;
		return $area;
	}
	
	public function GetPerimetro(){
		$perimetro = ($this->lado1 * 2)+ ($this->lado2 * 2);
		return $perimetro;
	}
	    
	public function GetTipo(){
		return "romboide";
	}
}
?>
