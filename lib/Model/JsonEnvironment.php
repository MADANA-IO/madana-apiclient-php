<?php
/**
 * JsonEnvironment
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
 * The version of the OpenAPI document: 0.4.15-master.11
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-beta2
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
 * JsonEnvironment Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class JsonEnvironment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'json_Environment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'packages' => 'string[]',
        'default_run_configuration' => '\OpenAPI\Client\Model\JsonRunConfig',
        'name' => 'string',
        'content' => 'string[]',
        'size' => 'string',
        'ipfs_hash' => 'string',
        'uuid' => 'string',
        'published' => 'bool',
        'roothash' => 'string',
        'root_hash_offset' => 'string',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'packages' => null,
        'default_run_configuration' => null,
        'name' => null,
        'content' => null,
        'size' => null,
        'ipfs_hash' => null,
        'uuid' => null,
        'published' => null,
        'roothash' => null,
        'root_hash_offset' => null,
        'description' => null
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
        'packages' => 'packages',
        'default_run_configuration' => 'defaultRunConfiguration',
        'name' => 'name',
        'content' => 'content',
        'size' => 'size',
        'ipfs_hash' => 'ipfsHash',
        'uuid' => 'uuid',
        'published' => 'published',
        'roothash' => 'roothash',
        'root_hash_offset' => 'rootHashOffset',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'packages' => 'setPackages',
        'default_run_configuration' => 'setDefaultRunConfiguration',
        'name' => 'setName',
        'content' => 'setContent',
        'size' => 'setSize',
        'ipfs_hash' => 'setIpfsHash',
        'uuid' => 'setUuid',
        'published' => 'setPublished',
        'roothash' => 'setRoothash',
        'root_hash_offset' => 'setRootHashOffset',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'packages' => 'getPackages',
        'default_run_configuration' => 'getDefaultRunConfiguration',
        'name' => 'getName',
        'content' => 'getContent',
        'size' => 'getSize',
        'ipfs_hash' => 'getIpfsHash',
        'uuid' => 'getUuid',
        'published' => 'getPublished',
        'roothash' => 'getRoothash',
        'root_hash_offset' => 'getRootHashOffset',
        'description' => 'getDescription'
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
        $this->container['packages'] = isset($data['packages']) ? $data['packages'] : null;
        $this->container['default_run_configuration'] = isset($data['default_run_configuration']) ? $data['default_run_configuration'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['ipfs_hash'] = isset($data['ipfs_hash']) ? $data['ipfs_hash'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['published'] = isset($data['published']) ? $data['published'] : null;
        $this->container['roothash'] = isset($data['roothash']) ? $data['roothash'] : null;
        $this->container['root_hash_offset'] = isset($data['root_hash_offset']) ? $data['root_hash_offset'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
     * Gets packages
     *
     * @return string[]|null
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param string[]|null $packages 
     *
     * @return $this
     */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;

        return $this;
    }

    /**
     * Gets default_run_configuration
     *
     * @return \OpenAPI\Client\Model\JsonRunConfig|null
     */
    public function getDefaultRunConfiguration()
    {
        return $this->container['default_run_configuration'];
    }

    /**
     * Sets default_run_configuration
     *
     * @param \OpenAPI\Client\Model\JsonRunConfig|null $default_run_configuration default_run_configuration
     *
     * @return $this
     */
    public function setDefaultRunConfiguration($default_run_configuration)
    {
        $this->container['default_run_configuration'] = $default_run_configuration;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string[]|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string[]|null $content 
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string|null $size 
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets ipfs_hash
     *
     * @return string|null
     */
    public function getIpfsHash()
    {
        return $this->container['ipfs_hash'];
    }

    /**
     * Sets ipfs_hash
     *
     * @param string|null $ipfs_hash 
     *
     * @return $this
     */
    public function setIpfsHash($ipfs_hash)
    {
        $this->container['ipfs_hash'] = $ipfs_hash;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid 
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets published
     *
     * @return bool|null
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     *
     * @param bool|null $published 
     *
     * @return $this
     */
    public function setPublished($published)
    {
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets roothash
     *
     * @return string|null
     */
    public function getRoothash()
    {
        return $this->container['roothash'];
    }

    /**
     * Sets roothash
     *
     * @param string|null $roothash 
     *
     * @return $this
     */
    public function setRoothash($roothash)
    {
        $this->container['roothash'] = $roothash;

        return $this;
    }

    /**
     * Gets root_hash_offset
     *
     * @return string|null
     */
    public function getRootHashOffset()
    {
        return $this->container['root_hash_offset'];
    }

    /**
     * Sets root_hash_offset
     *
     * @param string|null $root_hash_offset 
     *
     * @return $this
     */
    public function setRootHashOffset($root_hash_offset)
    {
        $this->container['root_hash_offset'] = $root_hash_offset;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description 
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


