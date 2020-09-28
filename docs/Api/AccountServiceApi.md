# OpenAPI\Client\AccountServiceApi

All URIs are relative to *http://api.madana.io/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateUser**](AccountServiceApi.md#activateUser) | **GET** /account/activation/{token} | 
[**createPasswordReset**](AccountServiceApi.md#createPasswordReset) | **POST** /account/password | Sends an Password reset mail to the given MailAddress.
[**requestVerificationMail**](AccountServiceApi.md#requestVerificationMail) | **GET** /account/verifymail | Used to request a new  activation-mail for the user.
[**updatePassword**](AccountServiceApi.md#updatePassword) | **PUT** /account/password | Receives the Password reset and tries to set the provided password for the user.



## activateUser

> \SplFileObject activateUser($token)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AccountServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | 

try {
    $result = $apiInstance->activateUser($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServiceApi->activateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |

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


## createPasswordReset

> \SplFileObject createPasswordReset($body)

Sends an Password reset mail to the given MailAddress.

Sends an Password reset mail to the given MailAddress

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AccountServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\JsonMDNMailAddress(); // \OpenAPI\Client\Model\JsonMDNMailAddress | - the MaiAddress under which the user has signed up

try {
    $result = $apiInstance->createPasswordReset($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServiceApi->createPasswordReset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\JsonMDNMailAddress**](../Model/JsonMDNMailAddress.md)| - the MaiAddress under which the user has signed up | [optional]

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


## requestVerificationMail

> map[string,object] requestVerificationMail()

Used to request a new  activation-mail for the user.

Used to request a new  activation-mail for the user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AccountServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->requestVerificationMail();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServiceApi->requestVerificationMail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**map[string,object]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updatePassword

> \SplFileObject updatePassword($body)

Receives the Password reset and tries to set the provided password for the user.

Receives the Password reset and tries to set the provided password for the user. The Password will only be set if a valid token is provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AccountServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\JsonMDNPasswordReset(); // \OpenAPI\Client\Model\JsonMDNPasswordReset | - the MDN_PasswordReset Object

try {
    $result = $apiInstance->updatePassword($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServiceApi->updatePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\JsonMDNPasswordReset**](../Model/JsonMDNPasswordReset.md)| - the MDN_PasswordReset Object | [optional]

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

