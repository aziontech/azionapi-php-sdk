# OpenAPI\Client\DeleteDigitalCertificateApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**removeDigitalCertificates()**](DeleteDigitalCertificateApi.md#removeDigitalCertificates) | **DELETE** /digital_certificates/{digital_certificate_id} | Remove a digital certificate or CSR from your account |


## `removeDigitalCertificates()`

```php
removeDigitalCertificates($digital_certificate_id)
```

Remove a digital certificate or CSR from your account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DeleteDigitalCertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$digital_certificate_id = 56; // int | ID of certificate to delete

try {
    $apiInstance->removeDigitalCertificates($digital_certificate_id);
} catch (Exception $e) {
    echo 'Exception when calling DeleteDigitalCertificateApi->removeDigitalCertificates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **digital_certificate_id** | **int**| ID of certificate to delete | |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
