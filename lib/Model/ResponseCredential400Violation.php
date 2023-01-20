<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseCredential400Violation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseCredential400Violation';
    
    protected static $RCCPMTypes = [
        'property_path' => 'string',
        'message' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'property_path' => null,
        'message' => null
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
        'property_path' => 'propertyPath',
        'message' => 'message'
    ];
    
    protected static $setters = [
        'property_path' => 'setPropertyPath',
        'message' => 'setMessage'
    ];
    
    protected static $getters = [
        'property_path' => 'getPropertyPath',
        'message' => 'getMessage'
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
        $this->container['property_path'] = isset($data['property_path']) ? $data['property_path'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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
    
    public function getPropertyPath()
    {
        return $this->container['property_path'];
    }
    
    public function setPropertyPath($property_path)
    {
        $this->container['property_path'] = $property_path;
        return $this;
    }
    
    public function getMessage()
    {
        return $this->container['message'];
    }
    
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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
