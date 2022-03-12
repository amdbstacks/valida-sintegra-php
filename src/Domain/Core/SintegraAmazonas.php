<?php
namespace Sintegra\Domain\Core;

class SintegraAmazonas
{

    protected function validar($sintegra): bool
    {
        if (strlen($sintegra) != 9)
            return false;

        $b = 9;
        $soma = 0;
        for ($i = 0; $i <= 7; $i ++) {
            $soma += $sintegra[$i] * $b;
            $b --;
        }
        
        if ($soma <= 11) {
            $dig = 11 - $soma;
        } else {
            $r = $soma % 11;
            if ($r <= 1) {
                $dig = 0;
            } else {
                $dig = 11 - $r;
            }
        }

        return ($dig == $sintegra[8]);
    }
}

