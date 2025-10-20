# TechDock\OpcUaWebApiClient\DefaultApi



All URIs are relative to https://webapi.opcfoundation.org/opcua, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateSession()**](DefaultApi.md#activateSession) | **POST** /activatesession |  |
| [**browse()**](DefaultApi.md#browse) | **POST** /browse |  |
| [**browseNext()**](DefaultApi.md#browseNext) | **POST** /browsenext |  |
| [**call()**](DefaultApi.md#call) | **POST** /call |  |
| [**cancel()**](DefaultApi.md#cancel) | **POST** /cancel |  |
| [**closeSession()**](DefaultApi.md#closeSession) | **POST** /closesession |  |
| [**createMonitoredItems()**](DefaultApi.md#createMonitoredItems) | **POST** /createmonitoreditems |  |
| [**createSession()**](DefaultApi.md#createSession) | **POST** /createsession |  |
| [**createSubscription()**](DefaultApi.md#createSubscription) | **POST** /createsubscription |  |
| [**deleteMonitoredItems()**](DefaultApi.md#deleteMonitoredItems) | **POST** /deletemonitoreditems |  |
| [**deleteSubscriptions()**](DefaultApi.md#deleteSubscriptions) | **POST** /deletesubscriptions |  |
| [**findServers()**](DefaultApi.md#findServers) | **POST** /findservers |  |
| [**getEndpoints()**](DefaultApi.md#getEndpoints) | **POST** /getendpoints |  |
| [**historyRead()**](DefaultApi.md#historyRead) | **POST** /historyread |  |
| [**historyUpdate()**](DefaultApi.md#historyUpdate) | **POST** /historyupdate |  |
| [**modifyMonitoredItems()**](DefaultApi.md#modifyMonitoredItems) | **POST** /modifymonitoreditems |  |
| [**modifySubscription()**](DefaultApi.md#modifySubscription) | **POST** /modifysubscription |  |
| [**publish()**](DefaultApi.md#publish) | **POST** /publish |  |
| [**read()**](DefaultApi.md#read) | **POST** /read |  |
| [**registerNodes()**](DefaultApi.md#registerNodes) | **POST** /registernodes |  |
| [**republish()**](DefaultApi.md#republish) | **POST** /republish |  |
| [**setMonitoringMode()**](DefaultApi.md#setMonitoringMode) | **POST** /setmonitoringmode |  |
| [**setPublishingMode()**](DefaultApi.md#setPublishingMode) | **POST** /setpublishingmode |  |
| [**setTriggering()**](DefaultApi.md#setTriggering) | **POST** /settriggering |  |
| [**transferSubscriptions()**](DefaultApi.md#transferSubscriptions) | **POST** /transfersubscriptions |  |
| [**translateBrowsePathsToNodeIds()**](DefaultApi.md#translateBrowsePathsToNodeIds) | **POST** /translate |  |
| [**unregisterNodes()**](DefaultApi.md#unregisterNodes) | **POST** /unregisternodes |  |
| [**write()**](DefaultApi.md#write) | **POST** /write |  |


## `activateSession()`

```php
activateSession($activate_session_request): \TechDock\OpcUaWebApiClient\Model\ActivateSessionResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$activate_session_request = new \TechDock\OpcUaWebApiClient\Model\ActivateSessionRequest(); // \TechDock\OpcUaWebApiClient\Model\ActivateSessionRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.7.3/#5.7.3.2).

try {
    $result = $apiInstance->activateSession($activate_session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->activateSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **activate_session_request** | [**\TechDock\OpcUaWebApiClient\Model\ActivateSessionRequest**](../Model/ActivateSessionRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.7.3/#5.7.3.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\ActivateSessionResponse**](../Model/ActivateSessionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `browse()`

```php
browse($browse_request): \TechDock\OpcUaWebApiClient\Model\BrowseResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$browse_request = new \TechDock\OpcUaWebApiClient\Model\BrowseRequest(); // \TechDock\OpcUaWebApiClient\Model\BrowseRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.9.2/#5.9.2.2).

try {
    $result = $apiInstance->browse($browse_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->browse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **browse_request** | [**\TechDock\OpcUaWebApiClient\Model\BrowseRequest**](../Model/BrowseRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.9.2/#5.9.2.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\BrowseResponse**](../Model/BrowseResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `browseNext()`

```php
browseNext($browse_next_request): \TechDock\OpcUaWebApiClient\Model\BrowseNextResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$browse_next_request = new \TechDock\OpcUaWebApiClient\Model\BrowseNextRequest(); // \TechDock\OpcUaWebApiClient\Model\BrowseNextRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.9.3/#5.9.3.2).

try {
    $result = $apiInstance->browseNext($browse_next_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->browseNext: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **browse_next_request** | [**\TechDock\OpcUaWebApiClient\Model\BrowseNextRequest**](../Model/BrowseNextRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.9.3/#5.9.3.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\BrowseNextResponse**](../Model/BrowseNextResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `call()`

```php
call($call_request): \TechDock\OpcUaWebApiClient\Model\CallResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$call_request = new \TechDock\OpcUaWebApiClient\Model\CallRequest(); // \TechDock\OpcUaWebApiClient\Model\CallRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.12.2/#5.12.2.2).

try {
    $result = $apiInstance->call($call_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->call: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **call_request** | [**\TechDock\OpcUaWebApiClient\Model\CallRequest**](../Model/CallRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.12.2/#5.12.2.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\CallResponse**](../Model/CallResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancel()`

```php
cancel($cancel_request): \TechDock\OpcUaWebApiClient\Model\CancelResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cancel_request = new \TechDock\OpcUaWebApiClient\Model\CancelRequest(); // \TechDock\OpcUaWebApiClient\Model\CancelRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.7.5/#5.7.5.2).

try {
    $result = $apiInstance->cancel($cancel_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->cancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cancel_request** | [**\TechDock\OpcUaWebApiClient\Model\CancelRequest**](../Model/CancelRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.7.5/#5.7.5.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\CancelResponse**](../Model/CancelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `closeSession()`

```php
closeSession($close_session_request): \TechDock\OpcUaWebApiClient\Model\CloseSessionResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$close_session_request = new \TechDock\OpcUaWebApiClient\Model\CloseSessionRequest(); // \TechDock\OpcUaWebApiClient\Model\CloseSessionRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.7.4/#5.7.4.2).

try {
    $result = $apiInstance->closeSession($close_session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->closeSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **close_session_request** | [**\TechDock\OpcUaWebApiClient\Model\CloseSessionRequest**](../Model/CloseSessionRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.7.4/#5.7.4.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\CloseSessionResponse**](../Model/CloseSessionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMonitoredItems()`

```php
createMonitoredItems($create_monitored_items_request): \TechDock\OpcUaWebApiClient\Model\CreateMonitoredItemsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_monitored_items_request = new \TechDock\OpcUaWebApiClient\Model\CreateMonitoredItemsRequest(); // \TechDock\OpcUaWebApiClient\Model\CreateMonitoredItemsRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.13.2/#5.13.2.2).

try {
    $result = $apiInstance->createMonitoredItems($create_monitored_items_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createMonitoredItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_monitored_items_request** | [**\TechDock\OpcUaWebApiClient\Model\CreateMonitoredItemsRequest**](../Model/CreateMonitoredItemsRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.13.2/#5.13.2.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\CreateMonitoredItemsResponse**](../Model/CreateMonitoredItemsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSession()`

```php
createSession($create_session_request): \TechDock\OpcUaWebApiClient\Model\CreateSessionResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_session_request = new \TechDock\OpcUaWebApiClient\Model\CreateSessionRequest(); // \TechDock\OpcUaWebApiClient\Model\CreateSessionRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.7.2/#5.7.2.2).

try {
    $result = $apiInstance->createSession($create_session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_session_request** | [**\TechDock\OpcUaWebApiClient\Model\CreateSessionRequest**](../Model/CreateSessionRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.7.2/#5.7.2.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\CreateSessionResponse**](../Model/CreateSessionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSubscription()`

```php
createSubscription($create_subscription_request): \TechDock\OpcUaWebApiClient\Model\CreateSubscriptionResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_subscription_request = new \TechDock\OpcUaWebApiClient\Model\CreateSubscriptionRequest(); // \TechDock\OpcUaWebApiClient\Model\CreateSubscriptionRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.14.2/#5.14.2.2).

try {
    $result = $apiInstance->createSubscription($create_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_subscription_request** | [**\TechDock\OpcUaWebApiClient\Model\CreateSubscriptionRequest**](../Model/CreateSubscriptionRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.14.2/#5.14.2.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\CreateSubscriptionResponse**](../Model/CreateSubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMonitoredItems()`

```php
deleteMonitoredItems($delete_monitored_items_request): \TechDock\OpcUaWebApiClient\Model\DeleteMonitoredItemsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delete_monitored_items_request = new \TechDock\OpcUaWebApiClient\Model\DeleteMonitoredItemsRequest(); // \TechDock\OpcUaWebApiClient\Model\DeleteMonitoredItemsRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.13.6/#5.13.6.2).

try {
    $result = $apiInstance->deleteMonitoredItems($delete_monitored_items_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteMonitoredItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_monitored_items_request** | [**\TechDock\OpcUaWebApiClient\Model\DeleteMonitoredItemsRequest**](../Model/DeleteMonitoredItemsRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.13.6/#5.13.6.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\DeleteMonitoredItemsResponse**](../Model/DeleteMonitoredItemsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSubscriptions()`

```php
deleteSubscriptions($delete_subscriptions_request): \TechDock\OpcUaWebApiClient\Model\DeleteSubscriptionsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delete_subscriptions_request = new \TechDock\OpcUaWebApiClient\Model\DeleteSubscriptionsRequest(); // \TechDock\OpcUaWebApiClient\Model\DeleteSubscriptionsRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.14.8/#5.14.8.2).

try {
    $result = $apiInstance->deleteSubscriptions($delete_subscriptions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_subscriptions_request** | [**\TechDock\OpcUaWebApiClient\Model\DeleteSubscriptionsRequest**](../Model/DeleteSubscriptionsRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.14.8/#5.14.8.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\DeleteSubscriptionsResponse**](../Model/DeleteSubscriptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findServers()`

```php
findServers($find_servers_request): \TechDock\OpcUaWebApiClient\Model\FindServersResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$find_servers_request = new \TechDock\OpcUaWebApiClient\Model\FindServersRequest(); // \TechDock\OpcUaWebApiClient\Model\FindServersRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.5.2/#5.5.2.2).

try {
    $result = $apiInstance->findServers($find_servers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **find_servers_request** | [**\TechDock\OpcUaWebApiClient\Model\FindServersRequest**](../Model/FindServersRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.5.2/#5.5.2.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\FindServersResponse**](../Model/FindServersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEndpoints()`

```php
getEndpoints($get_endpoints_request): \TechDock\OpcUaWebApiClient\Model\GetEndpointsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_endpoints_request = new \TechDock\OpcUaWebApiClient\Model\GetEndpointsRequest(); // \TechDock\OpcUaWebApiClient\Model\GetEndpointsRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.5.4/#5.5.4.2).

try {
    $result = $apiInstance->getEndpoints($get_endpoints_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEndpoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_endpoints_request** | [**\TechDock\OpcUaWebApiClient\Model\GetEndpointsRequest**](../Model/GetEndpointsRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.5.4/#5.5.4.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\GetEndpointsResponse**](../Model/GetEndpointsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `historyRead()`

```php
historyRead($history_read_request): \TechDock\OpcUaWebApiClient\Model\HistoryReadResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$history_read_request = new \TechDock\OpcUaWebApiClient\Model\HistoryReadRequest(); // \TechDock\OpcUaWebApiClient\Model\HistoryReadRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.11.3/#5.11.3.2).

try {
    $result = $apiInstance->historyRead($history_read_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->historyRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **history_read_request** | [**\TechDock\OpcUaWebApiClient\Model\HistoryReadRequest**](../Model/HistoryReadRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.11.3/#5.11.3.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\HistoryReadResponse**](../Model/HistoryReadResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `historyUpdate()`

```php
historyUpdate($history_update_request): \TechDock\OpcUaWebApiClient\Model\HistoryUpdateResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$history_update_request = new \TechDock\OpcUaWebApiClient\Model\HistoryUpdateRequest(); // \TechDock\OpcUaWebApiClient\Model\HistoryUpdateRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.11.5/#5.11.5.2).

try {
    $result = $apiInstance->historyUpdate($history_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->historyUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **history_update_request** | [**\TechDock\OpcUaWebApiClient\Model\HistoryUpdateRequest**](../Model/HistoryUpdateRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.11.5/#5.11.5.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\HistoryUpdateResponse**](../Model/HistoryUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyMonitoredItems()`

```php
modifyMonitoredItems($modify_monitored_items_request): \TechDock\OpcUaWebApiClient\Model\ModifyMonitoredItemsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modify_monitored_items_request = new \TechDock\OpcUaWebApiClient\Model\ModifyMonitoredItemsRequest(); // \TechDock\OpcUaWebApiClient\Model\ModifyMonitoredItemsRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.13.3/#5.13.3.2).

try {
    $result = $apiInstance->modifyMonitoredItems($modify_monitored_items_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->modifyMonitoredItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modify_monitored_items_request** | [**\TechDock\OpcUaWebApiClient\Model\ModifyMonitoredItemsRequest**](../Model/ModifyMonitoredItemsRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.13.3/#5.13.3.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\ModifyMonitoredItemsResponse**](../Model/ModifyMonitoredItemsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifySubscription()`

```php
modifySubscription($modify_subscription_request): \TechDock\OpcUaWebApiClient\Model\ModifySubscriptionResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modify_subscription_request = new \TechDock\OpcUaWebApiClient\Model\ModifySubscriptionRequest(); // \TechDock\OpcUaWebApiClient\Model\ModifySubscriptionRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.14.3/#5.14.3.2).

try {
    $result = $apiInstance->modifySubscription($modify_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->modifySubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modify_subscription_request** | [**\TechDock\OpcUaWebApiClient\Model\ModifySubscriptionRequest**](../Model/ModifySubscriptionRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.14.3/#5.14.3.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\ModifySubscriptionResponse**](../Model/ModifySubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publish()`

```php
publish($publish_request): \TechDock\OpcUaWebApiClient\Model\PublishResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$publish_request = new \TechDock\OpcUaWebApiClient\Model\PublishRequest(); // \TechDock\OpcUaWebApiClient\Model\PublishRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.14.5/#5.14.5.2).

try {
    $result = $apiInstance->publish($publish_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->publish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **publish_request** | [**\TechDock\OpcUaWebApiClient\Model\PublishRequest**](../Model/PublishRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.14.5/#5.14.5.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\PublishResponse**](../Model/PublishResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `read()`

```php
read($read_request): \TechDock\OpcUaWebApiClient\Model\ReadResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$read_request = new \TechDock\OpcUaWebApiClient\Model\ReadRequest(); // \TechDock\OpcUaWebApiClient\Model\ReadRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.11.2/#5.11.2.2).

try {
    $result = $apiInstance->read($read_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->read: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **read_request** | [**\TechDock\OpcUaWebApiClient\Model\ReadRequest**](../Model/ReadRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.11.2/#5.11.2.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\ReadResponse**](../Model/ReadResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerNodes()`

```php
registerNodes($register_nodes_request): \TechDock\OpcUaWebApiClient\Model\RegisterNodesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$register_nodes_request = new \TechDock\OpcUaWebApiClient\Model\RegisterNodesRequest(); // \TechDock\OpcUaWebApiClient\Model\RegisterNodesRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.9.5/#5.9.5.2).

try {
    $result = $apiInstance->registerNodes($register_nodes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->registerNodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **register_nodes_request** | [**\TechDock\OpcUaWebApiClient\Model\RegisterNodesRequest**](../Model/RegisterNodesRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.9.5/#5.9.5.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\RegisterNodesResponse**](../Model/RegisterNodesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `republish()`

```php
republish($republish_request): \TechDock\OpcUaWebApiClient\Model\RepublishResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$republish_request = new \TechDock\OpcUaWebApiClient\Model\RepublishRequest(); // \TechDock\OpcUaWebApiClient\Model\RepublishRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.14.6/#5.14.6.2).

try {
    $result = $apiInstance->republish($republish_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->republish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **republish_request** | [**\TechDock\OpcUaWebApiClient\Model\RepublishRequest**](../Model/RepublishRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.14.6/#5.14.6.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\RepublishResponse**](../Model/RepublishResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setMonitoringMode()`

```php
setMonitoringMode($set_monitoring_mode_request): \TechDock\OpcUaWebApiClient\Model\SetMonitoringModeResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$set_monitoring_mode_request = new \TechDock\OpcUaWebApiClient\Model\SetMonitoringModeRequest(); // \TechDock\OpcUaWebApiClient\Model\SetMonitoringModeRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.13.4/#5.13.4.2).

try {
    $result = $apiInstance->setMonitoringMode($set_monitoring_mode_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->setMonitoringMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_monitoring_mode_request** | [**\TechDock\OpcUaWebApiClient\Model\SetMonitoringModeRequest**](../Model/SetMonitoringModeRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.13.4/#5.13.4.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\SetMonitoringModeResponse**](../Model/SetMonitoringModeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setPublishingMode()`

```php
setPublishingMode($set_publishing_mode_request): \TechDock\OpcUaWebApiClient\Model\SetPublishingModeResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$set_publishing_mode_request = new \TechDock\OpcUaWebApiClient\Model\SetPublishingModeRequest(); // \TechDock\OpcUaWebApiClient\Model\SetPublishingModeRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.14.4/#5.14.4.2).

try {
    $result = $apiInstance->setPublishingMode($set_publishing_mode_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->setPublishingMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_publishing_mode_request** | [**\TechDock\OpcUaWebApiClient\Model\SetPublishingModeRequest**](../Model/SetPublishingModeRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.14.4/#5.14.4.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\SetPublishingModeResponse**](../Model/SetPublishingModeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setTriggering()`

```php
setTriggering($set_triggering_request): \TechDock\OpcUaWebApiClient\Model\SetTriggeringResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$set_triggering_request = new \TechDock\OpcUaWebApiClient\Model\SetTriggeringRequest(); // \TechDock\OpcUaWebApiClient\Model\SetTriggeringRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.13.5/#5.13.5.2).

try {
    $result = $apiInstance->setTriggering($set_triggering_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->setTriggering: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_triggering_request** | [**\TechDock\OpcUaWebApiClient\Model\SetTriggeringRequest**](../Model/SetTriggeringRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.13.5/#5.13.5.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\SetTriggeringResponse**](../Model/SetTriggeringResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferSubscriptions()`

```php
transferSubscriptions($transfer_subscriptions_request): \TechDock\OpcUaWebApiClient\Model\TransferSubscriptionsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transfer_subscriptions_request = new \TechDock\OpcUaWebApiClient\Model\TransferSubscriptionsRequest(); // \TechDock\OpcUaWebApiClient\Model\TransferSubscriptionsRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.14.7/#5.14.7.2).

try {
    $result = $apiInstance->transferSubscriptions($transfer_subscriptions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transferSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transfer_subscriptions_request** | [**\TechDock\OpcUaWebApiClient\Model\TransferSubscriptionsRequest**](../Model/TransferSubscriptionsRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.14.7/#5.14.7.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\TransferSubscriptionsResponse**](../Model/TransferSubscriptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `translateBrowsePathsToNodeIds()`

```php
translateBrowsePathsToNodeIds($translate_browse_paths_to_node_ids_request): \TechDock\OpcUaWebApiClient\Model\TranslateBrowsePathsToNodeIdsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$translate_browse_paths_to_node_ids_request = new \TechDock\OpcUaWebApiClient\Model\TranslateBrowsePathsToNodeIdsRequest(); // \TechDock\OpcUaWebApiClient\Model\TranslateBrowsePathsToNodeIdsRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.9.4/#5.9.4.2).

try {
    $result = $apiInstance->translateBrowsePathsToNodeIds($translate_browse_paths_to_node_ids_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->translateBrowsePathsToNodeIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **translate_browse_paths_to_node_ids_request** | [**\TechDock\OpcUaWebApiClient\Model\TranslateBrowsePathsToNodeIdsRequest**](../Model/TranslateBrowsePathsToNodeIdsRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.9.4/#5.9.4.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\TranslateBrowsePathsToNodeIdsResponse**](../Model/TranslateBrowsePathsToNodeIdsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unregisterNodes()`

```php
unregisterNodes($unregister_nodes_request): \TechDock\OpcUaWebApiClient\Model\UnregisterNodesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$unregister_nodes_request = new \TechDock\OpcUaWebApiClient\Model\UnregisterNodesRequest(); // \TechDock\OpcUaWebApiClient\Model\UnregisterNodesRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.9.6/#5.9.6.2).

try {
    $result = $apiInstance->unregisterNodes($unregister_nodes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->unregisterNodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **unregister_nodes_request** | [**\TechDock\OpcUaWebApiClient\Model\UnregisterNodesRequest**](../Model/UnregisterNodesRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.9.6/#5.9.6.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\UnregisterNodesResponse**](../Model/UnregisterNodesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `write()`

```php
write($write_request): \TechDock\OpcUaWebApiClient\Model\WriteResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TechDock\OpcUaWebApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$write_request = new \TechDock\OpcUaWebApiClient\Model\WriteRequest(); // \TechDock\OpcUaWebApiClient\Model\WriteRequest | [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.11.4/#5.11.4.2).

try {
    $result = $apiInstance->write($write_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->write: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **write_request** | [**\TechDock\OpcUaWebApiClient\Model\WriteRequest**](../Model/WriteRequest.md)| [Link to specification](https://reference.opcfoundation.org/v105/Core/docs/Part4/5.11.4/#5.11.4.2). | [optional] |

### Return type

[**\TechDock\OpcUaWebApiClient\Model\WriteResponse**](../Model/WriteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
