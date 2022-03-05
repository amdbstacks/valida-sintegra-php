<?php
namespace Sintegra\Domain\Core;

class SintegraAcre
{

    protected function validar($ie)
    {
        if (strlen($ie) != 13)
            return FALSE;

        if (substr($ie, 0, 2) != '01')
            return FALSE;

        $b = 4;
        $soma = 0;
        for ($i = 0; $i <= 10; $i ++) {
            $soma += $ie[$i] * $b;
            $b --;
            if ($b == 1) {
                $b = 9;
            }
        }

        $dig = 11 - ($soma % 11);

        if ($dig >= 10)
            $dig = 0;

        if (!($dig == $ie[11]))
            return FALSE;

        $b = 5;
        $soma = 0;
        for ($i = 0; $i <= 11; $i ++) {
            $soma += $ie[$i] * $b;
            $b --;
            if ($b == 1)
                $b = 9;
        }

        $dig = 11 - ($soma % 11);

        if ($dig >= 10)
            $dig = 0;

        return ($dig == $ie[12]);
    }
}

