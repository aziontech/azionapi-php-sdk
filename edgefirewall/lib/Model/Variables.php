<?php
/**
 * Variables
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Edge Firewall API
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * Variables Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Variables
{
    /**
     * Possible values of this enum
     */
    public const HEADER_ACCEPT = 'header_accept';

    public const HEADER_ACCEPT_ENCODING = 'header_accept_encoding';

    public const HEADER_ACCEPT_LANGUAGE = 'header_accept_language';

    public const HEADER_COOKIE = 'header_cookie';

    public const HEADER_ORIGIN = 'header_origin';

    public const HEADER_REFERER = 'header_referer';

    public const HEADER_USER_AGENT = 'header_user_agent';

    public const HOST = 'host';

    public const NETWORK = 'network';

    public const REQUEST_ARGS = 'request_args';

    public const REQUEST_METHOD = 'request_method';

    public const REQUEST_URI = 'request_uri';

    public const SCHEME = 'scheme';

    public const CLIENT_CERTIFICATE_VALIDATION = 'client_certificate_validation';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HEADER_ACCEPT,
            self::HEADER_ACCEPT_ENCODING,
            self::HEADER_ACCEPT_LANGUAGE,
            self::HEADER_COOKIE,
            self::HEADER_ORIGIN,
            self::HEADER_REFERER,
            self::HEADER_USER_AGENT,
            self::HOST,
            self::NETWORK,
            self::REQUEST_ARGS,
            self::REQUEST_METHOD,
            self::REQUEST_URI,
            self::SCHEME,
            self::CLIENT_CERTIFICATE_VALIDATION
        ];
    }
}


