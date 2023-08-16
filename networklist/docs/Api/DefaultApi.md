# OpenAPI\Client\DefaultApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**networkListsGet()**](DefaultApi.md#networkListsGet) | **GET** /network_lists | List all user Network Lists |
| [**networkListsPost()**](DefaultApi.md#networkListsPost) | **POST** /network_lists | Create a Network Lists |
| [**networkListsUuidGet()**](DefaultApi.md#networkListsUuidGet) | **GET** /network_lists/{uuid} | Retrieve a Network Lists set by uuid |
| [**networkListsUuidPut()**](DefaultApi.md#networkListsUuidPut) | **PUT** /network_lists/{uuid} | Overwrite some Network Lists attributes |


## `networkListsGet()`

```php
networkListsGet($page, $page_size, $sort, $order_by): \OpenAPI\Client\Model\ListNetworkListsResponse
```

List all user Network Lists

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
    $result = $apiInstance->networkListsGet($page, $page_size, $sort, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkListsGet: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ListNetworkListsResponse**](../Model/ListNetworkListsResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkListsPost()`

```php
networkListsPost($create_network_lists_request): \OpenAPI\Client\Model\NetworkListsResponse
```

Create a Network Lists

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
$create_network_lists_request = new \OpenAPI\Client\Model\CreateNetworkListsRequest(); // \OpenAPI\Client\Model\CreateNetworkListsRequest

try {
    $result = $apiInstance->networkListsPost($create_network_lists_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkListsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_network_lists_request** | [**\OpenAPI\Client\Model\CreateNetworkListsRequest**](../Model/CreateNetworkListsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NetworkListsResponse**](../Model/NetworkListsResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkListsUuidGet()`

```php
networkListsUuidGet($uuid): \OpenAPI\Client\Model\NetworkListUuidResponse
```

Retrieve a Network Lists set by uuid

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
    $result = $apiInstance->networkListsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkListsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\NetworkListUuidResponse**](../Model/NetworkListUuidResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkListsUuidPut()`

```php
networkListsUuidPut($uuid, $create_network_lists_request): \OpenAPI\Client\Model\NetworkListsResponse
```

Overwrite some Network Lists attributes

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
$create_network_lists_request = new \OpenAPI\Client\Model\CreateNetworkListsRequest(); // \OpenAPI\Client\Model\CreateNetworkListsRequest

try {
    $result = $apiInstance->networkListsUuidPut($uuid, $create_network_lists_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkListsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **create_network_lists_request** | [**\OpenAPI\Client\Model\CreateNetworkListsRequest**](../Model/CreateNetworkListsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NetworkListsResponse**](../Model/NetworkListsResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
