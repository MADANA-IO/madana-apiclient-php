# OpenAPI\Client\InvoiceServiceApi

All URIs are relative to http://api.madana.io/rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getActiveSaaSSubscriptions()**](InvoiceServiceApi.md#getActiveSaaSSubscriptions) | **GET** /invoices | 


## `getActiveSaaSSubscriptions()`

```php
getActiveSaaSSubscriptions($dayssince): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InvoiceServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dayssince = '366'; // string

try {
    $result = $apiInstance->getActiveSaaSSubscriptions($dayssince);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceServiceApi->getActiveSaaSSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dayssince** | **string**|  | [optional] [default to &#39;366&#39;]

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
