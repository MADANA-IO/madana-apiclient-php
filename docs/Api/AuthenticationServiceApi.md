# OpenAPI\Client\AuthenticationServiceApi

All URIs are relative to http://api.madana.io/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticateApplication()**](AuthenticationServiceApi.md#authenticateApplication) | **POST** /authentication/application | Authenticates a new application and returns the token.
[**authenticateEthereumWallet()**](AuthenticationServiceApi.md#authenticateEthereumWallet) | **POST** /authentication/ethereum/{wallet} | 
[**authenticateUser()**](AuthenticationServiceApi.md#authenticateUser) | **POST** /authentication | Authenticates a new user and returns the token (  forbidden if the credentials cannot be validated ).
[**authenticateWithEthereumChallenge()**](AuthenticationServiceApi.md#authenticateWithEthereumChallenge) | **POST** /authentication/ethereum/{wallet}/challenge | 
[**getFractalAuthenticationURL()**](AuthenticationServiceApi.md#getFractalAuthenticationURL) | **GET** /authentication/fractal | Returns the AUthorization URL to verify a Twitter Accounts.
[**getNonceForEthereumWallet()**](AuthenticationServiceApi.md#getNonceForEthereumWallet) | **GET** /authentication/ethereum/{wallet} | Returns a nonce for the client which is used as content for the to be created signature.
[**getObject()**](AuthenticationServiceApi.md#getObject) | **GET** /authentication | Used to validate the active connection with the API.
[**getTwitterAuthenticationURL()**](AuthenticationServiceApi.md#getTwitterAuthenticationURL) | **GET** /authentication/twitter | Returns the AUthorization URL to verify a Twitter Accounts.
[**setFacebookUID()**](AuthenticationServiceApi.md#setFacebookUID) | **POST** /authentication/facebook | Used as Callback URL when users have successfully authorized their facbeook account.
[**setFractalUID()**](AuthenticationServiceApi.md#setFractalUID) | **POST** /authentication/fractal | 
[**setTwitterUID()**](AuthenticationServiceApi.md#setTwitterUID) | **POST** /authentication/twitter | 


## `authenticateApplication()`

```php
authenticateApplication($body): \OpenAPI\Client\Model\JsonMDNToken
```

Authenticates a new application and returns the token.

Authenticates a new application and returns the token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\JsonMDNCertificate(); // \OpenAPI\Client\Model\JsonMDNCertificate | the credentials used to validate the user

try {
    $result = $apiInstance->authenticateApplication($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->authenticateApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\JsonMDNCertificate**](../Model/JsonMDNCertificate.md)| the credentials used to validate the user | [optional]

### Return type

[**\OpenAPI\Client\Model\JsonMDNToken**](../Model/JsonMDNToken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authenticateEthereumWallet()`

```php
authenticateEthereumWallet($wallet, $body): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet = 'wallet_example'; // string | the wallet which should be authenticated
$body = new \OpenAPI\Client\Model\JsonMDNOAuthToken(); // \OpenAPI\Client\Model\JsonMDNOAuthToken | Token containing nonce and signate

try {
    $result = $apiInstance->authenticateEthereumWallet($wallet, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->authenticateEthereumWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet** | **string**| the wallet which should be authenticated |
 **body** | [**\OpenAPI\Client\Model\JsonMDNOAuthToken**](../Model/JsonMDNOAuthToken.md)| Token containing nonce and signate | [optional]

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

## `authenticateUser()`

```php
authenticateUser($body): \OpenAPI\Client\Model\JsonMDNToken
```

Authenticates a new user and returns the token (  forbidden if the credentials cannot be validated ).

Authenticates a new user and returns the token (  forbidden if the credentials cannot be validated )

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\JsonMDNUserCredentials(); // \OpenAPI\Client\Model\JsonMDNUserCredentials | the credentials used to validate the user

try {
    $result = $apiInstance->authenticateUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->authenticateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\JsonMDNUserCredentials**](../Model/JsonMDNUserCredentials.md)| the credentials used to validate the user | [optional]

### Return type

[**\OpenAPI\Client\Model\JsonMDNToken**](../Model/JsonMDNToken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authenticateWithEthereumChallenge()`

```php
authenticateWithEthereumChallenge($wallet, $body): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet = 'wallet_example'; // string | the wallet which should be authenticated
$body = new \OpenAPI\Client\Model\JsonMDNOAuthToken(); // \OpenAPI\Client\Model\JsonMDNOAuthToken | Token containing nonce and signate

try {
    $result = $apiInstance->authenticateWithEthereumChallenge($wallet, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->authenticateWithEthereumChallenge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet** | **string**| the wallet which should be authenticated |
 **body** | [**\OpenAPI\Client\Model\JsonMDNOAuthToken**](../Model/JsonMDNOAuthToken.md)| Token containing nonce and signate | [optional]

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

## `getFractalAuthenticationURL()`

```php
getFractalAuthenticationURL(): \SplFileObject
```

Returns the AUthorization URL to verify a Twitter Accounts.

Returns the AUthorization URL to verify a Twitter Accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getFractalAuthenticationURL();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->getFractalAuthenticationURL: ', $e->getMessage(), PHP_EOL;
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

## `getNonceForEthereumWallet()`

```php
getNonceForEthereumWallet($wallet, $authorization): \OpenAPI\Client\Model\JsonMDNToken
```

Returns a nonce for the client which is used as content for the to be created signature.

Returns a nonce for the client which is used as content for the to be created signature

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet = 'wallet_example'; // string | - wallet address as String * @HTTP 417 If the address is not valid
$authorization = 'authorization_example'; // string | Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c

try {
    $result = $apiInstance->getNonceForEthereumWallet($wallet, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->getNonceForEthereumWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet** | **string**| - wallet address as String * @HTTP 417 If the address is not valid |
 **authorization** | **string**| Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c | [optional]

### Return type

[**\OpenAPI\Client\Model\JsonMDNToken**](../Model/JsonMDNToken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObject()`

```php
getObject(): map[string,object]
```

Used to validate the active connection with the API.

Used to validate the active connection with the API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getObject();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->getObject: ', $e->getMessage(), PHP_EOL;
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

## `getTwitterAuthenticationURL()`

```php
getTwitterAuthenticationURL(): \SplFileObject
```

Returns the AUthorization URL to verify a Twitter Accounts.

Returns the AUthorization URL to verify a Twitter Accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getTwitterAuthenticationURL();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->getTwitterAuthenticationURL: ', $e->getMessage(), PHP_EOL;
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

## `setFacebookUID()`

```php
setFacebookUID($body): \SplFileObject
```

Used as Callback URL when users have successfully authorized their facbeook account.

Used as Callback URL when users have successfully authorized their facbeook account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string

try {
    $result = $apiInstance->setFacebookUID($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->setFacebookUID: ', $e->getMessage(), PHP_EOL;
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

## `setFractalUID()`

```php
setFractalUID($body): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string

try {
    $result = $apiInstance->setFractalUID($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->setFractalUID: ', $e->getMessage(), PHP_EOL;
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

## `setTwitterUID()`

```php
setTwitterUID($body): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\JsonMDNOAuthToken(); // \OpenAPI\Client\Model\JsonMDNOAuthToken

try {
    $result = $apiInstance->setTwitterUID($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->setTwitterUID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\JsonMDNOAuthToken**](../Model/JsonMDNOAuthToken.md)|  | [optional]

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
