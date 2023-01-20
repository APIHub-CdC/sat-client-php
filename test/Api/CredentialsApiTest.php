<?php

namespace SatClientPhp\Client;

use \SatClientPhp\Client\Configuration;
use \SatClientPhp\Client\ApiException;
use \SatClientPhp\Client\ObjectSerializer;
use \SatClientPhp\Client\Model\CredentialCiecInput;
use GuzzleHttp\Client as HttpClient;


class CredentialsApiTest extends \PHPUnit\Framework\TestCase
{
    
    private $username;
    private $password;
    private $apiKey;
    private $httpClient;
    private $config;

    public  function setUp():  void {
        $this->username =  "";
        $this->password =  "";
        $this->apiKey   =  "";
        $apiUrl            =  "";
        $keystorePassword  =  "";
        $keystore          =  "";
        $cdcCertificate    =  "";

        $signer  =  new KeyHandler($keystore, $cdcCertificate, $keystorePassword);
        $events  =  new MiddlewareEvents($signer);
        
        $handler  = HandlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));
        $handler->push($events->verify_signature_header('x-signature'));
        
        $this->config =  new Configuration();
        $this->config->setHost($apiUrl);
        $this->httpClient =  new HttpClient([
          'handler'  =>  $handler
        ]);
    }

    
    public function testCreateCredential() {
        $requestPayload = new  CredentialCiecInput();
        $requestPayload->setType("ciec");
        $requestPayload->setRfc("");
        $requestPayload->setPassword("");
    
        $response = null;
    
        try  {
            $client = new CredentialsApi($this->httpClient, $this->config);
            $response = $client->createCredential($this->apiKey, $this->username, $this->password, $requestPayload);
            print("\n".$response);
            
        }  catch  (ApiException $exception)  {
            print("\nThe HTTP request failed, an error occurred: ".($exception->getMessage()));
            print("\n".$exception->getResponseObject());
        }
    
        $this->assertNotNull($response);
    }   
}
