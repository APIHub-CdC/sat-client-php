<?php

namespace SatClientPhp\Client\Model;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseInvoiceCancellationStatusProcess
{
    
    const EN_PROCESO = 'En proceso';
    const SOLICITUD_RECHAZADA = 'Solicitud rechazada';
    const CANCELADO_SIN_ACEPTACIN = 'Cancelado sin aceptación';
    const CANCELADO_CON_ACEPTACIN = 'Cancelado con aceptación';
    const PLAZO_VENCIDO = 'Plazo vencido';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::EN_PROCESO,
            self::SOLICITUD_RECHAZADA,
            self::CANCELADO_SIN_ACEPTACIN,
            self::CANCELADO_CON_ACEPTACIN,
            self::PLAZO_VENCIDO,
        ];
    }
}
