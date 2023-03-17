# Swagger\Client\GroupApi

All URIs are relative to *http://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**groupGroupNameGet**](GroupApi.md#groupGroupNameGet) | **GET** /group/{group_name} | Get group by name
[**groupsGet**](GroupApi.md#groupsGet) | **GET** /groups/ | Get list of groups


# **groupGroupNameGet**
> \Swagger\Client\Model\Group groupGroupNameGet($token, $group_name)

Get group by name



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$group_name = "group_name_example"; // string | The name that needs to be fetched.

try {
    $result = $apiInstance->groupGroupNameGet($token, $group_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->groupGroupNameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **group_name** | **string**| The name that needs to be fetched. |

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsGet**
> \Swagger\Client\Model\ArrayOfGroups groupsGet($token)

Get list of groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token

try {
    $result = $apiInstance->groupsGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->groupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |

### Return type

[**\Swagger\Client\Model\ArrayOfGroups**](../Model/ArrayOfGroups.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

