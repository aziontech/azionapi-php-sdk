# # PostCustomDataStreamingResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **string** |  | [optional]
**data_source** | **string** | Options:  * &#x60;http&#x60; - Edge Applications  * &#x60;waf&#x60; - WAF Events  * &#x60;cells_console&#x60; - Edge Functions  * &#x60;rtm_activity&#x60; - Activity History | [optional]
**template_model** | **string** | Note:  * Add all variables and values that will be used to stream according to the data source you choose to use. | [optional]
**active** | **bool** |  | [optional]
**endpoint** | **string** |  | [optional]
**all_domains** | **bool** | Note:  * Field not used with the rtm_activity data source. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
