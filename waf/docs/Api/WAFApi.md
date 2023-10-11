# OpenAPI\Client\WAFApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNewWAFRuleset()**](WAFApi.md#createNewWAFRuleset) | **POST** /waf/rulesets | Create a new WAF Rule Set in an account. |
| [**deleteWAFRuleset()**](WAFApi.md#deleteWAFRuleset) | **DELETE** /waf/rulesets/{waf_rule_set_id} | Remove an WAF Rule Set from an account. Warning: this action cannot be undone. |
| [**getWAFDomains()**](WAFApi.md#getWAFDomains) | **GET** /waf/{waf_id}/domains | List all domains attached to a Web Application Firewall (WAF) in an account. |
| [**getWAFEvents()**](WAFApi.md#getWAFEvents) | **GET** /waf/{waf_id}/waf_events | Find WAF log events |
| [**getWAFRuleset()**](WAFApi.md#getWAFRuleset) | **GET** /waf/rulesets/{waf_rule_set_id} | List a specific Rule Set associated to a Web Application Firewall (WAF) in an account. |
| [**listAllWAF()**](WAFApi.md#listAllWAF) | **GET** /waf | List all Web Application Firewalls (WAFs) created in an account |
| [**listAllWAFRulesets()**](WAFApi.md#listAllWAFRulesets) | **GET** /waf/rulesets | list all Rule Sets associated to a Web Application Firewall (WAF) in an account. |
| [**updateWAFRuleset()**](WAFApi.md#updateWAFRuleset) | **PATCH** /waf/rulesets/{waf_rule_set_id} | Change only select settings of a WAF Rule Set |


## `createNewWAFRuleset()`

```php
createNewWAFRuleset($create_new_waf_ruleset_request): \OpenAPI\Client\Model\SingleWAF
```

Create a new WAF Rule Set in an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WAFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_waf_ruleset_request = new \OpenAPI\Client\Model\CreateNewWAFRulesetRequest(); // \OpenAPI\Client\Model\CreateNewWAFRulesetRequest

try {
    $result = $apiInstance->createNewWAFRuleset($create_new_waf_ruleset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WAFApi->createNewWAFRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_waf_ruleset_request** | [**\OpenAPI\Client\Model\CreateNewWAFRulesetRequest**](../Model/CreateNewWAFRulesetRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SingleWAF**](../Model/SingleWAF.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWAFRuleset()`

```php
deleteWAFRuleset($waf_rule_set_id)
```

Remove an WAF Rule Set from an account. Warning: this action cannot be undone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WAFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waf_rule_set_id = 'waf_rule_set_id_example'; // string

try {
    $apiInstance->deleteWAFRuleset($waf_rule_set_id);
} catch (Exception $e) {
    echo 'Exception when calling WAFApi->deleteWAFRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **waf_rule_set_id** | **string**|  | |

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

## `getWAFDomains()`

```php
getWAFDomains($waf_id, $name): \OpenAPI\Client\Model\WAFDomains200
```

List all domains attached to a Web Application Firewall (WAF) in an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WAFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waf_id = 56; // int | ID of WAF to return
$name = 'name_example'; // string | searches WAF for name

try {
    $result = $apiInstance->getWAFDomains($waf_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WAFApi->getWAFDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **waf_id** | **int**| ID of WAF to return | |
| **name** | **string**| searches WAF for name | [optional] |

### Return type

[**\OpenAPI\Client\Model\WAFDomains200**](../Model/WAFDomains200.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWAFEvents()`

```php
getWAFEvents($waf_id, $hour_range, $domains_ids, $network_list_id, $sort, $page, $page_size): \OpenAPI\Client\Model\WAFEvents200
```

Find WAF log events

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WAFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waf_id = 56; // int | ID of WAF to return
$hour_range = 56; // int | Last log hours since now (it must be a integer number ranging between 1 and 72)
$domains_ids = 'domains_ids_example'; // string | Multiple domain's id (they must be separated by comma like 1233,1234)
$network_list_id = 56; // int | Id of a network list
$sort = 'asc'; // string
$page = 1; // int
$page_size = 10; // int

try {
    $result = $apiInstance->getWAFEvents($waf_id, $hour_range, $domains_ids, $network_list_id, $sort, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WAFApi->getWAFEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **waf_id** | **int**| ID of WAF to return | |
| **hour_range** | **int**| Last log hours since now (it must be a integer number ranging between 1 and 72) | |
| **domains_ids** | **string**| Multiple domain&#39;s id (they must be separated by comma like 1233,1234) | |
| **network_list_id** | **int**| Id of a network list | [optional] |
| **sort** | **string**|  | [optional] [default to &#39;asc&#39;] |
| **page** | **int**|  | [optional] [default to 1] |
| **page_size** | **int**|  | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\Model\WAFEvents200**](../Model/WAFEvents200.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWAFRuleset()`

```php
getWAFRuleset($waf_rule_set_id): \OpenAPI\Client\Model\WAFSingle200
```

List a specific Rule Set associated to a Web Application Firewall (WAF) in an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WAFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waf_rule_set_id = 56; // int | ID of WAF Ruleset to return

try {
    $result = $apiInstance->getWAFRuleset($waf_rule_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WAFApi->getWAFRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **waf_rule_set_id** | **int**| ID of WAF Ruleset to return | |

### Return type

[**\OpenAPI\Client\Model\WAFSingle200**](../Model/WAFSingle200.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllWAF()`

```php
listAllWAF($page, $page_size): \OpenAPI\Client\Model\WAFList200
```

List all Web Application Firewalls (WAFs) created in an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WAFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Identifies which page should be returned, if the return is paginated.
$page_size = 10; // int | Identifies how many items should be returned per page.

try {
    $result = $apiInstance->listAllWAF($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WAFApi->listAllWAF: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Identifies which page should be returned, if the return is paginated. | [optional] [default to 1] |
| **page_size** | **int**| Identifies how many items should be returned per page. | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\Model\WAFList200**](../Model/WAFList200.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllWAFRulesets()`

```php
listAllWAFRulesets($order_by, $sort, $page, $page_size): \OpenAPI\Client\Model\WAFList200
```

list all Rule Sets associated to a Web Application Firewall (WAF) in an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WAFApi(
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
    $result = $apiInstance->listAllWAFRulesets($order_by, $sort, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WAFApi->listAllWAFRulesets: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\WAFList200**](../Model/WAFList200.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWAFRuleset()`

```php
updateWAFRuleset($waf_rule_set_id, $single_waf): \OpenAPI\Client\Model\SingleWAF
```

Change only select settings of a WAF Rule Set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WAFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waf_rule_set_id = 'waf_rule_set_id_example'; // string
$single_waf = new \OpenAPI\Client\Model\SingleWAF(); // \OpenAPI\Client\Model\SingleWAF

try {
    $result = $apiInstance->updateWAFRuleset($waf_rule_set_id, $single_waf);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WAFApi->updateWAFRuleset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **waf_rule_set_id** | **string**|  | |
| **single_waf** | [**\OpenAPI\Client\Model\SingleWAF**](../Model/SingleWAF.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SingleWAF**](../Model/SingleWAF.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
