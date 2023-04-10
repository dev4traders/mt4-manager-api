# D4T\MT4Sdk\TradeApi

All URIs are relative to *http://localhost:6542/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tradeClosePost**](TradeApi.md#tradeClosePost) | **POST** /trade/close | Close order
[**tradeOpenPost**](TradeApi.md#tradeOpenPost) | **POST** /trade/open | Open order
[**tradeUpdatePost**](TradeApi.md#tradeUpdatePost) | **POST** /trade/update | Update order
[**tradesCancelPost**](TradeApi.md#tradesCancelPost) | **POST** /trades/cancel | Cancel pending order
[**tradesHistoryUserLoginGet**](TradeApi.md#tradesHistoryUserLoginGet) | **GET** /trades/history/{user_login} | Get list of history trades for the user
[**tradesOnlineUserLoginGet**](TradeApi.md#tradesOnlineUserLoginGet) | **GET** /trades/online/{user_login} | Get list of live trades for the user


# **tradeClosePost**
> \D4T\MT4Sdk\Models\TradeType tradeClosePost($token, $body)

Close order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT4Sdk\Models\CloseTradeFilterType(); // \D4T\MT4Sdk\Models\CloseTradeFilterType | { \"ticket\": 12344, \"lots\":100, \"price\":1.4567}

try {
    $result = $apiInstance->tradeClosePost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->tradeClosePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **body** | [**\D4T\MT4Sdk\Models\CloseTradeFilterType**](../Model/CloseTradeFilterType.md)| { \&quot;ticket\&quot;: 12344, \&quot;lots\&quot;:100, \&quot;price\&quot;:1.4567} |

### Return type

[**\D4T\MT4Sdk\Models\TradeType**](../Model/TradeType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tradeOpenPost**
> \D4T\MT4Sdk\Models\TradeType tradeOpenPost($token, $body)

Open order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT4Sdk\Models\OpenTradeFilterType(); // \D4T\MT4Sdk\Models\OpenTradeFilterType | { \"login\": 37011, \"cmd\": 0,\"lots\":0.01,\"symbol\":\"EURUSD\", \"price\":1.3456, \"sl\":0,\"tp\":0}

try {
    $result = $apiInstance->tradeOpenPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->tradeOpenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **body** | [**\D4T\MT4Sdk\Models\OpenTradeFilterType**](../Model/OpenTradeFilterType.md)| { \&quot;login\&quot;: 37011, \&quot;cmd\&quot;: 0,\&quot;lots\&quot;:0.01,\&quot;symbol\&quot;:\&quot;EURUSD\&quot;, \&quot;price\&quot;:1.3456, \&quot;sl\&quot;:0,\&quot;tp\&quot;:0} |

### Return type

[**\D4T\MT4Sdk\Models\TradeType**](../Model/TradeType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tradeUpdatePost**
> \D4T\MT4Sdk\Models\TradeType tradeUpdatePost($token, $body)

Update order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT4Sdk\Models\ModifyTradeFilterType(); // \D4T\MT4Sdk\Models\ModifyTradeFilterType | { \"ticket\": 12344, \"login\": 123121, \"sl\":0,\"tp\":0, \"price\": 1.1111}

try {
    $result = $apiInstance->tradeUpdatePost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->tradeUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **body** | [**\D4T\MT4Sdk\Models\ModifyTradeFilterType**](../Model/ModifyTradeFilterType.md)| { \&quot;ticket\&quot;: 12344, \&quot;login\&quot;: 123121, \&quot;sl\&quot;:0,\&quot;tp\&quot;:0, \&quot;price\&quot;: 1.1111} |

### Return type

[**\D4T\MT4Sdk\Models\TradeType**](../Model/TradeType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tradesCancelPost**
> \D4T\MT4Sdk\Models\TradeType tradesCancelPost($token, $body)

Cancel pending order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT4Sdk\Models\CancelTradeFilterType(); // \D4T\MT4Sdk\Models\CancelTradeFilterType | { \"ticket\": 12344}

try {
    $result = $apiInstance->tradesCancelPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->tradesCancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **body** | [**\D4T\MT4Sdk\Models\CancelTradeFilterType**](../Model/CancelTradeFilterType.md)| { \&quot;ticket\&quot;: 12344} |

### Return type

[**\D4T\MT4Sdk\Models\TradeType**](../Model/TradeType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tradesHistoryUserLoginGet**
> \D4T\MT4Sdk\Models\ArrayOfTrades tradesHistoryUserLoginGet($token, $user_login, $from, $to, $days_back, $types)

Get list of history trades for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$user_login = "user_login_example"; // string | The login that needs to be fetched for.
$from = "from_example"; // string | Date From, Example: \"from\"=\"2019.02.12 00:00\"
$to = "to_example"; // string | Date To, Example: \"to\"=\"2019.02.12 00:00\". If empty current time is used.
$days_back = "days_back_example"; // string | Check \"days_back\" Days from To Date
$types = "types_example"; // string | Trade Types, Example: \"types\"=\"0,1\", will return all buy and sell trades

try {
    $result = $apiInstance->tradesHistoryUserLoginGet($token, $user_login, $from, $to, $days_back, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->tradesHistoryUserLoginGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **user_login** | **string**| The login that needs to be fetched for. |
 **from** | **string**| Date From, Example: \&quot;from\&quot;&#x3D;\&quot;2019.02.12 00:00\&quot; | [optional]
 **to** | **string**| Date To, Example: \&quot;to\&quot;&#x3D;\&quot;2019.02.12 00:00\&quot;. If empty current time is used. | [optional]
 **days_back** | **string**| Check \&quot;days_back\&quot; Days from To Date | [optional]
 **types** | **string**| Trade Types, Example: \&quot;types\&quot;&#x3D;\&quot;0,1\&quot;, will return all buy and sell trades | [optional]

### Return type

[**\D4T\MT4Sdk\Models\ArrayOfTrades**](../Model/ArrayOfTrades.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tradesOnlineUserLoginGet**
> \D4T\MT4Sdk\Models\ArrayOfTrades tradesOnlineUserLoginGet($token, $user_login)

Get list of live trades for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$user_login = "user_login_example"; // string | The login that needs to be fetched for.

try {
    $result = $apiInstance->tradesOnlineUserLoginGet($token, $user_login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->tradesOnlineUserLoginGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **user_login** | **string**| The login that needs to be fetched for. |

### Return type

[**\D4T\MT4Sdk\Models\ArrayOfTrades**](../Model/ArrayOfTrades.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

