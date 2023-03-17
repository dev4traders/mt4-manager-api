# Swagger\Client\OldApi

All URIs are relative to *http://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tradesReportPost**](OldApi.md#tradesReportPost) | **POST** /trades/report | Get trade details for specified closed orders
[**usersReportPost**](OldApi.md#usersReportPost) | **POST** /users/report | Get list of user trades for specified logins


# **tradesReportPost**
> \Swagger\Client\Model\ArrayOfTrades tradesReportPost($token, $body)

Get trade details for specified closed orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \Swagger\Client\Model\ReportTradesFilterType(); // \Swagger\Client\Model\ReportTradesFilterType | { \"orders\":[123]}

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
 **body** | [**\Swagger\Client\Model\ReportTradesFilterType**](../Model/ReportTradesFilterType.md)| { \&quot;orders\&quot;:[123]} |

### Return type

[**\Swagger\Client\Model\ArrayOfTrades**](../Model/ArrayOfTrades.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersReportPost**
> \Swagger\Client\Model\ArrayOfTrades usersReportPost($token, $body)

Get list of user trades for specified logins

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \Swagger\Client\Model\UserTradesFilterType(); // \Swagger\Client\Model\UserTradesFilterType | { \"logins\":[123],\"from\": \"2019.02.12 00:00\", \"to\":\"2019.04.14 00:00\", \"types\": \"6,7\"}

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
 **body** | [**\Swagger\Client\Model\UserTradesFilterType**](../Model/UserTradesFilterType.md)| { \&quot;logins\&quot;:[123],\&quot;from\&quot;: \&quot;2019.02.12 00:00\&quot;, \&quot;to\&quot;:\&quot;2019.04.14 00:00\&quot;, \&quot;types\&quot;: \&quot;6,7\&quot;} |

### Return type

[**\Swagger\Client\Model\ArrayOfTrades**](../Model/ArrayOfTrades.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

