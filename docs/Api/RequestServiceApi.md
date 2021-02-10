# OpenAPI\Client\RequestServiceApi

All URIs are relative to http://api.madana.io/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addData()**](RequestServiceApi.md#addData) | **POST** /requests/{uuid}/data | Is used to upload and park the data till the AnalysisRequest gets processed.
[**cancelProcessing()**](RequestServiceApi.md#cancelProcessing) | **POST** /requests/{uuid}/cancel | Endpoint is called from the Analysis Processing entity to submit the result.
[**createNewRequest()**](RequestServiceApi.md#createNewRequest) | **POST** /requests | Endpoint used to create a new Analysis Request.
[**getActions()**](RequestServiceApi.md#getActions) | **GET** /requests/actions | 
[**getAgent()**](RequestServiceApi.md#getAgent) | **GET** /requests/{uuid}/agent | Is called from the APE to request all parked datasets.
[**getAllRequests()**](RequestServiceApi.md#getAllRequests) | **GET** /requests | Returns UUIDs of existing analyses.
[**getData()**](RequestServiceApi.md#getData) | **GET** /requests/{uuid}/data | Is called from the APE to request all parked datasets.
[**getRequest()**](RequestServiceApi.md#getRequest) | **GET** /requests/{uuid} | Returns the details for certain Request.
[**getResult()**](RequestServiceApi.md#getResult) | **GET** /requests/{uuid}/result | Can be called from creator to request the AnalysisResult.
[**getStatus()**](RequestServiceApi.md#getStatus) | **GET** /requests/stats | 
[**giveConsent()**](RequestServiceApi.md#giveConsent) | **POST** /requests/{uuid}/consent | Used to give consent for request.
[**initRequestParameters()**](RequestServiceApi.md#initRequestParameters) | **POST** /requests/{uuid} | Endpoint used initialized addition datacollection parameters for requester.
[**setAgent()**](RequestServiceApi.md#setAgent) | **POST** /requests/{uuid}/agent | Is called from the APE to request all parked datasets.
[**setResult()**](RequestServiceApi.md#setResult) | **POST** /requests/{uuid}/result | Endpoint is called from the Analysis Processing entity to submit the result.


## `addData()`

```php
addData($uuid, $authorization, $body): \SplFileObject
```

Is used to upload and park the data till the AnalysisRequest gets processed.

Is used to upload and park the data till the AnalysisRequest gets processed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$authorization = 'authorization_example'; // string | Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c
$body = new \OpenAPI\Client\Model\JsonSignedData(); // \OpenAPI\Client\Model\JsonSignedData

try {
    $result = $apiInstance->addData($uuid, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestServiceApi->addData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **authorization** | **string**| Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c | [optional]
 **body** | [**\OpenAPI\Client\Model\JsonSignedData**](../Model/JsonSignedData.md)|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelProcessing()`

```php
cancelProcessing($uuid, $authorization, $body): \SplFileObject
```

Endpoint is called from the Analysis Processing entity to submit the result.

Endpoint is called from the Analysis Processing entity to submit the result

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$authorization = 'authorization_example'; // string | Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c
$body = new \OpenAPI\Client\Model\JsonSignedData(); // \OpenAPI\Client\Model\JsonSignedData

try {
    $result = $apiInstance->cancelProcessing($uuid, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestServiceApi->cancelProcessing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **authorization** | **string**| Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c | [optional]
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

## `createNewRequest()`

```php
createNewRequest($authorization, $body): string
```

Endpoint used to create a new Analysis Request.

Endpoint used to create a new Analysis Request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c
$body = new \OpenAPI\Client\Model\JsonSignedData(); // \OpenAPI\Client\Model\JsonSignedData

try {
    $result = $apiInstance->createNewRequest($authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestServiceApi->createNewRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c | [optional]
 **body** | [**\OpenAPI\Client\Model\JsonSignedData**](../Model/JsonSignedData.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getActions()`

```php
getActions($limit, $offset): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = '30'; // string
$offset = '0'; // string

try {
    $result = $apiInstance->getActions($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestServiceApi->getActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **string**|  | [optional] [default to &#39;30&#39;]
 **offset** | **string**|  | [optional] [default to &#39;0&#39;]

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

## `getAgent()`

```php
getAgent($uuid, $authorization): \SplFileObject
```

Is called from the APE to request all parked datasets.

Is called from the APE to request all parked datasets. Returns the transmitted data for certain Request. When requesting the data, the status of the request is automatically set to processing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$authorization = 'authorization_example'; // string | Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c

try {
    $result = $apiInstance->getAgent($uuid, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestServiceApi->getAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **authorization** | **string**| Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c | [optional]

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

## `getAllRequests()`

```php
getAllRequests($authorization, $created, $history, $limit, $new, $offset, $preview, $ready): \SplFileObject
```

Returns UUIDs of existing analyses.

Returns UUIDs of existing analyses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c
$created = 'false'; // string | - if Queryparam \"created=true\" only the UUIDs of own Requests are shown
$history = 'false'; // string | - if queryparam \"history\" is set to true, endpoint returns all user actions. False per default.
$limit = '30'; // string | Used for offset pagination. Limit/Offset Paging would look like GET /request?limit=20&offset=100. This query would return the 20 rows starting with the 100th row
$new = 'true'; // string | -  if Queryparam \"new=true\" only the UUIDs of new Requests ( Requests the user has not participated in and still allow participation) are shown
$offset = '0'; // string | Used for offset pagination. Limit/Offset Paging would look like GET /request?limit=20&offset=100. This query would return the 20 rows starting with the 100th row
$preview = 'false'; // string
$ready = 'false'; // string

try {
    $result = $apiInstance->getAllRequests($authorization, $created, $history, $limit, $new, $offset, $preview, $ready);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestServiceApi->getAllRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c | [optional]
 **created** | **string**| - if Queryparam \&quot;created&#x3D;true\&quot; only the UUIDs of own Requests are shown | [optional] [default to &#39;false&#39;]
 **history** | **string**| - if queryparam \&quot;history\&quot; is set to true, endpoint returns all user actions. False per default. | [optional] [default to &#39;false&#39;]
 **limit** | **string**| Used for offset pagination. Limit/Offset Paging would look like GET /request?limit&#x3D;20&amp;offset&#x3D;100. This query would return the 20 rows starting with the 100th row | [optional] [default to &#39;30&#39;]
 **new** | **string**| -  if Queryparam \&quot;new&#x3D;true\&quot; only the UUIDs of new Requests ( Requests the user has not participated in and still allow participation) are shown | [optional] [default to &#39;true&#39;]
 **offset** | **string**| Used for offset pagination. Limit/Offset Paging would look like GET /request?limit&#x3D;20&amp;offset&#x3D;100. This query would return the 20 rows starting with the 100th row | [optional] [default to &#39;0&#39;]
 **preview** | **string**|  | [optional] [default to &#39;false&#39;]
 **ready** | **string**|  | [optional] [default to &#39;false&#39;]

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

## `getData()`

```php
getData($uuid, $authorization): \OpenAPI\Client\Model\JsonSignedData
```

Is called from the APE to request all parked datasets.

Is called from the APE to request all parked datasets. Returns the transmitted data for certain Request. When requesting the data, the status of the request is automatically set to processing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$authorization = 'authorization_example'; // string | Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c

try {
    $result = $apiInstance->getData($uuid, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestServiceApi->getData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **authorization** | **string**| Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c | [optional]

### Return type

[**\OpenAPI\Client\Model\JsonSignedData**](../Model/JsonSignedData.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRequest()`

```php
getRequest($uuid, $authorization): \SplFileObject
```

Returns the details for certain Request.

Returns the details for certain Request. When requesting an analysis a view of the analysis is stored in the database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$authorization = 'authorization_example'; // string | Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c

try {
    $result = $apiInstance->getRequest($uuid, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestServiceApi->getRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **authorization** | **string**| Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c | [optional]

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

## `getResult()`

```php
getResult($uuid, $authorization): \SplFileObject
```

Can be called from creator to request the AnalysisResult.

Can be called from creator to request the AnalysisResult.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$authorization = 'authorization_example'; // string | Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c

try {
    $result = $apiInstance->getResult($uuid, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestServiceApi->getResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **authorization** | **string**| Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c | [optional]

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

## `getStatus()`

```php
getStatus(): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestServiceApi->getStatus: ', $e->getMessage(), PHP_EOL;
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

## `giveConsent()`

```php
giveConsent($uuid, $authorization): \SplFileObject
```

Used to give consent for request.

Used to give consent for request. If the Endpoint is called from the creator of the Analysis, the status of the request is set to completed. If called by another is interpreted as giving consent to participate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$authorization = 'authorization_example'; // string | Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c

try {
    $result = $apiInstance->giveConsent($uuid, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestServiceApi->giveConsent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **authorization** | **string**| Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c | [optional]

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

## `initRequestParameters()`

```php
initRequestParameters($uuid, $authorization, $body): string
```

Endpoint used initialized addition datacollection parameters for requester.

Endpoint used initialized addition datacollection parameters for requester

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$authorization = 'authorization_example'; // string | Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c
$body = 'body_example'; // string

try {
    $result = $apiInstance->initRequestParameters($uuid, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestServiceApi->initRequestParameters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **authorization** | **string**| Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c | [optional]
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setAgent()`

```php
setAgent($uuid, $authorization): \SplFileObject
```

Is called from the APE to request all parked datasets.

Is called from the APE to request all parked datasets. Returns the transmitted data for certain Request. When requesting the data, the status of the request is automatically set to processing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$authorization = 'authorization_example'; // string | Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c

try {
    $result = $apiInstance->setAgent($uuid, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestServiceApi->setAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **authorization** | **string**| Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c | [optional]

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

## `setResult()`

```php
setResult($uuid, $authorization, $body): \SplFileObject
```

Endpoint is called from the Analysis Processing entity to submit the result.

Endpoint is called from the Analysis Processing entity to submit the result

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RequestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$authorization = 'authorization_example'; // string | Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c
$body = new \OpenAPI\Client\Model\JsonSignedData(); // \OpenAPI\Client\Model\JsonSignedData

try {
    $result = $apiInstance->setResult($uuid, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestServiceApi->setResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **authorization** | **string**| Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c | [optional]
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
