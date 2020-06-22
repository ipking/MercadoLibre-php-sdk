<?php


$re = json_decode(file_get_contents('https://api.mercadolibre.com/currencies/'),1);
$const = '';
$static = '';
foreach($re as $item){
	$const .= "\tconst CURRENCY_".strtoupper($item['id'])." = '".$item['id']."';".PHP_EOL;
	$static .= "\t\tself::CURRENCY_".strtoupper($item['id'])."  => '".$item['id']."',".PHP_EOL;
}
$NAME_MAP = '$NAME_MAP';

$data = <<<EOL
<?php

namespace MercadoLibre\Base\Model;

class CurrencyEnum{
$const
	public static $NAME_MAP = array(
$static
	);
}
EOL;

file_put_contents('CurrencyEnum.php',$data);