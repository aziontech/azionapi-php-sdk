<?php
/**
 * DomainData
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Domain API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.5.0
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
 * DomainData Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DomainData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DomainData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'cnames' => 'string[]',
        'cname_access_only' => 'bool',
        'is_active' => 'bool',
        'edge_application_id' => 'int',
        'digital_certificate_id' => 'string',
        'environment' => 'string',
        'is_mtls_enabled' => 'bool',
        'mtls_trusted_ca_certificate_id' => 'int',
        'edge_firewall_id' => 'int',
        'mtls_verification' => 'string',
        'crl_list' => 'int[]'
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
        'cnames' => null,
        'cname_access_only' => null,
        'is_active' => null,
        'edge_application_id' => 'int64',
        'digital_certificate_id' => null,
        'environment' => null,
        'is_mtls_enabled' => null,
        'mtls_trusted_ca_certificate_id' => 'int64',
        'edge_firewall_id' => 'int64',
        'mtls_verification' => null,
        'crl_list' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'cnames' => false,
        'cname_access_only' => false,
        'is_active' => false,
        'edge_application_id' => false,
        'digital_certificate_id' => false,
        'environment' => false,
        'is_mtls_enabled' => false,
        'mtls_trusted_ca_certificate_id' => true,
        'edge_firewall_id' => true,
        'mtls_verification' => false,
        'crl_list' => true
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
        'cnames' => 'cnames',
        'cname_access_only' => 'cname_access_only',
        'is_active' => 'is_active',
        'edge_application_id' => 'edge_application_id',
        'digital_certificate_id' => 'digital_certificate_id',
        'environment' => 'environment',
        'is_mtls_enabled' => 'is_mtls_enabled',
        'mtls_trusted_ca_certificate_id' => 'mtls_trusted_ca_certificate_id',
        'edge_firewall_id' => 'edge_firewall_id',
        'mtls_verification' => 'mtls_verification',
        'crl_list' => 'crl_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'cnames' => 'setCnames',
        'cname_access_only' => 'setCnameAccessOnly',
        'is_active' => 'setIsActive',
        'edge_application_id' => 'setEdgeApplicationId',
        'digital_certificate_id' => 'setDigitalCertificateId',
        'environment' => 'setEnvironment',
        'is_mtls_enabled' => 'setIsMtlsEnabled',
        'mtls_trusted_ca_certificate_id' => 'setMtlsTrustedCaCertificateId',
        'edge_firewall_id' => 'setEdgeFirewallId',
        'mtls_verification' => 'setMtlsVerification',
        'crl_list' => 'setCrlList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'cnames' => 'getCnames',
        'cname_access_only' => 'getCnameAccessOnly',
        'is_active' => 'getIsActive',
        'edge_application_id' => 'getEdgeApplicationId',
        'digital_certificate_id' => 'getDigitalCertificateId',
        'environment' => 'getEnvironment',
        'is_mtls_enabled' => 'getIsMtlsEnabled',
        'mtls_trusted_ca_certificate_id' => 'getMtlsTrustedCaCertificateId',
        'edge_firewall_id' => 'getEdgeFirewallId',
        'mtls_verification' => 'getMtlsVerification',
        'crl_list' => 'getCrlList'
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

    public const ENVIRONMENT_PRODUCTION = 'production';
    public const ENVIRONMENT_PREVIEW = 'preview';
    public const MTLS_VERIFICATION_ENFORCE = 'enforce';
    public const MTLS_VERIFICATION_PERMISSIVE = 'permissive';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEnvironmentAllowableValues()
    {
        return [
            self::ENVIRONMENT_PRODUCTION,
            self::ENVIRONMENT_PREVIEW,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMtlsVerificationAllowableValues()
    {
        return [
            self::MTLS_VERIFICATION_ENFORCE,
            self::MTLS_VERIFICATION_PERMISSIVE,
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
        $this->setIfExists('cnames', $data ?? [], null);
        $this->setIfExists('cname_access_only', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('edge_application_id', $data ?? [], null);
        $this->setIfExists('digital_certificate_id', $data ?? [], null);
        $this->setIfExists('environment', $data ?? [], null);
        $this->setIfExists('is_mtls_enabled', $data ?? [], null);
        $this->setIfExists('mtls_trusted_ca_certificate_id', $data ?? [], null);
        $this->setIfExists('edge_firewall_id', $data ?? [], null);
        $this->setIfExists('mtls_verification', $data ?? [], null);
        $this->setIfExists('crl_list', $data ?? [], null);
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['name']) && !preg_match("/[a-zA-Z0-9$%^&*()-+=\\[\\]{};:?><,|\/]+/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[a-zA-Z0-9$%^&*()-+=\\[\\]{};:?><,|\/]+/.";
        }

        if (!is_null($this->container['edge_application_id']) && ($this->container['edge_application_id'] > -8446744073709551616)) {
            $invalidProperties[] = "invalid value for 'edge_application_id', must be smaller than or equal to -8446744073709551616.";
        }

        if (!is_null($this->container['edge_application_id']) && ($this->container['edge_application_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'edge_application_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['digital_certificate_id']) && (mb_strlen($this->container['digital_certificate_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'digital_certificate_id', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['digital_certificate_id']) && (mb_strlen($this->container['digital_certificate_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'digital_certificate_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['digital_certificate_id']) && !preg_match("/[a-zA-Z0-9$%^&*()-+=\\[\\]{};:?><,|\/]+/", $this->container['digital_certificate_id'])) {
            $invalidProperties[] = "invalid value for 'digital_certificate_id', must be conform to the pattern /[a-zA-Z0-9$%^&*()-+=\\[\\]{};:?><,|\/]+/.";
        }

        $allowedValues = $this->getEnvironmentAllowableValues();
        if (!is_null($this->container['environment']) && !in_array($this->container['environment'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'environment', must be one of '%s'",
                $this->container['environment'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMtlsVerificationAllowableValues();
        if (!is_null($this->container['mtls_verification']) && !in_array($this->container['mtls_verification'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mtls_verification', must be one of '%s'",
                $this->container['mtls_verification'],
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
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling DomainData., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling DomainData., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/[a-zA-Z0-9$%^&*()-+=\\[\\]{};:?><,|\/]+/", ObjectSerializer::toString($name)))) {
            throw new \InvalidArgumentException("invalid value for \$name when calling DomainData., must conform to the pattern /[a-zA-Z0-9$%^&*()-+=\\[\\]{};:?><,|\/]+/.");
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets cnames
     *
     * @return string[]|null
     */
    public function getCnames()
    {
        return $this->container['cnames'];
    }

    /**
     * Sets cnames
     *
     * @param string[]|null $cnames cnames
     *
     * @return self
     */
    public function setCnames($cnames)
    {
        if (is_null($cnames)) {
            throw new \InvalidArgumentException('non-nullable cnames cannot be null');
        }
        $this->container['cnames'] = $cnames;

        return $this;
    }

    /**
     * Gets cname_access_only
     *
     * @return bool|null
     */
    public function getCnameAccessOnly()
    {
        return $this->container['cname_access_only'];
    }

    /**
     * Sets cname_access_only
     *
     * @param bool|null $cname_access_only cname_access_only
     *
     * @return self
     */
    public function setCnameAccessOnly($cname_access_only)
    {
        if (is_null($cname_access_only)) {
            throw new \InvalidArgumentException('non-nullable cname_access_only cannot be null');
        }
        $this->container['cname_access_only'] = $cname_access_only;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        if (is_null($is_active)) {
            throw new \InvalidArgumentException('non-nullable is_active cannot be null');
        }
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets edge_application_id
     *
     * @return int|null
     */
    public function getEdgeApplicationId()
    {
        return $this->container['edge_application_id'];
    }

    /**
     * Sets edge_application_id
     *
     * @param int|null $edge_application_id edge_application_id
     *
     * @return self
     */
    public function setEdgeApplicationId($edge_application_id)
    {
        if (is_null($edge_application_id)) {
            throw new \InvalidArgumentException('non-nullable edge_application_id cannot be null');
        }

        if (($edge_application_id > -8446744073709551616)) {
            throw new \InvalidArgumentException('invalid value for $edge_application_id when calling DomainData., must be smaller than or equal to -8446744073709551616.');
        }
        if (($edge_application_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $edge_application_id when calling DomainData., must be bigger than or equal to 1.');
        }

        $this->container['edge_application_id'] = $edge_application_id;

        return $this;
    }

    /**
     * Gets digital_certificate_id
     *
     * @return string|null
     */
    public function getDigitalCertificateId()
    {
        return $this->container['digital_certificate_id'];
    }

    /**
     * Sets digital_certificate_id
     *
     * @param string|null $digital_certificate_id digital_certificate_id
     *
     * @return self
     */
    public function setDigitalCertificateId($digital_certificate_id)
    {
        if (is_null($digital_certificate_id)) {
            throw new \InvalidArgumentException('non-nullable digital_certificate_id cannot be null');
        }
        if ((mb_strlen($digital_certificate_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $digital_certificate_id when calling DomainData., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($digital_certificate_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $digital_certificate_id when calling DomainData., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/[a-zA-Z0-9$%^&*()-+=\\[\\]{};:?><,|\/]+/", ObjectSerializer::toString($digital_certificate_id)))) {
            throw new \InvalidArgumentException("invalid value for \$digital_certificate_id when calling DomainData., must conform to the pattern /[a-zA-Z0-9$%^&*()-+=\\[\\]{};:?><,|\/]+/.");
        }

        $this->container['digital_certificate_id'] = $digital_certificate_id;

        return $this;
    }

    /**
     * Gets environment
     *
     * @return string|null
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param string|null $environment environment
     *
     * @return self
     */
    public function setEnvironment($environment)
    {
        if (is_null($environment)) {
            throw new \InvalidArgumentException('non-nullable environment cannot be null');
        }
        $allowedValues = $this->getEnvironmentAllowableValues();
        if (!in_array($environment, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'environment', must be one of '%s'",
                    $environment,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Gets is_mtls_enabled
     *
     * @return bool|null
     */
    public function getIsMtlsEnabled()
    {
        return $this->container['is_mtls_enabled'];
    }

    /**
     * Sets is_mtls_enabled
     *
     * @param bool|null $is_mtls_enabled is_mtls_enabled
     *
     * @return self
     */
    public function setIsMtlsEnabled($is_mtls_enabled)
    {
        if (is_null($is_mtls_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_mtls_enabled cannot be null');
        }
        $this->container['is_mtls_enabled'] = $is_mtls_enabled;

        return $this;
    }

    /**
     * Gets mtls_trusted_ca_certificate_id
     *
     * @return int|null
     */
    public function getMtlsTrustedCaCertificateId()
    {
        return $this->container['mtls_trusted_ca_certificate_id'];
    }

    /**
     * Sets mtls_trusted_ca_certificate_id
     *
     * @param int|null $mtls_trusted_ca_certificate_id mtls_trusted_ca_certificate_id
     *
     * @return self
     */
    public function setMtlsTrustedCaCertificateId($mtls_trusted_ca_certificate_id)
    {
        if (is_null($mtls_trusted_ca_certificate_id)) {
            array_push($this->openAPINullablesSetToNull, 'mtls_trusted_ca_certificate_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mtls_trusted_ca_certificate_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mtls_trusted_ca_certificate_id'] = $mtls_trusted_ca_certificate_id;

        return $this;
    }

    /**
     * Gets edge_firewall_id
     *
     * @return int|null
     */
    public function getEdgeFirewallId()
    {
        return $this->container['edge_firewall_id'];
    }

    /**
     * Sets edge_firewall_id
     *
     * @param int|null $edge_firewall_id edge_firewall_id
     *
     * @return self
     */
    public function setEdgeFirewallId($edge_firewall_id)
    {
        if (is_null($edge_firewall_id)) {
            array_push($this->openAPINullablesSetToNull, 'edge_firewall_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('edge_firewall_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['edge_firewall_id'] = $edge_firewall_id;

        return $this;
    }

    /**
     * Gets mtls_verification
     *
     * @return string|null
     */
    public function getMtlsVerification()
    {
        return $this->container['mtls_verification'];
    }

    /**
     * Sets mtls_verification
     *
     * @param string|null $mtls_verification mtls_verification
     *
     * @return self
     */
    public function setMtlsVerification($mtls_verification)
    {
        if (is_null($mtls_verification)) {
            throw new \InvalidArgumentException('non-nullable mtls_verification cannot be null');
        }
        $allowedValues = $this->getMtlsVerificationAllowableValues();
        if (!in_array($mtls_verification, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mtls_verification', must be one of '%s'",
                    $mtls_verification,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mtls_verification'] = $mtls_verification;

        return $this;
    }

    /**
     * Gets crl_list
     *
     * @return int[]|null
     */
    public function getCrlList()
    {
        return $this->container['crl_list'];
    }

    /**
     * Sets crl_list
     *
     * @param int[]|null $crl_list crl_list
     *
     * @return self
     */
    public function setCrlList($crl_list)
    {
        if (is_null($crl_list)) {
            array_push($this->openAPINullablesSetToNull, 'crl_list');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('crl_list', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['crl_list'] = $crl_list;

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


