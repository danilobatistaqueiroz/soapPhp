<?php
// server
class MySoapServer
{
  public function getMessage()
  {
    return 'Hello,World!';
  }
  
  public function addNumbers($num1,$num2)
  {
    return $num1+$num2;
  }
}
ini_set("soap.wsdl_cache_enabled", "0"); 
$options = array('uri'=>'http://localhost/soapPhp');
$server = new SoapServer(null, $options);
$server->setClass('MySoapServer');
$server->handle();