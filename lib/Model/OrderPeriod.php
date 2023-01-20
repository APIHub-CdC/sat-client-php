<?php

namespace SatClientPhp\Client\Model;
use \SatClientPhp\Client\ObjectSerializer;

class OrderPeriod
{
    
    const ASC = 'asc';
    const DESC = 'desc';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::ASC,
            self::DESC,
        ];
    }
}
