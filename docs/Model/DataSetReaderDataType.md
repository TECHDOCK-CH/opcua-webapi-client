# # DataSetReaderDataType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**enabled** | **bool** |  | [optional] [default to false]
**publisher_id** | [**\TechDock\OpcUaWebApiClient\Model\Variant**](Variant.md) |  | [optional]
**writer_group_id** | **int** |  | [optional] [default to 0]
**data_set_writer_id** | **int** |  | [optional] [default to 0]
**data_set_meta_data** | [**\TechDock\OpcUaWebApiClient\Model\DataSetMetaDataType**](DataSetMetaDataType.md) |  | [optional]
**data_set_field_content_mask** | **int** |  | [optional] [default to 0]
**message_receive_timeout** | **float** |  | [optional] [default to 0]
**key_frame_count** | **int** |  | [optional] [default to 0]
**header_layout_uri** | **string** |  | [optional]
**security_mode** | **int** | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part5/12.3.10). | [optional]
**security_group_id** | **string** |  | [optional]
**security_key_services** | [**\TechDock\OpcUaWebApiClient\Model\EndpointDescription[]**](EndpointDescription.md) |  | [optional]
**data_set_reader_properties** | [**\TechDock\OpcUaWebApiClient\Model\KeyValuePair[]**](KeyValuePair.md) |  | [optional]
**transport_settings** | **object** |  | [optional]
**message_settings** | **object** |  | [optional]
**subscribed_data_set** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
