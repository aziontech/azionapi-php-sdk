# OpenAPI\Client\DefaultApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCredential()**](DefaultApi.md#createCredential) | **POST** /credentials | Create credential |
| [**deleteCredential()**](DefaultApi.md#deleteCredential) | **DELETE** /credentials/{credentialId} | Delete the Credential |
| [**findAll()**](DefaultApi.md#findAll) | **GET** /credentials | Return all credentials |
| [**loadCredential()**](DefaultApi.md#loadCredential) | **GET** /credentials/{credentialId} | Load the Credential |
| [**updateCredential()**](DefaultApi.md#updateCredential) | **PATCH** /credentials/{credentialId} | Update the Credential |


## `createCredential()`

```php
createCredential($create_credential_request): \OpenAPI\Client\Model\AuthToken
```

Create credential

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_credential_request = new \OpenAPI\Client\Model\CreateCredentialRequest(); // \OpenAPI\Client\Model\CreateCredentialRequest

try {
    $result = $apiInstance->createCredential($create_credential_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCredential: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_credential_request** | [**\OpenAPI\Client\Model\CreateCredentialRequest**](../Model/CreateCredentialRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AuthToken**](../Model/AuthToken.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCredential()`

```php
deleteCredential($credential_id)
```

Delete the Credential

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credential_id = 56; // int

try {
    $apiInstance->deleteCredential($credential_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteCredential: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credential_id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAll()`

```php
findAll($filter, $page, $page_size, $sort, $order_by): \OpenAPI\Client\Model\ResponseWithTotal
```

Return all credentials

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string
$page = 56; // int
$page_size = 56; // int
$sort = 'sort_example'; // string
$order_by = 'order_by_example'; // string

try {
    $result = $apiInstance->findAll($filter, $page, $page_size, $sort, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResponseWithTotal**](../Model/ResponseWithTotal.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loadCredential()`

```php
loadCredential($credential_id): \OpenAPI\Client\Model\Response
```

Load the Credential

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credential_id = 56; // int

try {
    $result = $apiInstance->loadCredential($credential_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->loadCredential: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credential_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\Response**](../Model/Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCredential()`

```php
updateCredential($credential_id, $update_credential_request): \OpenAPI\Client\Model\Response
```

Update the Credential

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credential_id = 56; // int
$update_credential_request = new \OpenAPI\Client\Model\UpdateCredentialRequest(); // \OpenAPI\Client\Model\UpdateCredentialRequest

try {
    $result = $apiInstance->updateCredential($credential_id, $update_credential_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateCredential: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credential_id** | **int**|  | |
| **update_credential_request** | [**\OpenAPI\Client\Model\UpdateCredentialRequest**](../Model/UpdateCredentialRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Response**](../Model/Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
