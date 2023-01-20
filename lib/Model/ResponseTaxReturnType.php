<?php

namespace SatClientPhp\Client\Model;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseTaxReturnType
{
    
    const COMPLEMENTARIA = 'Complementaria';
    const COMPLEMENTARIA_CORRECCIN_FISCAL = 'Complementaria Corrección Fiscal';
    const COMPLEMENTARIA_DICTAMEN = 'Complementaria Dictamen';
    const NORMAL = 'Normal';
    const NORMAL_POR_CORRECCIN_FISCAL = 'Normal por Corrección Fiscal';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::COMPLEMENTARIA,
            self::COMPLEMENTARIA_CORRECCIN_FISCAL,
            self::COMPLEMENTARIA_DICTAMEN,
            self::NORMAL,
            self::NORMAL_POR_CORRECCIN_FISCAL,
        ];
    }
}
