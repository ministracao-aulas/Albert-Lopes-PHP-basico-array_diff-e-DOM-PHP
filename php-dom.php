<?php

use Symfony\Component\CssSelector\CssSelectorConverter;

require_once __DIR__ . '/vendor/autoload.php';

$htmlAntes = file_get_contents(__DIR__ . '/html1.html');
$htmlAgora = file_get_contents(__DIR__ . '/html2.html');

function obtemElementos(string $html, string $query) {
    $dom = new DOMDocument;
    $dom->loadHTML($html);

    $xpath = new DOMXPath($dom);

    $convertedQuery = (new CssSelectorConverter())->toXPath($query);

    // $listItems = $xpath->evaluate($converter->toXPath('div > ul > li'));
    return $xpath->query($convertedQuery);
}

function obtemItems($elementos) {
    $items = [];
    foreach ($elementos as $elemento) {
        $items[] = $elemento->nodeValue;
    }

    return $items ?? [];
}

$itensDeAntes = obtemItems(obtemElementos($htmlAntes, 'div > ul > li'));
$itensDeAgora = obtemItems(obtemElementos($htmlAgora, 'div > ul > li'));

// var_export([
//     'itensDeAntes' => $itensDeAntes,
//     'itensDeAgora' => $itensDeAgora,
// ]);

print_r(array_diff(
    $itensDeAgora,
    $itensDeAntes,
));
