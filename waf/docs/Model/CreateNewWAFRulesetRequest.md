# # CreateNewWAFRulesetRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **string** | Identification name for WAF Rule Set. |
**mode** | **string** |  |
**active** | **bool** |  |
**sql_injection** | **bool** |  |
**sql_injection_sensitivity** | [**\OpenAPI\Client\Model\WAFSensitivityChoices**](WAFSensitivityChoices.md) |  |
**remote_file_inclusion** | **bool** |  |
**remote_file_inclusion_sensitivity** | [**\OpenAPI\Client\Model\WAFSensitivityChoices**](WAFSensitivityChoices.md) |  |
**directory_traversal** | **bool** |  |
**directory_traversal_sensitivity** | [**\OpenAPI\Client\Model\WAFSensitivityChoices**](WAFSensitivityChoices.md) |  |
**cross_site_scripting** | **bool** |  |
**cross_site_scripting_sensitivity** | [**\OpenAPI\Client\Model\WAFSensitivityChoices**](WAFSensitivityChoices.md) |  |
**evading_tricks** | **bool** |  |
**evading_tricks_sensitivity** | [**\OpenAPI\Client\Model\WAFSensitivityChoices**](WAFSensitivityChoices.md) |  |
**file_upload** | **bool** |  |
**file_upload_sensitivity** | [**\OpenAPI\Client\Model\WAFSensitivityChoices**](WAFSensitivityChoices.md) |  |
**unwanted_access** | **bool** |  |
**unwanted_access_sensitivity** | [**\OpenAPI\Client\Model\WAFSensitivityChoices**](WAFSensitivityChoices.md) |  |
**identified_attack** | **bool** |  |
**identified_attack_sensitivity** | [**\OpenAPI\Client\Model\WAFSensitivityChoices**](WAFSensitivityChoices.md) |  |
**bypass_addresses** | **string[]** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
