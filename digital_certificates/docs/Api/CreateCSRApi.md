# OpenAPI\Client\CreateCSRApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCSR()**](CreateCSRApi.md#createCSR) | **POST** /digital_certificates/csr | Create an encrypted Certificate Request with Azion, which can then be sent for signing to a CA |


## `createCSR()`

```php
createCSR($create_csr_request): \OpenAPI\Client\Model\DC201
```

Create an encrypted Certificate Request with Azion, which can then be sent for signing to a CA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CreateCSRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_csr_request = new \OpenAPI\Client\Model\CreateCSRRequest(); // \OpenAPI\Client\Model\CreateCSRRequest

try {
    $result = $apiInstance->createCSR($create_csr_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateCSRApi->createCSR: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_csr_request** | [**\OpenAPI\Client\Model\CreateCSRRequest**](../Model/CreateCSRRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DC201**](../Model/DC201.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
