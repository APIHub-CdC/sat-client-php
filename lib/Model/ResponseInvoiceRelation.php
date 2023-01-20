<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseInvoiceRelation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseInvoiceRelation';
    
    protected static $RCCPMTypes = [
        'id' => 'string',
        'type' => 'string',
        'id' => 'string',
        'type' => 'double',
        'invoice' => 'string',
        'related_invoice' => 'string',
        'related_invoice_uuid' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'id' => null,
        'type' => null,
        'id' => 'uuid',
        'type' => 'double',
        'invoice' => null,
        'related_invoice' => null,
        'related_invoice_uuid' => 'uuid',
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
        'id' => '@id',
        'type' => '@type',
        'id' => 'id',
        'type' => 'type',
        'invoice' => 'invoice',
        'related_invoice' => 'relatedInvoice',
        'related_invoice_uuid' => 'relatedInvoiceUuid',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];
    
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'id' => 'setId',
        'type' => 'setType',
        'invoice' => 'setInvoice',
        'related_invoice' => 'setRelatedInvoice',
        'related_invoice_uuid' => 'setRelatedInvoiceUuid',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];
    
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'id' => 'getId',
        'type' => 'getType',
        'invoice' => 'getInvoice',
        'related_invoice' => 'getRelatedInvoice',
        'related_invoice_uuid' => 'getRelatedInvoiceUuid',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'InvoiceRelation';
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['related_invoice'] = isset($data['related_invoice']) ? $data['related_invoice'] : null;
        $this->container['related_invoice_uuid'] = isset($data['related_invoice_uuid']) ? $data['related_invoice_uuid'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
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
    
    public function getType()
    {
        return $this->container['type'];
    }
    
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }
    
    public function getInvoice()
    {
        return $this->container['invoice'];
    }
    
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;
        return $this;
    }
    
    public function getRelatedInvoice()
    {
        return $this->container['related_invoice'];
    }
    
    public function setRelatedInvoice($related_invoice)
    {
        $this->container['related_invoice'] = $related_invoice;
        return $this;
    }
    
    public function getRelatedInvoiceUuid()
    {
        return $this->container['related_invoice_uuid'];
    }
    
    public function setRelatedInvoiceUuid($related_invoice_uuid)
    {
        $this->container['related_invoice_uuid'] = $related_invoice_uuid;
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
