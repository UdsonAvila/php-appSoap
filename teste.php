<?php

//seta url serviço SOAP
$wsdl = 'https://www.crcind.com/csp/samples/SOAP.Demo.CLS?WSDL'; 

//parametros
$somaInteiro = Array (
					"Arg1" => 5,
					"Arg2" => 10
				);
$divideInteiro = Array (
					"Arg1" => 5,
					"Arg2" => 10
				);
$idBuscaPessoa = Array (
					"id" => 15
				);
				

$conexao = Array (
				"uri"=> $wsdl,
				"style"=> SOAP_RPC,
				"use"=> SOAP_ENCODED,
				"soap_version"=> SOAP_1_1,
				"cache_wsdl"=> WSDL_CACHE_BOTH,
				"connection_timeout" => 15,
				"trace" => false,
				"encoding" => "UTF-8",
				"exceptions" => false,
			);

//cria objeto soap
$soap = new SoapClient(
						  $wsdl,
						  $conexao

						);
header("Content-Type: application/json");

//Soma inteiro
$result = $soap->AddInteger($somaInteiro);
echo "<pre>" 
	.	print_r($result) .
	"</pre>
	<br>";

//Divide inteiro
$result1 = $soap->DivideInteger($divideInteiro);
echo "<pre>" 
	.	print_r($result1) .
	"</pre>
	<br>";

//Busca Pessoa
$result2 = $soap->FindPerson($idBuscaPessoa);

echo "<pre>" . print_r($result2) . "</pre><br>";














