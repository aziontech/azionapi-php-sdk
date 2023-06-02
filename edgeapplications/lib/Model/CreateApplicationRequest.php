<?php
/**
 * CreateApplicationRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Edge Application
 *
 * ## Welcome to the Azion API!  With the following APIs you can check, remove or update existing settings, besides creating new ones.  * * *  ## Overview  The Azion API is a RESTful API, based on HTTPS requests, that allows you to integrate your systems with our platform, simply, quickly, and securely.  Here you will find instructions on how our API works and what functionality is available.  This documentation is being constantly updated. Make sure you verify if there are any updates or changes before you perform any development in your application, even if you are familiar with our API.  * * *  Both HTTPS requests and responses must be in JavaScript Object Notation (JSON) format. All HTTPS requests and responses must follow these conventions.  **Base URL**  The base URL of the API, which must be used, is:  [**https://api.azionapi.net/_**](https://api.azionapi.net/)  **HTTP Methods**  Each HTTP method defines the type of operation that will be run.  | HTTP Method | CRUD | Whole Collection (e.g. /items) | Specific Item (e.g. /items/:item_id) | | --- | --- | --- | --- | | GET | Read | It retrieves the list of items in a Collection. | It retrieves a specific item in a Collection. | | POST | Create | It creates a new item in the Collection. | \\- | | PUT | Update/Replace | It replaces a whole Collection with a new one. | It replaces an item in a Collection with a new one. | | PATCH | Update/Modify | It partially updates a Collection. | It partially updates an item in a Collection | | DELETE | Delete | It deletes a whole Collection. | It deletes an item in a Collection. |  * * *  **Status Codes**  The HTTP return code defines the status – successful or not – after the requested operation is run.  | Status Code | Meaning | | --- | --- | | 200 OK | General Status for a successful operation. | | 201 CREATED | Successfully created a collection or item, by means of POST or PUT. | | 204 NO CONTENT | Successful operation, but without any content to be return to the Body. Generally used for DELETE or PUT operations. | | 207 MULTI-STATUS | A batch of operations were triggered by a single request, which resulted in different return codes when it was run, for some of the operations. The codes are displayed in the “status” field, in the body of the response, for each sub-batch of operations for whichever are applicable. | | 400 BAD REQUEST | Request error, such as invalid parameters, missing mandatory parameters or others. | | 401 UNAUTHORIZED | Error caused by a missing HTTP Authentication header. | | 403 FORBIDDEN | User does not have the permissions to run the requested operation. | | 404 NOT FOUND | The requested resource does not exist. | | 405 METHOD NOT ALLOWED | The requested method is not applicable with the URL. | | 406 NOT ACCEPTABLE | Accept header missing from the HTTP request or the header contains formatting or the version is not supported by the API. | | 409 CONFLICT | Conflict generated in running the request, such as a request to create an already existing record. | | 429 TOO MANY REQUESTS | The request was temporarily rejected, due to exceeding the limit on operations. Wait for the time defined in the X-Ratelimit-Reset header and try again. | | 500 INTERNAL SERVER ERROR | Unintentional error, due to an unidentified failure in the request process. | | \\--- |  | | **HTTP Headers** |  |  All requests must be generated with the HTTP header specifying the desired code format for responses and the API version used. The current version of the API is 3 and the format is application/json.  ``` Accept: application/json; version=3  ```  * * *  **Rate Limit**  The limit of operations that can be run via the API is defined by 3 HTTP response headers:  *   **X-ratelimit-limit:** number of operations allowed in one time-frame; *   **X-ratelimit-remaining:** number of operations still available in one time-frame; *   **X-ratelimit-reset:** is the date and time, in IOS 8601 format, which represents the point in the future when the time-frame will be closed and when the limits will, therefore, be reset.       Example of HTTP response headers and a request:  ``` Date: Thu, 02 Nov 2017 12:30:28 GMT X-ratelimit-remaining: 199 X-ratelimit-limit: 200 X-ratelimit-reset: 2017-11-02T12:31:28.675446  ```  In the example provided, 200 operations are allowed within a 1-minute time frame. Of those, there are 199 still available, because one has already been run. The total limit will be reset after 1 minute.  When the X-ratelimit-limit is reached, or in other words, when the X-ratelimit-remaining reaches zero, the API will give the error, HTTP 429 TOO MANY REQUESTS. If your application receives this error, you will need to wait until the time defined in X-ratelimit-reset has passed, to make another request.  *   **X-ratelimit-limit by product**       The *X-ratelimit limit* variations by product are the following:  *   **Real-Time Metrics:** 20 requests per minute. *   **Real-Time Purge:** 200 requests per minute; except for the Wildcard, which is 2000 a day.       > The rate-limit values are based on the client_id.  * * *  **Optional Parameters**  In this version, it is possible to include some optional parameters as part of the GET method, which can help and modify the form in which your data will be returned.  You can combine these parameters to get the result you want.  They are:  | Parameter | Description | Accepted values: | | --- | --- | --- | | order_by | Identifies which field the return should be sorted by. The default ordering is ascending. | Depends on the fields available from the endpoint structure | | sort | Defines which ordering to be used: ascending or descending. | asc  <br>  <br>desc | | page | Identifies which page should be returned, if the return is paginated. The default value is 1. | Page number. | | page_size | Identifies how many items should be returned per page. The default value is 10. | Desired number of items. |  * * *  **Request Exemple**  You can use one parameter, or a combination. See the example below, which uses all of them in the same request.  ``` GET /domains?order_by=name&page_size=20&sort=desc&page=3 Accept: application/json; version=3 Authorization: token 2909f3932069047f4736dc87e72baaddd19c9f75  ```  * * *  # Authentication  Authentication and authorization of operations via Azion API is done through Tokens.  The first step is to create the Token through authenticating a user registered in [Real-Time Manager](https://sso.azion.com/login).  * * *  ## Encoding Username and Password in Base64  Only token creation and cancelling operations are performed through Basic Authentication, that is, with a username and password. You can create and cancel the token through the API itself, but for that you need to encode your username and password in base64.  Base64 encoding can be done from the command line on a Unix terminal:  ``` $ echo 'user@domain:password'|base64 dXNlckBkb21haW46cGFzc3dvcmQK  ```  If you do not have a Unix terminal available, you can use the free online service at [https://www.base64encode.org/](https://www.base64encode.org/)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
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
 * CreateApplicationRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateApplicationRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateApplicationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'application_acceleration' => 'bool',
        'delivery_protocol' => 'string',
        'origin_type' => 'string',
        'address' => 'string',
        'origin_protocol_policy' => 'string',
        'host_header' => 'string',
        'browser_cache_settings' => 'string',
        'cdn_cache_settings' => 'string',
        'browser_cache_settings_maximum_ttl' => 'int',
        'cdn_cache_settings_maximum_ttl' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'application_acceleration' => null,
        'delivery_protocol' => null,
        'origin_type' => null,
        'address' => null,
        'origin_protocol_policy' => null,
        'host_header' => null,
        'browser_cache_settings' => null,
        'cdn_cache_settings' => null,
        'browser_cache_settings_maximum_ttl' => 'int64',
        'cdn_cache_settings_maximum_ttl' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'application_acceleration' => false,
		'delivery_protocol' => false,
		'origin_type' => false,
		'address' => false,
		'origin_protocol_policy' => false,
		'host_header' => false,
		'browser_cache_settings' => false,
		'cdn_cache_settings' => false,
		'browser_cache_settings_maximum_ttl' => false,
		'cdn_cache_settings_maximum_ttl' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'application_acceleration' => 'application_acceleration',
        'delivery_protocol' => 'delivery_protocol',
        'origin_type' => 'origin_type',
        'address' => 'address',
        'origin_protocol_policy' => 'origin_protocol_policy',
        'host_header' => 'host_header',
        'browser_cache_settings' => 'browser_cache_settings',
        'cdn_cache_settings' => 'cdn_cache_settings',
        'browser_cache_settings_maximum_ttl' => 'browser_cache_settings_maximum_ttl',
        'cdn_cache_settings_maximum_ttl' => 'cdn_cache_settings_maximum_ttl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'application_acceleration' => 'setApplicationAcceleration',
        'delivery_protocol' => 'setDeliveryProtocol',
        'origin_type' => 'setOriginType',
        'address' => 'setAddress',
        'origin_protocol_policy' => 'setOriginProtocolPolicy',
        'host_header' => 'setHostHeader',
        'browser_cache_settings' => 'setBrowserCacheSettings',
        'cdn_cache_settings' => 'setCdnCacheSettings',
        'browser_cache_settings_maximum_ttl' => 'setBrowserCacheSettingsMaximumTtl',
        'cdn_cache_settings_maximum_ttl' => 'setCdnCacheSettingsMaximumTtl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'application_acceleration' => 'getApplicationAcceleration',
        'delivery_protocol' => 'getDeliveryProtocol',
        'origin_type' => 'getOriginType',
        'address' => 'getAddress',
        'origin_protocol_policy' => 'getOriginProtocolPolicy',
        'host_header' => 'getHostHeader',
        'browser_cache_settings' => 'getBrowserCacheSettings',
        'cdn_cache_settings' => 'getCdnCacheSettings',
        'browser_cache_settings_maximum_ttl' => 'getBrowserCacheSettingsMaximumTtl',
        'cdn_cache_settings_maximum_ttl' => 'getCdnCacheSettingsMaximumTtl'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('application_acceleration', $data ?? [], null);
        $this->setIfExists('delivery_protocol', $data ?? [], null);
        $this->setIfExists('origin_type', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('origin_protocol_policy', $data ?? [], null);
        $this->setIfExists('host_header', $data ?? [], null);
        $this->setIfExists('browser_cache_settings', $data ?? [], null);
        $this->setIfExists('cdn_cache_settings', $data ?? [], null);
        $this->setIfExists('browser_cache_settings_maximum_ttl', $data ?? [], null);
        $this->setIfExists('cdn_cache_settings_maximum_ttl', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets application_acceleration
     *
     * @return bool|null
     */
    public function getApplicationAcceleration()
    {
        return $this->container['application_acceleration'];
    }

    /**
     * Sets application_acceleration
     *
     * @param bool|null $application_acceleration application_acceleration
     *
     * @return self
     */
    public function setApplicationAcceleration($application_acceleration)
    {
        if (is_null($application_acceleration)) {
            throw new \InvalidArgumentException('non-nullable application_acceleration cannot be null');
        }
        $this->container['application_acceleration'] = $application_acceleration;

        return $this;
    }

    /**
     * Gets delivery_protocol
     *
     * @return string|null
     */
    public function getDeliveryProtocol()
    {
        return $this->container['delivery_protocol'];
    }

    /**
     * Sets delivery_protocol
     *
     * @param string|null $delivery_protocol delivery_protocol
     *
     * @return self
     */
    public function setDeliveryProtocol($delivery_protocol)
    {
        if (is_null($delivery_protocol)) {
            throw new \InvalidArgumentException('non-nullable delivery_protocol cannot be null');
        }
        $this->container['delivery_protocol'] = $delivery_protocol;

        return $this;
    }

    /**
     * Gets origin_type
     *
     * @return string|null
     */
    public function getOriginType()
    {
        return $this->container['origin_type'];
    }

    /**
     * Sets origin_type
     *
     * @param string|null $origin_type origin_type
     *
     * @return self
     */
    public function setOriginType($origin_type)
    {
        if (is_null($origin_type)) {
            throw new \InvalidArgumentException('non-nullable origin_type cannot be null');
        }
        $this->container['origin_type'] = $origin_type;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets origin_protocol_policy
     *
     * @return string|null
     */
    public function getOriginProtocolPolicy()
    {
        return $this->container['origin_protocol_policy'];
    }

    /**
     * Sets origin_protocol_policy
     *
     * @param string|null $origin_protocol_policy origin_protocol_policy
     *
     * @return self
     */
    public function setOriginProtocolPolicy($origin_protocol_policy)
    {
        if (is_null($origin_protocol_policy)) {
            throw new \InvalidArgumentException('non-nullable origin_protocol_policy cannot be null');
        }
        $this->container['origin_protocol_policy'] = $origin_protocol_policy;

        return $this;
    }

    /**
     * Gets host_header
     *
     * @return string|null
     */
    public function getHostHeader()
    {
        return $this->container['host_header'];
    }

    /**
     * Sets host_header
     *
     * @param string|null $host_header host_header
     *
     * @return self
     */
    public function setHostHeader($host_header)
    {
        if (is_null($host_header)) {
            throw new \InvalidArgumentException('non-nullable host_header cannot be null');
        }
        $this->container['host_header'] = $host_header;

        return $this;
    }

    /**
     * Gets browser_cache_settings
     *
     * @return string|null
     */
    public function getBrowserCacheSettings()
    {
        return $this->container['browser_cache_settings'];
    }

    /**
     * Sets browser_cache_settings
     *
     * @param string|null $browser_cache_settings browser_cache_settings
     *
     * @return self
     */
    public function setBrowserCacheSettings($browser_cache_settings)
    {
        if (is_null($browser_cache_settings)) {
            throw new \InvalidArgumentException('non-nullable browser_cache_settings cannot be null');
        }
        $this->container['browser_cache_settings'] = $browser_cache_settings;

        return $this;
    }

    /**
     * Gets cdn_cache_settings
     *
     * @return string|null
     */
    public function getCdnCacheSettings()
    {
        return $this->container['cdn_cache_settings'];
    }

    /**
     * Sets cdn_cache_settings
     *
     * @param string|null $cdn_cache_settings cdn_cache_settings
     *
     * @return self
     */
    public function setCdnCacheSettings($cdn_cache_settings)
    {
        if (is_null($cdn_cache_settings)) {
            throw new \InvalidArgumentException('non-nullable cdn_cache_settings cannot be null');
        }
        $this->container['cdn_cache_settings'] = $cdn_cache_settings;

        return $this;
    }

    /**
     * Gets browser_cache_settings_maximum_ttl
     *
     * @return int|null
     */
    public function getBrowserCacheSettingsMaximumTtl()
    {
        return $this->container['browser_cache_settings_maximum_ttl'];
    }

    /**
     * Sets browser_cache_settings_maximum_ttl
     *
     * @param int|null $browser_cache_settings_maximum_ttl browser_cache_settings_maximum_ttl
     *
     * @return self
     */
    public function setBrowserCacheSettingsMaximumTtl($browser_cache_settings_maximum_ttl)
    {
        if (is_null($browser_cache_settings_maximum_ttl)) {
            throw new \InvalidArgumentException('non-nullable browser_cache_settings_maximum_ttl cannot be null');
        }
        $this->container['browser_cache_settings_maximum_ttl'] = $browser_cache_settings_maximum_ttl;

        return $this;
    }

    /**
     * Gets cdn_cache_settings_maximum_ttl
     *
     * @return int|null
     */
    public function getCdnCacheSettingsMaximumTtl()
    {
        return $this->container['cdn_cache_settings_maximum_ttl'];
    }

    /**
     * Sets cdn_cache_settings_maximum_ttl
     *
     * @param int|null $cdn_cache_settings_maximum_ttl cdn_cache_settings_maximum_ttl
     *
     * @return self
     */
    public function setCdnCacheSettingsMaximumTtl($cdn_cache_settings_maximum_ttl)
    {
        if (is_null($cdn_cache_settings_maximum_ttl)) {
            throw new \InvalidArgumentException('non-nullable cdn_cache_settings_maximum_ttl cannot be null');
        }
        $this->container['cdn_cache_settings_maximum_ttl'] = $cdn_cache_settings_maximum_ttl;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


