<?php

namespace SatClientPhp\Client\Model;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseInvoiceStatus
{
    
    const VIGENTE = 'VIGENTE';
    const CANCELADO = 'CANCELADO';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::VIGENTE,
            self::CANCELADO,
        ];
    }
}
