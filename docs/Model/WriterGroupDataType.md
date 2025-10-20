# # WriterGroupDataType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**writer_group_id** | **int** |  | [optional] [default to 0]
**publishing_interval** | **float** |  | [optional] [default to 0]
**keep_alive_time** | **float** |  | [optional] [default to 0]
**priority** | **int** |  | [optional] [default to 0]
**locale_ids** | **string[]** |  | [optional]
**header_layout_uri** | **string** |  | [optional]
**transport_settings** | **object** |  | [optional]
**message_settings** | **object** |  | [optional]
**data_set_writers** | [**\TechDock\OpcUaWebApiClient\Model\DataSetWriterDataType[]**](DataSetWriterDataType.md) |  | [optional]
**name** | **string** |  | [optional]
**enabled** | **bool** |  | [optional] [default to false]
**security_mode** | **int** | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part5/12.3.10). | [optional]
**security_group_id** | **string** |  | [optional]
**security_key_services** | [**\TechDock\OpcUaWebApiClient\Model\EndpointDescription[]**](EndpointDescription.md) |  | [optional]
**max_network_message_size** | **int** |  | [optional] [default to 0]
**group_properties** | [**\TechDock\OpcUaWebApiClient\Model\KeyValuePair[]**](KeyValuePair.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
