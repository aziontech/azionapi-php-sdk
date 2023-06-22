# waf

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


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
require_once('/path/to/waf/vendor/autoload.php');
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

## API Endpoints

All URIs are relative to *https://api.azionapi.net*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*WAFApi* | [**getWAFDomains**](docs/Api/WAFApi.md#getwafdomains) | **GET** /waf/{wafId}/domains | Find domains attached to a WAF
*WAFApi* | [**getWAFEvents**](docs/Api/WAFApi.md#getwafevents) | **GET** /waf/{wafId}/waf_events | Find WAF log events

## Models

- [WAFDomains200](docs/Model/WAFDomains200.md)
- [WAFEvents200](docs/Model/WAFEvents200.md)
- [WAFEvents400](docs/Model/WAFEvents400.md)
- [WAFEvents401](docs/Model/WAFEvents401.md)
- [WAFEvents404](docs/Model/WAFEvents404.md)

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