<?php
//$_GET['json'] = '{"value":"15","source":"kelvin","target":"degree_fahrenheit"}';

if (!$_GET['json'])
    exit('[err] bad request');

require_once 'config.php';
require_once 'functions.php';

$json = json_decode($_GET['json']);

$source = $json->source;
$target = $json->target;
$value = $json->value;

// определяем единицы
foreach ($units as $unit => $names)
{
    if ( array_search( $source, $names ) !== false )
    {
        $unit_source = $unit;
        break;
    }
}

foreach ($units as $unit => $names)
{
    if ( array_search( $target, $names ) !== false )
    {
        $unit_target = $unit;
        break;
    }
}

if ( !isset($unit_source) || !isset($unit_target) || !isset($value) )
    exit('[err] no data');


$data = array(
    'request' => array(
        'value' => $value,
        'source' => $source,
        'target' => $target,
    ),

    'response' => convert($value, $unit_source, $unit_target)

);

exit( json_encode($data) );