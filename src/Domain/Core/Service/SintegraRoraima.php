<?php
namespace Sintegra\Domain\Core\Service;

class SintegraRoraima
{

    public function validar($sintegra): bool
    {
        if (strlen($sintegra) != 9)
            return false;

        if (substr($sintegra, 0, 2) != 24)
            return false;

        $b = 1;
        $soma = 0;
        for ($i = 0; $i <= 7; $i ++) {
            $soma += $sintegra[$i] * $b;
            $b ++;
        }
        $dig = $soma % 9;

        return ($dig == $sintegra[8]);
    }
}

