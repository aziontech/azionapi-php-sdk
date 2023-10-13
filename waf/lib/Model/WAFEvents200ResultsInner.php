<?php
/**
 * WAFEvents200ResultsInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Web Application Firewall API
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
 * WAFEvents200ResultsInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WAFEvents200ResultsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WAFEvents200_results_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'country_count' => 'int',
        'top_10_countries' => 'string[]',
        'top_10_ips' => 'string[]',
        'hit_count' => 'int',
        'rule_id' => 'int',
        'ip_count' => 'int',
        'match_zone' => 'string',
        'path_count' => 'int',
        'matches_on' => 'string',
        'rule_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'country_count' => 'int64',
        'top_10_countries' => null,
        'top_10_ips' => null,
        'hit_count' => 'int64',
        'rule_id' => 'int64',
        'ip_count' => 'int64',
        'match_zone' => null,
        'path_count' => 'int64',
        'matches_on' => null,
        'rule_description' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'country_count' => false,
		'top_10_countries' => false,
		'top_10_ips' => false,
		'hit_count' => false,
		'rule_id' => false,
		'ip_count' => false,
		'match_zone' => false,
		'path_count' => false,
		'matches_on' => false,
		'rule_description' => false
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
        'country_count' => 'country_count',
        'top_10_countries' => 'top_10_countries',
        'top_10_ips' => 'top_10_ips',
        'hit_count' => 'hit_count',
        'rule_id' => 'rule_id',
        'ip_count' => 'ip_count',
        'match_zone' => 'match_zone',
        'path_count' => 'path_count',
        'matches_on' => 'matches_on',
        'rule_description' => 'rule_description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country_count' => 'setCountryCount',
        'top_10_countries' => 'setTop10Countries',
        'top_10_ips' => 'setTop10Ips',
        'hit_count' => 'setHitCount',
        'rule_id' => 'setRuleId',
        'ip_count' => 'setIpCount',
        'match_zone' => 'setMatchZone',
        'path_count' => 'setPathCount',
        'matches_on' => 'setMatchesOn',
        'rule_description' => 'setRuleDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country_count' => 'getCountryCount',
        'top_10_countries' => 'getTop10Countries',
        'top_10_ips' => 'getTop10Ips',
        'hit_count' => 'getHitCount',
        'rule_id' => 'getRuleId',
        'ip_count' => 'getIpCount',
        'match_zone' => 'getMatchZone',
        'path_count' => 'getPathCount',
        'matches_on' => 'getMatchesOn',
        'rule_description' => 'getRuleDescription'
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

    public const MATCH_ZONE_PATH = 'path';
    public const MATCH_ZONE_QUERY_STRING = 'query_string';
    public const MATCH_ZONE_REQUEST_HEADER = 'request_header';
    public const MATCH_ZONE_REQUEST_BODY = 'request_body';
    public const MATCH_ZONE_RAW_BODY = 'raw_body';
    public const MATCH_ZONE_FILE_NAME = 'file_name';
    public const MATCH_ZONE_COOKIE = 'cookie';
    public const MATCHES_ON_NAME = 'name';
    public const MATCHES_ON_VALUE = 'value';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMatchZoneAllowableValues()
    {
        return [
            self::MATCH_ZONE_PATH,
            self::MATCH_ZONE_QUERY_STRING,
            self::MATCH_ZONE_REQUEST_HEADER,
            self::MATCH_ZONE_REQUEST_BODY,
            self::MATCH_ZONE_RAW_BODY,
            self::MATCH_ZONE_FILE_NAME,
            self::MATCH_ZONE_COOKIE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMatchesOnAllowableValues()
    {
        return [
            self::MATCHES_ON_NAME,
            self::MATCHES_ON_VALUE,
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
        $this->setIfExists('country_count', $data ?? [], null);
        $this->setIfExists('top_10_countries', $data ?? [], null);
        $this->setIfExists('top_10_ips', $data ?? [], null);
        $this->setIfExists('hit_count', $data ?? [], null);
        $this->setIfExists('rule_id', $data ?? [], null);
        $this->setIfExists('ip_count', $data ?? [], null);
        $this->setIfExists('match_zone', $data ?? [], null);
        $this->setIfExists('path_count', $data ?? [], null);
        $this->setIfExists('matches_on', $data ?? [], null);
        $this->setIfExists('rule_description', $data ?? [], null);
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

        $allowedValues = $this->getMatchZoneAllowableValues();
        if (!is_null($this->container['match_zone']) && !in_array($this->container['match_zone'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'match_zone', must be one of '%s'",
                $this->container['match_zone'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMatchesOnAllowableValues();
        if (!is_null($this->container['matches_on']) && !in_array($this->container['matches_on'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'matches_on', must be one of '%s'",
                $this->container['matches_on'],
                implode("', '", $allowedValues)
            );
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
     * Gets country_count
     *
     * @return int|null
     */
    public function getCountryCount()
    {
        return $this->container['country_count'];
    }

    /**
     * Sets country_count
     *
     * @param int|null $country_count country_count
     *
     * @return self
     */
    public function setCountryCount($country_count)
    {
        if (is_null($country_count)) {
            throw new \InvalidArgumentException('non-nullable country_count cannot be null');
        }
        $this->container['country_count'] = $country_count;

        return $this;
    }

    /**
     * Gets top_10_countries
     *
     * @return string[]|null
     */
    public function getTop10Countries()
    {
        return $this->container['top_10_countries'];
    }

    /**
     * Sets top_10_countries
     *
     * @param string[]|null $top_10_countries top_10_countries
     *
     * @return self
     */
    public function setTop10Countries($top_10_countries)
    {
        if (is_null($top_10_countries)) {
            throw new \InvalidArgumentException('non-nullable top_10_countries cannot be null');
        }
        $this->container['top_10_countries'] = $top_10_countries;

        return $this;
    }

    /**
     * Gets top_10_ips
     *
     * @return string[]|null
     */
    public function getTop10Ips()
    {
        return $this->container['top_10_ips'];
    }

    /**
     * Sets top_10_ips
     *
     * @param string[]|null $top_10_ips top_10_ips
     *
     * @return self
     */
    public function setTop10Ips($top_10_ips)
    {
        if (is_null($top_10_ips)) {
            throw new \InvalidArgumentException('non-nullable top_10_ips cannot be null');
        }
        $this->container['top_10_ips'] = $top_10_ips;

        return $this;
    }

    /**
     * Gets hit_count
     *
     * @return int|null
     */
    public function getHitCount()
    {
        return $this->container['hit_count'];
    }

    /**
     * Sets hit_count
     *
     * @param int|null $hit_count hit_count
     *
     * @return self
     */
    public function setHitCount($hit_count)
    {
        if (is_null($hit_count)) {
            throw new \InvalidArgumentException('non-nullable hit_count cannot be null');
        }
        $this->container['hit_count'] = $hit_count;

        return $this;
    }

    /**
     * Gets rule_id
     *
     * @return int|null
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     *
     * @param int|null $rule_id rule_id
     *
     * @return self
     */
    public function setRuleId($rule_id)
    {
        if (is_null($rule_id)) {
            throw new \InvalidArgumentException('non-nullable rule_id cannot be null');
        }
        $this->container['rule_id'] = $rule_id;

        return $this;
    }

    /**
     * Gets ip_count
     *
     * @return int|null
     */
    public function getIpCount()
    {
        return $this->container['ip_count'];
    }

    /**
     * Sets ip_count
     *
     * @param int|null $ip_count ip_count
     *
     * @return self
     */
    public function setIpCount($ip_count)
    {
        if (is_null($ip_count)) {
            throw new \InvalidArgumentException('non-nullable ip_count cannot be null');
        }
        $this->container['ip_count'] = $ip_count;

        return $this;
    }

    /**
     * Gets match_zone
     *
     * @return string|null
     */
    public function getMatchZone()
    {
        return $this->container['match_zone'];
    }

    /**
     * Sets match_zone
     *
     * @param string|null $match_zone match_zone
     *
     * @return self
     */
    public function setMatchZone($match_zone)
    {
        if (is_null($match_zone)) {
            throw new \InvalidArgumentException('non-nullable match_zone cannot be null');
        }
        $allowedValues = $this->getMatchZoneAllowableValues();
        if (!in_array($match_zone, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'match_zone', must be one of '%s'",
                    $match_zone,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['match_zone'] = $match_zone;

        return $this;
    }

    /**
     * Gets path_count
     *
     * @return int|null
     */
    public function getPathCount()
    {
        return $this->container['path_count'];
    }

    /**
     * Sets path_count
     *
     * @param int|null $path_count path_count
     *
     * @return self
     */
    public function setPathCount($path_count)
    {
        if (is_null($path_count)) {
            throw new \InvalidArgumentException('non-nullable path_count cannot be null');
        }
        $this->container['path_count'] = $path_count;

        return $this;
    }

    /**
     * Gets matches_on
     *
     * @return string|null
     */
    public function getMatchesOn()
    {
        return $this->container['matches_on'];
    }

    /**
     * Sets matches_on
     *
     * @param string|null $matches_on matches_on
     *
     * @return self
     */
    public function setMatchesOn($matches_on)
    {
        if (is_null($matches_on)) {
            throw new \InvalidArgumentException('non-nullable matches_on cannot be null');
        }
        $allowedValues = $this->getMatchesOnAllowableValues();
        if (!in_array($matches_on, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'matches_on', must be one of '%s'",
                    $matches_on,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['matches_on'] = $matches_on;

        return $this;
    }

    /**
     * Gets rule_description
     *
     * @return string|null
     */
    public function getRuleDescription()
    {
        return $this->container['rule_description'];
    }

    /**
     * Sets rule_description
     *
     * @param string|null $rule_description rule_description
     *
     * @return self
     */
    public function setRuleDescription($rule_description)
    {
        if (is_null($rule_description)) {
            throw new \InvalidArgumentException('non-nullable rule_description cannot be null');
        }
        $this->container['rule_description'] = $rule_description;

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

