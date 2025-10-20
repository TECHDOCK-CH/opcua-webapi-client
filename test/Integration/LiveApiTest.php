<?php
/**
 * LiveApiTest
 * PHP version 8.1
 *
 * @category Class
 * @package  TechDock\OpcUaWebApiClient\Test\Integration
 * @author   TechDock
 * @link     https://github.com/TECHDOCK-CH/opcua-webapi-client
 */

namespace TechDock\OpcUaWebApiClient\Test\Integration;

use TechDock\OpcUaWebApiClient\Api\DefaultApi;
use TechDock\OpcUaWebApiClient\Configuration;
use TechDock\OpcUaWebApiClient\Model\BrowseDescription;
use TechDock\OpcUaWebApiClient\Model\BrowseRequest;
use TechDock\OpcUaWebApiClient\Model\ReadRequest;
use TechDock\OpcUaWebApiClient\Model\ReadValueId;
use TechDock\OpcUaWebApiClient\Model\RequestHeader;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

/**
 * LiveApiTest Class Doc Comment
 *
 * Integration tests demonstrating how to use the OPC UA Web API client.
 * These tests run against the public OPC Foundation Web API.
 *
 * Run with: composer test:live
 * Or: ENABLE_LIVE_TESTS=1 phpunit
 *
 * @category Class
 * @package  TechDock\OpcUaWebApiClient\Test\Integration
 * @author   TechDock
 * @link     https://github.com/TECHDOCK-CH/opcua-webapi-client
 */
class LiveApiTest extends TestCase
{
    /**
     * @var DefaultApi
     */
    protected $api;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        // Skip live tests unless explicitly enabled
        if (!getenv('ENABLE_LIVE_TESTS')) {
            $this->markTestSkipped('Live tests are disabled. Set ENABLE_LIVE_TESTS=1 to enable.');
        }

        // Configure the API endpoint
        $this->config = Configuration::getDefaultConfiguration();
        $this->config->setHost('https://webapi.opcfoundation.org/opcua');

        // Create HTTP client with reasonable timeouts
        $httpClient = new Client([
            'timeout' => 30.0,
            'connect_timeout' => 10.0,
            'debug' => getenv('DEBUG_HTTP') ? true : false
        ]);

        $this->api = new DefaultApi($httpClient, $this->config);
    }

    /**
     * Example: Reading a node value
     *
     * Demonstrates how to read the current server time from an OPC UA server.
     * Node i=2258 represents the Server.ServerStatus.CurrentTime value.
     *
     * @group live
     */
    public function testReadNodeValue()
    {
        // Create a read request for the Server CurrentTime node
        $readRequest = new ReadRequest([
            'max_age' => 0,
            'nodes_to_read' => [
                new ReadValueId([
                    'node_id' => 'i=2258', // Server.ServerStatus.CurrentTime
                    'attribute_id' => 13    // Value attribute
                ])
            ],
            'request_header' => new RequestHeader([
                'request_handle' => 1,
                'timestamp' => new \DateTime(),
                'timeout_hint' => 60000
            ])
        ]);

        // Execute the read operation
        $response = $this->api->read($readRequest);

        // Verify response structure
        $this->assertNotNull($response, 'Response should not be null');
        $this->assertNotNull($response->getResponseHeader(), 'Response should have a header');

        // Check for service-level errors
        $serviceResult = $response->getResponseHeader()->getServiceResult();
        if ($serviceResult && $serviceResult->getCode() !== null && $serviceResult->getCode() !== 0) {
            $this->fail('Read operation failed with error code: ' . $serviceResult->getCode());
        }

        // Verify we got results
        $this->assertNotNull($response->getResults(), 'Response should contain results');
        $this->assertNotEmpty($response->getResults(), 'Results should not be empty');

        // Check the first result
        $result = $response->getResults()[0];
        $this->assertNotNull($result, 'First result should not be null');

        // Verify status code is Good (0)
        if ($result->getStatusCode()) {
            $this->assertEquals(0, $result->getStatusCode()->getCode(), 'Status code should be Good (0)');
        }

        // Verify we got a value
        $this->assertNotNull($result->getValue(), 'Result should contain a value');
    }

    /**
     * Example: Browsing the address space
     *
     * Demonstrates how to browse the OPC UA address space starting from the root node.
     * Node i=84 is the root folder of the OPC UA address space.
     *
     * @group live
     */
    public function testBrowseAddressSpace()
    {
        // Create a browse request for the root node
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

        // Execute the browse operation
        $response = $this->api->browse($browseRequest);

        // Verify response structure
        $this->assertNotNull($response, 'Response should not be null');
        $this->assertNotNull($response->getResponseHeader(), 'Response should have a header');

        // Check for service-level errors
        $serviceResult = $response->getResponseHeader()->getServiceResult();
        if ($serviceResult && $serviceResult->getCode() !== null && $serviceResult->getCode() !== 0) {
            $this->fail('Browse operation failed with error code: ' . $serviceResult->getCode());
        }

        // Verify we got results
        $this->assertNotNull($response->getResults(), 'Response should contain results');
        $this->assertNotEmpty($response->getResults(), 'Results should not be empty');

        // Check the first result
        $result = $response->getResults()[0];
        $this->assertNotNull($result, 'First result should not be null');
        $this->assertNotNull($result->getReferences(), 'Result should contain references');
        $this->assertNotEmpty($result->getReferences(), 'References should not be empty');

        // The root node should contain standard OPC UA folders
        $references = $result->getReferences();
        $this->assertCount(3, $references, 'Root should have 3 child nodes (Types, Objects, Views)');

        // Verify the standard folder names
        $nodeNames = [];
        foreach ($references as $reference) {
            if ($reference->getDisplayName() && $reference->getDisplayName()->getText()) {
                $nodeNames[] = $reference->getDisplayName()->getText();
            }
        }

        $this->assertContains('Types', $nodeNames, 'Should contain Types folder');
        $this->assertContains('Objects', $nodeNames, 'Should contain Objects folder');
        $this->assertContains('Views', $nodeNames, 'Should contain Views folder');
    }

    /**
     * Example: Reading multiple node values
     *
     * Demonstrates how to read multiple node values in a single request.
     * This is more efficient than making separate requests for each node.
     *
     * @group live
     */
    public function testReadMultipleNodes()
    {
        // Create a read request for multiple nodes
        $readRequest = new ReadRequest([
            'max_age' => 0,
            'nodes_to_read' => [
                new ReadValueId([
                    'node_id' => 'i=2258',     // Server.ServerStatus.CurrentTime
                    'attribute_id' => 13        // Value attribute
                ]),
                new ReadValueId([
                    'node_id' => 'i=2259',     // Server.ServerStatus.State
                    'attribute_id' => 13        // Value attribute
                ])
            ],
            'request_header' => new RequestHeader([
                'request_handle' => 1,
                'timestamp' => new \DateTime(),
                'timeout_hint' => 60000
            ])
        ]);

        // Execute the read operation
        $response = $this->api->read($readRequest);

        // Verify response structure
        $this->assertNotNull($response, 'Response should not be null');

        // Check for service-level errors
        $serviceResult = $response->getResponseHeader()->getServiceResult();
        if ($serviceResult && $serviceResult->getCode() !== null && $serviceResult->getCode() !== 0) {
            $this->fail('Read operation failed with error code: ' . $serviceResult->getCode());
        }

        // Verify we got results for both nodes
        $this->assertNotNull($response->getResults(), 'Response should contain results');
        $this->assertCount(2, $response->getResults(), 'Should have results for both nodes');

        // Verify both results have values
        foreach ($response->getResults() as $index => $result) {
            $this->assertNotNull($result, "Result {$index} should not be null");
            $this->assertNotNull($result->getValue(), "Result {$index} should have a value");
        }
    }

    /**
     * Example: Browsing starter kit measurements
     *
     * Demonstrates browsing a specific node with namespace URI and verifying
     * expected child nodes (Temperature and Pressure) are present.
     *
     * @group live
     */
    public function testBrowseStarterKitMeasurements()
    {
        // Create a browse request for the starter kit measurements node
        $browseRequest = new BrowseRequest([
            'requested_max_references_per_node' => 100,
            'nodes_to_browse' => [
                new BrowseDescription([
                    'node_id' => 'nsu=urn:opcfoundation.org:2024-10:starterkit:measurements;s=Measurements',
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

        // Execute the browse operation
        $response = $this->api->browse($browseRequest);

        // Verify response structure
        $this->assertNotNull($response, 'Response should not be null');
        $this->assertNotNull($response->getResponseHeader(), 'Response should have a header');

        // Check for service-level errors
        $serviceResult = $response->getResponseHeader()->getServiceResult();
        if ($serviceResult && $serviceResult->getCode() !== null && $serviceResult->getCode() !== 0) {
            $this->fail('Browse operation failed with error code: ' . $serviceResult->getCode());
        }

        // Verify we got results
        $this->assertNotNull($response->getResults(), 'Response should contain results');
        $this->assertNotEmpty($response->getResults(), 'Results should not be empty');

        // Check the first result
        $result = $response->getResults()[0];
        $this->assertNotNull($result, 'First result should not be null');
        $this->assertNotNull($result->getReferences(), 'Result should contain references');
        $this->assertNotEmpty($result->getReferences(), 'References should not be empty');

        // Extract all display names from references
        $displayNames = [];
        foreach ($result->getReferences() as $reference) {
            if ($reference->getDisplayName() && $reference->getDisplayName()->getText()) {
                $displayNames[] = $reference->getDisplayName()->getText();
            }
        }

        // Verify Temperature and Pressure are present
        $this->assertContains('Temperature', $displayNames, 'Should contain Temperature node');
        $this->assertContains('Pressure', $displayNames, 'Should contain Pressure node');
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
        // Clean up any resources if needed
        $this->api = null;
        $this->config = null;
    }
}