<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseTaxStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseTaxStatus';
    
    protected static $RCCPMTypes = [
        'id' => 'string',
        'type' => 'string',
        'id' => 'string',
        'file' => 'string',
        'rfc' => 'string',
        'cif' => 'string',
        'person' => '\SatClientPhp\Client\Model\ResponseCredentialType',
        'company' => '\SatClientPhp\Client\Model\ResponseCredentialType',
        'email' => 'string',
        'phone' => 'string',
        'address' => '\SatClientPhp\Client\Model\ResponseTaxStatusAddress',
        'economic_activities' => '\SatClientPhp\Client\Model\ResponseTaxStatusEconomicActivity[]',
        'tax_regimes' => '\SatClientPhp\Client\Model\ResponseTaxStatusTaxRegime[]',
        'obligations' => '\SatClientPhp\Client\Model\ResponseTaxStatusObligation[]',
        'started_operations_at' => '\DateTime',
        'status' => 'string',
        'status_updated_at' => '\DateTime',
        'created_at' => 'string',
        'updated_at' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'id' => null,
        'type' => null,
        'id' => null,
        'file' => null,
        'rfc' => null,
        'cif' => null,
        'person' => null,
        'company' => null,
        'email' => null,
        'phone' => null,
        'address' => null,
        'economic_activities' => null,
        'tax_regimes' => null,
        'obligations' => null,
        'started_operations_at' => 'date-time',
        'status' => null,
        'status_updated_at' => 'date-time',
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
        'file' => 'file',
        'rfc' => 'rfc',
        'cif' => 'cif',
        'person' => 'person',
        'company' => 'company',
        'email' => 'email',
        'phone' => 'phone',
        'address' => 'address',
        'economic_activities' => 'economicActivities',
        'tax_regimes' => 'taxRegimes',
        'obligations' => 'obligations',
        'started_operations_at' => 'startedOperationsAt',
        'status' => 'status',
        'status_updated_at' => 'statusUpdatedAt',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];
    
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'id' => 'setId',
        'file' => 'setFile',
        'rfc' => 'setRfc',
        'cif' => 'setCif',
        'person' => 'setPerson',
        'company' => 'setCompany',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'address' => 'setAddress',
        'economic_activities' => 'setEconomicActivities',
        'tax_regimes' => 'setTaxRegimes',
        'obligations' => 'setObligations',
        'started_operations_at' => 'setStartedOperationsAt',
        'status' => 'setStatus',
        'status_updated_at' => 'setStatusUpdatedAt',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];
    
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'id' => 'getId',
        'file' => 'getFile',
        'rfc' => 'getRfc',
        'cif' => 'getCif',
        'person' => 'getPerson',
        'company' => 'getCompany',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'address' => 'getAddress',
        'economic_activities' => 'getEconomicActivities',
        'tax_regimes' => 'getTaxRegimes',
        'obligations' => 'getObligations',
        'started_operations_at' => 'getStartedOperationsAt',
        'status' => 'getStatus',
        'status_updated_at' => 'getStatusUpdatedAt',
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'TaxStatus';
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['rfc'] = isset($data['rfc']) ? $data['rfc'] : null;
        $this->container['cif'] = isset($data['cif']) ? $data['cif'] : null;
        $this->container['person'] = isset($data['person']) ? $data['person'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['economic_activities'] = isset($data['economic_activities']) ? $data['economic_activities'] : null;
        $this->container['tax_regimes'] = isset($data['tax_regimes']) ? $data['tax_regimes'] : null;
        $this->container['obligations'] = isset($data['obligations']) ? $data['obligations'] : null;
        $this->container['started_operations_at'] = isset($data['started_operations_at']) ? $data['started_operations_at'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_updated_at'] = isset($data['status_updated_at']) ? $data['status_updated_at'] : null;
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
        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 10)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 10.";
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
    
    public function getRfc()
    {
        return $this->container['rfc'];
    }
    
    public function setRfc($rfc)
    {
        if (!is_null($rfc) && (mb_strlen($rfc) > 13)) {
            throw new \InvalidArgumentException('invalid length for $rfc when calling ResponseTaxStatus., must be smaller than or equal to 13.');
        }
        if (!is_null($rfc) && (mb_strlen($rfc) < 12)) {
            throw new \InvalidArgumentException('invalid length for $rfc when calling ResponseTaxStatus., must be bigger than or equal to 12.');
        }
        if (!is_null($rfc) && (!preg_match("/^([A-ZÑ&]{3,4}) ?(?:- ?)?(\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])) ?(?:- ?)?([A-Z\\d]{2})([A\\d])$/", $rfc))) {
            throw new \InvalidArgumentException("invalid value for $rfc when calling ResponseTaxStatus., must conform to the pattern /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])) ?(?:- ?)?([A-Z\\d]{2})([A\\d])$/.");
        }
        $this->container['rfc'] = $rfc;
        return $this;
    }
    
    public function getCif()
    {
        return $this->container['cif'];
    }
    
    public function setCif($cif)
    {
        $this->container['cif'] = $cif;
        return $this;
    }
    
    public function getPerson()
    {
        return $this->container['person'];
    }
    
    public function setPerson($person)
    {
        $this->container['person'] = $person;
        return $this;
    }
    
    public function getCompany()
    {
        return $this->container['company'];
    }
    
    public function setCompany($company)
    {
        $this->container['company'] = $company;
        return $this;
    }
    
    public function getEmail()
    {
        return $this->container['email'];
    }
    
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }
    
    public function getPhone()
    {
        return $this->container['phone'];
    }
    
    public function setPhone($phone)
    {
        if (!is_null($phone) && (mb_strlen($phone) > 10)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling ResponseTaxStatus., must be smaller than or equal to 10.');
        }
        $this->container['phone'] = $phone;
        return $this;
    }
    
    public function getAddress()
    {
        return $this->container['address'];
    }
    
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }
    
    public function getEconomicActivities()
    {
        return $this->container['economic_activities'];
    }
    
    public function setEconomicActivities($economic_activities)
    {
        $this->container['economic_activities'] = $economic_activities;
        return $this;
    }
    
    public function getTaxRegimes()
    {
        return $this->container['tax_regimes'];
    }
    
    public function setTaxRegimes($tax_regimes)
    {
        $this->container['tax_regimes'] = $tax_regimes;
        return $this;
    }
    
    public function getObligations()
    {
        return $this->container['obligations'];
    }
    
    public function setObligations($obligations)
    {
        $this->container['obligations'] = $obligations;
        return $this;
    }
    
    public function getStartedOperationsAt()
    {
        return $this->container['started_operations_at'];
    }
    
    public function setStartedOperationsAt($started_operations_at)
    {
        $this->container['started_operations_at'] = $started_operations_at;
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
    
    public function getStatusUpdatedAt()
    {
        return $this->container['status_updated_at'];
    }
    
    public function setStatusUpdatedAt($status_updated_at)
    {
        $this->container['status_updated_at'] = $status_updated_at;
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
