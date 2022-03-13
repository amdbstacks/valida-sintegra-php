<?php
namespace Sintegra\Domain\Core\Service;

class SintegraMatoGrossoSul
{

    public function validar($sintegra): bool
    {
        if (strlen($sintegra) != 9)
            return false;

        if (substr($sintegra, 0, 2) != 28)
            return false;

        $b = 9;
        $soma = 0;
        for ($i = 0; $i <= 7; $i ++) {
            $soma += $sintegra[$i] * $b;
            $b --;
        }
        $i = $soma % 11;
        if ($i == 0) {
            $dig = 0;
        } else {
            $dig = 11 - $i;
        }

        if ($dig > 9)
            $dig = 0;

        return ($dig == $sintegra[8]);
    }
}

