<?php
/**
 * CreateOriginsRequest
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
 * OpenAPI Generator version: 7.0.1
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
 * CreateOriginsRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateOriginsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateOriginsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'origin_type' => 'string',
        'addresses' => '\OpenAPI\Client\Model\CreateOriginsRequestAddresses[]',
        'origin_protocol_policy' => 'string',
        'host_header' => 'string',
        'origin_path' => 'string',
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
        'name' => null,
        'origin_type' => null,
        'addresses' => null,
        'origin_protocol_policy' => null,
        'host_header' => null,
        'origin_path' => null,
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
        'name' => false,
		'origin_type' => false,
		'addresses' => false,
		'origin_protocol_policy' => false,
		'host_header' => false,
		'origin_path' => false,
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
        'name' => 'name',
        'origin_type' => 'origin_type',
        'addresses' => 'addresses',
        'origin_protocol_policy' => 'origin_protocol_policy',
        'host_header' => 'host_header',
        'origin_path' => 'origin_path',
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
        'name' => 'setName',
        'origin_type' => 'setOriginType',
        'addresses' => 'setAddresses',
        'origin_protocol_policy' => 'setOriginProtocolPolicy',
        'host_header' => 'setHostHeader',
        'origin_path' => 'setOriginPath',
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
        'name' => 'getName',
        'origin_type' => 'getOriginType',
        'addresses' => 'getAddresses',
        'origin_protocol_policy' => 'getOriginProtocolPolicy',
        'host_header' => 'getHostHeader',
        'origin_path' => 'getOriginPath',
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('origin_type', $data ?? [], null);
        $this->setIfExists('addresses', $data ?? [], null);
        $this->setIfExists('origin_protocol_policy', $data ?? [], null);
        $this->setIfExists('host_header', $data ?? [], null);
        $this->setIfExists('origin_path', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['addresses'] === null) {
            $invalidProperties[] = "'addresses' can't be null";
        }
        if ($this->container['host_header'] === null) {
            $invalidProperties[] = "'host_header' can't be null";
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
     * @return \OpenAPI\Client\Model\CreateOriginsRequestAddresses[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \OpenAPI\Client\Model\CreateOriginsRequestAddresses[] $addresses addresses
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


