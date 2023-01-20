<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseTaxReturn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseTaxReturn';
    
    protected static $RCCPMTypes = [
        'id' => 'string',
        'type' => 'string',
        'id' => 'string',
        'taxpayer' => '\SatClientPhp\Client\Model\ResponseTaxpayer',
        'operation_number' => 'double',
        'interval_unit' => '\SatClientPhp\Client\Model\ResponseCredentialType',
        'period' => 'string',
        'fiscal_year' => 'string',
        'type' => '\SatClientPhp\Client\Model\ResponseCredentialType',
        'complementary' => '\SatClientPhp\Client\Model\ResponseCredentialType',
        'presented_at' => '\DateTime',
        'capture_line' => 'string',
        'files' => '\SatClientPhp\Client\Model\ResponseFile[]',
        'payment' => '\SatClientPhp\Client\Model\ResponseCredentialType',
        'created_at' => 'string',
        'updated_at' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'id' => null,
        'type' => null,
        'id' => 'uuid',
        'taxpayer' => null,
        'operation_number' => 'double',
        'interval_unit' => null,
        'period' => null,
        'fiscal_year' => null,
        'type' => null,
        'complementary' => null,
        'presented_at' => 'date-time',
        'capture_line' => null,
        'files' => null,
        'payment' => null,
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
        'taxpayer' => 'taxpayer',
        'operation_number' => 'operationNumber',
        'interval_unit' => 'intervalUnit',
        'period' => 'period',
        'fiscal_year' => 'fiscalYear',
        'type' => 'type',
        'complementary' => 'complementary',
        'presented_at' => 'presentedAt',
        'capture_line' => 'captureLine',
        'files' => 'files',
        'payment' => 'payment',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];
    
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'id' => 'setId',
        'taxpayer' => 'setTaxpayer',
        'operation_number' => 'setOperationNumber',
        'interval_unit' => 'setIntervalUnit',
        'period' => 'setPeriod',
        'fiscal_year' => 'setFiscalYear',
        'type' => 'setType',
        'complementary' => 'setComplementary',
        'presented_at' => 'setPresentedAt',
        'capture_line' => 'setCaptureLine',
        'files' => 'setFiles',
        'payment' => 'setPayment',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];
    
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'id' => 'getId',
        'taxpayer' => 'getTaxpayer',
        'operation_number' => 'getOperationNumber',
        'interval_unit' => 'getIntervalUnit',
        'period' => 'getPeriod',
        'fiscal_year' => 'getFiscalYear',
        'type' => 'getType',
        'complementary' => 'getComplementary',
        'presented_at' => 'getPresentedAt',
        'capture_line' => 'getCaptureLine',
        'files' => 'getFiles',
        'payment' => 'getPayment',
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'TaxReturn';
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['taxpayer'] = isset($data['taxpayer']) ? $data['taxpayer'] : null;
        $this->container['operation_number'] = isset($data['operation_number']) ? $data['operation_number'] : null;
        $this->container['interval_unit'] = isset($data['interval_unit']) ? $data['interval_unit'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['fiscal_year'] = isset($data['fiscal_year']) ? $data['fiscal_year'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['complementary'] = isset($data['complementary']) ? $data['complementary'] : null;
        $this->container['presented_at'] = isset($data['presented_at']) ? $data['presented_at'] : null;
        $this->container['capture_line'] = isset($data['capture_line']) ? $data['capture_line'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
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
    
    public function getTaxpayer()
    {
        return $this->container['taxpayer'];
    }
    
    public function setTaxpayer($taxpayer)
    {
        $this->container['taxpayer'] = $taxpayer;
        return $this;
    }
    
    public function getOperationNumber()
    {
        return $this->container['operation_number'];
    }
    
    public function setOperationNumber($operation_number)
    {
        $this->container['operation_number'] = $operation_number;
        return $this;
    }
    
    public function getIntervalUnit()
    {
        return $this->container['interval_unit'];
    }
    
    public function setIntervalUnit($interval_unit)
    {
        $this->container['interval_unit'] = $interval_unit;
        return $this;
    }
    
    public function getPeriod()
    {
        return $this->container['period'];
    }
    
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }
    
    public function getFiscalYear()
    {
        return $this->container['fiscal_year'];
    }
    
    public function setFiscalYear($fiscal_year)
    {
        $this->container['fiscal_year'] = $fiscal_year;
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
    
    public function getComplementary()
    {
        return $this->container['complementary'];
    }
    
    public function setComplementary($complementary)
    {
        $this->container['complementary'] = $complementary;
        return $this;
    }
    
    public function getPresentedAt()
    {
        return $this->container['presented_at'];
    }
    
    public function setPresentedAt($presented_at)
    {
        $this->container['presented_at'] = $presented_at;
        return $this;
    }
    
    public function getCaptureLine()
    {
        return $this->container['capture_line'];
    }
    
    public function setCaptureLine($capture_line)
    {
        $this->container['capture_line'] = $capture_line;
        return $this;
    }
    
    public function getFiles()
    {
        return $this->container['files'];
    }
    
    public function setFiles($files)
    {
        $this->container['files'] = $files;
        return $this;
    }
    
    public function getPayment()
    {
        return $this->container['payment'];
    }
    
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;
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
