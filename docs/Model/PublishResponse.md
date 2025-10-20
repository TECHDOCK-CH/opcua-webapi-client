# # PublishResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**response_header** | [**\TechDock\OpcUaWebApiClient\Model\ResponseHeader**](ResponseHeader.md) |  | [optional]
**subscription_id** | **int** |  | [optional] [default to 0]
**available_sequence_numbers** | **int[]** |  | [optional]
**more_notifications** | **bool** |  | [optional] [default to false]
**notification_message** | [**\TechDock\OpcUaWebApiClient\Model\NotificationMessage**](NotificationMessage.md) |  | [optional]
**results** | [**\TechDock\OpcUaWebApiClient\Model\StatusCode[]**](StatusCode.md) |  | [optional]
**diagnostic_infos** | [**\TechDock\OpcUaWebApiClient\Model\DiagnosticInfo[]**](DiagnosticInfo.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
