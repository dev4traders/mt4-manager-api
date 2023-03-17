# Swagger\Client\OnlineApi

All URIs are relative to *http://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tradesOnlineUserLoginGet**](OnlineApi.md#tradesOnlineUserLoginGet) | **GET** /trades/online/{user_login} | Get list of live trades for the user
[**usersOnlineGet**](OnlineApi.md#usersOnlineGet) | **GET** /users/online | Get list of online users


# **tradesOnlineUserLoginGet**
> \Swagger\Client\Model\ArrayOfTrades tradesOnlineUserLoginGet($token, $user_login)

Get list of live trades for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OnlineApi(
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
    echo 'Exception when calling OnlineApi->tradesOnlineUserLoginGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **user_login** | **string**| The login that needs to be fetched for. |

### Return type

[**\Swagger\Client\Model\ArrayOfTrades**](../Model/ArrayOfTrades.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersOnlineGet**
> \Swagger\Client\Model\ArrayOfOnlineUsers usersOnlineGet($token)

Get list of online users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OnlineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token

try {
    $result = $apiInstance->usersOnlineGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnlineApi->usersOnlineGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |

### Return type

[**\Swagger\Client\Model\ArrayOfOnlineUsers**](../Model/ArrayOfOnlineUsers.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

