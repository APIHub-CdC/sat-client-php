<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseTaxpayer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseTaxpayer';
    
    protected static $RCCPMTypes = [
        'id' => 'string',
        'type' => 'string',
        'id' => 'string',
        'person_type' => '\SatClientPhp\Client\Model\ResponseCredentialType',
        'registration_date' => '\DateTime',
        'name' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'id' => null,
        'type' => null,
        'id' => null,
        'person_type' => null,
        'registration_date' => 'date',
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
        'id' => '@id',
        'type' => '@type',
        'id' => 'id',
        'person_type' => 'personType',
        'registration_date' => 'registrationDate',
        'name' => 'name'
    ];
    
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'id' => 'setId',
        'person_type' => 'setPersonType',
        'registration_date' => 'setRegistrationDate',
        'name' => 'setName'
    ];
    
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'id' => 'getId',
        'person_type' => 'getPersonType',
        'registration_date' => 'getRegistrationDate',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'Taxpayer';
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['person_type'] = isset($data['person_type']) ? $data['person_type'] : null;
        $this->container['registration_date'] = isset($data['registration_date']) ? $data['registration_date'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 13)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 13.";
        }
        if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 12)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 12.";
        }
        if (!is_null($this->container['id']) && !preg_match("/^([A-ZÑ&]{3,4}) ?(?:- ?)?(\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])) ?(?:- ?)?([A-Z\\d]{2})([A\\d])$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])) ?(?:- ?)?([A-Z\\d]{2})([A\\d])$/.";
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
    
    public function getId()
    {
        return $this->container['id'];
    }
    
    public function setId($id)
    {
        if (!is_null($id) && (mb_strlen($id) > 13)) {
            throw new \InvalidArgumentException('invalid length for $id when calling ResponseTaxpayer., must be smaller than or equal to 13.');
        }
        if (!is_null($id) && (mb_strlen($id) < 12)) {
            throw new \InvalidArgumentException('invalid length for $id when calling ResponseTaxpayer., must be bigger than or equal to 12.');
        }
        if (!is_null($id) && (!preg_match("/^([A-ZÑ&]{3,4}) ?(?:- ?)?(\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])) ?(?:- ?)?([A-Z\\d]{2})([A\\d])$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling ResponseTaxpayer., must conform to the pattern /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])) ?(?:- ?)?([A-Z\\d]{2})([A\\d])$/.");
        }
        $this->container['id'] = $id;
        return $this;
    }
    
    public function getPersonType()
    {
        return $this->container['person_type'];
    }
    
    public function setPersonType($person_type)
    {
        $this->container['person_type'] = $person_type;
        return $this;
    }
    
    public function getRegistrationDate()
    {
        return $this->container['registration_date'];
    }
    
    public function setRegistrationDate($registration_date)
    {
        $this->container['registration_date'] = $registration_date;
        return $this;
    }
    
    public function getName()
    {
        return $this->container['name'];
    }
    
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 254)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ResponseTaxpayer., must be smaller than or equal to 254.');
        }
        if (!is_null($name) && (mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ResponseTaxpayer., must be bigger than or equal to 1.');
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
