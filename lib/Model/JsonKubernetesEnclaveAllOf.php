<?php
/**
 * JsonKubernetesEnclaveAllOf
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * madana-api
 *
 * <h1>Using the madana-api</h1>        <p>This documentation contains a Quickstart Guide, relating client functionality and information about the available         endpoints and used datamodels.   </p>       <p> The madana-api and its implementations are still in heavy development. This means that there may be problems in our protocols, or there may be mistakes in our implementations. We take security vulnerabilities very seriously. If you discover a security issue, please bring it to our attention right away! If you find a vulnerability that may affect live deployments -- for example, by exposing a remote execution exploit -- please send your report privately to info@madana.io. Please DO NOT file a public issue. If the issue is a protocol weakness that cannot be immediately exploited or something not yet deployed, just discuss it openly   </p>   <br>   <p> Note: Not all functionality might be acessible without having accquired and api-license token. For more information visit <a href=\"https://www.madana.io\">www.madana.io</a> </p>       <br>
 *
 * The version of the OpenAPI document: 0.0.1-master.3
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * JsonKubernetesEnclaveAllOf Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class JsonKubernetesEnclaveAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'json_KubernetesEnclave_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enclave_deployment_events' => '\OpenAPI\Client\Model\JsonV1EventList',
        'attestation_port' => 'int',
        'debug_info' => 'string',
        'pod_phase' => 'string',
        'is_using_init_container' => 'bool',
        'wireguard_port' => 'int',
        'enclave_pod_events' => '\OpenAPI\Client\Model\JsonV1EventList',
        'enclave_replica_set_events' => '\OpenAPI\Client\Model\JsonV1EventList',
        'remote_control_ip' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enclave_deployment_events' => null,
        'attestation_port' => 'int32',
        'debug_info' => null,
        'pod_phase' => null,
        'is_using_init_container' => null,
        'wireguard_port' => 'int32',
        'enclave_pod_events' => null,
        'enclave_replica_set_events' => null,
        'remote_control_ip' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'enclave_deployment_events' => 'enclaveDeploymentEvents',
        'attestation_port' => 'attestationPort',
        'debug_info' => 'debugInfo',
        'pod_phase' => 'podPhase',
        'is_using_init_container' => 'isUsingInitContainer',
        'wireguard_port' => 'wireguardPort',
        'enclave_pod_events' => 'enclavePodEvents',
        'enclave_replica_set_events' => 'enclaveReplicaSetEvents',
        'remote_control_ip' => 'remoteControlIP'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enclave_deployment_events' => 'setEnclaveDeploymentEvents',
        'attestation_port' => 'setAttestationPort',
        'debug_info' => 'setDebugInfo',
        'pod_phase' => 'setPodPhase',
        'is_using_init_container' => 'setIsUsingInitContainer',
        'wireguard_port' => 'setWireguardPort',
        'enclave_pod_events' => 'setEnclavePodEvents',
        'enclave_replica_set_events' => 'setEnclaveReplicaSetEvents',
        'remote_control_ip' => 'setRemoteControlIp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enclave_deployment_events' => 'getEnclaveDeploymentEvents',
        'attestation_port' => 'getAttestationPort',
        'debug_info' => 'getDebugInfo',
        'pod_phase' => 'getPodPhase',
        'is_using_init_container' => 'getIsUsingInitContainer',
        'wireguard_port' => 'getWireguardPort',
        'enclave_pod_events' => 'getEnclavePodEvents',
        'enclave_replica_set_events' => 'getEnclaveReplicaSetEvents',
        'remote_control_ip' => 'getRemoteControlIp'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['enclave_deployment_events'] = $data['enclave_deployment_events'] ?? null;
        $this->container['attestation_port'] = $data['attestation_port'] ?? null;
        $this->container['debug_info'] = $data['debug_info'] ?? null;
        $this->container['pod_phase'] = $data['pod_phase'] ?? null;
        $this->container['is_using_init_container'] = $data['is_using_init_container'] ?? null;
        $this->container['wireguard_port'] = $data['wireguard_port'] ?? null;
        $this->container['enclave_pod_events'] = $data['enclave_pod_events'] ?? null;
        $this->container['enclave_replica_set_events'] = $data['enclave_replica_set_events'] ?? null;
        $this->container['remote_control_ip'] = $data['remote_control_ip'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets enclave_deployment_events
     *
     * @return \OpenAPI\Client\Model\JsonV1EventList|null
     */
    public function getEnclaveDeploymentEvents()
    {
        return $this->container['enclave_deployment_events'];
    }

    /**
     * Sets enclave_deployment_events
     *
     * @param \OpenAPI\Client\Model\JsonV1EventList|null $enclave_deployment_events enclave_deployment_events
     *
     * @return self
     */
    public function setEnclaveDeploymentEvents($enclave_deployment_events)
    {
        $this->container['enclave_deployment_events'] = $enclave_deployment_events;

        return $this;
    }

    /**
     * Gets attestation_port
     *
     * @return int|null
     */
    public function getAttestationPort()
    {
        return $this->container['attestation_port'];
    }

    /**
     * Sets attestation_port
     *
     * @param int|null $attestation_port 
     *
     * @return self
     */
    public function setAttestationPort($attestation_port)
    {
        $this->container['attestation_port'] = $attestation_port;

        return $this;
    }

    /**
     * Gets debug_info
     *
     * @return string|null
     */
    public function getDebugInfo()
    {
        return $this->container['debug_info'];
    }

    /**
     * Sets debug_info
     *
     * @param string|null $debug_info 
     *
     * @return self
     */
    public function setDebugInfo($debug_info)
    {
        $this->container['debug_info'] = $debug_info;

        return $this;
    }

    /**
     * Gets pod_phase
     *
     * @return string|null
     */
    public function getPodPhase()
    {
        return $this->container['pod_phase'];
    }

    /**
     * Sets pod_phase
     *
     * @param string|null $pod_phase 
     *
     * @return self
     */
    public function setPodPhase($pod_phase)
    {
        $this->container['pod_phase'] = $pod_phase;

        return $this;
    }

    /**
     * Gets is_using_init_container
     *
     * @return bool|null
     */
    public function getIsUsingInitContainer()
    {
        return $this->container['is_using_init_container'];
    }

    /**
     * Sets is_using_init_container
     *
     * @param bool|null $is_using_init_container 
     *
     * @return self
     */
    public function setIsUsingInitContainer($is_using_init_container)
    {
        $this->container['is_using_init_container'] = $is_using_init_container;

        return $this;
    }

    /**
     * Gets wireguard_port
     *
     * @return int|null
     */
    public function getWireguardPort()
    {
        return $this->container['wireguard_port'];
    }

    /**
     * Sets wireguard_port
     *
     * @param int|null $wireguard_port 
     *
     * @return self
     */
    public function setWireguardPort($wireguard_port)
    {
        $this->container['wireguard_port'] = $wireguard_port;

        return $this;
    }

    /**
     * Gets enclave_pod_events
     *
     * @return \OpenAPI\Client\Model\JsonV1EventList|null
     */
    public function getEnclavePodEvents()
    {
        return $this->container['enclave_pod_events'];
    }

    /**
     * Sets enclave_pod_events
     *
     * @param \OpenAPI\Client\Model\JsonV1EventList|null $enclave_pod_events enclave_pod_events
     *
     * @return self
     */
    public function setEnclavePodEvents($enclave_pod_events)
    {
        $this->container['enclave_pod_events'] = $enclave_pod_events;

        return $this;
    }

    /**
     * Gets enclave_replica_set_events
     *
     * @return \OpenAPI\Client\Model\JsonV1EventList|null
     */
    public function getEnclaveReplicaSetEvents()
    {
        return $this->container['enclave_replica_set_events'];
    }

    /**
     * Sets enclave_replica_set_events
     *
     * @param \OpenAPI\Client\Model\JsonV1EventList|null $enclave_replica_set_events enclave_replica_set_events
     *
     * @return self
     */
    public function setEnclaveReplicaSetEvents($enclave_replica_set_events)
    {
        $this->container['enclave_replica_set_events'] = $enclave_replica_set_events;

        return $this;
    }

    /**
     * Gets remote_control_ip
     *
     * @return string|null
     */
    public function getRemoteControlIp()
    {
        return $this->container['remote_control_ip'];
    }

    /**
     * Sets remote_control_ip
     *
     * @param string|null $remote_control_ip 
     *
     * @return self
     */
    public function setRemoteControlIp($remote_control_ip)
    {
        $this->container['remote_control_ip'] = $remote_control_ip;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


