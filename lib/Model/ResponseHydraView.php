<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseHydraView implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseHydraView';
    
    protected static $RCCPMTypes = [
        'id' => 'string',
        'type' => 'string',
        'hydrafirst' => 'string',
        'hydranext' => 'string',
        'hydralast' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'id' => null,
        'type' => null,
        'hydrafirst' => null,
        'hydranext' => null,
        'hydralast' => null
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
        'id' => '@id',
        'type' => '@type',
        'hydrafirst' => 'hydra:first',
        'hydranext' => 'hydra:next',
        'hydralast' => 'hydra:last'
    ];
    
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'hydrafirst' => 'setHydrafirst',
        'hydranext' => 'setHydranext',
        'hydralast' => 'setHydralast'
    ];
    
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'hydrafirst' => 'getHydrafirst',
        'hydranext' => 'getHydranext',
        'hydralast' => 'getHydralast'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'hydra:PartialCollectionView';
        $this->container['hydrafirst'] = isset($data['hydrafirst']) ? $data['hydrafirst'] : null;
        $this->container['hydranext'] = isset($data['hydranext']) ? $data['hydranext'] : null;
        $this->container['hydralast'] = isset($data['hydralast']) ? $data['hydralast'] : null;
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
    
    public function getId()
    {
        return $this->container['id'];
    }
    
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    
    public function getHydrafirst()
    {
        return $this->container['hydrafirst'];
    }
    
    public function setHydrafirst($hydrafirst)
    {
        $this->container['hydrafirst'] = $hydrafirst;
        return $this;
    }
    
    public function getHydranext()
    {
        return $this->container['hydranext'];
    }
    
    public function setHydranext($hydranext)
    {
        $this->container['hydranext'] = $hydranext;
        return $this;
    }
    
    public function getHydralast()
    {
        return $this->container['hydralast'];
    }
    
    public function setHydralast($hydralast)
    {
        $this->container['hydralast'] = $hydralast;
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
