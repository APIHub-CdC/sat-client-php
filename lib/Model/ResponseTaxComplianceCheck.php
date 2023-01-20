<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseTaxComplianceCheck implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseTaxComplianceCheck';
    
    protected static $RCCPMTypes = [
        'id' => 'string',
        'type' => 'string',
        'id' => 'string',
        'file' => '\SatClientPhp\Client\Model\ResponseFile',
        'internal_identifier' => 'string',
        'taxpayer' => '\SatClientPhp\Client\Model\ResponseTaxComplianceTaxpayer',
        'result' => '\SatClientPhp\Client\Model\ResponseCredentialType',
        'checked_at' => 'string',
        'created_at' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'id' => null,
        'type' => null,
        'id' => null,
        'file' => null,
        'internal_identifier' => null,
        'taxpayer' => null,
        'result' => null,
        'checked_at' => null,
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
        'id' => '@id',
        'type' => '@type',
        'id' => 'id',
        'file' => 'file',
        'internal_identifier' => 'internalIdentifier',
        'taxpayer' => 'taxpayer',
        'result' => 'result',
        'checked_at' => 'checkedAt',
        'created_at' => 'createdAt'
    ];
    
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'id' => 'setId',
        'file' => 'setFile',
        'internal_identifier' => 'setInternalIdentifier',
        'taxpayer' => 'setTaxpayer',
        'result' => 'setResult',
        'checked_at' => 'setCheckedAt',
        'created_at' => 'setCreatedAt'
    ];
    
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'id' => 'getId',
        'file' => 'getFile',
        'internal_identifier' => 'getInternalIdentifier',
        'taxpayer' => 'getTaxpayer',
        'result' => 'getResult',
        'checked_at' => 'getCheckedAt',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'TaxComplianceCheck';
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['internal_identifier'] = isset($data['internal_identifier']) ? $data['internal_identifier'] : null;
        $this->container['taxpayer'] = isset($data['taxpayer']) ? $data['taxpayer'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['checked_at'] = isset($data['checked_at']) ? $data['checked_at'] : null;
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
    
    public function getFile()
    {
        return $this->container['file'];
    }
    
    public function setFile($file)
    {
        $this->container['file'] = $file;
        return $this;
    }
    
    public function getInternalIdentifier()
    {
        return $this->container['internal_identifier'];
    }
    
    public function setInternalIdentifier($internal_identifier)
    {
        $this->container['internal_identifier'] = $internal_identifier;
        return $this;
    }
    
    public function getTaxpayer()
    {
        return $this->container['taxpayer'];
    }
    
    public function setTaxpayer($taxpayer)
    {
        $this->container['taxpayer'] = $taxpayer;
        return $this;
    }
    
    public function getResult()
    {
        return $this->container['result'];
    }
    
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }
    
    public function getCheckedAt()
    {
        return $this->container['checked_at'];
    }
    
    public function setCheckedAt($checked_at)
    {
        $this->container['checked_at'] = $checked_at;
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
