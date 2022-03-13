<?php
namespace Sintegra\Domain\Core\Service;

class SintegraMG
{

    public function validar($sintegra): bool
    {
        if (strlen($sintegra) != 13)
            return false;

        $ie2 = substr($sintegra, 0, 3) . '0' . substr($sintegra, 3);

        $b = 1;
        $soma = "";

        for ($i = 0; $i <= 11; $i ++) {
            $soma .= $ie2[$i] * $b;
            $b ++;

            if ($b == 3)
                $b = 1;
        }

        $s = 0;
        for ($i = 0; $i < strlen($soma); $i ++) {
            $s += $soma[$i];
        }

        $num = ceil($s / 10) * 10;

        $dig = $num - $s;

        if ($dig != $sintegra[11])
            return false;

        $b = 3;
        $soma = 0;

        for ($i = 0; $i <= 11; $i ++) {

            $soma += $sintegra[$i] * $b;
            $b --;
            if ($b == 1)
                $b = 11;
        }
        $i = $soma % 11;

        if ($i < 2) {
            $dig = 0;
        } else {
            $dig = 11 - $i;
        }

        return ($dig == $sintegra[12]);
    }
}