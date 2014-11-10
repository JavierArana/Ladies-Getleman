function sololetrassinespacios(e){
var key=e.keyCode || e.which;
var teclado=String.fromCharCode(key).toLowerCase();
var letras="abcdefghijklmnñopqrstuvwxyz";
var especiales="8-37-38-46-164";
var teclado_especial=false;
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
var key=e.keyCode || e.which;
var teclado=String.fromCharCode(key).toLowerCase();
var letras=" abcdefghijklmnñopqrstuvwxyz";
var especiales="8-37-38-46-164";
var teclado_especial=false;
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
var key=e.keyCode || e.which;
var teclado=String.fromCharCode(key);
var numero="0123456789";
var especiales="8-37-38-46";
var teclado_especial=false;
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
var key=e.keyCode || e.which;
var teclado=String.fromCharCode(key).toLowerCase();
var email = "abcdefghijklmnñopqrstuvwxyz0123456789@._-";
var especiales="8-37-38-46-164";
var teclado_especial=false;
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
var key=e.keyCode || e.which;
var teclado=String.fromCharCode(key).toLowerCase();
var letra_numeros = "abcdefghijklmnñopqrstuvwxyz0123456789_.";
var especiales="8-37-38-46-164";
var teclado_especial=false;
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
var key=e.keyCode || e.which;
var teclado=String.fromCharCode(key).toLowerCase();
var dir = " abcdefghijklmnñopqrstuvwxyz0123456789#()./";
var especiales="8-37-38-46-164";
var teclado_especial=false;
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