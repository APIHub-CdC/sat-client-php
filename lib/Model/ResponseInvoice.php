<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseInvoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseInvoice';
    
    protected static $RCCPMTypes = [
        'id' => 'string',
        'type' => 'string',
        'id' => 'string',
        'uuid' => 'string',
        'version' => 'double',
        'reference' => 'string',
        'internal_identifier' => 'string',
        'type' => '\SatClientPhp\Client\Model\ResponseCredentialType',
        'usage' => 'string',
        'payment_type' => '\SatClientPhp\Client\Model\ResponseCredentialType',
        'payment_method' => 'string',
        'place_of_issue' => 'string',
        'issuer' => '\SatClientPhp\Client\Model\ResponseCredentialType',
        'is_issuer' => 'bool',
        'receiver' => '\SatClientPhp\Client\Model\ResponseInvoiceReceiver',
        'is_receiver' => 'bool',
        'currency' => 'string',
        'discount' => 'double',
        'tax' => 'double',
        'subtotal' => 'double',
        'total' => 'double',
        'exchange_rate' => 'double',
        'paid_amount' => 'double',
        'due_amount' => 'double',
        'last_payment_date' => '\DateTime',
        'fully_paid_at' => '\DateTime',
        'payment_terms_raw' => 'string',
        'status' => '\SatClientPhp\Client\Model\ResponseCredentialType',
        'pac' => 'string',
        'issued_at' => '\DateTime',
        'certified_at' => '\DateTime',
        'cancellation_status' => '\SatClientPhp\Client\Model\ResponseCredentialType',
        'cancellation_process_status' => '\SatClientPhp\Client\Model\ResponseCredentialType',
        'canceled_at' => '\DateTime',
        'items' => '\SatClientPhp\Client\Model\ResponseInvoiceItem[]',
        'relations' => '\SatClientPhp\Client\Model\ResponseInvoiceRelation[]',
        'applied_credits' => '\SatClientPhp\Client\Model\ResponseInvoiceCreditNote[]',
        'issued_credits' => '\SatClientPhp\Client\Model\ResponseInvoiceCreditNote[]',
        'xml' => 'bool',
        'pdf' => 'bool',
        'created_at' => 'string',
        'updated_at' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'id' => null,
        'type' => null,
        'id' => 'uuid',
        'uuid' => 'uuid',
        'version' => 'double',
        'reference' => null,
        'internal_identifier' => null,
        'type' => null,
        'usage' => null,
        'payment_type' => null,
        'payment_method' => null,
        'place_of_issue' => null,
        'issuer' => null,
        'is_issuer' => null,
        'receiver' => null,
        'is_receiver' => null,
        'currency' => null,
        'discount' => 'double',
        'tax' => 'double',
        'subtotal' => 'double',
        'total' => 'double',
        'exchange_rate' => 'double',
        'paid_amount' => 'double',
        'due_amount' => 'double',
        'last_payment_date' => 'date-time',
        'fully_paid_at' => 'date-time',
        'payment_terms_raw' => null,
        'status' => null,
        'pac' => null,
        'issued_at' => 'date-time',
        'certified_at' => 'date-time',
        'cancellation_status' => null,
        'cancellation_process_status' => null,
        'canceled_at' => 'date-time',
        'items' => null,
        'relations' => null,
        'applied_credits' => null,
        'issued_credits' => null,
        'xml' => null,
        'pdf' => null,
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
        'uuid' => 'uuid',
        'version' => 'version',
        'reference' => 'reference',
        'internal_identifier' => 'internalIdentifier',
        'type' => 'type',
        'usage' => 'usage',
        'payment_type' => 'paymentType',
        'payment_method' => 'paymentMethod',
        'place_of_issue' => 'placeOfIssue',
        'issuer' => 'issuer',
        'is_issuer' => 'isIssuer',
        'receiver' => 'receiver',
        'is_receiver' => 'isReceiver',
        'currency' => 'currency',
        'discount' => 'discount',
        'tax' => 'tax',
        'subtotal' => 'subtotal',
        'total' => 'total',
        'exchange_rate' => 'exchangeRate',
        'paid_amount' => 'paidAmount',
        'due_amount' => 'dueAmount',
        'last_payment_date' => 'lastPaymentDate',
        'fully_paid_at' => 'fullyPaidAt',
        'payment_terms_raw' => 'paymentTermsRaw',
        'status' => 'status',
        'pac' => 'pac',
        'issued_at' => 'issuedAt',
        'certified_at' => 'certifiedAt',
        'cancellation_status' => 'cancellationStatus',
        'cancellation_process_status' => 'cancellationProcessStatus',
        'canceled_at' => 'canceledAt',
        'items' => 'items',
        'relations' => 'relations',
        'applied_credits' => 'appliedCredits',
        'issued_credits' => 'issuedCredits',
        'xml' => 'xml',
        'pdf' => 'pdf',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];
    
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'id' => 'setId',
        'uuid' => 'setUuid',
        'version' => 'setVersion',
        'reference' => 'setReference',
        'internal_identifier' => 'setInternalIdentifier',
        'type' => 'setType',
        'usage' => 'setUsage',
        'payment_type' => 'setPaymentType',
        'payment_method' => 'setPaymentMethod',
        'place_of_issue' => 'setPlaceOfIssue',
        'issuer' => 'setIssuer',
        'is_issuer' => 'setIsIssuer',
        'receiver' => 'setReceiver',
        'is_receiver' => 'setIsReceiver',
        'currency' => 'setCurrency',
        'discount' => 'setDiscount',
        'tax' => 'setTax',
        'subtotal' => 'setSubtotal',
        'total' => 'setTotal',
        'exchange_rate' => 'setExchangeRate',
        'paid_amount' => 'setPaidAmount',
        'due_amount' => 'setDueAmount',
        'last_payment_date' => 'setLastPaymentDate',
        'fully_paid_at' => 'setFullyPaidAt',
        'payment_terms_raw' => 'setPaymentTermsRaw',
        'status' => 'setStatus',
        'pac' => 'setPac',
        'issued_at' => 'setIssuedAt',
        'certified_at' => 'setCertifiedAt',
        'cancellation_status' => 'setCancellationStatus',
        'cancellation_process_status' => 'setCancellationProcessStatus',
        'canceled_at' => 'setCanceledAt',
        'items' => 'setItems',
        'relations' => 'setRelations',
        'applied_credits' => 'setAppliedCredits',
        'issued_credits' => 'setIssuedCredits',
        'xml' => 'setXml',
        'pdf' => 'setPdf',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];
    
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'id' => 'getId',
        'uuid' => 'getUuid',
        'version' => 'getVersion',
        'reference' => 'getReference',
        'internal_identifier' => 'getInternalIdentifier',
        'type' => 'getType',
        'usage' => 'getUsage',
        'payment_type' => 'getPaymentType',
        'payment_method' => 'getPaymentMethod',
        'place_of_issue' => 'getPlaceOfIssue',
        'issuer' => 'getIssuer',
        'is_issuer' => 'getIsIssuer',
        'receiver' => 'getReceiver',
        'is_receiver' => 'getIsReceiver',
        'currency' => 'getCurrency',
        'discount' => 'getDiscount',
        'tax' => 'getTax',
        'subtotal' => 'getSubtotal',
        'total' => 'getTotal',
        'exchange_rate' => 'getExchangeRate',
        'paid_amount' => 'getPaidAmount',
        'due_amount' => 'getDueAmount',
        'last_payment_date' => 'getLastPaymentDate',
        'fully_paid_at' => 'getFullyPaidAt',
        'payment_terms_raw' => 'getPaymentTermsRaw',
        'status' => 'getStatus',
        'pac' => 'getPac',
        'issued_at' => 'getIssuedAt',
        'certified_at' => 'getCertifiedAt',
        'cancellation_status' => 'getCancellationStatus',
        'cancellation_process_status' => 'getCancellationProcessStatus',
        'canceled_at' => 'getCanceledAt',
        'items' => 'getItems',
        'relations' => 'getRelations',
        'applied_credits' => 'getAppliedCredits',
        'issued_credits' => 'getIssuedCredits',
        'xml' => 'getXml',
        'pdf' => 'getPdf',
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'Invoice';
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['internal_identifier'] = isset($data['internal_identifier']) ? $data['internal_identifier'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['place_of_issue'] = isset($data['place_of_issue']) ? $data['place_of_issue'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['is_issuer'] = isset($data['is_issuer']) ? $data['is_issuer'] : null;
        $this->container['receiver'] = isset($data['receiver']) ? $data['receiver'] : null;
        $this->container['is_receiver'] = isset($data['is_receiver']) ? $data['is_receiver'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['subtotal'] = isset($data['subtotal']) ? $data['subtotal'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['exchange_rate'] = isset($data['exchange_rate']) ? $data['exchange_rate'] : null;
        $this->container['paid_amount'] = isset($data['paid_amount']) ? $data['paid_amount'] : null;
        $this->container['due_amount'] = isset($data['due_amount']) ? $data['due_amount'] : null;
        $this->container['last_payment_date'] = isset($data['last_payment_date']) ? $data['last_payment_date'] : null;
        $this->container['fully_paid_at'] = isset($data['fully_paid_at']) ? $data['fully_paid_at'] : null;
        $this->container['payment_terms_raw'] = isset($data['payment_terms_raw']) ? $data['payment_terms_raw'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['pac'] = isset($data['pac']) ? $data['pac'] : null;
        $this->container['issued_at'] = isset($data['issued_at']) ? $data['issued_at'] : null;
        $this->container['certified_at'] = isset($data['certified_at']) ? $data['certified_at'] : null;
        $this->container['cancellation_status'] = isset($data['cancellation_status']) ? $data['cancellation_status'] : null;
        $this->container['cancellation_process_status'] = isset($data['cancellation_process_status']) ? $data['cancellation_process_status'] : null;
        $this->container['canceled_at'] = isset($data['canceled_at']) ? $data['canceled_at'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['relations'] = isset($data['relations']) ? $data['relations'] : null;
        $this->container['applied_credits'] = isset($data['applied_credits']) ? $data['applied_credits'] : null;
        $this->container['issued_credits'] = isset($data['issued_credits']) ? $data['issued_credits'] : null;
        $this->container['xml'] = isset($data['xml']) ? $data['xml'] : null;
        $this->container['pdf'] = isset($data['pdf']) ? $data['pdf'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 25)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 25.";
        }
        if (!is_null($this->container['internal_identifier']) && (mb_strlen($this->container['internal_identifier']) > 40)) {
            $invalidProperties[] = "invalid value for 'internal_identifier', the character length must be smaller than or equal to 40.";
        }
        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }
        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) < 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 3.";
        }
        if (!is_null($this->container['pac']) && (mb_strlen($this->container['pac']) > 12)) {
            $invalidProperties[] = "invalid value for 'pac', the character length must be smaller than or equal to 12.";
        }
        if (!is_null($this->container['pac']) && (mb_strlen($this->container['pac']) < 12)) {
            $invalidProperties[] = "invalid value for 'pac', the character length must be bigger than or equal to 12.";
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
    
    public function getUuid()
    {
        return $this->container['uuid'];
    }
    
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }
    
    public function getVersion()
    {
        return $this->container['version'];
    }
    
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }
    
    public function getReference()
    {
        return $this->container['reference'];
    }
    
    public function setReference($reference)
    {
        if (!is_null($reference) && (mb_strlen($reference) > 25)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling ResponseInvoice., must be smaller than or equal to 25.');
        }
        $this->container['reference'] = $reference;
        return $this;
    }
    
    public function getInternalIdentifier()
    {
        return $this->container['internal_identifier'];
    }
    
    public function setInternalIdentifier($internal_identifier)
    {
        if (!is_null($internal_identifier) && (mb_strlen($internal_identifier) > 40)) {
            throw new \InvalidArgumentException('invalid length for $internal_identifier when calling ResponseInvoice., must be smaller than or equal to 40.');
        }
        $this->container['internal_identifier'] = $internal_identifier;
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
    
    public function getUsage()
    {
        return $this->container['usage'];
    }
    
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;
        return $this;
    }
    
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }
    
    public function setPaymentType($payment_type)
    {
        $this->container['payment_type'] = $payment_type;
        return $this;
    }
    
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }
    
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;
        return $this;
    }
    
    public function getPlaceOfIssue()
    {
        return $this->container['place_of_issue'];
    }
    
    public function setPlaceOfIssue($place_of_issue)
    {
        $this->container['place_of_issue'] = $place_of_issue;
        return $this;
    }
    
    public function getIssuer()
    {
        return $this->container['issuer'];
    }
    
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;
        return $this;
    }
    
    public function getIsIssuer()
    {
        return $this->container['is_issuer'];
    }
    
    public function setIsIssuer($is_issuer)
    {
        $this->container['is_issuer'] = $is_issuer;
        return $this;
    }
    
    public function getReceiver()
    {
        return $this->container['receiver'];
    }
    
    public function setReceiver($receiver)
    {
        $this->container['receiver'] = $receiver;
        return $this;
    }
    
    public function getIsReceiver()
    {
        return $this->container['is_receiver'];
    }
    
    public function setIsReceiver($is_receiver)
    {
        $this->container['is_receiver'] = $is_receiver;
        return $this;
    }
    
    public function getCurrency()
    {
        return $this->container['currency'];
    }
    
    public function setCurrency($currency)
    {
        if (!is_null($currency) && (mb_strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling ResponseInvoice., must be smaller than or equal to 3.');
        }
        if (!is_null($currency) && (mb_strlen($currency) < 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling ResponseInvoice., must be bigger than or equal to 3.');
        }
        $this->container['currency'] = $currency;
        return $this;
    }
    
    public function getDiscount()
    {
        return $this->container['discount'];
    }
    
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;
        return $this;
    }
    
    public function getTax()
    {
        return $this->container['tax'];
    }
    
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;
        return $this;
    }
    
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }
    
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;
        return $this;
    }
    
    public function getTotal()
    {
        return $this->container['total'];
    }
    
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }
    
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }
    
    public function setExchangeRate($exchange_rate)
    {
        $this->container['exchange_rate'] = $exchange_rate;
        return $this;
    }
    
    public function getPaidAmount()
    {
        return $this->container['paid_amount'];
    }
    
    public function setPaidAmount($paid_amount)
    {
        $this->container['paid_amount'] = $paid_amount;
        return $this;
    }
    
    public function getDueAmount()
    {
        return $this->container['due_amount'];
    }
    
    public function setDueAmount($due_amount)
    {
        $this->container['due_amount'] = $due_amount;
        return $this;
    }
    
    public function getLastPaymentDate()
    {
        return $this->container['last_payment_date'];
    }
    
    public function setLastPaymentDate($last_payment_date)
    {
        $this->container['last_payment_date'] = $last_payment_date;
        return $this;
    }
    
    public function getFullyPaidAt()
    {
        return $this->container['fully_paid_at'];
    }
    
    public function setFullyPaidAt($fully_paid_at)
    {
        $this->container['fully_paid_at'] = $fully_paid_at;
        return $this;
    }
    
    public function getPaymentTermsRaw()
    {
        return $this->container['payment_terms_raw'];
    }
    
    public function setPaymentTermsRaw($payment_terms_raw)
    {
        $this->container['payment_terms_raw'] = $payment_terms_raw;
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
    
    public function getPac()
    {
        return $this->container['pac'];
    }
    
    public function setPac($pac)
    {
        if (!is_null($pac) && (mb_strlen($pac) > 12)) {
            throw new \InvalidArgumentException('invalid length for $pac when calling ResponseInvoice., must be smaller than or equal to 12.');
        }
        if (!is_null($pac) && (mb_strlen($pac) < 12)) {
            throw new \InvalidArgumentException('invalid length for $pac when calling ResponseInvoice., must be bigger than or equal to 12.');
        }
        $this->container['pac'] = $pac;
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
    
    public function getCertifiedAt()
    {
        return $this->container['certified_at'];
    }
    
    public function setCertifiedAt($certified_at)
    {
        $this->container['certified_at'] = $certified_at;
        return $this;
    }
    
    public function getCancellationStatus()
    {
        return $this->container['cancellation_status'];
    }
    
    public function setCancellationStatus($cancellation_status)
    {
        $this->container['cancellation_status'] = $cancellation_status;
        return $this;
    }
    
    public function getCancellationProcessStatus()
    {
        return $this->container['cancellation_process_status'];
    }
    
    public function setCancellationProcessStatus($cancellation_process_status)
    {
        $this->container['cancellation_process_status'] = $cancellation_process_status;
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
    
    public function getItems()
    {
        return $this->container['items'];
    }
    
    public function setItems($items)
    {
        $this->container['items'] = $items;
        return $this;
    }
    
    public function getRelations()
    {
        return $this->container['relations'];
    }
    
    public function setRelations($relations)
    {
        $this->container['relations'] = $relations;
        return $this;
    }
    
    public function getAppliedCredits()
    {
        return $this->container['applied_credits'];
    }
    
    public function setAppliedCredits($applied_credits)
    {
        $this->container['applied_credits'] = $applied_credits;
        return $this;
    }
    
    public function getIssuedCredits()
    {
        return $this->container['issued_credits'];
    }
    
    public function setIssuedCredits($issued_credits)
    {
        $this->container['issued_credits'] = $issued_credits;
        return $this;
    }
    
    public function getXml()
    {
        return $this->container['xml'];
    }
    
    public function setXml($xml)
    {
        $this->container['xml'] = $xml;
        return $this;
    }
    
    public function getPdf()
    {
        return $this->container['pdf'];
    }
    
    public function setPdf($pdf)
    {
        $this->container['pdf'] = $pdf;
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
