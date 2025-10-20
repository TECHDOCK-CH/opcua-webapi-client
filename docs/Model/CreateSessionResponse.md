# # CreateSessionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**response_header** | [**\TechDock\OpcUaWebApiClient\Model\ResponseHeader**](ResponseHeader.md) |  | [optional]
**session_id** | **string** |  | [optional]
**authentication_token** | **string** |  | [optional]
**revised_session_timeout** | **float** |  | [optional] [default to 0]
**server_nonce** | **string** |  | [optional]
**server_certificate** | **string** |  | [optional]
**server_endpoints** | [**\TechDock\OpcUaWebApiClient\Model\EndpointDescription[]**](EndpointDescription.md) |  | [optional]
**server_software_certificates** | [**\TechDock\OpcUaWebApiClient\Model\SignedSoftwareCertificate[]**](SignedSoftwareCertificate.md) |  | [optional]
**server_signature** | [**\TechDock\OpcUaWebApiClient\Model\SignatureData**](SignatureData.md) |  | [optional]
**max_request_message_size** | **int** |  | [optional] [default to 0]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
