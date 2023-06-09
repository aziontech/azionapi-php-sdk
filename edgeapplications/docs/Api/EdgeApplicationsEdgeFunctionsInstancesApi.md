# OpenAPI\Client\EdgeApplicationsEdgeFunctionsInstancesApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdDelete()**](EdgeApplicationsEdgeFunctionsInstancesApi.md#edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdDelete) | **DELETE** /edge_applications/{edge_application_id}/functions_instances/{functions_instances_id} | /edge_applications/:edge_application_id:/functions_instances/:functions_instances_id: |
| [**edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdGet()**](EdgeApplicationsEdgeFunctionsInstancesApi.md#edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdGet) | **GET** /edge_applications/{edge_application_id}/functions_instances/{functions_instances_id} | /edge_applications/:edge_application_id:/functions_instances/:functions_instances_id: |
| [**edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdPatch()**](EdgeApplicationsEdgeFunctionsInstancesApi.md#edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdPatch) | **PATCH** /edge_applications/{edge_application_id}/functions_instances/{functions_instances_id} | /edge_applications/:edge_application_id:/functions_instances/:functions_instances_id: |
| [**edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdPut()**](EdgeApplicationsEdgeFunctionsInstancesApi.md#edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdPut) | **PUT** /edge_applications/{edge_application_id}/functions_instances/{functions_instances_id} | /edge_applications/:edge_application_id:/functions_instances/:functions_instances_id: |
| [**edgeApplicationsEdgeApplicationIdFunctionsInstancesGet()**](EdgeApplicationsEdgeFunctionsInstancesApi.md#edgeApplicationsEdgeApplicationIdFunctionsInstancesGet) | **GET** /edge_applications/{edge_application_id}/functions_instances | /edge_applications/:edge_application_id:/functions_instances |
| [**edgeApplicationsEdgeApplicationIdFunctionsInstancesPost()**](EdgeApplicationsEdgeFunctionsInstancesApi.md#edgeApplicationsEdgeApplicationIdFunctionsInstancesPost) | **POST** /edge_applications/{edge_application_id}/functions_instances | edge_application/:edge_application_id:/functions_instances |


## `edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdDelete()`

```php
edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdDelete($edge_application_id, $functions_instances_id, $accept, $content_type)
```

/edge_applications/:edge_application_id:/functions_instances/:functions_instances_id:

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsEdgeFunctionsInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 'edge_application_id_example'; // string
$functions_instances_id = 'functions_instances_id_example'; // string
$accept = application/json; version=3; // string
$content_type = application/json; // string | The type of coding used in the Body (application/json). <br>  Example: Content-Type: application/json

try {
    $apiInstance->edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdDelete($edge_application_id, $functions_instances_id, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsEdgeFunctionsInstancesApi->edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **string**|  | |
| **functions_instances_id** | **string**|  | |
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

## `edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdGet()`

```php
edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdGet($edge_application_id, $functions_instances_id, $accept): \OpenAPI\Client\Model\ApplicationInstancesGetOneResponse
```

/edge_applications/:edge_application_id:/functions_instances/:functions_instances_id:

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsEdgeFunctionsInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$functions_instances_id = 56; // int
$accept = application/json; version=3; // string | The id of the edge function instance you plan to query.

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdGet($edge_application_id, $functions_instances_id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsEdgeFunctionsInstancesApi->edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **functions_instances_id** | **int**|  | |
| **accept** | **string**| The id of the edge function instance you plan to query. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApplicationInstancesGetOneResponse**](../Model/ApplicationInstancesGetOneResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdPatch()`

```php
edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdPatch($edge_application_id, $functions_instances_id, $accept, $content_type, $application_update_instance_request): \OpenAPI\Client\Model\ApplicationInstanceResults
```

/edge_applications/:edge_application_id:/functions_instances/:functions_instances_id:

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsEdgeFunctionsInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 'edge_application_id_example'; // string | The id of the edge application you plan to overwrite
$functions_instances_id = 'functions_instances_id_example'; // string | The id of the edge function instance you plan to overwrite.
$accept = application/json; version=3; // string
$content_type = application/json; // string | The type of coding used in the Body (application/json). <br>  Example: Content-Type: application/json
$application_update_instance_request = new \OpenAPI\Client\Model\ApplicationUpdateInstanceRequest(); // \OpenAPI\Client\Model\ApplicationUpdateInstanceRequest

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdPatch($edge_application_id, $functions_instances_id, $accept, $content_type, $application_update_instance_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsEdgeFunctionsInstancesApi->edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **string**| The id of the edge application you plan to overwrite | |
| **functions_instances_id** | **string**| The id of the edge function instance you plan to overwrite. | |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**| The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json | [optional] |
| **application_update_instance_request** | [**\OpenAPI\Client\Model\ApplicationUpdateInstanceRequest**](../Model/ApplicationUpdateInstanceRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApplicationInstanceResults**](../Model/ApplicationInstanceResults.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdPut()`

```php
edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdPut($edge_application_id, $functions_instances_id, $accept, $content_type, $application_put_instance_request): \OpenAPI\Client\Model\ApplicationInstanceResults
```

/edge_applications/:edge_application_id:/functions_instances/:functions_instances_id:

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsEdgeFunctionsInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 'edge_application_id_example'; // string | The id of the edge application you plan to overwrite
$functions_instances_id = 'functions_instances_id_example'; // string | The id of the edge function instance you plan to overwrite.
$accept = application/json; version=3; // string
$content_type = application/json; // string | The type of coding used in the Body (application/json). <br>  Example: Content-Type: application/json
$application_put_instance_request = new \OpenAPI\Client\Model\ApplicationPutInstanceRequest(); // \OpenAPI\Client\Model\ApplicationPutInstanceRequest

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdPut($edge_application_id, $functions_instances_id, $accept, $content_type, $application_put_instance_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsEdgeFunctionsInstancesApi->edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **string**| The id of the edge application you plan to overwrite | |
| **functions_instances_id** | **string**| The id of the edge function instance you plan to overwrite. | |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**| The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json | [optional] |
| **application_put_instance_request** | [**\OpenAPI\Client\Model\ApplicationPutInstanceRequest**](../Model/ApplicationPutInstanceRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApplicationInstanceResults**](../Model/ApplicationInstanceResults.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdFunctionsInstancesGet()`

```php
edgeApplicationsEdgeApplicationIdFunctionsInstancesGet($edge_application_id, $page, $page_size, $filter, $order_by, $sort, $accept): \OpenAPI\Client\Model\ApplicationInstancesGetResponse
```

/edge_applications/:edge_application_id:/functions_instances

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsEdgeFunctionsInstancesApi(
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
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdFunctionsInstancesGet($edge_application_id, $page, $page_size, $filter, $order_by, $sort, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsEdgeFunctionsInstancesApi->edgeApplicationsEdgeApplicationIdFunctionsInstancesGet: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ApplicationInstancesGetResponse**](../Model/ApplicationInstancesGetResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdFunctionsInstancesPost()`

```php
edgeApplicationsEdgeApplicationIdFunctionsInstancesPost($edge_application_id, $accept, $content_type, $application_create_instance_request): \OpenAPI\Client\Model\ApplicationInstanceResults
```

edge_application/:edge_application_id:/functions_instances

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsEdgeFunctionsInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$accept = application/json; version=3; // string
$content_type = application/json; // string | The type of coding used in the Body (application/json). <br>  Example: Content-Type: application/json
$application_create_instance_request = new \OpenAPI\Client\Model\ApplicationCreateInstanceRequest(); // \OpenAPI\Client\Model\ApplicationCreateInstanceRequest

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdFunctionsInstancesPost($edge_application_id, $accept, $content_type, $application_create_instance_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsEdgeFunctionsInstancesApi->edgeApplicationsEdgeApplicationIdFunctionsInstancesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**| The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json | [optional] |
| **application_create_instance_request** | [**\OpenAPI\Client\Model\ApplicationCreateInstanceRequest**](../Model/ApplicationCreateInstanceRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApplicationInstanceResults**](../Model/ApplicationInstanceResults.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
