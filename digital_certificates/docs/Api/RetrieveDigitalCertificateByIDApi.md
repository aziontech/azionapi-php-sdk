# OpenAPI\Client\RetrieveDigitalCertificateByIDApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCertificate()**](RetrieveDigitalCertificateByIDApi.md#getCertificate) | **GET** /digital_certificates/{digital_certificate_id} | Get more data on a specific digital certificate or CSR. |


## `getCertificate()`

```php
getCertificate($digital_certificate_id): \OpenAPI\Client\Model\DC200
```

Get more data on a specific digital certificate or CSR.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RetrieveDigitalCertificateByIDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$digital_certificate_id = 56; // int | ID of certificate

try {
    $result = $apiInstance->getCertificate($digital_certificate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetrieveDigitalCertificateByIDApi->getCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **digital_certificate_id** | **int**| ID of certificate | |

### Return type

[**\OpenAPI\Client\Model\DC200**](../Model/DC200.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
