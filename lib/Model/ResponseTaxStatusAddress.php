<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseTaxStatusAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseTaxStatusAddress';
    
    protected static $RCCPMTypes = [
        'street_references' => 'string[]',
        'street_number' => 'string',
        'building_number' => 'string',
        'locality' => 'string',
        'municipality' => 'string',
        'postal_code' => 'string',
        'state' => 'string',
        'street_name' => 'string',
        'street_type' => 'string',
        'neighborhood' => 'string',
        'status_raw' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'street_references' => null,
        'street_number' => null,
        'building_number' => null,
        'locality' => null,
        'municipality' => null,
        'postal_code' => null,
        'state' => null,
        'street_name' => null,
        'street_type' => null,
        'neighborhood' => null,
        'status_raw' => null
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
        'street_references' => 'streetReferences',
        'street_number' => 'streetNumber',
        'building_number' => 'buildingNumber',
        'locality' => 'locality',
        'municipality' => 'municipality',
        'postal_code' => 'postalCode',
        'state' => 'state',
        'street_name' => 'streetName',
        'street_type' => 'streetType',
        'neighborhood' => 'neighborhood',
        'status_raw' => 'statusRaw'
    ];
    
    protected static $setters = [
        'street_references' => 'setStreetReferences',
        'street_number' => 'setStreetNumber',
        'building_number' => 'setBuildingNumber',
        'locality' => 'setLocality',
        'municipality' => 'setMunicipality',
        'postal_code' => 'setPostalCode',
        'state' => 'setState',
        'street_name' => 'setStreetName',
        'street_type' => 'setStreetType',
        'neighborhood' => 'setNeighborhood',
        'status_raw' => 'setStatusRaw'
    ];
    
    protected static $getters = [
        'street_references' => 'getStreetReferences',
        'street_number' => 'getStreetNumber',
        'building_number' => 'getBuildingNumber',
        'locality' => 'getLocality',
        'municipality' => 'getMunicipality',
        'postal_code' => 'getPostalCode',
        'state' => 'getState',
        'street_name' => 'getStreetName',
        'street_type' => 'getStreetType',
        'neighborhood' => 'getNeighborhood',
        'status_raw' => 'getStatusRaw'
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
        $this->container['street_references'] = isset($data['street_references']) ? $data['street_references'] : null;
        $this->container['street_number'] = isset($data['street_number']) ? $data['street_number'] : null;
        $this->container['building_number'] = isset($data['building_number']) ? $data['building_number'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['municipality'] = isset($data['municipality']) ? $data['municipality'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['street_name'] = isset($data['street_name']) ? $data['street_name'] : null;
        $this->container['street_type'] = isset($data['street_type']) ? $data['street_type'] : null;
        $this->container['neighborhood'] = isset($data['neighborhood']) ? $data['neighborhood'] : null;
        $this->container['status_raw'] = isset($data['status_raw']) ? $data['status_raw'] : null;
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
    
    public function getStreetReferences()
    {
        return $this->container['street_references'];
    }
    
    public function setStreetReferences($street_references)
    {
        $this->container['street_references'] = $street_references;
        return $this;
    }
    
    public function getStreetNumber()
    {
        return $this->container['street_number'];
    }
    
    public function setStreetNumber($street_number)
    {
        $this->container['street_number'] = $street_number;
        return $this;
    }
    
    public function getBuildingNumber()
    {
        return $this->container['building_number'];
    }
    
    public function setBuildingNumber($building_number)
    {
        $this->container['building_number'] = $building_number;
        return $this;
    }
    
    public function getLocality()
    {
        return $this->container['locality'];
    }
    
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;
        return $this;
    }
    
    public function getMunicipality()
    {
        return $this->container['municipality'];
    }
    
    public function setMunicipality($municipality)
    {
        $this->container['municipality'] = $municipality;
        return $this;
    }
    
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }
    
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;
        return $this;
    }
    
    public function getState()
    {
        return $this->container['state'];
    }
    
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }
    
    public function getStreetName()
    {
        return $this->container['street_name'];
    }
    
    public function setStreetName($street_name)
    {
        $this->container['street_name'] = $street_name;
        return $this;
    }
    
    public function getStreetType()
    {
        return $this->container['street_type'];
    }
    
    public function setStreetType($street_type)
    {
        $this->container['street_type'] = $street_type;
        return $this;
    }
    
    public function getNeighborhood()
    {
        return $this->container['neighborhood'];
    }
    
    public function setNeighborhood($neighborhood)
    {
        $this->container['neighborhood'] = $neighborhood;
        return $this;
    }
    
    public function getStatusRaw()
    {
        return $this->container['status_raw'];
    }
    
    public function setStatusRaw($status_raw)
    {
        $this->container['status_raw'] = $status_raw;
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
