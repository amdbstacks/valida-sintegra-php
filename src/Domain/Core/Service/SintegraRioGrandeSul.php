<?php
namespace Sintegra\Domain\Core\Service;

class SintegraRioGrandeSul
{

    public function validar($sintegra): bool
    {
        if (strlen($sintegra) != 10)
            return false;

        $b = 2;
        $soma = 0;

        for ($i = 0; $i <= 8; $i ++) {
            $soma += $sintegra[$i] * $b;
            $b --;
            if ($b == 1)
                $b = 9;
        }

        $dig = 11 - ($soma % 11);

        if ($dig >= 10)
            $dig = 0;

        return ($dig == $sintegra[9]);
    }
}

