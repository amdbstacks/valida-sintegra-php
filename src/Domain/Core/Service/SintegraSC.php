<?php
namespace Sintegra\Domain\Core\Service;

class SintegraSC
{

    protected function validar($sintegra): bool
    {
        if (strlen($sintegra) != 9)
            return false;

        $b = 9;
        $soma = 0;

        for ($i = 0; $i <= 7; $i ++) {
            $soma += $sintegra[$i] * $b;
            $b --;
        }
        
        $dig = 11 - ($soma % 11);
        if ($dig <= 1)
            $dig = 0;

        return ($dig == $sintegra[8]);
    }
}

