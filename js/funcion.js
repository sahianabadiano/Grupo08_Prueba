
function seleccionFig(){
	let fig = document.getElementById('tipo');
	let figura = fig.value;

	if(figura == "rombo"){
		document.getElementById('dM').disabled=false;
		document.getElementById('dm').disabled=false;
		document.getElementById('lado_1').disabled=true;
		document.getElementById('lado_2').disabled=true;
		document.getElementById('lado_3').disabled=true;
		document.getElementById('lado_4').disabled=true;
		document.getElementById('altura').disabled=true;

	}else if(figura == "trapecio"){
		document.getElementById('dM').disabled=true;
		document.getElementById('dm').disabled=true;
		document.getElementById('lado_1').disabled=false;
		document.getElementById('lado_2').disabled=false;
		document.getElementById('lado_3').disabled=false;
		document.getElementById('lado_4').disabled=false;
		document.getElementById('altura').disabled=true;

	}else{
		document.getElementById('dM').disabled=true;
		document.getElementById('dm').disabled=true;
		document.getElementById('lado_1').disabled=false;
		document.getElementById('lado_2').disabled=false;
		document.getElementById('lado_3').disabled=true;
		document.getElementById('lado_4').disabled=true;
		document.getElementById('altura').disabled=false;
	}

	//document.getElementById('texto').innerText = `HOLA es un ${figura}.`;
}
