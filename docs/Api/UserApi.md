# D4T\MT4Sdk\UserApi

All URIs are relative to *http://localhost:6542/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkUser**](UserApi.md#checkUser) | **POST** /user/check | Check user exists
[**deleteUser**](UserApi.md#deleteUser) | **DELETE** /user/{user_login} | Delete user
[**updateUser**](UserApi.md#updateUser) | **POST** /user/update/{user_login} | Update user
[**userAddPost**](UserApi.md#userAddPost) | **POST** /user/add | Create user
[**userAuthPost**](UserApi.md#userAuthPost) | **POST** /user/auth | Get user by credentials
[**userDepositPost**](UserApi.md#userDepositPost) | **POST** /user/deposit | Deposit account
[**userMarginUserLoginGet**](UserApi.md#userMarginUserLoginGet) | **GET** /user/margin/{user_login} | Get margin by user login
[**userResetPwdPost**](UserApi.md#userResetPwdPost) | **POST** /user/reset_pwd | Reset password
[**userUserLoginGet**](UserApi.md#userUserLoginGet) | **GET** /user/{user_login} | Get user by user login
[**userWithdrawPost**](UserApi.md#userWithdrawPost) | **POST** /user/withdraw | Withdraw account
[**usersBulkAddPost**](UserApi.md#usersBulkAddPost) | **POST** /users/bulk_add | Create users
[**usersGet**](UserApi.md#usersGet) | **GET** /users/ | Get list of all users
[**usersOnlineGet**](UserApi.md#usersOnlineGet) | **GET** /users/online | Get list of online users


# **checkUser**
> checkUser($token, $body)

Check user exists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT4Sdk\Models\UserAuth(); // \D4T\MT4Sdk\Models\UserAuth | {\"login\": 1, \"password\":\"pwd\"}

try {
    $apiInstance->checkUser($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->checkUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **body** | [**\D4T\MT4Sdk\Models\UserAuth**](../Model/UserAuth.md)| {\&quot;login\&quot;: 1, \&quot;password\&quot;:\&quot;pwd\&quot;} |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUser**
> deleteUser($token, $user_login)

Delete user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$user_login = "user_login_example"; // string | The login that needs to be deleted

try {
    $apiInstance->deleteUser($token, $user_login);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **user_login** | **string**| The login that needs to be deleted |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUser**
> updateUser($token, $user_login, $body)

Update user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$user_login = "user_login_example"; // string | The login that needs to be updated.
$body = new \D4T\MT4Sdk\Models\User(); // \D4T\MT4Sdk\Models\User | {\"password\":\"new_pwd\", \"name\":\"new_name\"}

try {
    $apiInstance->updateUser($token, $user_login, $body);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **user_login** | **string**| The login that needs to be updated. |
 **body** | [**\D4T\MT4Sdk\Models\User**](../Model/User.md)| {\&quot;password\&quot;:\&quot;new_pwd\&quot;, \&quot;name\&quot;:\&quot;new_name\&quot;} |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userAddPost**
> \D4T\MT4Sdk\Models\UserReturnType userAddPost($token, $body)

Create user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT4Sdk\Models\User(); // \D4T\MT4Sdk\Models\User | {\"login\": 1, \"password\":\"pwd\", \"name\":\"name\", \"email\": \"1@1.com\"}

try {
    $result = $apiInstance->userAddPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **body** | [**\D4T\MT4Sdk\Models\User**](../Model/User.md)| {\&quot;login\&quot;: 1, \&quot;password\&quot;:\&quot;pwd\&quot;, \&quot;name\&quot;:\&quot;name\&quot;, \&quot;email\&quot;: \&quot;1@1.com\&quot;} |

### Return type

[**\D4T\MT4Sdk\Models\UserReturnType**](../Model/UserReturnType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userAuthPost**
> \D4T\MT4Sdk\Models\UserResponse userAuthPost($token, $body)

Get user by credentials

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT4Sdk\Models\UserAuth(); // \D4T\MT4Sdk\Models\UserAuth | {\"login\": 1, \"password\":\"pwd\"}

try {
    $result = $apiInstance->userAuthPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userAuthPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **body** | [**\D4T\MT4Sdk\Models\UserAuth**](../Model/UserAuth.md)| {\&quot;login\&quot;: 1, \&quot;password\&quot;:\&quot;pwd\&quot;} |

### Return type

[**\D4T\MT4Sdk\Models\UserResponse**](../Model/UserResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userDepositPost**
> userDepositPost($token, $body)

Deposit account



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT4Sdk\Models\BalanceType(); // \D4T\MT4Sdk\Models\BalanceType | {\"login\": 1, \"amount\":1, \"is_credit\": true, \"comment\": \"F.Management\"}

try {
    $apiInstance->userDepositPost($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userDepositPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **body** | [**\D4T\MT4Sdk\Models\BalanceType**](../Model/BalanceType.md)| {\&quot;login\&quot;: 1, \&quot;amount\&quot;:1, \&quot;is_credit\&quot;: true, \&quot;comment\&quot;: \&quot;F.Management\&quot;} |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userMarginUserLoginGet**
> \D4T\MT4Sdk\Models\Margin userMarginUserLoginGet($token, $user_login)

Get margin by user login



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$user_login = "user_login_example"; // string | The name that needs to be fetched. Use 3 for testing.

try {
    $result = $apiInstance->userMarginUserLoginGet($token, $user_login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userMarginUserLoginGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **user_login** | **string**| The name that needs to be fetched. Use 3 for testing. |

### Return type

[**\D4T\MT4Sdk\Models\Margin**](../Model/Margin.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userResetPwdPost**
> userResetPwdPost($token, $body)

Reset password

Reset password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT4Sdk\Models\ResetPwdType(); // \D4T\MT4Sdk\Models\ResetPwdType | {\"login\": 1, \"password\":\"new_pwd\", \"change_investor\":0}

try {
    $apiInstance->userResetPwdPost($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userResetPwdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **body** | [**\D4T\MT4Sdk\Models\ResetPwdType**](../Model/ResetPwdType.md)| {\&quot;login\&quot;: 1, \&quot;password\&quot;:\&quot;new_pwd\&quot;, \&quot;change_investor\&quot;:0} |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userUserLoginGet**
> \D4T\MT4Sdk\Models\UserResponse userUserLoginGet($token, $user_login)

Get user by user login



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$user_login = "user_login_example"; // string | The name that needs to be fetched. Use 3 for testing.

try {
    $result = $apiInstance->userUserLoginGet($token, $user_login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userUserLoginGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **user_login** | **string**| The name that needs to be fetched. Use 3 for testing. |

### Return type

[**\D4T\MT4Sdk\Models\UserResponse**](../Model/UserResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userWithdrawPost**
> userWithdrawPost($token, $body)

Withdraw account

Withdraw account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT4Sdk\Models\BalanceType(); // \D4T\MT4Sdk\Models\BalanceType | {\"login\": 1, \"amount\":1, \"is_credit\": true, \"check_free_margin\": false, \"comment\": \"F.Management\"}

try {
    $apiInstance->userWithdrawPost($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userWithdrawPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **body** | [**\D4T\MT4Sdk\Models\BalanceType**](../Model/BalanceType.md)| {\&quot;login\&quot;: 1, \&quot;amount\&quot;:1, \&quot;is_credit\&quot;: true, \&quot;check_free_margin\&quot;: false, \&quot;comment\&quot;: \&quot;F.Management\&quot;} |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersBulkAddPost**
> \D4T\MT4Sdk\Models\ArrayOfUserResponses usersBulkAddPost($token, $body)

Create users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token
$body = new \D4T\MT4Sdk\Models\Users(); // \D4T\MT4Sdk\Models\Users | {\"groupname\":\"demohfx-usd\",\"password\":\"123456Aa\", \"firstname\":\"test\", \"firstname\":\"test\", \"email\": \"test@test.com\"}

try {
    $result = $apiInstance->usersBulkAddPost($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersBulkAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |
 **body** | [**\D4T\MT4Sdk\Models\Users**](../Model/Users.md)| {\&quot;groupname\&quot;:\&quot;demohfx-usd\&quot;,\&quot;password\&quot;:\&quot;123456Aa\&quot;, \&quot;firstname\&quot;:\&quot;test\&quot;, \&quot;firstname\&quot;:\&quot;test\&quot;, \&quot;email\&quot;: \&quot;test@test.com\&quot;} |

### Return type

[**\D4T\MT4Sdk\Models\ArrayOfUserResponses**](../Model/ArrayOfUserResponses.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersGet**
> \D4T\MT4Sdk\Models\ArrayOfLogins usersGet($token)

Get list of all users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token

try {
    $result = $apiInstance->usersGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |

### Return type

[**\D4T\MT4Sdk\Models\ArrayOfLogins**](../Model/ArrayOfLogins.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersOnlineGet**
> \D4T\MT4Sdk\Models\ArrayOfOnlineUsers usersOnlineGet($token)

Get list of online users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new D4T\MT4Sdk\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Session token

try {
    $result = $apiInstance->usersOnlineGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->usersOnlineGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Session token |

### Return type

[**\D4T\MT4Sdk\Models\ArrayOfOnlineUsers**](../Model/ArrayOfOnlineUsers.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

