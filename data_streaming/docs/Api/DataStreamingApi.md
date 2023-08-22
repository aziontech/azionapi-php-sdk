# OpenAPI\Client\DataStreamingApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNewDataStreaming()**](DataStreamingApi.md#createNewDataStreaming) | **POST** /data_streaming/streamings | Create a new data streaming |
| [**deleteDataStreamingById()**](DataStreamingApi.md#deleteDataStreamingById) | **DELETE** /data_streaming/streamings/{data_streaming_id} | Delete data streaming |
| [**editDataStreamingById()**](DataStreamingApi.md#editDataStreamingById) | **PATCH** /data_streaming/streamings/{data_streaming_id} | Edit data streaming |
| [**listDataStreamingById()**](DataStreamingApi.md#listDataStreamingById) | **GET** /data_streaming/streamings/{data_streaming_id} | Get expecific data streaming by Data Streaming ID |
| [**listDataStreamings()**](DataStreamingApi.md#listDataStreamings) | **GET** /data_streaming/streamings | List all exist data streamings |
| [**overwriteDataStreamingById()**](DataStreamingApi.md#overwriteDataStreamingById) | **PUT** /data_streaming/streamings/{data_streaming_id} | Overwrite data streaming |


## `createNewDataStreaming()`

```php
createNewDataStreaming($create_new_data_streaming_request): \OpenAPI\Client\Model\CreateNewDataStreaming201Response
```

Create a new data streaming



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DataStreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_data_streaming_request = new \OpenAPI\Client\Model\CreateNewDataStreamingRequest(); // \OpenAPI\Client\Model\CreateNewDataStreamingRequest

try {
    $result = $apiInstance->createNewDataStreaming($create_new_data_streaming_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataStreamingApi->createNewDataStreaming: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_data_streaming_request** | [**\OpenAPI\Client\Model\CreateNewDataStreamingRequest**](../Model/CreateNewDataStreamingRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateNewDataStreaming201Response**](../Model/CreateNewDataStreaming201Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDataStreamingById()`

```php
deleteDataStreamingById($data_streaming_id)
```

Delete data streaming

Use the DELETE method to remove a data streaming from your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DataStreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_streaming_id = 56; // int

try {
    $apiInstance->deleteDataStreamingById($data_streaming_id);
} catch (Exception $e) {
    echo 'Exception when calling DataStreamingApi->deleteDataStreamingById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data_streaming_id** | **int**|  | |

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

## `editDataStreamingById()`

```php
editDataStreamingById($data_streaming_id, $create_new_data_streaming_request): \OpenAPI\Client\Model\CreateNewDataStreaming201Response
```

Edit data streaming

Use the PATCH method to change only select settings of your data streaming.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DataStreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_streaming_id = 56; // int
$create_new_data_streaming_request = new \OpenAPI\Client\Model\CreateNewDataStreamingRequest(); // \OpenAPI\Client\Model\CreateNewDataStreamingRequest

try {
    $result = $apiInstance->editDataStreamingById($data_streaming_id, $create_new_data_streaming_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataStreamingApi->editDataStreamingById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data_streaming_id** | **int**|  | |
| **create_new_data_streaming_request** | [**\OpenAPI\Client\Model\CreateNewDataStreamingRequest**](../Model/CreateNewDataStreamingRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateNewDataStreaming201Response**](../Model/CreateNewDataStreaming201Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDataStreamingById()`

```php
listDataStreamingById($data_streaming_id): \OpenAPI\Client\Model\DataStreamingsById
```

Get expecific data streaming by Data Streaming ID

Use the GET method and add the data streaming's ID to the URI of the request to get more data on a specific data streaming.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DataStreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_streaming_id = 56; // int

try {
    $result = $apiInstance->listDataStreamingById($data_streaming_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataStreamingApi->listDataStreamingById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data_streaming_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\DataStreamingsById**](../Model/DataStreamingsById.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDataStreamings()`

```php
listDataStreamings(): \OpenAPI\Client\Model\DataStreamingResponseWithResults
```

List all exist data streamings

Use the GET method to list all data streamings, both active and inactive, and its properties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DataStreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listDataStreamings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataStreamingApi->listDataStreamings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\DataStreamingResponseWithResults**](../Model/DataStreamingResponseWithResults.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `overwriteDataStreamingById()`

```php
overwriteDataStreamingById($data_streaming_id, $create_new_data_streaming_request): \OpenAPI\Client\Model\CreateNewDataStreaming201Response
```

Overwrite data streaming

Use the PUT method to overwrite the data streaming. Although  you can change a single property using the PUT method, you must pass all fields for the request to be completed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DataStreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_streaming_id = 56; // int
$create_new_data_streaming_request = new \OpenAPI\Client\Model\CreateNewDataStreamingRequest(); // \OpenAPI\Client\Model\CreateNewDataStreamingRequest

try {
    $result = $apiInstance->overwriteDataStreamingById($data_streaming_id, $create_new_data_streaming_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataStreamingApi->overwriteDataStreamingById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data_streaming_id** | **int**|  | |
| **create_new_data_streaming_request** | [**\OpenAPI\Client\Model\CreateNewDataStreamingRequest**](../Model/CreateNewDataStreamingRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateNewDataStreaming201Response**](../Model/CreateNewDataStreaming201Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
