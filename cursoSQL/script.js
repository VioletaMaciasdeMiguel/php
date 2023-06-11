function nombre_ok(){
	var nombre = document.getElementById('nombre');
	var nombre_valido = /^[a-zA-ZÀ-ÿ\s]{1,40}$/
	var error_nombre= document.getElementById('error_nombre');
	let ok = false;

	if (nombre_valido.test(nombre.value)) {
		ok = true;
		error_nombre.innerHTML = "";
	}
	else if (nombre.value == 0) {
		error_nombre.innerHTML = "Rellene este campo";
	}
	else {
		error_nombre.innerHTML = "Nombre inválido";
	}
	return ok;
}

function apellido_ok(){
	var nombre = document.getElementById('apellido');
	var nombre_valido = /^[a-zA-ZÀ-ÿ\s]{1,40}$/
	var error_nombre= document.getElementById('error_apellido');
	let ok = false;

	if (nombre_valido.test(nombre.value)) {
		ok = true;
		error_nombre.innerHTML = "";
	}
	else if (nombre.value == 0) {
		error_nombre.innerHTML = "Rellene este campo";
	}
	else {
		error_nombre.innerHTML = "Apellido inválido";
	}
	return ok;
}

function mail_ok() {
	var mail = document.getElementById('email');
	var mail_valido =  /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
	var error_mail = document.getElementById('error_mail');
	let ok = false;

	if (mail_valido.test(mail.value)) {
		error_mail.innerHTML = "";
		ok = true;
	}else if (mail.value == 0) {
		error_mail.innerHTML = "Rellene este campo";
	}
	else {
		error_mail.innerHTML = "Email inválido";
	}
	return ok;
} 

function todo_ok() {
	var formulario = document.getElementById("form");
	let nombreok = nombre_ok();
	let apellidook = apellido_ok();
	let mailok = mail_ok();
	
	if (nombreok && apellidook && mailok) {
		alert('La inscripción ha sido correcta!')
		formulario.reset();
		return true;
	}
	else {
		return false;
	}
}