<?php
namespace Sintegra\Domain\Core\Service;

class SintegraRondonia
{

    protected function validar($sintegra): bool
    {
        if (strlen($sintegra) == 9) {
            $b = 6;
            $soma = 0;
            for ($i = 3; $i <= 7; $i ++) {
                $soma += $sintegra[$i] * $b;
                $b --;
            }
            $dig = 11 - ($soma % 11);
            if ($dig >= 10)
                $dig = $dig - 10;

            return ($dig == $sintegra[8]);
        }

        if (strlen($sintegra) == 14) {
            $b = 6;
            $soma = 0;
            for ($i = 0; $i <= 12; $i ++) {
                $soma += $sintegra[$i] * $b;
                $b --;
                if ($b == 1)
                    $b = 9;
            }

            $dig = 11 - ($soma % 11);
            if ($dig > 9)
                $dig = $dig - 10;

            return ($dig == $sintegra[13]);
        }

        return false;
    }
}

