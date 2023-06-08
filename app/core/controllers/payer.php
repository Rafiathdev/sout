<?php
require_once("/home/rafiath/Documents/rafi/sout/chipdeals-mobile-money-api.php");

$momo = new Momo();
$momo->setApiKey("test-b8bf0477-34ed-4de9-86f8-0b8f38c98377");

//Collect 500 XOF from the +22951010200 Mobile Money wallet.
$collection = $momo
  ->collect()
  ->amount(5)
  ->currency("XOF")
  ->from('22966603002')
  ->create();
//print_r($collection->getArray());


?>