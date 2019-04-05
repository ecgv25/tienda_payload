<?php

$random = substr(md5(mt_rand()), 0, 7);


/*  DATA */
$data['clave_api'] = "063b94aebd84406b8f3cbb32ae575eba13fe043787fde489daee576a20dac84a9";
$data['numero_factura_cliente'] = $random;
$data['monto'] = 8300.20;
$data['url_callback'] = "www.google.com";
$data['cedula'] = "V17704419";
$data['email'] = "carolina.g.ve@gmail.com";
$data['petro_pago'] = "0";
$string['pago'] = $data;

$data_string = json_encode($string);
/*  DATA */

$ch = curl_init("http://core-pg.tinscorp.com:8280/registrarPago");

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',     
    'Access-Control-Allow-Origin: *',  
    'Accept: application/json',                                                                         
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   

$resulta = curl_exec($ch);
if (curl_errno($ch)) {
    print curl_error($ch);
} else {
    curl_close($ch);
}

$urlRedirec = (json_decode($resulta));

$url = $urlRedirec->respuesta->url_callback;

header("Location:".$url);
