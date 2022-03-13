<?php
namespace Sintegra\Domain\Core;

use Sintegra\Domain\Enumeration\Estados;
use Sintegra\Domain\Exception\SintegraException;
use Exception;
use Sintegra\Domain\Core\Service\ValidarSintegraEstado;

class ValidacaoSintegra
{

    public function validar(string $sintegra = null, Estados $estado = null): bool
    {
        try {
            if (is_null($estado))
                throw new SintegraException("Estado não infomado!");

            if (! ($estado instanceof Estados))
                throw new SintegraException("Instacia de Estado incorreta!");

            if (is_null($sintegra) || strlen($sintegra) == 0)
                throw new SintegraException("Sintegra não infomada!");

            $validacao = new ValidarSintegraEstado();

            return $validacao->validar($sintegra, $estado);
        } catch (Exception $e) {
            throw $e;
        }
    }
}

