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

    /**
     * Valida uma inscrição estadual com base nos parametros passados,
     * devolve true em caso de sintegra valido e false em caso de sintegra inválido.
     *
     * @param $sintegra -string numerica da inscrição estadual
     * @param $estado - estado da inscrição estadual, deve ser um enum do tipo Sintegra\Domain\Enumeration\Estados
     * {@inheritdoc}
     * @see \Sintegra\Ports\Validacao::validar()
     */
    public function validar(string $sintegra, Estados $estado): bool
    {
        return $this->validacaoSintegra->validar($sintegra, $estado);
    }
}

