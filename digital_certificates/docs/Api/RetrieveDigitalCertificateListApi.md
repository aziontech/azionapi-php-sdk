# OpenAPI\Client\RetrieveDigitalCertificateListApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listDigitalCertificates()**](RetrieveDigitalCertificateListApi.md#listDigitalCertificates) | **GET** /digital_certificates | List all existing digital certificates and CSRs registered to your account |


## `listDigitalCertificates()`

```php
listDigitalCertificates($order_by, $sort, $name, $search): \OpenAPI\Client\Model\DC200List
```

List all existing digital certificates and CSRs registered to your account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RetrieveDigitalCertificateListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_by = 'id'; // string | Response field to order by, current options are \"name\" or \"id\"
$sort = 'asc'; // string | Sorting direction
$name = 'name_example'; // string | Searches certificate for name
$search = 'search_example'; // string | Searches for string in certificate name

try {
    $result = $apiInstance->listDigitalCertificates($order_by, $sort, $name, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetrieveDigitalCertificateListApi->listDigitalCertificates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_by** | **string**| Response field to order by, current options are \&quot;name\&quot; or \&quot;id\&quot; | [optional] [default to &#39;id&#39;] |
| **sort** | **string**| Sorting direction | [optional] [default to &#39;asc&#39;] |
| **name** | **string**| Searches certificate for name | [optional] |
| **search** | **string**| Searches for string in certificate name | [optional] |

### Return type

[**\OpenAPI\Client\Model\DC200List**](../Model/DC200List.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
