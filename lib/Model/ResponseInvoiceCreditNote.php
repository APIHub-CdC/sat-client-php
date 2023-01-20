<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseInvoiceCreditNote implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseInvoiceCreditNote';
    
    protected static $RCCPMTypes = [
        'id' => 'string',
        'type' => 'string',
        'applied_invoice' => 'string',
        'issued_invoice' => 'string',
        'issued_at' => '\DateTime',
        'proportional_rate' => 'double',
        'amount' => 'double',
        'issued_invoice_total' => 'double',
        'canceled_at' => '\DateTime',
        'created_at' => 'string',
        'updated_at' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'id' => null,
        'type' => null,
        'applied_invoice' => null,
        'issued_invoice' => null,
        'issued_at' => 'date-time',
        'proportional_rate' => 'double',
        'amount' => 'double',
        'issued_invoice_total' => 'double',
        'canceled_at' => 'date-time',
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
        'applied_invoice' => 'appliedInvoice',
        'issued_invoice' => 'issuedInvoice',
        'issued_at' => 'issuedAt',
        'proportional_rate' => 'proportionalRate',
        'amount' => 'amount',
        'issued_invoice_total' => 'issuedInvoiceTotal',
        'canceled_at' => 'canceledAt',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];
    
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'applied_invoice' => 'setAppliedInvoice',
        'issued_invoice' => 'setIssuedInvoice',
        'issued_at' => 'setIssuedAt',
        'proportional_rate' => 'setProportionalRate',
        'amount' => 'setAmount',
        'issued_invoice_total' => 'setIssuedInvoiceTotal',
        'canceled_at' => 'setCanceledAt',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];
    
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'applied_invoice' => 'getAppliedInvoice',
        'issued_invoice' => 'getIssuedInvoice',
        'issued_at' => 'getIssuedAt',
        'proportional_rate' => 'getProportionalRate',
        'amount' => 'getAmount',
        'issued_invoice_total' => 'getIssuedInvoiceTotal',
        'canceled_at' => 'getCanceledAt',
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'InvoicePayment';
        $this->container['applied_invoice'] = isset($data['applied_invoice']) ? $data['applied_invoice'] : null;
        $this->container['issued_invoice'] = isset($data['issued_invoice']) ? $data['issued_invoice'] : null;
        $this->container['issued_at'] = isset($data['issued_at']) ? $data['issued_at'] : null;
        $this->container['proportional_rate'] = isset($data['proportional_rate']) ? $data['proportional_rate'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['issued_invoice_total'] = isset($data['issued_invoice_total']) ? $data['issued_invoice_total'] : null;
        $this->container['canceled_at'] = isset($data['canceled_at']) ? $data['canceled_at'] : null;
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
    
    public function getAppliedInvoice()
    {
        return $this->container['applied_invoice'];
    }
    
    public function setAppliedInvoice($applied_invoice)
    {
        $this->container['applied_invoice'] = $applied_invoice;
        return $this;
    }
    
    public function getIssuedInvoice()
    {
        return $this->container['issued_invoice'];
    }
    
    public function setIssuedInvoice($issued_invoice)
    {
        $this->container['issued_invoice'] = $issued_invoice;
        return $this;
    }
    
    public function getIssuedAt()
    {
        return $this->container['issued_at'];
    }
    
    public function setIssuedAt($issued_at)
    {
        $this->container['issued_at'] = $issued_at;
        return $this;
    }
    
    public function getProportionalRate()
    {
        return $this->container['proportional_rate'];
    }
    
    public function setProportionalRate($proportional_rate)
    {
        $this->container['proportional_rate'] = $proportional_rate;
        return $this;
    }
    
    public function getAmount()
    {
        return $this->container['amount'];
    }
    
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;
        return $this;
    }
    
    public function getIssuedInvoiceTotal()
    {
        return $this->container['issued_invoice_total'];
    }
    
    public function setIssuedInvoiceTotal($issued_invoice_total)
    {
        $this->container['issued_invoice_total'] = $issued_invoice_total;
        return $this;
    }
    
    public function getCanceledAt()
    {
        return $this->container['canceled_at'];
    }
    
    public function setCanceledAt($canceled_at)
    {
        $this->container['canceled_at'] = $canceled_at;
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
