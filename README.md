# OPC UA WebAPI Client for PHP

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![PHP Version](https://img.shields.io/badge/php-%5E8.1-blue)](https://www.php.net/)

A PHP client library for interacting with OPC UA servers via the OPC UA WebAPI. This library provides a simple and intuitive interface for reading values, browsing the address space, and performing other OPC UA operations over HTTP/HTTPS.

## Features

- Full support for OPC UA WebAPI operations
- Read node values (single and multiple)
- Browse the OPC UA address space
- Support for various node ID formats (numeric, string, namespace URIs)
- Comprehensive model classes for all OPC UA data types
- PSR-7 compatible HTTP client (Guzzle)
- Well-tested with integration examples

## Requirements

- PHP 8.1 or higher
- ext-curl
- ext-json
- ext-mbstring
- Guzzle HTTP client

## Installation

Install via Composer:

```bash
composer require techdock/opcua-webapi-client
```

## Quick Start

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use TechDock\OpcUaWebApiClient\Api\DefaultApi;
use TechDock\OpcUaWebApiClient\Configuration;
use TechDock\OpcUaWebApiClient\Model\ReadRequest;
use TechDock\OpcUaWebApiClient\Model\ReadValueId;
use TechDock\OpcUaWebApiClient\Model\RequestHeader;
use GuzzleHttp\Client;

// Configure the API endpoint
$config = Configuration::getDefaultConfiguration();
$config->setHost('https://webapi.opcfoundation.org/opcua');

// Create HTTP client
$httpClient = new Client([
    'timeout' => 30.0,
    'connect_timeout' => 10.0,
]);

// Initialize API
$api = new DefaultApi($httpClient, $config);

// Create a read request
$readRequest = new ReadRequest([
    'max_age' => 0,
    'nodes_to_read' => [
        new ReadValueId([
            'node_id' => 'i=2258',  // Server.ServerStatus.CurrentTime
            'attribute_id' => 13     // Value attribute
        ])
    ],
    'request_header' => new RequestHeader([
        'request_handle' => 1,
        'timestamp' => new \DateTime(),
        'timeout_hint' => 60000
    ])
]);

// Execute the read operation
$response = $api->read($readRequest);

// Access the result
$result = $response->getResults()[0];
echo "Server time: " . $result->getValue() . "\n";
```

## Usage Examples

### Reading a Single Node Value

```php
use TechDock\OpcUaWebApiClient\Model\ReadRequest;
use TechDock\OpcUaWebApiClient\Model\ReadValueId;
use TechDock\OpcUaWebApiClient\Model\RequestHeader;

$readRequest = new ReadRequest([
    'max_age' => 0,
    'nodes_to_read' => [
        new ReadValueId([
            'node_id' => 'i=2258',     // Server.ServerStatus.CurrentTime
            'attribute_id' => 13        // Value attribute
        ])
    ],
    'request_header' => new RequestHeader([
        'request_handle' => 1,
        'timestamp' => new \DateTime(),
        'timeout_hint' => 60000
    ])
]);

$response = $api->read($readRequest);
$value = $response->getResults()[0]->getValue();
```

### Reading Multiple Node Values

Reading multiple nodes in a single request is more efficient:

```php
$readRequest = new ReadRequest([
    'max_age' => 0,
    'nodes_to_read' => [
        new ReadValueId([
            'node_id' => 'i=2258',     // Server.ServerStatus.CurrentTime
            'attribute_id' => 13
        ]),
        new ReadValueId([
            'node_id' => 'i=2259',     // Server.ServerStatus.State
            'attribute_id' => 13
        ])
    ],
    'request_header' => new RequestHeader([
        'request_handle' => 1,
        'timestamp' => new \DateTime(),
        'timeout_hint' => 60000
    ])
]);

$response = $api->read($readRequest);

foreach ($response->getResults() as $index => $result) {
    echo "Node {$index}: " . $result->getValue() . "\n";
}
```

### Browsing the Address Space

```php
use TechDock\OpcUaWebApiClient\Model\BrowseRequest;
use TechDock\OpcUaWebApiClient\Model\BrowseDescription;

$browseRequest = new BrowseRequest([
    'requested_max_references_per_node' => 20,
    'nodes_to_browse' => [
        new BrowseDescription([
            'node_id' => 'i=84',           // Root folder
            'browse_direction' => 0,        // Forward
            'reference_type_id' => 'i=33', // Hierarchical references
            'include_subtypes' => true,
            'result_mask' => 63             // All fields
        ])
    ],
    'request_header' => new RequestHeader([
        'request_handle' => 1,
        'timestamp' => new \DateTime(),
        'timeout_hint' => 60000
    ])
]);

$response = $api->browse($browseRequest);

// Access child nodes
$references = $response->getResults()[0]->getReferences();
foreach ($references as $reference) {
    $displayName = $reference->getDisplayName()->getText();
    echo "Found node: {$displayName}\n";
}
```

### Using Namespace URIs

For nodes with custom namespaces:

```php
$browseDescription = new BrowseDescription([
    'node_id' => 'nsu=urn:opcfoundation.org:2024-10:starterkit:measurements;s=Measurements',
    'browse_direction' => 0,
    'reference_type_id' => 'i=33',
    'include_subtypes' => true,
    'result_mask' => 63
]);
```

### Error Handling

```php
try {
    $response = $api->read($readRequest);

    // Check for service-level errors
    $serviceResult = $response->getResponseHeader()->getServiceResult();
    if ($serviceResult && $serviceResult->getCode() !== null && $serviceResult->getCode() !== 0) {
        throw new \Exception('Operation failed with error code: ' . $serviceResult->getCode());
    }

    // Check individual result status codes
    foreach ($response->getResults() as $result) {
        if ($result->getStatusCode() && $result->getStatusCode()->getCode() !== 0) {
            echo "Warning: Result has non-Good status code\n";
        }
    }
} catch (\TechDock\OpcUaWebApiClient\ApiException $e) {
    echo "API Exception: " . $e->getMessage() . "\n";
    echo "HTTP Status Code: " . $e->getCode() . "\n";
}
```

## Configuration

### Custom Timeouts

```php
use GuzzleHttp\Client;

$httpClient = new Client([
    'timeout' => 60.0,           // Overall timeout
    'connect_timeout' => 15.0,   // Connection timeout
    'debug' => false             // Enable for HTTP debug output
]);

$api = new DefaultApi($httpClient, $config);
```

### Custom Host

```php
$config = Configuration::getDefaultConfiguration();
$config->setHost('https://your-opcua-server.example.com/opcua');
```

## API Reference

The `DefaultApi` class provides the following main methods:

- `read(ReadRequest $request)` - Read one or more node values
- `write(WriteRequest $request)` - Write values to nodes
- `browse(BrowseRequest $request)` - Browse the address space
- `browseNext(BrowseNextRequest $request)` - Continue browsing
- `translateBrowsePathsToNodeIds(TranslateBrowsePathsToNodeIdsRequest $request)` - Translate browse paths
- `call(CallRequest $request)` - Call methods on objects
- `createSession(CreateSessionRequest $request)` - Create a session
- `activateSession(ActivateSessionRequest $request)` - Activate a session
- `closeSession(CloseSessionRequest $request)` - Close a session

For detailed information about request and response models, see the classes in the `src/Model` directory.

## Testing

### Unit Tests

Run the unit tests:

```bash
composer test
```

Or directly with PHPUnit:

```bash
./vendor/bin/phpunit
```

### Live Integration Tests

The library includes integration tests that demonstrate real usage against the public OPC Foundation WebAPI:

```bash
composer test:live
```

Or:

```bash
ENABLE_LIVE_TESTS=1 ./vendor/bin/phpunit --group live
```

Enable HTTP debugging:

```bash
ENABLE_LIVE_TESTS=1 DEBUG_HTTP=1 ./vendor/bin/phpunit --group live
```

The integration tests serve as comprehensive usage examples and can be found in `test/Integration/LiveApiTest.php`.

## Node ID Formats

OPC UA supports several node ID formats:

- **Numeric**: `i=2258` (namespace 0, numeric ID 2258)
- **String**: `s=MyNode` (namespace 0, string identifier)
- **GUID**: `g=09087e75-8e5e-499b-954f-f2a9603db28a`
- **Opaque**: `b=M/RbKBsRVkePCePcx24oRA==` (base64 encoded)
- **Namespace URI**: `nsu=urn:example:namespace;s=MyNode`

## Common OPC UA Node IDs

Here are some commonly used OPC UA node IDs:

- `i=84` - Root folder
- `i=85` - Objects folder
- `i=86` - Types folder
- `i=87` - Views folder
- `i=2253` - Server object
- `i=2254` - Server.ServerArray
- `i=2255` - Server.NamespaceArray
- `i=2256` - Server.ServerStatus
- `i=2258` - Server.ServerStatus.CurrentTime
- `i=2259` - Server.ServerStatus.State

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Support

- **Issues**: [GitHub Issues](https://github.com/TECHDOCK-CH/opcua-webapi-client/issues)
- **Email**: info@techdock.ch

## Credits

Developed and maintained by [TechDock](https://techdock.ch).

This library is built on the OpenAPI specification provided by the [OPC Foundation](https://opcfoundation.org/). The OPC UA WebAPI specification (introduced in version 1.05.04) enables standardized RESTful API access to OPC UA servers, making OPC UA more accessible to modern web and cloud applications.

## Related Resources

- [OPC Foundation](https://opcfoundation.org/)
- [OPC UA Specification](https://reference.opcfoundation.org/)
- [OPC UA WebAPI Swagger Documentation](https://webapi.opcfoundation.org/swagger) - Live interactive API documentation
- [OPC UA WebAPI StarterKit](https://github.com/OPCFoundation/UA-WebApi-StarterKit) - Official sample applications and OpenAPI definitions
- [OPC UA and OpenAPI: Understanding the Integration](https://opcconnect.opcfoundation.org/2024/12/opc-ua-and-openapi/) - Comprehensive blog post explaining how OpenAPI simplifies OPC UA development
- [OPC UA Part 6: NodeId String Format](https://reference.opcfoundation.org/Core/Part6/v105/docs/5.1.12) - Specification for the string representations used in this library
