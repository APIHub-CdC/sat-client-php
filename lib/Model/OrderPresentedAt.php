<?php

namespace SatClientPhp\Client\Model;
use \SatClientPhp\Client\ObjectSerializer;

class OrderPresentedAt
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
