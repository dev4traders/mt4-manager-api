# D4T\MT4Sdk\JournalApi

All URIs are relative to *http://localhost:6542/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**journalHistoryGet**](JournalApi.md#journalHistoryGet) | **GET** /journal/history | Get list of journal records


# **journalHistoryGet**
> \D4T\MT4Sdk\Models\ArrayOfJournalRecords journalHistoryGet($token, $mode, $from, $to, $filter)

Get list of journal records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\JournalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$mode = 8.14; // float | Mode.
$from = "from_example"; // string | Date From, Example: \"from\"=\"2019.02.12 00:00\"
$to = "to_example"; // string | Date To, Example: \"to\"=\"2019.02.12 00:00\". If empty current time is used.
$filter = "filter_example"; // string | Filter

try {
    $result = $apiInstance->journalHistoryGet($token, $mode, $from, $to, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalApi->journalHistoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **mode** | **float**| Mode. |
 **from** | **string**| Date From, Example: \&quot;from\&quot;&#x3D;\&quot;2019.02.12 00:00\&quot; |
 **to** | **string**| Date To, Example: \&quot;to\&quot;&#x3D;\&quot;2019.02.12 00:00\&quot;. If empty current time is used. |
 **filter** | **string**| Filter | [optional]

### Return type

[**\D4T\MT4Sdk\Models\ArrayOfJournalRecords**](../Model/ArrayOfJournalRecords.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

