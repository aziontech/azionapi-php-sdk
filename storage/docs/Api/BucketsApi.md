# OpenAPI\Client\BucketsApi

All URIs are relative to https://api.azion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV1StorageBucketsCreate()**](BucketsApi.md#apiV1StorageBucketsCreate) | **POST** /v4/storage/buckets | /v4/storage/buckets |
| [**apiV1StorageBucketsDestroy()**](BucketsApi.md#apiV1StorageBucketsDestroy) | **DELETE** /v4/storage/buckets/{name} | /v4/storage/buckets/:name |
| [**apiV1StorageBucketsList()**](BucketsApi.md#apiV1StorageBucketsList) | **GET** /v4/storage/buckets | /v4/storage/buckets |
| [**apiV1StorageBucketsPartialUpdate()**](BucketsApi.md#apiV1StorageBucketsPartialUpdate) | **PATCH** /v4/storage/buckets/{name} | /v4/storage/buckets/:name |


## `apiV1StorageBucketsCreate()`

```php
apiV1StorageBucketsCreate($bucket_create): \OpenAPI\Client\Model\ResponseBucket
```

/v4/storage/buckets



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket_create = new \OpenAPI\Client\Model\BucketCreate(); // \OpenAPI\Client\Model\BucketCreate

try {
    $result = $apiInstance->apiV1StorageBucketsCreate($bucket_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BucketsApi->apiV1StorageBucketsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket_create** | [**\OpenAPI\Client\Model\BucketCreate**](../Model/BucketCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResponseBucket**](../Model/ResponseBucket.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1StorageBucketsDestroy()`

```php
apiV1StorageBucketsDestroy($name): \OpenAPI\Client\Model\ResponseDeleteBucket
```

/v4/storage/buckets/:name



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string

try {
    $result = $apiInstance->apiV1StorageBucketsDestroy($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BucketsApi->apiV1StorageBucketsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ResponseDeleteBucket**](../Model/ResponseDeleteBucket.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1StorageBucketsList()`

```php
apiV1StorageBucketsList($page, $page_size): \OpenAPI\Client\Model\PaginatedBucketList
```

/v4/storage/buckets



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.
$page_size = 56; // int | Number of results to return per page.

try {
    $result = $apiInstance->apiV1StorageBucketsList($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BucketsApi->apiV1StorageBucketsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| A page number within the paginated result set. | [optional] |
| **page_size** | **int**| Number of results to return per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedBucketList**](../Model/PaginatedBucketList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1StorageBucketsPartialUpdate()`

```php
apiV1StorageBucketsPartialUpdate($name, $patched_bucket): \OpenAPI\Client\Model\ResponseBucket
```

/v4/storage/buckets/:name



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string
$patched_bucket = new \OpenAPI\Client\Model\PatchedBucket(); // \OpenAPI\Client\Model\PatchedBucket

try {
    $result = $apiInstance->apiV1StorageBucketsPartialUpdate($name, $patched_bucket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BucketsApi->apiV1StorageBucketsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **patched_bucket** | [**\OpenAPI\Client\Model\PatchedBucket**](../Model/PatchedBucket.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResponseBucket**](../Model/ResponseBucket.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
