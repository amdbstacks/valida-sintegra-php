<?php
namespace Sintegra\Domain\Core\Service;

class SintegraGoias
{

    protected function validar($sintegra): bool
    {
        if (strlen($sintegra) != 9)
            return false;

        $s = substr($sintegra, 0, 2);

        if (! (($s == 10) || ($s == 11) || ($s == 15)))
            return false;

        $n = substr($sintegra, 0, 7);

        if ($n == 11094402) {
            if ($sintegra[8] != 0) {
                if ($sintegra[8] != 1) {
                    return false;
                } else {
                    return true;
                }
            } else {
                return false;
            }
        } else {
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
                if ($i == 1) {
                    if (($n >= 10103105) && ($n <= 10119997)) {
                        $dig = 1;
                    } else {
                        $dig = 0;
                    }
                } else {
                    $dig = 11 - $i;
                }
            }

            return ($dig == $sintegra[8]);
        }
    }
}

