<?php
/**
 * WAFApi
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
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * WAFApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WAFApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getWAFDomains' => [
            'application/json',
        ],
        'getWAFEvents' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getWAFDomains
     *
     * Find domains attached to a WAF
     *
     * @param  int $waf_id ID of WAF to return (required)
     * @param  string $name searches WAF for name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getWAFDomains'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\WAFDomains200
     */
    public function getWAFDomains($waf_id, $name = null, string $contentType = self::contentTypes['getWAFDomains'][0])
    {
        list($response) = $this->getWAFDomainsWithHttpInfo($waf_id, $name, $contentType);
        return $response;
    }

    /**
     * Operation getWAFDomainsWithHttpInfo
     *
     * Find domains attached to a WAF
     *
     * @param  int $waf_id ID of WAF to return (required)
     * @param  string $name searches WAF for name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getWAFDomains'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\WAFDomains200, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWAFDomainsWithHttpInfo($waf_id, $name = null, string $contentType = self::contentTypes['getWAFDomains'][0])
    {
        $request = $this->getWAFDomainsRequest($waf_id, $name, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\WAFDomains200' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\WAFDomains200' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\WAFDomains200', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\WAFDomains200';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\WAFDomains200',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getWAFDomainsAsync
     *
     * Find domains attached to a WAF
     *
     * @param  int $waf_id ID of WAF to return (required)
     * @param  string $name searches WAF for name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getWAFDomains'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getWAFDomainsAsync($waf_id, $name = null, string $contentType = self::contentTypes['getWAFDomains'][0])
    {
        return $this->getWAFDomainsAsyncWithHttpInfo($waf_id, $name, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getWAFDomainsAsyncWithHttpInfo
     *
     * Find domains attached to a WAF
     *
     * @param  int $waf_id ID of WAF to return (required)
     * @param  string $name searches WAF for name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getWAFDomains'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getWAFDomainsAsyncWithHttpInfo($waf_id, $name = null, string $contentType = self::contentTypes['getWAFDomains'][0])
    {
        $returnType = '\OpenAPI\Client\Model\WAFDomains200';
        $request = $this->getWAFDomainsRequest($waf_id, $name, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getWAFDomains'
     *
     * @param  int $waf_id ID of WAF to return (required)
     * @param  string $name searches WAF for name (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getWAFDomains'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getWAFDomainsRequest($waf_id, $name = null, string $contentType = self::contentTypes['getWAFDomains'][0])
    {

        // verify the required parameter 'waf_id' is set
        if ($waf_id === null || (is_array($waf_id) && count($waf_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $waf_id when calling getWAFDomains'
            );
        }



        $resourcePath = '/waf/{wafId}/domains';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $name,
            'name', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($waf_id !== null) {
            $resourcePath = str_replace(
                '{' . 'wafId' . '}',
                ObjectSerializer::toPathValue($waf_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json; version=3', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getWAFEvents
     *
     * Find WAF log events
     *
     * @param  int $waf_id ID of WAF to return (required)
     * @param  int $hour_range Last log hours since now (it must be a integer number ranging between 1 and 72) (required)
     * @param  string $domains_ids Multiple domain&#39;s id (they must be separated by comma like 1233,1234) (required)
     * @param  int $network_list_id Id of a network list (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getWAFEvents'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\WAFEvents200|\OpenAPI\Client\Model\WAFEvents400|\OpenAPI\Client\Model\WAFEvents404|\OpenAPI\Client\Model\WAFEvents401
     */
    public function getWAFEvents($waf_id, $hour_range, $domains_ids, $network_list_id = null, string $contentType = self::contentTypes['getWAFEvents'][0])
    {
        list($response) = $this->getWAFEventsWithHttpInfo($waf_id, $hour_range, $domains_ids, $network_list_id, $contentType);
        return $response;
    }

    /**
     * Operation getWAFEventsWithHttpInfo
     *
     * Find WAF log events
     *
     * @param  int $waf_id ID of WAF to return (required)
     * @param  int $hour_range Last log hours since now (it must be a integer number ranging between 1 and 72) (required)
     * @param  string $domains_ids Multiple domain&#39;s id (they must be separated by comma like 1233,1234) (required)
     * @param  int $network_list_id Id of a network list (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getWAFEvents'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\WAFEvents200|\OpenAPI\Client\Model\WAFEvents400|\OpenAPI\Client\Model\WAFEvents404|\OpenAPI\Client\Model\WAFEvents401, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWAFEventsWithHttpInfo($waf_id, $hour_range, $domains_ids, $network_list_id = null, string $contentType = self::contentTypes['getWAFEvents'][0])
    {
        $request = $this->getWAFEventsRequest($waf_id, $hour_range, $domains_ids, $network_list_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\WAFEvents200' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\WAFEvents200' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\WAFEvents200', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\WAFEvents400' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\WAFEvents400' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\WAFEvents400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\OpenAPI\Client\Model\WAFEvents404' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\WAFEvents404' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\WAFEvents404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\OpenAPI\Client\Model\WAFEvents401' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\WAFEvents401' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\WAFEvents401', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\WAFEvents200';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\WAFEvents200',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\WAFEvents400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\WAFEvents404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\WAFEvents401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getWAFEventsAsync
     *
     * Find WAF log events
     *
     * @param  int $waf_id ID of WAF to return (required)
     * @param  int $hour_range Last log hours since now (it must be a integer number ranging between 1 and 72) (required)
     * @param  string $domains_ids Multiple domain&#39;s id (they must be separated by comma like 1233,1234) (required)
     * @param  int $network_list_id Id of a network list (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getWAFEvents'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getWAFEventsAsync($waf_id, $hour_range, $domains_ids, $network_list_id = null, string $contentType = self::contentTypes['getWAFEvents'][0])
    {
        return $this->getWAFEventsAsyncWithHttpInfo($waf_id, $hour_range, $domains_ids, $network_list_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getWAFEventsAsyncWithHttpInfo
     *
     * Find WAF log events
     *
     * @param  int $waf_id ID of WAF to return (required)
     * @param  int $hour_range Last log hours since now (it must be a integer number ranging between 1 and 72) (required)
     * @param  string $domains_ids Multiple domain&#39;s id (they must be separated by comma like 1233,1234) (required)
     * @param  int $network_list_id Id of a network list (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getWAFEvents'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getWAFEventsAsyncWithHttpInfo($waf_id, $hour_range, $domains_ids, $network_list_id = null, string $contentType = self::contentTypes['getWAFEvents'][0])
    {
        $returnType = '\OpenAPI\Client\Model\WAFEvents200';
        $request = $this->getWAFEventsRequest($waf_id, $hour_range, $domains_ids, $network_list_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getWAFEvents'
     *
     * @param  int $waf_id ID of WAF to return (required)
     * @param  int $hour_range Last log hours since now (it must be a integer number ranging between 1 and 72) (required)
     * @param  string $domains_ids Multiple domain&#39;s id (they must be separated by comma like 1233,1234) (required)
     * @param  int $network_list_id Id of a network list (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getWAFEvents'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getWAFEventsRequest($waf_id, $hour_range, $domains_ids, $network_list_id = null, string $contentType = self::contentTypes['getWAFEvents'][0])
    {

        // verify the required parameter 'waf_id' is set
        if ($waf_id === null || (is_array($waf_id) && count($waf_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $waf_id when calling getWAFEvents'
            );
        }

        // verify the required parameter 'hour_range' is set
        if ($hour_range === null || (is_array($hour_range) && count($hour_range) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $hour_range when calling getWAFEvents'
            );
        }

        // verify the required parameter 'domains_ids' is set
        if ($domains_ids === null || (is_array($domains_ids) && count($domains_ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $domains_ids when calling getWAFEvents'
            );
        }



        $resourcePath = '/waf/{wafId}/waf_events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $hour_range,
            'hour_range', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $network_list_id,
            'network_list_id', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $domains_ids,
            'domains_ids', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);


        // path params
        if ($waf_id !== null) {
            $resourcePath = str_replace(
                '{' . 'wafId' . '}',
                ObjectSerializer::toPathValue($waf_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json; version=3', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}