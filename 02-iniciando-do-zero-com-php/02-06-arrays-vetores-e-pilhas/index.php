<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arrA = array(1,2,3);
var_dump($arrA);

$arrayIndex = [
    "Brian",
    "Angus",
    "Malcom"
];

$arrayIndex[] = "Cliff";
$arrayIndex[] = "Phil";

var_dump($arrayIndex);
/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
    "vocal"=>"Brian",
    "solo_guitar"=>"Angus",
    "base_guitar" =>"Malcom",
    "bass_guitar" => "Cliff"
];

$arrayAssoc["drums"] = "Phil";
$arrayAssoc["band"] = "AC/DC";

var_dump($arrayAssoc);
/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);
$brian = ["brian", "mic"];
$angus = ["name" => "angus", "instrument" => "Guitar"];
$instruments = [
    $brian, 
    $angus
];

var_dump($instruments);

/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

$acdc = [
    "vocal"=>"Brian",
    "solo_guitar"=>"Angus",
    "base_guitar" =>"Malcom",
    "bass_guitar" => "Cliff",
    "drums" => "Phil",
];

echo "<p> O vocal da banda AC/DC é {$acdc["vocal"]}</p>";