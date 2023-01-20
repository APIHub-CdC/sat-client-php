<?php

namespace SatClientPhp\Client\Model;
use \SatClientPhp\Client\ObjectSerializer;

class CredentialType
{
    
    const CIEC = 'ciec';
    const EFIRMA = 'efirma';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::CIEC,
            self::EFIRMA,
        ];
    }
}
