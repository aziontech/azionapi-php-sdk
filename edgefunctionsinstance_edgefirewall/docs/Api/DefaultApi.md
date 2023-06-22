# OpenAPI\Client\DefaultApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**edgeFirewallEdgeFirewallIdFunctionsInstancesGet()**](DefaultApi.md#edgeFirewallEdgeFirewallIdFunctionsInstancesGet) | **GET** /edge_firewall/:edge_firewall_id:/functions_instances | List all user Edge Functions Instances |
| [**edgeFirewallEdgeFirewallIdFunctionsInstancesPost()**](DefaultApi.md#edgeFirewallEdgeFirewallIdFunctionsInstancesPost) | **POST** /edge_firewall/:edge_firewall_id:/functions_instances | Create an Edge Functions Instance |
| [**edgeFirewallEdgeFirewallIdFunctionsInstancesUuidDelete()**](DefaultApi.md#edgeFirewallEdgeFirewallIdFunctionsInstancesUuidDelete) | **DELETE** /edge_firewall/:edge_firewall_id:/functions_instances/{uuid} | Delete an Edge Functions Instance by uuid |
| [**edgeFirewallEdgeFirewallIdFunctionsInstancesUuidGet()**](DefaultApi.md#edgeFirewallEdgeFirewallIdFunctionsInstancesUuidGet) | **GET** /edge_firewall/:edge_firewall_id:/functions_instances/{uuid} | Retrieve an Edge Functions Instance set by uuid |
| [**edgeFirewallEdgeFirewallIdFunctionsInstancesUuidPatch()**](DefaultApi.md#edgeFirewallEdgeFirewallIdFunctionsInstancesUuidPatch) | **PATCH** /edge_firewall/:edge_firewall_id:/functions_instances/{uuid} | Update some Edge Functions Instance attributes |
| [**edgeFirewallEdgeFirewallIdFunctionsInstancesUuidPut()**](DefaultApi.md#edgeFirewallEdgeFirewallIdFunctionsInstancesUuidPut) | **PUT** /edge_firewall/:edge_firewall_id:/functions_instances/{uuid} | Overwrite some Edge Functions Instance attributes |


## `edgeFirewallEdgeFirewallIdFunctionsInstancesGet()`

```php
edgeFirewallEdgeFirewallIdFunctionsInstancesGet($page, $page_size, $sort, $order_by): \OpenAPI\Client\Model\ListEdgeFunctionsInstancesResponse
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
$page = 56; // int
$page_size = 56; // int
$sort = 'sort_example'; // string
$order_by = 'order_by_example'; // string

try {
    $result = $apiInstance->edgeFirewallEdgeFirewallIdFunctionsInstancesGet($page, $page_size, $sort, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallEdgeFirewallIdFunctionsInstancesGet: ', $e->getMessage(), PHP_EOL;
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
edgeFirewallEdgeFirewallIdFunctionsInstancesPost($create_edge_functions_instances_request)
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
$create_edge_functions_instances_request = new \OpenAPI\Client\Model\CreateEdgeFunctionsInstancesRequest(); // \OpenAPI\Client\Model\CreateEdgeFunctionsInstancesRequest

try {
    $apiInstance->edgeFirewallEdgeFirewallIdFunctionsInstancesPost($create_edge_functions_instances_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallEdgeFirewallIdFunctionsInstancesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_edge_functions_instances_request** | [**\OpenAPI\Client\Model\CreateEdgeFunctionsInstancesRequest**](../Model/CreateEdgeFunctionsInstancesRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeFirewallEdgeFirewallIdFunctionsInstancesUuidDelete()`

```php
edgeFirewallEdgeFirewallIdFunctionsInstancesUuidDelete($uuid)
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
$uuid = 'uuid_example'; // string

try {
    $apiInstance->edgeFirewallEdgeFirewallIdFunctionsInstancesUuidDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallEdgeFirewallIdFunctionsInstancesUuidDelete: ', $e->getMessage(), PHP_EOL;
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

## `edgeFirewallEdgeFirewallIdFunctionsInstancesUuidGet()`

```php
edgeFirewallEdgeFirewallIdFunctionsInstancesUuidGet($uuid): \OpenAPI\Client\Model\EdgeFunctionsInstanceResponse
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
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->edgeFirewallEdgeFirewallIdFunctionsInstancesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallEdgeFirewallIdFunctionsInstancesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

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

## `edgeFirewallEdgeFirewallIdFunctionsInstancesUuidPatch()`

```php
edgeFirewallEdgeFirewallIdFunctionsInstancesUuidPatch($uuid, $body): \OpenAPI\Client\Model\ListEdgeFunctionsInstancesResponse
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
$uuid = 'uuid_example'; // string
$body = new \OpenAPI\Client\Model\CreateEdgeFunctionsInstancesRequest(); // \OpenAPI\Client\Model\CreateEdgeFunctionsInstancesRequest

try {
    $result = $apiInstance->edgeFirewallEdgeFirewallIdFunctionsInstancesUuidPatch($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallEdgeFirewallIdFunctionsInstancesUuidPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **body** | **\OpenAPI\Client\Model\CreateEdgeFunctionsInstancesRequest**|  | |

### Return type

[**\OpenAPI\Client\Model\ListEdgeFunctionsInstancesResponse**](../Model/ListEdgeFunctionsInstancesResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeFirewallEdgeFirewallIdFunctionsInstancesUuidPut()`

```php
edgeFirewallEdgeFirewallIdFunctionsInstancesUuidPut($uuid, $body): \OpenAPI\Client\Model\ListEdgeFunctionsInstancesResponse
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
$uuid = 'uuid_example'; // string
$body = new \OpenAPI\Client\Model\CreateEdgeFunctionsInstancesRequest(); // \OpenAPI\Client\Model\CreateEdgeFunctionsInstancesRequest

try {
    $result = $apiInstance->edgeFirewallEdgeFirewallIdFunctionsInstancesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallEdgeFirewallIdFunctionsInstancesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **body** | **\OpenAPI\Client\Model\CreateEdgeFunctionsInstancesRequest**|  | |

### Return type

[**\OpenAPI\Client\Model\ListEdgeFunctionsInstancesResponse**](../Model/ListEdgeFunctionsInstancesResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
