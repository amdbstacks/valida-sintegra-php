<?php
namespace Sintegra\Domain\Core\Service;

class SintegraRJ
{

    protected function validar($sintegra): bool
    {
        if (strlen($sintegra) != 8)
            return false;

        $b = 2;
        $soma = 0;
        for ($i = 0; $i <= 6; $i ++) {
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

        return ($dig == $sintegra[7]);
    }
}

