<?php


$re = json_decode(file_get_contents('https://api.mercadolibre.com/sites/MLA/listing_types'),1);
$const = '';
$static = '';
foreach($re as $item){
	$const .= "\tconst TYPE_".strtoupper($item['id'])." = '".$item['id']."';".PHP_EOL;
	$static .= "\t\tself::TYPE_".strtoupper($item['id'])."  => '".$item['id']."',".PHP_EOL;
}
$NAME_MAP = '$NAME_MAP';

$data = <<<EOL
<?php

namespace MercadoLibre\GlobalSelling\Model;

class ListingTypesEnum{
$const
	public static $NAME_MAP = array(
$static
	);
}
EOL;

file_put_contents('ListingTypesEnum.php',$data);