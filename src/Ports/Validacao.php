<?php
namespace Sintegra\Ports;

use Sintegra\Domain\Enumeration\Estados;

interface Validacao
{
    public function validar(string $sintegra, Estados $estado): bool;
}

