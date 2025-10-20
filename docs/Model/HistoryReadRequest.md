# # HistoryReadRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_header** | [**\TechDock\OpcUaWebApiClient\Model\RequestHeader**](RequestHeader.md) |  | [optional]
**history_read_details** | [**\TechDock\OpcUaWebApiClient\Model\ExtensionObject**](ExtensionObject.md) |  | [optional]
**timestamps_to_return** | **int** | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/7.40). | [optional]
**release_continuation_points** | **bool** |  | [optional] [default to false]
**nodes_to_read** | [**\TechDock\OpcUaWebApiClient\Model\HistoryReadValueId[]**](HistoryReadValueId.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
