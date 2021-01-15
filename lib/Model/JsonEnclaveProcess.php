<?php
/**
 * JsonEnclaveProcess
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
 * The version of the OpenAPI document: 0.5.0-master.35
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
 * JsonEnclaveProcess Class Doc Comment
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
class JsonEnclaveProcess implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'json_EnclaveProcess';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'wg_interface' => '\OpenAPI\Client\Model\JsonWireguardInterface',
        'environment' => '\OpenAPI\Client\Model\JsonEnvironment',
        'startup_cmd' => 'string',
        'internal_remote_control_server' => 'string',
        'console_output' => 'string',
        'ending_time' => 'string',
        'startup_time' => 'string',
        'remote_control_server' => 'string',
        'ports' => '\OpenAPI\Client\Model\JsonEnclavePort[]',
        'kubernetes_enclave' => '\OpenAPI\Client\Model\JsonKubernetesEnclave',
        'wireguard_server' => 'string',
        'internal_wireguard_server' => 'string',
        'status' => 'string',
        'wireguard_public_key' => 'string',
        'enclave_ident' => 'string',
        'internal_ident' => 'string',
        'public_ident' => 'string',
        'process' => '\OpenAPI\Client\Model\JsonProcess',
        'internal_attesation_server' => 'string',
        'signer_ident' => 'string',
        'enclave_inputstream' => 'object',
        'attestation_server' => 'string',
        'port_mapping' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'wg_interface' => null,
        'environment' => null,
        'startup_cmd' => null,
        'internal_remote_control_server' => null,
        'console_output' => null,
        'ending_time' => null,
        'startup_time' => null,
        'remote_control_server' => null,
        'ports' => null,
        'kubernetes_enclave' => null,
        'wireguard_server' => null,
        'internal_wireguard_server' => null,
        'status' => null,
        'wireguard_public_key' => null,
        'enclave_ident' => null,
        'internal_ident' => null,
        'public_ident' => null,
        'process' => null,
        'internal_attesation_server' => null,
        'signer_ident' => null,
        'enclave_inputstream' => null,
        'attestation_server' => null,
        'port_mapping' => null
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
        'wg_interface' => 'wgInterface',
        'environment' => 'environment',
        'startup_cmd' => 'startupCMD',
        'internal_remote_control_server' => 'internalRemoteControlServer',
        'console_output' => 'consoleOutput',
        'ending_time' => 'endingTime',
        'startup_time' => 'startupTime',
        'remote_control_server' => 'remoteControlServer',
        'ports' => 'ports',
        'kubernetes_enclave' => 'kubernetesEnclave',
        'wireguard_server' => 'wireguardServer',
        'internal_wireguard_server' => 'internalWireguardServer',
        'status' => 'status',
        'wireguard_public_key' => 'wireguardPublicKey',
        'enclave_ident' => 'enclaveIdent',
        'internal_ident' => 'internalIdent',
        'public_ident' => 'publicIdent',
        'process' => 'process',
        'internal_attesation_server' => 'internalAttesationServer',
        'signer_ident' => 'signerIdent',
        'enclave_inputstream' => 'enclaveInputstream',
        'attestation_server' => 'attestationServer',
        'port_mapping' => 'portMapping'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'wg_interface' => 'setWgInterface',
        'environment' => 'setEnvironment',
        'startup_cmd' => 'setStartupCmd',
        'internal_remote_control_server' => 'setInternalRemoteControlServer',
        'console_output' => 'setConsoleOutput',
        'ending_time' => 'setEndingTime',
        'startup_time' => 'setStartupTime',
        'remote_control_server' => 'setRemoteControlServer',
        'ports' => 'setPorts',
        'kubernetes_enclave' => 'setKubernetesEnclave',
        'wireguard_server' => 'setWireguardServer',
        'internal_wireguard_server' => 'setInternalWireguardServer',
        'status' => 'setStatus',
        'wireguard_public_key' => 'setWireguardPublicKey',
        'enclave_ident' => 'setEnclaveIdent',
        'internal_ident' => 'setInternalIdent',
        'public_ident' => 'setPublicIdent',
        'process' => 'setProcess',
        'internal_attesation_server' => 'setInternalAttesationServer',
        'signer_ident' => 'setSignerIdent',
        'enclave_inputstream' => 'setEnclaveInputstream',
        'attestation_server' => 'setAttestationServer',
        'port_mapping' => 'setPortMapping'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'wg_interface' => 'getWgInterface',
        'environment' => 'getEnvironment',
        'startup_cmd' => 'getStartupCmd',
        'internal_remote_control_server' => 'getInternalRemoteControlServer',
        'console_output' => 'getConsoleOutput',
        'ending_time' => 'getEndingTime',
        'startup_time' => 'getStartupTime',
        'remote_control_server' => 'getRemoteControlServer',
        'ports' => 'getPorts',
        'kubernetes_enclave' => 'getKubernetesEnclave',
        'wireguard_server' => 'getWireguardServer',
        'internal_wireguard_server' => 'getInternalWireguardServer',
        'status' => 'getStatus',
        'wireguard_public_key' => 'getWireguardPublicKey',
        'enclave_ident' => 'getEnclaveIdent',
        'internal_ident' => 'getInternalIdent',
        'public_ident' => 'getPublicIdent',
        'process' => 'getProcess',
        'internal_attesation_server' => 'getInternalAttesationServer',
        'signer_ident' => 'getSignerIdent',
        'enclave_inputstream' => 'getEnclaveInputstream',
        'attestation_server' => 'getAttestationServer',
        'port_mapping' => 'getPortMapping'
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
        $this->container['wg_interface'] = $data['wg_interface'] ?? null;
        $this->container['environment'] = $data['environment'] ?? null;
        $this->container['startup_cmd'] = $data['startup_cmd'] ?? null;
        $this->container['internal_remote_control_server'] = $data['internal_remote_control_server'] ?? null;
        $this->container['console_output'] = $data['console_output'] ?? null;
        $this->container['ending_time'] = $data['ending_time'] ?? null;
        $this->container['startup_time'] = $data['startup_time'] ?? null;
        $this->container['remote_control_server'] = $data['remote_control_server'] ?? null;
        $this->container['ports'] = $data['ports'] ?? null;
        $this->container['kubernetes_enclave'] = $data['kubernetes_enclave'] ?? null;
        $this->container['wireguard_server'] = $data['wireguard_server'] ?? null;
        $this->container['internal_wireguard_server'] = $data['internal_wireguard_server'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['wireguard_public_key'] = $data['wireguard_public_key'] ?? null;
        $this->container['enclave_ident'] = $data['enclave_ident'] ?? null;
        $this->container['internal_ident'] = $data['internal_ident'] ?? null;
        $this->container['public_ident'] = $data['public_ident'] ?? null;
        $this->container['process'] = $data['process'] ?? null;
        $this->container['internal_attesation_server'] = $data['internal_attesation_server'] ?? null;
        $this->container['signer_ident'] = $data['signer_ident'] ?? null;
        $this->container['enclave_inputstream'] = $data['enclave_inputstream'] ?? null;
        $this->container['attestation_server'] = $data['attestation_server'] ?? null;
        $this->container['port_mapping'] = $data['port_mapping'] ?? null;
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
     * Gets wg_interface
     *
     * @return \OpenAPI\Client\Model\JsonWireguardInterface|null
     */
    public function getWgInterface()
    {
        return $this->container['wg_interface'];
    }

    /**
     * Sets wg_interface
     *
     * @param \OpenAPI\Client\Model\JsonWireguardInterface|null $wg_interface wg_interface
     *
     * @return self
     */
    public function setWgInterface($wg_interface)
    {
        $this->container['wg_interface'] = $wg_interface;

        return $this;
    }

    /**
     * Gets environment
     *
     * @return \OpenAPI\Client\Model\JsonEnvironment|null
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param \OpenAPI\Client\Model\JsonEnvironment|null $environment environment
     *
     * @return self
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Gets startup_cmd
     *
     * @return string|null
     */
    public function getStartupCmd()
    {
        return $this->container['startup_cmd'];
    }

    /**
     * Sets startup_cmd
     *
     * @param string|null $startup_cmd 
     *
     * @return self
     */
    public function setStartupCmd($startup_cmd)
    {
        $this->container['startup_cmd'] = $startup_cmd;

        return $this;
    }

    /**
     * Gets internal_remote_control_server
     *
     * @return string|null
     */
    public function getInternalRemoteControlServer()
    {
        return $this->container['internal_remote_control_server'];
    }

    /**
     * Sets internal_remote_control_server
     *
     * @param string|null $internal_remote_control_server 
     *
     * @return self
     */
    public function setInternalRemoteControlServer($internal_remote_control_server)
    {
        $this->container['internal_remote_control_server'] = $internal_remote_control_server;

        return $this;
    }

    /**
     * Gets console_output
     *
     * @return string|null
     */
    public function getConsoleOutput()
    {
        return $this->container['console_output'];
    }

    /**
     * Sets console_output
     *
     * @param string|null $console_output 
     *
     * @return self
     */
    public function setConsoleOutput($console_output)
    {
        $this->container['console_output'] = $console_output;

        return $this;
    }

    /**
     * Gets ending_time
     *
     * @return string|null
     */
    public function getEndingTime()
    {
        return $this->container['ending_time'];
    }

    /**
     * Sets ending_time
     *
     * @param string|null $ending_time 
     *
     * @return self
     */
    public function setEndingTime($ending_time)
    {
        $this->container['ending_time'] = $ending_time;

        return $this;
    }

    /**
     * Gets startup_time
     *
     * @return string|null
     */
    public function getStartupTime()
    {
        return $this->container['startup_time'];
    }

    /**
     * Sets startup_time
     *
     * @param string|null $startup_time 
     *
     * @return self
     */
    public function setStartupTime($startup_time)
    {
        $this->container['startup_time'] = $startup_time;

        return $this;
    }

    /**
     * Gets remote_control_server
     *
     * @return string|null
     */
    public function getRemoteControlServer()
    {
        return $this->container['remote_control_server'];
    }

    /**
     * Sets remote_control_server
     *
     * @param string|null $remote_control_server 
     *
     * @return self
     */
    public function setRemoteControlServer($remote_control_server)
    {
        $this->container['remote_control_server'] = $remote_control_server;

        return $this;
    }

    /**
     * Gets ports
     *
     * @return \OpenAPI\Client\Model\JsonEnclavePort[]|null
     */
    public function getPorts()
    {
        return $this->container['ports'];
    }

    /**
     * Sets ports
     *
     * @param \OpenAPI\Client\Model\JsonEnclavePort[]|null $ports 
     *
     * @return self
     */
    public function setPorts($ports)
    {
        $this->container['ports'] = $ports;

        return $this;
    }

    /**
     * Gets kubernetes_enclave
     *
     * @return \OpenAPI\Client\Model\JsonKubernetesEnclave|null
     */
    public function getKubernetesEnclave()
    {
        return $this->container['kubernetes_enclave'];
    }

    /**
     * Sets kubernetes_enclave
     *
     * @param \OpenAPI\Client\Model\JsonKubernetesEnclave|null $kubernetes_enclave kubernetes_enclave
     *
     * @return self
     */
    public function setKubernetesEnclave($kubernetes_enclave)
    {
        $this->container['kubernetes_enclave'] = $kubernetes_enclave;

        return $this;
    }

    /**
     * Gets wireguard_server
     *
     * @return string|null
     */
    public function getWireguardServer()
    {
        return $this->container['wireguard_server'];
    }

    /**
     * Sets wireguard_server
     *
     * @param string|null $wireguard_server 
     *
     * @return self
     */
    public function setWireguardServer($wireguard_server)
    {
        $this->container['wireguard_server'] = $wireguard_server;

        return $this;
    }

    /**
     * Gets internal_wireguard_server
     *
     * @return string|null
     */
    public function getInternalWireguardServer()
    {
        return $this->container['internal_wireguard_server'];
    }

    /**
     * Sets internal_wireguard_server
     *
     * @param string|null $internal_wireguard_server 
     *
     * @return self
     */
    public function setInternalWireguardServer($internal_wireguard_server)
    {
        $this->container['internal_wireguard_server'] = $internal_wireguard_server;

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
     * Gets wireguard_public_key
     *
     * @return string|null
     */
    public function getWireguardPublicKey()
    {
        return $this->container['wireguard_public_key'];
    }

    /**
     * Sets wireguard_public_key
     *
     * @param string|null $wireguard_public_key 
     *
     * @return self
     */
    public function setWireguardPublicKey($wireguard_public_key)
    {
        $this->container['wireguard_public_key'] = $wireguard_public_key;

        return $this;
    }

    /**
     * Gets enclave_ident
     *
     * @return string|null
     */
    public function getEnclaveIdent()
    {
        return $this->container['enclave_ident'];
    }

    /**
     * Sets enclave_ident
     *
     * @param string|null $enclave_ident 
     *
     * @return self
     */
    public function setEnclaveIdent($enclave_ident)
    {
        $this->container['enclave_ident'] = $enclave_ident;

        return $this;
    }

    /**
     * Gets internal_ident
     *
     * @return string|null
     */
    public function getInternalIdent()
    {
        return $this->container['internal_ident'];
    }

    /**
     * Sets internal_ident
     *
     * @param string|null $internal_ident 
     *
     * @return self
     */
    public function setInternalIdent($internal_ident)
    {
        $this->container['internal_ident'] = $internal_ident;

        return $this;
    }

    /**
     * Gets public_ident
     *
     * @return string|null
     */
    public function getPublicIdent()
    {
        return $this->container['public_ident'];
    }

    /**
     * Sets public_ident
     *
     * @param string|null $public_ident 
     *
     * @return self
     */
    public function setPublicIdent($public_ident)
    {
        $this->container['public_ident'] = $public_ident;

        return $this;
    }

    /**
     * Gets process
     *
     * @return \OpenAPI\Client\Model\JsonProcess|null
     */
    public function getProcess()
    {
        return $this->container['process'];
    }

    /**
     * Sets process
     *
     * @param \OpenAPI\Client\Model\JsonProcess|null $process process
     *
     * @return self
     */
    public function setProcess($process)
    {
        $this->container['process'] = $process;

        return $this;
    }

    /**
     * Gets internal_attesation_server
     *
     * @return string|null
     */
    public function getInternalAttesationServer()
    {
        return $this->container['internal_attesation_server'];
    }

    /**
     * Sets internal_attesation_server
     *
     * @param string|null $internal_attesation_server 
     *
     * @return self
     */
    public function setInternalAttesationServer($internal_attesation_server)
    {
        $this->container['internal_attesation_server'] = $internal_attesation_server;

        return $this;
    }

    /**
     * Gets signer_ident
     *
     * @return string|null
     */
    public function getSignerIdent()
    {
        return $this->container['signer_ident'];
    }

    /**
     * Sets signer_ident
     *
     * @param string|null $signer_ident 
     *
     * @return self
     */
    public function setSignerIdent($signer_ident)
    {
        $this->container['signer_ident'] = $signer_ident;

        return $this;
    }

    /**
     * Gets enclave_inputstream
     *
     * @return object|null
     */
    public function getEnclaveInputstream()
    {
        return $this->container['enclave_inputstream'];
    }

    /**
     * Sets enclave_inputstream
     *
     * @param object|null $enclave_inputstream 
     *
     * @return self
     */
    public function setEnclaveInputstream($enclave_inputstream)
    {
        $this->container['enclave_inputstream'] = $enclave_inputstream;

        return $this;
    }

    /**
     * Gets attestation_server
     *
     * @return string|null
     */
    public function getAttestationServer()
    {
        return $this->container['attestation_server'];
    }

    /**
     * Sets attestation_server
     *
     * @param string|null $attestation_server 
     *
     * @return self
     */
    public function setAttestationServer($attestation_server)
    {
        $this->container['attestation_server'] = $attestation_server;

        return $this;
    }

    /**
     * Gets port_mapping
     *
     * @return map[string,string]|null
     */
    public function getPortMapping()
    {
        return $this->container['port_mapping'];
    }

    /**
     * Sets port_mapping
     *
     * @param map[string,string]|null $port_mapping 
     *
     * @return self
     */
    public function setPortMapping($port_mapping)
    {
        $this->container['port_mapping'] = $port_mapping;

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


