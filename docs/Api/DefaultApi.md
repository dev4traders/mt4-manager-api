# D4T\MT4Sdk\DefaultApi

All URIs are relative to *http://localhost:6542/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**initGet**](DefaultApi.md#initGet) | **GET** /init/ | Init manager
[**pingGet**](DefaultApi.md#pingGet) | **GET** /ping/ | Ping manager


# **initGet**
> \D4T\MT4Sdk\Models\InitReturnType initGet($server, $login, $password, $ping_seconds)

Init manager



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server = "server_example"; // string | MetaTrader server IP with port. Example: 127.0.0.1:443
$login = "login_example"; // string | MetaTrader manager login
$password = "password_example"; // string | MetaTrader manager password
$ping_seconds = 8.14; // float | Ping every. Default is 30 seconds

try {
    $result = $apiInstance->initGet($server, $login, $password, $ping_seconds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->initGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server** | **string**| MetaTrader server IP with port. Example: 127.0.0.1:443 |
 **login** | **string**| MetaTrader manager login |
 **password** | **string**| MetaTrader manager password |
 **ping_seconds** | **float**| Ping every. Default is 30 seconds | [optional]

### Return type

[**\D4T\MT4Sdk\Models\InitReturnType**](../Model/InitReturnType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pingGet**
> \D4T\MT4Sdk\Models\ReturnType pingGet($token)

Ping manager



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token

try {
    $result = $apiInstance->pingGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->pingGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |

### Return type

[**\D4T\MT4Sdk\Models\ReturnType**](../Model/ReturnType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

