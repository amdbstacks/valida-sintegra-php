<?php
namespace Sintegra\Domain\Core;

class SintegraAmapa
{

    protected function validar($sintegra): bool
    {
        if (strlen($sintegra) != 9)
            return false;

        if (substr($sintegra, 0, 2) != '03')
            return false;

        $i = substr($sintegra, 0, - 1);

        if (($i >= 3000001) && ($i <= 3017000)) {
            $p = 5;
            $d = 0;
        } elseif (($i >= 3017001) && ($i <= 3019022)) {
            $p = 9;
            $d = 1;
        } elseif ($i >= 3019023) {
            $p = 0;
            $d = 0;
        }

        $b = 9;
        $soma = $p;
        for ($i = 0; $i <= 7; $i ++) {
            $soma += $sintegra[$i] * $b;
            $b --;
        }
        $dig = 11 - ($soma % 11);
        if ($dig == 10) {
            $dig = 0;
        } elseif ($dig == 11) {
            $dig = $d;
        }

        return ($dig == $sintegra[8]);
    }
}

