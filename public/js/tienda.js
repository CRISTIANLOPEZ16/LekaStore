$(function(){
	var ajax=__ajaxEmpity("https://lekastore.net/tienda/listarProductos/1/");
	ajax.done(function(response){
		var tienda = JSON.parse(response);
		if (tienda.estado=="1") {
				$("#productos").html(crearHtml(tienda.productos));
		}
	});
});

$(document).on("click",".paginacion",function(e){
	e.preventDefault();
	var paginacion=$(this).attr('id');
	var ajax=__ajaxEmpity("https://lekastore.net/tienda/listarProductos/"+paginacion+"/");
	ajax.done(function(response){
		var tienda = JSON.parse(response);
		if (tienda.estado=="1") {
				$("#productos").html(crearHtml(tienda.productos));
						function scrollToTop() {
		            window.scrollTo(0, 0);
		        }
		}
	});
})
function __ajaxEmpity(url){
	var ajax=$.ajax({
	type:'GET',
	url: url,
	})
return ajax;
}

function crearHtml(productos){
	let pesoCO = Intl.NumberFormat("es-ES", {
    style: "currency",
    currency: "COP",
    maximumFractionDigits: 0,
});

	var html="";
	for(var i in productos){
		html+=`<div class="col-6 col-sm-3 ">
		<a href="/detalle/`+productos[i].sku+`"><img src="/`+productos[i].fotos[0].url+`" class=" w-100 mb-2" alt="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></a>
		<a href="/detalle/`+productos[i].sku+`">`+JSON.parse(productos[i].nombre)+`</a> <br>
		$`+pesoCO.format(productos[i].precio)+`
    </div>`;
	}
	return html;
}