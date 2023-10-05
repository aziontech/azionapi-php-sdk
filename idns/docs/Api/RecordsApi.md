# OpenAPI\Client\RecordsApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteZoneRecord()**](RecordsApi.md#deleteZoneRecord) | **DELETE** /intelligent_dns/{zone_id}/records/{record_id} | Remove an Intelligent DNS zone record |
| [**getZoneRecords()**](RecordsApi.md#getZoneRecords) | **GET** /intelligent_dns/{zone_id}/records | Get a collection of Intelligent DNS zone records |
| [**postZoneRecord()**](RecordsApi.md#postZoneRecord) | **POST** /intelligent_dns/{zone_id}/records | Create a new Intelligent DNS zone record |
| [**putZoneRecord()**](RecordsApi.md#putZoneRecord) | **PUT** /intelligent_dns/{zone_id}/records/{record_id} | Update an Intelligent DNS zone record |


## `deleteZoneRecord()`

```php
deleteZoneRecord($zone_id, $record_id): string
```

Remove an Intelligent DNS zone record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 56; // int | The hosted zone id
$record_id = 56; // int | The zone record id

try {
    $result = $apiInstance->deleteZoneRecord($zone_id, $record_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsApi->deleteZoneRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **int**| The hosted zone id | |
| **record_id** | **int**| The zone record id | |

### Return type

**string**

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZoneRecords()`

```php
getZoneRecords($zone_id, $page, $page_size): \OpenAPI\Client\Model\GetRecordsResponse
```

Get a collection of Intelligent DNS zone records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 56; // int | The hosted zone id
$page = 1; // int | Identifies which page should be returned, if the return is paginated.
$page_size = 10; // int | Identifies how many items should be returned per page.

try {
    $result = $apiInstance->getZoneRecords($zone_id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsApi->getZoneRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **int**| The hosted zone id | |
| **page** | **int**| Identifies which page should be returned, if the return is paginated. | [optional] [default to 1] |
| **page_size** | **int**| Identifies how many items should be returned per page. | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\Model\GetRecordsResponse**](../Model/GetRecordsResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postZoneRecord()`

```php
postZoneRecord($zone_id, $record_post_or_put): \OpenAPI\Client\Model\PostOrPutRecordResponse
```

Create a new Intelligent DNS zone record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 56; // int | The hosted zone id
$record_post_or_put = {"record_type":"A","entry":"site","description":"Site record","ttl":3600,"answers_list":["1.2.3.4","5.6.7.8"]}; // \OpenAPI\Client\Model\RecordPostOrPut

try {
    $result = $apiInstance->postZoneRecord($zone_id, $record_post_or_put);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsApi->postZoneRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **int**| The hosted zone id | |
| **record_post_or_put** | [**\OpenAPI\Client\Model\RecordPostOrPut**](../Model/RecordPostOrPut.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostOrPutRecordResponse**](../Model/PostOrPutRecordResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putZoneRecord()`

```php
putZoneRecord($zone_id, $record_id, $record_post_or_put): \OpenAPI\Client\Model\PostOrPutRecordResponse
```

Update an Intelligent DNS zone record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 56; // int | The hosted zone id
$record_id = 56; // int | The zone record id
$record_post_or_put = {"record_type":"A","entry":"site","description":"Site record","ttl":3600,"answers_list":["1.2.3.4","5.6.7.8","1.1.2.2"]}; // \OpenAPI\Client\Model\RecordPostOrPut

try {
    $result = $apiInstance->putZoneRecord($zone_id, $record_id, $record_post_or_put);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsApi->putZoneRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **int**| The hosted zone id | |
| **record_id** | **int**| The zone record id | |
| **record_post_or_put** | [**\OpenAPI\Client\Model\RecordPostOrPut**](../Model/RecordPostOrPut.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostOrPutRecordResponse**](../Model/PostOrPutRecordResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
