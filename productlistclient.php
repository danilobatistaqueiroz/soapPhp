<?php
// client
$options= array(
  'location' 	=>	'http://localhost/soapPhp/productlist.php',
  'uri'		=>	'http://localhost/soapPhp'
);
$client=new SoapClient(NULL,$options);
echo $client->getMessage();  //Hello,World!
echo $client->addNumbers(3,5); //8