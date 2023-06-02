<?php
/**
 * OriginsResultResponse
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
 * OriginsResultResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OriginsResultResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OriginsResultResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'origin_id' => 'int',
        'origin_key' => 'string',
        'name' => 'string',
        'origin_type' => 'string',
        'addresses' => '\OpenAPI\Client\Model\OriginsResultResponseAddresses[]',
        'origin_protocol_policy' => 'string',
        'is_origin_redirection_enabled' => 'bool',
        'host_header' => 'string',
        'method' => 'string',
        'origin_path' => 'string',
        'connection_timeout' => 'int',
        'timeout_between_bytes' => 'int',
        'hmac_authentication' => 'bool',
        'hmac_region_name' => 'string',
        'hmac_access_key' => 'string',
        'hmac_secret_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'origin_id' => 'int64',
        'origin_key' => null,
        'name' => null,
        'origin_type' => null,
        'addresses' => null,
        'origin_protocol_policy' => null,
        'is_origin_redirection_enabled' => null,
        'host_header' => null,
        'method' => null,
        'origin_path' => null,
        'connection_timeout' => 'int64',
        'timeout_between_bytes' => 'int64',
        'hmac_authentication' => null,
        'hmac_region_name' => null,
        'hmac_access_key' => null,
        'hmac_secret_key' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'origin_id' => false,
		'origin_key' => false,
		'name' => false,
		'origin_type' => false,
		'addresses' => false,
		'origin_protocol_policy' => false,
		'is_origin_redirection_enabled' => false,
		'host_header' => false,
		'method' => false,
		'origin_path' => false,
		'connection_timeout' => false,
		'timeout_between_bytes' => false,
		'hmac_authentication' => false,
		'hmac_region_name' => false,
		'hmac_access_key' => false,
		'hmac_secret_key' => false
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
        'origin_id' => 'origin_id',
        'origin_key' => 'origin_key',
        'name' => 'name',
        'origin_type' => 'origin_type',
        'addresses' => 'addresses',
        'origin_protocol_policy' => 'origin_protocol_policy',
        'is_origin_redirection_enabled' => 'is_origin_redirection_enabled',
        'host_header' => 'host_header',
        'method' => 'method',
        'origin_path' => 'origin_path',
        'connection_timeout' => 'connection_timeout',
        'timeout_between_bytes' => 'timeout_between_bytes',
        'hmac_authentication' => 'hmac_authentication',
        'hmac_region_name' => 'hmac_region_name',
        'hmac_access_key' => 'hmac_access_key',
        'hmac_secret_key' => 'hmac_secret_key'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'origin_id' => 'setOriginId',
        'origin_key' => 'setOriginKey',
        'name' => 'setName',
        'origin_type' => 'setOriginType',
        'addresses' => 'setAddresses',
        'origin_protocol_policy' => 'setOriginProtocolPolicy',
        'is_origin_redirection_enabled' => 'setIsOriginRedirectionEnabled',
        'host_header' => 'setHostHeader',
        'method' => 'setMethod',
        'origin_path' => 'setOriginPath',
        'connection_timeout' => 'setConnectionTimeout',
        'timeout_between_bytes' => 'setTimeoutBetweenBytes',
        'hmac_authentication' => 'setHmacAuthentication',
        'hmac_region_name' => 'setHmacRegionName',
        'hmac_access_key' => 'setHmacAccessKey',
        'hmac_secret_key' => 'setHmacSecretKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'origin_id' => 'getOriginId',
        'origin_key' => 'getOriginKey',
        'name' => 'getName',
        'origin_type' => 'getOriginType',
        'addresses' => 'getAddresses',
        'origin_protocol_policy' => 'getOriginProtocolPolicy',
        'is_origin_redirection_enabled' => 'getIsOriginRedirectionEnabled',
        'host_header' => 'getHostHeader',
        'method' => 'getMethod',
        'origin_path' => 'getOriginPath',
        'connection_timeout' => 'getConnectionTimeout',
        'timeout_between_bytes' => 'getTimeoutBetweenBytes',
        'hmac_authentication' => 'getHmacAuthentication',
        'hmac_region_name' => 'getHmacRegionName',
        'hmac_access_key' => 'getHmacAccessKey',
        'hmac_secret_key' => 'getHmacSecretKey'
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
        $this->setIfExists('origin_id', $data ?? [], null);
        $this->setIfExists('origin_key', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('origin_type', $data ?? [], null);
        $this->setIfExists('addresses', $data ?? [], null);
        $this->setIfExists('origin_protocol_policy', $data ?? [], null);
        $this->setIfExists('is_origin_redirection_enabled', $data ?? [], null);
        $this->setIfExists('host_header', $data ?? [], null);
        $this->setIfExists('method', $data ?? [], null);
        $this->setIfExists('origin_path', $data ?? [], null);
        $this->setIfExists('connection_timeout', $data ?? [], null);
        $this->setIfExists('timeout_between_bytes', $data ?? [], null);
        $this->setIfExists('hmac_authentication', $data ?? [], null);
        $this->setIfExists('hmac_region_name', $data ?? [], null);
        $this->setIfExists('hmac_access_key', $data ?? [], null);
        $this->setIfExists('hmac_secret_key', $data ?? [], null);
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

        if ($this->container['origin_id'] === null) {
            $invalidProperties[] = "'origin_id' can't be null";
        }
        if ($this->container['origin_key'] === null) {
            $invalidProperties[] = "'origin_key' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['origin_type'] === null) {
            $invalidProperties[] = "'origin_type' can't be null";
        }
        if ($this->container['addresses'] === null) {
            $invalidProperties[] = "'addresses' can't be null";
        }
        if ($this->container['origin_protocol_policy'] === null) {
            $invalidProperties[] = "'origin_protocol_policy' can't be null";
        }
        if ($this->container['is_origin_redirection_enabled'] === null) {
            $invalidProperties[] = "'is_origin_redirection_enabled' can't be null";
        }
        if ($this->container['host_header'] === null) {
            $invalidProperties[] = "'host_header' can't be null";
        }
        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        if ($this->container['origin_path'] === null) {
            $invalidProperties[] = "'origin_path' can't be null";
        }
        if ($this->container['connection_timeout'] === null) {
            $invalidProperties[] = "'connection_timeout' can't be null";
        }
        if ($this->container['timeout_between_bytes'] === null) {
            $invalidProperties[] = "'timeout_between_bytes' can't be null";
        }
        if ($this->container['hmac_authentication'] === null) {
            $invalidProperties[] = "'hmac_authentication' can't be null";
        }
        if ($this->container['hmac_region_name'] === null) {
            $invalidProperties[] = "'hmac_region_name' can't be null";
        }
        if ($this->container['hmac_access_key'] === null) {
            $invalidProperties[] = "'hmac_access_key' can't be null";
        }
        if ($this->container['hmac_secret_key'] === null) {
            $invalidProperties[] = "'hmac_secret_key' can't be null";
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
     * Gets origin_id
     *
     * @return int
     */
    public function getOriginId()
    {
        return $this->container['origin_id'];
    }

    /**
     * Sets origin_id
     *
     * @param int $origin_id origin_id
     *
     * @return self
     */
    public function setOriginId($origin_id)
    {
        if (is_null($origin_id)) {
            throw new \InvalidArgumentException('non-nullable origin_id cannot be null');
        }
        $this->container['origin_id'] = $origin_id;

        return $this;
    }

    /**
     * Gets origin_key
     *
     * @return string
     */
    public function getOriginKey()
    {
        return $this->container['origin_key'];
    }

    /**
     * Sets origin_key
     *
     * @param string $origin_key origin_key
     *
     * @return self
     */
    public function setOriginKey($origin_key)
    {
        if (is_null($origin_key)) {
            throw new \InvalidArgumentException('non-nullable origin_key cannot be null');
        }
        $this->container['origin_key'] = $origin_key;

        return $this;
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
     * Gets origin_type
     *
     * @return string
     */
    public function getOriginType()
    {
        return $this->container['origin_type'];
    }

    /**
     * Sets origin_type
     *
     * @param string $origin_type origin_type
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
     * Gets addresses
     *
     * @return \OpenAPI\Client\Model\OriginsResultResponseAddresses[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \OpenAPI\Client\Model\OriginsResultResponseAddresses[] $addresses addresses
     *
     * @return self
     */
    public function setAddresses($addresses)
    {
        if (is_null($addresses)) {
            throw new \InvalidArgumentException('non-nullable addresses cannot be null');
        }
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets origin_protocol_policy
     *
     * @return string
     */
    public function getOriginProtocolPolicy()
    {
        return $this->container['origin_protocol_policy'];
    }

    /**
     * Sets origin_protocol_policy
     *
     * @param string $origin_protocol_policy origin_protocol_policy
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
     * Gets is_origin_redirection_enabled
     *
     * @return bool
     */
    public function getIsOriginRedirectionEnabled()
    {
        return $this->container['is_origin_redirection_enabled'];
    }

    /**
     * Sets is_origin_redirection_enabled
     *
     * @param bool $is_origin_redirection_enabled is_origin_redirection_enabled
     *
     * @return self
     */
    public function setIsOriginRedirectionEnabled($is_origin_redirection_enabled)
    {
        if (is_null($is_origin_redirection_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_origin_redirection_enabled cannot be null');
        }
        $this->container['is_origin_redirection_enabled'] = $is_origin_redirection_enabled;

        return $this;
    }

    /**
     * Gets host_header
     *
     * @return string
     */
    public function getHostHeader()
    {
        return $this->container['host_header'];
    }

    /**
     * Sets host_header
     *
     * @param string $host_header host_header
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
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method method
     *
     * @return self
     */
    public function setMethod($method)
    {
        if (is_null($method)) {
            throw new \InvalidArgumentException('non-nullable method cannot be null');
        }
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets origin_path
     *
     * @return string
     */
    public function getOriginPath()
    {
        return $this->container['origin_path'];
    }

    /**
     * Sets origin_path
     *
     * @param string $origin_path origin_path
     *
     * @return self
     */
    public function setOriginPath($origin_path)
    {
        if (is_null($origin_path)) {
            throw new \InvalidArgumentException('non-nullable origin_path cannot be null');
        }
        $this->container['origin_path'] = $origin_path;

        return $this;
    }

    /**
     * Gets connection_timeout
     *
     * @return int
     */
    public function getConnectionTimeout()
    {
        return $this->container['connection_timeout'];
    }

    /**
     * Sets connection_timeout
     *
     * @param int $connection_timeout connection_timeout
     *
     * @return self
     */
    public function setConnectionTimeout($connection_timeout)
    {
        if (is_null($connection_timeout)) {
            throw new \InvalidArgumentException('non-nullable connection_timeout cannot be null');
        }
        $this->container['connection_timeout'] = $connection_timeout;

        return $this;
    }

    /**
     * Gets timeout_between_bytes
     *
     * @return int
     */
    public function getTimeoutBetweenBytes()
    {
        return $this->container['timeout_between_bytes'];
    }

    /**
     * Sets timeout_between_bytes
     *
     * @param int $timeout_between_bytes timeout_between_bytes
     *
     * @return self
     */
    public function setTimeoutBetweenBytes($timeout_between_bytes)
    {
        if (is_null($timeout_between_bytes)) {
            throw new \InvalidArgumentException('non-nullable timeout_between_bytes cannot be null');
        }
        $this->container['timeout_between_bytes'] = $timeout_between_bytes;

        return $this;
    }

    /**
     * Gets hmac_authentication
     *
     * @return bool
     */
    public function getHmacAuthentication()
    {
        return $this->container['hmac_authentication'];
    }

    /**
     * Sets hmac_authentication
     *
     * @param bool $hmac_authentication hmac_authentication
     *
     * @return self
     */
    public function setHmacAuthentication($hmac_authentication)
    {
        if (is_null($hmac_authentication)) {
            throw new \InvalidArgumentException('non-nullable hmac_authentication cannot be null');
        }
        $this->container['hmac_authentication'] = $hmac_authentication;

        return $this;
    }

    /**
     * Gets hmac_region_name
     *
     * @return string
     */
    public function getHmacRegionName()
    {
        return $this->container['hmac_region_name'];
    }

    /**
     * Sets hmac_region_name
     *
     * @param string $hmac_region_name hmac_region_name
     *
     * @return self
     */
    public function setHmacRegionName($hmac_region_name)
    {
        if (is_null($hmac_region_name)) {
            throw new \InvalidArgumentException('non-nullable hmac_region_name cannot be null');
        }
        $this->container['hmac_region_name'] = $hmac_region_name;

        return $this;
    }

    /**
     * Gets hmac_access_key
     *
     * @return string
     */
    public function getHmacAccessKey()
    {
        return $this->container['hmac_access_key'];
    }

    /**
     * Sets hmac_access_key
     *
     * @param string $hmac_access_key hmac_access_key
     *
     * @return self
     */
    public function setHmacAccessKey($hmac_access_key)
    {
        if (is_null($hmac_access_key)) {
            throw new \InvalidArgumentException('non-nullable hmac_access_key cannot be null');
        }
        $this->container['hmac_access_key'] = $hmac_access_key;

        return $this;
    }

    /**
     * Gets hmac_secret_key
     *
     * @return string
     */
    public function getHmacSecretKey()
    {
        return $this->container['hmac_secret_key'];
    }

    /**
     * Sets hmac_secret_key
     *
     * @param string $hmac_secret_key hmac_secret_key
     *
     * @return self
     */
    public function setHmacSecretKey($hmac_secret_key)
    {
        if (is_null($hmac_secret_key)) {
            throw new \InvalidArgumentException('non-nullable hmac_secret_key cannot be null');
        }
        $this->container['hmac_secret_key'] = $hmac_secret_key;

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


