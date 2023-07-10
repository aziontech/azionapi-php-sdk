# OpenAPI\Client\VariablesApi

All URIs are relative to https://stage-api.azion.net/variables, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiVariablesCreate()**](VariablesApi.md#apiVariablesCreate) | **POST** /variables | /variables |
| [**apiVariablesDestroy()**](VariablesApi.md#apiVariablesDestroy) | **DELETE** /variables/{uuid} | /variables/:uuid |
| [**apiVariablesList()**](VariablesApi.md#apiVariablesList) | **GET** /variables | /variables |
| [**apiVariablesRetrieve()**](VariablesApi.md#apiVariablesRetrieve) | **GET** /variables/{uuid} | /variables/:uuid |
| [**apiVariablesUpdate()**](VariablesApi.md#apiVariablesUpdate) | **PUT** /variables/{uuid} | /variables/:uuid |


## `apiVariablesCreate()`

```php
apiVariablesCreate($variable_create): \OpenAPI\Client\Model\VariableGet
```

/variables

Create a new Variable. <br><ul><li>If the attribute \"secret\" is informed with value \"true\" in request payload the Variable value will be secret and no longer viewable after creation.</li><li>If the attribute \"secret\" is not informed the Variable value will be considered as not secret by default.</li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$variable_create = {"key":"MY_SIMPLE_VAR","value":"My not secret value"}; // \OpenAPI\Client\Model\VariableCreate

try {
    $result = $apiInstance->apiVariablesCreate($variable_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->apiVariablesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **variable_create** | [**\OpenAPI\Client\Model\VariableCreate**](../Model/VariableCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VariableGet**](../Model/VariableGet.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVariablesDestroy()`

```php
apiVariablesDestroy($uuid)
```

/variables/:uuid

Delete a Variable by it's UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string

try {
    $apiInstance->apiVariablesDestroy($uuid);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->apiVariablesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

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

## `apiVariablesList()`

```php
apiVariablesList(): \OpenAPI\Client\Model\Variable[]
```

/variables

List all user's Variables.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiVariablesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->apiVariablesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Variable[]**](../Model/Variable.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVariablesRetrieve()`

```php
apiVariablesRetrieve($uuid): \OpenAPI\Client\Model\Variable
```

/variables/:uuid

Retrieve all data for a Variable by it's UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->apiVariablesRetrieve($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->apiVariablesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Variable**](../Model/Variable.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVariablesUpdate()`

```php
apiVariablesUpdate($uuid, $variable_create): \OpenAPI\Client\Model\VariableGet
```

/variables/:uuid

Update variable attributes by it's UUID. Keep the Variable UUID but overwrite all editable attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string
$variable_create = {"key":"MY_NEW_SIMPLE_VAR_KEY","value":"My new not secret value"}; // \OpenAPI\Client\Model\VariableCreate

try {
    $result = $apiInstance->apiVariablesUpdate($uuid, $variable_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->apiVariablesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **variable_create** | [**\OpenAPI\Client\Model\VariableCreate**](../Model/VariableCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VariableGet**](../Model/VariableGet.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
