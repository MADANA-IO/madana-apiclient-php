# OpenAPI\Client\UserServiceApi

All URIs are relative to *http://api.madana.io/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createObject**](UserServiceApi.md#createObject) | **POST** /users | Creates a new user object.
[**deleteObject**](UserServiceApi.md#deleteObject) | **DELETE** /users/{username} | Deletes an User based on the provided id and securitycontext.
[**deleteObject_0**](UserServiceApi.md#deleteObject_0) | **DELETE** /users/{username}/social/{platform}/{ident} | Deletes linked account from the user and securitycontext.
[**getAvatars**](UserServiceApi.md#getAvatars) | **GET** /users/{username}/avatars | 
[**getCertificates**](UserServiceApi.md#getCertificates) | **GET** /users/{username}/certificates | 
[**getEnclaveHistory**](UserServiceApi.md#getEnclaveHistory) | **GET** /users/{username}/enclavehistory | 
[**getObject2**](UserServiceApi.md#getObject2) | **GET** /users/{username} | 
[**setAvatar**](UserServiceApi.md#setAvatar) | **POST** /users/{username}/avatars | 
[**setSettings**](UserServiceApi.md#setSettings) | **POST** /users/{username}/settings | 
[**updateObject**](UserServiceApi.md#updateObject) | **PUT** /users/{username} | Updates Userproperties based on the provided user object.



## createObject

> \SplFileObject createObject($referrer, $body)

Creates a new user object.

Creates a new user object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$referrer = 'referrer_example'; // string | 
$body = new \OpenAPI\Client\Model\JsonMDNUser(); // \OpenAPI\Client\Model\JsonMDNUser | provided user object inheriting properties and credentials

try {
    $result = $apiInstance->createObject($referrer, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->createObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referrer** | **string**|  | [optional]
 **body** | [**\OpenAPI\Client\Model\JsonMDNUser**](../Model/JsonMDNUser.md)| provided user object inheriting properties and credentials | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteObject

> \SplFileObject deleteObject($username)

Deletes an User based on the provided id and securitycontext.

Deletes an User based on the provided id and securitycontext

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string | 

try {
    $result = $apiInstance->deleteObject($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->deleteObject: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteObject_0

> \SplFileObject deleteObject_0($ident, $platform, $username)

Deletes linked account from the user and securitycontext.

Deletes linked account from the user and securitycontext

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ident = 'ident_example'; // string | 
$platform = 'platform_example'; // string | 
$username = 'username_example'; // string | 

try {
    $result = $apiInstance->deleteObject_0($ident, $platform, $username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->deleteObject_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ident** | **string**|  |
 **platform** | **string**|  |
 **username** | **string**|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAvatars

> \SplFileObject getAvatars($username)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string | 

try {
    $result = $apiInstance->getAvatars($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->getAvatars: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCertificates

> \SplFileObject getCertificates($username)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string | 

try {
    $result = $apiInstance->getCertificates($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->getCertificates: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEnclaveHistory

> \SplFileObject getEnclaveHistory($username, $limit, $offset)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string | 
$limit = '30'; // string | 
$offset = '0'; // string | 

try {
    $result = $apiInstance->getEnclaveHistory($username, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->getEnclaveHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**|  |
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


## getObject2

> \SplFileObject getObject2($username)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string | 

try {
    $result = $apiInstance->getObject2($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->getObject2: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## setAvatar

> \SplFileObject setAvatar($username, $body)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string | 
$body = new \OpenAPI\Client\Model\JsonMDNUserProfileImage(); // \OpenAPI\Client\Model\JsonMDNUserProfileImage | 

try {
    $result = $apiInstance->setAvatar($username, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->setAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**|  |
 **body** | [**\OpenAPI\Client\Model\JsonMDNUserProfileImage**](../Model/JsonMDNUserProfileImage.md)|  | [optional]

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


## setSettings

> \SplFileObject setSettings($username, $body)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string | 
$body = new \OpenAPI\Client\Model\JsonMDNUserSetting(); // \OpenAPI\Client\Model\JsonMDNUserSetting | 

try {
    $result = $apiInstance->setSettings($username, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->setSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**|  |
 **body** | [**\OpenAPI\Client\Model\JsonMDNUserSetting**](../Model/JsonMDNUserSetting.md)|  | [optional]

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


## updateObject

> \SplFileObject updateObject($username, $body)

Updates Userproperties based on the provided user object.

Updates Userproperties based on the provided user object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string | 
$body = new \OpenAPI\Client\Model\JsonMDNUser(); // \OpenAPI\Client\Model\JsonMDNUser | the new user object inherting all properties that should be change

try {
    $result = $apiInstance->updateObject($username, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->updateObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**|  |
 **body** | [**\OpenAPI\Client\Model\JsonMDNUser**](../Model/JsonMDNUser.md)| the new user object inherting all properties that should be change | [optional]

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

