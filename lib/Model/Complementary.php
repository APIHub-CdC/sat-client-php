<?php

namespace SatClientPhp\Client\Model;
use \SatClientPhp\Client\ObjectSerializer;

class Complementary
{
    
    const DECLARACIN_NO_PRESENTADA = 'Declaración no Presentada';
    const DEJAR_SIN_EFECTO_DECLARACIN = 'Dejar sin Efecto Declaración';
    const DEJAR_SIN_EFECTO_OBLIGACIN = 'Dejar sin Efecto Obligación';
    const ESQUEMA_ANTERIOR = 'Esquema Anterior';
    const MODIFICACIN_DE_DECLARACIN = 'Modificación de Declaración';
    const MODIFICACIN_DE_OBLIGACIONES = 'Modificación de Obligaciones';
    const OBLIGACIN_NO_PRESENTADA = 'Obligación no presentada';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::DECLARACIN_NO_PRESENTADA,
            self::DEJAR_SIN_EFECTO_DECLARACIN,
            self::DEJAR_SIN_EFECTO_OBLIGACIN,
            self::ESQUEMA_ANTERIOR,
            self::MODIFICACIN_DE_DECLARACIN,
            self::MODIFICACIN_DE_OBLIGACIONES,
            self::OBLIGACIN_NO_PRESENTADA,
        ];
    }
}
