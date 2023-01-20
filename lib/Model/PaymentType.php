<?php

namespace SatClientPhp\Client\Model;
use \SatClientPhp\Client\ObjectSerializer;

class PaymentType
{
    
    const PUE = 'PUE';
    const PPD = 'PPD';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::PUE,
            self::PPD,
        ];
    }
}
