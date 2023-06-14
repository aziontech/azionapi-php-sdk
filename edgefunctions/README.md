# edgefunctions

Azion Edge Function API


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
require_once('/path/to/edgefunctions/vendor/autoload.php');
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


$apiInstance = new OpenAPI\Client\Api\EdgeFunctionsApi(
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
    $result = $apiInstance->edgeFunctionsGet($page, $page_size, $sort, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdgeFunctionsApi->edgeFunctionsGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.azionapi.net*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EdgeFunctionsApi* | [**edgeFunctionsGet**](docs/Api/EdgeFunctionsApi.md#edgefunctionsget) | **GET** /edge_functions | edge_functions
*EdgeFunctionsApi* | [**edgeFunctionsIdDelete**](docs/Api/EdgeFunctionsApi.md#edgefunctionsiddelete) | **DELETE** /edge_functions/{id} | edge_functions
*EdgeFunctionsApi* | [**edgeFunctionsIdGet**](docs/Api/EdgeFunctionsApi.md#edgefunctionsidget) | **GET** /edge_functions/{id} | edge_functions
*EdgeFunctionsApi* | [**edgeFunctionsIdPatch**](docs/Api/EdgeFunctionsApi.md#edgefunctionsidpatch) | **PATCH** /edge_functions/{id} | edge_functions
*EdgeFunctionsApi* | [**edgeFunctionsIdPut**](docs/Api/EdgeFunctionsApi.md#edgefunctionsidput) | **PUT** /edge_functions/{id} | edge_functions
*EdgeFunctionsApi* | [**edgeFunctionsPost**](docs/Api/EdgeFunctionsApi.md#edgefunctionspost) | **POST** /edge_functions | edge_functions

## Models

- [BadRequestResponse](docs/Model/BadRequestResponse.md)
- [CreateEdgeFunctionRequest](docs/Model/CreateEdgeFunctionRequest.md)
- [EdgeFunctionResponse](docs/Model/EdgeFunctionResponse.md)
- [ErrorModel](docs/Model/ErrorModel.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [Links](docs/Model/Links.md)
- [ListEdgeFunctionResponse](docs/Model/ListEdgeFunctionResponse.md)
- [PatchEdgeFunctionRequest](docs/Model/PatchEdgeFunctionRequest.md)
- [PutEdgeFunctionRequest](docs/Model/PutEdgeFunctionRequest.md)
- [Results](docs/Model/Results.md)

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

- API version: `3.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`