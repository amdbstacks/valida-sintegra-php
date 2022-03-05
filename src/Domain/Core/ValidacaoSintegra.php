<?php
namespace Sintegra\Domain\Core;

use Sintegra\Domain\Enumeration\Estados;
use Sintegra\Domain\Exception\SintegraException;
use Exception;

class ValidacaoSintegra
{

    public function validar(string $sintegra, Estados $estado): bool
    {
        try {
            if (is_null($estado))
                throw new SintegraException("Estado não infomado!");

            if (is_null($sintegra) || strlen($sintegra) == 0)
                throw new SintegraException("Sintegra não infomada!");
        } catch (Exception $e) {
            throw $e;
        }
    }
}

