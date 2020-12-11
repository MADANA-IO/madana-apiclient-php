# OpenAPI\Client\SocialServiceApi

All URIs are relative to http://api.madana.io/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMyProfile()**](SocialServiceApi.md#getMyProfile) | **GET** /social/profiles/me | 
[**getPlatforms2()**](SocialServiceApi.md#getPlatforms2) | **GET** /social | Returns all Platforms / Systems that can be Connected to the MADANA Service.
[**getRanking()**](SocialServiceApi.md#getRanking) | **GET** /social/ranking | Returns the Ranking by PTS within the System.
[**getSocialPlatformFeed()**](SocialServiceApi.md#getSocialPlatformFeed) | **GET** /social/feed/{platform} | 
[**getUserProfile()**](SocialServiceApi.md#getUserProfile) | **GET** /social/profiles/{username} | 
[**getUserProfile_0()**](SocialServiceApi.md#getUserProfile_0) | **GET** /social/profiles/{username}/simple | 


## `getMyProfile()`

```php
getMyProfile(): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getMyProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialServiceApi->getMyProfile: ', $e->getMessage(), PHP_EOL;
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

## `getPlatforms2()`

```php
getPlatforms2(): \SplFileObject
```

Returns all Platforms / Systems that can be Connected to the MADANA Service.

Returns all Platforms / Systems that can be Connected to the MADANA Service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPlatforms2();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialServiceApi->getPlatforms2: ', $e->getMessage(), PHP_EOL;
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

## `getRanking()`

```php
getRanking($limit, $offset): \SplFileObject
```

Returns the Ranking by PTS within the System.

Returns the Ranking by PTS within the System

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = '99'; // string
$offset = '0'; // string

try {
    $result = $apiInstance->getRanking($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialServiceApi->getRanking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **string**|  | [optional] [default to &#39;99&#39;]
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

## `getSocialPlatformFeed()`

```php
getSocialPlatformFeed($platform): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$platform = 'platform_example'; // string

try {
    $result = $apiInstance->getSocialPlatformFeed($platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialServiceApi->getSocialPlatformFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**|  |

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

## `getUserProfile()`

```php
getUserProfile($username, $simple): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string
$simple = 'false'; // string

try {
    $result = $apiInstance->getUserProfile($username, $simple);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialServiceApi->getUserProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**|  |
 **simple** | **string**|  | [optional] [default to &#39;false&#39;]

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

## `getUserProfile_0()`

```php
getUserProfile_0($username): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SocialServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string

try {
    $result = $apiInstance->getUserProfile_0($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialServiceApi->getUserProfile_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**|  |

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
