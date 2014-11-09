function sololetrassinespacios(e){
key=e.keyCode || e.which;
teclado=String.fromCharCode(key).toLowerCase();
letras="abcdefghijklmnñopqrstuvwxyz";
especiales="8-37-38-46-164";
teclado_especial=false;
for (var i in especiales) {
	if(key==especiales[i]){
		teclado_especial=true;
		break;
	}
};
if (letras.indexOf(teclado)==-1 && !teclado_especial) {
	return false;
}
}


function sololetrasconespacios(e){
key=e.keyCode || e.which;
teclado=String.fromCharCode(key).toLowerCase();
letras=" abcdefghijklmnñopqrstuvwxyz";
especiales="8-37-38-46-164";
teclado_especial=false;
for (var i in especiales) {
	if(key==especiales[i]){
		teclado_especial=true;
		break;
	}
};
if (letras.indexOf(teclado)==-1 && !teclado_especial) {
	return false;
}
}

function solonumeros(e){
key=e.keyCode || e.which;
teclado=String.fromCharCode(key);
numero="0123456789";
especiales="8-37-38-46";
teclado_especial=false;
for(var i in especiales){
	if(key==especiales[i]){
		teclado_especial=true;
	}
}
if(numero.indexOf(teclado)==-1 && !teclado_especial){
return false;
}
}

function email(e){
key=e.keyCode || e.which;
teclado=String.fromCharCode(key).toLowerCase();
email = "abcdefghijklmnñopqrstuvwxyz0123456789@._-";
especiales="8-37-38-46-164";
teclado_especial=false;
for (var i in especiales) {
	if(key==especiales[i]){
		teclado_especial=true;
		break;
	}
};
if (email.indexOf(teclado)==-1 && !teclado_especial) {
	return false;
}
}

function usuario(e){
key=e.keyCode || e.which;
teclado=String.fromCharCode(key).toLowerCase();
letra_numeros = "abcdefghijklmnñopqrstuvwxyz0123456789_.";
especiales="8-37-38-46-164";
teclado_especial=false;
for (var i in especiales) {
	if(key==especiales[i]){
		teclado_especial=true;
		break;
	}
};
if (letra_numeros.indexOf(teclado)==-1 && !teclado_especial) {
	return false;
}
}

function direccion(e){
key=e.keyCode || e.which;
teclado=String.fromCharCode(key).toLowerCase();
dir = " abcdefghijklmnñopqrstuvwxyz0123456789#()./";
especiales="8-37-38-46-164";
teclado_especial=false;
for (var i in especiales) {
	if(key==especiales[i]){
		teclado_especial=true;
		break;
	}
};
if (dir.indexOf(teclado)==-1 && !teclado_especial) {
	return false;
}
}