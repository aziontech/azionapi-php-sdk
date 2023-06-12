# OpenAPI\Client\EdgeApplicationsOriginsApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**edgeApplicationsEdgeApplicationIdOriginsGet()**](EdgeApplicationsOriginsApi.md#edgeApplicationsEdgeApplicationIdOriginsGet) | **GET** /edge_applications/{edge_application_id}/origins | /edge_applications/{edge_application_id}/origins |
| [**edgeApplicationsEdgeApplicationIdOriginsOriginKeyDelete()**](EdgeApplicationsOriginsApi.md#edgeApplicationsEdgeApplicationIdOriginsOriginKeyDelete) | **DELETE** /edge_applications/{edge_application_id}/origins/{origin_key} | /edge_applications/{edge_application_id}/origins/{origin_id} |
| [**edgeApplicationsEdgeApplicationIdOriginsOriginKeyGet()**](EdgeApplicationsOriginsApi.md#edgeApplicationsEdgeApplicationIdOriginsOriginKeyGet) | **GET** /edge_applications/{edge_application_id}/origins/{origin_key} | /edge_applications/{edge_application_id}/origins/{origin_key} |
| [**edgeApplicationsEdgeApplicationIdOriginsOriginKeyPatch()**](EdgeApplicationsOriginsApi.md#edgeApplicationsEdgeApplicationIdOriginsOriginKeyPatch) | **PATCH** /edge_applications/{edge_application_id}/origins/{origin_key} | /edge_applications/:edge_application_id:/origins/:origin_id: |
| [**edgeApplicationsEdgeApplicationIdOriginsOriginKeyPut()**](EdgeApplicationsOriginsApi.md#edgeApplicationsEdgeApplicationIdOriginsOriginKeyPut) | **PUT** /edge_applications/{edge_application_id}/origins/{origin_key} | /edge_applications/{edge_application_id}/origins/{origin_id} |
| [**edgeApplicationsEdgeApplicationIdOriginsPost()**](EdgeApplicationsOriginsApi.md#edgeApplicationsEdgeApplicationIdOriginsPost) | **POST** /edge_applications/{edge_application_id}/origins | /edge_applications/{edge_application_id}/origins |


## `edgeApplicationsEdgeApplicationIdOriginsGet()`

```php
edgeApplicationsEdgeApplicationIdOriginsGet($edge_application_id, $page, $page_size, $filter, $order_by, $sort, $accept): \OpenAPI\Client\Model\OriginsResponse
```

/edge_applications/{edge_application_id}/origins

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsOriginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$page = 56; // int
$page_size = 56; // int
$filter = 'filter_example'; // string
$order_by = 'order_by_example'; // string
$sort = 'sort_example'; // string
$accept = application/json; version=3; // string

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdOriginsGet($edge_application_id, $page, $page_size, $filter, $order_by, $sort, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsOriginsApi->edgeApplicationsEdgeApplicationIdOriginsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OriginsResponse**](../Model/OriginsResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdOriginsOriginKeyDelete()`

```php
edgeApplicationsEdgeApplicationIdOriginsOriginKeyDelete($edge_application_id, $origin_key, $accept)
```

/edge_applications/{edge_application_id}/origins/{origin_id}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsOriginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$origin_key = 'origin_key_example'; // string
$accept = application/json; version=3; // string | The id of the Origin that you plan to delete.

try {
    $apiInstance->edgeApplicationsEdgeApplicationIdOriginsOriginKeyDelete($edge_application_id, $origin_key, $accept);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsOriginsApi->edgeApplicationsEdgeApplicationIdOriginsOriginKeyDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **origin_key** | **string**|  | |
| **accept** | **string**| The id of the Origin that you plan to delete. | [optional] |

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

## `edgeApplicationsEdgeApplicationIdOriginsOriginKeyGet()`

```php
edgeApplicationsEdgeApplicationIdOriginsOriginKeyGet($edge_application_id, $origin_key, $accept): \OpenAPI\Client\Model\OriginsIdResponse
```

/edge_applications/{edge_application_id}/origins/{origin_key}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsOriginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$origin_key = 'origin_key_example'; // string
$accept = application/json; version=3; // string | The id of the Origin that you plan to query.

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdOriginsOriginKeyGet($edge_application_id, $origin_key, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsOriginsApi->edgeApplicationsEdgeApplicationIdOriginsOriginKeyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **origin_key** | **string**|  | |
| **accept** | **string**| The id of the Origin that you plan to query. | [optional] |

### Return type

[**\OpenAPI\Client\Model\OriginsIdResponse**](../Model/OriginsIdResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdOriginsOriginKeyPatch()`

```php
edgeApplicationsEdgeApplicationIdOriginsOriginKeyPatch($edge_application_id, $origin_key, $accept, $content_type, $patch_origins_request): \OpenAPI\Client\Model\OriginsIdResponse
```

/edge_applications/:edge_application_id:/origins/:origin_id:

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsOriginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$origin_key = 'origin_key_example'; // string
$accept = application/json; version=3; // string
$content_type = application/json; // string | The type of coding used in the Body (application/json). <br>  Example: Content-Type: application/json
$patch_origins_request = new \OpenAPI\Client\Model\PatchOriginsRequest(); // \OpenAPI\Client\Model\PatchOriginsRequest

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdOriginsOriginKeyPatch($edge_application_id, $origin_key, $accept, $content_type, $patch_origins_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsOriginsApi->edgeApplicationsEdgeApplicationIdOriginsOriginKeyPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **origin_key** | **string**|  | |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**| The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json | [optional] |
| **patch_origins_request** | [**\OpenAPI\Client\Model\PatchOriginsRequest**](../Model/PatchOriginsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OriginsIdResponse**](../Model/OriginsIdResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdOriginsOriginKeyPut()`

```php
edgeApplicationsEdgeApplicationIdOriginsOriginKeyPut($edge_application_id, $origin_key, $accept, $content_type, $update_origins_request): \OpenAPI\Client\Model\OriginsIdResponse
```

/edge_applications/{edge_application_id}/origins/{origin_id}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsOriginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$origin_key = 'origin_key_example'; // string
$accept = application/json; version=3; // string
$content_type = application/json; // string | The type of coding used in the Body (application/json). <br>  Example: Content-Type: application/json
$update_origins_request = new \OpenAPI\Client\Model\UpdateOriginsRequest(); // \OpenAPI\Client\Model\UpdateOriginsRequest

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdOriginsOriginKeyPut($edge_application_id, $origin_key, $accept, $content_type, $update_origins_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsOriginsApi->edgeApplicationsEdgeApplicationIdOriginsOriginKeyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **origin_key** | **string**|  | |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**| The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json | [optional] |
| **update_origins_request** | [**\OpenAPI\Client\Model\UpdateOriginsRequest**](../Model/UpdateOriginsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OriginsIdResponse**](../Model/OriginsIdResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdOriginsPost()`

```php
edgeApplicationsEdgeApplicationIdOriginsPost($edge_application_id, $accept, $content_type, $create_origins_request): \OpenAPI\Client\Model\OriginsIdResponse
```

/edge_applications/{edge_application_id}/origins

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsOriginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$accept = application/json; version=3; // string
$content_type = application/json; // string | The type of coding used in the Body (application/json). <br>  Example: Content-Type: application/json
$create_origins_request = new \OpenAPI\Client\Model\CreateOriginsRequest(); // \OpenAPI\Client\Model\CreateOriginsRequest

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdOriginsPost($edge_application_id, $accept, $content_type, $create_origins_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsOriginsApi->edgeApplicationsEdgeApplicationIdOriginsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**| The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json | [optional] |
| **create_origins_request** | [**\OpenAPI\Client\Model\CreateOriginsRequest**](../Model/CreateOriginsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OriginsIdResponse**](../Model/OriginsIdResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
