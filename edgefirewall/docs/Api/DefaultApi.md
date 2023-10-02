# OpenAPI\Client\DefaultApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**edgeFirewallEdgeFirewallIdRulesEngineGet()**](DefaultApi.md#edgeFirewallEdgeFirewallIdRulesEngineGet) | **GET** /edge_firewall/{edge_firewall_id}/rules_engine | List all rule sets. |
| [**edgeFirewallEdgeFirewallIdRulesEnginePost()**](DefaultApi.md#edgeFirewallEdgeFirewallIdRulesEnginePost) | **POST** /edge_firewall/{edge_firewall_id}/rules_engine | Create rule set. |
| [**edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdDelete()**](DefaultApi.md#edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdDelete) | **DELETE** /edge_firewall/{edge_firewall_id}/rules_engine/{rule_set_id} | Delete rule set. |
| [**edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdGet()**](DefaultApi.md#edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdGet) | **GET** /edge_firewall/{edge_firewall_id}/rules_engine/{rule_set_id} | Retrieve rule set by ID. |
| [**edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdPatch()**](DefaultApi.md#edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdPatch) | **PATCH** /edge_firewall/{edge_firewall_id}/rules_engine/{rule_set_id} | Edit rule set. |
| [**edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdPut()**](DefaultApi.md#edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdPut) | **PUT** /edge_firewall/{edge_firewall_id}/rules_engine/{rule_set_id} | Overwrite rule set |
| [**edgeFirewallGet()**](DefaultApi.md#edgeFirewallGet) | **GET** /edge_firewall | List all user edge firewall |
| [**edgeFirewallPost()**](DefaultApi.md#edgeFirewallPost) | **POST** /edge_firewall | Create a edge firewall |
| [**edgeFirewallUuidDelete()**](DefaultApi.md#edgeFirewallUuidDelete) | **DELETE** /edge_firewall/{uuid} | Delete an edge firewall by uuid |
| [**edgeFirewallUuidGet()**](DefaultApi.md#edgeFirewallUuidGet) | **GET** /edge_firewall/{uuid} | Retrieve an edge firewall set by uuid |
| [**edgeFirewallUuidPatch()**](DefaultApi.md#edgeFirewallUuidPatch) | **PATCH** /edge_firewall/{uuid} | Update some edge firewall attributes, like \&quot;active\&quot; |
| [**edgeFirewallUuidPut()**](DefaultApi.md#edgeFirewallUuidPut) | **PUT** /edge_firewall/{uuid} | Overwrite some edge firewall attributes, like \&quot;active\&quot; |


## `edgeFirewallEdgeFirewallIdRulesEngineGet()`

```php
edgeFirewallEdgeFirewallIdRulesEngineGet($edge_firewall_id): \OpenAPI\Client\Model\RuleSetResponseAll
```

List all rule sets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_firewall_id = 56; // int

try {
    $result = $apiInstance->edgeFirewallEdgeFirewallIdRulesEngineGet($edge_firewall_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallEdgeFirewallIdRulesEngineGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_firewall_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\RuleSetResponseAll**](../Model/RuleSetResponseAll.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeFirewallEdgeFirewallIdRulesEnginePost()`

```php
edgeFirewallEdgeFirewallIdRulesEnginePost($edge_firewall_id, $create_rule_set_request): \OpenAPI\Client\Model\RuleSetResponse
```

Create rule set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_firewall_id = 56; // int
$create_rule_set_request = new \OpenAPI\Client\Model\CreateRuleSetRequest(); // \OpenAPI\Client\Model\CreateRuleSetRequest

try {
    $result = $apiInstance->edgeFirewallEdgeFirewallIdRulesEnginePost($edge_firewall_id, $create_rule_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallEdgeFirewallIdRulesEnginePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_firewall_id** | **int**|  | |
| **create_rule_set_request** | [**\OpenAPI\Client\Model\CreateRuleSetRequest**](../Model/CreateRuleSetRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RuleSetResponse**](../Model/RuleSetResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdDelete()`

```php
edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdDelete($edge_firewall_id, $rule_set_id)
```

Delete rule set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_firewall_id = 56; // int
$rule_set_id = 56; // int

try {
    $apiInstance->edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdDelete($edge_firewall_id, $rule_set_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_firewall_id** | **int**|  | |
| **rule_set_id** | **int**|  | |

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

## `edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdGet()`

```php
edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdGet($edge_firewall_id, $rule_set_id, $order_by, $sort, $page, $page_size): \OpenAPI\Client\Model\RuleSetResult
```

Retrieve rule set by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_firewall_id = 56; // int
$rule_set_id = 56; // int
$order_by = 'order_by_example'; // string
$sort = 'sort_example'; // string
$page = 1; // int
$page_size = 10; // int

try {
    $result = $apiInstance->edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdGet($edge_firewall_id, $rule_set_id, $order_by, $sort, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_firewall_id** | **int**|  | |
| **rule_set_id** | **int**|  | |
| **order_by** | **string**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **page_size** | **int**|  | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\Model\RuleSetResult**](../Model/RuleSetResult.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdPatch()`

```php
edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdPatch($edge_firewall_id, $rule_set_id, $create_rule_set_request): \OpenAPI\Client\Model\RuleSetResult
```

Edit rule set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_firewall_id = 56; // int
$rule_set_id = 56; // int
$create_rule_set_request = new \OpenAPI\Client\Model\CreateRuleSetRequest(); // \OpenAPI\Client\Model\CreateRuleSetRequest

try {
    $result = $apiInstance->edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdPatch($edge_firewall_id, $rule_set_id, $create_rule_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_firewall_id** | **int**|  | |
| **rule_set_id** | **int**|  | |
| **create_rule_set_request** | [**\OpenAPI\Client\Model\CreateRuleSetRequest**](../Model/CreateRuleSetRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RuleSetResult**](../Model/RuleSetResult.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdPut()`

```php
edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdPut($edge_firewall_id, $rule_set_id, $create_rule_set_request): \OpenAPI\Client\Model\RuleSetResult
```

Overwrite rule set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_firewall_id = 56; // int
$rule_set_id = 56; // int
$create_rule_set_request = new \OpenAPI\Client\Model\CreateRuleSetRequest(); // \OpenAPI\Client\Model\CreateRuleSetRequest

try {
    $result = $apiInstance->edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdPut($edge_firewall_id, $rule_set_id, $create_rule_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallEdgeFirewallIdRulesEngineRuleSetIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_firewall_id** | **int**|  | |
| **rule_set_id** | **int**|  | |
| **create_rule_set_request** | [**\OpenAPI\Client\Model\CreateRuleSetRequest**](../Model/CreateRuleSetRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RuleSetResult**](../Model/RuleSetResult.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeFirewallGet()`

```php
edgeFirewallGet($page, $page_size, $sort, $order_by): \OpenAPI\Client\Model\ListEdgeFirewallResponse
```

List all user edge firewall

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$page_size = 56; // int
$sort = 'sort_example'; // string
$order_by = 'order_by_example'; // string

try {
    $result = $apiInstance->edgeFirewallGet($page, $page_size, $sort, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListEdgeFirewallResponse**](../Model/ListEdgeFirewallResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeFirewallPost()`

```php
edgeFirewallPost($create_edge_firewall_request): \OpenAPI\Client\Model\EdgeFirewallResponse
```

Create a edge firewall

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_edge_firewall_request = new \OpenAPI\Client\Model\CreateEdgeFirewallRequest(); // \OpenAPI\Client\Model\CreateEdgeFirewallRequest

try {
    $result = $apiInstance->edgeFirewallPost($create_edge_firewall_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_edge_firewall_request** | [**\OpenAPI\Client\Model\CreateEdgeFirewallRequest**](../Model/CreateEdgeFirewallRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EdgeFirewallResponse**](../Model/EdgeFirewallResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeFirewallUuidDelete()`

```php
edgeFirewallUuidDelete($uuid)
```

Delete an edge firewall by uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string

try {
    $apiInstance->edgeFirewallUuidDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

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

## `edgeFirewallUuidGet()`

```php
edgeFirewallUuidGet($uuid): \OpenAPI\Client\Model\EdgeFirewallResponse
```

Retrieve an edge firewall set by uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->edgeFirewallUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\EdgeFirewallResponse**](../Model/EdgeFirewallResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeFirewallUuidPatch()`

```php
edgeFirewallUuidPatch($uuid, $update_edge_firewall_request): \OpenAPI\Client\Model\EdgeFirewallResponse
```

Update some edge firewall attributes, like \"active\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string
$update_edge_firewall_request = new \OpenAPI\Client\Model\UpdateEdgeFirewallRequest(); // \OpenAPI\Client\Model\UpdateEdgeFirewallRequest

try {
    $result = $apiInstance->edgeFirewallUuidPatch($uuid, $update_edge_firewall_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallUuidPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **update_edge_firewall_request** | [**\OpenAPI\Client\Model\UpdateEdgeFirewallRequest**](../Model/UpdateEdgeFirewallRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EdgeFirewallResponse**](../Model/EdgeFirewallResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeFirewallUuidPut()`

```php
edgeFirewallUuidPut($uuid, $update_edge_firewall_request): \OpenAPI\Client\Model\EdgeFirewallResponse
```

Overwrite some edge firewall attributes, like \"active\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string
$update_edge_firewall_request = new \OpenAPI\Client\Model\UpdateEdgeFirewallRequest(); // \OpenAPI\Client\Model\UpdateEdgeFirewallRequest

try {
    $result = $apiInstance->edgeFirewallUuidPut($uuid, $update_edge_firewall_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->edgeFirewallUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **update_edge_firewall_request** | [**\OpenAPI\Client\Model\UpdateEdgeFirewallRequest**](../Model/UpdateEdgeFirewallRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EdgeFirewallResponse**](../Model/EdgeFirewallResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
