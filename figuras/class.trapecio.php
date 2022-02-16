<?php

//require_once("../include/Interface.formulas.php")
class trapecio extends figura implements formulas{

	private $lado1 =0;
	private $lado2 =0;
	private $lado3 =0;
	private $lado4 =0;

	public function __construct($l1, $l2, $l3){
		$this->lado1 = $l1;
		$this->lado2 = $l2;
		$this->lado3 = $l3;
		$this->lado4 = $l4;
	}



	public function area(){
		$parte = ($this->lado1 - $this->lado3)/2;
		$h = sqrt(($this->lado2*$this->lado2) - ($pa*$pa));
		$area = (($this->lado1 + $this->lado3)/2)*$h;

		return $area;
	}

	public function perimetro(){
		$perimetro = ($this->lado1 + $this->lado2 + $this->lado3 + $this->lado4);
		return $perimetro;

	}

	public function GetArea(){
		$parte = ($this->lado1 - $this->lado3)/2;
		$h = sqrt(($this->lado2*$this->lado2) - ($pa*$pa));
		$area = (($this->lado1 + $this->lado3)/2)*$h;

		return $area;
	}
	    
	    
	public function GetPerimetro(){
		$perimetro = ($this->lado1 + $this->lado2 + $this->lado3 + $this->lado4);
		return $perimetro;


	}
	   
	    
	public function GetTipo(){
		$trapecio =  "Trapecio";
		return $triangulo;
	}
	
}
?>
