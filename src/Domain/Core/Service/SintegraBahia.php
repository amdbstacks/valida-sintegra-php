<?php
namespace Sintegra\Domain\Core\Service;

class SintegraBahia
{

    protected function validar($sintegra): bool
    {
        if (strlen($sintegra) != 8)
            return false;

        $arr1 = array(
            '0',
            '1',
            '2',
            '3',
            '4',
            '5',
            '8'
        );

        $arr2 = array(
            '6',
            '7',
            '9'
        );

        $i = substr($sintegra, 0, 1);

        if (in_array($i, $arr1)) {
            $modulo = 10;
        } elseif (in_array($i, $arr2)) {
            $modulo = 11;
        }

        $b = 7;
        $soma = 0;
        for ($i = 0; $i <= 5; $i ++) {
            $soma += $sintegra[$i] * $b;
            $b --;
        }

        $i = $soma % $modulo;

        if ($modulo == 10) {
            if ($i == 0) {
                $dig = 0;
            } else {
                $dig = $modulo - $i;
            }
        } else {
            if ($i <= 1) {
                $dig = 0;
            } else {
                $dig = $modulo - $i;
            }
        }

        if (! ($dig == $sintegra[7]))
            return false;

        $b = 8;
        $soma = 0;
        for ($i = 0; $i <= 5; $i ++) {
            $soma += $sintegra[$i] * $b;
            $b --;
        }
        $soma += $sintegra[7] * 2;
        $i = $soma % $modulo;
        if ($modulo == 10) {
            if ($i == 0) {
                $dig = 0;
            } else {
                $dig = $modulo - $i;
            }
        } else {
            if ($i <= 1) {
                $dig = 0;
            } else {
                $dig = $modulo - $i;
            }
        }

        return ($dig == $sintegra[6]);
    }
}
