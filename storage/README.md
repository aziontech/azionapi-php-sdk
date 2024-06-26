# storage

REST API OpenAPI documentation for the Object Storage


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
require_once('/path/to/storage/vendor/autoload.php');
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


$apiInstance = new OpenAPI\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket_create = new \OpenAPI\Client\Model\BucketCreate(); // \OpenAPI\Client\Model\BucketCreate

try {
    $result = $apiInstance->storageApiBucketsCreate($bucket_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->storageApiBucketsCreate: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.azion.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*StorageApi* | [**storageApiBucketsCreate**](docs/Api/StorageApi.md#storageapibucketscreate) | **POST** /v4/storage/buckets | Create a new bucket
*StorageApi* | [**storageApiBucketsDestroy**](docs/Api/StorageApi.md#storageapibucketsdestroy) | **DELETE** /v4/storage/buckets/{name} | Delete a bucket
*StorageApi* | [**storageApiBucketsList**](docs/Api/StorageApi.md#storageapibucketslist) | **GET** /v4/storage/buckets | List buckets
*StorageApi* | [**storageApiBucketsObjectsCreate**](docs/Api/StorageApi.md#storageapibucketsobjectscreate) | **POST** /v4/storage/buckets/{bucket_name}/objects/{object_key} | Create new object key
*StorageApi* | [**storageApiBucketsObjectsDestroy**](docs/Api/StorageApi.md#storageapibucketsobjectsdestroy) | **DELETE** /v4/storage/buckets/{bucket_name}/objects/{object_key} | Delete object key
*StorageApi* | [**storageApiBucketsObjectsList**](docs/Api/StorageApi.md#storageapibucketsobjectslist) | **GET** /v4/storage/buckets/{bucket_name}/objects | List buckets objects
*StorageApi* | [**storageApiBucketsObjectsRetrieve**](docs/Api/StorageApi.md#storageapibucketsobjectsretrieve) | **GET** /v4/storage/buckets/{bucket_name}/objects/{object_key} | Download object
*StorageApi* | [**storageApiBucketsObjectsUpdate**](docs/Api/StorageApi.md#storageapibucketsobjectsupdate) | **PUT** /v4/storage/buckets/{bucket_name}/objects/{object_key} | Update the object key
*StorageApi* | [**storageApiBucketsPartialUpdate**](docs/Api/StorageApi.md#storageapibucketspartialupdate) | **PATCH** /v4/storage/buckets/{name} | Update bucket info
*StorageApi* | [**storageApiS3CredentialsByAccessKey**](docs/Api/StorageApi.md#storageapis3credentialsbyaccesskey) | **GET** /v4/storage/s3-credentials/{s3_credential_access_key} | get by s3 credentials by access key
*StorageApi* | [**storageApiS3CredentialsCreate**](docs/Api/StorageApi.md#storageapis3credentialscreate) | **POST** /v4/storage/s3-credentials | create s3 credentials
*StorageApi* | [**storageApiS3CredentialsDelete**](docs/Api/StorageApi.md#storageapis3credentialsdelete) | **DELETE** /v4/storage/s3-credentials/{s3_credential_access_key} | delete by s3 credentials
*StorageApi* | [**storageApiS3CredentialsList**](docs/Api/StorageApi.md#storageapis3credentialslist) | **GET** /v4/storage/s3-credentials | List s3 credentials

## Models

- [Bucket](docs/Model/Bucket.md)
- [BucketCreate](docs/Model/BucketCreate.md)
- [BucketObject](docs/Model/BucketObject.md)
- [BucketUpdate](docs/Model/BucketUpdate.md)
- [EdgeAccessEnum](docs/Model/EdgeAccessEnum.md)
- [ObjectResponseData](docs/Model/ObjectResponseData.md)
- [PaginatedBucketList](docs/Model/PaginatedBucketList.md)
- [PaginatedBucketObjectList](docs/Model/PaginatedBucketObjectList.md)
- [PaginatedS3CredentialList](docs/Model/PaginatedS3CredentialList.md)
- [ResponseBucket](docs/Model/ResponseBucket.md)
- [ResponseS3Credential](docs/Model/ResponseS3Credential.md)
- [S3Credential](docs/Model/S3Credential.md)
- [S3CredentialCreate](docs/Model/S3CredentialCreate.md)
- [StateEnum](docs/Model/StateEnum.md)
- [SuccessBucketOperation](docs/Model/SuccessBucketOperation.md)
- [SuccessObjectOperation](docs/Model/SuccessObjectOperation.md)

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

- API version: `1.0.0 (v1)`
    - Generator version: `7.6.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
