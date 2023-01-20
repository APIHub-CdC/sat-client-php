<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseHydraMapping implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseHydraMapping';
    
    protected static $RCCPMTypes = [
        'type' => 'string',
        'variable' => 'string',
        'property' => 'string',
        'required' => 'bool'
    ];
    
    protected static $RCCPMFormats = [
        'type' => null,
        'variable' => null,
        'property' => null,
        'required' => null
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
        'variable' => 'variable',
        'property' => 'property',
        'required' => 'required'
    ];
    
    protected static $setters = [
        'type' => 'setType',
        'variable' => 'setVariable',
        'property' => 'setProperty',
        'required' => 'setRequired'
    ];
    
    protected static $getters = [
        'type' => 'getType',
        'variable' => 'getVariable',
        'property' => 'getProperty',
        'required' => 'getRequired'
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
        $this->container['variable'] = isset($data['variable']) ? $data['variable'] : null;
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
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
    
    public function getVariable()
    {
        return $this->container['variable'];
    }
    
    public function setVariable($variable)
    {
        $this->container['variable'] = $variable;
        return $this;
    }
    
    public function getProperty()
    {
        return $this->container['property'];
    }
    
    public function setProperty($property)
    {
        $this->container['property'] = $property;
        return $this;
    }
    
    public function getRequired()
    {
        return $this->container['required'];
    }
    
    public function setRequired($required)
    {
        $this->container['required'] = $required;
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
