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
 * Edge Application API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
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
        'hmac_secret_key' => 'string',
        'bucket' => 'string',
        'prefix' => 'string'
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
        'hmac_secret_key' => null,
        'bucket' => null,
        'prefix' => null
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
        'hmac_secret_key' => false,
        'bucket' => false,
        'prefix' => false
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
        'hmac_secret_key' => 'hmac_secret_key',
        'bucket' => 'bucket',
        'prefix' => 'prefix'
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
        'hmac_secret_key' => 'setHmacSecretKey',
        'bucket' => 'setBucket',
        'prefix' => 'setPrefix'
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
        'hmac_secret_key' => 'getHmacSecretKey',
        'bucket' => 'getBucket',
        'prefix' => 'getPrefix'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
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
        $this->setIfExists('bucket', $data ?? [], null);
        $this->setIfExists('prefix', $data ?? [], null);
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
     * Gets origin_id
     *
     * @return int|null
     */
    public function getOriginId()
    {
        return $this->container['origin_id'];
    }

    /**
     * Sets origin_id
     *
     * @param int|null $origin_id origin_id
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
     * @return string|null
     */
    public function getOriginKey()
    {
        return $this->container['origin_key'];
    }

    /**
     * Sets origin_key
     *
     * @param string|null $origin_key origin_key
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
     * Gets addresses
     *
     * @return \OpenAPI\Client\Model\OriginsResultResponseAddresses[]|null
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \OpenAPI\Client\Model\OriginsResultResponseAddresses[]|null $addresses addresses
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
     * Gets is_origin_redirection_enabled
     *
     * @return bool|null
     */
    public function getIsOriginRedirectionEnabled()
    {
        return $this->container['is_origin_redirection_enabled'];
    }

    /**
     * Sets is_origin_redirection_enabled
     *
     * @param bool|null $is_origin_redirection_enabled is_origin_redirection_enabled
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
     * Gets method
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string|null $method method
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
     * @return string|null
     */
    public function getOriginPath()
    {
        return $this->container['origin_path'];
    }

    /**
     * Sets origin_path
     *
     * @param string|null $origin_path origin_path
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
     * @return int|null
     */
    public function getConnectionTimeout()
    {
        return $this->container['connection_timeout'];
    }

    /**
     * Sets connection_timeout
     *
     * @param int|null $connection_timeout connection_timeout
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
     * @return int|null
     */
    public function getTimeoutBetweenBytes()
    {
        return $this->container['timeout_between_bytes'];
    }

    /**
     * Sets timeout_between_bytes
     *
     * @param int|null $timeout_between_bytes timeout_between_bytes
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
     * @return bool|null
     */
    public function getHmacAuthentication()
    {
        return $this->container['hmac_authentication'];
    }

    /**
     * Sets hmac_authentication
     *
     * @param bool|null $hmac_authentication hmac_authentication
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
     * @return string|null
     */
    public function getHmacRegionName()
    {
        return $this->container['hmac_region_name'];
    }

    /**
     * Sets hmac_region_name
     *
     * @param string|null $hmac_region_name hmac_region_name
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
     * @return string|null
     */
    public function getHmacAccessKey()
    {
        return $this->container['hmac_access_key'];
    }

    /**
     * Sets hmac_access_key
     *
     * @param string|null $hmac_access_key hmac_access_key
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
     * @return string|null
     */
    public function getHmacSecretKey()
    {
        return $this->container['hmac_secret_key'];
    }

    /**
     * Sets hmac_secret_key
     *
     * @param string|null $hmac_secret_key hmac_secret_key
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
     * Gets bucket
     *
     * @return string|null
     */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
     * Sets bucket
     *
     * @param string|null $bucket bucket
     *
     * @return self
     */
    public function setBucket($bucket)
    {
        if (is_null($bucket)) {
            throw new \InvalidArgumentException('non-nullable bucket cannot be null');
        }
        $this->container['bucket'] = $bucket;

        return $this;
    }

    /**
     * Gets prefix
     *
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     *
     * @param string|null $prefix prefix
     *
     * @return self
     */
    public function setPrefix($prefix)
    {
        if (is_null($prefix)) {
            throw new \InvalidArgumentException('non-nullable prefix cannot be null');
        }
        $this->container['prefix'] = $prefix;

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


