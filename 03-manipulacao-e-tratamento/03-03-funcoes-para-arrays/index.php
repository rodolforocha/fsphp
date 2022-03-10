<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$index = [
    "AC/DC",
    "Nirvana",
    "kiss",
];

$assoc = [
    "band_1" => "AC/DC",
    "band_2" => "Nirvana",
    "band_3" => "Kiss",    
];

//adicionando ao começo
array_unshift($index, "Teste");
$assoc = ["Band_4" => "iron maiden"] + $assoc;

//adicionando ao final
array_push($index, "Trivium");
$assoc = $assoc + ["band_5" =>"Trivium"];

var_dump($index, $assoc);
/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);


/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);


/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);

$profile = [
    "nome" => "rodolfo",
    "company" => "upinside",
    "mail" => "rodolfo@gmail"
];

$template = <<<TPL
<article>
<h1>{{name}}</h1>
<p>{{company}}<p>
</article>
TPL;

echo $template;

