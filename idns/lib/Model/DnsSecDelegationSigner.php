<?php
/**
 * DnsSecDelegationSigner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Intelligent DNS API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
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
 * DnsSecDelegationSigner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DnsSecDelegationSigner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DnsSec_delegation_signer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'digest_type' => '\OpenAPI\Client\Model\DnsSecDelegationSignerDigestType',
        'algorithm_type' => '\OpenAPI\Client\Model\DnsSecDelegationSignerDigestType',
        'digest' => 'string',
        'key_tag' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'digest_type' => null,
        'algorithm_type' => null,
        'digest' => null,
        'key_tag' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'digest_type' => false,
		'algorithm_type' => false,
		'digest' => false,
		'key_tag' => false
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
        'digest_type' => 'digest_type',
        'algorithm_type' => 'algorithm_type',
        'digest' => 'digest',
        'key_tag' => 'key_tag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'digest_type' => 'setDigestType',
        'algorithm_type' => 'setAlgorithmType',
        'digest' => 'setDigest',
        'key_tag' => 'setKeyTag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'digest_type' => 'getDigestType',
        'algorithm_type' => 'getAlgorithmType',
        'digest' => 'getDigest',
        'key_tag' => 'getKeyTag'
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
        $this->setIfExists('digest_type', $data ?? [], null);
        $this->setIfExists('algorithm_type', $data ?? [], null);
        $this->setIfExists('digest', $data ?? [], null);
        $this->setIfExists('key_tag', $data ?? [], null);
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

        if (!is_null($this->container['key_tag']) && ($this->container['key_tag'] > 65535)) {
            $invalidProperties[] = "invalid value for 'key_tag', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['key_tag']) && ($this->container['key_tag'] < 1)) {
            $invalidProperties[] = "invalid value for 'key_tag', must be bigger than or equal to 1.";
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
     * Gets digest_type
     *
     * @return \OpenAPI\Client\Model\DnsSecDelegationSignerDigestType|null
     */
    public function getDigestType()
    {
        return $this->container['digest_type'];
    }

    /**
     * Sets digest_type
     *
     * @param \OpenAPI\Client\Model\DnsSecDelegationSignerDigestType|null $digest_type digest_type
     *
     * @return self
     */
    public function setDigestType($digest_type)
    {
        if (is_null($digest_type)) {
            throw new \InvalidArgumentException('non-nullable digest_type cannot be null');
        }
        $this->container['digest_type'] = $digest_type;

        return $this;
    }

    /**
     * Gets algorithm_type
     *
     * @return \OpenAPI\Client\Model\DnsSecDelegationSignerDigestType|null
     */
    public function getAlgorithmType()
    {
        return $this->container['algorithm_type'];
    }

    /**
     * Sets algorithm_type
     *
     * @param \OpenAPI\Client\Model\DnsSecDelegationSignerDigestType|null $algorithm_type algorithm_type
     *
     * @return self
     */
    public function setAlgorithmType($algorithm_type)
    {
        if (is_null($algorithm_type)) {
            throw new \InvalidArgumentException('non-nullable algorithm_type cannot be null');
        }
        $this->container['algorithm_type'] = $algorithm_type;

        return $this;
    }

    /**
     * Gets digest
     *
     * @return string|null
     */
    public function getDigest()
    {
        return $this->container['digest'];
    }

    /**
     * Sets digest
     *
     * @param string|null $digest digest
     *
     * @return self
     */
    public function setDigest($digest)
    {
        if (is_null($digest)) {
            throw new \InvalidArgumentException('non-nullable digest cannot be null');
        }
        $this->container['digest'] = $digest;

        return $this;
    }

    /**
     * Gets key_tag
     *
     * @return int|null
     */
    public function getKeyTag()
    {
        return $this->container['key_tag'];
    }

    /**
     * Sets key_tag
     *
     * @param int|null $key_tag key_tag
     *
     * @return self
     */
    public function setKeyTag($key_tag)
    {
        if (is_null($key_tag)) {
            throw new \InvalidArgumentException('non-nullable key_tag cannot be null');
        }

        if (($key_tag > 65535)) {
            throw new \InvalidArgumentException('invalid value for $key_tag when calling DnsSecDelegationSigner., must be smaller than or equal to 65535.');
        }
        if (($key_tag < 1)) {
            throw new \InvalidArgumentException('invalid value for $key_tag when calling DnsSecDelegationSigner., must be bigger than or equal to 1.');
        }

        $this->container['key_tag'] = $key_tag;

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


