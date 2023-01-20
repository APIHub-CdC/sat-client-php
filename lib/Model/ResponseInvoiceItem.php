<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseInvoiceItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseInvoiceItem';
    
    protected static $RCCPMTypes = [
        'identification_number' => 'string',
        'product_identification' => 'string',
        'description' => 'string',
        'unit_amount' => 'double',
        'unit_code' => 'string',
        'quantity' => 'double',
        'discount_amount' => 'double',
        'tax_type' => 'string',
        'tax_rate' => 'double',
        'tax_amount' => 'double',
        'total_amount' => 'double'
    ];
    
    protected static $RCCPMFormats = [
        'identification_number' => null,
        'product_identification' => null,
        'description' => null,
        'unit_amount' => 'double',
        'unit_code' => null,
        'quantity' => 'double',
        'discount_amount' => 'double',
        'tax_type' => null,
        'tax_rate' => 'double',
        'tax_amount' => 'double',
        'total_amount' => 'double'
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
        'identification_number' => 'identificationNumber',
        'product_identification' => 'productIdentification',
        'description' => 'description',
        'unit_amount' => 'unitAmount',
        'unit_code' => 'unitCode',
        'quantity' => 'quantity',
        'discount_amount' => 'discountAmount',
        'tax_type' => 'taxType',
        'tax_rate' => 'taxRate',
        'tax_amount' => 'taxAmount',
        'total_amount' => 'totalAmount'
    ];
    
    protected static $setters = [
        'identification_number' => 'setIdentificationNumber',
        'product_identification' => 'setProductIdentification',
        'description' => 'setDescription',
        'unit_amount' => 'setUnitAmount',
        'unit_code' => 'setUnitCode',
        'quantity' => 'setQuantity',
        'discount_amount' => 'setDiscountAmount',
        'tax_type' => 'setTaxType',
        'tax_rate' => 'setTaxRate',
        'tax_amount' => 'setTaxAmount',
        'total_amount' => 'setTotalAmount'
    ];
    
    protected static $getters = [
        'identification_number' => 'getIdentificationNumber',
        'product_identification' => 'getProductIdentification',
        'description' => 'getDescription',
        'unit_amount' => 'getUnitAmount',
        'unit_code' => 'getUnitCode',
        'quantity' => 'getQuantity',
        'discount_amount' => 'getDiscountAmount',
        'tax_type' => 'getTaxType',
        'tax_rate' => 'getTaxRate',
        'tax_amount' => 'getTaxAmount',
        'total_amount' => 'getTotalAmount'
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
        $this->container['identification_number'] = isset($data['identification_number']) ? $data['identification_number'] : null;
        $this->container['product_identification'] = isset($data['product_identification']) ? $data['product_identification'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['unit_amount'] = isset($data['unit_amount']) ? $data['unit_amount'] : null;
        $this->container['unit_code'] = isset($data['unit_code']) ? $data['unit_code'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : null;
        $this->container['tax_type'] = isset($data['tax_type']) ? $data['tax_type'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
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
    
    public function getIdentificationNumber()
    {
        return $this->container['identification_number'];
    }
    
    public function setIdentificationNumber($identification_number)
    {
        $this->container['identification_number'] = $identification_number;
        return $this;
    }
    
    public function getProductIdentification()
    {
        return $this->container['product_identification'];
    }
    
    public function setProductIdentification($product_identification)
    {
        $this->container['product_identification'] = $product_identification;
        return $this;
    }
    
    public function getDescription()
    {
        return $this->container['description'];
    }
    
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }
    
    public function getUnitAmount()
    {
        return $this->container['unit_amount'];
    }
    
    public function setUnitAmount($unit_amount)
    {
        $this->container['unit_amount'] = $unit_amount;
        return $this;
    }
    
    public function getUnitCode()
    {
        return $this->container['unit_code'];
    }
    
    public function setUnitCode($unit_code)
    {
        $this->container['unit_code'] = $unit_code;
        return $this;
    }
    
    public function getQuantity()
    {
        return $this->container['quantity'];
    }
    
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;
        return $this;
    }
    
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }
    
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;
        return $this;
    }
    
    public function getTaxType()
    {
        return $this->container['tax_type'];
    }
    
    public function setTaxType($tax_type)
    {
        $this->container['tax_type'] = $tax_type;
        return $this;
    }
    
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }
    
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;
        return $this;
    }
    
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }
    
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;
        return $this;
    }
    
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }
    
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;
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
