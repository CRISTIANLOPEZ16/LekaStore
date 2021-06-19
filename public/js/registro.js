
  $(document).on("focusout","#key2",function(){
    pass1 = document.getElementById('key');
    pass2 = document.getElementById('key2');

  if (pass1.value != pass2.value) {
      document.getElementById("error").classList.add("mostrar");
   
      return false;
  }
   
  else {
      document.getElementById("error").classList.remove("mostrar");
      setTimeout(function() {
      location.reload();
      }, 1000);
      return true;
  }
});


$(document).on("click","#addToCart",function(){
document.getElementById('addToCart').setAttribute('value','¡Agregado!'); 
var id=document.getElementById('sku').getAttribute('value');
var cantidad= $("#cant").val();
if(cantidad==""){
  cantidad=1;
}
var productos = id+"+"+cantidad;
//let productos = [id,cantidad]
setCookie('carrito', productos, 30);
setTimeout(function(){ document.getElementById('addToCart').setAttribute('value','Agregar al Carrito'); }, 2000);

});



$(document).on("click",".quitar",function(){
var id=$(this).attr("value");
setCookie('carrito', productos, 30);
});


function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  var expires = "expires=" + d.toUTCString();
  var ex=false;
  var p=0;
  if(checkCookie(cname)){
    var cookie2 = [];
    var cookie=getCookie(cname);
    cookie = cookie.split(',');
    cookieP= cookie[0].split('+');
    for(var i in cookie){
      if(cookieP[i]==cvalue){
        ex=true;
      }else{
        cookie2.push(cookie[i]);
      } 
  }if(ex){
        deleteCookie(cname);
        var pepe = cookie2.toString();
        document.cookie = 'carrito' + "=" + pepe + "; " + expires+ "; path=/; secure; samesite=none;";

      }else{
        if(cookie!='')cookie += ","+cvalue;
        else cookie += cvalue;
        document.cookie = cname + "=" + cookie + "; " + expires+ "; path=/; secure; samesite=none;";

      }
  }else{
    document.cookie = cname + "=" + cvalue + "; " + expires+"; path=/; secure; SameSite=None;";
  } 
}



function deleteCookie(name) {
  document.cookie = name +'=;expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/';
}

function checkCookie(cname) {
  var result = false;
  var username = getCookie(cname);
  if (username!= null) {
    result = true;
  }
  return result;
}

function getCookie(name) {
    var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
    return v ? v[2] : null;
}


function expandir_formulario(){
        var a = document.getElementById('capaexpansion');
        if (document.carrito.agree.checked){
            a.classList.remove('capaexpansion');
        }else{
            a.classList.add('capaexpansion');
        }
        }


    var html="";
    var pepe="";
    var productos =[];
    var cantidad =[];
     var favs = getCookie('carrito');
     if(favs!='' && favs!=null)favs = favs.split(','); 
        for(var i in favs) {
           // if(i%2){html+="Cantidad "; cantidad.push(favs[i]); }
           // else{ html+="Producto ";  productos.push(favs[i]); }  
           pepe=favs[i].split('+');
           productos.push(pepe[0]);
           cantidad.push(pepe[1]);
    }
    carrito(cantidad,productos);





  function carrito(cantidad, productos){
        var parametros = {
                "productos" : productos,
                "cantidad" : cantidad
        };
        var data=JSON.stringify(parametros);
        $.ajax({
                type:  'POST',
                data: {
                'data': data
                },
                url:   "obtenerCarrito/",     
                beforeSend: function () {
                        //$("#carritoEx").html("Procesando, espere por favor...");
                },
                success:  function (response) { 
                    var carrito = JSON.parse(response);
                    if (carrito.estado=="1") {
                        $("#carritoEx").html(crearHtml(carrito.info));
                        $("#productos").html(crearHtml2(carrito.info));
                        $("#subto").html(crearHtml3(carrito.info));
                        $("#total").html(crearHtml4(carrito.info));
                        $("#precio").html(crearHtml5(carrito.info));
                    }
                }
        });
}

function crearHtml(productos){
let pesoCO = Intl.NumberFormat("es-ES", {
    style: "currency",
    currency: "COP",
    maximumFractionDigits: 0,
});

  var html="";
  for(var i in productos){
    var subTotal=productos[i].cantidadDisponible*productos[i].precio;
    html+=`<div class="col-6 col-sm-2">
    <img src="/`+productos[i].fotos[0].url+`" class="w-100 foto" alt="`+JSON.parse(productos[i].nombre)+`">
     </div>
     <div class="col-6 col-sm-4">`+JSON.parse(productos[i].nombre)+`<br><br><p id="quitar-`+productos[i].sku+`" class="quitar" value="`+productos[i].sku+`">X eliminar</p>
</div>
      <div class="col-6 col-sm-3 mt-0">
                    <div class="input-fieldd">
                        <input type="number" value="`+productos[i].cantidadDisponible+`"  min="0"/>
                    </div>
                </div>
                <div class="col-4 col-sm-2 ">$`+pesoCO.format(subTotal)+`
                </div><br>
                `;
  }
  return html;
}

function crearHtml2(productos){

  var html="";
  for(var i in productos){
    html+=`<h5>`+JSON.parse(productos[i].nombre)+`   ->   `+productos[i].cantidadDisponible+`</h5>`;
  }
  //return html;
}

function crearHtml3(productos){
  let pesoCO = Intl.NumberFormat("es-ES", {
    style: "currency",
    currency: "COP",
    maximumFractionDigits: 0,
});

  var total=0;
  var html="";
  for(var i in productos){
    total=total+(productos[i].cantidadDisponible*productos[i].precio);
  }
  html+=`<div class="col-4 text-center">$`+pesoCO.format(total)+`</div>`;
  return html;
}

function crearHtml4(productos){
  let pesoCO = Intl.NumberFormat("es-ES", {
    style: "currency",
    currency: "COP",
    maximumFractionDigits: 0,
});
  var total=0;
  var html="";
  for(var i in productos){
    total=total+(productos[i].cantidadDisponible*productos[i].precio);
  }
  html+=`<div id="pago" value="`+total+`" class="col-4 mb-4 text-center">$`+pesoCO.format(total)+`</div>`;
  return html;
}

function crearHtml5(productos){
  var total=0;
  var html="";
  for(var i in productos){
    total=total+(productos[i].cantidadDisponible*productos[i].precio);
  }
  html+=`<input type="hidden" id="precio" name="amount-in-cents" value="`+total+`00"/>`;
  return html;
}



