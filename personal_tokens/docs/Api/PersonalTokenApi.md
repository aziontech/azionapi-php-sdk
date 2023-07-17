# OpenAPI\Client\PersonalTokenApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPersonalToken()**](PersonalTokenApi.md#createPersonalToken) | **POST** /iam/personal_tokens | Create a new personal token |
| [**deletePersonalToken()**](PersonalTokenApi.md#deletePersonalToken) | **DELETE** /iam/personal_tokens/{personalTokenId} | Delete a personal token by id |
| [**getPersonalToken()**](PersonalTokenApi.md#getPersonalToken) | **GET** /iam/personal_tokens/{personalTokenId} | Get a personal token info |
| [**listPersonalToken()**](PersonalTokenApi.md#listPersonalToken) | **GET** /iam/personal_tokens | List all existing personal token |


## `createPersonalToken()`

```php
createPersonalToken($create_personal_token_request): \OpenAPI\Client\Model\CreatePersonalTokenResponse
```

Create a new personal token

Create a new personal token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PersonalTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_personal_token_request = new \OpenAPI\Client\Model\CreatePersonalTokenRequest(); // \OpenAPI\Client\Model\CreatePersonalTokenRequest

try {
    $result = $apiInstance->createPersonalToken($create_personal_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalTokenApi->createPersonalToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_personal_token_request** | [**\OpenAPI\Client\Model\CreatePersonalTokenRequest**](../Model/CreatePersonalTokenRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreatePersonalTokenResponse**](../Model/CreatePersonalTokenResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePersonalToken()`

```php
deletePersonalToken($personal_token_id)
```

Delete a personal token by id

Delete a personal token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PersonalTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personal_token_id = 'personal_token_id_example'; // string

try {
    $apiInstance->deletePersonalToken($personal_token_id);
} catch (Exception $e) {
    echo 'Exception when calling PersonalTokenApi->deletePersonalToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personal_token_id** | **string**|  | |

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

## `getPersonalToken()`

```php
getPersonalToken($personal_token_id): \OpenAPI\Client\Model\PersonalTokenResponseGet
```

Get a personal token info

Get a personal token info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PersonalTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personal_token_id = 'personal_token_id_example'; // string

try {
    $result = $apiInstance->getPersonalToken($personal_token_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalTokenApi->getPersonalToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personal_token_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PersonalTokenResponseGet**](../Model/PersonalTokenResponseGet.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPersonalToken()`

```php
listPersonalToken(): \OpenAPI\Client\Model\PersonalTokenResponseWithResults
```

List all existing personal token

List all existing personal token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PersonalTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listPersonalToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalTokenApi->listPersonalToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PersonalTokenResponseWithResults**](../Model/PersonalTokenResponseWithResults.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
