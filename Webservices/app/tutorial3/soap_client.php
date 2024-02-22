<?php
if (extension_loaded('soap')) {
    echo "SOAP extension is enabled.";
} else {
    echo "SOAP extension is not enabled.";
}

$options = array(
    "location" => "http://localhost/tutorial3/soap_service.php",
    "uri" => "http://localhost"
);

try {
    // Create a SOAP client instance
    $client = new SoapClient(null, $options);

    // Call the function in the SOAP service
    $students = $client->getStudentNames();
    echo $students;
} catch (SoapFault $ex) {
    // Handle SOAP errors
    var_dump($ex);
}

?>


