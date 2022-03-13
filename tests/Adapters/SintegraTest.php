<?php

use PHPUnit\Framework\TestCase;
use Sintegra\Adapters\Sintegra;
use Sintegra\Domain\Enumeration\Estados;

class SintegraTest extends TestCase
{

    
    /**
     * @test
     */
    public function validaSintegraAcre() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("0100482300112", Estados::AC());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("0100482300113", Estados::AC());
        $this->assertFalse($validacao2);
    }
    
}

