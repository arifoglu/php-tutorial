<?php

require_once('Students.php');

// Because a WSDL isn't used we must provide a URI for the service
$options = array("uri" => "http://localhost");


$server = new SoapServer(null,$options);

$server->setClass("Students");

$server->handle();


?>