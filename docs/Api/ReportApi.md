# Swagger\Client\ReportApi

All URIs are relative to *http://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportTradesPost**](ReportApi.md#reportTradesPost) | **POST** /report/trades | Get trade details for specified closed orders


# **reportTradesPost**
> \Swagger\Client\Model\ArrayOfTrades reportTradesPost($token, $body)

Get trade details for specified closed orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \Swagger\Client\Model\ReportTradesFilterType(); // \Swagger\Client\Model\ReportTradesFilterType | { \"orders\":[123]}

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
 **body** | [**\Swagger\Client\Model\ReportTradesFilterType**](../Model/ReportTradesFilterType.md)| { \&quot;orders\&quot;:[123]} |

### Return type

[**\Swagger\Client\Model\ArrayOfTrades**](../Model/ArrayOfTrades.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

