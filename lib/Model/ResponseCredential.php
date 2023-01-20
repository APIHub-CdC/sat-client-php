<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseCredential implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseCredential';
    
    protected static $RCCPMTypes = [
        'context' => 'string',
        'id' => 'string',
        'type' => 'string',
        'id' => 'string',
        'type' => '\SatClientPhp\Client\Model\ResponseCredentialType',
        'rfc' => 'string',
        'status' => '\SatClientPhp\Client\Model\ResponseCredentialType',
        'created_at' => 'string',
        'updated_at' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'context' => null,
        'id' => null,
        'type' => null,
        'id' => 'uuid',
        'type' => null,
        'rfc' => null,
        'status' => null,
        'created_at' => null,
        'updated_at' => null
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
        'id' => 'id',
        'type' => 'type',
        'rfc' => 'rfc',
        'status' => 'status',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];
    
    protected static $setters = [
        'context' => 'setContext',
        'id' => 'setId',
        'type' => 'setType',
        'id' => 'setId',
        'type' => 'setType',
        'rfc' => 'setRfc',
        'status' => 'setStatus',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];
    
    protected static $getters = [
        'context' => 'getContext',
        'id' => 'getId',
        'type' => 'getType',
        'id' => 'getId',
        'type' => 'getType',
        'rfc' => 'getRfc',
        'status' => 'getStatus',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['context'] = isset($data['context']) ? $data['context'] : '/contexts/Credential';
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'Credential';
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['rfc'] = isset($data['rfc']) ? $data['rfc'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
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
    
    public function getRfc()
    {
        return $this->container['rfc'];
    }
    
    public function setRfc($rfc)
    {
        if (!is_null($rfc) && (mb_strlen($rfc) > 13)) {
            throw new \InvalidArgumentException('invalid length for $rfc when calling ResponseCredential., must be smaller than or equal to 13.');
        }
        if (!is_null($rfc) && (mb_strlen($rfc) < 12)) {
            throw new \InvalidArgumentException('invalid length for $rfc when calling ResponseCredential., must be bigger than or equal to 12.');
        }
        if (!is_null($rfc) && (!preg_match("/^([A-ZÑ&]{3,4}) ?(?:- ?)?(\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])) ?(?:- ?)?([A-Z\\d]{2})([A\\d])$/", $rfc))) {
            throw new \InvalidArgumentException("invalid value for $rfc when calling ResponseCredential., must conform to the pattern /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])) ?(?:- ?)?([A-Z\\d]{2})([A\\d])$/.");
        }
        $this->container['rfc'] = $rfc;
        return $this;
    }
    
    public function getStatus()
    {
        return $this->container['status'];
    }
    
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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
    
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }
    
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;
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
