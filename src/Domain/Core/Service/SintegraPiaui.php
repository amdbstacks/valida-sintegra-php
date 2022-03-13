<?php
namespace Sintegra\Domain\Core\Service;

class SintegraPiaui
{

    public function validar($sintegra): bool
    {
        if (strlen($sintegra) != 9)
            return false;

        $b = 9;
        $soma = 0;
        for ($i = 0; $i <= 7; $i ++) {
            $soma += $sintegra[$i] * $b;
            $b --;
        }
        $i = $soma % 11;
        
        if ($i <= 1) {
            $dig = 0;
        } else {
            $dig = 11 - $i;
        }

        if ($dig >= 10)
            $dig = 0;

        return ($dig == $sintegra[8]);
    }
}

