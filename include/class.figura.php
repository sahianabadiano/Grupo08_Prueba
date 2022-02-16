<?php
	abstract class figura{
		private $tipo;
		private $a; //area
		private $p; //perimetro
		
		public static function get_form(){
			$html = '
			<form name="figuras" id="figuras" method="POST" action="#">
			<table border=0 align="center">
				<tr>
					<th colspan="2" class="fs-title">INGRESO DATOS DE LA FIGURA</th>
				</tr>
				<tr>
					<td>Tipo: </td>
					<td>
					<br><br>
						<select name="tipo" id="tipo" onchange="seleccionFig();">
							<option value="sel">Seleccione...</option>
							<option value="rombo">Rombo</option>
							<option value="trapecio">Trapecio</option>
							<option value="romboide">Romboide</option>
						</select>
						<p id="texto"></p>
						
					</td>
				</tr>
				<tr>
					<td>Diagonal Mayor:</td>
					<td><input type="text" id="dM"  name="dM" size="4" disabled></td>
				</tr>
				<tr>
					<td>Diagonal menor:</td>
					<td><input type="text" id="dm"  name="dm" size="4" disabled></td>
				</tr>
				<tr>
					<td>Base Mayor:</td>
					<td><input type="text" id="lado_1"   name="lado_1" size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado izquierdo:</td>
					<td><input type="text" id="lado_2"  name="lado_2" size="4" disabled></td>
				</tr>
				<tr>
					<td>Base menor:</td>
					<td><input type="text" id="lado_3"   name="lado_3" size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado derecho:</td>
					<td><input type="text" id="lado_4"  name="lado_4" size="4" disabled></td>
				</tr>
				<tr>
					<td>altura:</td>
					<td><input type="text" id="altura"  name="altura" size="4" disabled></td>
				</tr>
				<tr>
					<td>altura:</td>
					<td><input type="text" id="altura"  name="altura" size="4" disabled></td>
				</tr>							
				<tr>
					<th colspan="2"><input class="action-button" type="submit" name="calcular" value="Calcular"></th>
				</tr>
			</table>
			</form>

			<script src="js/funcion.js"></script>';
			return $html;
		}
		
		//METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>
