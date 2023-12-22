# OpenAPI\Client\StorageApi

All URIs are relative to https://api.azion.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**storageApiBucketsCreate()**](StorageApi.md#storageApiBucketsCreate) | **POST** /v4/storage/buckets | Create a new bucket |
| [**storageApiBucketsDestroy()**](StorageApi.md#storageApiBucketsDestroy) | **DELETE** /v4/storage/buckets/{name} | Delete a bucket |
| [**storageApiBucketsList()**](StorageApi.md#storageApiBucketsList) | **GET** /v4/storage/buckets | List buckets |
| [**storageApiBucketsObjectsCreate()**](StorageApi.md#storageApiBucketsObjectsCreate) | **POST** /v4/storage/buckets/{bucket_name}/objects/{object_key} | Create new object key |
| [**storageApiBucketsObjectsDestroy()**](StorageApi.md#storageApiBucketsObjectsDestroy) | **DELETE** /v4/storage/buckets/{bucket_name}/objects/{object_key} | Delete object key |
| [**storageApiBucketsObjectsList()**](StorageApi.md#storageApiBucketsObjectsList) | **GET** /v4/storage/buckets/{bucket_name}/objects | List buckets objects |
| [**storageApiBucketsObjectsRetrieve()**](StorageApi.md#storageApiBucketsObjectsRetrieve) | **GET** /v4/storage/buckets/{bucket_name}/objects/{object_key} | Download object |
| [**storageApiBucketsObjectsUpdate()**](StorageApi.md#storageApiBucketsObjectsUpdate) | **PUT** /v4/storage/buckets/{bucket_name}/objects/{object_key} | Update the object key |
| [**storageApiBucketsPartialUpdate()**](StorageApi.md#storageApiBucketsPartialUpdate) | **PATCH** /v4/storage/buckets/{name} | Update bucket info |


## `storageApiBucketsCreate()`

```php
storageApiBucketsCreate($bucket_create): \OpenAPI\Client\Model\ResponseBucket
```

Create a new bucket



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket_create = new \OpenAPI\Client\Model\BucketCreate(); // \OpenAPI\Client\Model\BucketCreate

try {
    $result = $apiInstance->storageApiBucketsCreate($bucket_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageApiBucketsCreate: ', $e->getMessage(), PHP_EOL;
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

## `storageApiBucketsDestroy()`

```php
storageApiBucketsDestroy($name): \OpenAPI\Client\Model\SuccessBucketOperation
```

Delete a bucket



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string

try {
    $result = $apiInstance->storageApiBucketsDestroy($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageApiBucketsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\SuccessBucketOperation**](../Model/SuccessBucketOperation.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageApiBucketsList()`

```php
storageApiBucketsList($page, $page_size): \OpenAPI\Client\Model\PaginatedBucketList
```

List buckets



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.
$page_size = 56; // int | Number of results to return per page.

try {
    $result = $apiInstance->storageApiBucketsList($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageApiBucketsList: ', $e->getMessage(), PHP_EOL;
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

## `storageApiBucketsObjectsCreate()`

```php
storageApiBucketsObjectsCreate($bucket_name, $object_key, $body): \OpenAPI\Client\Model\SuccessObjectOperation
```

Create new object key

Create a new object key in the bucket.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket_name = 'bucket_name_example'; // string
$object_key = 'object_key_example'; // string
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->storageApiBucketsObjectsCreate($bucket_name, $object_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageApiBucketsObjectsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket_name** | **string**|  | |
| **object_key** | **string**|  | |
| **body** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SuccessObjectOperation**](../Model/SuccessObjectOperation.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageApiBucketsObjectsDestroy()`

```php
storageApiBucketsObjectsDestroy($bucket_name, $object_key): \OpenAPI\Client\Model\SuccessObjectOperation
```

Delete object key

Delete an object key from bucket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket_name = 'bucket_name_example'; // string
$object_key = 'object_key_example'; // string

try {
    $result = $apiInstance->storageApiBucketsObjectsDestroy($bucket_name, $object_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageApiBucketsObjectsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket_name** | **string**|  | |
| **object_key** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\SuccessObjectOperation**](../Model/SuccessObjectOperation.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageApiBucketsObjectsList()`

```php
storageApiBucketsObjectsList($bucket_name, $page, $page_size): \OpenAPI\Client\Model\PaginatedBucketObjectList
```

List buckets objects



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket_name = 'bucket_name_example'; // string
$page = 56; // int | A page number within the paginated result set.
$page_size = 56; // int | Number of results to return per page.

try {
    $result = $apiInstance->storageApiBucketsObjectsList($bucket_name, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageApiBucketsObjectsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket_name** | **string**|  | |
| **page** | **int**| A page number within the paginated result set. | [optional] |
| **page_size** | **int**| Number of results to return per page. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedBucketObjectList**](../Model/PaginatedBucketObjectList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageApiBucketsObjectsRetrieve()`

```php
storageApiBucketsObjectsRetrieve($bucket_name, $object_key): \SplFileObject
```

Download object

Download the object key from bucket.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket_name = 'bucket_name_example'; // string
$object_key = 'object_key_example'; // string

try {
    $result = $apiInstance->storageApiBucketsObjectsRetrieve($bucket_name, $object_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageApiBucketsObjectsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket_name** | **string**|  | |
| **object_key** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageApiBucketsObjectsUpdate()`

```php
storageApiBucketsObjectsUpdate($bucket_name, $object_key, $body): \OpenAPI\Client\Model\SuccessObjectOperation
```

Update the object key

Update the object key from bucket.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket_name = 'bucket_name_example'; // string
$object_key = 'object_key_example'; // string
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->storageApiBucketsObjectsUpdate($bucket_name, $object_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageApiBucketsObjectsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bucket_name** | **string**|  | |
| **object_key** | **string**|  | |
| **body** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SuccessObjectOperation**](../Model/SuccessObjectOperation.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageApiBucketsPartialUpdate()`

```php
storageApiBucketsPartialUpdate($name): \OpenAPI\Client\Model\ResponseBucket
```

Update bucket info



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string

try {
    $result = $apiInstance->storageApiBucketsPartialUpdate($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageApiBucketsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ResponseBucket**](../Model/ResponseBucket.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
