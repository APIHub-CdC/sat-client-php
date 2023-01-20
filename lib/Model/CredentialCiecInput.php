<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class CredentialCiecInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'CredentialCiecInput';
    
    protected static $RCCPMTypes = [
        'type' => 'string',
        'rfc' => 'string',
        'password' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'type' => null,
        'rfc' => null,
        'password' => null
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
        'type' => 'type',
        'rfc' => 'rfc',
        'password' => 'password'
    ];
    
    protected static $setters = [
        'type' => 'setType',
        'rfc' => 'setRfc',
        'password' => 'setPassword'
    ];
    
    protected static $getters = [
        'type' => 'getType',
        'rfc' => 'getRfc',
        'password' => 'getPassword'
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
        $this->container['rfc'] = isset($data['rfc']) ? $data['rfc'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['rfc'] === null) {
            $invalidProperties[] = "'rfc' can't be null";
        }
        if ((mb_strlen($this->container['rfc']) > 13)) {
            $invalidProperties[] = "invalid value for 'rfc', the character length must be smaller than or equal to 13.";
        }
        if ((mb_strlen($this->container['rfc']) < 12)) {
            $invalidProperties[] = "invalid value for 'rfc', the character length must be bigger than or equal to 12.";
        }
        if (!preg_match("/^([A-ZÑ&]{3,4}) ?(?:- ?)?(\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])) ?(?:- ?)?([A-Z\\d]{2})([A\\d])$/", $this->container['rfc'])) {
            $invalidProperties[] = "invalid value for 'rfc', must be conform to the pattern /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])) ?(?:- ?)?([A-Z\\d]{2})([A\\d])$/.";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ((mb_strlen($this->container['password']) < 8)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 8.";
        }
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
    
    public function getRfc()
    {
        return $this->container['rfc'];
    }
    
    public function setRfc($rfc)
    {
        if ((mb_strlen($rfc) > 13)) {
            throw new \InvalidArgumentException('invalid length for $rfc when calling CredentialCiecInput., must be smaller than or equal to 13.');
        }
        if ((mb_strlen($rfc) < 12)) {
            throw new \InvalidArgumentException('invalid length for $rfc when calling CredentialCiecInput., must be bigger than or equal to 12.');
        }
        if ((!preg_match("/^([A-ZÑ&]{3,4}) ?(?:- ?)?(\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])) ?(?:- ?)?([A-Z\\d]{2})([A\\d])$/", $rfc))) {
            throw new \InvalidArgumentException("invalid value for $rfc when calling CredentialCiecInput., must conform to the pattern /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])) ?(?:- ?)?([A-Z\\d]{2})([A\\d])$/.");
        }
        $this->container['rfc'] = $rfc;
        return $this;
    }
    
    public function getPassword()
    {
        return $this->container['password'];
    }
    
    public function setPassword($password)
    {
        if ((mb_strlen($password) < 8)) {
            throw new \InvalidArgumentException('invalid length for $password when calling CredentialCiecInput., must be bigger than or equal to 8.');
        }
        $this->container['password'] = $password;
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
