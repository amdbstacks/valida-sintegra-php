# Valida Sintegra PHP

A biblioteca de validação de inscrição estadual valida sintegra PHP, foi desenvolvida com o intuito de ser um componente de código aberto e gratuito pra ser integrado ao seu sistema escrito em PHP.

A biblioteca foi escrita agnostica a fremework, podendo ser usada como componente nos mais robustos fremeworks ativos no mercado, desde que a versão do PHP no projeto seja superior PHP.7 ou superior. **Esse componente não funcionará em versões anteriores ao PHP.7.**

# Instalação

``` 
composer require amdbstacks/valida-sintegra
```

# Uso
Para fazer o uso correto da biblioteca, é fornecido um enum Estados, que já contem todos os estados brasileiros para serem usados como parametros na solicitação de validação, como:

```php
Estados::AC(); //para validação de sintegra do Acre.
Estados::AL(); //para validação de sintegra do Alagoas.
Estados::AP(); //para validação de sintegra do Amapá.
Estados::AM(); //para validação de sintegra do Amazonas.
Estados::BA(); //para validação de sintegra da Bahia.
Estados::CE(); //para validação de sintegra do Ceará.
Estados::DF(); //para validação de sintegra do Distrito Federal.
Estados::GO(); //para validação de sintegra do Goiás.
Estados::MA(); //para validação de sintegra do Maranhão.
Estados::MT(); //para validação de sintegra do Mato Grosso.
Estados::MS(); //para validação de sintegra do Mato Grosso do Sul.
Estados::MG(); //para validação de sintegra de Minas Gerais.
Estados::PA(); //para validação de sintegra do Pará.
Estados::PB(); //para validação de sintegra da Paraíba.
Estados::PR(); //para validação de sintegra do Paraná.
Estados::PE(); //para validação de sintegra do Pernambuco.
Estados::PI(); //para validação de sintegra do Piauí.
Estados::RJ(); //para validação de sintegra do Rio de Janeiro.
Estados::RN(); //para validação de sintegra do Rio Grande do Norte.
Estados::RS(); //para validação de sintegra do Rio Grande do Sul.
Estados::RO(); //para validação de sintegra de Rondônia.
Estados::RR(); //para validação de sintegra de Roraima.
Estados::SC(); //para validação de sintegra de Santa Catarina.
Estados::SP(); //para validação de sintegra de São Paulo.
Estados::SE(); //para validação de sintegra de Sergipe.
Estados::TO(); //para validação de sintegra do Tocantins.

```
Com as declarações dos estados como descrito acima, basta agora a instância da classe de validação, e a parametrização correta, de sintegra e estado, como o exemplo abaixo.

```php
use Sintegra\Adapters\Sintegra;
use Sintegra\Domain\Enumeration\Estados;

class MinhaClasse 
{
	public function validar() : void
    {
        $sintegra = new Sintegra();
        $validacao = $sintegra->validar("0100482300112", Estados::AC());
        
        if (!$validacao)
        	throw new RuntimeException("Sintegra inválido!");
    }
}

```
# Considerações finais
A biblioteca é de uso livre e contribuições para melhorias são aceitas.



