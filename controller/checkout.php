
<?php
$transaccion = $_GET["id"];
$json = file_get_contents("https://sandbox.wompi.co/v1/transactions/".$transaccion.""); 
$jsonN = json_decode($json); 
if($jsonN->data->status =='APPROVED'){
	$referencia = $jsonN->data->reference;
	$referencia=explode(":", $referencia);
	$id_usuario = $referencia[0];
	$pedido = $referencia[1];
	#Aquí se manda a generar el pedido en la db para poder enviarse, se crea el historial del cliente, etc...
	#$json=agregarAnuncioTop($id_anuncio,$tipo_anuncio);
	#var_dump($json);
	#$json=json_decode($json);
	#if ($json->estado==1) {
		#header("Location: pagoExitoso/");
	#}
	header("Location: pagoExitoso.php?user=$id_usuario&pedido=$pedido");
}else if($jsonN->data->status =='DECLINED'){
	header("Location: pagoRechazado/");
}else if($jsonN->data->status =='VOIDED'){
	header("Location: pagoRechazado/");
}else{
	header("Location: pagoRechazado/");
}
?>
