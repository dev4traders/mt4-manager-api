# D4T\MT4Sdk\OldApi

All URIs are relative to *http://localhost:6542/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tradesReportPost**](OldApi.md#tradesReportPost) | **POST** /trades/report | Get trade details for specified closed orders
[**usersReportPost**](OldApi.md#usersReportPost) | **POST** /users/report | Get list of user trades for specified logins


# **tradesReportPost**
> \D4T\MT4Sdk\Models\ArrayOfTrades tradesReportPost($token, $body)

Get trade details for specified closed orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\OldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT4Sdk\Models\ReportTradesFilterType(); // \D4T\MT4Sdk\Models\ReportTradesFilterType | { \"orders\":[123]}

try {
    $result = $apiInstance->tradesReportPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OldApi->tradesReportPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **body** | [**\D4T\MT4Sdk\Models\ReportTradesFilterType**](../Model/ReportTradesFilterType.md)| { \&quot;orders\&quot;:[123]} |

### Return type

[**\D4T\MT4Sdk\Models\ArrayOfTrades**](../Model/ArrayOfTrades.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersReportPost**
> \D4T\MT4Sdk\Models\ArrayOfTrades usersReportPost($token, $body)

Get list of user trades for specified logins

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\OldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT4Sdk\Models\UserTradesFilterType(); // \D4T\MT4Sdk\Models\UserTradesFilterType | { \"logins\":[123],\"from\": \"2019.02.12 00:00\", \"to\":\"2019.04.14 00:00\", \"types\": \"6,7\"}

try {
    $result = $apiInstance->usersReportPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OldApi->usersReportPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **body** | [**\D4T\MT4Sdk\Models\UserTradesFilterType**](../Model/UserTradesFilterType.md)| { \&quot;logins\&quot;:[123],\&quot;from\&quot;: \&quot;2019.02.12 00:00\&quot;, \&quot;to\&quot;:\&quot;2019.04.14 00:00\&quot;, \&quot;types\&quot;: \&quot;6,7\&quot;} |

### Return type

[**\D4T\MT4Sdk\Models\ArrayOfTrades**](../Model/ArrayOfTrades.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

