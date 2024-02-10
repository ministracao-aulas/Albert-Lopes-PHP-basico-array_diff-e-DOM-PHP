<?php

$listaAnterior = [
    'Lj_01',
    'Lj_07',
    'Lj_10',
    'Lj_11',
];

$listaDeAgora = [
    'Lj_01',
    'Lj_07',
    'Lj_10',
    'Lj_11',
    'Lj_12',
];

// $nomesDeFuncionariosQueSaoBiblicos = array_filter(
//     $nomesDeFuncionarios,
//     fn($nome) => in_array($nome, $nomesBiblicos)
// );

// print_r($nomesDeFuncionariosQueSaoBiblicos);
print_r(array_diff(
    $listaDeAgora,
    $listaAnterior,
));
