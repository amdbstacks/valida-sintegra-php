<?php
namespace Sintegra\Domain\Core\Service;

class SintegraPernambuco
{

    public function validar($sintegra): bool
    {
        if (strlen($sintegra) == 9) {
            $b = 8;
            $soma = 0;
            for ($i = 0; $i <= 6; $i ++) {
                $soma += $sintegra[$i] * $b;
                $b --;
            }
            $i = $soma % 11;
            if ($i <= 1) {
                $dig = 0;
            } else {
                $dig = 11 - $i;
            }

            if (!($dig == $sintegra[7]))
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

            return ($dig == $sintegra[8]);
        }

        if (strlen($sintegra) == 14) {
            $b = 5;
            $soma = 0;
            for ($i = 0; $i <= 12; $i ++) {
                $soma += $sintegra[$i] * $b;
                $b --;
                if ($b == 0)
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

