# OpenAPI\Client\DefaultApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authorizeEdgeNode()**](DefaultApi.md#authorizeEdgeNode) | **PATCH** /edge_nodes/authorize | Authorize edge-node |
| [**createEdgeNodeSvcs()**](DefaultApi.md#createEdgeNodeSvcs) | **POST** /edge_nodes/{edgenodeId}/services | Create an edge-node Service association |
| [**delEdgeNode()**](DefaultApi.md#delEdgeNode) | **DELETE** /edge_nodes/{edgenodeId} | Delete edge-node by ID |
| [**delEdgeNodeSvc()**](DefaultApi.md#delEdgeNodeSvc) | **DELETE** /edge_nodes/{edgenodeId}/services/{bindId} | Delete an edge-node Service association |
| [**getEdgeNode()**](DefaultApi.md#getEdgeNode) | **GET** /edge_nodes/{edgenodeId} | Return edge-node by ID |
| [**getEdgeNodeGroups()**](DefaultApi.md#getEdgeNodeGroups) | **GET** /edge_nodes/groups | Return edge-node groups |
| [**getEdgeNodeSvcDetail()**](DefaultApi.md#getEdgeNodeSvcDetail) | **GET** /edge_nodes/{edgenodeId}/services/{bindId} | Return edge-node Service association by ID |
| [**getEdgeNodeSvcs()**](DefaultApi.md#getEdgeNodeSvcs) | **GET** /edge_nodes/{edgenodeId}/services | Return edge-node Services association |
| [**getEdgeNodes()**](DefaultApi.md#getEdgeNodes) | **GET** /edge_nodes | Return edge-nodes |
| [**updateEdgeNode()**](DefaultApi.md#updateEdgeNode) | **PATCH** /edge_nodes/{edgenodeId} | Update edge-node |
| [**updateEdgeNodeSvcDetail()**](DefaultApi.md#updateEdgeNodeSvcDetail) | **PATCH** /edge_nodes/{edgenodeId}/services/{bindId} | Update edge-node Service association by ID |


## `authorizeEdgeNode()`

```php
authorizeEdgeNode($authorize_edge_nodes_request): \OpenAPI\Client\Model\AuthorizeEdgeNodesResponse
```

Authorize edge-node

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
$authorize_edge_nodes_request = new \OpenAPI\Client\Model\AuthorizeEdgeNodesRequest(); // \OpenAPI\Client\Model\AuthorizeEdgeNodesRequest

try {
    $result = $apiInstance->authorizeEdgeNode($authorize_edge_nodes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->authorizeEdgeNode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorize_edge_nodes_request** | [**\OpenAPI\Client\Model\AuthorizeEdgeNodesRequest**](../Model/AuthorizeEdgeNodesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AuthorizeEdgeNodesResponse**](../Model/AuthorizeEdgeNodesResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEdgeNodeSvcs()`

```php
createEdgeNodeSvcs($edgenode_id, $service_bind_request): \OpenAPI\Client\Model\ServiceBindDetailResponse
```

Create an edge-node Service association

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
$edgenode_id = 56; // int
$service_bind_request = new \OpenAPI\Client\Model\ServiceBindRequest(); // \OpenAPI\Client\Model\ServiceBindRequest

try {
    $result = $apiInstance->createEdgeNodeSvcs($edgenode_id, $service_bind_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createEdgeNodeSvcs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edgenode_id** | **int**|  | |
| **service_bind_request** | [**\OpenAPI\Client\Model\ServiceBindRequest**](../Model/ServiceBindRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ServiceBindDetailResponse**](../Model/ServiceBindDetailResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `delEdgeNode()`

```php
delEdgeNode($edgenode_id)
```

Delete edge-node by ID

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
$edgenode_id = 56; // int

try {
    $apiInstance->delEdgeNode($edgenode_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->delEdgeNode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edgenode_id** | **int**|  | |

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

## `delEdgeNodeSvc()`

```php
delEdgeNodeSvc($edgenode_id, $bind_id)
```

Delete an edge-node Service association

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
$edgenode_id = 56; // int
$bind_id = 56; // int

try {
    $apiInstance->delEdgeNodeSvc($edgenode_id, $bind_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->delEdgeNodeSvc: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edgenode_id** | **int**|  | |
| **bind_id** | **int**|  | |

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

## `getEdgeNode()`

```php
getEdgeNode($edgenode_id): \OpenAPI\Client\Model\EdgeNodeDetailResponse
```

Return edge-node by ID

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
$edgenode_id = 56; // int

try {
    $result = $apiInstance->getEdgeNode($edgenode_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEdgeNode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edgenode_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\EdgeNodeDetailResponse**](../Model/EdgeNodeDetailResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEdgeNodeGroups()`

```php
getEdgeNodeGroups(): \OpenAPI\Client\Model\NodeGroupResponse[]
```

Return edge-node groups

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

try {
    $result = $apiInstance->getEdgeNodeGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEdgeNodeGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\NodeGroupResponse[]**](../Model/NodeGroupResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEdgeNodeSvcDetail()`

```php
getEdgeNodeSvcDetail($edgenode_id, $bind_id): \OpenAPI\Client\Model\ServiceBindDetailResponse
```

Return edge-node Service association by ID

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
$edgenode_id = 56; // int
$bind_id = 56; // int

try {
    $result = $apiInstance->getEdgeNodeSvcDetail($edgenode_id, $bind_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEdgeNodeSvcDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edgenode_id** | **int**|  | |
| **bind_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ServiceBindDetailResponse**](../Model/ServiceBindDetailResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEdgeNodeSvcs()`

```php
getEdgeNodeSvcs($edgenode_id, $is_bound, $filter, $order_by, $sort, $page, $page_size): \OpenAPI\Client\Model\ServiceResponseWithTotal
```

Return edge-node Services association

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
$edgenode_id = 56; // int
$is_bound = True; // bool
$filter = 'filter_example'; // string
$order_by = 'order_by_example'; // string
$sort = 'sort_example'; // string
$page = 56; // int
$page_size = 56; // int

try {
    $result = $apiInstance->getEdgeNodeSvcs($edgenode_id, $is_bound, $filter, $order_by, $sort, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEdgeNodeSvcs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edgenode_id** | **int**|  | |
| **is_bound** | **bool**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ServiceResponseWithTotal**](../Model/ServiceResponseWithTotal.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEdgeNodes()`

```php
getEdgeNodes($filter, $order_by, $sort, $only_ids, $page_size): \OpenAPI\Client\Model\EdgeNodeResponseWithTotal
```

Return edge-nodes

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
$order_by = 'order_by_example'; // string
$sort = 'sort_example'; // string
$only_ids = True; // bool
$page_size = 56; // int

try {
    $result = $apiInstance->getEdgeNodes($filter, $order_by, $sort, $only_ids, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEdgeNodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **only_ids** | **bool**|  | [optional] |
| **page_size** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EdgeNodeResponseWithTotal**](../Model/EdgeNodeResponseWithTotal.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEdgeNode()`

```php
updateEdgeNode($edgenode_id): \OpenAPI\Client\Model\UpdateEdgeNodeResponse
```

Update edge-node

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
$edgenode_id = 56; // int

try {
    $result = $apiInstance->updateEdgeNode($edgenode_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateEdgeNode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edgenode_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\UpdateEdgeNodeResponse**](../Model/UpdateEdgeNodeResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEdgeNodeSvcDetail()`

```php
updateEdgeNodeSvcDetail($edgenode_id, $bind_id, $update_service_bind_request): \OpenAPI\Client\Model\ServiceBindDetailResponse
```

Update edge-node Service association by ID

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
$edgenode_id = 56; // int
$bind_id = 56; // int
$update_service_bind_request = new \OpenAPI\Client\Model\UpdateServiceBindRequest(); // \OpenAPI\Client\Model\UpdateServiceBindRequest

try {
    $result = $apiInstance->updateEdgeNodeSvcDetail($edgenode_id, $bind_id, $update_service_bind_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateEdgeNodeSvcDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edgenode_id** | **int**|  | |
| **bind_id** | **int**|  | |
| **update_service_bind_request** | [**\OpenAPI\Client\Model\UpdateServiceBindRequest**](../Model/UpdateServiceBindRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ServiceBindDetailResponse**](../Model/ServiceBindDetailResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
