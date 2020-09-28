# OpenAPI\Client\EnvironmentServiceApi

All URIs are relative to *http://api.madana.io/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnvironment**](EnvironmentServiceApi.md#deleteEnvironment) | **DELETE** /environments/{uuid} | 
[**deleteEnvironmentSubscription**](EnvironmentServiceApi.md#deleteEnvironmentSubscription) | **DELETE** /environments/{uuid}/subscribe | 
[**getEnvironment**](EnvironmentServiceApi.md#getEnvironment) | **GET** /environments/{uuid} | 
[**getEnvironments**](EnvironmentServiceApi.md#getEnvironments) | **GET** /environments | Returns UUIDs of existing analyses.
[**getPublishedEnvironments**](EnvironmentServiceApi.md#getPublishedEnvironments) | **GET** /environments/published | 
[**getSubscribedEnvironments**](EnvironmentServiceApi.md#getSubscribedEnvironments) | **GET** /environments/subscriptions | 
[**publishEnvironment**](EnvironmentServiceApi.md#publishEnvironment) | **POST** /environments | 
[**subscribeEnvironment**](EnvironmentServiceApi.md#subscribeEnvironment) | **POST** /environments/{uuid}/subscribe | 
[**updateEnvironment**](EnvironmentServiceApi.md#updateEnvironment) | **PUT** /environments/{uuid} | 



## deleteEnvironment

> \SplFileObject deleteEnvironment($uuid)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\EnvironmentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 

try {
    $result = $apiInstance->deleteEnvironment($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentServiceApi->deleteEnvironment: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteEnvironmentSubscription

> \SplFileObject deleteEnvironmentSubscription($uuid)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\EnvironmentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 

try {
    $result = $apiInstance->deleteEnvironmentSubscription($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentServiceApi->deleteEnvironmentSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEnvironment

> \SplFileObject getEnvironment($uuid)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\EnvironmentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 

try {
    $result = $apiInstance->getEnvironment($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentServiceApi->getEnvironment: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEnvironments

> \SplFileObject getEnvironments($authorization, $created, $limit, $name, $offset)

Returns UUIDs of existing analyses.

Returns UUIDs of existing analyses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\EnvironmentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c
$created = 'true'; // string | - if Queryparam \"created=true\" only the UUIDs of own Requests are shown
$limit = '30'; // string | Used for offset pagination. Limit/Offset Paging would look like GET /request?limit=20&offset=100. This query would return the 20 rows starting with the 100th row
$name = 'name_example'; // string | 
$offset = '0'; // string | Used for offset pagination. Limit/Offset Paging would look like GET /request?limit=20&offset=100. This query would return the 20 rows starting with the 100th row

try {
    $result = $apiInstance->getEnvironments($authorization, $created, $limit, $name, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentServiceApi->getEnvironments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c | [optional]
 **created** | **string**| - if Queryparam \&quot;created&#x3D;true\&quot; only the UUIDs of own Requests are shown | [optional] [default to &#39;true&#39;]
 **limit** | **string**| Used for offset pagination. Limit/Offset Paging would look like GET /request?limit&#x3D;20&amp;offset&#x3D;100. This query would return the 20 rows starting with the 100th row | [optional] [default to &#39;30&#39;]
 **name** | **string**|  | [optional]
 **offset** | **string**| Used for offset pagination. Limit/Offset Paging would look like GET /request?limit&#x3D;20&amp;offset&#x3D;100. This query would return the 20 rows starting with the 100th row | [optional] [default to &#39;0&#39;]

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


## getPublishedEnvironments

> \SplFileObject getPublishedEnvironments($limit, $name, $offset)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\EnvironmentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = '30'; // string | 
$name = 'name_example'; // string | 
$offset = '0'; // string | 

try {
    $result = $apiInstance->getPublishedEnvironments($limit, $name, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentServiceApi->getPublishedEnvironments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **string**|  | [optional] [default to &#39;30&#39;]
 **name** | **string**|  | [optional]
 **offset** | **string**|  | [optional] [default to &#39;0&#39;]

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


## getSubscribedEnvironments

> \SplFileObject getSubscribedEnvironments($limit, $offset)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\EnvironmentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = '30'; // string | 
$offset = '0'; // string | 

try {
    $result = $apiInstance->getSubscribedEnvironments($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentServiceApi->getSubscribedEnvironments: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## publishEnvironment

> \SplFileObject publishEnvironment($body)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\EnvironmentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\JsonEnvironmentPublishingRequest(); // \OpenAPI\Client\Model\JsonEnvironmentPublishingRequest | 

try {
    $result = $apiInstance->publishEnvironment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentServiceApi->publishEnvironment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\JsonEnvironmentPublishingRequest**](../Model/JsonEnvironmentPublishingRequest.md)|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## subscribeEnvironment

> \SplFileObject subscribeEnvironment($uuid)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\EnvironmentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 

try {
    $result = $apiInstance->subscribeEnvironment($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentServiceApi->subscribeEnvironment: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateEnvironment

> \SplFileObject updateEnvironment($uuid, $body)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\EnvironmentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$body = new \OpenAPI\Client\Model\JsonEnvironment(); // \OpenAPI\Client\Model\JsonEnvironment | 

try {
    $result = $apiInstance->updateEnvironment($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentServiceApi->updateEnvironment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **body** | [**\OpenAPI\Client\Model\JsonEnvironment**](../Model/JsonEnvironment.md)|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json, application/xml
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

