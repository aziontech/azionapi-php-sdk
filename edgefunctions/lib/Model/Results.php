<?php
/**
 * Results
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Edge Function
 *
 * Azion Edge Function API
 *
 * The version of the OpenAPI document: 3.0
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
 * Results Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Results implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Results';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'language' => 'string',
        'code' => 'string',
        'json_args' => 'mixed',
        'function_to_run' => 'string',
        'initiator_type' => 'string',
        'active' => 'bool',
        'last_editor' => 'string',
        'modified' => 'string',
        'reference_count' => 'int'
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
        'language' => null,
        'code' => null,
        'json_args' => null,
        'function_to_run' => null,
        'initiator_type' => null,
        'active' => null,
        'last_editor' => null,
        'modified' => null,
        'reference_count' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'language' => false,
		'code' => false,
		'json_args' => true,
		'function_to_run' => false,
		'initiator_type' => false,
		'active' => false,
		'last_editor' => false,
		'modified' => false,
		'reference_count' => false
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
        'language' => 'language',
        'code' => 'code',
        'json_args' => 'json_args',
        'function_to_run' => 'function_to_run',
        'initiator_type' => 'initiator_type',
        'active' => 'active',
        'last_editor' => 'last_editor',
        'modified' => 'modified',
        'reference_count' => 'reference_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'language' => 'setLanguage',
        'code' => 'setCode',
        'json_args' => 'setJsonArgs',
        'function_to_run' => 'setFunctionToRun',
        'initiator_type' => 'setInitiatorType',
        'active' => 'setActive',
        'last_editor' => 'setLastEditor',
        'modified' => 'setModified',
        'reference_count' => 'setReferenceCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'language' => 'getLanguage',
        'code' => 'getCode',
        'json_args' => 'getJsonArgs',
        'function_to_run' => 'getFunctionToRun',
        'initiator_type' => 'getInitiatorType',
        'active' => 'getActive',
        'last_editor' => 'getLastEditor',
        'modified' => 'getModified',
        'reference_count' => 'getReferenceCount'
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
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('json_args', $data ?? [], null);
        $this->setIfExists('function_to_run', $data ?? [], null);
        $this->setIfExists('initiator_type', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('last_editor', $data ?? [], null);
        $this->setIfExists('modified', $data ?? [], null);
        $this->setIfExists('reference_count', $data ?? [], null);
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
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
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets json_args
     *
     * @return mixed|null
     */
    public function getJsonArgs()
    {
        return $this->container['json_args'];
    }

    /**
     * Sets json_args
     *
     * @param mixed|null $json_args json_args
     *
     * @return self
     */
    public function setJsonArgs($json_args)
    {
        if (is_null($json_args)) {
            array_push($this->openAPINullablesSetToNull, 'json_args');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('json_args', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['json_args'] = $json_args;

        return $this;
    }

    /**
     * Gets function_to_run
     *
     * @return string|null
     */
    public function getFunctionToRun()
    {
        return $this->container['function_to_run'];
    }

    /**
     * Sets function_to_run
     *
     * @param string|null $function_to_run function_to_run
     *
     * @return self
     */
    public function setFunctionToRun($function_to_run)
    {
        if (is_null($function_to_run)) {
            throw new \InvalidArgumentException('non-nullable function_to_run cannot be null');
        }
        $this->container['function_to_run'] = $function_to_run;

        return $this;
    }

    /**
     * Gets initiator_type
     *
     * @return string|null
     */
    public function getInitiatorType()
    {
        return $this->container['initiator_type'];
    }

    /**
     * Sets initiator_type
     *
     * @param string|null $initiator_type initiator_type
     *
     * @return self
     */
    public function setInitiatorType($initiator_type)
    {
        if (is_null($initiator_type)) {
            throw new \InvalidArgumentException('non-nullable initiator_type cannot be null');
        }
        $this->container['initiator_type'] = $initiator_type;

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
     * Gets last_editor
     *
     * @return string|null
     */
    public function getLastEditor()
    {
        return $this->container['last_editor'];
    }

    /**
     * Sets last_editor
     *
     * @param string|null $last_editor last_editor
     *
     * @return self
     */
    public function setLastEditor($last_editor)
    {
        if (is_null($last_editor)) {
            throw new \InvalidArgumentException('non-nullable last_editor cannot be null');
        }
        $this->container['last_editor'] = $last_editor;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return string|null
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param string|null $modified modified
     *
     * @return self
     */
    public function setModified($modified)
    {
        if (is_null($modified)) {
            throw new \InvalidArgumentException('non-nullable modified cannot be null');
        }
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets reference_count
     *
     * @return int|null
     */
    public function getReferenceCount()
    {
        return $this->container['reference_count'];
    }

    /**
     * Sets reference_count
     *
     * @param int|null $reference_count reference_count
     *
     * @return self
     */
    public function setReferenceCount($reference_count)
    {
        if (is_null($reference_count)) {
            throw new \InvalidArgumentException('non-nullable reference_count cannot be null');
        }
        $this->container['reference_count'] = $reference_count;

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


