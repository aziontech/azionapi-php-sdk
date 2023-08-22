# data_streaming

The Data Streaming API allows you to manage your existing data streamings and templates.
Data Streaming allows you to feed your stream processing, SIEM, and big data platforms with the event logs from your applications on Azion in real time.



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
require_once('/path/to/data_streaming/vendor/autoload.php');
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


$apiInstance = new OpenAPI\Client\Api\DataStreamingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_data_streaming_request = new \OpenAPI\Client\Model\CreateNewDataStreamingRequest(); // \OpenAPI\Client\Model\CreateNewDataStreamingRequest

try {
    $result = $apiInstance->createNewDataStreaming($create_new_data_streaming_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataStreamingApi->createNewDataStreaming: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.azionapi.net*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DataStreamingApi* | [**createNewDataStreaming**](docs/Api/DataStreamingApi.md#createnewdatastreaming) | **POST** /data_streaming/streamings | Create a new data streaming
*DataStreamingApi* | [**deleteDataStreamingById**](docs/Api/DataStreamingApi.md#deletedatastreamingbyid) | **DELETE** /data_streaming/streamings/{data_streaming_id} | Delete data streaming
*DataStreamingApi* | [**editDataStreamingById**](docs/Api/DataStreamingApi.md#editdatastreamingbyid) | **PATCH** /data_streaming/streamings/{data_streaming_id} | Edit data streaming
*DataStreamingApi* | [**listDataStreamingById**](docs/Api/DataStreamingApi.md#listdatastreamingbyid) | **GET** /data_streaming/streamings/{data_streaming_id} | Get expecific data streaming by Data Streaming ID
*DataStreamingApi* | [**listDataStreamings**](docs/Api/DataStreamingApi.md#listdatastreamings) | **GET** /data_streaming/streamings | List all exist data streamings
*DataStreamingApi* | [**overwriteDataStreamingById**](docs/Api/DataStreamingApi.md#overwritedatastreamingbyid) | **PUT** /data_streaming/streamings/{data_streaming_id} | Overwrite data streaming
*DataStreamingDomainApi* | [**listDataStreaming**](docs/Api/DataStreamingDomainApi.md#listdatastreaming) | **GET** /data_streaming/domains | List all domains used on data streaming
*DataStreamingTemplatesApi* | [**getDataStramingTemplateById**](docs/Api/DataStreamingTemplatesApi.md#getdatastramingtemplatebyid) | **GET** /data_streaming/templates/{template_id} | Get an global Template info by template ID
*DataStreamingTemplatesApi* | [**listDataStreamingTemplates**](docs/Api/DataStreamingTemplatesApi.md#listdatastreamingtemplates) | **GET** /data_streaming/templates | List all global Templates that can be used on Data Streaming operations

## Models

- [CreateCustomDataStreamingResponse](docs/Model/CreateCustomDataStreamingResponse.md)
- [CreateDataStreamingResponse](docs/Model/CreateDataStreamingResponse.md)
- [CreateNewDataStreaming201Response](docs/Model/CreateNewDataStreaming201Response.md)
- [CreateNewDataStreamingRequest](docs/Model/CreateNewDataStreamingRequest.md)
- [CustomDataStreamingPostBody](docs/Model/CustomDataStreamingPostBody.md)
- [DataStreamingEndpointTypeDatadogDTS](docs/Model/DataStreamingEndpointTypeDatadogDTS.md)
- [DataStreamingEndpointTypeKafka](docs/Model/DataStreamingEndpointTypeKafka.md)
- [DataStreamingEndpointTypeStandard](docs/Model/DataStreamingEndpointTypeStandard.md)
- [DataStreamingEndpointTypeStandardHeadersExample](docs/Model/DataStreamingEndpointTypeStandardHeadersExample.md)
- [DataStreamingPostBody](docs/Model/DataStreamingPostBody.md)
- [DataStreamingResponseGetResultTypeCustom](docs/Model/DataStreamingResponseGetResultTypeCustom.md)
- [DataStreamingResponseGetResultTypeDatadogDTS](docs/Model/DataStreamingResponseGetResultTypeDatadogDTS.md)
- [DataStreamingResponseGetResultTypeKafka](docs/Model/DataStreamingResponseGetResultTypeKafka.md)
- [DataStreamingResponseGetResultTypeStandard](docs/Model/DataStreamingResponseGetResultTypeStandard.md)
- [DataStreamingResponseWithResults](docs/Model/DataStreamingResponseWithResults.md)
- [DataStreamingResponseWithResultsResultsInner](docs/Model/DataStreamingResponseWithResultsResultsInner.md)
- [DataStreamingsById](docs/Model/DataStreamingsById.md)
- [DataStreamingsDomainResponse](docs/Model/DataStreamingsDomainResponse.md)
- [DataStreamingsDomainResponseLinks](docs/Model/DataStreamingsDomainResponseLinks.md)
- [DataStreamingsDomainResult](docs/Model/DataStreamingsDomainResult.md)
- [EndpoinrtS3](docs/Model/EndpoinrtS3.md)
- [EndpointAWSKinesisFirehose](docs/Model/EndpointAWSKinesisFirehose.md)
- [EndpointAzureBlobStorage](docs/Model/EndpointAzureBlobStorage.md)
- [EndpointAzureMonitor](docs/Model/EndpointAzureMonitor.md)
- [EndpointDatadog](docs/Model/EndpointDatadog.md)
- [EndpointDefault](docs/Model/EndpointDefault.md)
- [EndpointElasticsearch](docs/Model/EndpointElasticsearch.md)
- [EndpointGoogleBigQuery](docs/Model/EndpointGoogleBigQuery.md)
- [EndpointGoogleBigQueryServiceAccountKey](docs/Model/EndpointGoogleBigQueryServiceAccountKey.md)
- [EndpointIBMQRadar](docs/Model/EndpointIBMQRadar.md)
- [EndpointKafka](docs/Model/EndpointKafka.md)
- [EndpointSplunk](docs/Model/EndpointSplunk.md)
- [PostCustomDataStreamingResponse](docs/Model/PostCustomDataStreamingResponse.md)
- [PostDataStreamingResponse](docs/Model/PostDataStreamingResponse.md)
- [PostDataStreamingResponseEndpointInner](docs/Model/PostDataStreamingResponseEndpointInner.md)
- [StandardDataStreamingPostBody](docs/Model/StandardDataStreamingPostBody.md)
- [Template](docs/Model/Template.md)
- [TemplateResultById](docs/Model/TemplateResultById.md)
- [TemplateResults](docs/Model/TemplateResults.md)

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
