<?php
/**
 * JsonMDNUser
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
 * The version of the OpenAPI document: 0.5.0-master.41
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
 * JsonMDNUser Class Doc Comment
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
class JsonMDNUser implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'json_MDN_User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'last_active' => 'string',
        'created' => 'string',
        'activated' => 'string',
        'image' => 'string',
        'user_name' => 'string',
        'first_name' => 'string',
        'credentials' => '\OpenAPI\Client\Model\JsonMDNUserCredentials',
        'mail' => 'string',
        'last_name' => 'string',
        'social_accounts' => '\OpenAPI\Client\Model\JsonMDNSocialUserObject[]',
        'guid' => 'string',
        'settings' => '\OpenAPI\Client\Model\JsonMDNUserSetting[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'last_active' => null,
        'created' => null,
        'activated' => null,
        'image' => null,
        'user_name' => null,
        'first_name' => null,
        'credentials' => null,
        'mail' => null,
        'last_name' => null,
        'social_accounts' => null,
        'guid' => null,
        'settings' => null
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
        'last_active' => 'lastActive',
        'created' => 'created',
        'activated' => 'activated',
        'image' => 'image',
        'user_name' => 'userName',
        'first_name' => 'firstName',
        'credentials' => 'credentials',
        'mail' => 'mail',
        'last_name' => 'lastName',
        'social_accounts' => 'socialAccounts',
        'guid' => 'guid',
        'settings' => 'settings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'last_active' => 'setLastActive',
        'created' => 'setCreated',
        'activated' => 'setActivated',
        'image' => 'setImage',
        'user_name' => 'setUserName',
        'first_name' => 'setFirstName',
        'credentials' => 'setCredentials',
        'mail' => 'setMail',
        'last_name' => 'setLastName',
        'social_accounts' => 'setSocialAccounts',
        'guid' => 'setGuid',
        'settings' => 'setSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'last_active' => 'getLastActive',
        'created' => 'getCreated',
        'activated' => 'getActivated',
        'image' => 'getImage',
        'user_name' => 'getUserName',
        'first_name' => 'getFirstName',
        'credentials' => 'getCredentials',
        'mail' => 'getMail',
        'last_name' => 'getLastName',
        'social_accounts' => 'getSocialAccounts',
        'guid' => 'getGuid',
        'settings' => 'getSettings'
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
        $this->container['last_active'] = $data['last_active'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['activated'] = $data['activated'] ?? null;
        $this->container['image'] = $data['image'] ?? null;
        $this->container['user_name'] = $data['user_name'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['credentials'] = $data['credentials'] ?? null;
        $this->container['mail'] = $data['mail'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['social_accounts'] = $data['social_accounts'] ?? null;
        $this->container['guid'] = $data['guid'] ?? null;
        $this->container['settings'] = $data['settings'] ?? null;
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
     * Gets last_active
     *
     * @return string|null
     */
    public function getLastActive()
    {
        return $this->container['last_active'];
    }

    /**
     * Sets last_active
     *
     * @param string|null $last_active 
     *
     * @return self
     */
    public function setLastActive($last_active)
    {
        $this->container['last_active'] = $last_active;

        return $this;
    }

    /**
     * Gets created
     *
     * @return string|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string|null $created 
     *
     * @return self
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets activated
     *
     * @return string|null
     */
    public function getActivated()
    {
        return $this->container['activated'];
    }

    /**
     * Sets activated
     *
     * @param string|null $activated 
     *
     * @return self
     */
    public function setActivated($activated)
    {
        $this->container['activated'] = $activated;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string|null $image 
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return string|null
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string|null $user_name 
     *
     * @return self
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name 
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets credentials
     *
     * @return \OpenAPI\Client\Model\JsonMDNUserCredentials|null
     */
    public function getCredentials()
    {
        return $this->container['credentials'];
    }

    /**
     * Sets credentials
     *
     * @param \OpenAPI\Client\Model\JsonMDNUserCredentials|null $credentials credentials
     *
     * @return self
     */
    public function setCredentials($credentials)
    {
        $this->container['credentials'] = $credentials;

        return $this;
    }

    /**
     * Gets mail
     *
     * @return string|null
     */
    public function getMail()
    {
        return $this->container['mail'];
    }

    /**
     * Sets mail
     *
     * @param string|null $mail 
     *
     * @return self
     */
    public function setMail($mail)
    {
        $this->container['mail'] = $mail;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name 
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets social_accounts
     *
     * @return \OpenAPI\Client\Model\JsonMDNSocialUserObject[]|null
     */
    public function getSocialAccounts()
    {
        return $this->container['social_accounts'];
    }

    /**
     * Sets social_accounts
     *
     * @param \OpenAPI\Client\Model\JsonMDNSocialUserObject[]|null $social_accounts 
     *
     * @return self
     */
    public function setSocialAccounts($social_accounts)
    {
        $this->container['social_accounts'] = $social_accounts;

        return $this;
    }

    /**
     * Gets guid
     *
     * @return string|null
     */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
     * Sets guid
     *
     * @param string|null $guid 
     *
     * @return self
     */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \OpenAPI\Client\Model\JsonMDNUserSetting[]|null
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \OpenAPI\Client\Model\JsonMDNUserSetting[]|null $settings 
     *
     * @return self
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

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


