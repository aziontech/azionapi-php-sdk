# OpenAPI\Client\ZonesApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteZone()**](ZonesApi.md#deleteZone) | **DELETE** /intelligent_dns/{zone_id} | Remove an Intelligent DNS hosted zone |
| [**getZone()**](ZonesApi.md#getZone) | **GET** /intelligent_dns/{zone_id} | Get an Intelligent DNS hosted zone |
| [**getZones()**](ZonesApi.md#getZones) | **GET** /intelligent_dns | Get a collection of Intelligent DNS zones |
| [**postZone()**](ZonesApi.md#postZone) | **POST** /intelligent_dns | Add a new Intelligent DNS zone |
| [**putZone()**](ZonesApi.md#putZone) | **PUT** /intelligent_dns/{zone_id} | Update an Intelligent DNS hosted zone |


## `deleteZone()`

```php
deleteZone($zone_id): string
```

Remove an Intelligent DNS hosted zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 56; // int | The hosted zone id

try {
    $result = $apiInstance->deleteZone($zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->deleteZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **int**| The hosted zone id | |

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

## `getZone()`

```php
getZone($zone_id): \OpenAPI\Client\Model\GetZoneResponse
```

Get an Intelligent DNS hosted zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 56; // int | The hosted zone id

try {
    $result = $apiInstance->getZone($zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->getZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **int**| The hosted zone id | |

### Return type

[**\OpenAPI\Client\Model\GetZoneResponse**](../Model/GetZoneResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZones()`

```php
getZones($order_by, $sort, $page, $page_size): \OpenAPI\Client\Model\GetZonesResponse
```

Get a collection of Intelligent DNS zones

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_by = 'name'; // string | Identifies which property the return should be sorted by.
$sort = 'asc'; // string | Defines whether objects are shown in ascending or descending order depending on the value set in order_by.
$page = 1; // int | Identifies which page should be returned, if the return is paginated.
$page_size = 10; // int | Identifies how many items should be returned per page.

try {
    $result = $apiInstance->getZones($order_by, $sort, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->getZones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_by** | **string**| Identifies which property the return should be sorted by. | [optional] [default to &#39;name&#39;] |
| **sort** | **string**| Defines whether objects are shown in ascending or descending order depending on the value set in order_by. | [optional] [default to &#39;asc&#39;] |
| **page** | **int**| Identifies which page should be returned, if the return is paginated. | [optional] [default to 1] |
| **page_size** | **int**| Identifies how many items should be returned per page. | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\Model\GetZonesResponse**](../Model/GetZonesResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postZone()`

```php
postZone($zone): \OpenAPI\Client\Model\PostOrPutZoneResponse
```

Add a new Intelligent DNS zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone = {"name":"New Intelligent DNS zone","domain":"new.domain.com","is_active":true}; // \OpenAPI\Client\Model\Zone

try {
    $result = $apiInstance->postZone($zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->postZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone** | [**\OpenAPI\Client\Model\Zone**](../Model/Zone.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostOrPutZoneResponse**](../Model/PostOrPutZoneResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putZone()`

```php
putZone($zone_id, $zone): \OpenAPI\Client\Model\PostOrPutZoneResponse
```

Update an Intelligent DNS hosted zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 56; // int | The hosted zone id
$zone = {"name":"Update Intelligent DNS zone","domain":"other.domain.com","is_active":true}; // \OpenAPI\Client\Model\Zone

try {
    $result = $apiInstance->putZone($zone_id, $zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->putZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **int**| The hosted zone id | |
| **zone** | [**\OpenAPI\Client\Model\Zone**](../Model/Zone.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostOrPutZoneResponse**](../Model/PostOrPutZoneResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
