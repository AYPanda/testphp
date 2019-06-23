<?php
class ParseFunc {
  private $func;
  function parsef($func) {
    foreach ($func as $key => $value) {
      $value = explode("(",$value)[0];
      $v = explode(" ",$value)[1];
      $f[] = $v;
    }
    return $f;
  }
}
$req = $_POST['inp_b'];
$client = new SoapClient ($req);
$obj = new ParseFunc();
$func = $obj->parsef($client->__getFunctions());

print_r(json_encode(array($func, $client->__getTypes())));

