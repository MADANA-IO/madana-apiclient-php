# OpenAPI\Client\SocialPlatformServiceApi

All URIs are relative to http://api.madana.io/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPlatforms()**](SocialPlatformServiceApi.md#getPlatforms) | **GET** /platforms | Used to Handle Incoming Webhooks from Facebook.
[**listenTwitterWebhook()**](SocialPlatformServiceApi.md#listenTwitterWebhook) | **POST** /platforms/twitter | Used to Handle Incoming Webhooks from Facebook.
[**registerTwitterWebhook()**](SocialPlatformServiceApi.md#registerTwitterWebhook) | **GET** /platforms/twitter | Used to Handle Incoming Webhooks from Twitter.


## `getPlatforms()`

```php
getPlatforms($body): \SplFileObject
```

Used to Handle Incoming Webhooks from Facebook.

Used to Handle Incoming Webhooks from Facebook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPlatformServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string

try {
    $result = $apiInstance->getPlatforms($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPlatformServiceApi->getPlatforms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**|  | [optional]

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

## `listenTwitterWebhook()`

```php
listenTwitterWebhook($body): \SplFileObject
```

Used to Handle Incoming Webhooks from Facebook.

Used to Handle Incoming Webhooks from Facebook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPlatformServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string

try {
    $result = $apiInstance->listenTwitterWebhook($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPlatformServiceApi->listenTwitterWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**|  | [optional]

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

## `registerTwitterWebhook()`

```php
registerTwitterWebhook($crc_token): \SplFileObject
```

Used to Handle Incoming Webhooks from Twitter.

Used to Handle Incoming Webhooks from Twitter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialPlatformServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$crc_token = 'crc_token_example'; // string

try {
    $result = $apiInstance->registerTwitterWebhook($crc_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialPlatformServiceApi->registerTwitterWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crc_token** | **string**|  | [optional]

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
