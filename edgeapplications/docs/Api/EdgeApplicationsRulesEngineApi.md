# OpenAPI\Client\EdgeApplicationsRulesEngineApi

All URIs are relative to https://api.azionapi.net, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesGet()**](EdgeApplicationsRulesEngineApi.md#edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesGet) | **GET** /edge_applications/{edge_application_id}/rules_engine/{phase}/rules | /edge_applications/{edge_application_id}/rules_engine/{phase}/rules |
| [**edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesPost()**](EdgeApplicationsRulesEngineApi.md#edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesPost) | **POST** /edge_applications/{edge_application_id}/rules_engine/{phase}/rules | /edge_applications/{edge_application_id}/rules_engine/{phase}/rules |
| [**edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdDelete()**](EdgeApplicationsRulesEngineApi.md#edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdDelete) | **DELETE** /edge_applications/{edge_application_id}/rules_engine/{phase}/rules/{rule_id} | /edge_applications/{edge_application_id}/rules_engine/{phase}/rules |
| [**edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdGet()**](EdgeApplicationsRulesEngineApi.md#edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdGet) | **GET** /edge_applications/{edge_application_id}/rules_engine/{phase}/rules/{rule_id} | /edge_applications/{edge_application_id}/rules_engine/{phase}/rules |
| [**edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdPatch()**](EdgeApplicationsRulesEngineApi.md#edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdPatch) | **PATCH** /edge_applications/{edge_application_id}/rules_engine/{phase}/rules/{rule_id} | /edge_applications/:edge_application_id:/rules_engine/:phase:/rules/:rule_id: |
| [**edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdPut()**](EdgeApplicationsRulesEngineApi.md#edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdPut) | **PUT** /edge_applications/{edge_application_id}/rules_engine/{phase}/rules/{rule_id} | /edge_applications/:edge_application_id:/rules_engine/:phase:/rules/:rule_id: |


## `edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesGet()`

```php
edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesGet($edge_application_id, $phase, $page, $page_size, $filter, $order_by, $sort, $accept): \OpenAPI\Client\Model\RulesEngineResponse
```

/edge_applications/{edge_application_id}/rules_engine/{phase}/rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsRulesEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$phase = 'phase_example'; // string
$page = 56; // int
$page_size = 56; // int
$filter = 'filter_example'; // string
$order_by = 'order_by_example'; // string
$sort = 'sort_example'; // string
$accept = application/json; version=3; // string

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesGet($edge_application_id, $phase, $page, $page_size, $filter, $order_by, $sort, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsRulesEngineApi->edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **phase** | **string**|  | |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RulesEngineResponse**](../Model/RulesEngineResponse.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesPost()`

```php
edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesPost($edge_application_id, $phase, $accept, $content_type, $create_rules_engine_request): \OpenAPI\Client\Model\RulesEngineIdResponse
```

/edge_applications/{edge_application_id}/rules_engine/{phase}/rules

Check below the list of behaviors that can be applied:  | Name                                | Behavior               | | ----------------------------------- | ---------------------- | | Add Request Cookie                  | add_request_cookie     | | Add Request Header                  | add_request_header     | | Add Response Cookie                 | set_cookie             | | Add Response Header                 | add_response_header    | | Bypass Cache                        | bypass_cache_phase     | | Capture Match Groups                | capture_match_groups   | | Deliver                             | deliver                | | Deny (403 Forbidden)                | deny                   | | Enable Gzip                         | enable_gzip            | | Filter Request Cookie               | filter_request_cookie  | | Filter Request Header               | filter_request_header  | | Filter Response Cookie              | filter_response_cookie | | Filter Response Header              | filter_response_header | | Finish Request Phase                | finish_request_phase   | | Forward Cookies                     | forward_cookies        | | Optimize Images                     | optimize_images        | | Redirect HTTP to HTTPS              | redirect_http_to_https | | Redirect To (301 Moved Permanently) | redirect_to_301        | | Redirect To (302 Found)             | redirect_to_302        | | Rewrite Request                     | rewrite_request        | | Run Function                        | run_function           | | Set Cache Policy                    | set_cache_policy       | | Set Origin                          | set_origin             |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsRulesEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$phase = 'phase_example'; // string
$accept = application/json; version=3; // string
$content_type = application/json; // string | The type of coding used in the Body (application/json). <br>  Example: Content-Type: application/json
$create_rules_engine_request = new \OpenAPI\Client\Model\CreateRulesEngineRequest(); // \OpenAPI\Client\Model\CreateRulesEngineRequest

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesPost($edge_application_id, $phase, $accept, $content_type, $create_rules_engine_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsRulesEngineApi->edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **phase** | **string**|  | |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**| The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json | [optional] |
| **create_rules_engine_request** | [**\OpenAPI\Client\Model\CreateRulesEngineRequest**](../Model/CreateRulesEngineRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RulesEngineIdResponse**](../Model/RulesEngineIdResponse.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdDelete()`

```php
edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdDelete($edge_application_id, $phase, $rule_id, $accept)
```

/edge_applications/{edge_application_id}/rules_engine/{phase}/rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsRulesEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int | The id of the edge application you plan to delete.
$phase = 'phase_example'; // string
$rule_id = 56; // int | The id of the rule you plan to delete.
$accept = application/json; version=3; // string

try {
    $apiInstance->edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdDelete($edge_application_id, $phase, $rule_id, $accept);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsRulesEngineApi->edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**| The id of the edge application you plan to delete. | |
| **phase** | **string**|  | |
| **rule_id** | **int**| The id of the rule you plan to delete. | |
| **accept** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdGet()`

```php
edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdGet($edge_application_id, $phase, $rule_id, $accept): \OpenAPI\Client\Model\RulesEngineIdResponse
```

/edge_applications/{edge_application_id}/rules_engine/{phase}/rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsRulesEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int | The id of the edge application you want to get.
$phase = 'phase_example'; // string
$rule_id = 56; // int | The id of the rule you plan to delete.
$accept = application/json; version=3; // string

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdGet($edge_application_id, $phase, $rule_id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsRulesEngineApi->edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**| The id of the edge application you want to get. | |
| **phase** | **string**|  | |
| **rule_id** | **int**| The id of the rule you plan to delete. | |
| **accept** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RulesEngineIdResponse**](../Model/RulesEngineIdResponse.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdPatch()`

```php
edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdPatch($edge_application_id, $phase, $rule_id, $accept, $content_type, $patch_rules_engine_request): \OpenAPI\Client\Model\RulesEngineIdResponse
```

/edge_applications/:edge_application_id:/rules_engine/:phase:/rules/:rule_id:

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsRulesEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$phase = 'phase_example'; // string
$rule_id = 56; // int
$accept = application/json; version=3; // string
$content_type = application/json; // string | The type of coding used in the Body (application/json). <br>  Example: Content-Type: application/json
$patch_rules_engine_request = new \OpenAPI\Client\Model\PatchRulesEngineRequest(); // \OpenAPI\Client\Model\PatchRulesEngineRequest

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdPatch($edge_application_id, $phase, $rule_id, $accept, $content_type, $patch_rules_engine_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsRulesEngineApi->edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **phase** | **string**|  | |
| **rule_id** | **int**|  | |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**| The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json | [optional] |
| **patch_rules_engine_request** | [**\OpenAPI\Client\Model\PatchRulesEngineRequest**](../Model/PatchRulesEngineRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RulesEngineIdResponse**](../Model/RulesEngineIdResponse.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdPut()`

```php
edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdPut($edge_application_id, $phase, $rule_id, $accept, $content_type, $update_rules_engine_request): \OpenAPI\Client\Model\RulesEngineIdResponse
```

/edge_applications/:edge_application_id:/rules_engine/:phase:/rules/:rule_id:

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsRulesEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$phase = 'phase_example'; // string
$rule_id = 56; // int
$accept = application/json; version=3; // string
$content_type = application/json; // string | The type of coding used in the Body (application/json). <br>  Example: Content-Type: application/json
$update_rules_engine_request = new \OpenAPI\Client\Model\UpdateRulesEngineRequest(); // \OpenAPI\Client\Model\UpdateRulesEngineRequest

try {
    $result = $apiInstance->edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdPut($edge_application_id, $phase, $rule_id, $accept, $content_type, $update_rules_engine_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsRulesEngineApi->edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edge_application_id** | **int**|  | |
| **phase** | **string**|  | |
| **rule_id** | **int**|  | |
| **accept** | **string**|  | [optional] |
| **content_type** | **string**| The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json | [optional] |
| **update_rules_engine_request** | [**\OpenAPI\Client\Model\UpdateRulesEngineRequest**](../Model/UpdateRulesEngineRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RulesEngineIdResponse**](../Model/RulesEngineIdResponse.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json; version=3`
- **Accept**: `application/json; version=3`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
