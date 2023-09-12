<?php
/**
 * ApplicationResults
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Edge Application API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
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
 * ApplicationResults Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApplicationResults implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApplicationResults';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'active' => 'bool',
        'debug_rules' => 'bool',
        'http3' => 'bool',
        'supported_ciphers' => 'string',
        'delivery_protocol' => 'string',
        'http_port' => 'mixed',
        'https_port' => 'mixed',
        'minimum_tls_version' => 'string',
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
        'id' => 'int64',
        'name' => null,
        'active' => null,
        'debug_rules' => null,
        'http3' => null,
        'supported_ciphers' => null,
        'delivery_protocol' => null,
        'http_port' => null,
        'https_port' => null,
        'minimum_tls_version' => null,
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
        'id' => false,
		'name' => false,
		'active' => false,
		'debug_rules' => false,
		'http3' => false,
		'supported_ciphers' => false,
		'delivery_protocol' => false,
		'http_port' => true,
		'https_port' => true,
		'minimum_tls_version' => false,
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
        'id' => 'id',
        'name' => 'name',
        'active' => 'active',
        'debug_rules' => 'debug_rules',
        'http3' => 'http3',
        'supported_ciphers' => 'supported_ciphers',
        'delivery_protocol' => 'delivery_protocol',
        'http_port' => 'http_port',
        'https_port' => 'https_port',
        'minimum_tls_version' => 'minimum_tls_version',
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
        'id' => 'setId',
        'name' => 'setName',
        'active' => 'setActive',
        'debug_rules' => 'setDebugRules',
        'http3' => 'setHttp3',
        'supported_ciphers' => 'setSupportedCiphers',
        'delivery_protocol' => 'setDeliveryProtocol',
        'http_port' => 'setHttpPort',
        'https_port' => 'setHttpsPort',
        'minimum_tls_version' => 'setMinimumTlsVersion',
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
        'id' => 'getId',
        'name' => 'getName',
        'active' => 'getActive',
        'debug_rules' => 'getDebugRules',
        'http3' => 'getHttp3',
        'supported_ciphers' => 'getSupportedCiphers',
        'delivery_protocol' => 'getDeliveryProtocol',
        'http_port' => 'getHttpPort',
        'https_port' => 'getHttpsPort',
        'minimum_tls_version' => 'getMinimumTlsVersion',
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('debug_rules', $data ?? [], null);
        $this->setIfExists('http3', $data ?? [], null);
        $this->setIfExists('supported_ciphers', $data ?? [], null);
        $this->setIfExists('delivery_protocol', $data ?? [], null);
        $this->setIfExists('http_port', $data ?? [], null);
        $this->setIfExists('https_port', $data ?? [], null);
        $this->setIfExists('minimum_tls_version', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['debug_rules'] === null) {
            $invalidProperties[] = "'debug_rules' can't be null";
        }
        if ($this->container['http3'] === null) {
            $invalidProperties[] = "'http3' can't be null";
        }
        if ($this->container['supported_ciphers'] === null) {
            $invalidProperties[] = "'supported_ciphers' can't be null";
        }
        if ($this->container['delivery_protocol'] === null) {
            $invalidProperties[] = "'delivery_protocol' can't be null";
        }
        if ($this->container['http_port'] === null) {
            $invalidProperties[] = "'http_port' can't be null";
        }
        if ($this->container['https_port'] === null) {
            $invalidProperties[] = "'https_port' can't be null";
        }
        if ($this->container['minimum_tls_version'] === null) {
            $invalidProperties[] = "'minimum_tls_version' can't be null";
        }
        if ($this->container['application_acceleration'] === null) {
            $invalidProperties[] = "'application_acceleration' can't be null";
        }
        if ($this->container['caching'] === null) {
            $invalidProperties[] = "'caching' can't be null";
        }
        if ($this->container['device_detection'] === null) {
            $invalidProperties[] = "'device_detection' can't be null";
        }
        if ($this->container['edge_firewall'] === null) {
            $invalidProperties[] = "'edge_firewall' can't be null";
        }
        if ($this->container['edge_functions'] === null) {
            $invalidProperties[] = "'edge_functions' can't be null";
        }
        if ($this->container['image_optimization'] === null) {
            $invalidProperties[] = "'image_optimization' can't be null";
        }
        if ($this->container['l2_caching'] === null) {
            $invalidProperties[] = "'l2_caching' can't be null";
        }
        if ($this->container['load_balancer'] === null) {
            $invalidProperties[] = "'load_balancer' can't be null";
        }
        if ($this->container['raw_logs'] === null) {
            $invalidProperties[] = "'raw_logs' can't be null";
        }
        if ($this->container['web_application_firewall'] === null) {
            $invalidProperties[] = "'web_application_firewall' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

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
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
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
     * Gets debug_rules
     *
     * @return bool
     */
    public function getDebugRules()
    {
        return $this->container['debug_rules'];
    }

    /**
     * Sets debug_rules
     *
     * @param bool $debug_rules debug_rules
     *
     * @return self
     */
    public function setDebugRules($debug_rules)
    {
        if (is_null($debug_rules)) {
            throw new \InvalidArgumentException('non-nullable debug_rules cannot be null');
        }
        $this->container['debug_rules'] = $debug_rules;

        return $this;
    }

    /**
     * Gets http3
     *
     * @return bool
     */
    public function getHttp3()
    {
        return $this->container['http3'];
    }

    /**
     * Sets http3
     *
     * @param bool $http3 http3
     *
     * @return self
     */
    public function setHttp3($http3)
    {
        if (is_null($http3)) {
            throw new \InvalidArgumentException('non-nullable http3 cannot be null');
        }
        $this->container['http3'] = $http3;

        return $this;
    }

    /**
     * Gets supported_ciphers
     *
     * @return string
     */
    public function getSupportedCiphers()
    {
        return $this->container['supported_ciphers'];
    }

    /**
     * Sets supported_ciphers
     *
     * @param string $supported_ciphers supported_ciphers
     *
     * @return self
     */
    public function setSupportedCiphers($supported_ciphers)
    {
        if (is_null($supported_ciphers)) {
            throw new \InvalidArgumentException('non-nullable supported_ciphers cannot be null');
        }
        $this->container['supported_ciphers'] = $supported_ciphers;

        return $this;
    }

    /**
     * Gets delivery_protocol
     *
     * @return string
     */
    public function getDeliveryProtocol()
    {
        return $this->container['delivery_protocol'];
    }

    /**
     * Sets delivery_protocol
     *
     * @param string $delivery_protocol delivery_protocol
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
     * @return mixed
     */
    public function getHttpPort()
    {
        return $this->container['http_port'];
    }

    /**
     * Sets http_port
     *
     * @param mixed $http_port http_port
     *
     * @return self
     */
    public function setHttpPort($http_port)
    {
        if (is_null($http_port)) {
            array_push($this->openAPINullablesSetToNull, 'http_port');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('http_port', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['http_port'] = $http_port;

        return $this;
    }

    /**
     * Gets https_port
     *
     * @return mixed
     */
    public function getHttpsPort()
    {
        return $this->container['https_port'];
    }

    /**
     * Sets https_port
     *
     * @param mixed $https_port https_port
     *
     * @return self
     */
    public function setHttpsPort($https_port)
    {
        if (is_null($https_port)) {
            array_push($this->openAPINullablesSetToNull, 'https_port');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('https_port', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['https_port'] = $https_port;

        return $this;
    }

    /**
     * Gets minimum_tls_version
     *
     * @return string
     */
    public function getMinimumTlsVersion()
    {
        return $this->container['minimum_tls_version'];
    }

    /**
     * Sets minimum_tls_version
     *
     * @param string $minimum_tls_version minimum_tls_version
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
     * Gets application_acceleration
     *
     * @return bool
     */
    public function getApplicationAcceleration()
    {
        return $this->container['application_acceleration'];
    }

    /**
     * Sets application_acceleration
     *
     * @param bool $application_acceleration application_acceleration
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
     * @return bool
     */
    public function getCaching()
    {
        return $this->container['caching'];
    }

    /**
     * Sets caching
     *
     * @param bool $caching caching
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
     * @return bool
     */
    public function getDeviceDetection()
    {
        return $this->container['device_detection'];
    }

    /**
     * Sets device_detection
     *
     * @param bool $device_detection device_detection
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
     * @return bool
     */
    public function getEdgeFirewall()
    {
        return $this->container['edge_firewall'];
    }

    /**
     * Sets edge_firewall
     *
     * @param bool $edge_firewall edge_firewall
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
     * @return bool
     */
    public function getEdgeFunctions()
    {
        return $this->container['edge_functions'];
    }

    /**
     * Sets edge_functions
     *
     * @param bool $edge_functions edge_functions
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
     * @return bool
     */
    public function getImageOptimization()
    {
        return $this->container['image_optimization'];
    }

    /**
     * Sets image_optimization
     *
     * @param bool $image_optimization image_optimization
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
     * @return bool
     */
    public function getL2Caching()
    {
        return $this->container['l2_caching'];
    }

    /**
     * Sets l2_caching
     *
     * @param bool $l2_caching l2_caching
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
     * @return bool
     */
    public function getLoadBalancer()
    {
        return $this->container['load_balancer'];
    }

    /**
     * Sets load_balancer
     *
     * @param bool $load_balancer load_balancer
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
     * @return bool
     */
    public function getRawLogs()
    {
        return $this->container['raw_logs'];
    }

    /**
     * Sets raw_logs
     *
     * @param bool $raw_logs raw_logs
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
     * @return bool
     */
    public function getWebApplicationFirewall()
    {
        return $this->container['web_application_firewall'];
    }

    /**
     * Sets web_application_firewall
     *
     * @param bool $web_application_firewall web_application_firewall
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


