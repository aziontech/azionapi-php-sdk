# personal_tokens

The Personal Tokens API allows you to manage your existing personal tokens.



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
require_once('/path/to/personal_tokens/vendor/autoload.php');
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


$apiInstance = new OpenAPI\Client\Api\PersonalTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personal_token_id = 'personal_token_id_example'; // string

try {
    $result = $apiInstance->getPersonalToken($personal_token_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalTokenApi->getPersonalToken: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.azionapi.net*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PersonalTokenApi* | [**getPersonalToken**](docs/Api/PersonalTokenApi.md#getpersonaltoken) | **GET** /iam/personal_tokens/{personalTokenId} | Get a personal token info
*PersonalTokenApi* | [**listPersonalToken**](docs/Api/PersonalTokenApi.md#listpersonaltoken) | **GET** /iam/personal_tokens | List all existing personal token

## Models

- [PersonalTokenResponseGet](docs/Model/PersonalTokenResponseGet.md)
- [PersonalTokenResponseWithResults](docs/Model/PersonalTokenResponseWithResults.md)
- [PersonalTokenResponseWithResultsLinks](docs/Model/PersonalTokenResponseWithResultsLinks.md)

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