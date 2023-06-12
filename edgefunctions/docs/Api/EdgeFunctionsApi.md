# OpenAPI\Client\EdgeFunctionsApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**edgeFunctionsGet()**](EdgeFunctionsApi.md#edgeFunctionsGet) | **GET** /edge_functions | edge_functions |
| [**edgeFunctionsIdDelete()**](EdgeFunctionsApi.md#edgeFunctionsIdDelete) | **DELETE** /edge_functions/{id} | edge_functions |
| [**edgeFunctionsIdGet()**](EdgeFunctionsApi.md#edgeFunctionsIdGet) | **GET** /edge_functions/{id} | edge_functions |
| [**edgeFunctionsIdPatch()**](EdgeFunctionsApi.md#edgeFunctionsIdPatch) | **PATCH** /edge_functions/{id} | edge_functions |
| [**edgeFunctionsIdPut()**](EdgeFunctionsApi.md#edgeFunctionsIdPut) | **PUT** /edge_functions/{id} | edge_functions |
| [**edgeFunctionsPost()**](EdgeFunctionsApi.md#edgeFunctionsPost) | **POST** /edge_functions | edge_functions |


## `edgeFunctionsGet()`

```php
edgeFunctionsGet($page, $page_size, $sort, $order_by): \OpenAPI\Client\Model\ListEdgeFunctionResponse
```

edge_functions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$page_size = 56; // int
$sort = 'sort_example'; // string
$order_by = 'order_by_example'; // string

try {
    $result = $apiInstance->edgeFunctionsGet($page, $page_size, $sort, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeFunctionsApi->edgeFunctionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListEdgeFunctionResponse**](../Model/ListEdgeFunctionResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeFunctionsIdDelete()`

```php
edgeFunctionsIdDelete($id)
```

edge_functions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->edgeFunctionsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling EdgeFunctionsApi->edgeFunctionsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeFunctionsIdGet()`

```php
edgeFunctionsIdGet($id): \OpenAPI\Client\Model\EdgeFunctionResponse
```

edge_functions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->edgeFunctionsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeFunctionsApi->edgeFunctionsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\EdgeFunctionResponse**](../Model/EdgeFunctionResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeFunctionsIdPatch()`

```php
edgeFunctionsIdPatch($id, $patch_edge_function_request): \OpenAPI\Client\Model\EdgeFunctionResponse
```

edge_functions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$patch_edge_function_request = new \OpenAPI\Client\Model\PatchEdgeFunctionRequest(); // \OpenAPI\Client\Model\PatchEdgeFunctionRequest

try {
    $result = $apiInstance->edgeFunctionsIdPatch($id, $patch_edge_function_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeFunctionsApi->edgeFunctionsIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **patch_edge_function_request** | [**\OpenAPI\Client\Model\PatchEdgeFunctionRequest**](../Model/PatchEdgeFunctionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EdgeFunctionResponse**](../Model/EdgeFunctionResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeFunctionsIdPut()`

```php
edgeFunctionsIdPut($id, $put_edge_function_request): \OpenAPI\Client\Model\EdgeFunctionResponse
```

edge_functions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$put_edge_function_request = new \OpenAPI\Client\Model\PutEdgeFunctionRequest(); // \OpenAPI\Client\Model\PutEdgeFunctionRequest

try {
    $result = $apiInstance->edgeFunctionsIdPut($id, $put_edge_function_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeFunctionsApi->edgeFunctionsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **put_edge_function_request** | [**\OpenAPI\Client\Model\PutEdgeFunctionRequest**](../Model/PutEdgeFunctionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EdgeFunctionResponse**](../Model/EdgeFunctionResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeFunctionsPost()`

```php
edgeFunctionsPost($create_edge_function_request): \OpenAPI\Client\Model\EdgeFunctionResponse
```

edge_functions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_edge_function_request = new \OpenAPI\Client\Model\CreateEdgeFunctionRequest(); // \OpenAPI\Client\Model\CreateEdgeFunctionRequest

try {
    $result = $apiInstance->edgeFunctionsPost($create_edge_function_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeFunctionsApi->edgeFunctionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_edge_function_request** | [**\OpenAPI\Client\Model\CreateEdgeFunctionRequest**](../Model/CreateEdgeFunctionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EdgeFunctionResponse**](../Model/EdgeFunctionResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
