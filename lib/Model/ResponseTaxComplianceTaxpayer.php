<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseTaxComplianceTaxpayer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseTaxComplianceTaxpayer';
    
    protected static $RCCPMTypes = [
        'rfc' => 'string',
        'name' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'rfc' => null,
        'name' => null
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
        'rfc' => 'rfc',
        'name' => 'name'
    ];
    
    protected static $setters = [
        'rfc' => 'setRfc',
        'name' => 'setName'
    ];
    
    protected static $getters = [
        'rfc' => 'getRfc',
        'name' => 'getName'
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
        $this->container['rfc'] = isset($data['rfc']) ? $data['rfc'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['rfc']) && (mb_strlen($this->container['rfc']) > 13)) {
            $invalidProperties[] = "invalid value for 'rfc', the character length must be smaller than or equal to 13.";
        }
        if (!is_null($this->container['rfc']) && (mb_strlen($this->container['rfc']) < 12)) {
            $invalidProperties[] = "invalid value for 'rfc', the character length must be bigger than or equal to 12.";
        }
        if (!is_null($this->container['rfc']) && !preg_match("/^([A-ZÑ&]{3,4}) ?(?:- ?)?(\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])) ?(?:- ?)?([A-Z\\d]{2})([A\\d])$/", $this->container['rfc'])) {
            $invalidProperties[] = "invalid value for 'rfc', must be conform to the pattern /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])) ?(?:- ?)?([A-Z\\d]{2})([A\\d])$/.";
        }
        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 254)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 254.";
        }
        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getRfc()
    {
        return $this->container['rfc'];
    }
    
    public function setRfc($rfc)
    {
        if (!is_null($rfc) && (mb_strlen($rfc) > 13)) {
            throw new \InvalidArgumentException('invalid length for $rfc when calling ResponseTaxComplianceTaxpayer., must be smaller than or equal to 13.');
        }
        if (!is_null($rfc) && (mb_strlen($rfc) < 12)) {
            throw new \InvalidArgumentException('invalid length for $rfc when calling ResponseTaxComplianceTaxpayer., must be bigger than or equal to 12.');
        }
        if (!is_null($rfc) && (!preg_match("/^([A-ZÑ&]{3,4}) ?(?:- ?)?(\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])) ?(?:- ?)?([A-Z\\d]{2})([A\\d])$/", $rfc))) {
            throw new \InvalidArgumentException("invalid value for $rfc when calling ResponseTaxComplianceTaxpayer., must conform to the pattern /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])) ?(?:- ?)?([A-Z\\d]{2})([A\\d])$/.");
        }
        $this->container['rfc'] = $rfc;
        return $this;
    }
    
    public function getName()
    {
        return $this->container['name'];
    }
    
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 254)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ResponseTaxComplianceTaxpayer., must be smaller than or equal to 254.');
        }
        if (!is_null($name) && (mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ResponseTaxComplianceTaxpayer., must be bigger than or equal to 1.');
        }
        $this->container['name'] = $name;
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
