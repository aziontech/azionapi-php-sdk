<?php
/**
 * ApplicationUpdateRequest
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
 * ApplicationUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApplicationUpdateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApplicationUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'delivery_protocol' => 'string',
        'http_port' => 'Interface',
        'https_port' => 'Interface',
        'minimum_tls_version' => 'string',
        'active' => 'bool',
        'application_acceleration' => 'bool',
        'caching' => 'bool',
        'device_detection' => 'bool',
        'edge_firewall' => 'bool',
        'edge_functions' => 'bool',
        'image_optimization' => 'bool',
        'l2_caching' => 'bool',
        'load_balancer' => 'bool',
        'raw_logs' => 'bool',
        'web_application_firewall' => 'bool'
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
        'delivery_protocol' => null,
        'http_port' => null,
        'https_port' => null,
        'minimum_tls_version' => null,
        'active' => null,
        'application_acceleration' => null,
        'caching' => null,
        'device_detection' => null,
        'edge_firewall' => null,
        'edge_functions' => null,
        'image_optimization' => null,
        'l2_caching' => null,
        'load_balancer' => null,
        'raw_logs' => null,
        'web_application_firewall' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'delivery_protocol' => false,
		'http_port' => false,
		'https_port' => false,
		'minimum_tls_version' => false,
		'active' => false,
		'application_acceleration' => false,
		'caching' => false,
		'device_detection' => false,
		'edge_firewall' => false,
		'edge_functions' => false,
		'image_optimization' => false,
		'l2_caching' => false,
		'load_balancer' => false,
		'raw_logs' => false,
		'web_application_firewall' => false
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
        'delivery_protocol' => 'delivery_protocol',
        'http_port' => 'http_port',
        'https_port' => 'https_port',
        'minimum_tls_version' => 'minimum_tls_version',
        'active' => 'active',
        'application_acceleration' => 'application_acceleration',
        'caching' => 'caching',
        'device_detection' => 'device_detection',
        'edge_firewall' => 'edge_firewall',
        'edge_functions' => 'edge_functions',
        'image_optimization' => 'image_optimization',
        'l2_caching' => 'l2_caching',
        'load_balancer' => 'load_balancer',
        'raw_logs' => 'raw_logs',
        'web_application_firewall' => 'web_application_firewall'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'delivery_protocol' => 'setDeliveryProtocol',
        'http_port' => 'setHttpPort',
        'https_port' => 'setHttpsPort',
        'minimum_tls_version' => 'setMinimumTlsVersion',
        'active' => 'setActive',
        'application_acceleration' => 'setApplicationAcceleration',
        'caching' => 'setCaching',
        'device_detection' => 'setDeviceDetection',
        'edge_firewall' => 'setEdgeFirewall',
        'edge_functions' => 'setEdgeFunctions',
        'image_optimization' => 'setImageOptimization',
        'l2_caching' => 'setL2Caching',
        'load_balancer' => 'setLoadBalancer',
        'raw_logs' => 'setRawLogs',
        'web_application_firewall' => 'setWebApplicationFirewall'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'delivery_protocol' => 'getDeliveryProtocol',
        'http_port' => 'getHttpPort',
        'https_port' => 'getHttpsPort',
        'minimum_tls_version' => 'getMinimumTlsVersion',
        'active' => 'getActive',
        'application_acceleration' => 'getApplicationAcceleration',
        'caching' => 'getCaching',
        'device_detection' => 'getDeviceDetection',
        'edge_firewall' => 'getEdgeFirewall',
        'edge_functions' => 'getEdgeFunctions',
        'image_optimization' => 'getImageOptimization',
        'l2_caching' => 'getL2Caching',
        'load_balancer' => 'getLoadBalancer',
        'raw_logs' => 'getRawLogs',
        'web_application_firewall' => 'getWebApplicationFirewall'
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
        $this->setIfExists('delivery_protocol', $data ?? [], null);
        $this->setIfExists('http_port', $data ?? [], null);
        $this->setIfExists('https_port', $data ?? [], null);
        $this->setIfExists('minimum_tls_version', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('application_acceleration', $data ?? [], null);
        $this->setIfExists('caching', $data ?? [], null);
        $this->setIfExists('device_detection', $data ?? [], null);
        $this->setIfExists('edge_firewall', $data ?? [], null);
        $this->setIfExists('edge_functions', $data ?? [], null);
        $this->setIfExists('image_optimization', $data ?? [], null);
        $this->setIfExists('l2_caching', $data ?? [], null);
        $this->setIfExists('load_balancer', $data ?? [], null);
        $this->setIfExists('raw_logs', $data ?? [], null);
        $this->setIfExists('web_application_firewall', $data ?? [], null);
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
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
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
     * Gets http_port
     *
     * @return Interface|null
     */
    public function getHttpPort()
    {
        return $this->container['http_port'];
    }

    /**
     * Sets http_port
     *
     * @param Interface|null $http_port http_port
     *
     * @return self
     */
    public function setHttpPort($http_port)
    {
        if (is_null($http_port)) {
            throw new \InvalidArgumentException('non-nullable http_port cannot be null');
        }
        $this->container['http_port'] = $http_port;

        return $this;
    }

    /**
     * Gets https_port
     *
     * @return Interface|null
     */
    public function getHttpsPort()
    {
        return $this->container['https_port'];
    }

    /**
     * Sets https_port
     *
     * @param Interface|null $https_port https_port
     *
     * @return self
     */
    public function setHttpsPort($https_port)
    {
        if (is_null($https_port)) {
            throw new \InvalidArgumentException('non-nullable https_port cannot be null');
        }
        $this->container['https_port'] = $https_port;

        return $this;
    }

    /**
     * Gets minimum_tls_version
     *
     * @return string|null
     */
    public function getMinimumTlsVersion()
    {
        return $this->container['minimum_tls_version'];
    }

    /**
     * Sets minimum_tls_version
     *
     * @param string|null $minimum_tls_version minimum_tls_version
     *
     * @return self
     */
    public function setMinimumTlsVersion($minimum_tls_version)
    {
        if (is_null($minimum_tls_version)) {
            throw new \InvalidArgumentException('non-nullable minimum_tls_version cannot be null');
        }
        $this->container['minimum_tls_version'] = $minimum_tls_version;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

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
     * Gets caching
     *
     * @return bool|null
     */
    public function getCaching()
    {
        return $this->container['caching'];
    }

    /**
     * Sets caching
     *
     * @param bool|null $caching caching
     *
     * @return self
     */
    public function setCaching($caching)
    {
        if (is_null($caching)) {
            throw new \InvalidArgumentException('non-nullable caching cannot be null');
        }
        $this->container['caching'] = $caching;

        return $this;
    }

    /**
     * Gets device_detection
     *
     * @return bool|null
     */
    public function getDeviceDetection()
    {
        return $this->container['device_detection'];
    }

    /**
     * Sets device_detection
     *
     * @param bool|null $device_detection device_detection
     *
     * @return self
     */
    public function setDeviceDetection($device_detection)
    {
        if (is_null($device_detection)) {
            throw new \InvalidArgumentException('non-nullable device_detection cannot be null');
        }
        $this->container['device_detection'] = $device_detection;

        return $this;
    }

    /**
     * Gets edge_firewall
     *
     * @return bool|null
     */
    public function getEdgeFirewall()
    {
        return $this->container['edge_firewall'];
    }

    /**
     * Sets edge_firewall
     *
     * @param bool|null $edge_firewall edge_firewall
     *
     * @return self
     */
    public function setEdgeFirewall($edge_firewall)
    {
        if (is_null($edge_firewall)) {
            throw new \InvalidArgumentException('non-nullable edge_firewall cannot be null');
        }
        $this->container['edge_firewall'] = $edge_firewall;

        return $this;
    }

    /**
     * Gets edge_functions
     *
     * @return bool|null
     */
    public function getEdgeFunctions()
    {
        return $this->container['edge_functions'];
    }

    /**
     * Sets edge_functions
     *
     * @param bool|null $edge_functions edge_functions
     *
     * @return self
     */
    public function setEdgeFunctions($edge_functions)
    {
        if (is_null($edge_functions)) {
            throw new \InvalidArgumentException('non-nullable edge_functions cannot be null');
        }
        $this->container['edge_functions'] = $edge_functions;

        return $this;
    }

    /**
     * Gets image_optimization
     *
     * @return bool|null
     */
    public function getImageOptimization()
    {
        return $this->container['image_optimization'];
    }

    /**
     * Sets image_optimization
     *
     * @param bool|null $image_optimization image_optimization
     *
     * @return self
     */
    public function setImageOptimization($image_optimization)
    {
        if (is_null($image_optimization)) {
            throw new \InvalidArgumentException('non-nullable image_optimization cannot be null');
        }
        $this->container['image_optimization'] = $image_optimization;

        return $this;
    }

    /**
     * Gets l2_caching
     *
     * @return bool|null
     */
    public function getL2Caching()
    {
        return $this->container['l2_caching'];
    }

    /**
     * Sets l2_caching
     *
     * @param bool|null $l2_caching l2_caching
     *
     * @return self
     */
    public function setL2Caching($l2_caching)
    {
        if (is_null($l2_caching)) {
            throw new \InvalidArgumentException('non-nullable l2_caching cannot be null');
        }
        $this->container['l2_caching'] = $l2_caching;

        return $this;
    }

    /**
     * Gets load_balancer
     *
     * @return bool|null
     */
    public function getLoadBalancer()
    {
        return $this->container['load_balancer'];
    }

    /**
     * Sets load_balancer
     *
     * @param bool|null $load_balancer load_balancer
     *
     * @return self
     */
    public function setLoadBalancer($load_balancer)
    {
        if (is_null($load_balancer)) {
            throw new \InvalidArgumentException('non-nullable load_balancer cannot be null');
        }
        $this->container['load_balancer'] = $load_balancer;

        return $this;
    }

    /**
     * Gets raw_logs
     *
     * @return bool|null
     */
    public function getRawLogs()
    {
        return $this->container['raw_logs'];
    }

    /**
     * Sets raw_logs
     *
     * @param bool|null $raw_logs raw_logs
     *
     * @return self
     */
    public function setRawLogs($raw_logs)
    {
        if (is_null($raw_logs)) {
            throw new \InvalidArgumentException('non-nullable raw_logs cannot be null');
        }
        $this->container['raw_logs'] = $raw_logs;

        return $this;
    }

    /**
     * Gets web_application_firewall
     *
     * @return bool|null
     */
    public function getWebApplicationFirewall()
    {
        return $this->container['web_application_firewall'];
    }

    /**
     * Sets web_application_firewall
     *
     * @param bool|null $web_application_firewall web_application_firewall
     *
     * @return self
     */
    public function setWebApplicationFirewall($web_application_firewall)
    {
        if (is_null($web_application_firewall)) {
            throw new \InvalidArgumentException('non-nullable web_application_firewall cannot be null');
        }
        $this->container['web_application_firewall'] = $web_application_firewall;

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


