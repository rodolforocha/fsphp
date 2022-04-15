<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$arrProfile = [
    "name" => "Rodolfo",
    "company" => "Upinside",
    "mail" => "rodolfoalr@gmail.com"
];

$objProfile = (object)$arrProfile;

echo "<p>{$arrProfile["name"]} trabalha na {$arrProfile["company"]}</p>";
echo "<p>{$objProfile->name} trabalha na {$objProfile->company}</p>";

$ceo = $objProfile;
unset($ceo->company);
var_dump($ceo);

$company = new StdClass();
$company->company = "Upinside";
$company->ceo = $ceo;
$company->manager = new StdClass();
$company->manager->name = "Dofas";
$company->manager->mail = "truedofas@hotmail.com";

var_dump($company);

/**#
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

var_dump(["class" => get_class($company)]);