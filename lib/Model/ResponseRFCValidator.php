<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseRFCValidator implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseRFCValidator';
    
    protected static $RCCPMTypes = [
        'valid' => 'bool',
        'active' => 'bool',
        'type' => '\SatClientPhp\Client\Model\ResponseCredentialType',
        'created_at' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'valid' => null,
        'active' => null,
        'type' => null,
        'created_at' => null
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
        'valid' => 'valid',
        'active' => 'active',
        'type' => 'type',
        'created_at' => 'createdAt'
    ];
    
    protected static $setters = [
        'valid' => 'setValid',
        'active' => 'setActive',
        'type' => 'setType',
        'created_at' => 'setCreatedAt'
    ];
    
    protected static $getters = [
        'valid' => 'getValid',
        'active' => 'getActive',
        'type' => 'getType',
        'created_at' => 'getCreatedAt'
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
        $this->container['valid'] = isset($data['valid']) ? $data['valid'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
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
    
    public function getValid()
    {
        return $this->container['valid'];
    }
    
    public function setValid($valid)
    {
        $this->container['valid'] = $valid;
        return $this;
    }
    
    public function getActive()
    {
        return $this->container['active'];
    }
    
    public function setActive($active)
    {
        $this->container['active'] = $active;
        return $this;
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
    
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }
    
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;
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
