<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseCredential400 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseCredential400';
    
    protected static $RCCPMTypes = [
        'context' => 'string',
        'type' => 'string',
        'hydratitle' => 'string',
        'hydradescription' => 'string',
        'violations' => '\SatClientPhp\Client\Model\ResponseCredential400Violation[]'
    ];
    
    protected static $RCCPMFormats = [
        'context' => null,
        'type' => null,
        'hydratitle' => null,
        'hydradescription' => null,
        'violations' => null
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
        'context' => '@context',
        'type' => '@type',
        'hydratitle' => 'hydra:title',
        'hydradescription' => 'hydra:description',
        'violations' => 'violations'
    ];
    
    protected static $setters = [
        'context' => 'setContext',
        'type' => 'setType',
        'hydratitle' => 'setHydratitle',
        'hydradescription' => 'setHydradescription',
        'violations' => 'setViolations'
    ];
    
    protected static $getters = [
        'context' => 'getContext',
        'type' => 'getType',
        'hydratitle' => 'getHydratitle',
        'hydradescription' => 'getHydradescription',
        'violations' => 'getViolations'
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
        $this->container['context'] = isset($data['context']) ? $data['context'] : '/contexts/ConstraintViolationList';
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'ConstraintViolationList';
        $this->container['hydratitle'] = isset($data['hydratitle']) ? $data['hydratitle'] : 'An error occurred';
        $this->container['hydradescription'] = isset($data['hydradescription']) ? $data['hydradescription'] : null;
        $this->container['violations'] = isset($data['violations']) ? $data['violations'] : null;
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
    
    public function getContext()
    {
        return $this->container['context'];
    }
    
    public function setContext($context)
    {
        $this->container['context'] = $context;
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
    
    public function getHydratitle()
    {
        return $this->container['hydratitle'];
    }
    
    public function setHydratitle($hydratitle)
    {
        $this->container['hydratitle'] = $hydratitle;
        return $this;
    }
    
    public function getHydradescription()
    {
        return $this->container['hydradescription'];
    }
    
    public function setHydradescription($hydradescription)
    {
        $this->container['hydradescription'] = $hydradescription;
        return $this;
    }
    
    public function getViolations()
    {
        return $this->container['violations'];
    }
    
    public function setViolations($violations)
    {
        $this->container['violations'] = $violations;
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
