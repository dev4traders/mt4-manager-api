# D4T\MT4Sdk\SymbolApi

All URIs are relative to *http://localhost:6542/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**symbolsGet**](SymbolApi.md#symbolsGet) | **GET** /symbols/ | Get list of market symbols
[**symgroupsGet**](SymbolApi.md#symgroupsGet) | **GET** /symgroups/ | Get list of symbol groups
[**updateSymbol**](SymbolApi.md#updateSymbol) | **POST** /symbol/update | Update symbol


# **symbolsGet**
> \D4T\MT4Sdk\Models\ArrayOfSymbols symbolsGet($token)

Get list of market symbols

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\SymbolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token

try {
    $result = $apiInstance->symbolsGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SymbolApi->symbolsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |

### Return type

[**\D4T\MT4Sdk\Models\ArrayOfSymbols**](../Model/ArrayOfSymbols.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **symgroupsGet**
> \D4T\MT4Sdk\Models\ArrayOfSymGroups symgroupsGet($token)

Get list of symbol groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\SymbolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token

try {
    $result = $apiInstance->symgroupsGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SymbolApi->symgroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |

### Return type

[**\D4T\MT4Sdk\Models\ArrayOfSymGroups**](../Model/ArrayOfSymGroups.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSymbol**
> updateSymbol($token, $body)

Update symbol

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\SymbolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT4Sdk\Models\Symbol(); // \D4T\MT4Sdk\Models\Symbol | {\"symbol\": \"EURUSD\", \"swap_long\":1.1, \"swap_short\":1.2}

try {
    $apiInstance->updateSymbol($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling SymbolApi->updateSymbol: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **body** | [**\D4T\MT4Sdk\Models\Symbol**](../Model/Symbol.md)| {\&quot;symbol\&quot;: \&quot;EURUSD\&quot;, \&quot;swap_long\&quot;:1.1, \&quot;swap_short\&quot;:1.2} |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

