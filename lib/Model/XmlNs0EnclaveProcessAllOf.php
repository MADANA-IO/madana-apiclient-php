<?php
/**
 * XmlNs0EnclaveProcessAllOf
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
 * The version of the OpenAPI document: 0.5.0-master.30
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
 * XmlNs0EnclaveProcessAllOf Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class XmlNs0EnclaveProcessAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'xml_ns0_enclaveProcess_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attestation_server' => 'string',
        'console_output' => 'string',
        'enclave_ident' => 'string',
        'enclave_inputstream' => '\OpenAPI\Client\Model\XmlNs0InputStream',
        'ending_time' => 'string',
        'environment' => '\OpenAPI\Client\Model\XmlNs0Environment',
        'internal_attesation_server' => 'string',
        'internal_ident' => 'string',
        'internal_remote_control_server' => 'string',
        'internal_wireguard_server' => 'string',
        'kubernetes_enclave' => '\OpenAPI\Client\Model\XmlNs0KubernetesEnclave',
        'port_mapping' => 'object',
        'ports' => '\OpenAPI\Client\Model\XmlNs0EnclavePort[]',
        'process' => '\OpenAPI\Client\Model\XmlNs0Process',
        'public_ident' => 'string',
        'remote_control_server' => 'string',
        'signer_ident' => 'string',
        'startup_cmd' => 'string',
        'startup_time' => 'string',
        'status' => 'string',
        'wg_interface' => '\OpenAPI\Client\Model\XmlNs0WireguardInterface',
        'wireguard_public_key' => 'string',
        'wireguard_server' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attestation_server' => null,
        'console_output' => null,
        'enclave_ident' => null,
        'enclave_inputstream' => null,
        'ending_time' => null,
        'environment' => null,
        'internal_attesation_server' => null,
        'internal_ident' => null,
        'internal_remote_control_server' => null,
        'internal_wireguard_server' => null,
        'kubernetes_enclave' => null,
        'port_mapping' => null,
        'ports' => null,
        'process' => null,
        'public_ident' => null,
        'remote_control_server' => null,
        'signer_ident' => null,
        'startup_cmd' => null,
        'startup_time' => null,
        'status' => null,
        'wg_interface' => null,
        'wireguard_public_key' => null,
        'wireguard_server' => null
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
        'attestation_server' => 'attestationServer',
        'console_output' => 'consoleOutput',
        'enclave_ident' => 'enclaveIdent',
        'enclave_inputstream' => 'enclaveInputstream',
        'ending_time' => 'endingTime',
        'environment' => 'environment',
        'internal_attesation_server' => 'internalAttesationServer',
        'internal_ident' => 'internalIdent',
        'internal_remote_control_server' => 'internalRemoteControlServer',
        'internal_wireguard_server' => 'internalWireguardServer',
        'kubernetes_enclave' => 'kubernetesEnclave',
        'port_mapping' => 'portMapping',
        'ports' => 'ports',
        'process' => 'process',
        'public_ident' => 'publicIdent',
        'remote_control_server' => 'remoteControlServer',
        'signer_ident' => 'signerIdent',
        'startup_cmd' => 'startupCMD',
        'startup_time' => 'startupTime',
        'status' => 'status',
        'wg_interface' => 'wgInterface',
        'wireguard_public_key' => 'wireguardPublicKey',
        'wireguard_server' => 'wireguardServer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attestation_server' => 'setAttestationServer',
        'console_output' => 'setConsoleOutput',
        'enclave_ident' => 'setEnclaveIdent',
        'enclave_inputstream' => 'setEnclaveInputstream',
        'ending_time' => 'setEndingTime',
        'environment' => 'setEnvironment',
        'internal_attesation_server' => 'setInternalAttesationServer',
        'internal_ident' => 'setInternalIdent',
        'internal_remote_control_server' => 'setInternalRemoteControlServer',
        'internal_wireguard_server' => 'setInternalWireguardServer',
        'kubernetes_enclave' => 'setKubernetesEnclave',
        'port_mapping' => 'setPortMapping',
        'ports' => 'setPorts',
        'process' => 'setProcess',
        'public_ident' => 'setPublicIdent',
        'remote_control_server' => 'setRemoteControlServer',
        'signer_ident' => 'setSignerIdent',
        'startup_cmd' => 'setStartupCmd',
        'startup_time' => 'setStartupTime',
        'status' => 'setStatus',
        'wg_interface' => 'setWgInterface',
        'wireguard_public_key' => 'setWireguardPublicKey',
        'wireguard_server' => 'setWireguardServer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attestation_server' => 'getAttestationServer',
        'console_output' => 'getConsoleOutput',
        'enclave_ident' => 'getEnclaveIdent',
        'enclave_inputstream' => 'getEnclaveInputstream',
        'ending_time' => 'getEndingTime',
        'environment' => 'getEnvironment',
        'internal_attesation_server' => 'getInternalAttesationServer',
        'internal_ident' => 'getInternalIdent',
        'internal_remote_control_server' => 'getInternalRemoteControlServer',
        'internal_wireguard_server' => 'getInternalWireguardServer',
        'kubernetes_enclave' => 'getKubernetesEnclave',
        'port_mapping' => 'getPortMapping',
        'ports' => 'getPorts',
        'process' => 'getProcess',
        'public_ident' => 'getPublicIdent',
        'remote_control_server' => 'getRemoteControlServer',
        'signer_ident' => 'getSignerIdent',
        'startup_cmd' => 'getStartupCmd',
        'startup_time' => 'getStartupTime',
        'status' => 'getStatus',
        'wg_interface' => 'getWgInterface',
        'wireguard_public_key' => 'getWireguardPublicKey',
        'wireguard_server' => 'getWireguardServer'
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
        $this->container['attestation_server'] = $data['attestation_server'] ?? null;
        $this->container['console_output'] = $data['console_output'] ?? null;
        $this->container['enclave_ident'] = $data['enclave_ident'] ?? null;
        $this->container['enclave_inputstream'] = $data['enclave_inputstream'] ?? null;
        $this->container['ending_time'] = $data['ending_time'] ?? null;
        $this->container['environment'] = $data['environment'] ?? null;
        $this->container['internal_attesation_server'] = $data['internal_attesation_server'] ?? null;
        $this->container['internal_ident'] = $data['internal_ident'] ?? null;
        $this->container['internal_remote_control_server'] = $data['internal_remote_control_server'] ?? null;
        $this->container['internal_wireguard_server'] = $data['internal_wireguard_server'] ?? null;
        $this->container['kubernetes_enclave'] = $data['kubernetes_enclave'] ?? null;
        $this->container['port_mapping'] = $data['port_mapping'] ?? null;
        $this->container['ports'] = $data['ports'] ?? null;
        $this->container['process'] = $data['process'] ?? null;
        $this->container['public_ident'] = $data['public_ident'] ?? null;
        $this->container['remote_control_server'] = $data['remote_control_server'] ?? null;
        $this->container['signer_ident'] = $data['signer_ident'] ?? null;
        $this->container['startup_cmd'] = $data['startup_cmd'] ?? null;
        $this->container['startup_time'] = $data['startup_time'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['wg_interface'] = $data['wg_interface'] ?? null;
        $this->container['wireguard_public_key'] = $data['wireguard_public_key'] ?? null;
        $this->container['wireguard_server'] = $data['wireguard_server'] ?? null;
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
     * Gets enclave_inputstream
     *
     * @return \OpenAPI\Client\Model\XmlNs0InputStream|null
     */
    public function getEnclaveInputstream()
    {
        return $this->container['enclave_inputstream'];
    }

    /**
     * Sets enclave_inputstream
     *
     * @param \OpenAPI\Client\Model\XmlNs0InputStream|null $enclave_inputstream enclave_inputstream
     *
     * @return self
     */
    public function setEnclaveInputstream($enclave_inputstream)
    {
        $this->container['enclave_inputstream'] = $enclave_inputstream;

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
     * Gets environment
     *
     * @return \OpenAPI\Client\Model\XmlNs0Environment|null
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param \OpenAPI\Client\Model\XmlNs0Environment|null $environment environment
     *
     * @return self
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

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
     * Gets kubernetes_enclave
     *
     * @return \OpenAPI\Client\Model\XmlNs0KubernetesEnclave|null
     */
    public function getKubernetesEnclave()
    {
        return $this->container['kubernetes_enclave'];
    }

    /**
     * Sets kubernetes_enclave
     *
     * @param \OpenAPI\Client\Model\XmlNs0KubernetesEnclave|null $kubernetes_enclave kubernetes_enclave
     *
     * @return self
     */
    public function setKubernetesEnclave($kubernetes_enclave)
    {
        $this->container['kubernetes_enclave'] = $kubernetes_enclave;

        return $this;
    }

    /**
     * Gets port_mapping
     *
     * @return object|null
     */
    public function getPortMapping()
    {
        return $this->container['port_mapping'];
    }

    /**
     * Sets port_mapping
     *
     * @param object|null $port_mapping 
     *
     * @return self
     */
    public function setPortMapping($port_mapping)
    {
        $this->container['port_mapping'] = $port_mapping;

        return $this;
    }

    /**
     * Gets ports
     *
     * @return \OpenAPI\Client\Model\XmlNs0EnclavePort[]|null
     */
    public function getPorts()
    {
        return $this->container['ports'];
    }

    /**
     * Sets ports
     *
     * @param \OpenAPI\Client\Model\XmlNs0EnclavePort[]|null $ports 
     *
     * @return self
     */
    public function setPorts($ports)
    {
        $this->container['ports'] = $ports;

        return $this;
    }

    /**
     * Gets process
     *
     * @return \OpenAPI\Client\Model\XmlNs0Process|null
     */
    public function getProcess()
    {
        return $this->container['process'];
    }

    /**
     * Sets process
     *
     * @param \OpenAPI\Client\Model\XmlNs0Process|null $process process
     *
     * @return self
     */
    public function setProcess($process)
    {
        $this->container['process'] = $process;

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
     * Gets wg_interface
     *
     * @return \OpenAPI\Client\Model\XmlNs0WireguardInterface|null
     */
    public function getWgInterface()
    {
        return $this->container['wg_interface'];
    }

    /**
     * Sets wg_interface
     *
     * @param \OpenAPI\Client\Model\XmlNs0WireguardInterface|null $wg_interface wg_interface
     *
     * @return self
     */
    public function setWgInterface($wg_interface)
    {
        $this->container['wg_interface'] = $wg_interface;

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


