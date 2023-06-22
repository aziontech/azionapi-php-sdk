# OpenAPI\Client\EdgeApplicationsCacheSettingsApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdDelete()**](EdgeApplicationsCacheSettingsApi.md#edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdDelete) | **DELETE** /edge_applications/{edge_application_id}/cache_settings/{cache_settings_id} | /edge_applications/:edge_application_id:/cache_settings/:cache_settings_id: |
| [**edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet()**](EdgeApplicationsCacheSettingsApi.md#edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet) | **GET** /edge_applications/{edge_application_id}/cache_settings/{cache_settings_id} | /edge_applications/:edge_application_id:/cache_settings/:cache_settings_id: |
| [**edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPatch()**](EdgeApplicationsCacheSettingsApi.md#edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPatch) | **PATCH** /edge_applications/{edge_application_id}/cache_settings/{cache_settings_id} | /edge_applications/:edge_application_id:/cache_settings/:cache_settings_id: |
| [**edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut()**](EdgeApplicationsCacheSettingsApi.md#edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut) | **PUT** /edge_applications/{edge_application_id}/cache_settings/{cache_settings_id} | /edge_applications/:edge_application_id:/cache_settings/ca |
| [**edgeApplicationsEdgeApplicationIdCacheSettingsGet()**](EdgeApplicationsCacheSettingsApi.md#edgeApplicationsEdgeApplicationIdCacheSettingsGet) | **GET** /edge_applications/{edge_application_id}/cache_settings | /edge_applications/{edge_application_id}/cache_settings |
| [**edgeApplicationsEdgeApplicationIdCacheSettingsPost()**](EdgeApplicationsCacheSettingsApi.md#edgeApplicationsEdgeApplicationIdCacheSettingsPost) | **POST** /edge_applications/{edge_application_id}/cache_settings | /edge_applications/:edge_application_id:/cache_settings |


## `edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdDelete()`

```php
edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdDelete($edge_application_id, $cache_settings_id, $accept, $content_type)
```

/edge_applications/:edge_application_id:/cache_settings/:cache_settings_id:

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsCacheSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$cache_settings_id = 56; // int
$accept = application/json; version=3; // string
$content_type = application/json; // string | The type of coding used in the Body (application/json). <br>  Example: Content-Type: application/json

try {
    $apiInstance->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdDelete($edge_application_id, $cache_settings_id, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsCacheSettingsApi->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **cache_settings_id** | **int**|  | |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**| The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json | [optional] |

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

## `edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet()`

```php
edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet($edge_application_id, $cache_settings_id, $accept): \OpenAPI\Client\Model\ApplicationCacheGetOneResponse
```

/edge_applications/:edge_application_id:/cache_settings/:cache_settings_id:

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsCacheSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$cache_settings_id = 56; // int
$accept = application/json; version=3; // string

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet($edge_application_id, $cache_settings_id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsCacheSettingsApi->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **cache_settings_id** | **int**|  | |
| **accept** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApplicationCacheGetOneResponse**](../Model/ApplicationCacheGetOneResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPatch()`

```php
edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPatch($edge_application_id, $cache_settings_id, $accept, $application_cache_patch_request): \OpenAPI\Client\Model\ApplicationCachePatchResponse
```

/edge_applications/:edge_application_id:/cache_settings/:cache_settings_id:

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsCacheSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$cache_settings_id = 56; // int
$accept = application/json; version=3; // string
$application_cache_patch_request = new \OpenAPI\Client\Model\ApplicationCachePatchRequest(); // \OpenAPI\Client\Model\ApplicationCachePatchRequest

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPatch($edge_application_id, $cache_settings_id, $accept, $application_cache_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsCacheSettingsApi->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **cache_settings_id** | **int**|  | |
| **accept** | **string**|  | [optional] |
| **application_cache_patch_request** | [**\OpenAPI\Client\Model\ApplicationCachePatchRequest**](../Model/ApplicationCachePatchRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApplicationCachePatchResponse**](../Model/ApplicationCachePatchResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut()`

```php
edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut($edge_application_id, $cache_settings_id, $accept, $content_type, $application_cache_put_request): \OpenAPI\Client\Model\ApplicationCachePutResponse
```

/edge_applications/:edge_application_id:/cache_settings/ca

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsCacheSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$cache_settings_id = 56; // int
$accept = application/json; version=3; // string
$content_type = application/json; // string | The type of coding used in the Body (application/json). <br>  Example: Content-Type: application/json
$application_cache_put_request = new \OpenAPI\Client\Model\ApplicationCachePutRequest(); // \OpenAPI\Client\Model\ApplicationCachePutRequest

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut($edge_application_id, $cache_settings_id, $accept, $content_type, $application_cache_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsCacheSettingsApi->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **cache_settings_id** | **int**|  | |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**| The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json | [optional] |
| **application_cache_put_request** | [**\OpenAPI\Client\Model\ApplicationCachePutRequest**](../Model/ApplicationCachePutRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApplicationCachePutResponse**](../Model/ApplicationCachePutResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdCacheSettingsGet()`

```php
edgeApplicationsEdgeApplicationIdCacheSettingsGet($edge_application_id, $page, $page_size, $filter, $order_by, $sort, $accept): \OpenAPI\Client\Model\ApplicationCacheGetResponse
```

/edge_applications/{edge_application_id}/cache_settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsCacheSettingsApi(
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
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdCacheSettingsGet($edge_application_id, $page, $page_size, $filter, $order_by, $sort, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsCacheSettingsApi->edgeApplicationsEdgeApplicationIdCacheSettingsGet: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ApplicationCacheGetResponse**](../Model/ApplicationCacheGetResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdCacheSettingsPost()`

```php
edgeApplicationsEdgeApplicationIdCacheSettingsPost($edge_application_id, $accept, $content_type, $application_cache_create_request): \OpenAPI\Client\Model\ApplicationCacheCreateResponse
```

/edge_applications/:edge_application_id:/cache_settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsCacheSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$accept = application/json; version=3; // string
$content_type = application/json; // string | The type of coding used in the Body (application/json). <br>  Example: Content-Type: application/json
$application_cache_create_request = new \OpenAPI\Client\Model\ApplicationCacheCreateRequest(); // \OpenAPI\Client\Model\ApplicationCacheCreateRequest

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdCacheSettingsPost($edge_application_id, $accept, $content_type, $application_cache_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsCacheSettingsApi->edgeApplicationsEdgeApplicationIdCacheSettingsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**| The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json | [optional] |
| **application_cache_create_request** | [**\OpenAPI\Client\Model\ApplicationCacheCreateRequest**](../Model/ApplicationCacheCreateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApplicationCacheCreateResponse**](../Model/ApplicationCacheCreateResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
