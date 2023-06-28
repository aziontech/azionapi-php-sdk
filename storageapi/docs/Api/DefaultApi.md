# OpenAPI\Client\DefaultApi

All URIs are relative to https://storage-api.azion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteVersion()**](DefaultApi.md#deleteVersion) | **DELETE** /storage/{version_id}/delete | /storage/:version_id/delete |
| [**storageVersionIdPost()**](DefaultApi.md#storageVersionIdPost) | **POST** /storage/{version_id} | /storage/:version_id |


## `deleteVersion()`

```php
deleteVersion($version_id)
```

/storage/:version_id/delete

Delete a version. A version is just um path prefix/sub-namespace for a set of files.

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

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageVersionIdPost()`

```php
storageVersionIdPost($x_azion_static_path, $version_id, $content_type, $body): mixed
```

/storage/:version_id

Upload file and transfer to remote storage

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
$x_azion_static_path = 'x_azion_static_path_example'; // string | Required in order to get the path and file name. i.e.: assets/css/main.css
$version_id = 'version_id_example'; // string | 
$content_type = 'b2/x-auto'; // string | The content type of the file (Example: text/plain).
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->storageVersionIdPost($x_azion_static_path, $version_id, $content_type, $body);
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
| **content_type** | **string**| The content type of the file (Example: text/plain). | [optional] [default to &#39;b2/x-auto&#39;] |
| **body** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

**mixed**

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
