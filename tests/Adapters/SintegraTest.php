<?php

use PHPUnit\Framework\TestCase;
use Sintegra\Adapters\Sintegra;
use Sintegra\Domain\Enumeration\Estados;

class SintegraTest extends TestCase
{

    
    /**
     * @test
     */
    public function deveValidarSintegraAcre() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("0100482300112", Estados::AC());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("0100482300113", Estados::AC());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraAlagoas() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("240000048", Estados::AL());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("240000049", Estados::AL());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraAmapa() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("030123459", Estados::AP());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("030123450", Estados::AP());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraAmazonas() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("999999990", Estados::AM());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("999999999", Estados::AM());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraBahia() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("12345663", Estados::BA());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("12345664", Estados::BA());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraCeara() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("060000015", Estados::CE());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("060000016", Estados::CE());
        $this->assertFalse($validacao2);
    }
    
}

