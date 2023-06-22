# OpenAPI\Client\RealTimePurgeApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**purgeCacheKey()**](RealTimePurgeApi.md#purgeCacheKey) | **POST** /purge/cachekey | /purge/cachekey |
| [**purgeUrl()**](RealTimePurgeApi.md#purgeUrl) | **POST** /purge/url | /purge/url |
| [**purgeWildcard()**](RealTimePurgeApi.md#purgeWildcard) | **POST** /purge/wildcard | /purge/wildcard |


## `purgeCacheKey()`

```php
purgeCacheKey($accept, $content_type, $purge_cache_key_request)
```

/purge/cachekey

List of Cache Keys you want to remove from the Azion Edge Servers cache. urls (array): list of up to 50 Cache Keys to be expired from the cache, per request. method (choice): purge method, use the “delete” value for removal. Layer (choice): layer where the purge will be done. Use the value “edge_caching” (default value if not informed) to purge on the Edge Caching layer and the value “l2_caching” to purge on L2 Caching.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RealTimePurgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; version=3; // string
$content_type = application/json; // string
$purge_cache_key_request = new \OpenAPI\Client\Model\PurgeCacheKeyRequest(); // \OpenAPI\Client\Model\PurgeCacheKeyRequest

try {
    $apiInstance->purgeCacheKey($accept, $content_type, $purge_cache_key_request);
} catch (Exception $e) {
    echo 'Exception when calling RealTimePurgeApi->purgeCacheKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**|  | [optional] |
| **purge_cache_key_request** | [**\OpenAPI\Client\Model\PurgeCacheKeyRequest**](../Model/PurgeCacheKeyRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purgeUrl()`

```php
purgeUrl($accept, $content_type, $purge_url_request)
```

/purge/url

List of URLs you want to remove from the Azion Edge Servers cache. urls (array): list of up to 50 URLs to be expired from the cache, per request. method (choice): purge method, use the “delete” value for removal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RealTimePurgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; version=3; // string
$content_type = application/json; // string
$purge_url_request = new \OpenAPI\Client\Model\PurgeUrlRequest(); // \OpenAPI\Client\Model\PurgeUrlRequest

try {
    $apiInstance->purgeUrl($accept, $content_type, $purge_url_request);
} catch (Exception $e) {
    echo 'Exception when calling RealTimePurgeApi->purgeUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**|  | [optional] |
| **purge_url_request** | [**\OpenAPI\Client\Model\PurgeUrlRequest**](../Model/PurgeUrlRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purgeWildcard()`

```php
purgeWildcard($accept, $content_type, $purge_wildcard_request)
```

/purge/wildcard

The Wildcard expression that represents the list of objects that you want to remove from the Azion Edge Servers cache. urls (array):the Wildcard URL or Wildcard Cache Key that represents the list of objects you want to expire. You can only use one Wildcard expression per request. method (choice): purge method, use the “delete” value for removal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RealTimePurgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; version=3; // string
$content_type = application/json; // string
$purge_wildcard_request = new \OpenAPI\Client\Model\PurgeWildcardRequest(); // \OpenAPI\Client\Model\PurgeWildcardRequest

try {
    $apiInstance->purgeWildcard($accept, $content_type, $purge_wildcard_request);
} catch (Exception $e) {
    echo 'Exception when calling RealTimePurgeApi->purgeWildcard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**|  | [optional] |
| **purge_wildcard_request** | [**\OpenAPI\Client\Model\PurgeWildcardRequest**](../Model/PurgeWildcardRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
