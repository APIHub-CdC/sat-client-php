<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseTaxStatusPerson implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseTaxStatusPerson';
    
    protected static $RCCPMTypes = [
        'full_name' => 'string',
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'curp' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'full_name' => null,
        'first_name' => null,
        'middle_name' => null,
        'last_name' => null,
        'curp' => null
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
        'full_name' => 'fullName',
        'first_name' => 'firstName',
        'middle_name' => 'middleName',
        'last_name' => 'lastName',
        'curp' => 'curp'
    ];
    
    protected static $setters = [
        'full_name' => 'setFullName',
        'first_name' => 'setFirstName',
        'middle_name' => 'setMiddleName',
        'last_name' => 'setLastName',
        'curp' => 'setCurp'
    ];
    
    protected static $getters = [
        'full_name' => 'getFullName',
        'first_name' => 'getFirstName',
        'middle_name' => 'getMiddleName',
        'last_name' => 'getLastName',
        'curp' => 'getCurp'
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
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['curp'] = isset($data['curp']) ? $data['curp'] : null;
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
    
    public function getFullName()
    {
        return $this->container['full_name'];
    }
    
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;
        return $this;
    }
    
    public function getFirstName()
    {
        return $this->container['first_name'];
    }
    
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;
        return $this;
    }
    
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }
    
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;
        return $this;
    }
    
    public function getLastName()
    {
        return $this->container['last_name'];
    }
    
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;
        return $this;
    }
    
    public function getCurp()
    {
        return $this->container['curp'];
    }
    
    public function setCurp($curp)
    {
        $this->container['curp'] = $curp;
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
