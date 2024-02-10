<?php

$nomesBiblicos = [
    'Pedro',
    'Tiago',
    'João',
    'Mateus',
];

$nomesDeFuncionarios = [
    'Denis',
    'Tiago',
    'Mateus',
    'Henrique',
];

$nomesDeFuncionariosQueSaoBiblicos = array_filter(
    $nomesDeFuncionarios,
    fn($nome) => in_array($nome, $nomesBiblicos)
);

print_r($nomesDeFuncionariosQueSaoBiblicos);
