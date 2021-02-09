<?php
/**
 * JsonV1Event
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
 * The version of the OpenAPI document: 0.5.0-master.52
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
 * JsonV1Event Class Doc Comment
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
class JsonV1Event implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'json_V1Event';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'kind' => 'string',
        'reporting_instance' => 'string',
        'metadata' => '\OpenAPI\Client\Model\JsonV1ObjectMeta',
        'event_time' => 'float',
        'source' => '\OpenAPI\Client\Model\JsonV1EventSource',
        'api_version' => 'string',
        'last_timestamp' => 'float',
        'type' => 'string',
        'involved_object' => '\OpenAPI\Client\Model\JsonV1ObjectReference',
        'message' => 'string',
        'series' => '\OpenAPI\Client\Model\JsonV1EventSeries',
        'action' => 'string',
        'reason' => 'string',
        'first_timestamp' => 'float',
        'related' => '\OpenAPI\Client\Model\JsonV1ObjectReference',
        'reporting_component' => 'string',
        'count' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'kind' => null,
        'reporting_instance' => null,
        'metadata' => null,
        'event_time' => null,
        'source' => null,
        'api_version' => null,
        'last_timestamp' => null,
        'type' => null,
        'involved_object' => null,
        'message' => null,
        'series' => null,
        'action' => null,
        'reason' => null,
        'first_timestamp' => null,
        'related' => null,
        'reporting_component' => null,
        'count' => null
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
        'kind' => 'kind',
        'reporting_instance' => 'reportingInstance',
        'metadata' => 'metadata',
        'event_time' => 'eventTime',
        'source' => 'source',
        'api_version' => 'apiVersion',
        'last_timestamp' => 'lastTimestamp',
        'type' => 'type',
        'involved_object' => 'involvedObject',
        'message' => 'message',
        'series' => 'series',
        'action' => 'action',
        'reason' => 'reason',
        'first_timestamp' => 'firstTimestamp',
        'related' => 'related',
        'reporting_component' => 'reportingComponent',
        'count' => 'count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kind' => 'setKind',
        'reporting_instance' => 'setReportingInstance',
        'metadata' => 'setMetadata',
        'event_time' => 'setEventTime',
        'source' => 'setSource',
        'api_version' => 'setApiVersion',
        'last_timestamp' => 'setLastTimestamp',
        'type' => 'setType',
        'involved_object' => 'setInvolvedObject',
        'message' => 'setMessage',
        'series' => 'setSeries',
        'action' => 'setAction',
        'reason' => 'setReason',
        'first_timestamp' => 'setFirstTimestamp',
        'related' => 'setRelated',
        'reporting_component' => 'setReportingComponent',
        'count' => 'setCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kind' => 'getKind',
        'reporting_instance' => 'getReportingInstance',
        'metadata' => 'getMetadata',
        'event_time' => 'getEventTime',
        'source' => 'getSource',
        'api_version' => 'getApiVersion',
        'last_timestamp' => 'getLastTimestamp',
        'type' => 'getType',
        'involved_object' => 'getInvolvedObject',
        'message' => 'getMessage',
        'series' => 'getSeries',
        'action' => 'getAction',
        'reason' => 'getReason',
        'first_timestamp' => 'getFirstTimestamp',
        'related' => 'getRelated',
        'reporting_component' => 'getReportingComponent',
        'count' => 'getCount'
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
        $this->container['kind'] = $data['kind'] ?? null;
        $this->container['reporting_instance'] = $data['reporting_instance'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['event_time'] = $data['event_time'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['api_version'] = $data['api_version'] ?? null;
        $this->container['last_timestamp'] = $data['last_timestamp'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['involved_object'] = $data['involved_object'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['series'] = $data['series'] ?? null;
        $this->container['action'] = $data['action'] ?? null;
        $this->container['reason'] = $data['reason'] ?? null;
        $this->container['first_timestamp'] = $data['first_timestamp'] ?? null;
        $this->container['related'] = $data['related'] ?? null;
        $this->container['reporting_component'] = $data['reporting_component'] ?? null;
        $this->container['count'] = $data['count'] ?? null;
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
     * Gets kind
     *
     * @return string|null
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string|null $kind 
     *
     * @return self
     */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets reporting_instance
     *
     * @return string|null
     */
    public function getReportingInstance()
    {
        return $this->container['reporting_instance'];
    }

    /**
     * Sets reporting_instance
     *
     * @param string|null $reporting_instance 
     *
     * @return self
     */
    public function setReportingInstance($reporting_instance)
    {
        $this->container['reporting_instance'] = $reporting_instance;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \OpenAPI\Client\Model\JsonV1ObjectMeta|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \OpenAPI\Client\Model\JsonV1ObjectMeta|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets event_time
     *
     * @return float|null
     */
    public function getEventTime()
    {
        return $this->container['event_time'];
    }

    /**
     * Sets event_time
     *
     * @param float|null $event_time 
     *
     * @return self
     */
    public function setEventTime($event_time)
    {
        $this->container['event_time'] = $event_time;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \OpenAPI\Client\Model\JsonV1EventSource|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \OpenAPI\Client\Model\JsonV1EventSource|null $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets api_version
     *
     * @return string|null
     */
    public function getApiVersion()
    {
        return $this->container['api_version'];
    }

    /**
     * Sets api_version
     *
     * @param string|null $api_version 
     *
     * @return self
     */
    public function setApiVersion($api_version)
    {
        $this->container['api_version'] = $api_version;

        return $this;
    }

    /**
     * Gets last_timestamp
     *
     * @return float|null
     */
    public function getLastTimestamp()
    {
        return $this->container['last_timestamp'];
    }

    /**
     * Sets last_timestamp
     *
     * @param float|null $last_timestamp 
     *
     * @return self
     */
    public function setLastTimestamp($last_timestamp)
    {
        $this->container['last_timestamp'] = $last_timestamp;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type 
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets involved_object
     *
     * @return \OpenAPI\Client\Model\JsonV1ObjectReference|null
     */
    public function getInvolvedObject()
    {
        return $this->container['involved_object'];
    }

    /**
     * Sets involved_object
     *
     * @param \OpenAPI\Client\Model\JsonV1ObjectReference|null $involved_object involved_object
     *
     * @return self
     */
    public function setInvolvedObject($involved_object)
    {
        $this->container['involved_object'] = $involved_object;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message 
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets series
     *
     * @return \OpenAPI\Client\Model\JsonV1EventSeries|null
     */
    public function getSeries()
    {
        return $this->container['series'];
    }

    /**
     * Sets series
     *
     * @param \OpenAPI\Client\Model\JsonV1EventSeries|null $series series
     *
     * @return self
     */
    public function setSeries($series)
    {
        $this->container['series'] = $series;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string|null $action 
     *
     * @return self
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason 
     *
     * @return self
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets first_timestamp
     *
     * @return float|null
     */
    public function getFirstTimestamp()
    {
        return $this->container['first_timestamp'];
    }

    /**
     * Sets first_timestamp
     *
     * @param float|null $first_timestamp 
     *
     * @return self
     */
    public function setFirstTimestamp($first_timestamp)
    {
        $this->container['first_timestamp'] = $first_timestamp;

        return $this;
    }

    /**
     * Gets related
     *
     * @return \OpenAPI\Client\Model\JsonV1ObjectReference|null
     */
    public function getRelated()
    {
        return $this->container['related'];
    }

    /**
     * Sets related
     *
     * @param \OpenAPI\Client\Model\JsonV1ObjectReference|null $related related
     *
     * @return self
     */
    public function setRelated($related)
    {
        $this->container['related'] = $related;

        return $this;
    }

    /**
     * Gets reporting_component
     *
     * @return string|null
     */
    public function getReportingComponent()
    {
        return $this->container['reporting_component'];
    }

    /**
     * Sets reporting_component
     *
     * @param string|null $reporting_component 
     *
     * @return self
     */
    public function setReportingComponent($reporting_component)
    {
        $this->container['reporting_component'] = $reporting_component;

        return $this;
    }

    /**
     * Gets count
     *
     * @return float|null
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param float|null $count 
     *
     * @return self
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

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


