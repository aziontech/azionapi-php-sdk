<?php
/**
 * StandardDataStreamingPostBody
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
 * StandardDataStreamingPostBody Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StandardDataStreamingPostBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StandardDataStreamingPostBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'template_id' => 'int',
        'data_source' => 'string',
        'active' => 'bool',
        'endpoint' => '\OpenAPI\Client\Model\DataStreamingEndpointTypeStandard',
        'domains_ids' => 'int[]',
        'all_domains' => 'bool'
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
        'template_id' => null,
        'data_source' => null,
        'active' => null,
        'endpoint' => null,
        'domains_ids' => null,
        'all_domains' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'template_id' => false,
		'data_source' => true,
		'active' => true,
		'endpoint' => false,
		'domains_ids' => false,
		'all_domains' => true
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
        'template_id' => 'template_id',
        'data_source' => 'data_source',
        'active' => 'active',
        'endpoint' => 'endpoint',
        'domains_ids' => 'domains_ids',
        'all_domains' => 'all_domains'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'template_id' => 'setTemplateId',
        'data_source' => 'setDataSource',
        'active' => 'setActive',
        'endpoint' => 'setEndpoint',
        'domains_ids' => 'setDomainsIds',
        'all_domains' => 'setAllDomains'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'template_id' => 'getTemplateId',
        'data_source' => 'getDataSource',
        'active' => 'getActive',
        'endpoint' => 'getEndpoint',
        'domains_ids' => 'getDomainsIds',
        'all_domains' => 'getAllDomains'
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

    public const TEMPLATE_ID_2 = 2;
    public const TEMPLATE_ID_4 = 4;
    public const TEMPLATE_ID_86 = 86;
    public const TEMPLATE_ID_184 = 184;
    public const TEMPLATE_ID_251 = 251;
    public const DATA_SOURCE_HTTP = 'http';
    public const DATA_SOURCE_WAF = 'waf';
    public const DATA_SOURCE_CELLS_CONSOLE = 'cells_console';
    public const DATA_SOURCE_RTM_ACTIVITY = 'rtm_activity';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTemplateIdAllowableValues()
    {
        return [
            self::TEMPLATE_ID_2,
            self::TEMPLATE_ID_4,
            self::TEMPLATE_ID_86,
            self::TEMPLATE_ID_184,
            self::TEMPLATE_ID_251,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDataSourceAllowableValues()
    {
        return [
            self::DATA_SOURCE_HTTP,
            self::DATA_SOURCE_WAF,
            self::DATA_SOURCE_CELLS_CONSOLE,
            self::DATA_SOURCE_RTM_ACTIVITY,
        ];
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
        $this->setIfExists('template_id', $data ?? [], null);
        $this->setIfExists('data_source', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], true);
        $this->setIfExists('endpoint', $data ?? [], null);
        $this->setIfExists('domains_ids', $data ?? [], null);
        $this->setIfExists('all_domains', $data ?? [], false);
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

        $allowedValues = $this->getTemplateIdAllowableValues();
        if (!is_null($this->container['template_id']) && !in_array($this->container['template_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'template_id', must be one of '%s'",
                $this->container['template_id'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDataSourceAllowableValues();
        if (!is_null($this->container['data_source']) && !in_array($this->container['data_source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'data_source', must be one of '%s'",
                $this->container['data_source'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['domains_ids']) && (count($this->container['domains_ids']) < 1)) {
            $invalidProperties[] = "invalid value for 'domains_ids', number of items must be greater than or equal to 1.";
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
     * Gets template_id
     *
     * @return int|null
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param int|null $template_id Options:  * `2` - Edge Applications Event Collector  * `4` - WAF Event Collector  * `86` - Edge Functions Event Collector  * `184` - Edge Applications + WAF Event Collector  * `251` - Activity History Collector
     *
     * @return self
     */
    public function setTemplateId($template_id)
    {
        if (is_null($template_id)) {
            throw new \InvalidArgumentException('non-nullable template_id cannot be null');
        }
        $allowedValues = $this->getTemplateIdAllowableValues();
        if (!in_array($template_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'template_id', must be one of '%s'",
                    $template_id,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets data_source
     *
     * @return string|null
     */
    public function getDataSource()
    {
        return $this->container['data_source'];
    }

    /**
     * Sets data_source
     *
     * @param string|null $data_source Options:  * `http` - Edge Applications (default)  * `waf` - WAF Events  * `cells_console` - Edge Functions  * `rtm_activity` - Activity History
     *
     * @return self
     */
    public function setDataSource($data_source)
    {
        if (is_null($data_source)) {
            array_push($this->openAPINullablesSetToNull, 'data_source');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_source', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getDataSourceAllowableValues();
        if (!is_null($data_source) && !in_array($data_source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'data_source', must be one of '%s'",
                    $data_source,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['data_source'] = $data_source;

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
            array_push($this->openAPINullablesSetToNull, 'active');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('active', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets endpoint
     *
     * @return \OpenAPI\Client\Model\DataStreamingEndpointTypeStandard|null
     */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
     * Sets endpoint
     *
     * @param \OpenAPI\Client\Model\DataStreamingEndpointTypeStandard|null $endpoint endpoint
     *
     * @return self
     */
    public function setEndpoint($endpoint)
    {
        if (is_null($endpoint)) {
            throw new \InvalidArgumentException('non-nullable endpoint cannot be null');
        }
        $this->container['endpoint'] = $endpoint;

        return $this;
    }

    /**
     * Gets domains_ids
     *
     * @return int[]|null
     */
    public function getDomainsIds()
    {
        return $this->container['domains_ids'];
    }

    /**
     * Sets domains_ids
     *
     * @param int[]|null $domains_ids Note:  * Field not used with the rtm_activity data source.
     *
     * @return self
     */
    public function setDomainsIds($domains_ids)
    {
        if (is_null($domains_ids)) {
            throw new \InvalidArgumentException('non-nullable domains_ids cannot be null');
        }


        if ((count($domains_ids) < 1)) {
            throw new \InvalidArgumentException('invalid length for $domains_ids when calling StandardDataStreamingPostBody., number of items must be greater than or equal to 1.');
        }
        $this->container['domains_ids'] = $domains_ids;

        return $this;
    }

    /**
     * Gets all_domains
     *
     * @return bool|null
     */
    public function getAllDomains()
    {
        return $this->container['all_domains'];
    }

    /**
     * Sets all_domains
     *
     * @param bool|null $all_domains Note:  * Field not used with the rtm_activity data source.
     *
     * @return self
     */
    public function setAllDomains($all_domains)
    {
        if (is_null($all_domains)) {
            array_push($this->openAPINullablesSetToNull, 'all_domains');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('all_domains', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['all_domains'] = $all_domains;

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


