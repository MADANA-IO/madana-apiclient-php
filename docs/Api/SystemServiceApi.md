# OpenAPI\Client\SystemServiceApi

All URIs are relative to http://api.madana.io/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllObjects()**](SystemServiceApi.md#getAllObjects) | **GET** /system/health | 
[**getApplication2()**](SystemServiceApi.md#getApplication2) | **GET** /system/usage | Return the current application usage.


## `getAllObjects()`

```php
getAllObjects(): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SystemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllObjects();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemServiceApi->getAllObjects: ', $e->getMessage(), PHP_EOL;
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

## `getApplication2()`

```php
getApplication2(): map[string,object]
```

Return the current application usage.

Return the current application usage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SystemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getApplication2();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemServiceApi->getApplication2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**map[string,object]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
