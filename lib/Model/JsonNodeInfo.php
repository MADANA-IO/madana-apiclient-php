<?php
/**
 * JsonNodeInfo
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
 * The version of the OpenAPI document: 0.5.0-master.47
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
 * JsonNodeInfo Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class JsonNodeInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'json_NodeInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'memory' => 'string',
        'cpu_frequency' => 'string',
        'connection_url' => 'string',
        'cpu_physical_cores' => 'int',
        'cpu_logical_count' => 'int',
        'ipfs_info' => '\OpenAPI\Client\Model\JsonIPFSSystemInfo',
        'hardware_baseboard' => 'string',
        'status' => 'string',
        'owner' => 'string',
        'cpu_model' => 'string',
        'operating_system_uptime' => 'float',
        'processors' => 'string[]',
        'operating_system' => 'string',
        'cpu_family' => 'string',
        'public_key' => 'string',
        'sgx_info' => '\OpenAPI\Client\Model\JsonSGXInfo',
        'hardware_firmware' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'memory' => null,
        'cpu_frequency' => null,
        'connection_url' => null,
        'cpu_physical_cores' => 'int32',
        'cpu_logical_count' => 'int32',
        'ipfs_info' => null,
        'hardware_baseboard' => null,
        'status' => null,
        'owner' => null,
        'cpu_model' => null,
        'operating_system_uptime' => null,
        'processors' => null,
        'operating_system' => null,
        'cpu_family' => null,
        'public_key' => null,
        'sgx_info' => null,
        'hardware_firmware' => null
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
        'memory' => 'memory',
        'cpu_frequency' => 'cpuFrequency',
        'connection_url' => 'connectionURL',
        'cpu_physical_cores' => 'cpuPhysicalCores',
        'cpu_logical_count' => 'cpuLogicalCount',
        'ipfs_info' => 'ipfsInfo',
        'hardware_baseboard' => 'hardwareBaseboard',
        'status' => 'status',
        'owner' => 'owner',
        'cpu_model' => 'cpuModel',
        'operating_system_uptime' => 'operatingSystemUptime',
        'processors' => 'processors',
        'operating_system' => 'operatingSystem',
        'cpu_family' => 'cpuFamily',
        'public_key' => 'publicKey',
        'sgx_info' => 'sgxInfo',
        'hardware_firmware' => 'hardwareFirmware'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'memory' => 'setMemory',
        'cpu_frequency' => 'setCpuFrequency',
        'connection_url' => 'setConnectionUrl',
        'cpu_physical_cores' => 'setCpuPhysicalCores',
        'cpu_logical_count' => 'setCpuLogicalCount',
        'ipfs_info' => 'setIpfsInfo',
        'hardware_baseboard' => 'setHardwareBaseboard',
        'status' => 'setStatus',
        'owner' => 'setOwner',
        'cpu_model' => 'setCpuModel',
        'operating_system_uptime' => 'setOperatingSystemUptime',
        'processors' => 'setProcessors',
        'operating_system' => 'setOperatingSystem',
        'cpu_family' => 'setCpuFamily',
        'public_key' => 'setPublicKey',
        'sgx_info' => 'setSgxInfo',
        'hardware_firmware' => 'setHardwareFirmware'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'memory' => 'getMemory',
        'cpu_frequency' => 'getCpuFrequency',
        'connection_url' => 'getConnectionUrl',
        'cpu_physical_cores' => 'getCpuPhysicalCores',
        'cpu_logical_count' => 'getCpuLogicalCount',
        'ipfs_info' => 'getIpfsInfo',
        'hardware_baseboard' => 'getHardwareBaseboard',
        'status' => 'getStatus',
        'owner' => 'getOwner',
        'cpu_model' => 'getCpuModel',
        'operating_system_uptime' => 'getOperatingSystemUptime',
        'processors' => 'getProcessors',
        'operating_system' => 'getOperatingSystem',
        'cpu_family' => 'getCpuFamily',
        'public_key' => 'getPublicKey',
        'sgx_info' => 'getSgxInfo',
        'hardware_firmware' => 'getHardwareFirmware'
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
        $this->container['memory'] = $data['memory'] ?? null;
        $this->container['cpu_frequency'] = $data['cpu_frequency'] ?? null;
        $this->container['connection_url'] = $data['connection_url'] ?? null;
        $this->container['cpu_physical_cores'] = $data['cpu_physical_cores'] ?? null;
        $this->container['cpu_logical_count'] = $data['cpu_logical_count'] ?? null;
        $this->container['ipfs_info'] = $data['ipfs_info'] ?? null;
        $this->container['hardware_baseboard'] = $data['hardware_baseboard'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['owner'] = $data['owner'] ?? null;
        $this->container['cpu_model'] = $data['cpu_model'] ?? null;
        $this->container['operating_system_uptime'] = $data['operating_system_uptime'] ?? null;
        $this->container['processors'] = $data['processors'] ?? null;
        $this->container['operating_system'] = $data['operating_system'] ?? null;
        $this->container['cpu_family'] = $data['cpu_family'] ?? null;
        $this->container['public_key'] = $data['public_key'] ?? null;
        $this->container['sgx_info'] = $data['sgx_info'] ?? null;
        $this->container['hardware_firmware'] = $data['hardware_firmware'] ?? null;
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
     * Gets memory
     *
     * @return string|null
     */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
     * Sets memory
     *
     * @param string|null $memory 
     *
     * @return self
     */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;

        return $this;
    }

    /**
     * Gets cpu_frequency
     *
     * @return string|null
     */
    public function getCpuFrequency()
    {
        return $this->container['cpu_frequency'];
    }

    /**
     * Sets cpu_frequency
     *
     * @param string|null $cpu_frequency 
     *
     * @return self
     */
    public function setCpuFrequency($cpu_frequency)
    {
        $this->container['cpu_frequency'] = $cpu_frequency;

        return $this;
    }

    /**
     * Gets connection_url
     *
     * @return string|null
     */
    public function getConnectionUrl()
    {
        return $this->container['connection_url'];
    }

    /**
     * Sets connection_url
     *
     * @param string|null $connection_url 
     *
     * @return self
     */
    public function setConnectionUrl($connection_url)
    {
        $this->container['connection_url'] = $connection_url;

        return $this;
    }

    /**
     * Gets cpu_physical_cores
     *
     * @return int|null
     */
    public function getCpuPhysicalCores()
    {
        return $this->container['cpu_physical_cores'];
    }

    /**
     * Sets cpu_physical_cores
     *
     * @param int|null $cpu_physical_cores 
     *
     * @return self
     */
    public function setCpuPhysicalCores($cpu_physical_cores)
    {
        $this->container['cpu_physical_cores'] = $cpu_physical_cores;

        return $this;
    }

    /**
     * Gets cpu_logical_count
     *
     * @return int|null
     */
    public function getCpuLogicalCount()
    {
        return $this->container['cpu_logical_count'];
    }

    /**
     * Sets cpu_logical_count
     *
     * @param int|null $cpu_logical_count 
     *
     * @return self
     */
    public function setCpuLogicalCount($cpu_logical_count)
    {
        $this->container['cpu_logical_count'] = $cpu_logical_count;

        return $this;
    }

    /**
     * Gets ipfs_info
     *
     * @return \OpenAPI\Client\Model\JsonIPFSSystemInfo|null
     */
    public function getIpfsInfo()
    {
        return $this->container['ipfs_info'];
    }

    /**
     * Sets ipfs_info
     *
     * @param \OpenAPI\Client\Model\JsonIPFSSystemInfo|null $ipfs_info ipfs_info
     *
     * @return self
     */
    public function setIpfsInfo($ipfs_info)
    {
        $this->container['ipfs_info'] = $ipfs_info;

        return $this;
    }

    /**
     * Gets hardware_baseboard
     *
     * @return string|null
     */
    public function getHardwareBaseboard()
    {
        return $this->container['hardware_baseboard'];
    }

    /**
     * Sets hardware_baseboard
     *
     * @param string|null $hardware_baseboard 
     *
     * @return self
     */
    public function setHardwareBaseboard($hardware_baseboard)
    {
        $this->container['hardware_baseboard'] = $hardware_baseboard;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status 
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return string|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param string|null $owner 
     *
     * @return self
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets cpu_model
     *
     * @return string|null
     */
    public function getCpuModel()
    {
        return $this->container['cpu_model'];
    }

    /**
     * Sets cpu_model
     *
     * @param string|null $cpu_model 
     *
     * @return self
     */
    public function setCpuModel($cpu_model)
    {
        $this->container['cpu_model'] = $cpu_model;

        return $this;
    }

    /**
     * Gets operating_system_uptime
     *
     * @return float|null
     */
    public function getOperatingSystemUptime()
    {
        return $this->container['operating_system_uptime'];
    }

    /**
     * Sets operating_system_uptime
     *
     * @param float|null $operating_system_uptime 
     *
     * @return self
     */
    public function setOperatingSystemUptime($operating_system_uptime)
    {
        $this->container['operating_system_uptime'] = $operating_system_uptime;

        return $this;
    }

    /**
     * Gets processors
     *
     * @return string[]|null
     */
    public function getProcessors()
    {
        return $this->container['processors'];
    }

    /**
     * Sets processors
     *
     * @param string[]|null $processors 
     *
     * @return self
     */
    public function setProcessors($processors)
    {
        $this->container['processors'] = $processors;

        return $this;
    }

    /**
     * Gets operating_system
     *
     * @return string|null
     */
    public function getOperatingSystem()
    {
        return $this->container['operating_system'];
    }

    /**
     * Sets operating_system
     *
     * @param string|null $operating_system 
     *
     * @return self
     */
    public function setOperatingSystem($operating_system)
    {
        $this->container['operating_system'] = $operating_system;

        return $this;
    }

    /**
     * Gets cpu_family
     *
     * @return string|null
     */
    public function getCpuFamily()
    {
        return $this->container['cpu_family'];
    }

    /**
     * Sets cpu_family
     *
     * @param string|null $cpu_family 
     *
     * @return self
     */
    public function setCpuFamily($cpu_family)
    {
        $this->container['cpu_family'] = $cpu_family;

        return $this;
    }

    /**
     * Gets public_key
     *
     * @return string|null
     */
    public function getPublicKey()
    {
        return $this->container['public_key'];
    }

    /**
     * Sets public_key
     *
     * @param string|null $public_key 
     *
     * @return self
     */
    public function setPublicKey($public_key)
    {
        $this->container['public_key'] = $public_key;

        return $this;
    }

    /**
     * Gets sgx_info
     *
     * @return \OpenAPI\Client\Model\JsonSGXInfo|null
     */
    public function getSgxInfo()
    {
        return $this->container['sgx_info'];
    }

    /**
     * Sets sgx_info
     *
     * @param \OpenAPI\Client\Model\JsonSGXInfo|null $sgx_info sgx_info
     *
     * @return self
     */
    public function setSgxInfo($sgx_info)
    {
        $this->container['sgx_info'] = $sgx_info;

        return $this;
    }

    /**
     * Gets hardware_firmware
     *
     * @return string|null
     */
    public function getHardwareFirmware()
    {
        return $this->container['hardware_firmware'];
    }

    /**
     * Sets hardware_firmware
     *
     * @param string|null $hardware_firmware 
     *
     * @return self
     */
    public function setHardwareFirmware($hardware_firmware)
    {
        $this->container['hardware_firmware'] = $hardware_firmware;

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


