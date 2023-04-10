# D4T\MT4Sdk\ReportApi

All URIs are relative to *http://localhost:6542/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportTradesPost**](ReportApi.md#reportTradesPost) | **POST** /report/trades | Get trade details for specified closed orders


# **reportTradesPost**
> \D4T\MT4Sdk\Models\ArrayOfTrades reportTradesPost($token, $body)

Get trade details for specified closed orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT4Sdk\Models\ReportTradesFilterType(); // \D4T\MT4Sdk\Models\ReportTradesFilterType | { \"orders\":[123]}

try {
    $result = $apiInstance->reportTradesPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportTradesPost: ', $e->getMessage(), PHP_EOL;
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

