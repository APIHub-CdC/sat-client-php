<?php

namespace SatClientPhp\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use SatClientPhp\Client\ApiException;
use SatClientPhp\Client\Configuration;
use SatClientPhp\Client\HeaderSelector;
use SatClientPhp\Client\ObjectSerializer;

class InvoicesApi
{
    
    protected $client;
    
    protected $config;
    
    protected $headerSelector;
    
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }
    
    public function getConfig()
    {
        return $this->config;
    }
    
    public function listTaxpayerInvoice($x_api_key, $x_request_id, $username, $password, $id, $uuid = null, $version = null, $type = null, $usage = null, $payment_type = null, $payment_method = null, $issuer_rfc = null, $issuer_name = null, $issuer_tax_regime = null, $issuer_blacklist_status = null, $is_issuer = null, $receiver_rfc = null, $receiver_name = null, $receiver_blacklist_status = null, $is_receiver = null, $currency = null, $status = null, $pac = null, $cancellation_status = null, $cancellation_status_process = null, $issued_at_before = null, $issued_at_strictly_before = null, $issued_at_after = null, $issued_at_strictly_after = null, $canceled_at_before = null, $canceled_at_strictly_before = null, $canceled_at_after = null, $canceled_at_strictly_after = null, $created_at_before = null, $created_at_strictly_before = null, $created_at_after = null, $created_at_strictly_after = null, $updated_at_before = null, $updated_at_strictly_before = null, $updated_at_after = null, $updated_at_strictly_after = null, $certified_at_before = null, $certified_at_strictly_before = null, $certified_at_after = null, $certified_at_strictly_after = null, $last_payment_date_before = null, $last_payment_date_strictly_before = null, $last_payment_date_after = null, $last_payment_date_strictly_after = null, $fully_paid_at_before = null, $fully_paid_at_strictly_before = null, $fully_paid_at_after = null, $fully_paid_at_strictly_after = null, $tax_between = null, $tax_gt = null, $tax_gte = null, $tax_lt = null, $tax_lte = null, $discount_between = null, $discount_gt = null, $discount_gte = null, $discount_lt = null, $discount_lte = null, $subtotal_between = null, $subtotal_gt = null, $subtotal_gte = null, $subtotal_lt = null, $subtotal_lte = null, $total_between = null, $total_gt = null, $total_gte = null, $total_lt = null, $total_lte = null, $paid_amount_between = null, $paid_amount_gt = null, $paid_amount_gte = null, $paid_amount_lt = null, $paid_amount_lte = null, $due_amount_between = null, $due_amount_gt = null, $due_amount_gte = null, $due_amount_lt = null, $due_amount_lte = null, $has_xml = null, $has_pdf = null, $order_issued_at = null, $order_canceled_at = null, $order_certified_at = null, $order_amount = null, $page = '1', $items_per_page = '30')
    {
        list($response) = $this->listTaxpayerInvoiceWithHttpInfo($x_api_key, $x_request_id, $username, $password, $id, $uuid, $version, $type, $usage, $payment_type, $payment_method, $issuer_rfc, $issuer_name, $issuer_tax_regime, $issuer_blacklist_status, $is_issuer, $receiver_rfc, $receiver_name, $receiver_blacklist_status, $is_receiver, $currency, $status, $pac, $cancellation_status, $cancellation_status_process, $issued_at_before, $issued_at_strictly_before, $issued_at_after, $issued_at_strictly_after, $canceled_at_before, $canceled_at_strictly_before, $canceled_at_after, $canceled_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $certified_at_before, $certified_at_strictly_before, $certified_at_after, $certified_at_strictly_after, $last_payment_date_before, $last_payment_date_strictly_before, $last_payment_date_after, $last_payment_date_strictly_after, $fully_paid_at_before, $fully_paid_at_strictly_before, $fully_paid_at_after, $fully_paid_at_strictly_after, $tax_between, $tax_gt, $tax_gte, $tax_lt, $tax_lte, $discount_between, $discount_gt, $discount_gte, $discount_lt, $discount_lte, $subtotal_between, $subtotal_gt, $subtotal_gte, $subtotal_lt, $subtotal_lte, $total_between, $total_gt, $total_gte, $total_lt, $total_lte, $paid_amount_between, $paid_amount_gt, $paid_amount_gte, $paid_amount_lt, $paid_amount_lte, $due_amount_between, $due_amount_gt, $due_amount_gte, $due_amount_lt, $due_amount_lte, $has_xml, $has_pdf, $order_issued_at, $order_canceled_at, $order_certified_at, $order_amount, $page, $items_per_page);
        return $response;
    }
    
    public function listTaxpayerInvoiceWithHttpInfo($x_api_key, $x_request_id, $username, $password, $id, $uuid = null, $version = null, $type = null, $usage = null, $payment_type = null, $payment_method = null, $issuer_rfc = null, $issuer_name = null, $issuer_tax_regime = null, $issuer_blacklist_status = null, $is_issuer = null, $receiver_rfc = null, $receiver_name = null, $receiver_blacklist_status = null, $is_receiver = null, $currency = null, $status = null, $pac = null, $cancellation_status = null, $cancellation_status_process = null, $issued_at_before = null, $issued_at_strictly_before = null, $issued_at_after = null, $issued_at_strictly_after = null, $canceled_at_before = null, $canceled_at_strictly_before = null, $canceled_at_after = null, $canceled_at_strictly_after = null, $created_at_before = null, $created_at_strictly_before = null, $created_at_after = null, $created_at_strictly_after = null, $updated_at_before = null, $updated_at_strictly_before = null, $updated_at_after = null, $updated_at_strictly_after = null, $certified_at_before = null, $certified_at_strictly_before = null, $certified_at_after = null, $certified_at_strictly_after = null, $last_payment_date_before = null, $last_payment_date_strictly_before = null, $last_payment_date_after = null, $last_payment_date_strictly_after = null, $fully_paid_at_before = null, $fully_paid_at_strictly_before = null, $fully_paid_at_after = null, $fully_paid_at_strictly_after = null, $tax_between = null, $tax_gt = null, $tax_gte = null, $tax_lt = null, $tax_lte = null, $discount_between = null, $discount_gt = null, $discount_gte = null, $discount_lt = null, $discount_lte = null, $subtotal_between = null, $subtotal_gt = null, $subtotal_gte = null, $subtotal_lt = null, $subtotal_lte = null, $total_between = null, $total_gt = null, $total_gte = null, $total_lt = null, $total_lte = null, $paid_amount_between = null, $paid_amount_gt = null, $paid_amount_gte = null, $paid_amount_lt = null, $paid_amount_lte = null, $due_amount_between = null, $due_amount_gt = null, $due_amount_gte = null, $due_amount_lt = null, $due_amount_lte = null, $has_xml = null, $has_pdf = null, $order_issued_at = null, $order_canceled_at = null, $order_certified_at = null, $order_amount = null, $page = '1', $items_per_page = '30')
    {
        $returnType = '\SatClientPhp\Client\Model\ResponseTaxPayerInvoice';
        $request = $this->listTaxpayerInvoiceRequest($x_api_key, $x_request_id, $username, $password, $id, $uuid, $version, $type, $usage, $payment_type, $payment_method, $issuer_rfc, $issuer_name, $issuer_tax_regime, $issuer_blacklist_status, $is_issuer, $receiver_rfc, $receiver_name, $receiver_blacklist_status, $is_receiver, $currency, $status, $pac, $cancellation_status, $cancellation_status_process, $issued_at_before, $issued_at_strictly_before, $issued_at_after, $issued_at_strictly_after, $canceled_at_before, $canceled_at_strictly_before, $canceled_at_after, $canceled_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $certified_at_before, $certified_at_strictly_before, $certified_at_after, $certified_at_strictly_after, $last_payment_date_before, $last_payment_date_strictly_before, $last_payment_date_after, $last_payment_date_strictly_after, $fully_paid_at_before, $fully_paid_at_strictly_before, $fully_paid_at_after, $fully_paid_at_strictly_after, $tax_between, $tax_gt, $tax_gte, $tax_lt, $tax_lte, $discount_between, $discount_gt, $discount_gte, $discount_lt, $discount_lte, $subtotal_between, $subtotal_gt, $subtotal_gte, $subtotal_lt, $subtotal_lte, $total_between, $total_gt, $total_gte, $total_lt, $total_lte, $paid_amount_between, $paid_amount_gt, $paid_amount_gte, $paid_amount_lt, $paid_amount_lte, $due_amount_between, $due_amount_gt, $due_amount_gte, $due_amount_lt, $due_amount_lte, $has_xml, $has_pdf, $order_issued_at, $order_canceled_at, $order_certified_at, $order_amount, $page, $items_per_page);
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody;
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SatClientPhp\Client\Model\ResponseTaxPayerInvoice',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SatClientPhp\Client\Model\ResponseUnauthorized',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    
    public function listTaxpayerInvoiceAsync($x_api_key, $x_request_id, $username, $password, $id, $uuid = null, $version = null, $type = null, $usage = null, $payment_type = null, $payment_method = null, $issuer_rfc = null, $issuer_name = null, $issuer_tax_regime = null, $issuer_blacklist_status = null, $is_issuer = null, $receiver_rfc = null, $receiver_name = null, $receiver_blacklist_status = null, $is_receiver = null, $currency = null, $status = null, $pac = null, $cancellation_status = null, $cancellation_status_process = null, $issued_at_before = null, $issued_at_strictly_before = null, $issued_at_after = null, $issued_at_strictly_after = null, $canceled_at_before = null, $canceled_at_strictly_before = null, $canceled_at_after = null, $canceled_at_strictly_after = null, $created_at_before = null, $created_at_strictly_before = null, $created_at_after = null, $created_at_strictly_after = null, $updated_at_before = null, $updated_at_strictly_before = null, $updated_at_after = null, $updated_at_strictly_after = null, $certified_at_before = null, $certified_at_strictly_before = null, $certified_at_after = null, $certified_at_strictly_after = null, $last_payment_date_before = null, $last_payment_date_strictly_before = null, $last_payment_date_after = null, $last_payment_date_strictly_after = null, $fully_paid_at_before = null, $fully_paid_at_strictly_before = null, $fully_paid_at_after = null, $fully_paid_at_strictly_after = null, $tax_between = null, $tax_gt = null, $tax_gte = null, $tax_lt = null, $tax_lte = null, $discount_between = null, $discount_gt = null, $discount_gte = null, $discount_lt = null, $discount_lte = null, $subtotal_between = null, $subtotal_gt = null, $subtotal_gte = null, $subtotal_lt = null, $subtotal_lte = null, $total_between = null, $total_gt = null, $total_gte = null, $total_lt = null, $total_lte = null, $paid_amount_between = null, $paid_amount_gt = null, $paid_amount_gte = null, $paid_amount_lt = null, $paid_amount_lte = null, $due_amount_between = null, $due_amount_gt = null, $due_amount_gte = null, $due_amount_lt = null, $due_amount_lte = null, $has_xml = null, $has_pdf = null, $order_issued_at = null, $order_canceled_at = null, $order_certified_at = null, $order_amount = null, $page = '1', $items_per_page = '30')
    {
        return $this->listTaxpayerInvoiceAsyncWithHttpInfo($x_api_key, $x_request_id, $username, $password, $id, $uuid, $version, $type, $usage, $payment_type, $payment_method, $issuer_rfc, $issuer_name, $issuer_tax_regime, $issuer_blacklist_status, $is_issuer, $receiver_rfc, $receiver_name, $receiver_blacklist_status, $is_receiver, $currency, $status, $pac, $cancellation_status, $cancellation_status_process, $issued_at_before, $issued_at_strictly_before, $issued_at_after, $issued_at_strictly_after, $canceled_at_before, $canceled_at_strictly_before, $canceled_at_after, $canceled_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $certified_at_before, $certified_at_strictly_before, $certified_at_after, $certified_at_strictly_after, $last_payment_date_before, $last_payment_date_strictly_before, $last_payment_date_after, $last_payment_date_strictly_after, $fully_paid_at_before, $fully_paid_at_strictly_before, $fully_paid_at_after, $fully_paid_at_strictly_after, $tax_between, $tax_gt, $tax_gte, $tax_lt, $tax_lte, $discount_between, $discount_gt, $discount_gte, $discount_lt, $discount_lte, $subtotal_between, $subtotal_gt, $subtotal_gte, $subtotal_lt, $subtotal_lte, $total_between, $total_gt, $total_gte, $total_lt, $total_lte, $paid_amount_between, $paid_amount_gt, $paid_amount_gte, $paid_amount_lt, $paid_amount_lte, $due_amount_between, $due_amount_gt, $due_amount_gte, $due_amount_lt, $due_amount_lte, $has_xml, $has_pdf, $order_issued_at, $order_canceled_at, $order_certified_at, $order_amount, $page, $items_per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    
    public function listTaxpayerInvoiceAsyncWithHttpInfo($x_api_key, $x_request_id, $username, $password, $id, $uuid = null, $version = null, $type = null, $usage = null, $payment_type = null, $payment_method = null, $issuer_rfc = null, $issuer_name = null, $issuer_tax_regime = null, $issuer_blacklist_status = null, $is_issuer = null, $receiver_rfc = null, $receiver_name = null, $receiver_blacklist_status = null, $is_receiver = null, $currency = null, $status = null, $pac = null, $cancellation_status = null, $cancellation_status_process = null, $issued_at_before = null, $issued_at_strictly_before = null, $issued_at_after = null, $issued_at_strictly_after = null, $canceled_at_before = null, $canceled_at_strictly_before = null, $canceled_at_after = null, $canceled_at_strictly_after = null, $created_at_before = null, $created_at_strictly_before = null, $created_at_after = null, $created_at_strictly_after = null, $updated_at_before = null, $updated_at_strictly_before = null, $updated_at_after = null, $updated_at_strictly_after = null, $certified_at_before = null, $certified_at_strictly_before = null, $certified_at_after = null, $certified_at_strictly_after = null, $last_payment_date_before = null, $last_payment_date_strictly_before = null, $last_payment_date_after = null, $last_payment_date_strictly_after = null, $fully_paid_at_before = null, $fully_paid_at_strictly_before = null, $fully_paid_at_after = null, $fully_paid_at_strictly_after = null, $tax_between = null, $tax_gt = null, $tax_gte = null, $tax_lt = null, $tax_lte = null, $discount_between = null, $discount_gt = null, $discount_gte = null, $discount_lt = null, $discount_lte = null, $subtotal_between = null, $subtotal_gt = null, $subtotal_gte = null, $subtotal_lt = null, $subtotal_lte = null, $total_between = null, $total_gt = null, $total_gte = null, $total_lt = null, $total_lte = null, $paid_amount_between = null, $paid_amount_gt = null, $paid_amount_gte = null, $paid_amount_lt = null, $paid_amount_lte = null, $due_amount_between = null, $due_amount_gt = null, $due_amount_gte = null, $due_amount_lt = null, $due_amount_lte = null, $has_xml = null, $has_pdf = null, $order_issued_at = null, $order_canceled_at = null, $order_certified_at = null, $order_amount = null, $page = '1', $items_per_page = '30')
    {
        $returnType = '\SatClientPhp\Client\Model\ResponseTaxPayerInvoice';
        $request = $this->listTaxpayerInvoiceRequest($x_api_key, $x_request_id, $username, $password, $id, $uuid, $version, $type, $usage, $payment_type, $payment_method, $issuer_rfc, $issuer_name, $issuer_tax_regime, $issuer_blacklist_status, $is_issuer, $receiver_rfc, $receiver_name, $receiver_blacklist_status, $is_receiver, $currency, $status, $pac, $cancellation_status, $cancellation_status_process, $issued_at_before, $issued_at_strictly_before, $issued_at_after, $issued_at_strictly_after, $canceled_at_before, $canceled_at_strictly_before, $canceled_at_after, $canceled_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after, $certified_at_before, $certified_at_strictly_before, $certified_at_after, $certified_at_strictly_after, $last_payment_date_before, $last_payment_date_strictly_before, $last_payment_date_after, $last_payment_date_strictly_after, $fully_paid_at_before, $fully_paid_at_strictly_before, $fully_paid_at_after, $fully_paid_at_strictly_after, $tax_between, $tax_gt, $tax_gte, $tax_lt, $tax_lte, $discount_between, $discount_gt, $discount_gte, $discount_lt, $discount_lte, $subtotal_between, $subtotal_gt, $subtotal_gte, $subtotal_lt, $subtotal_lte, $total_between, $total_gt, $total_gte, $total_lt, $total_lte, $paid_amount_between, $paid_amount_gt, $paid_amount_gte, $paid_amount_lt, $paid_amount_lte, $due_amount_between, $due_amount_gt, $due_amount_gte, $due_amount_lt, $due_amount_lte, $has_xml, $has_pdf, $order_issued_at, $order_canceled_at, $order_certified_at, $order_amount, $page, $items_per_page);
        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody;
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }
    
    protected function listTaxpayerInvoiceRequest($x_api_key, $x_request_id, $username, $password, $id, $uuid = null, $version = null, $type = null, $usage = null, $payment_type = null, $payment_method = null, $issuer_rfc = null, $issuer_name = null, $issuer_tax_regime = null, $issuer_blacklist_status = null, $is_issuer = null, $receiver_rfc = null, $receiver_name = null, $receiver_blacklist_status = null, $is_receiver = null, $currency = null, $status = null, $pac = null, $cancellation_status = null, $cancellation_status_process = null, $issued_at_before = null, $issued_at_strictly_before = null, $issued_at_after = null, $issued_at_strictly_after = null, $canceled_at_before = null, $canceled_at_strictly_before = null, $canceled_at_after = null, $canceled_at_strictly_after = null, $created_at_before = null, $created_at_strictly_before = null, $created_at_after = null, $created_at_strictly_after = null, $updated_at_before = null, $updated_at_strictly_before = null, $updated_at_after = null, $updated_at_strictly_after = null, $certified_at_before = null, $certified_at_strictly_before = null, $certified_at_after = null, $certified_at_strictly_after = null, $last_payment_date_before = null, $last_payment_date_strictly_before = null, $last_payment_date_after = null, $last_payment_date_strictly_after = null, $fully_paid_at_before = null, $fully_paid_at_strictly_before = null, $fully_paid_at_after = null, $fully_paid_at_strictly_after = null, $tax_between = null, $tax_gt = null, $tax_gte = null, $tax_lt = null, $tax_lte = null, $discount_between = null, $discount_gt = null, $discount_gte = null, $discount_lt = null, $discount_lte = null, $subtotal_between = null, $subtotal_gt = null, $subtotal_gte = null, $subtotal_lt = null, $subtotal_lte = null, $total_between = null, $total_gt = null, $total_gte = null, $total_lt = null, $total_lte = null, $paid_amount_between = null, $paid_amount_gt = null, $paid_amount_gte = null, $paid_amount_lt = null, $paid_amount_lte = null, $due_amount_between = null, $due_amount_gt = null, $due_amount_gte = null, $due_amount_lt = null, $due_amount_lte = null, $has_xml = null, $has_pdf = null, $order_issued_at = null, $order_canceled_at = null, $order_certified_at = null, $order_amount = null, $page = '1', $items_per_page = '30')
    {
        if ($x_signature === null || (is_array($x_signature) && count($x_signature) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_signature when calling listTaxpayerInvoice'
            );
        }
        if ($x_api_key === null || (is_array($x_api_key) && count($x_api_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_api_key when calling listTaxpayerInvoice'
            );
        }
        if ($x_request_id === null || (is_array($x_request_id) && count($x_request_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_request_id when calling listTaxpayerInvoice'
            );
        }
        if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-5][0-9a-f]{3}-[089ab][0-9a-f]{3}-[0-9a-f]{12}$/", $x_request_id)) {
            throw new \InvalidArgumentException("invalid value for \"x_request_id\" when calling InvoicesApi.listTaxpayerInvoice, must conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-5][0-9a-f]{3}-[089ab][0-9a-f]{3}-[0-9a-f]{12}$/.");
        }
        if ($username === null || (is_array($username) && count($username) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $username when calling listTaxpayerInvoice'
            );
        }
        if ($password === null || (is_array($password) && count($password) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling listTaxpayerInvoice'
            );
        }
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling listTaxpayerInvoice'
            );
        }
        if (strlen($id) > 13) {
            throw new \InvalidArgumentException('invalid length for "$id" when calling InvoicesApi.listTaxpayerInvoice, must be smaller than or equal to 13.');
        }
        if (strlen($id) < 12) {
            throw new \InvalidArgumentException('invalid length for "$id" when calling InvoicesApi.listTaxpayerInvoice, must be bigger than or equal to 12.');
        }
        if (!preg_match("/^([A-ZÑ&]{3,4}) ?(?:- ?)?(\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])) ?(?:- ?)?([A-Z\\d]{2})([A\\d])$/", $id)) {
            throw new \InvalidArgumentException("invalid value for \"id\" when calling InvoicesApi.listTaxpayerInvoice, must conform to the pattern /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])) ?(?:- ?)?([A-Z\\d]{2})([A\\d])$/.");
        }
        if ($issuer_rfc !== null && strlen($issuer_rfc) > 13) {
            throw new \InvalidArgumentException('invalid length for "$issuer_rfc" when calling InvoicesApi.listTaxpayerInvoice, must be smaller than or equal to 13.');
        }
        if ($issuer_rfc !== null && strlen($issuer_rfc) < 12) {
            throw new \InvalidArgumentException('invalid length for "$issuer_rfc" when calling InvoicesApi.listTaxpayerInvoice, must be bigger than or equal to 12.');
        }
        if ($issuer_name !== null && strlen($issuer_name) > 254) {
            throw new \InvalidArgumentException('invalid length for "$issuer_name" when calling InvoicesApi.listTaxpayerInvoice, must be smaller than or equal to 254.');
        }
        if ($issuer_name !== null && strlen($issuer_name) < 1) {
            throw new \InvalidArgumentException('invalid length for "$issuer_name" when calling InvoicesApi.listTaxpayerInvoice, must be bigger than or equal to 1.');
        }
        if ($receiver_rfc !== null && strlen($receiver_rfc) > 13) {
            throw new \InvalidArgumentException('invalid length for "$receiver_rfc" when calling InvoicesApi.listTaxpayerInvoice, must be smaller than or equal to 13.');
        }
        if ($receiver_rfc !== null && strlen($receiver_rfc) < 12) {
            throw new \InvalidArgumentException('invalid length for "$receiver_rfc" when calling InvoicesApi.listTaxpayerInvoice, must be bigger than or equal to 12.');
        }
        if ($receiver_name !== null && strlen($receiver_name) > 254) {
            throw new \InvalidArgumentException('invalid length for "$receiver_name" when calling InvoicesApi.listTaxpayerInvoice, must be smaller than or equal to 254.');
        }
        if ($receiver_name !== null && strlen($receiver_name) < 1) {
            throw new \InvalidArgumentException('invalid length for "$receiver_name" when calling InvoicesApi.listTaxpayerInvoice, must be bigger than or equal to 1.');
        }
        if ($currency !== null && strlen($currency) > 3) {
            throw new \InvalidArgumentException('invalid length for "$currency" when calling InvoicesApi.listTaxpayerInvoice, must be smaller than or equal to 3.');
        }
        if ($currency !== null && strlen($currency) < 3) {
            throw new \InvalidArgumentException('invalid length for "$currency" when calling InvoicesApi.listTaxpayerInvoice, must be bigger than or equal to 3.');
        }
        if ($pac !== null && strlen($pac) > 12) {
            throw new \InvalidArgumentException('invalid length for "$pac" when calling InvoicesApi.listTaxpayerInvoice, must be smaller than or equal to 12.');
        }
        if ($pac !== null && strlen($pac) < 12) {
            throw new \InvalidArgumentException('invalid length for "$pac" when calling InvoicesApi.listTaxpayerInvoice, must be bigger than or equal to 12.');
        }
        if ($items_per_page !== null && $items_per_page > 100) {
            throw new \InvalidArgumentException('invalid value for "$items_per_page" when calling InvoicesApi.listTaxpayerInvoice, must be smaller than or equal to 100.');
        }
        if ($items_per_page !== null && $items_per_page < 1) {
            throw new \InvalidArgumentException('invalid value for "$items_per_page" when calling InvoicesApi.listTaxpayerInvoice, must be bigger than or equal to 1.');
        }
        $resourcePath = '/taxpayers/{id}/invoices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        if ($uuid !== null) {
            $queryParams['uuid'] = ObjectSerializer::toQueryValue($uuid);
        }
        if ($version !== null) {
            $queryParams['version'] = ObjectSerializer::toQueryValue($version);
        }
        if ($type !== null) {
            $queryParams['type'] = ObjectSerializer::toQueryValue($type);
        }
        if ($usage !== null) {
            $queryParams['usage'] = ObjectSerializer::toQueryValue($usage);
        }
        if ($payment_type !== null) {
            $queryParams['paymentType'] = ObjectSerializer::toQueryValue($payment_type);
        }
        if ($payment_method !== null) {
            $queryParams['paymentMethod'] = ObjectSerializer::toQueryValue($payment_method);
        }
        if ($issuer_rfc !== null) {
            $queryParams['issuer.rfc'] = ObjectSerializer::toQueryValue($issuer_rfc);
        }
        if ($issuer_name !== null) {
            $queryParams['issuer.name'] = ObjectSerializer::toQueryValue($issuer_name);
        }
        if ($issuer_tax_regime !== null) {
            $queryParams['issuer.taxRegime'] = ObjectSerializer::toQueryValue($issuer_tax_regime);
        }
        if ($issuer_blacklist_status !== null) {
            $queryParams['issuer.blacklistStatus'] = ObjectSerializer::toQueryValue($issuer_blacklist_status);
        }
        if ($is_issuer !== null) {
            $queryParams['isIssuer'] = ObjectSerializer::toQueryValue($is_issuer);
        }
        if ($receiver_rfc !== null) {
            $queryParams['receiver.rfc'] = ObjectSerializer::toQueryValue($receiver_rfc);
        }
        if ($receiver_name !== null) {
            $queryParams['receiver.name'] = ObjectSerializer::toQueryValue($receiver_name);
        }
        if ($receiver_blacklist_status !== null) {
            $queryParams['receiver.blacklistStatus'] = ObjectSerializer::toQueryValue($receiver_blacklist_status);
        }
        if ($is_receiver !== null) {
            $queryParams['isReceiver'] = ObjectSerializer::toQueryValue($is_receiver);
        }
        if ($currency !== null) {
            $queryParams['currency'] = ObjectSerializer::toQueryValue($currency);
        }
        if ($status !== null) {
            $queryParams['status'] = ObjectSerializer::toQueryValue($status);
        }
        if ($pac !== null) {
            $queryParams['pac'] = ObjectSerializer::toQueryValue($pac);
        }
        if ($cancellation_status !== null) {
            $queryParams['cancellationStatus'] = ObjectSerializer::toQueryValue($cancellation_status);
        }
        if ($cancellation_status_process !== null) {
            $queryParams['cancellationStatusProcess'] = ObjectSerializer::toQueryValue($cancellation_status_process);
        }
        if ($issued_at_before !== null) {
            $queryParams['issuedAt[before]'] = ObjectSerializer::toQueryValue($issued_at_before);
        }
        if ($issued_at_strictly_before !== null) {
            $queryParams['issuedAt[strictly_before]'] = ObjectSerializer::toQueryValue($issued_at_strictly_before);
        }
        if ($issued_at_after !== null) {
            $queryParams['issuedAt[after]'] = ObjectSerializer::toQueryValue($issued_at_after);
        }
        if ($issued_at_strictly_after !== null) {
            $queryParams['issuedAt[strictly_after]'] = ObjectSerializer::toQueryValue($issued_at_strictly_after);
        }
        if ($canceled_at_before !== null) {
            $queryParams['canceledAt[before]'] = ObjectSerializer::toQueryValue($canceled_at_before);
        }
        if ($canceled_at_strictly_before !== null) {
            $queryParams['canceledAt[strictly_before]'] = ObjectSerializer::toQueryValue($canceled_at_strictly_before);
        }
        if ($canceled_at_after !== null) {
            $queryParams['canceledAt[after]'] = ObjectSerializer::toQueryValue($canceled_at_after);
        }
        if ($canceled_at_strictly_after !== null) {
            $queryParams['canceledAt[strictly_after]'] = ObjectSerializer::toQueryValue($canceled_at_strictly_after);
        }
        if ($created_at_before !== null) {
            $queryParams['createdAt[before]'] = ObjectSerializer::toQueryValue($created_at_before);
        }
        if ($created_at_strictly_before !== null) {
            $queryParams['createdAt[strictly_before]'] = ObjectSerializer::toQueryValue($created_at_strictly_before);
        }
        if ($created_at_after !== null) {
            $queryParams['createdAt[after]'] = ObjectSerializer::toQueryValue($created_at_after);
        }
        if ($created_at_strictly_after !== null) {
            $queryParams['createdAt[strictly_after]'] = ObjectSerializer::toQueryValue($created_at_strictly_after);
        }
        if ($updated_at_before !== null) {
            $queryParams['updatedAt[before]'] = ObjectSerializer::toQueryValue($updated_at_before);
        }
        if ($updated_at_strictly_before !== null) {
            $queryParams['updatedAt[strictly_before]'] = ObjectSerializer::toQueryValue($updated_at_strictly_before);
        }
        if ($updated_at_after !== null) {
            $queryParams['updatedAt[after]'] = ObjectSerializer::toQueryValue($updated_at_after);
        }
        if ($updated_at_strictly_after !== null) {
            $queryParams['updatedAt[strictly_after]'] = ObjectSerializer::toQueryValue($updated_at_strictly_after);
        }
        if ($certified_at_before !== null) {
            $queryParams['certifiedAt[before]'] = ObjectSerializer::toQueryValue($certified_at_before);
        }
        if ($certified_at_strictly_before !== null) {
            $queryParams['certifiedAt[strictly_before]'] = ObjectSerializer::toQueryValue($certified_at_strictly_before);
        }
        if ($certified_at_after !== null) {
            $queryParams['certifiedAt[after]'] = ObjectSerializer::toQueryValue($certified_at_after);
        }
        if ($certified_at_strictly_after !== null) {
            $queryParams['certifiedAt[strictly_after]'] = ObjectSerializer::toQueryValue($certified_at_strictly_after);
        }
        if ($last_payment_date_before !== null) {
            $queryParams['lastPaymentDate[before]'] = ObjectSerializer::toQueryValue($last_payment_date_before);
        }
        if ($last_payment_date_strictly_before !== null) {
            $queryParams['lastPaymentDate[strictly_before]'] = ObjectSerializer::toQueryValue($last_payment_date_strictly_before);
        }
        if ($last_payment_date_after !== null) {
            $queryParams['lastPaymentDate[after]'] = ObjectSerializer::toQueryValue($last_payment_date_after);
        }
        if ($last_payment_date_strictly_after !== null) {
            $queryParams['lastPaymentDate[strictly_after]'] = ObjectSerializer::toQueryValue($last_payment_date_strictly_after);
        }
        if ($fully_paid_at_before !== null) {
            $queryParams['fullyPaidAt[before]'] = ObjectSerializer::toQueryValue($fully_paid_at_before);
        }
        if ($fully_paid_at_strictly_before !== null) {
            $queryParams['fullyPaidAt[strictly_before]'] = ObjectSerializer::toQueryValue($fully_paid_at_strictly_before);
        }
        if ($fully_paid_at_after !== null) {
            $queryParams['fullyPaidAt[after]'] = ObjectSerializer::toQueryValue($fully_paid_at_after);
        }
        if ($fully_paid_at_strictly_after !== null) {
            $queryParams['fullyPaidAt[strictly_after]'] = ObjectSerializer::toQueryValue($fully_paid_at_strictly_after);
        }
        if ($tax_between !== null) {
            $queryParams['tax[between]'] = ObjectSerializer::toQueryValue($tax_between);
        }
        if ($tax_gt !== null) {
            $queryParams['tax[gt]'] = ObjectSerializer::toQueryValue($tax_gt);
        }
        if ($tax_gte !== null) {
            $queryParams['tax[gte]'] = ObjectSerializer::toQueryValue($tax_gte);
        }
        if ($tax_lt !== null) {
            $queryParams['tax[lt]'] = ObjectSerializer::toQueryValue($tax_lt);
        }
        if ($tax_lte !== null) {
            $queryParams['tax[lte]'] = ObjectSerializer::toQueryValue($tax_lte);
        }
        if ($discount_between !== null) {
            $queryParams['discount[between]'] = ObjectSerializer::toQueryValue($discount_between);
        }
        if ($discount_gt !== null) {
            $queryParams['discount[gt]'] = ObjectSerializer::toQueryValue($discount_gt);
        }
        if ($discount_gte !== null) {
            $queryParams['discount[gte]'] = ObjectSerializer::toQueryValue($discount_gte);
        }
        if ($discount_lt !== null) {
            $queryParams['discount[lt]'] = ObjectSerializer::toQueryValue($discount_lt);
        }
        if ($discount_lte !== null) {
            $queryParams['discount[lte]'] = ObjectSerializer::toQueryValue($discount_lte);
        }
        if ($subtotal_between !== null) {
            $queryParams['subtotal[between]'] = ObjectSerializer::toQueryValue($subtotal_between);
        }
        if ($subtotal_gt !== null) {
            $queryParams['subtotal[gt]'] = ObjectSerializer::toQueryValue($subtotal_gt);
        }
        if ($subtotal_gte !== null) {
            $queryParams['subtotal[gte]'] = ObjectSerializer::toQueryValue($subtotal_gte);
        }
        if ($subtotal_lt !== null) {
            $queryParams['subtotal[lt]'] = ObjectSerializer::toQueryValue($subtotal_lt);
        }
        if ($subtotal_lte !== null) {
            $queryParams['subtotal[lte]'] = ObjectSerializer::toQueryValue($subtotal_lte);
        }
        if ($total_between !== null) {
            $queryParams['total[between]'] = ObjectSerializer::toQueryValue($total_between);
        }
        if ($total_gt !== null) {
            $queryParams['total[gt]'] = ObjectSerializer::toQueryValue($total_gt);
        }
        if ($total_gte !== null) {
            $queryParams['total[gte]'] = ObjectSerializer::toQueryValue($total_gte);
        }
        if ($total_lt !== null) {
            $queryParams['total[lt]'] = ObjectSerializer::toQueryValue($total_lt);
        }
        if ($total_lte !== null) {
            $queryParams['total[lte]'] = ObjectSerializer::toQueryValue($total_lte);
        }
        if ($paid_amount_between !== null) {
            $queryParams['paidAmount[between]'] = ObjectSerializer::toQueryValue($paid_amount_between);
        }
        if ($paid_amount_gt !== null) {
            $queryParams['paidAmount[gt]'] = ObjectSerializer::toQueryValue($paid_amount_gt);
        }
        if ($paid_amount_gte !== null) {
            $queryParams['paidAmount[gte]'] = ObjectSerializer::toQueryValue($paid_amount_gte);
        }
        if ($paid_amount_lt !== null) {
            $queryParams['paidAmount[lt]'] = ObjectSerializer::toQueryValue($paid_amount_lt);
        }
        if ($paid_amount_lte !== null) {
            $queryParams['paidAmount[lte]'] = ObjectSerializer::toQueryValue($paid_amount_lte);
        }
        if ($due_amount_between !== null) {
            $queryParams['dueAmount[between]'] = ObjectSerializer::toQueryValue($due_amount_between);
        }
        if ($due_amount_gt !== null) {
            $queryParams['dueAmount[gt]'] = ObjectSerializer::toQueryValue($due_amount_gt);
        }
        if ($due_amount_gte !== null) {
            $queryParams['dueAmount[gte]'] = ObjectSerializer::toQueryValue($due_amount_gte);
        }
        if ($due_amount_lt !== null) {
            $queryParams['dueAmount[lt]'] = ObjectSerializer::toQueryValue($due_amount_lt);
        }
        if ($due_amount_lte !== null) {
            $queryParams['dueAmount[lte]'] = ObjectSerializer::toQueryValue($due_amount_lte);
        }
        if ($has_xml !== null) {
            $queryParams['hasXml'] = ObjectSerializer::toQueryValue($has_xml);
        }
        if ($has_pdf !== null) {
            $queryParams['hasPdf'] = ObjectSerializer::toQueryValue($has_pdf);
        }
        if ($order_issued_at !== null) {
            $queryParams['order[issuedAt]'] = ObjectSerializer::toQueryValue($order_issued_at);
        }
        if ($order_canceled_at !== null) {
            $queryParams['order[canceledAt]'] = ObjectSerializer::toQueryValue($order_canceled_at);
        }
        if ($order_certified_at !== null) {
            $queryParams['order[certifiedAt]'] = ObjectSerializer::toQueryValue($order_certified_at);
        }
        if ($order_amount !== null) {
            $queryParams['order[amount]'] = ObjectSerializer::toQueryValue($order_amount);
        }
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        if ($items_per_page !== null) {
            $queryParams['itemsPerPage'] = ObjectSerializer::toQueryValue($items_per_page);
        }
        if ($x_signature !== null) {
            $headerParams['x-signature'] = ObjectSerializer::toHeaderValue($x_signature);
        }
        if ($x_api_key !== null) {
            $headerParams['x-api-key'] = ObjectSerializer::toHeaderValue($x_api_key);
        }
        if ($x_request_id !== null) {
            $headerParams['x-request-id'] = ObjectSerializer::toHeaderValue($x_request_id);
        }
        if ($username !== null) {
            $headerParams['username'] = ObjectSerializer::toHeaderValue($username);
        }
        if ($password !== null) {
            $headerParams['password'] = ObjectSerializer::toHeaderValue($password);
        }
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }
        $_tempBody = null;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }
        if (isset($_tempBody)) {
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }
    
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }
        return $options;
    }
}
