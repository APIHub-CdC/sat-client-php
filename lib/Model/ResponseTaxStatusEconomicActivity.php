<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseTaxStatusEconomicActivity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseTaxStatusEconomicActivity';
    
    protected static $RCCPMTypes = [
        'name' => 'string',
        'order' => 'string',
        'percentage' => 'string',
        'end_date' => '\DateTime',
        'start_date' => '\DateTime'
    ];
    
    protected static $RCCPMFormats = [
        'name' => null,
        'order' => null,
        'percentage' => null,
        'end_date' => 'date',
        'start_date' => 'date'
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
        'name' => 'name',
        'order' => 'order',
        'percentage' => 'percentage',
        'end_date' => 'endDate',
        'start_date' => 'startDate'
    ];
    
    protected static $setters = [
        'name' => 'setName',
        'order' => 'setOrder',
        'percentage' => 'setPercentage',
        'end_date' => 'setEndDate',
        'start_date' => 'setStartDate'
    ];
    
    protected static $getters = [
        'name' => 'getName',
        'order' => 'getOrder',
        'percentage' => 'getPercentage',
        'end_date' => 'getEndDate',
        'start_date' => 'getStartDate'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['percentage'] = isset($data['percentage']) ? $data['percentage'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
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
    
    public function getName()
    {
        return $this->container['name'];
    }
    
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }
    
    public function getOrder()
    {
        return $this->container['order'];
    }
    
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }
    
    public function getPercentage()
    {
        return $this->container['percentage'];
    }
    
    public function setPercentage($percentage)
    {
        $this->container['percentage'] = $percentage;
        return $this;
    }
    
    public function getEndDate()
    {
        return $this->container['end_date'];
    }
    
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;
        return $this;
    }
    
    public function getStartDate()
    {
        return $this->container['start_date'];
    }
    
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;
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
