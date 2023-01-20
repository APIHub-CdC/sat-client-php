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

class TaxComplianceChecksApi
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
    
    public function listTaxpayerTaxComplianceCheck($x_api_key, $x_request_id, $username, $password, $id, $internal_identifier = null, $taxpayer_rfc = null, $taxpayer_name = null, $result = null, $checked_at_before = null, $checked_at_strictly_before = null, $checked_at_after = null, $checked_at_strictly_after = null, $created_at_before = null, $created_at_strictly_before = null, $created_at_after = null, $created_at_strictly_after = null, $order_checked_at = null, $order_created_at = null, $page = '1', $items_per_page = '30')
    {
        list($response) = $this->listTaxpayerTaxComplianceCheckWithHttpInfo($x_api_key, $x_request_id, $username, $password, $id, $internal_identifier, $taxpayer_rfc, $taxpayer_name, $result, $checked_at_before, $checked_at_strictly_before, $checked_at_after, $checked_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $order_checked_at, $order_created_at, $page, $items_per_page);
        return $response;
    }
    
    public function listTaxpayerTaxComplianceCheckWithHttpInfo($x_api_key, $x_request_id, $username, $password, $id, $internal_identifier = null, $taxpayer_rfc = null, $taxpayer_name = null, $result = null, $checked_at_before = null, $checked_at_strictly_before = null, $checked_at_after = null, $checked_at_strictly_after = null, $created_at_before = null, $created_at_strictly_before = null, $created_at_after = null, $created_at_strictly_after = null, $order_checked_at = null, $order_created_at = null, $page = '1', $items_per_page = '30')
    {
        $returnType = '\SatClientPhp\Client\Model\ResponseTaxpayerTaxComplianceCheckCollection';
        $request = $this->listTaxpayerTaxComplianceCheckRequest($x_api_key, $x_request_id, $username, $password, $id, $internal_identifier, $taxpayer_rfc, $taxpayer_name, $result, $checked_at_before, $checked_at_strictly_before, $checked_at_after, $checked_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $order_checked_at, $order_created_at, $page, $items_per_page);
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
                        '\SatClientPhp\Client\Model\ResponseTaxpayerTaxComplianceCheckCollection',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SatClientPhp\Client\Model\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SatClientPhp\Client\Model\ResponseUnauthorized',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SatClientPhp\Client\Model\ResponseNotFound',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    
    public function listTaxpayerTaxComplianceCheckAsync($x_api_key, $x_request_id, $username, $password, $id, $internal_identifier = null, $taxpayer_rfc = null, $taxpayer_name = null, $result = null, $checked_at_before = null, $checked_at_strictly_before = null, $checked_at_after = null, $checked_at_strictly_after = null, $created_at_before = null, $created_at_strictly_before = null, $created_at_after = null, $created_at_strictly_after = null, $order_checked_at = null, $order_created_at = null, $page = '1', $items_per_page = '30')
    {
        return $this->listTaxpayerTaxComplianceCheckAsyncWithHttpInfo($x_api_key, $x_request_id, $username, $password, $id, $internal_identifier, $taxpayer_rfc, $taxpayer_name, $result, $checked_at_before, $checked_at_strictly_before, $checked_at_after, $checked_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $order_checked_at, $order_created_at, $page, $items_per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    
    public function listTaxpayerTaxComplianceCheckAsyncWithHttpInfo($x_api_key, $x_request_id, $username, $password, $id, $internal_identifier = null, $taxpayer_rfc = null, $taxpayer_name = null, $result = null, $checked_at_before = null, $checked_at_strictly_before = null, $checked_at_after = null, $checked_at_strictly_after = null, $created_at_before = null, $created_at_strictly_before = null, $created_at_after = null, $created_at_strictly_after = null, $order_checked_at = null, $order_created_at = null, $page = '1', $items_per_page = '30')
    {
        $returnType = '\SatClientPhp\Client\Model\ResponseTaxpayerTaxComplianceCheckCollection';
        $request = $this->listTaxpayerTaxComplianceCheckRequest($x_api_key, $x_request_id, $username, $password, $id, $internal_identifier, $taxpayer_rfc, $taxpayer_name, $result, $checked_at_before, $checked_at_strictly_before, $checked_at_after, $checked_at_strictly_after, $created_at_before, $created_at_strictly_before, $created_at_after, $created_at_strictly_after, $order_checked_at, $order_created_at, $page, $items_per_page);
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
    
    protected function listTaxpayerTaxComplianceCheckRequest($x_api_key, $x_request_id, $username, $password, $id, $internal_identifier = null, $taxpayer_rfc = null, $taxpayer_name = null, $result = null, $checked_at_before = null, $checked_at_strictly_before = null, $checked_at_after = null, $checked_at_strictly_after = null, $created_at_before = null, $created_at_strictly_before = null, $created_at_after = null, $created_at_strictly_after = null, $order_checked_at = null, $order_created_at = null, $page = '1', $items_per_page = '30')
    {
        if ($x_signature === null || (is_array($x_signature) && count($x_signature) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_signature when calling listTaxpayerTaxComplianceCheck'
            );
        }
        if ($x_api_key === null || (is_array($x_api_key) && count($x_api_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_api_key when calling listTaxpayerTaxComplianceCheck'
            );
        }
        if ($x_request_id === null || (is_array($x_request_id) && count($x_request_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_request_id when calling listTaxpayerTaxComplianceCheck'
            );
        }
        if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-5][0-9a-f]{3}-[089ab][0-9a-f]{3}-[0-9a-f]{12}$/", $x_request_id)) {
            throw new \InvalidArgumentException("invalid value for \"x_request_id\" when calling TaxComplianceChecksApi.listTaxpayerTaxComplianceCheck, must conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-5][0-9a-f]{3}-[089ab][0-9a-f]{3}-[0-9a-f]{12}$/.");
        }
        if ($username === null || (is_array($username) && count($username) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $username when calling listTaxpayerTaxComplianceCheck'
            );
        }
        if ($password === null || (is_array($password) && count($password) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling listTaxpayerTaxComplianceCheck'
            );
        }
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling listTaxpayerTaxComplianceCheck'
            );
        }
        if (strlen($id) > 13) {
            throw new \InvalidArgumentException('invalid length for "$id" when calling TaxComplianceChecksApi.listTaxpayerTaxComplianceCheck, must be smaller than or equal to 13.');
        }
        if (strlen($id) < 12) {
            throw new \InvalidArgumentException('invalid length for "$id" when calling TaxComplianceChecksApi.listTaxpayerTaxComplianceCheck, must be bigger than or equal to 12.');
        }
        if (!preg_match("/^([A-ZÑ&]{3,4}) ?(?:- ?)?(\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])) ?(?:- ?)?([A-Z\\d]{2})([A\\d])$/", $id)) {
            throw new \InvalidArgumentException("invalid value for \"id\" when calling TaxComplianceChecksApi.listTaxpayerTaxComplianceCheck, must conform to the pattern /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])) ?(?:- ?)?([A-Z\\d]{2})([A\\d])$/.");
        }
        if ($taxpayer_rfc !== null && strlen($taxpayer_rfc) > 13) {
            throw new \InvalidArgumentException('invalid length for "$taxpayer_rfc" when calling TaxComplianceChecksApi.listTaxpayerTaxComplianceCheck, must be smaller than or equal to 13.');
        }
        if ($taxpayer_rfc !== null && strlen($taxpayer_rfc) < 12) {
            throw new \InvalidArgumentException('invalid length for "$taxpayer_rfc" when calling TaxComplianceChecksApi.listTaxpayerTaxComplianceCheck, must be bigger than or equal to 12.');
        }
        if ($taxpayer_name !== null && strlen($taxpayer_name) > 254) {
            throw new \InvalidArgumentException('invalid length for "$taxpayer_name" when calling TaxComplianceChecksApi.listTaxpayerTaxComplianceCheck, must be smaller than or equal to 254.');
        }
        if ($taxpayer_name !== null && strlen($taxpayer_name) < 1) {
            throw new \InvalidArgumentException('invalid length for "$taxpayer_name" when calling TaxComplianceChecksApi.listTaxpayerTaxComplianceCheck, must be bigger than or equal to 1.');
        }
        if ($items_per_page !== null && $items_per_page > 100) {
            throw new \InvalidArgumentException('invalid value for "$items_per_page" when calling TaxComplianceChecksApi.listTaxpayerTaxComplianceCheck, must be smaller than or equal to 100.');
        }
        if ($items_per_page !== null && $items_per_page < 1) {
            throw new \InvalidArgumentException('invalid value for "$items_per_page" when calling TaxComplianceChecksApi.listTaxpayerTaxComplianceCheck, must be bigger than or equal to 1.');
        }
        $resourcePath = '/taxpayers/{id}/tax-compliance-checks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        if ($internal_identifier !== null) {
            $queryParams['internalIdentifier'] = ObjectSerializer::toQueryValue($internal_identifier);
        }
        if ($taxpayer_rfc !== null) {
            $queryParams['taxpayer.rfc'] = ObjectSerializer::toQueryValue($taxpayer_rfc);
        }
        if ($taxpayer_name !== null) {
            $queryParams['taxpayer.name'] = ObjectSerializer::toQueryValue($taxpayer_name);
        }
        if ($result !== null) {
            $queryParams['result'] = ObjectSerializer::toQueryValue($result);
        }
        if ($checked_at_before !== null) {
            $queryParams['checkedAt[before]'] = ObjectSerializer::toQueryValue($checked_at_before);
        }
        if ($checked_at_strictly_before !== null) {
            $queryParams['checkedAt[strictly_before]'] = ObjectSerializer::toQueryValue($checked_at_strictly_before);
        }
        if ($checked_at_after !== null) {
            $queryParams['checkedAt[after]'] = ObjectSerializer::toQueryValue($checked_at_after);
        }
        if ($checked_at_strictly_after !== null) {
            $queryParams['checkedAt[strictly_after]'] = ObjectSerializer::toQueryValue($checked_at_strictly_after);
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
        if ($order_checked_at !== null) {
            $queryParams['order[checkedAt]'] = ObjectSerializer::toQueryValue($order_checked_at);
        }
        if ($order_created_at !== null) {
            $queryParams['order[createdAt]'] = ObjectSerializer::toQueryValue($order_created_at);
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
