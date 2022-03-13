<?php
namespace Sintegra\Domain\Core\Service;

class SintegraDF
{

    public function validar($sintegra): bool
    {
        if (strlen($sintegra) != 13)
            return false;

        if (substr($sintegra, 0, 2) != '07') {
            return false;

            $b = 4;
            $soma = 0;

            for ($i = 0; $i <= 10; $i ++) {
                $soma += $sintegra[$i] * $b;
                $b --;
                if ($b == 1) {
                    $b = 9;
                }
            }

            $dig = 11 - ($soma % 11);

            if ($dig >= 10)
                $dig = 0;

            if (! ($dig == $sintegra[11]))
                return false;

            $b = 5;
            $soma = 0;

            for ($i = 0; $i <= 11; $i ++) {
                $soma += $sintegra[$i] * $b;
                $b --;
                if ($b == 1)
                    $b = 9;
            }

            $dig = 11 - ($soma % 11);
            if ($dig >= 10)
                $dig = 0;

            return ($dig == $sintegra[12]);
        }
    }
}

