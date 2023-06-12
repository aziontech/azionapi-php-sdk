# OpenAPI\Client\EdgeApplicationsDeviceGroupsApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdDelete()**](EdgeApplicationsDeviceGroupsApi.md#edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdDelete) | **DELETE** /edge_applications/{edge_application_id}/device_groups/{device_group_id} | /edge_applications/{edge_application_id}/device_groups/{device_group_id} |
| [**edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdGet()**](EdgeApplicationsDeviceGroupsApi.md#edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdGet) | **GET** /edge_applications/{edge_application_id}/device_groups/{device_group_id} | /edge_applications/{edge_application_id}/device_groups/{device_group_id} |
| [**edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdPatch()**](EdgeApplicationsDeviceGroupsApi.md#edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdPatch) | **PATCH** /edge_applications/{edge_application_id}/device_groups/{device_group_id} | /edge_applications/{edge_application_id}/device_groups/{device_group_id} |
| [**edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdPut()**](EdgeApplicationsDeviceGroupsApi.md#edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdPut) | **PUT** /edge_applications/{edge_application_id}/device_groups/{device_group_id} | /edge_applications/{edge_application_id}/device_groups/{device_group_id} |
| [**edgeApplicationsEdgeApplicationIdDeviceGroupsGet()**](EdgeApplicationsDeviceGroupsApi.md#edgeApplicationsEdgeApplicationIdDeviceGroupsGet) | **GET** /edge_applications/{edge_application_id}/device_groups | /edge_applications/{edge_application_id}/device_groups |
| [**edgeApplicationsEdgeApplicationIdDeviceGroupsPost()**](EdgeApplicationsDeviceGroupsApi.md#edgeApplicationsEdgeApplicationIdDeviceGroupsPost) | **POST** /edge_applications/{edge_application_id}/device_groups | /edge_applications/{edge_application_id}/device_groups |


## `edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdDelete()`

```php
edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdDelete($edge_application_id, $device_group_id, $accept)
```

/edge_applications/{edge_application_id}/device_groups/{device_group_id}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsDeviceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$device_group_id = 56; // int
$accept = application/json; version=3; // string | The id of the Device Groups that you plan to delete.

try {
    $apiInstance->edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdDelete($edge_application_id, $device_group_id, $accept);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsDeviceGroupsApi->edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **device_group_id** | **int**|  | |
| **accept** | **string**| The id of the Device Groups that you plan to delete. | [optional] |

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

## `edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdGet()`

```php
edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdGet($edge_application_id, $device_group_id, $accept): \OpenAPI\Client\Model\DeviceGroupsIdResponse
```

/edge_applications/{edge_application_id}/device_groups/{device_group_id}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsDeviceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$device_group_id = 56; // int
$accept = application/json; version=3; // string | The id of the Device Groups that you plan to query.

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdGet($edge_application_id, $device_group_id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsDeviceGroupsApi->edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **device_group_id** | **int**|  | |
| **accept** | **string**| The id of the Device Groups that you plan to query. | [optional] |

### Return type

[**\OpenAPI\Client\Model\DeviceGroupsIdResponse**](../Model/DeviceGroupsIdResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdPatch()`

```php
edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdPatch($edge_application_id, $device_group_id, $accept, $content_type, $patch_device_groups_request): \OpenAPI\Client\Model\DeviceGroupsIdResponse
```

/edge_applications/{edge_application_id}/device_groups/{device_group_id}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsDeviceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$device_group_id = 56; // int
$accept = application/json; version=3; // string
$content_type = application/json; // string | The type of coding used in the Body (application/json). <br>  Example: Content-Type: application/json
$patch_device_groups_request = new \OpenAPI\Client\Model\PatchDeviceGroupsRequest(); // \OpenAPI\Client\Model\PatchDeviceGroupsRequest

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdPatch($edge_application_id, $device_group_id, $accept, $content_type, $patch_device_groups_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsDeviceGroupsApi->edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **device_group_id** | **int**|  | |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**| The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json | [optional] |
| **patch_device_groups_request** | [**\OpenAPI\Client\Model\PatchDeviceGroupsRequest**](../Model/PatchDeviceGroupsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DeviceGroupsIdResponse**](../Model/DeviceGroupsIdResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdPut()`

```php
edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdPut($edge_application_id, $device_group_id, $accept, $content_type, $update_device_groups_request): \OpenAPI\Client\Model\DeviceGroupsIdResponse
```

/edge_applications/{edge_application_id}/device_groups/{device_group_id}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsDeviceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$device_group_id = 56; // int
$accept = application/json; version=3; // string
$content_type = application/json; // string | The type of coding used in the Body (application/json). <br>  Example: Content-Type: application/json
$update_device_groups_request = new \OpenAPI\Client\Model\UpdateDeviceGroupsRequest(); // \OpenAPI\Client\Model\UpdateDeviceGroupsRequest

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdPut($edge_application_id, $device_group_id, $accept, $content_type, $update_device_groups_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsDeviceGroupsApi->edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **device_group_id** | **int**|  | |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**| The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json | [optional] |
| **update_device_groups_request** | [**\OpenAPI\Client\Model\UpdateDeviceGroupsRequest**](../Model/UpdateDeviceGroupsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DeviceGroupsIdResponse**](../Model/DeviceGroupsIdResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdDeviceGroupsGet()`

```php
edgeApplicationsEdgeApplicationIdDeviceGroupsGet($edge_application_id, $page, $page_size, $filter, $order_by, $sort, $accept): \OpenAPI\Client\Model\DeviceGroupsResponse
```

/edge_applications/{edge_application_id}/device_groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsDeviceGroupsApi(
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
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdDeviceGroupsGet($edge_application_id, $page, $page_size, $filter, $order_by, $sort, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsDeviceGroupsApi->edgeApplicationsEdgeApplicationIdDeviceGroupsGet: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\DeviceGroupsResponse**](../Model/DeviceGroupsResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdDeviceGroupsPost()`

```php
edgeApplicationsEdgeApplicationIdDeviceGroupsPost($edge_application_id, $accept, $content_type, $create_device_groups_request): \OpenAPI\Client\Model\DeviceGroupsIdResponse
```

/edge_applications/{edge_application_id}/device_groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsDeviceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$accept = application/json; version=3; // string
$content_type = application/json; // string | The type of coding used in the Body (application/json). <br>  Example: Content-Type: application/json
$create_device_groups_request = new \OpenAPI\Client\Model\CreateDeviceGroupsRequest(); // \OpenAPI\Client\Model\CreateDeviceGroupsRequest

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdDeviceGroupsPost($edge_application_id, $accept, $content_type, $create_device_groups_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsDeviceGroupsApi->edgeApplicationsEdgeApplicationIdDeviceGroupsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**| The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json | [optional] |
| **create_device_groups_request** | [**\OpenAPI\Client\Model\CreateDeviceGroupsRequest**](../Model/CreateDeviceGroupsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DeviceGroupsIdResponse**](../Model/DeviceGroupsIdResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
