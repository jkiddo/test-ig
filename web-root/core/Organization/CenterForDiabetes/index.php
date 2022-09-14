<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/2.0.0/Organization-CenterForDiabetes.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://hl7.dk/fhir/core/2.0.0/Organization-CenterForDiabetes.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://hl7.dk/fhir/core/2.0.0/Organization-CenterForDiabetes.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/2.0.0/Organization-CenterForDiabetes.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://hl7.dk/fhir/core/2.0.0/Organization-CenterForDiabetes.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://hl7.dk/fhir/core/2.0.0/Organization-CenterForDiabetes.html');
else 
  Redirect('http://hl7.dk/fhir/core/2.0.0/Organization-CenterForDiabetes.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
