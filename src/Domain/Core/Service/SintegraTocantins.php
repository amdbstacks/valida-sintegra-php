<?php
namespace Sintegra\Domain\Core\Service;

class SintegraTocantins
{

    public function validar($sintegra): bool
    {
        if (strlen($sintegra) != 11)
            return false;

        $s = substr($sintegra, 2, 2);

        if (! (($s == '01') || ($s == '02') || ($s == '03') || ($s == '99')))
            return false;

        $b = 9;
        $soma = 0;
        for ($i = 0; $i <= 9; $i ++) {
            if (! (($i == 2) || ($i == 3))) {
                $soma += $sintegra[$i] * $b;
                $b --;
            }
        }
        
        $i = $soma % 11;
        if ($i < 2) {
            $dig = 0;
        } else {
            $dig = 11 - $i;
        }

        return ($dig == $sintegra[10]);
    }
}
