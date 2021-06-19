$(document).on("click","#login",function(e){
	e.preventDefault();
	var email=$("#email").val();
	var pass=$("#pass").val();
	var usuario = new Object;
	usuario.email=email;
	usuario.pass=pass;
	var ajax=__ajax("https://lekastore.net/login/validarUsuario",JSON.stringify(usuario));
	ajax.done(function(response){
		usuario=JSON.parse(response);
		if (usuario.estado==1) {
			if (usuario.usuario.tipoPersona=="Cliente") {
				setTimeout(function(){
					$("#login").val("Bienvenido " + usuario.usuario.nombre);
					$(window).attr('location',"https://lekastore.net/panelCliente/");
					},2000)	
			}
		}else{
			$("#login").val("Error de credenciales ");
			setTimeout(function(){
					$("#login").val("INICIAR SESIÓN");
				window.locationf="http://www.cristalab.com";
			},2000)	
		}
	});
});


function __ajax(url,dato){
	var ajax=$.ajax({
	type:'POST',
	url: url,
	data:{'data':dato}
	})
return ajax;
}