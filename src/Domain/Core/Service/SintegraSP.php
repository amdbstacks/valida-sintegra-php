<?php
namespace Sintegra\Domain\Core\Service;

class SintegraSP
{

    protected function validar($sintegra): bool
    {
        if (strtoupper(substr($sintegra, 0, 1)) == 'P') {
            if (strlen($sintegra) != 13) {
                return false;
            } else {
                $b = 1;
                $soma = 0;
                for ($i = 1; $i <= 8; $i ++) {
                    $soma += $sintegra[$i] * $b;
                    $b ++;
                    if ($b == 2)
                        $b = 3;

                    if ($b == 9)
                        $b = 10;
                }
                $dig = $soma % 11;
                return ($dig == $sintegra[9]);
            }
        }
        
        if (strlen($sintegra) != 12)
            return false;

        $b = 1;
        $soma = 0;
        for ($i = 0; $i <= 7; $i ++) {
            $soma += $sintegra[$i] * $b;
            $b ++;
            if ($b == 2)
                $b = 3;

            if ($b == 9)
                $b = 10;
        }

        $dig = $soma % 11;

        if ($dig > 9)
            $dig = 0;

        if ($dig != $sintegra[8])
            return false;

        $b = 3;
        $soma = 0;
        for ($i = 0; $i <= 10; $i ++) {
            $soma += $sintegra[$i] * $b;
            $b --;
            if ($b == 1)
                $b = 10;
        }

        $dig = $soma % 11;

        return ($dig == $sintegra[11]);
    }
}
 

