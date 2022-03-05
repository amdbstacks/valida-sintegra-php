<?php
namespace Sintegra\Adapters;

use Sintegra\Ports\Validacao;
use Sintegra\Domain\Enumeration\Estados;

class Sintegra implements Validacao
{
    
    public function validar(string $sintegra, Estados $estado): bool
    {
        
    }

}

