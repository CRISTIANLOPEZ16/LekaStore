
$(function(){
	var ajax=__ajaxEmpity("https://lekastore.net/index/extraerProductos/");
	ajax.done(function(response){
		var home = JSON.parse(response);
		if (home.estado==1) {
			$("#productosRand").append(crearHtml(home.productos));
		}
	});
});

function __ajaxEmpity(url){
	var ajax=$.ajax({
	type:'GET',
	url: url,
	})
return ajax;
}

function crearHtml(productos){
	var html="";
	for(var i in productos){
		html+=`<div class="col-12 col-sm-4 mb-4">
		<div class="card" style="width:100%;">
		<img src="`+productos[i].fotos[0].url+`" class="card-img-top  w-100" alt="...">
		<div class="card-body">
          <p class="card-text">`+JSON.parse(productos[i].descripcion)+`</p>
          <a href="https://lekastore.net/detalle/`+productos[i].sku+`">ver `+JSON.parse(productos[i].nombre)+`</a></div>
      </div>
    </div>`;
	}
	return html;
}
