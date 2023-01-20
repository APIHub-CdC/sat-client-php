<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseHydraSearch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseHydraSearch';
    
    protected static $RCCPMTypes = [
        'type' => 'string',
        'hydratemplate' => 'string',
        'hydravariable_representation' => 'string',
        'hydramapping' => '\SatClientPhp\Client\Model\ResponseHydraMapping[]'
    ];
    
    protected static $RCCPMFormats = [
        'type' => null,
        'hydratemplate' => null,
        'hydravariable_representation' => null,
        'hydramapping' => null
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
        'type' => '@type',
        'hydratemplate' => 'hydra:template',
        'hydravariable_representation' => 'hydra:variableRepresentation',
        'hydramapping' => 'hydra:mapping'
    ];
    
    protected static $setters = [
        'type' => 'setType',
        'hydratemplate' => 'setHydratemplate',
        'hydravariable_representation' => 'setHydravariableRepresentation',
        'hydramapping' => 'setHydramapping'
    ];
    
    protected static $getters = [
        'type' => 'getType',
        'hydratemplate' => 'getHydratemplate',
        'hydravariable_representation' => 'getHydravariableRepresentation',
        'hydramapping' => 'getHydramapping'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['hydratemplate'] = isset($data['hydratemplate']) ? $data['hydratemplate'] : null;
        $this->container['hydravariable_representation'] = isset($data['hydravariable_representation']) ? $data['hydravariable_representation'] : null;
        $this->container['hydramapping'] = isset($data['hydramapping']) ? $data['hydramapping'] : null;
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
    
    public function getType()
    {
        return $this->container['type'];
    }
    
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }
    
    public function getHydratemplate()
    {
        return $this->container['hydratemplate'];
    }
    
    public function setHydratemplate($hydratemplate)
    {
        $this->container['hydratemplate'] = $hydratemplate;
        return $this;
    }
    
    public function getHydravariableRepresentation()
    {
        return $this->container['hydravariable_representation'];
    }
    
    public function setHydravariableRepresentation($hydravariable_representation)
    {
        $this->container['hydravariable_representation'] = $hydravariable_representation;
        return $this;
    }
    
    public function getHydramapping()
    {
        return $this->container['hydramapping'];
    }
    
    public function setHydramapping($hydramapping)
    {
        $this->container['hydramapping'] = $hydramapping;
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
