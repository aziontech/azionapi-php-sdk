# OpenAPI\Client\DefaultApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdDelete()**](DefaultApi.md#edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdDelete) | **DELETE** /edge_firewall/{edge_firewall_id}/functions_instances/{edge_function_instance_id} | Delete an Edge Functions Instance by uuid |
| [**edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdGet()**](DefaultApi.md#edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdGet) | **GET** /edge_firewall/{edge_firewall_id}/functions_instances/{edge_function_instance_id} | Retrieve an Edge Functions Instance set by uuid |
| [**edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdPatch()**](DefaultApi.md#edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdPatch) | **PATCH** /edge_firewall/{edge_firewall_id}/functions_instances/{edge_function_instance_id} | Update some Edge Functions Instance attributes |
| [**edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdPut()**](DefaultApi.md#edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdPut) | **PUT** /edge_firewall/{edge_firewall_id}/functions_instances/{edge_function_instance_id} | Overwrite some Edge Functions Instance attributes |
| [**edgeFirewallEdgeFirewallIdFunctionsInstancesGet()**](DefaultApi.md#edgeFirewallEdgeFirewallIdFunctionsInstancesGet) | **GET** /edge_firewall/{edge_firewall_id}/functions_instances | List all user Edge Functions Instances |
| [**edgeFirewallEdgeFirewallIdFunctionsInstancesPost()**](DefaultApi.md#edgeFirewallEdgeFirewallIdFunctionsInstancesPost) | **POST** /edge_firewall/{edge_firewall_id}/functions_instances | Create an Edge Functions Instance |


## `edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdDelete()`

```php
edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdDelete($edge_firewall_id, $edge_function_instance_id)
```

Delete an Edge Functions Instance by uuid

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
$edge_firewall_id = 56; // int
$edge_function_instance_id = 56; // int

try {
    $apiInstance->edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdDelete($edge_firewall_id, $edge_function_instance_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_firewall_id** | **int**|  | |
| **edge_function_instance_id** | **int**|  | |

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

## `edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdGet()`

```php
edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdGet($edge_firewall_id, $edge_function_instance_id): \OpenAPI\Client\Model\EdgeFunctionsInstanceResponse
```

Retrieve an Edge Functions Instance set by uuid

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
$edge_firewall_id = 56; // int
$edge_function_instance_id = 56; // int

try {
    $result = $apiInstance->edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdGet($edge_firewall_id, $edge_function_instance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_firewall_id** | **int**|  | |
| **edge_function_instance_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\EdgeFunctionsInstanceResponse**](../Model/EdgeFunctionsInstanceResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdPatch()`

```php
edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdPatch($edge_firewall_id, $edge_function_instance_id, $body): \OpenAPI\Client\Model\EdgeFunctionsInstanceResponse
```

Update some Edge Functions Instance attributes

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
$edge_firewall_id = 56; // int
$edge_function_instance_id = 56; // int
$body = new \OpenAPI\Client\Model\CreateEdgeFunctionsInstancesRequest(); // \OpenAPI\Client\Model\CreateEdgeFunctionsInstancesRequest

try {
    $result = $apiInstance->edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdPatch($edge_firewall_id, $edge_function_instance_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_firewall_id** | **int**|  | |
| **edge_function_instance_id** | **int**|  | |
| **body** | **\OpenAPI\Client\Model\CreateEdgeFunctionsInstancesRequest**|  | |

### Return type

[**\OpenAPI\Client\Model\EdgeFunctionsInstanceResponse**](../Model/EdgeFunctionsInstanceResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdPut()`

```php
edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdPut($edge_firewall_id, $edge_function_instance_id, $body): \OpenAPI\Client\Model\EdgeFunctionsInstanceResponse
```

Overwrite some Edge Functions Instance attributes

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
$edge_firewall_id = 56; // int
$edge_function_instance_id = 56; // int
$body = new \OpenAPI\Client\Model\CreateEdgeFunctionsInstancesRequest(); // \OpenAPI\Client\Model\CreateEdgeFunctionsInstancesRequest

try {
    $result = $apiInstance->edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdPut($edge_firewall_id, $edge_function_instance_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallEdgeFirewallIdFunctionsInstancesEdgeFunctionInstanceIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_firewall_id** | **int**|  | |
| **edge_function_instance_id** | **int**|  | |
| **body** | **\OpenAPI\Client\Model\CreateEdgeFunctionsInstancesRequest**|  | |

### Return type

[**\OpenAPI\Client\Model\EdgeFunctionsInstanceResponse**](../Model/EdgeFunctionsInstanceResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeFirewallEdgeFirewallIdFunctionsInstancesGet()`

```php
edgeFirewallEdgeFirewallIdFunctionsInstancesGet($edge_firewall_id, $page, $page_size, $sort, $order_by): \OpenAPI\Client\Model\ListEdgeFunctionsInstancesResponse
```

List all user Edge Functions Instances

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
$edge_firewall_id = 56; // int
$page = 56; // int
$page_size = 56; // int
$sort = 'sort_example'; // string
$order_by = 'order_by_example'; // string

try {
    $result = $apiInstance->edgeFirewallEdgeFirewallIdFunctionsInstancesGet($edge_firewall_id, $page, $page_size, $sort, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallEdgeFirewallIdFunctionsInstancesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_firewall_id** | **int**|  | |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListEdgeFunctionsInstancesResponse**](../Model/ListEdgeFunctionsInstancesResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeFirewallEdgeFirewallIdFunctionsInstancesPost()`

```php
edgeFirewallEdgeFirewallIdFunctionsInstancesPost($edge_firewall_id, $create_edge_functions_instances_request): \OpenAPI\Client\Model\EdgeFunctionsInstanceResponse
```

Create an Edge Functions Instance

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
$edge_firewall_id = 56; // int
$create_edge_functions_instances_request = new \OpenAPI\Client\Model\CreateEdgeFunctionsInstancesRequest(); // \OpenAPI\Client\Model\CreateEdgeFunctionsInstancesRequest

try {
    $result = $apiInstance->edgeFirewallEdgeFirewallIdFunctionsInstancesPost($edge_firewall_id, $create_edge_functions_instances_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallEdgeFirewallIdFunctionsInstancesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_firewall_id** | **int**|  | |
| **create_edge_functions_instances_request** | [**\OpenAPI\Client\Model\CreateEdgeFunctionsInstancesRequest**](../Model/CreateEdgeFunctionsInstancesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EdgeFunctionsInstanceResponse**](../Model/EdgeFunctionsInstanceResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
