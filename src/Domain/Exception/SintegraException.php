<?php
namespace Sintegra\Domain\Exception;

class SintegraException extends \RuntimeException
{
    public function __construct(string $message) 
    {
        parent::__construct($message);
    }
}

