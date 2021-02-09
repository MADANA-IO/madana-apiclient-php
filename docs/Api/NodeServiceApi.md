# OpenAPI\Client\NodeServiceApi

All URIs are relative to http://api.madana.io/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNode()**](NodeServiceApi.md#createNode) | **POST** /nodes/v2 | 
[**getBootstrap()**](NodeServiceApi.md#getBootstrap) | **GET** /nodes/bootstrap | 
[**getNodeV2()**](NodeServiceApi.md#getNodeV2) | **GET** /nodes/v2/{ident} | 
[**getNodes2()**](NodeServiceApi.md#getNodes2) | **GET** /nodes | 
[**getNodesV2()**](NodeServiceApi.md#getNodesV2) | **GET** /nodes/v2 | Returns UUIDs of existing analyses.
[**killNode()**](NodeServiceApi.md#killNode) | **POST** /nodes/v2/{ident}/kill | 
[**postNodeInfo()**](NodeServiceApi.md#postNodeInfo) | **POST** /nodes | 
[**postNodeInfo_0()**](NodeServiceApi.md#postNodeInfo_0) | **POST** /nodes/create | 


## `createNode()`

```php
createNode($body): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NodeServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\JsonNodeRunRequest(); // \OpenAPI\Client\Model\JsonNodeRunRequest

try {
    $result = $apiInstance->createNode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeServiceApi->createNode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\JsonNodeRunRequest**](../Model/JsonNodeRunRequest.md)|  | [optional]

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

## `getBootstrap()`

```php
getBootstrap(): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NodeServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getBootstrap();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeServiceApi->getBootstrap: ', $e->getMessage(), PHP_EOL;
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

## `getNodeV2()`

```php
getNodeV2($ident): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NodeServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ident = 'ident_example'; // string

try {
    $result = $apiInstance->getNodeV2($ident);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeServiceApi->getNodeV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ident** | **string**|  |

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

## `getNodes2()`

```php
getNodes2($owner): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NodeServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$owner = 'owner_example'; // string

try {
    $result = $apiInstance->getNodes2($owner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeServiceApi->getNodes2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**|  | [optional]

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

## `getNodesV2()`

```php
getNodesV2($authorization, $created, $limit, $offset, $status): \SplFileObject
```

Returns UUIDs of existing analyses.

Returns UUIDs of existing analyses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NodeServiceApi(
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
    $result = $apiInstance->getNodesV2($authorization, $created, $limit, $offset, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeServiceApi->getNodesV2: ', $e->getMessage(), PHP_EOL;
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

## `killNode()`

```php
killNode($ident): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NodeServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ident = 'ident_example'; // string

try {
    $result = $apiInstance->killNode($ident);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeServiceApi->killNode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ident** | **string**|  |

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

## `postNodeInfo()`

```php
postNodeInfo($body): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NodeServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\JsonNodeInfo(); // \OpenAPI\Client\Model\JsonNodeInfo

try {
    $result = $apiInstance->postNodeInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeServiceApi->postNodeInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\JsonNodeInfo**](../Model/JsonNodeInfo.md)|  | [optional]

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

## `postNodeInfo_0()`

```php
postNodeInfo_0($body): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NodeServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\JsonNodeRunRequest(); // \OpenAPI\Client\Model\JsonNodeRunRequest

try {
    $result = $apiInstance->postNodeInfo_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeServiceApi->postNodeInfo_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\JsonNodeRunRequest**](../Model/JsonNodeRunRequest.md)|  | [optional]

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
