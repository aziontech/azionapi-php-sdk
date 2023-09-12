<?php
/**
 * EndpointAzureBlobStorage
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Data Streaming - OpenAPI
 *
 * The Data Streaming API allows you to manage your existing data streamings and templates. Data Streaming allows you to feed your stream processing, SIEM, and big data platforms with the event logs from your applications on Azion in real time.
 *
 * The version of the OpenAPI document: 1.0.0
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
 * EndpointAzureBlobStorage Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EndpointAzureBlobStorage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Endpoint_Azure_Blob_Storage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'endpoint_type' => 'string',
        'storage_account' => 'string',
        'container_name' => 'string',
        'blob_sas_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'endpoint_type' => null,
        'storage_account' => null,
        'container_name' => null,
        'blob_sas_token' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'endpoint_type' => false,
		'storage_account' => false,
		'container_name' => false,
		'blob_sas_token' => false
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
        'endpoint_type' => 'endpoint_type',
        'storage_account' => 'storage_account',
        'container_name' => 'container_name',
        'blob_sas_token' => 'blob_sas_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'endpoint_type' => 'setEndpointType',
        'storage_account' => 'setStorageAccount',
        'container_name' => 'setContainerName',
        'blob_sas_token' => 'setBlobSasToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'endpoint_type' => 'getEndpointType',
        'storage_account' => 'getStorageAccount',
        'container_name' => 'getContainerName',
        'blob_sas_token' => 'getBlobSasToken'
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
        $this->setIfExists('endpoint_type', $data ?? [], null);
        $this->setIfExists('storage_account', $data ?? [], null);
        $this->setIfExists('container_name', $data ?? [], null);
        $this->setIfExists('blob_sas_token', $data ?? [], null);
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

        if (!is_null($this->container['blob_sas_token']) && !preg_match("/[a-zA-Z0-9]{15}/", $this->container['blob_sas_token'])) {
            $invalidProperties[] = "invalid value for 'blob_sas_token', must be conform to the pattern /[a-zA-Z0-9]{15}/.";
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
     * Gets endpoint_type
     *
     * @return string|null
     */
    public function getEndpointType()
    {
        return $this->container['endpoint_type'];
    }

    /**
     * Sets endpoint_type
     *
     * @param string|null $endpoint_type endpoint_type
     *
     * @return self
     */
    public function setEndpointType($endpoint_type)
    {
        if (is_null($endpoint_type)) {
            throw new \InvalidArgumentException('non-nullable endpoint_type cannot be null');
        }
        $this->container['endpoint_type'] = $endpoint_type;

        return $this;
    }

    /**
     * Gets storage_account
     *
     * @return string|null
     */
    public function getStorageAccount()
    {
        return $this->container['storage_account'];
    }

    /**
     * Sets storage_account
     *
     * @param string|null $storage_account storage_account
     *
     * @return self
     */
    public function setStorageAccount($storage_account)
    {
        if (is_null($storage_account)) {
            throw new \InvalidArgumentException('non-nullable storage_account cannot be null');
        }
        $this->container['storage_account'] = $storage_account;

        return $this;
    }

    /**
     * Gets container_name
     *
     * @return string|null
     */
    public function getContainerName()
    {
        return $this->container['container_name'];
    }

    /**
     * Sets container_name
     *
     * @param string|null $container_name container_name
     *
     * @return self
     */
    public function setContainerName($container_name)
    {
        if (is_null($container_name)) {
            throw new \InvalidArgumentException('non-nullable container_name cannot be null');
        }
        $this->container['container_name'] = $container_name;

        return $this;
    }

    /**
     * Gets blob_sas_token
     *
     * @return string|null
     */
    public function getBlobSasToken()
    {
        return $this->container['blob_sas_token'];
    }

    /**
     * Sets blob_sas_token
     *
     * @param string|null $blob_sas_token blob_sas_token
     *
     * @return self
     */
    public function setBlobSasToken($blob_sas_token)
    {
        if (is_null($blob_sas_token)) {
            throw new \InvalidArgumentException('non-nullable blob_sas_token cannot be null');
        }

        if ((!preg_match("/[a-zA-Z0-9]{15}/", $blob_sas_token))) {
            throw new \InvalidArgumentException("invalid value for \$blob_sas_token when calling EndpointAzureBlobStorage., must conform to the pattern /[a-zA-Z0-9]{15}/.");
        }

        $this->container['blob_sas_token'] = $blob_sas_token;

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


