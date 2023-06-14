# services

Azion Services


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
require_once('/path/to/services/vendor/autoload.php');
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


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 56; // int
$resource_id = 56; // int

try {
    $apiInstance->deleteResource($service_id, $resource_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteResource: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost:3002*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**deleteResource**](docs/Api/DefaultApi.md#deleteresource) | **DELETE** /edge_services/{serviceId}/resources/{resourceId} | Delete Service Resource by ID
*DefaultApi* | [**deleteService**](docs/Api/DefaultApi.md#deleteservice) | **DELETE** /edge_services/{id} | Delete Service by ID
*DefaultApi* | [**getResource**](docs/Api/DefaultApi.md#getresource) | **GET** /edge_services/{serviceId}/resources/{resourceId} | Return Service Resource by ID
*DefaultApi* | [**getResources**](docs/Api/DefaultApi.md#getresources) | **GET** /edge_services/{serviceId}/resources | Return Service Resources by page
*DefaultApi* | [**getService**](docs/Api/DefaultApi.md#getservice) | **GET** /edge_services/{id} | Return Service by ID
*DefaultApi* | [**getServices**](docs/Api/DefaultApi.md#getservices) | **GET** /edge_services/ | Return Services by page
*DefaultApi* | [**newService**](docs/Api/DefaultApi.md#newservice) | **POST** /edge_services/ | Create Service
*DefaultApi* | [**patchService**](docs/Api/DefaultApi.md#patchservice) | **PATCH** /edge_services/{id} | Update Service by ID
*DefaultApi* | [**patchServiceResource**](docs/Api/DefaultApi.md#patchserviceresource) | **PATCH** /edge_services/{serviceId}/resources/{resourceId} | Update Service Resource by ID
*DefaultApi* | [**postResource**](docs/Api/DefaultApi.md#postresource) | **POST** /edge_services/{serviceId}/resources | Create Service Resource

## Models

- [CreateResourceRequest](docs/Model/CreateResourceRequest.md)
- [CreateServiceRequest](docs/Model/CreateServiceRequest.md)
- [ResourceDetail](docs/Model/ResourceDetail.md)
- [ResourceResponse](docs/Model/ResourceResponse.md)
- [ResourceResponseWithTotal](docs/Model/ResourceResponseWithTotal.md)
- [ServiceResponse](docs/Model/ServiceResponse.md)
- [ServiceResponseWithTotals](docs/Model/ServiceResponseWithTotals.md)
- [UpdateResourceRequest](docs/Model/UpdateResourceRequest.md)
- [UpdateServiceRequest](docs/Model/UpdateServiceRequest.md)
- [Variable](docs/Model/Variable.md)

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

- API version: `2.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`