<?php

function pesquisa_binaria (array $lista, $item): mixed {
    if (count($lista) === 0) {
        return null;
    }
    $baixo = 0;
    $alto = count($lista) - 1;

    while ($baixo <= $alto) {
        $meio = floor(($baixo + $alto) / 2);
        $chute = $lista[$meio];
        if ($chute == $item) {
            return $meio;
        }
        if ($item < $chute) {
            $alto = $meio - 1;
        }
        else {
            $baixo = $meio + 1;
        }
    }
    return null;
}

$minha_lista = [1, 3, 5, 7, 9];
var_dump(pesquisa_binaria($minha_lista, 9));

?>