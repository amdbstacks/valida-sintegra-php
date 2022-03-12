<?php
namespace Sintegra\Domain\Core\Service;

use Sintegra\Domain\Enumeration\Estados;
use Exception;

class ValidarSintegraEstado
{
    public function validar(string $sintegra, Estados $estado) : bool
    {
        try {
            $instancias = $this->geraInstancia();
            $validador = $instancias[$estado->getName()];
            
            return $validador->validar($sintegra);
        } catch (Exception $e) {
            throw $e;
        }
    }
    
    private function geraInstancia() : array
    {
        return array(
            Estados::AC()->getName() => new SintegraAcre(),
            Estados::AL()->getName() => new SintegraAlagoas(),
            Estados::AP()->getName() => new SintegraAmapa(),
            Estados::AM()->getName() => new SintegraAmazonas(),
            Estados::BA()->getName() => new SintegraBahia(),
            Estados::CE()->getName() => new SintegraCeara(),
            Estados::DF()->getName() => new SintegraDF(),
            Estados::ES()->getName() => new SintegraES(),
            Estados::GO()->getName() => new SintegraGoias(),
            Estados::MA()->getName() => new SintegraMaranhao(),
            Estados::MT()->getName() => new SintegraMatoGrosso(),
            Estados::MS()->getName() => new SintegraMatoGrossoSul(),
            Estados::MG()->getName() => new SintegraMG(),
            Estados::PA()->getName() => new SintegraPara(),
            Estados::PB()->getName() => new SintegraParaiba(),
            Estados::PR()->getName() => new SintegraParana(),
            Estados::PE()->getName() => new SintegraPernambuco(),
            Estados::PI()->getName() => new SintegraPiaui(),
            Estados::RN()->getName() => new SintegraRioGrandeNorte(),
            Estados::RS()->getName() => new SintegraRioGrandeSul(),
            Estados::RJ()->getName() => new SintegraRJ(),
            Estados::RO()->getName() => new SintegraRondonia(),
            Estados::RR()->getName() => new SintegraRoraima(),
            Estados::SC()->getName() => new SintegraSC(),
            Estados::SE()->getName() => new SintegraSergipe(),
            Estados::SP()->getName() => new SintegraSP(),
            Estados::TO()->getName() => new SintegraTocantins()
        );
    }
}

