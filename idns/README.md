# idns

Azion Intelligent DNS API


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
require_once('/path/to/idns/vendor/autoload.php');
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


$apiInstance = new OpenAPI\Client\Api\DNSSECApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 56; // int | The hosted zone id

try {
    $result = $apiInstance->getZoneDnsSec($zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSSECApi->getZoneDnsSec: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.azionapi.net*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DNSSECApi* | [**getZoneDnsSec**](docs/Api/DNSSECApi.md#getzonednssec) | **GET** /intelligent_dns/{zone_id}/dnssec | Retrieve the DNSSEC zone status
*DNSSECApi* | [**putZoneDnsSec**](docs/Api/DNSSECApi.md#putzonednssec) | **PATCH** /intelligent_dns/{zone_id}/dnssec | Update the DNSSEC zone
*RecordsApi* | [**deleteZoneRecord**](docs/Api/RecordsApi.md#deletezonerecord) | **DELETE** /intelligent_dns/{zone_id}/records/{record_id} | Remove an Intelligent DNS zone record
*RecordsApi* | [**getZoneRecords**](docs/Api/RecordsApi.md#getzonerecords) | **GET** /intelligent_dns/{zone_id}/records | Get a collection of Intelligent DNS zone records
*RecordsApi* | [**postZoneRecord**](docs/Api/RecordsApi.md#postzonerecord) | **POST** /intelligent_dns/{zone_id}/records | Create a new Intelligent DNS zone record
*RecordsApi* | [**putZoneRecord**](docs/Api/RecordsApi.md#putzonerecord) | **PUT** /intelligent_dns/{zone_id}/records/{record_id} | Update an Intelligent DNS zone record
*ZonesApi* | [**deleteZone**](docs/Api/ZonesApi.md#deletezone) | **DELETE** /intelligent_dns/{zone_id} | Remove an Intelligent DNS hosted zone
*ZonesApi* | [**getZone**](docs/Api/ZonesApi.md#getzone) | **GET** /intelligent_dns/{zone_id} | Get an Intelligent DNS hosted zone
*ZonesApi* | [**getZones**](docs/Api/ZonesApi.md#getzones) | **GET** /intelligent_dns | Get a collection of Intelligent DNS zones
*ZonesApi* | [**postZone**](docs/Api/ZonesApi.md#postzone) | **POST** /intelligent_dns | Add a new Intelligent DNS zone
*ZonesApi* | [**putZone**](docs/Api/ZonesApi.md#putzone) | **PUT** /intelligent_dns/{zone_id} | Update an Intelligent DNS hosted zone

## Models

- [DnsSec](docs/Model/DnsSec.md)
- [DnsSecDelegationSigner](docs/Model/DnsSecDelegationSigner.md)
- [DnsSecDelegationSignerDigestType](docs/Model/DnsSecDelegationSignerDigestType.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [ErrorsResponse](docs/Model/ErrorsResponse.md)
- [GetOrPatchDnsSecResponse](docs/Model/GetOrPatchDnsSecResponse.md)
- [GetRecordsResponse](docs/Model/GetRecordsResponse.md)
- [GetRecordsResponseResults](docs/Model/GetRecordsResponseResults.md)
- [GetZoneResponse](docs/Model/GetZoneResponse.md)
- [GetZonesResponse](docs/Model/GetZonesResponse.md)
- [GetZonesResponseLinks](docs/Model/GetZonesResponseLinks.md)
- [PostOrPutRecordResponse](docs/Model/PostOrPutRecordResponse.md)
- [PostOrPutZoneResponse](docs/Model/PostOrPutZoneResponse.md)
- [RecordGet](docs/Model/RecordGet.md)
- [RecordPostOrPut](docs/Model/RecordPostOrPut.md)
- [Zone](docs/Model/Zone.md)

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

- API version: `3.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`