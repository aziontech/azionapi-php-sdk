# OpenAPI\Client\DNSSECApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getZoneDnsSec()**](DNSSECApi.md#getZoneDnsSec) | **GET** /intelligent_dns/{zone_id}/dnssec | Retrieve the DNSSEC zone status |
| [**putZoneDnsSec()**](DNSSECApi.md#putZoneDnsSec) | **PATCH** /intelligent_dns/{zone_id}/dnssec | Update the DNSSEC zone |


## `getZoneDnsSec()`

```php
getZoneDnsSec($zone_id): \OpenAPI\Client\Model\GetOrPatchDnsSecResponse
```

Retrieve the DNSSEC zone status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DNSSECApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 56; // int | The hosted zone id

try {
    $result = $apiInstance->getZoneDnsSec($zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSSECApi->getZoneDnsSec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **int**| The hosted zone id | |

### Return type

[**\OpenAPI\Client\Model\GetOrPatchDnsSecResponse**](../Model/GetOrPatchDnsSecResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putZoneDnsSec()`

```php
putZoneDnsSec($zone_id, $dns_sec): \OpenAPI\Client\Model\GetOrPatchDnsSecResponse
```

Update the DNSSEC zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DNSSECApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 56; // int | The hosted zone id
$dns_sec = {"is_enabled":true}; // \OpenAPI\Client\Model\DnsSec

try {
    $result = $apiInstance->putZoneDnsSec($zone_id, $dns_sec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSSECApi->putZoneDnsSec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **int**| The hosted zone id | |
| **dns_sec** | [**\OpenAPI\Client\Model\DnsSec**](../Model/DnsSec.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetOrPatchDnsSecResponse**](../Model/GetOrPatchDnsSecResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
