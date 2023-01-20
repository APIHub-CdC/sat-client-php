<?php

namespace SatClientPhp\Client\Model;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseInvoiceCancellationStatus
{
    
    const CANCELABLE_SIN_ACEPTACIN = 'Cancelable sin aceptación';
    const CANCELABLE_CON_ACEPTACIN = 'Cancelable con aceptación';
    const NO_CANCELABLE = 'No cancelable';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::CANCELABLE_SIN_ACEPTACIN,
            self::CANCELABLE_CON_ACEPTACIN,
            self::NO_CANCELABLE,
        ];
    }
}
