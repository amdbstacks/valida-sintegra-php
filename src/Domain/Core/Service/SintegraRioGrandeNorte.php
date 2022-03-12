<?php
namespace Sintegra\Domain\Core\Service;

class SintegraRioGrandeNorte
{

    protected function validar($sintegra): bool
    {
        if (!((strlen($sintegra) == 9) || (strlen($sintegra) == 10)))
            return false;

        $b = strlen($sintegra);

        if ($b == 9) {
            $s = 7;
        } else {
            $s = 8;
        }

        $soma = 0;
        for ($i = 0; $i <= $s; $i ++) {
            $soma += $sintegra[$i] * $b;
            $b --;
        }

        $soma *= 10;
        $dig = $soma % 11;
        if ($dig == 10)
            $dig = 0;

        $s += 1;
        return ($dig == $sintegra[$s]);
    }
}

