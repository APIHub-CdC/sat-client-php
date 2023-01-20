<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseTaxReturnPayment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseTaxReturnPayment';
    
    protected static $RCCPMTypes = [
        'due_amount' => 'double',
        'due_date' => '\DateTime',
        'code' => 'string',
        'bank' => 'string',
        'paid_amount' => 'double',
        'date' => '\DateTime',
        'operation_number' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'due_amount' => 'double',
        'due_date' => 'date-time',
        'code' => null,
        'bank' => null,
        'paid_amount' => 'double',
        'date' => 'date-time',
        'operation_number' => null
    ];
    
    public static function RCCPMTypes()
    {
        return self::$RCCPMTypes;
    }
    
    public static function RCCPMFormats()
    {
        return self::$RCCPMFormats;
    }
    
    protected static $attributeMap = [
        'due_amount' => 'dueAmount',
        'due_date' => 'dueDate',
        'code' => 'code',
        'bank' => 'bank',
        'paid_amount' => 'paidAmount',
        'date' => 'date',
        'operation_number' => 'operationNumber'
    ];
    
    protected static $setters = [
        'due_amount' => 'setDueAmount',
        'due_date' => 'setDueDate',
        'code' => 'setCode',
        'bank' => 'setBank',
        'paid_amount' => 'setPaidAmount',
        'date' => 'setDate',
        'operation_number' => 'setOperationNumber'
    ];
    
    protected static $getters = [
        'due_amount' => 'getDueAmount',
        'due_date' => 'getDueDate',
        'code' => 'getCode',
        'bank' => 'getBank',
        'paid_amount' => 'getPaidAmount',
        'date' => 'getDate',
        'operation_number' => 'getOperationNumber'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$RCCPMModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['due_amount'] = isset($data['due_amount']) ? $data['due_amount'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['bank'] = isset($data['bank']) ? $data['bank'] : null;
        $this->container['paid_amount'] = isset($data['paid_amount']) ? $data['paid_amount'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['operation_number'] = isset($data['operation_number']) ? $data['operation_number'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getDueAmount()
    {
        return $this->container['due_amount'];
    }
    
    public function setDueAmount($due_amount)
    {
        $this->container['due_amount'] = $due_amount;
        return $this;
    }
    
    public function getDueDate()
    {
        return $this->container['due_date'];
    }
    
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;
        return $this;
    }
    
    public function getCode()
    {
        return $this->container['code'];
    }
    
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }
    
    public function getBank()
    {
        return $this->container['bank'];
    }
    
    public function setBank($bank)
    {
        $this->container['bank'] = $bank;
        return $this;
    }
    
    public function getPaidAmount()
    {
        return $this->container['paid_amount'];
    }
    
    public function setPaidAmount($paid_amount)
    {
        $this->container['paid_amount'] = $paid_amount;
        return $this;
    }
    
    public function getDate()
    {
        return $this->container['date'];
    }
    
    public function setDate($date)
    {
        $this->container['date'] = $date;
        return $this;
    }
    
    public function getOperationNumber()
    {
        return $this->container['operation_number'];
    }
    
    public function setOperationNumber($operation_number)
    {
        $this->container['operation_number'] = $operation_number;
        return $this;
    }
    
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
