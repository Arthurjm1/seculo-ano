<?php

function SeculoAno(int $ano): int
{
    $seculo = (($ano - 1) / 100) + 1;
    return $seculo;
}
