<?php
/**
 * JsonV1ObjectMeta
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
 * The version of the OpenAPI document: 0.5.0-master.26
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
 * JsonV1ObjectMeta Class Doc Comment
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
class JsonV1ObjectMeta implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'json_V1ObjectMeta';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'finalizers' => 'string[]',
        'resource_version' => 'string',
        'generation' => 'float',
        'annotations' => 'map[string,string]',
        'generate_name' => 'string',
        'namespace' => 'string',
        'labels' => 'map[string,string]',
        'uid' => 'string',
        'name' => 'string',
        'owner_references' => '\OpenAPI\Client\Model\JsonV1OwnerReference[]',
        'deletion_grace_period_seconds' => 'float',
        'deletion_timestamp' => 'float',
        'creation_timestamp' => 'float',
        'cluster_name' => 'string',
        'self_link' => 'string',
        'managed_fields' => '\OpenAPI\Client\Model\JsonV1ManagedFieldsEntry[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'finalizers' => null,
        'resource_version' => null,
        'generation' => null,
        'annotations' => null,
        'generate_name' => null,
        'namespace' => null,
        'labels' => null,
        'uid' => null,
        'name' => null,
        'owner_references' => null,
        'deletion_grace_period_seconds' => null,
        'deletion_timestamp' => null,
        'creation_timestamp' => null,
        'cluster_name' => null,
        'self_link' => null,
        'managed_fields' => null
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
        'finalizers' => 'finalizers',
        'resource_version' => 'resourceVersion',
        'generation' => 'generation',
        'annotations' => 'annotations',
        'generate_name' => 'generateName',
        'namespace' => 'namespace',
        'labels' => 'labels',
        'uid' => 'uid',
        'name' => 'name',
        'owner_references' => 'ownerReferences',
        'deletion_grace_period_seconds' => 'deletionGracePeriodSeconds',
        'deletion_timestamp' => 'deletionTimestamp',
        'creation_timestamp' => 'creationTimestamp',
        'cluster_name' => 'clusterName',
        'self_link' => 'selfLink',
        'managed_fields' => 'managedFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'finalizers' => 'setFinalizers',
        'resource_version' => 'setResourceVersion',
        'generation' => 'setGeneration',
        'annotations' => 'setAnnotations',
        'generate_name' => 'setGenerateName',
        'namespace' => 'setNamespace',
        'labels' => 'setLabels',
        'uid' => 'setUid',
        'name' => 'setName',
        'owner_references' => 'setOwnerReferences',
        'deletion_grace_period_seconds' => 'setDeletionGracePeriodSeconds',
        'deletion_timestamp' => 'setDeletionTimestamp',
        'creation_timestamp' => 'setCreationTimestamp',
        'cluster_name' => 'setClusterName',
        'self_link' => 'setSelfLink',
        'managed_fields' => 'setManagedFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'finalizers' => 'getFinalizers',
        'resource_version' => 'getResourceVersion',
        'generation' => 'getGeneration',
        'annotations' => 'getAnnotations',
        'generate_name' => 'getGenerateName',
        'namespace' => 'getNamespace',
        'labels' => 'getLabels',
        'uid' => 'getUid',
        'name' => 'getName',
        'owner_references' => 'getOwnerReferences',
        'deletion_grace_period_seconds' => 'getDeletionGracePeriodSeconds',
        'deletion_timestamp' => 'getDeletionTimestamp',
        'creation_timestamp' => 'getCreationTimestamp',
        'cluster_name' => 'getClusterName',
        'self_link' => 'getSelfLink',
        'managed_fields' => 'getManagedFields'
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
        $this->container['finalizers'] = $data['finalizers'] ?? null;
        $this->container['resource_version'] = $data['resource_version'] ?? null;
        $this->container['generation'] = $data['generation'] ?? null;
        $this->container['annotations'] = $data['annotations'] ?? null;
        $this->container['generate_name'] = $data['generate_name'] ?? null;
        $this->container['namespace'] = $data['namespace'] ?? null;
        $this->container['labels'] = $data['labels'] ?? null;
        $this->container['uid'] = $data['uid'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['owner_references'] = $data['owner_references'] ?? null;
        $this->container['deletion_grace_period_seconds'] = $data['deletion_grace_period_seconds'] ?? null;
        $this->container['deletion_timestamp'] = $data['deletion_timestamp'] ?? null;
        $this->container['creation_timestamp'] = $data['creation_timestamp'] ?? null;
        $this->container['cluster_name'] = $data['cluster_name'] ?? null;
        $this->container['self_link'] = $data['self_link'] ?? null;
        $this->container['managed_fields'] = $data['managed_fields'] ?? null;
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
     * Gets finalizers
     *
     * @return string[]|null
     */
    public function getFinalizers()
    {
        return $this->container['finalizers'];
    }

    /**
     * Sets finalizers
     *
     * @param string[]|null $finalizers 
     *
     * @return self
     */
    public function setFinalizers($finalizers)
    {
        $this->container['finalizers'] = $finalizers;

        return $this;
    }

    /**
     * Gets resource_version
     *
     * @return string|null
     */
    public function getResourceVersion()
    {
        return $this->container['resource_version'];
    }

    /**
     * Sets resource_version
     *
     * @param string|null $resource_version 
     *
     * @return self
     */
    public function setResourceVersion($resource_version)
    {
        $this->container['resource_version'] = $resource_version;

        return $this;
    }

    /**
     * Gets generation
     *
     * @return float|null
     */
    public function getGeneration()
    {
        return $this->container['generation'];
    }

    /**
     * Sets generation
     *
     * @param float|null $generation 
     *
     * @return self
     */
    public function setGeneration($generation)
    {
        $this->container['generation'] = $generation;

        return $this;
    }

    /**
     * Gets annotations
     *
     * @return map[string,string]|null
     */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
     * Sets annotations
     *
     * @param map[string,string]|null $annotations 
     *
     * @return self
     */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;

        return $this;
    }

    /**
     * Gets generate_name
     *
     * @return string|null
     */
    public function getGenerateName()
    {
        return $this->container['generate_name'];
    }

    /**
     * Sets generate_name
     *
     * @param string|null $generate_name 
     *
     * @return self
     */
    public function setGenerateName($generate_name)
    {
        $this->container['generate_name'] = $generate_name;

        return $this;
    }

    /**
     * Gets namespace
     *
     * @return string|null
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     *
     * @param string|null $namespace 
     *
     * @return self
     */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return map[string,string]|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param map[string,string]|null $labels 
     *
     * @return self
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets uid
     *
     * @return string|null
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string|null $uid 
     *
     * @return self
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

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
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets owner_references
     *
     * @return \OpenAPI\Client\Model\JsonV1OwnerReference[]|null
     */
    public function getOwnerReferences()
    {
        return $this->container['owner_references'];
    }

    /**
     * Sets owner_references
     *
     * @param \OpenAPI\Client\Model\JsonV1OwnerReference[]|null $owner_references 
     *
     * @return self
     */
    public function setOwnerReferences($owner_references)
    {
        $this->container['owner_references'] = $owner_references;

        return $this;
    }

    /**
     * Gets deletion_grace_period_seconds
     *
     * @return float|null
     */
    public function getDeletionGracePeriodSeconds()
    {
        return $this->container['deletion_grace_period_seconds'];
    }

    /**
     * Sets deletion_grace_period_seconds
     *
     * @param float|null $deletion_grace_period_seconds 
     *
     * @return self
     */
    public function setDeletionGracePeriodSeconds($deletion_grace_period_seconds)
    {
        $this->container['deletion_grace_period_seconds'] = $deletion_grace_period_seconds;

        return $this;
    }

    /**
     * Gets deletion_timestamp
     *
     * @return float|null
     */
    public function getDeletionTimestamp()
    {
        return $this->container['deletion_timestamp'];
    }

    /**
     * Sets deletion_timestamp
     *
     * @param float|null $deletion_timestamp 
     *
     * @return self
     */
    public function setDeletionTimestamp($deletion_timestamp)
    {
        $this->container['deletion_timestamp'] = $deletion_timestamp;

        return $this;
    }

    /**
     * Gets creation_timestamp
     *
     * @return float|null
     */
    public function getCreationTimestamp()
    {
        return $this->container['creation_timestamp'];
    }

    /**
     * Sets creation_timestamp
     *
     * @param float|null $creation_timestamp 
     *
     * @return self
     */
    public function setCreationTimestamp($creation_timestamp)
    {
        $this->container['creation_timestamp'] = $creation_timestamp;

        return $this;
    }

    /**
     * Gets cluster_name
     *
     * @return string|null
     */
    public function getClusterName()
    {
        return $this->container['cluster_name'];
    }

    /**
     * Sets cluster_name
     *
     * @param string|null $cluster_name 
     *
     * @return self
     */
    public function setClusterName($cluster_name)
    {
        $this->container['cluster_name'] = $cluster_name;

        return $this;
    }

    /**
     * Gets self_link
     *
     * @return string|null
     */
    public function getSelfLink()
    {
        return $this->container['self_link'];
    }

    /**
     * Sets self_link
     *
     * @param string|null $self_link 
     *
     * @return self
     */
    public function setSelfLink($self_link)
    {
        $this->container['self_link'] = $self_link;

        return $this;
    }

    /**
     * Gets managed_fields
     *
     * @return \OpenAPI\Client\Model\JsonV1ManagedFieldsEntry[]|null
     */
    public function getManagedFields()
    {
        return $this->container['managed_fields'];
    }

    /**
     * Sets managed_fields
     *
     * @param \OpenAPI\Client\Model\JsonV1ManagedFieldsEntry[]|null $managed_fields 
     *
     * @return self
     */
    public function setManagedFields($managed_fields)
    {
        $this->container['managed_fields'] = $managed_fields;

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


