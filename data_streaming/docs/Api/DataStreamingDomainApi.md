# OpenAPI\Client\DataStreamingDomainApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listDataStreaming()**](DataStreamingDomainApi.md#listDataStreaming) | **GET** /data_streaming/domains | List all domains used on data streaming |


## `listDataStreaming()`

```php
listDataStreaming($name, $streaming_id, $selected): \OpenAPI\Client\Model\DataStreamingsDomainResponse
```

List all domains used on data streaming

Use the GET method to list all available domains that can be used on Data Streaming operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DataStreamingDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Domain's name in data streaming
$streaming_id = 56; // int
$selected = True; // bool

try {
    $result = $apiInstance->listDataStreaming($name, $streaming_id, $selected);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataStreamingDomainApi->listDataStreaming: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Domain&#39;s name in data streaming | [optional] |
| **streaming_id** | **int**|  | [optional] |
| **selected** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DataStreamingsDomainResponse**](../Model/DataStreamingsDomainResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
