# OpenAPI\Client\DefaultApi

All URIs are relative to https://storage-api.azion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteVersion()**](DefaultApi.md#deleteVersion) | **DELETE** /storage/{version_id}/delete |  |
| [**storageVersionIdPost()**](DefaultApi.md#storageVersionIdPost) | **POST** /storage/{version_id} |  |


## `deleteVersion()`

```php
deleteVersion($version_id)
```



Delete a version. A version is just um path prefix/sub-namespace for a set of files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version_id = 'version_id_example'; // string | The version identifier

try {
    $apiInstance->deleteVersion($version_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version_id** | **string**| The version identifier | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageVersionIdPost()`

```php
storageVersionIdPost($x_azion_static_path, $version_id, $body): mixed
```



Upload file and transfer to remote storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_azion_static_path = 'x_azion_static_path_example'; // string | Required in order to get the path and file name. i.e.: assets/css/main.css
$version_id = 'version_id_example'; // string | 
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->storageVersionIdPost($x_azion_static_path, $version_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->storageVersionIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_azion_static_path** | **string**| Required in order to get the path and file name. i.e.: assets/css/main.css | |
| **version_id** | **string**|  | |
| **body** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `b2/x-auto`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
