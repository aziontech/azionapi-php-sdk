<?php
/**
 * CreateNewWAFRulesetRequest
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
 * CreateNewWAFRulesetRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateNewWAFRulesetRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'createNewWAFRuleset_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'mode' => 'string',
        'active' => 'bool',
        'sql_injection' => 'bool',
        'sql_injection_sensitivity' => '\OpenAPI\Client\Model\WAFSensitivityChoices',
        'remote_file_inclusion' => 'bool',
        'remote_file_inclusion_sensitivity' => '\OpenAPI\Client\Model\WAFSensitivityChoices',
        'directory_traversal' => 'bool',
        'directory_traversal_sensitivity' => '\OpenAPI\Client\Model\WAFSensitivityChoices',
        'cross_site_scripting' => 'bool',
        'cross_site_scripting_sensitivity' => '\OpenAPI\Client\Model\WAFSensitivityChoices',
        'evading_tricks' => 'bool',
        'evading_tricks_sensitivity' => '\OpenAPI\Client\Model\WAFSensitivityChoices',
        'file_upload' => 'bool',
        'file_upload_sensitivity' => '\OpenAPI\Client\Model\WAFSensitivityChoices',
        'unwanted_access' => 'bool',
        'unwanted_access_sensitivity' => '\OpenAPI\Client\Model\WAFSensitivityChoices',
        'identified_attack' => 'bool',
        'identified_attack_sensitivity' => '\OpenAPI\Client\Model\WAFSensitivityChoices',
        'bypass_addresses' => 'string[]'
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
        'mode' => null,
        'active' => null,
        'sql_injection' => null,
        'sql_injection_sensitivity' => null,
        'remote_file_inclusion' => null,
        'remote_file_inclusion_sensitivity' => null,
        'directory_traversal' => null,
        'directory_traversal_sensitivity' => null,
        'cross_site_scripting' => null,
        'cross_site_scripting_sensitivity' => null,
        'evading_tricks' => null,
        'evading_tricks_sensitivity' => null,
        'file_upload' => null,
        'file_upload_sensitivity' => null,
        'unwanted_access' => null,
        'unwanted_access_sensitivity' => null,
        'identified_attack' => null,
        'identified_attack_sensitivity' => null,
        'bypass_addresses' => 'ipv4'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'mode' => false,
		'active' => false,
		'sql_injection' => false,
		'sql_injection_sensitivity' => false,
		'remote_file_inclusion' => false,
		'remote_file_inclusion_sensitivity' => false,
		'directory_traversal' => false,
		'directory_traversal_sensitivity' => false,
		'cross_site_scripting' => false,
		'cross_site_scripting_sensitivity' => false,
		'evading_tricks' => false,
		'evading_tricks_sensitivity' => false,
		'file_upload' => false,
		'file_upload_sensitivity' => false,
		'unwanted_access' => false,
		'unwanted_access_sensitivity' => false,
		'identified_attack' => false,
		'identified_attack_sensitivity' => false,
		'bypass_addresses' => false
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
        'mode' => 'mode',
        'active' => 'active',
        'sql_injection' => 'sql_injection',
        'sql_injection_sensitivity' => 'sql_injection_sensitivity',
        'remote_file_inclusion' => 'remote_file_inclusion',
        'remote_file_inclusion_sensitivity' => 'remote_file_inclusion_sensitivity',
        'directory_traversal' => 'directory_traversal',
        'directory_traversal_sensitivity' => 'directory_traversal_sensitivity',
        'cross_site_scripting' => 'cross_site_scripting',
        'cross_site_scripting_sensitivity' => 'cross_site_scripting_sensitivity',
        'evading_tricks' => 'evading_tricks',
        'evading_tricks_sensitivity' => 'evading_tricks_sensitivity',
        'file_upload' => 'file_upload',
        'file_upload_sensitivity' => 'file_upload_sensitivity',
        'unwanted_access' => 'unwanted_access',
        'unwanted_access_sensitivity' => 'unwanted_access_sensitivity',
        'identified_attack' => 'identified_attack',
        'identified_attack_sensitivity' => 'identified_attack_sensitivity',
        'bypass_addresses' => 'bypass_addresses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'mode' => 'setMode',
        'active' => 'setActive',
        'sql_injection' => 'setSqlInjection',
        'sql_injection_sensitivity' => 'setSqlInjectionSensitivity',
        'remote_file_inclusion' => 'setRemoteFileInclusion',
        'remote_file_inclusion_sensitivity' => 'setRemoteFileInclusionSensitivity',
        'directory_traversal' => 'setDirectoryTraversal',
        'directory_traversal_sensitivity' => 'setDirectoryTraversalSensitivity',
        'cross_site_scripting' => 'setCrossSiteScripting',
        'cross_site_scripting_sensitivity' => 'setCrossSiteScriptingSensitivity',
        'evading_tricks' => 'setEvadingTricks',
        'evading_tricks_sensitivity' => 'setEvadingTricksSensitivity',
        'file_upload' => 'setFileUpload',
        'file_upload_sensitivity' => 'setFileUploadSensitivity',
        'unwanted_access' => 'setUnwantedAccess',
        'unwanted_access_sensitivity' => 'setUnwantedAccessSensitivity',
        'identified_attack' => 'setIdentifiedAttack',
        'identified_attack_sensitivity' => 'setIdentifiedAttackSensitivity',
        'bypass_addresses' => 'setBypassAddresses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'mode' => 'getMode',
        'active' => 'getActive',
        'sql_injection' => 'getSqlInjection',
        'sql_injection_sensitivity' => 'getSqlInjectionSensitivity',
        'remote_file_inclusion' => 'getRemoteFileInclusion',
        'remote_file_inclusion_sensitivity' => 'getRemoteFileInclusionSensitivity',
        'directory_traversal' => 'getDirectoryTraversal',
        'directory_traversal_sensitivity' => 'getDirectoryTraversalSensitivity',
        'cross_site_scripting' => 'getCrossSiteScripting',
        'cross_site_scripting_sensitivity' => 'getCrossSiteScriptingSensitivity',
        'evading_tricks' => 'getEvadingTricks',
        'evading_tricks_sensitivity' => 'getEvadingTricksSensitivity',
        'file_upload' => 'getFileUpload',
        'file_upload_sensitivity' => 'getFileUploadSensitivity',
        'unwanted_access' => 'getUnwantedAccess',
        'unwanted_access_sensitivity' => 'getUnwantedAccessSensitivity',
        'identified_attack' => 'getIdentifiedAttack',
        'identified_attack_sensitivity' => 'getIdentifiedAttackSensitivity',
        'bypass_addresses' => 'getBypassAddresses'
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

    public const MODE_BLOCKING = 'blocking';
    public const MODE_COUNTING = 'counting';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_BLOCKING,
            self::MODE_COUNTING,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('mode', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('sql_injection', $data ?? [], null);
        $this->setIfExists('sql_injection_sensitivity', $data ?? [], null);
        $this->setIfExists('remote_file_inclusion', $data ?? [], null);
        $this->setIfExists('remote_file_inclusion_sensitivity', $data ?? [], null);
        $this->setIfExists('directory_traversal', $data ?? [], null);
        $this->setIfExists('directory_traversal_sensitivity', $data ?? [], null);
        $this->setIfExists('cross_site_scripting', $data ?? [], null);
        $this->setIfExists('cross_site_scripting_sensitivity', $data ?? [], null);
        $this->setIfExists('evading_tricks', $data ?? [], null);
        $this->setIfExists('evading_tricks_sensitivity', $data ?? [], null);
        $this->setIfExists('file_upload', $data ?? [], null);
        $this->setIfExists('file_upload_sensitivity', $data ?? [], null);
        $this->setIfExists('unwanted_access', $data ?? [], null);
        $this->setIfExists('unwanted_access_sensitivity', $data ?? [], null);
        $this->setIfExists('identified_attack', $data ?? [], null);
        $this->setIfExists('identified_attack_sensitivity', $data ?? [], null);
        $this->setIfExists('bypass_addresses', $data ?? [], null);
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
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mode', must be one of '%s'",
                $this->container['mode'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['sql_injection'] === null) {
            $invalidProperties[] = "'sql_injection' can't be null";
        }
        if ($this->container['sql_injection_sensitivity'] === null) {
            $invalidProperties[] = "'sql_injection_sensitivity' can't be null";
        }
        if ($this->container['remote_file_inclusion'] === null) {
            $invalidProperties[] = "'remote_file_inclusion' can't be null";
        }
        if ($this->container['remote_file_inclusion_sensitivity'] === null) {
            $invalidProperties[] = "'remote_file_inclusion_sensitivity' can't be null";
        }
        if ($this->container['directory_traversal'] === null) {
            $invalidProperties[] = "'directory_traversal' can't be null";
        }
        if ($this->container['directory_traversal_sensitivity'] === null) {
            $invalidProperties[] = "'directory_traversal_sensitivity' can't be null";
        }
        if ($this->container['cross_site_scripting'] === null) {
            $invalidProperties[] = "'cross_site_scripting' can't be null";
        }
        if ($this->container['cross_site_scripting_sensitivity'] === null) {
            $invalidProperties[] = "'cross_site_scripting_sensitivity' can't be null";
        }
        if ($this->container['evading_tricks'] === null) {
            $invalidProperties[] = "'evading_tricks' can't be null";
        }
        if ($this->container['evading_tricks_sensitivity'] === null) {
            $invalidProperties[] = "'evading_tricks_sensitivity' can't be null";
        }
        if ($this->container['file_upload'] === null) {
            $invalidProperties[] = "'file_upload' can't be null";
        }
        if ($this->container['file_upload_sensitivity'] === null) {
            $invalidProperties[] = "'file_upload_sensitivity' can't be null";
        }
        if ($this->container['unwanted_access'] === null) {
            $invalidProperties[] = "'unwanted_access' can't be null";
        }
        if ($this->container['unwanted_access_sensitivity'] === null) {
            $invalidProperties[] = "'unwanted_access_sensitivity' can't be null";
        }
        if ($this->container['identified_attack'] === null) {
            $invalidProperties[] = "'identified_attack' can't be null";
        }
        if ($this->container['identified_attack_sensitivity'] === null) {
            $invalidProperties[] = "'identified_attack_sensitivity' can't be null";
        }
        if ($this->container['bypass_addresses'] === null) {
            $invalidProperties[] = "'bypass_addresses' can't be null";
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
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Identification name for WAF Rule Set.
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
     * Gets mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string $mode mode
     *
     * @return self
     */
    public function setMode($mode)
    {
        if (is_null($mode)) {
            throw new \InvalidArgumentException('non-nullable mode cannot be null');
        }
        $allowedValues = $this->getModeAllowableValues();
        if (!in_array($mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mode', must be one of '%s'",
                    $mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mode'] = $mode;

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
     * Gets sql_injection
     *
     * @return bool
     */
    public function getSqlInjection()
    {
        return $this->container['sql_injection'];
    }

    /**
     * Sets sql_injection
     *
     * @param bool $sql_injection sql_injection
     *
     * @return self
     */
    public function setSqlInjection($sql_injection)
    {
        if (is_null($sql_injection)) {
            throw new \InvalidArgumentException('non-nullable sql_injection cannot be null');
        }
        $this->container['sql_injection'] = $sql_injection;

        return $this;
    }

    /**
     * Gets sql_injection_sensitivity
     *
     * @return \OpenAPI\Client\Model\WAFSensitivityChoices
     */
    public function getSqlInjectionSensitivity()
    {
        return $this->container['sql_injection_sensitivity'];
    }

    /**
     * Sets sql_injection_sensitivity
     *
     * @param \OpenAPI\Client\Model\WAFSensitivityChoices $sql_injection_sensitivity sql_injection_sensitivity
     *
     * @return self
     */
    public function setSqlInjectionSensitivity($sql_injection_sensitivity)
    {
        if (is_null($sql_injection_sensitivity)) {
            throw new \InvalidArgumentException('non-nullable sql_injection_sensitivity cannot be null');
        }
        $this->container['sql_injection_sensitivity'] = $sql_injection_sensitivity;

        return $this;
    }

    /**
     * Gets remote_file_inclusion
     *
     * @return bool
     */
    public function getRemoteFileInclusion()
    {
        return $this->container['remote_file_inclusion'];
    }

    /**
     * Sets remote_file_inclusion
     *
     * @param bool $remote_file_inclusion remote_file_inclusion
     *
     * @return self
     */
    public function setRemoteFileInclusion($remote_file_inclusion)
    {
        if (is_null($remote_file_inclusion)) {
            throw new \InvalidArgumentException('non-nullable remote_file_inclusion cannot be null');
        }
        $this->container['remote_file_inclusion'] = $remote_file_inclusion;

        return $this;
    }

    /**
     * Gets remote_file_inclusion_sensitivity
     *
     * @return \OpenAPI\Client\Model\WAFSensitivityChoices
     */
    public function getRemoteFileInclusionSensitivity()
    {
        return $this->container['remote_file_inclusion_sensitivity'];
    }

    /**
     * Sets remote_file_inclusion_sensitivity
     *
     * @param \OpenAPI\Client\Model\WAFSensitivityChoices $remote_file_inclusion_sensitivity remote_file_inclusion_sensitivity
     *
     * @return self
     */
    public function setRemoteFileInclusionSensitivity($remote_file_inclusion_sensitivity)
    {
        if (is_null($remote_file_inclusion_sensitivity)) {
            throw new \InvalidArgumentException('non-nullable remote_file_inclusion_sensitivity cannot be null');
        }
        $this->container['remote_file_inclusion_sensitivity'] = $remote_file_inclusion_sensitivity;

        return $this;
    }

    /**
     * Gets directory_traversal
     *
     * @return bool
     */
    public function getDirectoryTraversal()
    {
        return $this->container['directory_traversal'];
    }

    /**
     * Sets directory_traversal
     *
     * @param bool $directory_traversal directory_traversal
     *
     * @return self
     */
    public function setDirectoryTraversal($directory_traversal)
    {
        if (is_null($directory_traversal)) {
            throw new \InvalidArgumentException('non-nullable directory_traversal cannot be null');
        }
        $this->container['directory_traversal'] = $directory_traversal;

        return $this;
    }

    /**
     * Gets directory_traversal_sensitivity
     *
     * @return \OpenAPI\Client\Model\WAFSensitivityChoices
     */
    public function getDirectoryTraversalSensitivity()
    {
        return $this->container['directory_traversal_sensitivity'];
    }

    /**
     * Sets directory_traversal_sensitivity
     *
     * @param \OpenAPI\Client\Model\WAFSensitivityChoices $directory_traversal_sensitivity directory_traversal_sensitivity
     *
     * @return self
     */
    public function setDirectoryTraversalSensitivity($directory_traversal_sensitivity)
    {
        if (is_null($directory_traversal_sensitivity)) {
            throw new \InvalidArgumentException('non-nullable directory_traversal_sensitivity cannot be null');
        }
        $this->container['directory_traversal_sensitivity'] = $directory_traversal_sensitivity;

        return $this;
    }

    /**
     * Gets cross_site_scripting
     *
     * @return bool
     */
    public function getCrossSiteScripting()
    {
        return $this->container['cross_site_scripting'];
    }

    /**
     * Sets cross_site_scripting
     *
     * @param bool $cross_site_scripting cross_site_scripting
     *
     * @return self
     */
    public function setCrossSiteScripting($cross_site_scripting)
    {
        if (is_null($cross_site_scripting)) {
            throw new \InvalidArgumentException('non-nullable cross_site_scripting cannot be null');
        }
        $this->container['cross_site_scripting'] = $cross_site_scripting;

        return $this;
    }

    /**
     * Gets cross_site_scripting_sensitivity
     *
     * @return \OpenAPI\Client\Model\WAFSensitivityChoices
     */
    public function getCrossSiteScriptingSensitivity()
    {
        return $this->container['cross_site_scripting_sensitivity'];
    }

    /**
     * Sets cross_site_scripting_sensitivity
     *
     * @param \OpenAPI\Client\Model\WAFSensitivityChoices $cross_site_scripting_sensitivity cross_site_scripting_sensitivity
     *
     * @return self
     */
    public function setCrossSiteScriptingSensitivity($cross_site_scripting_sensitivity)
    {
        if (is_null($cross_site_scripting_sensitivity)) {
            throw new \InvalidArgumentException('non-nullable cross_site_scripting_sensitivity cannot be null');
        }
        $this->container['cross_site_scripting_sensitivity'] = $cross_site_scripting_sensitivity;

        return $this;
    }

    /**
     * Gets evading_tricks
     *
     * @return bool
     */
    public function getEvadingTricks()
    {
        return $this->container['evading_tricks'];
    }

    /**
     * Sets evading_tricks
     *
     * @param bool $evading_tricks evading_tricks
     *
     * @return self
     */
    public function setEvadingTricks($evading_tricks)
    {
        if (is_null($evading_tricks)) {
            throw new \InvalidArgumentException('non-nullable evading_tricks cannot be null');
        }
        $this->container['evading_tricks'] = $evading_tricks;

        return $this;
    }

    /**
     * Gets evading_tricks_sensitivity
     *
     * @return \OpenAPI\Client\Model\WAFSensitivityChoices
     */
    public function getEvadingTricksSensitivity()
    {
        return $this->container['evading_tricks_sensitivity'];
    }

    /**
     * Sets evading_tricks_sensitivity
     *
     * @param \OpenAPI\Client\Model\WAFSensitivityChoices $evading_tricks_sensitivity evading_tricks_sensitivity
     *
     * @return self
     */
    public function setEvadingTricksSensitivity($evading_tricks_sensitivity)
    {
        if (is_null($evading_tricks_sensitivity)) {
            throw new \InvalidArgumentException('non-nullable evading_tricks_sensitivity cannot be null');
        }
        $this->container['evading_tricks_sensitivity'] = $evading_tricks_sensitivity;

        return $this;
    }

    /**
     * Gets file_upload
     *
     * @return bool
     */
    public function getFileUpload()
    {
        return $this->container['file_upload'];
    }

    /**
     * Sets file_upload
     *
     * @param bool $file_upload file_upload
     *
     * @return self
     */
    public function setFileUpload($file_upload)
    {
        if (is_null($file_upload)) {
            throw new \InvalidArgumentException('non-nullable file_upload cannot be null');
        }
        $this->container['file_upload'] = $file_upload;

        return $this;
    }

    /**
     * Gets file_upload_sensitivity
     *
     * @return \OpenAPI\Client\Model\WAFSensitivityChoices
     */
    public function getFileUploadSensitivity()
    {
        return $this->container['file_upload_sensitivity'];
    }

    /**
     * Sets file_upload_sensitivity
     *
     * @param \OpenAPI\Client\Model\WAFSensitivityChoices $file_upload_sensitivity file_upload_sensitivity
     *
     * @return self
     */
    public function setFileUploadSensitivity($file_upload_sensitivity)
    {
        if (is_null($file_upload_sensitivity)) {
            throw new \InvalidArgumentException('non-nullable file_upload_sensitivity cannot be null');
        }
        $this->container['file_upload_sensitivity'] = $file_upload_sensitivity;

        return $this;
    }

    /**
     * Gets unwanted_access
     *
     * @return bool
     */
    public function getUnwantedAccess()
    {
        return $this->container['unwanted_access'];
    }

    /**
     * Sets unwanted_access
     *
     * @param bool $unwanted_access unwanted_access
     *
     * @return self
     */
    public function setUnwantedAccess($unwanted_access)
    {
        if (is_null($unwanted_access)) {
            throw new \InvalidArgumentException('non-nullable unwanted_access cannot be null');
        }
        $this->container['unwanted_access'] = $unwanted_access;

        return $this;
    }

    /**
     * Gets unwanted_access_sensitivity
     *
     * @return \OpenAPI\Client\Model\WAFSensitivityChoices
     */
    public function getUnwantedAccessSensitivity()
    {
        return $this->container['unwanted_access_sensitivity'];
    }

    /**
     * Sets unwanted_access_sensitivity
     *
     * @param \OpenAPI\Client\Model\WAFSensitivityChoices $unwanted_access_sensitivity unwanted_access_sensitivity
     *
     * @return self
     */
    public function setUnwantedAccessSensitivity($unwanted_access_sensitivity)
    {
        if (is_null($unwanted_access_sensitivity)) {
            throw new \InvalidArgumentException('non-nullable unwanted_access_sensitivity cannot be null');
        }
        $this->container['unwanted_access_sensitivity'] = $unwanted_access_sensitivity;

        return $this;
    }

    /**
     * Gets identified_attack
     *
     * @return bool
     */
    public function getIdentifiedAttack()
    {
        return $this->container['identified_attack'];
    }

    /**
     * Sets identified_attack
     *
     * @param bool $identified_attack identified_attack
     *
     * @return self
     */
    public function setIdentifiedAttack($identified_attack)
    {
        if (is_null($identified_attack)) {
            throw new \InvalidArgumentException('non-nullable identified_attack cannot be null');
        }
        $this->container['identified_attack'] = $identified_attack;

        return $this;
    }

    /**
     * Gets identified_attack_sensitivity
     *
     * @return \OpenAPI\Client\Model\WAFSensitivityChoices
     */
    public function getIdentifiedAttackSensitivity()
    {
        return $this->container['identified_attack_sensitivity'];
    }

    /**
     * Sets identified_attack_sensitivity
     *
     * @param \OpenAPI\Client\Model\WAFSensitivityChoices $identified_attack_sensitivity identified_attack_sensitivity
     *
     * @return self
     */
    public function setIdentifiedAttackSensitivity($identified_attack_sensitivity)
    {
        if (is_null($identified_attack_sensitivity)) {
            throw new \InvalidArgumentException('non-nullable identified_attack_sensitivity cannot be null');
        }
        $this->container['identified_attack_sensitivity'] = $identified_attack_sensitivity;

        return $this;
    }

    /**
     * Gets bypass_addresses
     *
     * @return string[]
     */
    public function getBypassAddresses()
    {
        return $this->container['bypass_addresses'];
    }

    /**
     * Sets bypass_addresses
     *
     * @param string[] $bypass_addresses bypass_addresses
     *
     * @return self
     */
    public function setBypassAddresses($bypass_addresses)
    {
        if (is_null($bypass_addresses)) {
            throw new \InvalidArgumentException('non-nullable bypass_addresses cannot be null');
        }
        $this->container['bypass_addresses'] = $bypass_addresses;

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


