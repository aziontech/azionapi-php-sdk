# # CreateNewDataStreamingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**template_id** | **int** | Options:  * &#x60;2&#x60; - Edge Applications Event Collector  * &#x60;4&#x60; - WAF Event Collector  * &#x60;86&#x60; - Edge Functions Event Collector  * &#x60;184&#x60; - Edge Applications + WAF Event Collector  * &#x60;251&#x60; - Activity History Collector | [optional]
**data_source** | **string** | Options:  * &#x60;http&#x60; - Edge Applications (default)  * &#x60;waf&#x60; - WAF Events  * &#x60;cells_console&#x60; - Edge Functions  * &#x60;rtm_activity&#x60; - Activity History | [optional]
**active** | **bool** |  | [optional] [default to true]
**endpoint** | [**\OpenAPI\Client\Model\DataStreamingEndpointTypeStandard**](DataStreamingEndpointTypeStandard.md) |  | [optional]
**domains_ids** | **int[]** | Note:  * Field not used with the rtm_activity data source. | [optional]
**all_domains** | **bool** | Note:  * Field not used with the rtm_activity data source. | [optional] [default to false]
**sampling_percentage** | **int** | Note:  * &#x60;Range&#x60; - From 0 to 100.  * &#x60;To use:&#x60; [Contact the sales team](https://www.azion.com/en/contact-sales/) to activate this feature in your account. | [optional]
**template_model** | **string** | Note:  * Add all variables and values that will be used to stream according to the data source you choose to use.    * All data streaming [variables can be found on the reference documentation](https://www.azion.com/en/documentation/products/data-streaming/#selecting-data-sources). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
