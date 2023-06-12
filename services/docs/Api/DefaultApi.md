# OpenAPI\Client\DefaultApi

All URIs are relative to http://localhost:3002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteResource()**](DefaultApi.md#deleteResource) | **DELETE** /edge_services/{serviceId}/resources/{resourceId} | Delete Service Resource by ID |
| [**deleteService()**](DefaultApi.md#deleteService) | **DELETE** /edge_services/{id} | Delete Service by ID |
| [**getResource()**](DefaultApi.md#getResource) | **GET** /edge_services/{serviceId}/resources/{resourceId} | Return Service Resource by ID |
| [**getResources()**](DefaultApi.md#getResources) | **GET** /edge_services/{serviceId}/resources | Return Service Resources by page |
| [**getService()**](DefaultApi.md#getService) | **GET** /edge_services/{id} | Return Service by ID |
| [**getServices()**](DefaultApi.md#getServices) | **GET** /edge_services/ | Return Services by page |
| [**newService()**](DefaultApi.md#newService) | **POST** /edge_services/ | Create Service |
| [**patchService()**](DefaultApi.md#patchService) | **PATCH** /edge_services/{id} | Update Service by ID |
| [**patchServiceResource()**](DefaultApi.md#patchServiceResource) | **PATCH** /edge_services/{serviceId}/resources/{resourceId} | Update Service Resource by ID |
| [**postResource()**](DefaultApi.md#postResource) | **POST** /edge_services/{serviceId}/resources | Create Service Resource |


## `deleteResource()`

```php
deleteResource($service_id, $resource_id)
```

Delete Service Resource by ID

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
$service_id = 56; // int
$resource_id = 56; // int

try {
    $apiInstance->deleteResource($service_id, $resource_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **int**|  | |
| **resource_id** | **int**|  | |

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

## `deleteService()`

```php
deleteService($id)
```

Delete Service by ID

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
$id = 56; // int

try {
    $apiInstance->deleteService($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteService: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResource()`

```php
getResource($service_id, $resource_id): \OpenAPI\Client\Model\ResourceDetail
```

Return Service Resource by ID

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
$service_id = 56; // int
$resource_id = 56; // int

try {
    $result = $apiInstance->getResource($service_id, $resource_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **int**|  | |
| **resource_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ResourceDetail**](../Model/ResourceDetail.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResources()`

```php
getResources($service_id, $page, $page_size, $filter, $order_by, $sort): \OpenAPI\Client\Model\ResourceResponseWithTotal
```

Return Service Resources by page

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
$service_id = 56; // int
$page = 56; // int
$page_size = 56; // int
$filter = 'filter_example'; // string
$order_by = 'order_by_example'; // string
$sort = 'sort_example'; // string

try {
    $result = $apiInstance->getResources($service_id, $page, $page_size, $filter, $order_by, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getResources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **int**|  | |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |
| **sort** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResourceResponseWithTotal**](../Model/ResourceResponseWithTotal.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getService()`

```php
getService($id, $with_vars): \OpenAPI\Client\Model\ServiceResponse
```

Return Service by ID

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
$id = 56; // int
$with_vars = True; // bool

try {
    $result = $apiInstance->getService($id, $with_vars);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **with_vars** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ServiceResponse**](../Model/ServiceResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServices()`

```php
getServices($page, $page_size, $filter, $order_by, $sort): \OpenAPI\Client\Model\ServiceResponseWithTotals
```

Return Services by page

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
$filter = 'filter_example'; // string
$order_by = 'order_by_example'; // string
$sort = 'sort_example'; // string

try {
    $result = $apiInstance->getServices($page, $page_size, $filter, $order_by, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |
| **sort** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ServiceResponseWithTotals**](../Model/ServiceResponseWithTotals.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newService()`

```php
newService($create_service_request): \OpenAPI\Client\Model\ServiceResponse
```

Create Service

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
$create_service_request = new \OpenAPI\Client\Model\CreateServiceRequest(); // \OpenAPI\Client\Model\CreateServiceRequest

try {
    $result = $apiInstance->newService($create_service_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->newService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_service_request** | [**\OpenAPI\Client\Model\CreateServiceRequest**](../Model/CreateServiceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ServiceResponse**](../Model/ServiceResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchService()`

```php
patchService($id, $update_service_request): \OpenAPI\Client\Model\ServiceResponse
```

Update Service by ID

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
$id = 56; // int
$update_service_request = new \OpenAPI\Client\Model\UpdateServiceRequest(); // \OpenAPI\Client\Model\UpdateServiceRequest

try {
    $result = $apiInstance->patchService($id, $update_service_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_service_request** | [**\OpenAPI\Client\Model\UpdateServiceRequest**](../Model/UpdateServiceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ServiceResponse**](../Model/ServiceResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchServiceResource()`

```php
patchServiceResource($service_id, $resource_id, $update_resource_request): \OpenAPI\Client\Model\ResourceDetail
```

Update Service Resource by ID

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
$service_id = 56; // int
$resource_id = 56; // int
$update_resource_request = new \OpenAPI\Client\Model\UpdateResourceRequest(); // \OpenAPI\Client\Model\UpdateResourceRequest

try {
    $result = $apiInstance->patchServiceResource($service_id, $resource_id, $update_resource_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchServiceResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **int**|  | |
| **resource_id** | **int**|  | |
| **update_resource_request** | [**\OpenAPI\Client\Model\UpdateResourceRequest**](../Model/UpdateResourceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResourceDetail**](../Model/ResourceDetail.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postResource()`

```php
postResource($service_id, $create_resource_request): \OpenAPI\Client\Model\ResourceDetail
```

Create Service Resource

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
$service_id = 56; // int
$create_resource_request = new \OpenAPI\Client\Model\CreateResourceRequest(); // \OpenAPI\Client\Model\CreateResourceRequest

try {
    $result = $apiInstance->postResource($service_id, $create_resource_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **int**|  | |
| **create_resource_request** | [**\OpenAPI\Client\Model\CreateResourceRequest**](../Model/CreateResourceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResourceDetail**](../Model/ResourceDetail.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
