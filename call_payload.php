<?php

$random = substr(md5(mt_rand()), 0, 7);


/*  DATA */
$data['clave_api'] = "be0bc4eb04bc11e981cd005056ac26d8";
$data['numero_factura_cliente'] = $random;
$data['monto'] = 360;
$data['url_callback'] = "http://pago.saime.gob.ve";
$data['cedula'] = "V24203774";
$data['email'] = "test@gmail.com";
$data['petro_pago'] = "1";
$string['pago'] = $data;

$data_string = json_encode($string);
/*  DATA */

$ch = curl_init("http://core.pasarela.devptr.gob.ve:8280/registrarPago");

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
