# # ReaderGroupDataType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transport_settings** | **object** |  | [optional]
**message_settings** | **object** |  | [optional]
**data_set_readers** | [**\TechDock\OpcUaWebApiClient\Model\DataSetReaderDataType[]**](DataSetReaderDataType.md) |  | [optional]
**name** | **string** |  | [optional]
**enabled** | **bool** |  | [optional] [default to false]
**security_mode** | **int** | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part5/12.3.10). | [optional]
**security_group_id** | **string** |  | [optional]
**security_key_services** | [**\TechDock\OpcUaWebApiClient\Model\EndpointDescription[]**](EndpointDescription.md) |  | [optional]
**max_network_message_size** | **int** |  | [optional] [default to 0]
**group_properties** | [**\TechDock\OpcUaWebApiClient\Model\KeyValuePair[]**](KeyValuePair.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
