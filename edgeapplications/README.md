# edgeapplications

## Welcome to the Azion API!

With the following APIs you can check, remove or update existing settings, besides creating new ones.

* * *

## Overview

The Azion API is a RESTful API, based on HTTPS requests, that allows you to integrate your systems with our platform, simply, quickly, and securely.

Here you will find instructions on how our API works and what functionality is available.

This documentation is being constantly updated. Make sure you verify if there are any updates or changes before you perform any development in your application, even if you are familiar with our API.

* * *

Both HTTPS requests and responses must be in JavaScript Object Notation (JSON) format. All HTTPS requests and responses must follow these conventions.

**Base URL**

The base URL of the API, which must be used, is:

[**https://api.azionapi.net/_**](https://api.azionapi.net/)

**HTTP Methods**

Each HTTP method defines the type of operation that will be run.

| HTTP Method | CRUD | Whole Collection (e.g. /items) | Specific Item (e.g. /items/:item_id) |
| --- | --- | --- | --- |
| GET | Read | It retrieves the list of items in a Collection. | It retrieves a specific item in a Collection. |
| POST | Create | It creates a new item in the Collection. | \\- |
| PUT | Update/Replace | It replaces a whole Collection with a new one. | It replaces an item in a Collection with a new one. |
| PATCH | Update/Modify | It partially updates a Collection. | It partially updates an item in a Collection |
| DELETE | Delete | It deletes a whole Collection. | It deletes an item in a Collection. |

* * *

**Status Codes**

The HTTP return code defines the status – successful or not – after the requested operation is run.

| Status Code | Meaning |
| --- | --- |
| 200 OK | General Status for a successful operation. |
| 201 CREATED | Successfully created a collection or item, by means of POST or PUT. |
| 204 NO CONTENT | Successful operation, but without any content to be return to the Body. Generally used for DELETE or PUT operations. |
| 207 MULTI-STATUS | A batch of operations were triggered by a single request, which resulted in different return codes when it was run, for some of the operations. The codes are displayed in the “status” field, in the body of the response, for each sub-batch of operations for whichever are applicable. |
| 400 BAD REQUEST | Request error, such as invalid parameters, missing mandatory parameters or others. |
| 401 UNAUTHORIZED | Error caused by a missing HTTP Authentication header. |
| 403 FORBIDDEN | User does not have the permissions to run the requested operation. |
| 404 NOT FOUND | The requested resource does not exist. |
| 405 METHOD NOT ALLOWED | The requested method is not applicable with the URL. |
| 406 NOT ACCEPTABLE | Accept header missing from the HTTP request or the header contains formatting or the version is not supported by the API. |
| 409 CONFLICT | Conflict generated in running the request, such as a request to create an already existing record. |
| 429 TOO MANY REQUESTS | The request was temporarily rejected, due to exceeding the limit on operations. Wait for the time defined in the X-Ratelimit-Reset header and try again. |
| 500 INTERNAL SERVER ERROR | Unintentional error, due to an unidentified failure in the request process. |
| \\--- |  |
| **HTTP Headers** |  |

All requests must be generated with the HTTP header specifying the desired code format for responses and the API version used. The current version of the API is 3 and the format is application/json.

```
Accept: application/json; version=3

```

* * *

**Rate Limit**

The limit of operations that can be run via the API is defined by 3 HTTP response headers:

*   **X-ratelimit-limit:** number of operations allowed in one time-frame;
*   **X-ratelimit-remaining:** number of operations still available in one time-frame;
*   **X-ratelimit-reset:** is the date and time, in IOS 8601 format, which represents the point in the future when the time-frame will be closed and when the limits will, therefore, be reset.
    

Example of HTTP response headers and a request:

```
Date: Thu, 02 Nov 2017 12:30:28 GMT
X-ratelimit-remaining: 199
X-ratelimit-limit: 200
X-ratelimit-reset: 2017-11-02T12:31:28.675446

```

In the example provided, 200 operations are allowed within a 1-minute time frame. Of those, there are 199 still available, because one has already been run. The total limit will be reset after 1 minute.

When the X-ratelimit-limit is reached, or in other words, when the X-ratelimit-remaining reaches zero, the API will give the error, HTTP 429 TOO MANY REQUESTS. If your application receives this error, you will need to wait until the time defined in X-ratelimit-reset has passed, to make another request.

*   **X-ratelimit-limit by product**
    

The *X-ratelimit limit* variations by product are the following:

*   **Real-Time Metrics:** 20 requests per minute.
*   **Real-Time Purge:** 200 requests per minute; except for the Wildcard, which is 2000 a day.
    

> The rate-limit values are based on the client_id.

* * *

**Optional Parameters**

In this version, it is possible to include some optional parameters as part of the GET method, which can help and modify the form in which your data will be returned.

You can combine these parameters to get the result you want.

They are:

| Parameter | Description | Accepted values: |
| --- | --- | --- |
| order_by | Identifies which field the return should be sorted by. The default ordering is ascending. | Depends on the fields available from the endpoint structure |
| sort | Defines which ordering to be used: ascending or descending. | asc  <br>  <br>desc |
| page | Identifies which page should be returned, if the return is paginated. The default value is 1. | Page number. |
| page_size | Identifies how many items should be returned per page. The default value is 10. | Desired number of items. |

* * *

**Request Exemple**

You can use one parameter, or a combination. See the example below, which uses all of them in the same request.

```
GET /domains?order_by=name&page_size=20&sort=desc&page=3
Accept: application/json; version=3
Authorization: token 2909f3932069047f4736dc87e72baaddd19c9f75

```

* * *

# Authentication

Authentication and authorization of operations via Azion API is done through Tokens.

The first step is to create the Token through authenticating a user registered in [Real-Time Manager](https://sso.azion.com/login).

* * *

## Encoding Username and Password in Base64

Only token creation and cancelling operations are performed through Basic Authentication, that is, with a username and password. You can create and cancel the token through the API itself, but for that you need to encode your username and password in base64.

Base64 encoding can be done from the command line on a Unix terminal:

```
$ echo 'user@domain:password'|base64
dXNlckBkb21haW46cGFzc3dvcmQK

```

If you do not have a Unix terminal available, you can use the free online service at [https://www.base64encode.org/](https://www.base64encode.org/)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/edgeapplications/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EdgeApplicationsCacheSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edge_application_id = 56; // int
$cache_settings = 56; // int
$accept = application/json; version=3; // string
$content_type = application/json; // string | The type of coding used in the Body (application/json). <br>  Example: Content-Type: application/json

try {
    $apiInstance->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDelete($edge_application_id, $cache_settings, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling EdgeApplicationsCacheSettingsApi->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDelete: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.azionapi.net*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EdgeApplicationsCacheSettingsApi* | [**edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDelete**](docs/Api/EdgeApplicationsCacheSettingsApi.md#edgeapplicationsedgeapplicationidcachesettingscachesettingsdelete) | **DELETE** /edge_applications/{edge_application_id}/cache_settings/{cache_settings} | /edge_applications/:edge_application_id:/cache_settings/:cache_settings:
*EdgeApplicationsCacheSettingsApi* | [**edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet**](docs/Api/EdgeApplicationsCacheSettingsApi.md#edgeapplicationsedgeapplicationidcachesettingscachesettingsidget) | **GET** /edge_applications/{edge_application_id}/cache_settings/{cache_settings_id} | /edge_applications/:edge_application_id:/cache_settings/:cache_settings_id:
*EdgeApplicationsCacheSettingsApi* | [**edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut**](docs/Api/EdgeApplicationsCacheSettingsApi.md#edgeapplicationsedgeapplicationidcachesettingscachesettingsidput) | **PUT** /edge_applications/{edge_application_id}/cache_settings/{cache_settings_id} | /edge_applications/:edge_application_id:/cache_settings/ca
*EdgeApplicationsCacheSettingsApi* | [**edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatch**](docs/Api/EdgeApplicationsCacheSettingsApi.md#edgeapplicationsedgeapplicationidcachesettingscachesettingspatch) | **PATCH** /edge_applications/{edge_application_id}/cache_settings/{cache_settings} | /edge_applications/:edge_application_id:/cache_settings/:cache_settings_id:
*EdgeApplicationsCacheSettingsApi* | [**edgeApplicationsEdgeApplicationIdCacheSettingsGet**](docs/Api/EdgeApplicationsCacheSettingsApi.md#edgeapplicationsedgeapplicationidcachesettingsget) | **GET** /edge_applications/{edge_application_id}/cache_settings | /edge_applications/{edge_application_id}/cache_settings
*EdgeApplicationsCacheSettingsApi* | [**edgeApplicationsEdgeApplicationIdCacheSettingsPost**](docs/Api/EdgeApplicationsCacheSettingsApi.md#edgeapplicationsedgeapplicationidcachesettingspost) | **POST** /edge_applications/{edge_application_id}/cache_settings | /edge_applications/:edge_application_id:/cache_settings
*EdgeApplicationsDeviceGroupsApi* | [**edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdDelete**](docs/Api/EdgeApplicationsDeviceGroupsApi.md#edgeapplicationsedgeapplicationiddevicegroupsdevicegroupiddelete) | **DELETE** /edge_applications/{edge_application_id}/device_groups/{device_group_id} | /edge_applications/{edge_application_id}/device_groups/{device_group_id}
*EdgeApplicationsDeviceGroupsApi* | [**edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdGet**](docs/Api/EdgeApplicationsDeviceGroupsApi.md#edgeapplicationsedgeapplicationiddevicegroupsdevicegroupidget) | **GET** /edge_applications/{edge_application_id}/device_groups/{device_group_id} | /edge_applications/{edge_application_id}/device_groups/{device_group_id}
*EdgeApplicationsDeviceGroupsApi* | [**edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdPatch**](docs/Api/EdgeApplicationsDeviceGroupsApi.md#edgeapplicationsedgeapplicationiddevicegroupsdevicegroupidpatch) | **PATCH** /edge_applications/{edge_application_id}/device_groups/{device_group_id} | /edge_applications/{edge_application_id}/device_groups/{device_group_id}
*EdgeApplicationsDeviceGroupsApi* | [**edgeApplicationsEdgeApplicationIdDeviceGroupsDeviceGroupIdPut**](docs/Api/EdgeApplicationsDeviceGroupsApi.md#edgeapplicationsedgeapplicationiddevicegroupsdevicegroupidput) | **PUT** /edge_applications/{edge_application_id}/device_groups/{device_group_id} | /edge_applications/{edge_application_id}/device_groups/{device_group_id}
*EdgeApplicationsDeviceGroupsApi* | [**edgeApplicationsEdgeApplicationIdDeviceGroupsGet**](docs/Api/EdgeApplicationsDeviceGroupsApi.md#edgeapplicationsedgeapplicationiddevicegroupsget) | **GET** /edge_applications/{edge_application_id}/device_groups | /edge_applications/{edge_application_id}/device_groups
*EdgeApplicationsDeviceGroupsApi* | [**edgeApplicationsEdgeApplicationIdDeviceGroupsPost**](docs/Api/EdgeApplicationsDeviceGroupsApi.md#edgeapplicationsedgeapplicationiddevicegroupspost) | **POST** /edge_applications/{edge_application_id}/device_groups | /edge_applications/{edge_application_id}/device_groups
*EdgeApplicationsEdgeFunctionsInstancesApi* | [**edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdDelete**](docs/Api/EdgeApplicationsEdgeFunctionsInstancesApi.md#edgeapplicationsedgeapplicationidfunctionsinstancesfunctionsinstancesiddelete) | **DELETE** /edge_applications/{edge_application_id}/functions_instances/{functions_instances_id} | /edge_applications/:edge_application_id:/functions_instances/:functions_instances_id:
*EdgeApplicationsEdgeFunctionsInstancesApi* | [**edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdGet**](docs/Api/EdgeApplicationsEdgeFunctionsInstancesApi.md#edgeapplicationsedgeapplicationidfunctionsinstancesfunctionsinstancesidget) | **GET** /edge_applications/{edge_application_id}/functions_instances/{functions_instances_id} | /edge_applications/:edge_application_id:/functions_instances/:functions_instances_id:
*EdgeApplicationsEdgeFunctionsInstancesApi* | [**edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdPatch**](docs/Api/EdgeApplicationsEdgeFunctionsInstancesApi.md#edgeapplicationsedgeapplicationidfunctionsinstancesfunctionsinstancesidpatch) | **PATCH** /edge_applications/{edge_application_id}/functions_instances/{functions_instances_id} | /edge_applications/:edge_application_id:/functions_instances/:functions_instances_id:
*EdgeApplicationsEdgeFunctionsInstancesApi* | [**edgeApplicationsEdgeApplicationIdFunctionsInstancesFunctionsInstancesIdPut**](docs/Api/EdgeApplicationsEdgeFunctionsInstancesApi.md#edgeapplicationsedgeapplicationidfunctionsinstancesfunctionsinstancesidput) | **PUT** /edge_applications/{edge_application_id}/functions_instances/{functions_instances_id} | /edge_applications/:edge_application_id:/functions_instances/:functions_instances_id:
*EdgeApplicationsEdgeFunctionsInstancesApi* | [**edgeApplicationsEdgeApplicationIdFunctionsInstancesGet**](docs/Api/EdgeApplicationsEdgeFunctionsInstancesApi.md#edgeapplicationsedgeapplicationidfunctionsinstancesget) | **GET** /edge_applications/{edge_application_id}/functions_instances | /edge_applications/:edge_application_id:/functions_instances
*EdgeApplicationsEdgeFunctionsInstancesApi* | [**edgeApplicationsEdgeApplicationIdFunctionsInstancesPost**](docs/Api/EdgeApplicationsEdgeFunctionsInstancesApi.md#edgeapplicationsedgeapplicationidfunctionsinstancespost) | **POST** /edge_applications/{edge_application_id}/functions_instances | edge_application/:edge_application_id:/functions_instances
*EdgeApplicationsMainSettingsApi* | [**edgeApplicationsGet**](docs/Api/EdgeApplicationsMainSettingsApi.md#edgeapplicationsget) | **GET** /edge_applications | /edge_applications
*EdgeApplicationsMainSettingsApi* | [**edgeApplicationsIdDelete**](docs/Api/EdgeApplicationsMainSettingsApi.md#edgeapplicationsiddelete) | **DELETE** /edge_applications/{id} | /edge_applications/:id
*EdgeApplicationsMainSettingsApi* | [**edgeApplicationsIdGet**](docs/Api/EdgeApplicationsMainSettingsApi.md#edgeapplicationsidget) | **GET** /edge_applications/{id} | /edge_applications/:id
*EdgeApplicationsMainSettingsApi* | [**edgeApplicationsIdPatch**](docs/Api/EdgeApplicationsMainSettingsApi.md#edgeapplicationsidpatch) | **PATCH** /edge_applications/{id} | /edge_applications/:id
*EdgeApplicationsMainSettingsApi* | [**edgeApplicationsIdPut**](docs/Api/EdgeApplicationsMainSettingsApi.md#edgeapplicationsidput) | **PUT** /edge_applications/{id} | /edge_applications/:id
*EdgeApplicationsMainSettingsApi* | [**edgeApplicationsPost**](docs/Api/EdgeApplicationsMainSettingsApi.md#edgeapplicationspost) | **POST** /edge_applications | /edge_applications
*EdgeApplicationsOriginsApi* | [**edgeApplicationsEdgeApplicationIdOriginsGet**](docs/Api/EdgeApplicationsOriginsApi.md#edgeapplicationsedgeapplicationidoriginsget) | **GET** /edge_applications/{edge_application_id}/origins | /edge_applications/{edge_application_id}/origins
*EdgeApplicationsOriginsApi* | [**edgeApplicationsEdgeApplicationIdOriginsOriginKeyDelete**](docs/Api/EdgeApplicationsOriginsApi.md#edgeapplicationsedgeapplicationidoriginsoriginkeydelete) | **DELETE** /edge_applications/{edge_application_id}/origins/{origin_key} | /edge_applications/{edge_application_id}/origins/{origin_id}
*EdgeApplicationsOriginsApi* | [**edgeApplicationsEdgeApplicationIdOriginsOriginKeyGet**](docs/Api/EdgeApplicationsOriginsApi.md#edgeapplicationsedgeapplicationidoriginsoriginkeyget) | **GET** /edge_applications/{edge_application_id}/origins/{origin_key} | /edge_applications/{edge_application_id}/origins/{origin_key}
*EdgeApplicationsOriginsApi* | [**edgeApplicationsEdgeApplicationIdOriginsOriginKeyPatch**](docs/Api/EdgeApplicationsOriginsApi.md#edgeapplicationsedgeapplicationidoriginsoriginkeypatch) | **PATCH** /edge_applications/{edge_application_id}/origins/{origin_key} | /edge_applications/:edge_application_id:/origins/:origin_id:
*EdgeApplicationsOriginsApi* | [**edgeApplicationsEdgeApplicationIdOriginsOriginKeyPut**](docs/Api/EdgeApplicationsOriginsApi.md#edgeapplicationsedgeapplicationidoriginsoriginkeyput) | **PUT** /edge_applications/{edge_application_id}/origins/{origin_key} | /edge_applications/{edge_application_id}/origins/{origin_id}
*EdgeApplicationsOriginsApi* | [**edgeApplicationsEdgeApplicationIdOriginsPost**](docs/Api/EdgeApplicationsOriginsApi.md#edgeapplicationsedgeapplicationidoriginspost) | **POST** /edge_applications/{edge_application_id}/origins | /edge_applications/{edge_application_id}/origins
*EdgeApplicationsRulesEngineApi* | [**edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesGet**](docs/Api/EdgeApplicationsRulesEngineApi.md#edgeapplicationsedgeapplicationidrulesenginephaserulesget) | **GET** /edge_applications/{edge_application_id}/rules_engine/{phase}/rules | /edge_applications/{edge_application_id}/rules_engine/{phase}/rules
*EdgeApplicationsRulesEngineApi* | [**edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesPost**](docs/Api/EdgeApplicationsRulesEngineApi.md#edgeapplicationsedgeapplicationidrulesenginephaserulespost) | **POST** /edge_applications/{edge_application_id}/rules_engine/{phase}/rules | /edge_applications/{edge_application_id}/rules_engine/{phase}/rules
*EdgeApplicationsRulesEngineApi* | [**edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdDelete**](docs/Api/EdgeApplicationsRulesEngineApi.md#edgeapplicationsedgeapplicationidrulesenginephaserulesruleiddelete) | **DELETE** /edge_applications/{edge_application_id}/rules_engine/{phase}/rules/{rule_id} | /edge_applications/{edge_application_id}/rules_engine/{phase}/rules
*EdgeApplicationsRulesEngineApi* | [**edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdGet**](docs/Api/EdgeApplicationsRulesEngineApi.md#edgeapplicationsedgeapplicationidrulesenginephaserulesruleidget) | **GET** /edge_applications/{edge_application_id}/rules_engine/{phase}/rules/{rule_id} | /edge_applications/{edge_application_id}/rules_engine/{phase}/rules
*EdgeApplicationsRulesEngineApi* | [**edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdPatch**](docs/Api/EdgeApplicationsRulesEngineApi.md#edgeapplicationsedgeapplicationidrulesenginephaserulesruleidpatch) | **PATCH** /edge_applications/{edge_application_id}/rules_engine/{phase}/rules/{rule_id} | /edge_applications/:edge_application_id:/rules_engine/:phase:/rules/:rule_id:
*EdgeApplicationsRulesEngineApi* | [**edgeApplicationsEdgeApplicationIdRulesEnginePhaseRulesRuleIdPut**](docs/Api/EdgeApplicationsRulesEngineApi.md#edgeapplicationsedgeapplicationidrulesenginephaserulesruleidput) | **PUT** /edge_applications/{edge_application_id}/rules_engine/{phase}/rules/{rule_id} | /edge_applications/:edge_application_id:/rules_engine/:phase:/rules/:rule_id:

## Models

- [ApplicationCacheCreateRequest](docs/Model/ApplicationCacheCreateRequest.md)
- [ApplicationCacheCreateResponse](docs/Model/ApplicationCacheCreateResponse.md)
- [ApplicationCacheCreateResults](docs/Model/ApplicationCacheCreateResults.md)
- [ApplicationCacheGetOneResponse](docs/Model/ApplicationCacheGetOneResponse.md)
- [ApplicationCacheGetResponse](docs/Model/ApplicationCacheGetResponse.md)
- [ApplicationCachePatchRequest](docs/Model/ApplicationCachePatchRequest.md)
- [ApplicationCachePatchResponse](docs/Model/ApplicationCachePatchResponse.md)
- [ApplicationCachePutRequest](docs/Model/ApplicationCachePutRequest.md)
- [ApplicationCachePutResponse](docs/Model/ApplicationCachePutResponse.md)
- [ApplicationCacheResponseDetails](docs/Model/ApplicationCacheResponseDetails.md)
- [ApplicationCacheResults](docs/Model/ApplicationCacheResults.md)
- [ApplicationCreateInstanceRequest](docs/Model/ApplicationCreateInstanceRequest.md)
- [ApplicationInstanceResults](docs/Model/ApplicationInstanceResults.md)
- [ApplicationInstancesGetOneResponse](docs/Model/ApplicationInstancesGetOneResponse.md)
- [ApplicationInstancesGetResponse](docs/Model/ApplicationInstancesGetResponse.md)
- [ApplicationInstancesResults](docs/Model/ApplicationInstancesResults.md)
- [ApplicationLinks](docs/Model/ApplicationLinks.md)
- [ApplicationOrigins](docs/Model/ApplicationOrigins.md)
- [ApplicationPutInstanceRequest](docs/Model/ApplicationPutInstanceRequest.md)
- [ApplicationPutRequest](docs/Model/ApplicationPutRequest.md)
- [ApplicationPutResult](docs/Model/ApplicationPutResult.md)
- [ApplicationResults](docs/Model/ApplicationResults.md)
- [ApplicationResultsCreate](docs/Model/ApplicationResultsCreate.md)
- [ApplicationUpdateInstanceRequest](docs/Model/ApplicationUpdateInstanceRequest.md)
- [ApplicationUpdateRequest](docs/Model/ApplicationUpdateRequest.md)
- [ApplicationUpdateResponse](docs/Model/ApplicationUpdateResponse.md)
- [ApplicationUpdateResults](docs/Model/ApplicationUpdateResults.md)
- [ApplicationsResults](docs/Model/ApplicationsResults.md)
- [CreateApplicationRequest](docs/Model/CreateApplicationRequest.md)
- [CreateApplicationResult](docs/Model/CreateApplicationResult.md)
- [CreateDeviceGroupsRequest](docs/Model/CreateDeviceGroupsRequest.md)
- [CreateOriginsRequest](docs/Model/CreateOriginsRequest.md)
- [CreateOriginsRequestAddresses](docs/Model/CreateOriginsRequestAddresses.md)
- [CreateRulesEngineRequest](docs/Model/CreateRulesEngineRequest.md)
- [DeviceGroupsIdResponse](docs/Model/DeviceGroupsIdResponse.md)
- [DeviceGroupsResponse](docs/Model/DeviceGroupsResponse.md)
- [DeviceGroupsResponseLinks](docs/Model/DeviceGroupsResponseLinks.md)
- [DeviceGroupsResultResponse](docs/Model/DeviceGroupsResultResponse.md)
- [GetApplicationResponse](docs/Model/GetApplicationResponse.md)
- [GetApplicationsResponse](docs/Model/GetApplicationsResponse.md)
- [OriginsIdResponse](docs/Model/OriginsIdResponse.md)
- [OriginsResponse](docs/Model/OriginsResponse.md)
- [OriginsResponseLinks](docs/Model/OriginsResponseLinks.md)
- [OriginsResultResponse](docs/Model/OriginsResultResponse.md)
- [OriginsResultResponseAddresses](docs/Model/OriginsResultResponseAddresses.md)
- [PatchDeviceGroupsRequest](docs/Model/PatchDeviceGroupsRequest.md)
- [PatchOriginsRequest](docs/Model/PatchOriginsRequest.md)
- [PatchRulesEngineRequest](docs/Model/PatchRulesEngineRequest.md)
- [RulesEngineBehavior](docs/Model/RulesEngineBehavior.md)
- [RulesEngineCriteria](docs/Model/RulesEngineCriteria.md)
- [RulesEngineIdResponse](docs/Model/RulesEngineIdResponse.md)
- [RulesEngineResponse](docs/Model/RulesEngineResponse.md)
- [RulesEngineResultResponse](docs/Model/RulesEngineResultResponse.md)
- [RulesEngineResultResponseBehaviors](docs/Model/RulesEngineResultResponseBehaviors.md)
- [UpdateDeviceGroupsRequest](docs/Model/UpdateDeviceGroupsRequest.md)
- [UpdateOriginsRequest](docs/Model/UpdateOriginsRequest.md)
- [UpdateRulesEngineRequest](docs/Model/UpdateRulesEngineRequest.md)

## Authorization

Authentication schemes defined for the API:
### tokenAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
