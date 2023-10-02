# # SingleWAF

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **string** | Identification name for WAF Rule Set. | [optional]
**mode** | **string** |  | [optional]
**active** | **bool** |  | [optional]
**sql_injection** | **bool** |  | [optional]
**sql_injection_sensitivity** | [**\OpenAPI\Client\Model\WAFSensitivityChoices**](WAFSensitivityChoices.md) |  | [optional]
**remote_file_inclusion** | **bool** |  | [optional]
**remote_file_inclusion_sensitivity** | [**\OpenAPI\Client\Model\WAFSensitivityChoices**](WAFSensitivityChoices.md) |  | [optional]
**directory_traversal** | **bool** |  | [optional]
**directory_traversal_sensitivity** | [**\OpenAPI\Client\Model\WAFSensitivityChoices**](WAFSensitivityChoices.md) |  | [optional]
**cross_site_scripting** | **bool** |  | [optional]
**cross_site_scripting_sensitivity** | [**\OpenAPI\Client\Model\WAFSensitivityChoices**](WAFSensitivityChoices.md) |  | [optional]
**evading_tricks** | **bool** |  | [optional]
**evading_tricks_sensitivity** | [**\OpenAPI\Client\Model\WAFSensitivityChoices**](WAFSensitivityChoices.md) |  | [optional]
**file_upload** | **bool** |  | [optional]
**file_upload_sensitivity** | [**\OpenAPI\Client\Model\WAFSensitivityChoices**](WAFSensitivityChoices.md) |  | [optional]
**unwanted_access** | **bool** |  | [optional]
**unwanted_access_sensitivity** | [**\OpenAPI\Client\Model\WAFSensitivityChoices**](WAFSensitivityChoices.md) |  | [optional]
**identified_attack** | **bool** |  | [optional]
**identified_attack_sensitivity** | [**\OpenAPI\Client\Model\WAFSensitivityChoices**](WAFSensitivityChoices.md) |  | [optional]
**bypass_addresses** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
