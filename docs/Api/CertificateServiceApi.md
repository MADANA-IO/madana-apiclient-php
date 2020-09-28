# OpenAPI\Client\CertificateServiceApi

All URIs are relative to *http://api.madana.io/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticateCertificate**](CertificateServiceApi.md#authenticateCertificate) | **POST** /certificates | Issues certificates for logged-in users.
[**getCertificateByFingerprint**](CertificateServiceApi.md#getCertificateByFingerprint) | **GET** /certificates/{fingerprint} | 
[**getRootCertificate**](CertificateServiceApi.md#getRootCertificate) | **GET** /certificates/root | 



## authenticateCertificate

> \OpenAPI\Client\Model\JsonMDNCertificate authenticateCertificate($body)

Issues certificates for logged-in users.

Issues certificates for logged-in users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\CertificateServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\JsonMDNData(); // \OpenAPI\Client\Model\JsonMDNData | 

try {
    $result = $apiInstance->authenticateCertificate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificateServiceApi->authenticateCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\JsonMDNData**](../Model/JsonMDNData.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\JsonMDNCertificate**](../Model/JsonMDNCertificate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCertificateByFingerprint

> \SplFileObject getCertificateByFingerprint($fingerprint)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\CertificateServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fingerprint = 'fingerprint_example'; // string | 

try {
    $result = $apiInstance->getCertificateByFingerprint($fingerprint);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificateServiceApi->getCertificateByFingerprint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fingerprint** | **string**|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRootCertificate

> \SplFileObject getRootCertificate()



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\CertificateServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getRootCertificate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificateServiceApi->getRootCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

