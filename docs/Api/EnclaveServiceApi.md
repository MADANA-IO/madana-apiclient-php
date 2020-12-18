# OpenAPI\Client\EnclaveServiceApi

All URIs are relative to http://api.madana.io/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addHistory()**](EnclaveServiceApi.md#addHistory) | **POST** /enclaves/{uuid}/history | 
[**approveEnclave()**](EnclaveServiceApi.md#approveEnclave) | **POST** /enclaves/{uuid}/approval | 
[**assignEnclaveAgent()**](EnclaveServiceApi.md#assignEnclaveAgent) | **POST** /enclaves/{uuid}/assign | 
[**attestateEnclave()**](EnclaveServiceApi.md#attestateEnclave) | **POST** /enclaves/{uuid}/attestation | 
[**createEnclaveRunRequest()**](EnclaveServiceApi.md#createEnclaveRunRequest) | **POST** /enclaves | 
[**getEnclave()**](EnclaveServiceApi.md#getEnclave) | **GET** /enclaves/{uuid} | 
[**getEnclaveTypes()**](EnclaveServiceApi.md#getEnclaveTypes) | **GET** /enclaves/types | 
[**getEnclaves()**](EnclaveServiceApi.md#getEnclaves) | **GET** /enclaves | Returns UUIDs of existing analyses.
[**killEnclave()**](EnclaveServiceApi.md#killEnclave) | **POST** /enclaves/{uuid}/kill | 
[**redistTest()**](EnclaveServiceApi.md#redistTest) | **GET** /enclaves/test/redis | 


## `addHistory()`

```php
addHistory($uuid, $body): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EnclaveServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$body = new \OpenAPI\Client\Model\JsonSignedData(); // \OpenAPI\Client\Model\JsonSignedData

try {
    $result = $apiInstance->addHistory($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnclaveServiceApi->addHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **body** | [**\OpenAPI\Client\Model\JsonSignedData**](../Model/JsonSignedData.md)|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `approveEnclave()`

```php
approveEnclave($uuid, $body): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EnclaveServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$body = new \OpenAPI\Client\Model\JsonEnclaveRunningAttestationApproval(); // \OpenAPI\Client\Model\JsonEnclaveRunningAttestationApproval

try {
    $result = $apiInstance->approveEnclave($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnclaveServiceApi->approveEnclave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **body** | [**\OpenAPI\Client\Model\JsonEnclaveRunningAttestationApproval**](../Model/JsonEnclaveRunningAttestationApproval.md)|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assignEnclaveAgent()`

```php
assignEnclaveAgent($uuid, $body): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EnclaveServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$body = new \OpenAPI\Client\Model\JsonNodeInfo(); // \OpenAPI\Client\Model\JsonNodeInfo

try {
    $result = $apiInstance->assignEnclaveAgent($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnclaveServiceApi->assignEnclaveAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **body** | [**\OpenAPI\Client\Model\JsonNodeInfo**](../Model/JsonNodeInfo.md)|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attestateEnclave()`

```php
attestateEnclave($uuid, $body): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EnclaveServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$body = new \OpenAPI\Client\Model\JsonEnclaveRunningAttestation(); // \OpenAPI\Client\Model\JsonEnclaveRunningAttestation

try {
    $result = $apiInstance->attestateEnclave($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnclaveServiceApi->attestateEnclave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **body** | [**\OpenAPI\Client\Model\JsonEnclaveRunningAttestation**](../Model/JsonEnclaveRunningAttestation.md)|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEnclaveRunRequest()`

```php
createEnclaveRunRequest($body): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EnclaveServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\JsonEnclaveRunRequest(); // \OpenAPI\Client\Model\JsonEnclaveRunRequest

try {
    $result = $apiInstance->createEnclaveRunRequest($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnclaveServiceApi->createEnclaveRunRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\JsonEnclaveRunRequest**](../Model/JsonEnclaveRunRequest.md)|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnclave()`

```php
getEnclave($uuid): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EnclaveServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->getEnclave($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnclaveServiceApi->getEnclave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnclaveTypes()`

```php
getEnclaveTypes(): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EnclaveServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getEnclaveTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnclaveServiceApi->getEnclaveTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnclaves()`

```php
getEnclaves($authorization, $created, $limit, $offset, $status): \SplFileObject
```

Returns UUIDs of existing analyses.

Returns UUIDs of existing analyses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EnclaveServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c
$created = 'true'; // string | - if Queryparam \"created=true\" only the UUIDs of own Requests are shown
$limit = '30'; // string | Used for offset pagination. Limit/Offset Paging would look like GET /request?limit=20&offset=100. This query would return the 20 rows starting with the 100th row
$offset = '0'; // string | Used for offset pagination. Limit/Offset Paging would look like GET /request?limit=20&offset=100. This query would return the 20 rows starting with the 100th row
$status = 'status_example'; // string

try {
    $result = $apiInstance->getEnclaves($authorization, $created, $limit, $offset, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnclaveServiceApi->getEnclaves: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c | [optional]
 **created** | **string**| - if Queryparam \&quot;created&#x3D;true\&quot; only the UUIDs of own Requests are shown | [optional] [default to &#39;true&#39;]
 **limit** | **string**| Used for offset pagination. Limit/Offset Paging would look like GET /request?limit&#x3D;20&amp;offset&#x3D;100. This query would return the 20 rows starting with the 100th row | [optional] [default to &#39;30&#39;]
 **offset** | **string**| Used for offset pagination. Limit/Offset Paging would look like GET /request?limit&#x3D;20&amp;offset&#x3D;100. This query would return the 20 rows starting with the 100th row | [optional] [default to &#39;0&#39;]
 **status** | **string**|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `killEnclave()`

```php
killEnclave($uuid): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EnclaveServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->killEnclave($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnclaveServiceApi->killEnclave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redistTest()`

```php
redistTest(): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EnclaveServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->redistTest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnclaveServiceApi->redistTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
