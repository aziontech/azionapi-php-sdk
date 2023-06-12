# OpenAPI\Client\DomainsApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDomain()**](DomainsApi.md#createDomain) | **POST** /domains | /domains |
| [**delDomain()**](DomainsApi.md#delDomain) | **DELETE** /domains/{id} | /domains/:id |
| [**getDomain()**](DomainsApi.md#getDomain) | **GET** /domains/{id} | /domains/:id |
| [**getDomains()**](DomainsApi.md#getDomains) | **GET** /domains | /domains |
| [**putDomain()**](DomainsApi.md#putDomain) | **PUT** /domains/{id} | /domains:/:id |
| [**updateDomain()**](DomainsApi.md#updateDomain) | **PATCH** /domains/{id} | /domains/:id |


## `createDomain()`

```php
createDomain($accept, $content_type, $create_domain_request): \OpenAPI\Client\Model\DomainResponseWithResult
```

/domains

It enables you to include a new domain into an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; version=3; // string
$content_type = application/json; // string
$create_domain_request = new \OpenAPI\Client\Model\CreateDomainRequest(); // \OpenAPI\Client\Model\CreateDomainRequest

try {
    $result = $apiInstance->createDomain($accept, $content_type, $create_domain_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->createDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**|  | [optional] |
| **create_domain_request** | [**\OpenAPI\Client\Model\CreateDomainRequest**](../Model/CreateDomainRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DomainResponseWithResult**](../Model/DomainResponseWithResult.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `delDomain()`

```php
delDomain($id, $accept)
```

/domains/:id

It enables you to delete a domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the domain to be deleted.
$accept = application/json; version=3; // string

try {
    $apiInstance->delDomain($id, $accept);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->delDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of the domain to be deleted. | |
| **accept** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomain()`

```php
getDomain($id, $accept): \OpenAPI\Client\Model\DomainResponseWithResult
```

/domains/:id

It returns details of a domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the domain to be consulted.
$accept = application/json; version=3; // string

try {
    $result = $apiInstance->getDomain($id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of the domain to be consulted. | |
| **accept** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DomainResponseWithResult**](../Model/DomainResponseWithResult.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomains()`

```php
getDomains($accept): \OpenAPI\Client\Model\DomainResponseWithResults
```

/domains

It returns the list of domains of an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json; version=3; // string

try {
    $result = $apiInstance->getDomains($accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DomainResponseWithResults**](../Model/DomainResponseWithResults.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putDomain()`

```php
putDomain($id, $accept, $content_type, $put_domain_request): \OpenAPI\Client\Model\DomainResponseWithResult
```

/domains:/:id

It overwrites all fields of a domain, while preserving the id. Optional fields not filled in will be replaced by the default values.  To update only some fields in a domain, consider using the PATCH method instead of PUT.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$accept = application/json; version=3; // string
$content_type = application/json; // string
$put_domain_request = new \OpenAPI\Client\Model\PutDomainRequest(); // \OpenAPI\Client\Model\PutDomainRequest

try {
    $result = $apiInstance->putDomain($id, $accept, $content_type, $put_domain_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->putDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**|  | [optional] |
| **put_domain_request** | [**\OpenAPI\Client\Model\PutDomainRequest**](../Model/PutDomainRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DomainResponseWithResult**](../Model/DomainResponseWithResult.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDomain()`

```php
updateDomain($id, $accept, $content_type, $update_domain_request): \OpenAPI\Client\Model\DomainResponseWithResult
```

/domains/:id

It updates one or more fields in a Domain, preserving the value of the fields not informed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$accept = application/json; version=3; // string
$content_type = application/json; // string
$update_domain_request = new \OpenAPI\Client\Model\UpdateDomainRequest(); // \OpenAPI\Client\Model\UpdateDomainRequest

try {
    $result = $apiInstance->updateDomain($id, $accept, $content_type, $update_domain_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->updateDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**|  | [optional] |
| **update_domain_request** | [**\OpenAPI\Client\Model\UpdateDomainRequest**](../Model/UpdateDomainRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DomainResponseWithResult**](../Model/DomainResponseWithResult.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
