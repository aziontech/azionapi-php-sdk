# OpenAPI\Client\EdgeApplicationsMainSettingsApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**edgeApplicationsGet()**](EdgeApplicationsMainSettingsApi.md#edgeApplicationsGet) | **GET** /edge_applications | /edge_applications |
| [**edgeApplicationsIdDelete()**](EdgeApplicationsMainSettingsApi.md#edgeApplicationsIdDelete) | **DELETE** /edge_applications/{id} | /edge_applications/:id |
| [**edgeApplicationsIdGet()**](EdgeApplicationsMainSettingsApi.md#edgeApplicationsIdGet) | **GET** /edge_applications/{id} | /edge_applications/:id |
| [**edgeApplicationsIdPatch()**](EdgeApplicationsMainSettingsApi.md#edgeApplicationsIdPatch) | **PATCH** /edge_applications/{id} | /edge_applications/:id |
| [**edgeApplicationsIdPut()**](EdgeApplicationsMainSettingsApi.md#edgeApplicationsIdPut) | **PUT** /edge_applications/{id} | /edge_applications/:id |
| [**edgeApplicationsPost()**](EdgeApplicationsMainSettingsApi.md#edgeApplicationsPost) | **POST** /edge_applications | /edge_applications |


## `edgeApplicationsGet()`

```php
edgeApplicationsGet($page, $page_size, $filter, $order_by, $sort, $accept): \OpenAPI\Client\Model\GetApplicationsResponse
```

/edge_applications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsMainSettingsApi(
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
$accept = application/json; version=3; // string

try {
    $result = $apiInstance->edgeApplicationsGet($page, $page_size, $filter, $order_by, $sort, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsMainSettingsApi->edgeApplicationsGet: ', $e->getMessage(), PHP_EOL;
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
| **accept** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetApplicationsResponse**](../Model/GetApplicationsResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsIdDelete()`

```php
edgeApplicationsIdDelete($id, $accept)
```

/edge_applications/:id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsMainSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the edge application that you plan to delete.
$accept = application/json; version=3; // string

try {
    $apiInstance->edgeApplicationsIdDelete($id, $accept);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsMainSettingsApi->edgeApplicationsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of the edge application that you plan to delete. | |
| **accept** | **string**|  | [optional] |

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

## `edgeApplicationsIdGet()`

```php
edgeApplicationsIdGet($id, $accept): \OpenAPI\Client\Model\GetApplicationResponse
```

/edge_applications/:id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsMainSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$accept = application/json; version=3; // string

try {
    $result = $apiInstance->edgeApplicationsIdGet($id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsMainSettingsApi->edgeApplicationsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **accept** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetApplicationResponse**](../Model/GetApplicationResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsIdPatch()`

```php
edgeApplicationsIdPatch($id, $accept, $content_type, $application_update_request): \OpenAPI\Client\Model\ApplicationUpdateResponse
```

/edge_applications/:id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsMainSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$accept = application/json; version=3; // string
$content_type = application/json; // string | The type of coding used in the Body (application/json). <br>  Example: Content-Type: application/json
$application_update_request = new \OpenAPI\Client\Model\ApplicationUpdateRequest(); // \OpenAPI\Client\Model\ApplicationUpdateRequest

try {
    $result = $apiInstance->edgeApplicationsIdPatch($id, $accept, $content_type, $application_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsMainSettingsApi->edgeApplicationsIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**| The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json | [optional] |
| **application_update_request** | [**\OpenAPI\Client\Model\ApplicationUpdateRequest**](../Model/ApplicationUpdateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApplicationUpdateResponse**](../Model/ApplicationUpdateResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsIdPut()`

```php
edgeApplicationsIdPut($id, $accept, $content_type, $application_put_request): \OpenAPI\Client\Model\ApplicationPutResult
```

/edge_applications/:id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsMainSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the edge application to be overwritten.
$accept = application/json; version=3; // string
$content_type = application/json; // string | The type of coding used in the Body (application/json). <br>  Example: Content-Type: application/json
$application_put_request = new \OpenAPI\Client\Model\ApplicationPutRequest(); // \OpenAPI\Client\Model\ApplicationPutRequest

try {
    $result = $apiInstance->edgeApplicationsIdPut($id, $accept, $content_type, $application_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsMainSettingsApi->edgeApplicationsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the edge application to be overwritten. | |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**| The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json | [optional] |
| **application_put_request** | [**\OpenAPI\Client\Model\ApplicationPutRequest**](../Model/ApplicationPutRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApplicationPutResult**](../Model/ApplicationPutResult.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsPost()`

```php
edgeApplicationsPost($accept, $content_type, $create_application_request): \OpenAPI\Client\Model\CreateApplicationResult
```

/edge_applications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsMainSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; version=3; // string
$content_type = application/json; // string | The type of coding used in the Body (application/json). <br>  Example: Content-Type: application/json
$create_application_request = new \OpenAPI\Client\Model\CreateApplicationRequest(); // \OpenAPI\Client\Model\CreateApplicationRequest

try {
    $result = $apiInstance->edgeApplicationsPost($accept, $content_type, $create_application_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsMainSettingsApi->edgeApplicationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**| The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json | [optional] |
| **create_application_request** | [**\OpenAPI\Client\Model\CreateApplicationRequest**](../Model/CreateApplicationRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateApplicationResult**](../Model/CreateApplicationResult.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
