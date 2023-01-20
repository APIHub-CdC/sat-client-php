<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseTaxStatusCompany implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseTaxStatusCompany';
    
    protected static $RCCPMTypes = [
        'legal_name' => 'string',
        'trade_name' => 'string',
        'entity_type' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'legal_name' => null,
        'trade_name' => null,
        'entity_type' => null
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
        'legal_name' => 'legalName',
        'trade_name' => 'tradeName',
        'entity_type' => 'entityType'
    ];
    
    protected static $setters = [
        'legal_name' => 'setLegalName',
        'trade_name' => 'setTradeName',
        'entity_type' => 'setEntityType'
    ];
    
    protected static $getters = [
        'legal_name' => 'getLegalName',
        'trade_name' => 'getTradeName',
        'entity_type' => 'getEntityType'
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
        $this->container['legal_name'] = isset($data['legal_name']) ? $data['legal_name'] : null;
        $this->container['trade_name'] = isset($data['trade_name']) ? $data['trade_name'] : null;
        $this->container['entity_type'] = isset($data['entity_type']) ? $data['entity_type'] : null;
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
    
    public function getLegalName()
    {
        return $this->container['legal_name'];
    }
    
    public function setLegalName($legal_name)
    {
        $this->container['legal_name'] = $legal_name;
        return $this;
    }
    
    public function getTradeName()
    {
        return $this->container['trade_name'];
    }
    
    public function setTradeName($trade_name)
    {
        $this->container['trade_name'] = $trade_name;
        return $this;
    }
    
    public function getEntityType()
    {
        return $this->container['entity_type'];
    }
    
    public function setEntityType($entity_type)
    {
        $this->container['entity_type'] = $entity_type;
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
