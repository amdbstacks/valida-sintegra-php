<?php
namespace Sintegra\Domain\Core\Service;

class SintegraMatoGrosso
{

    protected function validar($sintegra): bool
    {
        if (strlen($sintegra) != 11)
            return false;

        $b = 3;
        $soma = 0;
        for ($i = 0; $i <= 9; $i ++) {
            $soma += $sintegra[$i] * $b;
            $b --;
            if ($b == 1)
                $b = 9;
        }
        $i = $soma % 11;
        if ($i <= 1) {
            $dig = 0;
        } else {
            $dig = 11 - $i;
        }

        return ($dig == $sintegra[10]);
    }
}

