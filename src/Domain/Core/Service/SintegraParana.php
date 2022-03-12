<?php
namespace Sintegra\Domain\Core\Service;

class SintegraParana
{

    protected function validar($sintegra): bool
    {
        if (strlen($sintegra) != 10)
            return false;

        $b = 3;
        $soma = 0;
        for ($i = 0; $i <= 7; $i ++) {
            $soma += $sintegra[$i] * $b;
            $b --;
            if ($b == 1)
                $b = 7;
        }
        $i = $soma % 11;
        if ($i <= 1) {
            $dig = 0;
        } else {
            $dig = 11 - $i;
        }

        if (! ($dig == $sintegra[8]))
            return false;

        $b = 4;
        $soma = 0;
        for ($i = 0; $i <= 8; $i ++) {
            $soma += $sintegra[$i] * $b;
            $b --;
            if ($b == 1)
                $b = 7;
        }

        $i = $soma % 11;

        if ($i <= 1) {
            $dig = 0;
        } else {
            $dig = 11 - $i;
        }

        return ($dig == $sintegra[9]);
    }
}