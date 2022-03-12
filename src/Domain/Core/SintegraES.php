<?php
namespace Sintegra\Domain\Core;

class SintegraES
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
        $i = $soma % 11;
        if ($i < 2) {
            $dig = 0;
        } else {
            $dig = 11 - $i;
        }

        return ($dig == $sintegra[8]);
    }
}

