<?php
namespace Sintegra\Domain\Core\Service;

class SintegraAlagoas
{

    protected function validar($sintegra): bool
    {
        if (strlen($sintegra) != 9)
            return false;

        if (substr($sintegra, 0, 2) != '24')
            return false;

        $b = 9;
        $soma = 0;
        for ($i = 0; $i <= 7; $i ++) {
            $soma += $sintegra[$i] * $b;
            $b --;
        }
        $soma *= 10;
        $dig = $soma - (((int) ($soma / 11)) * 11);
        if ($dig == 10)
            $dig = 0;

        return ($dig == $sintegra[8]);
    }
}


