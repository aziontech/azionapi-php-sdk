<?php
/**
 * ApplicationCachePatchRequest
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
 * ApplicationCachePatchRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApplicationCachePatchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApplicationCachePatchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'browser_cache_settings' => 'string',
        'browser_cache_settings_maximum_ttl' => 'int',
        'cdn_cache_settings' => 'string',
        'adaptive_delivery_action' => 'string',
        'enable_caching_for_options' => 'bool',
        'cdn_cache_settings_maximum_ttl' => 'int',
        'cache_by_query_string' => 'string',
        'query_string_fields' => 'string[]',
        'enable_query_string_sort' => 'bool',
        'cache_by_cookies' => 'string',
        'cookie_names' => 'string[]',
        'enable_caching_for_post' => 'bool',
        'l2_caching_enabled' => 'bool',
        'is_slice_configuration_enabled' => 'bool',
        'is_slice_edge_caching_enabled' => 'bool',
        'is_slice_l2_caching_enabled' => 'bool',
        'slice_configuration_range' => 'int'
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
        'browser_cache_settings' => null,
        'browser_cache_settings_maximum_ttl' => 'int64',
        'cdn_cache_settings' => null,
        'adaptive_delivery_action' => null,
        'enable_caching_for_options' => null,
        'cdn_cache_settings_maximum_ttl' => 'int64',
        'cache_by_query_string' => null,
        'query_string_fields' => null,
        'enable_query_string_sort' => null,
        'cache_by_cookies' => null,
        'cookie_names' => null,
        'enable_caching_for_post' => null,
        'l2_caching_enabled' => null,
        'is_slice_configuration_enabled' => null,
        'is_slice_edge_caching_enabled' => null,
        'is_slice_l2_caching_enabled' => null,
        'slice_configuration_range' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'browser_cache_settings' => false,
		'browser_cache_settings_maximum_ttl' => false,
		'cdn_cache_settings' => false,
		'adaptive_delivery_action' => false,
		'enable_caching_for_options' => false,
		'cdn_cache_settings_maximum_ttl' => false,
		'cache_by_query_string' => false,
		'query_string_fields' => false,
		'enable_query_string_sort' => false,
		'cache_by_cookies' => false,
		'cookie_names' => false,
		'enable_caching_for_post' => false,
		'l2_caching_enabled' => false,
		'is_slice_configuration_enabled' => false,
		'is_slice_edge_caching_enabled' => false,
		'is_slice_l2_caching_enabled' => false,
		'slice_configuration_range' => false
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
        'browser_cache_settings' => 'browser_cache_settings',
        'browser_cache_settings_maximum_ttl' => 'browser_cache_settings_maximum_ttl',
        'cdn_cache_settings' => 'cdn_cache_settings',
        'adaptive_delivery_action' => 'adaptive_delivery_action',
        'enable_caching_for_options' => 'enable_caching_for_options',
        'cdn_cache_settings_maximum_ttl' => 'cdn_cache_settings_maximum_ttl',
        'cache_by_query_string' => 'cache_by_query_string',
        'query_string_fields' => 'query_string_fields',
        'enable_query_string_sort' => 'enable_query_string_sort',
        'cache_by_cookies' => 'cache_by_cookies',
        'cookie_names' => 'cookie_names',
        'enable_caching_for_post' => 'enable_caching_for_post',
        'l2_caching_enabled' => 'l2_caching_enabled',
        'is_slice_configuration_enabled' => 'is_slice_configuration_enabled',
        'is_slice_edge_caching_enabled' => 'is_slice_edge_caching_enabled',
        'is_slice_l2_caching_enabled' => 'is_slice_l2_caching_enabled',
        'slice_configuration_range' => 'slice_configuration_range'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'browser_cache_settings' => 'setBrowserCacheSettings',
        'browser_cache_settings_maximum_ttl' => 'setBrowserCacheSettingsMaximumTtl',
        'cdn_cache_settings' => 'setCdnCacheSettings',
        'adaptive_delivery_action' => 'setAdaptiveDeliveryAction',
        'enable_caching_for_options' => 'setEnableCachingForOptions',
        'cdn_cache_settings_maximum_ttl' => 'setCdnCacheSettingsMaximumTtl',
        'cache_by_query_string' => 'setCacheByQueryString',
        'query_string_fields' => 'setQueryStringFields',
        'enable_query_string_sort' => 'setEnableQueryStringSort',
        'cache_by_cookies' => 'setCacheByCookies',
        'cookie_names' => 'setCookieNames',
        'enable_caching_for_post' => 'setEnableCachingForPost',
        'l2_caching_enabled' => 'setL2CachingEnabled',
        'is_slice_configuration_enabled' => 'setIsSliceConfigurationEnabled',
        'is_slice_edge_caching_enabled' => 'setIsSliceEdgeCachingEnabled',
        'is_slice_l2_caching_enabled' => 'setIsSliceL2CachingEnabled',
        'slice_configuration_range' => 'setSliceConfigurationRange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'browser_cache_settings' => 'getBrowserCacheSettings',
        'browser_cache_settings_maximum_ttl' => 'getBrowserCacheSettingsMaximumTtl',
        'cdn_cache_settings' => 'getCdnCacheSettings',
        'adaptive_delivery_action' => 'getAdaptiveDeliveryAction',
        'enable_caching_for_options' => 'getEnableCachingForOptions',
        'cdn_cache_settings_maximum_ttl' => 'getCdnCacheSettingsMaximumTtl',
        'cache_by_query_string' => 'getCacheByQueryString',
        'query_string_fields' => 'getQueryStringFields',
        'enable_query_string_sort' => 'getEnableQueryStringSort',
        'cache_by_cookies' => 'getCacheByCookies',
        'cookie_names' => 'getCookieNames',
        'enable_caching_for_post' => 'getEnableCachingForPost',
        'l2_caching_enabled' => 'getL2CachingEnabled',
        'is_slice_configuration_enabled' => 'getIsSliceConfigurationEnabled',
        'is_slice_edge_caching_enabled' => 'getIsSliceEdgeCachingEnabled',
        'is_slice_l2_caching_enabled' => 'getIsSliceL2CachingEnabled',
        'slice_configuration_range' => 'getSliceConfigurationRange'
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
        $this->setIfExists('browser_cache_settings', $data ?? [], null);
        $this->setIfExists('browser_cache_settings_maximum_ttl', $data ?? [], null);
        $this->setIfExists('cdn_cache_settings', $data ?? [], null);
        $this->setIfExists('adaptive_delivery_action', $data ?? [], null);
        $this->setIfExists('enable_caching_for_options', $data ?? [], null);
        $this->setIfExists('cdn_cache_settings_maximum_ttl', $data ?? [], null);
        $this->setIfExists('cache_by_query_string', $data ?? [], null);
        $this->setIfExists('query_string_fields', $data ?? [], null);
        $this->setIfExists('enable_query_string_sort', $data ?? [], null);
        $this->setIfExists('cache_by_cookies', $data ?? [], null);
        $this->setIfExists('cookie_names', $data ?? [], null);
        $this->setIfExists('enable_caching_for_post', $data ?? [], null);
        $this->setIfExists('l2_caching_enabled', $data ?? [], null);
        $this->setIfExists('is_slice_configuration_enabled', $data ?? [], null);
        $this->setIfExists('is_slice_edge_caching_enabled', $data ?? [], null);
        $this->setIfExists('is_slice_l2_caching_enabled', $data ?? [], null);
        $this->setIfExists('slice_configuration_range', $data ?? [], null);
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
     * Gets adaptive_delivery_action
     *
     * @return string|null
     */
    public function getAdaptiveDeliveryAction()
    {
        return $this->container['adaptive_delivery_action'];
    }

    /**
     * Sets adaptive_delivery_action
     *
     * @param string|null $adaptive_delivery_action adaptive_delivery_action
     *
     * @return self
     */
    public function setAdaptiveDeliveryAction($adaptive_delivery_action)
    {
        if (is_null($adaptive_delivery_action)) {
            throw new \InvalidArgumentException('non-nullable adaptive_delivery_action cannot be null');
        }
        $this->container['adaptive_delivery_action'] = $adaptive_delivery_action;

        return $this;
    }

    /**
     * Gets enable_caching_for_options
     *
     * @return bool|null
     */
    public function getEnableCachingForOptions()
    {
        return $this->container['enable_caching_for_options'];
    }

    /**
     * Sets enable_caching_for_options
     *
     * @param bool|null $enable_caching_for_options enable_caching_for_options
     *
     * @return self
     */
    public function setEnableCachingForOptions($enable_caching_for_options)
    {
        if (is_null($enable_caching_for_options)) {
            throw new \InvalidArgumentException('non-nullable enable_caching_for_options cannot be null');
        }
        $this->container['enable_caching_for_options'] = $enable_caching_for_options;

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
     * Gets cache_by_query_string
     *
     * @return string|null
     */
    public function getCacheByQueryString()
    {
        return $this->container['cache_by_query_string'];
    }

    /**
     * Sets cache_by_query_string
     *
     * @param string|null $cache_by_query_string cache_by_query_string
     *
     * @return self
     */
    public function setCacheByQueryString($cache_by_query_string)
    {
        if (is_null($cache_by_query_string)) {
            throw new \InvalidArgumentException('non-nullable cache_by_query_string cannot be null');
        }
        $this->container['cache_by_query_string'] = $cache_by_query_string;

        return $this;
    }

    /**
     * Gets query_string_fields
     *
     * @return string[]|null
     */
    public function getQueryStringFields()
    {
        return $this->container['query_string_fields'];
    }

    /**
     * Sets query_string_fields
     *
     * @param string[]|null $query_string_fields query_string_fields
     *
     * @return self
     */
    public function setQueryStringFields($query_string_fields)
    {
        if (is_null($query_string_fields)) {
            throw new \InvalidArgumentException('non-nullable query_string_fields cannot be null');
        }
        $this->container['query_string_fields'] = $query_string_fields;

        return $this;
    }

    /**
     * Gets enable_query_string_sort
     *
     * @return bool|null
     */
    public function getEnableQueryStringSort()
    {
        return $this->container['enable_query_string_sort'];
    }

    /**
     * Sets enable_query_string_sort
     *
     * @param bool|null $enable_query_string_sort enable_query_string_sort
     *
     * @return self
     */
    public function setEnableQueryStringSort($enable_query_string_sort)
    {
        if (is_null($enable_query_string_sort)) {
            throw new \InvalidArgumentException('non-nullable enable_query_string_sort cannot be null');
        }
        $this->container['enable_query_string_sort'] = $enable_query_string_sort;

        return $this;
    }

    /**
     * Gets cache_by_cookies
     *
     * @return string|null
     */
    public function getCacheByCookies()
    {
        return $this->container['cache_by_cookies'];
    }

    /**
     * Sets cache_by_cookies
     *
     * @param string|null $cache_by_cookies cache_by_cookies
     *
     * @return self
     */
    public function setCacheByCookies($cache_by_cookies)
    {
        if (is_null($cache_by_cookies)) {
            throw new \InvalidArgumentException('non-nullable cache_by_cookies cannot be null');
        }
        $this->container['cache_by_cookies'] = $cache_by_cookies;

        return $this;
    }

    /**
     * Gets cookie_names
     *
     * @return string[]|null
     */
    public function getCookieNames()
    {
        return $this->container['cookie_names'];
    }

    /**
     * Sets cookie_names
     *
     * @param string[]|null $cookie_names cookie_names
     *
     * @return self
     */
    public function setCookieNames($cookie_names)
    {
        if (is_null($cookie_names)) {
            throw new \InvalidArgumentException('non-nullable cookie_names cannot be null');
        }
        $this->container['cookie_names'] = $cookie_names;

        return $this;
    }

    /**
     * Gets enable_caching_for_post
     *
     * @return bool|null
     */
    public function getEnableCachingForPost()
    {
        return $this->container['enable_caching_for_post'];
    }

    /**
     * Sets enable_caching_for_post
     *
     * @param bool|null $enable_caching_for_post enable_caching_for_post
     *
     * @return self
     */
    public function setEnableCachingForPost($enable_caching_for_post)
    {
        if (is_null($enable_caching_for_post)) {
            throw new \InvalidArgumentException('non-nullable enable_caching_for_post cannot be null');
        }
        $this->container['enable_caching_for_post'] = $enable_caching_for_post;

        return $this;
    }

    /**
     * Gets l2_caching_enabled
     *
     * @return bool|null
     */
    public function getL2CachingEnabled()
    {
        return $this->container['l2_caching_enabled'];
    }

    /**
     * Sets l2_caching_enabled
     *
     * @param bool|null $l2_caching_enabled l2_caching_enabled
     *
     * @return self
     */
    public function setL2CachingEnabled($l2_caching_enabled)
    {
        if (is_null($l2_caching_enabled)) {
            throw new \InvalidArgumentException('non-nullable l2_caching_enabled cannot be null');
        }
        $this->container['l2_caching_enabled'] = $l2_caching_enabled;

        return $this;
    }

    /**
     * Gets is_slice_configuration_enabled
     *
     * @return bool|null
     */
    public function getIsSliceConfigurationEnabled()
    {
        return $this->container['is_slice_configuration_enabled'];
    }

    /**
     * Sets is_slice_configuration_enabled
     *
     * @param bool|null $is_slice_configuration_enabled is_slice_configuration_enabled
     *
     * @return self
     */
    public function setIsSliceConfigurationEnabled($is_slice_configuration_enabled)
    {
        if (is_null($is_slice_configuration_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_slice_configuration_enabled cannot be null');
        }
        $this->container['is_slice_configuration_enabled'] = $is_slice_configuration_enabled;

        return $this;
    }

    /**
     * Gets is_slice_edge_caching_enabled
     *
     * @return bool|null
     */
    public function getIsSliceEdgeCachingEnabled()
    {
        return $this->container['is_slice_edge_caching_enabled'];
    }

    /**
     * Sets is_slice_edge_caching_enabled
     *
     * @param bool|null $is_slice_edge_caching_enabled is_slice_edge_caching_enabled
     *
     * @return self
     */
    public function setIsSliceEdgeCachingEnabled($is_slice_edge_caching_enabled)
    {
        if (is_null($is_slice_edge_caching_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_slice_edge_caching_enabled cannot be null');
        }
        $this->container['is_slice_edge_caching_enabled'] = $is_slice_edge_caching_enabled;

        return $this;
    }

    /**
     * Gets is_slice_l2_caching_enabled
     *
     * @return bool|null
     */
    public function getIsSliceL2CachingEnabled()
    {
        return $this->container['is_slice_l2_caching_enabled'];
    }

    /**
     * Sets is_slice_l2_caching_enabled
     *
     * @param bool|null $is_slice_l2_caching_enabled is_slice_l2_caching_enabled
     *
     * @return self
     */
    public function setIsSliceL2CachingEnabled($is_slice_l2_caching_enabled)
    {
        if (is_null($is_slice_l2_caching_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_slice_l2_caching_enabled cannot be null');
        }
        $this->container['is_slice_l2_caching_enabled'] = $is_slice_l2_caching_enabled;

        return $this;
    }

    /**
     * Gets slice_configuration_range
     *
     * @return int|null
     */
    public function getSliceConfigurationRange()
    {
        return $this->container['slice_configuration_range'];
    }

    /**
     * Sets slice_configuration_range
     *
     * @param int|null $slice_configuration_range slice_configuration_range
     *
     * @return self
     */
    public function setSliceConfigurationRange($slice_configuration_range)
    {
        if (is_null($slice_configuration_range)) {
            throw new \InvalidArgumentException('non-nullable slice_configuration_range cannot be null');
        }
        $this->container['slice_configuration_range'] = $slice_configuration_range;

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


