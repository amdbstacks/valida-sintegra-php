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
    
    /**
     * @test
     */
    public function deveValidarSintegraDF() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("0730000100109", Estados::DF());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("0730000100108", Estados::DF());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraES() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("999999990", Estados::ES());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("999999994", Estados::ES());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraGoias() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("109876547", Estados::GO());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("109876548", Estados::GO());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraMaranhao() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("120000385", Estados::MA());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("120000386", Estados::MA());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraMatoGrosso() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("00130000019", Estados::MT());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("00130000016", Estados::MT());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraMatoGrossoSul() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("283115947", Estados::MS());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("283115949", Estados::MS());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraMG() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("0623079040081", Estados::MG());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("0623079040085", Estados::MG());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraPara() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("159999995", Estados::PA());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("159999996", Estados::PA());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraParaiba() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("060000015", Estados::PB());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("060000016", Estados::PB());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraParana() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("1234567850", Estados::PR());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("1234567851", Estados::PR());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraPernambuco1() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("032141840", Estados::PE());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("032141843", Estados::PE());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraPernambuco2() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("18100100000049", Estados::PE());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("18100100000048", Estados::PE());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraPiaui() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("012345679", Estados::PI());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("012345678", Estados::PI());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraRJ() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("99999993", Estados::RJ());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("99999996", Estados::RJ());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraRioGrandeNorte1() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("200400401", Estados::RN());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("200400402", Estados::RN());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraRioGrandeNorte2() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("2000400400", Estados::RN());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("2000400401", Estados::RN());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraRioGrandeSul() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("2243658792", Estados::RS());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("2243658793", Estados::RS());
        $this->assertFalse($validacao2);
    }
    
    /**
    * @test
    */
    public function deveValidarSintegraRondonia1() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("101625213", Estados::RO());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("101625214", Estados::RO());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraRondonia2() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("00000000625213", Estados::RO());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("00000000625214", Estados::RO());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraRoraima() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("240066281", Estados::RR());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("240066282", Estados::RR());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraSC() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("251040852", Estados::SC());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("251040854", Estados::SC());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraSP() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("110042490114", Estados::SP());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("110042490115", Estados::SP());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraSergipe() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("271234563", Estados::SE());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("271234564", Estados::SE());
        $this->assertFalse($validacao2);
    }
    
    /**
     * @test
     */
    public function deveValidarSintegraTocantins() : void
    {
        $sintegra = new Sintegra();
        $validacao1 = $sintegra->validar("29010227836", Estados::TO());
        $this->assertTrue($validacao1);
        
        $validacao2 = $sintegra->validar("29010227835", Estados::TO());
        $this->assertFalse($validacao2);
    }
    
}

