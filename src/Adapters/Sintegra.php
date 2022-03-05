<?php
namespace Sintegra\Adapters;

use Sintegra\Ports\Validacao;
use Sintegra\Domain\Enumeration\Estados;
use Sintegra\Domain\Core\ValidacaoSintegra;

class Sintegra implements Validacao
{

    private ValidacaoSintegra $validacaoSintegra;

    public function __construct()
    {
        $this->validacaoSintegra = new ValidacaoSintegra();
    }

    public function validar(string $sintegra, Estados $estado): bool
    {
        return $this->validacaoSintegra->validar($sintegra, $estado);
    }
}

