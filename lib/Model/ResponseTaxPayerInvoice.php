<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseTaxPayerInvoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseTaxPayerInvoice';
    
    protected static $RCCPMTypes = [
        'context' => 'string',
        'id' => 'string',
        'type' => 'string',
        'hydramember' => '\SatClientPhp\Client\Model\ResponseInvoice[]',
        'hydratotal_items' => 'int',
        'hydraview' => '\SatClientPhp\Client\Model\ResponseCredentialType',
        'hydrasearch' => '\SatClientPhp\Client\Model\ResponseHydraSearch'
    ];
    
    protected static $RCCPMFormats = [
        'context' => null,
        'id' => null,
        'type' => null,
        'hydramember' => null,
        'hydratotal_items' => 'int32',
        'hydraview' => null,
        'hydrasearch' => null
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
        'id' => '@id',
        'type' => '@type',
        'hydramember' => 'hydra:member',
        'hydratotal_items' => 'hydra:totalItems',
        'hydraview' => 'hydra:view',
        'hydrasearch' => 'hydra:search'
    ];
    
    protected static $setters = [
        'context' => 'setContext',
        'id' => 'setId',
        'type' => 'setType',
        'hydramember' => 'setHydramember',
        'hydratotal_items' => 'setHydratotalItems',
        'hydraview' => 'setHydraview',
        'hydrasearch' => 'setHydrasearch'
    ];
    
    protected static $getters = [
        'context' => 'getContext',
        'id' => 'getId',
        'type' => 'getType',
        'hydramember' => 'getHydramember',
        'hydratotal_items' => 'getHydratotalItems',
        'hydraview' => 'getHydraview',
        'hydrasearch' => 'getHydrasearch'
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
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'hydra:Collection';
        $this->container['hydramember'] = isset($data['hydramember']) ? $data['hydramember'] : null;
        $this->container['hydratotal_items'] = isset($data['hydratotal_items']) ? $data['hydratotal_items'] : null;
        $this->container['hydraview'] = isset($data['hydraview']) ? $data['hydraview'] : null;
        $this->container['hydrasearch'] = isset($data['hydrasearch']) ? $data['hydrasearch'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['hydratotal_items']) && ($this->container['hydratotal_items'] < 0)) {
            $invalidProperties[] = "invalid value for 'hydratotal_items', must be bigger than or equal to 0.";
        }
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
    
    public function getHydramember()
    {
        return $this->container['hydramember'];
    }
    
    public function setHydramember($hydramember)
    {
        $this->container['hydramember'] = $hydramember;
        return $this;
    }
    
    public function getHydratotalItems()
    {
        return $this->container['hydratotal_items'];
    }
    
    public function setHydratotalItems($hydratotal_items)
    {
        if (!is_null($hydratotal_items) && ($hydratotal_items < 0)) {
            throw new \InvalidArgumentException('invalid value for $hydratotal_items when calling ResponseTaxPayerInvoice., must be bigger than or equal to 0.');
        }
        $this->container['hydratotal_items'] = $hydratotal_items;
        return $this;
    }
    
    public function getHydraview()
    {
        return $this->container['hydraview'];
    }
    
    public function setHydraview($hydraview)
    {
        $this->container['hydraview'] = $hydraview;
        return $this;
    }
    
    public function getHydrasearch()
    {
        return $this->container['hydrasearch'];
    }
    
    public function setHydrasearch($hydrasearch)
    {
        $this->container['hydrasearch'] = $hydrasearch;
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
