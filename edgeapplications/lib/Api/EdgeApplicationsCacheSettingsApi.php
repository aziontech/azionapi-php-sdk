<?php
/**
 * EdgeApplicationsCacheSettingsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Edge Application
 *
 * ## Welcome to the Azion API!  With the following APIs you can check, remove or update existing settings, besides creating new ones.  * * *  ## Overview  The Azion API is a RESTful API, based on HTTPS requests, that allows you to integrate your systems with our platform, simply, quickly, and securely.  Here you will find instructions on how our API works and what functionality is available.  This documentation is being constantly updated. Make sure you verify if there are any updates or changes before you perform any development in your application, even if you are familiar with our API.  * * *  Both HTTPS requests and responses must be in JavaScript Object Notation (JSON) format. All HTTPS requests and responses must follow these conventions.  **Base URL**  The base URL of the API, which must be used, is:  [**https://api.azionapi.net/_**](https://api.azionapi.net/)  **HTTP Methods**  Each HTTP method defines the type of operation that will be run.  | HTTP Method | CRUD | Whole Collection (e.g. /items) | Specific Item (e.g. /items/:item_id) | | --- | --- | --- | --- | | GET | Read | It retrieves the list of items in a Collection. | It retrieves a specific item in a Collection. | | POST | Create | It creates a new item in the Collection. | \\- | | PUT | Update/Replace | It replaces a whole Collection with a new one. | It replaces an item in a Collection with a new one. | | PATCH | Update/Modify | It partially updates a Collection. | It partially updates an item in a Collection | | DELETE | Delete | It deletes a whole Collection. | It deletes an item in a Collection. |  * * *  **Status Codes**  The HTTP return code defines the status – successful or not – after the requested operation is run.  | Status Code | Meaning | | --- | --- | | 200 OK | General Status for a successful operation. | | 201 CREATED | Successfully created a collection or item, by means of POST or PUT. | | 204 NO CONTENT | Successful operation, but without any content to be return to the Body. Generally used for DELETE or PUT operations. | | 207 MULTI-STATUS | A batch of operations were triggered by a single request, which resulted in different return codes when it was run, for some of the operations. The codes are displayed in the “status” field, in the body of the response, for each sub-batch of operations for whichever are applicable. | | 400 BAD REQUEST | Request error, such as invalid parameters, missing mandatory parameters or others. | | 401 UNAUTHORIZED | Error caused by a missing HTTP Authentication header. | | 403 FORBIDDEN | User does not have the permissions to run the requested operation. | | 404 NOT FOUND | The requested resource does not exist. | | 405 METHOD NOT ALLOWED | The requested method is not applicable with the URL. | | 406 NOT ACCEPTABLE | Accept header missing from the HTTP request or the header contains formatting or the version is not supported by the API. | | 409 CONFLICT | Conflict generated in running the request, such as a request to create an already existing record. | | 429 TOO MANY REQUESTS | The request was temporarily rejected, due to exceeding the limit on operations. Wait for the time defined in the X-Ratelimit-Reset header and try again. | | 500 INTERNAL SERVER ERROR | Unintentional error, due to an unidentified failure in the request process. | | \\--- |  | | **HTTP Headers** |  |  All requests must be generated with the HTTP header specifying the desired code format for responses and the API version used. The current version of the API is 3 and the format is application/json.  ``` Accept: application/json; version=3  ```  * * *  **Rate Limit**  The limit of operations that can be run via the API is defined by 3 HTTP response headers:  *   **X-ratelimit-limit:** number of operations allowed in one time-frame; *   **X-ratelimit-remaining:** number of operations still available in one time-frame; *   **X-ratelimit-reset:** is the date and time, in IOS 8601 format, which represents the point in the future when the time-frame will be closed and when the limits will, therefore, be reset.       Example of HTTP response headers and a request:  ``` Date: Thu, 02 Nov 2017 12:30:28 GMT X-ratelimit-remaining: 199 X-ratelimit-limit: 200 X-ratelimit-reset: 2017-11-02T12:31:28.675446  ```  In the example provided, 200 operations are allowed within a 1-minute time frame. Of those, there are 199 still available, because one has already been run. The total limit will be reset after 1 minute.  When the X-ratelimit-limit is reached, or in other words, when the X-ratelimit-remaining reaches zero, the API will give the error, HTTP 429 TOO MANY REQUESTS. If your application receives this error, you will need to wait until the time defined in X-ratelimit-reset has passed, to make another request.  *   **X-ratelimit-limit by product**       The *X-ratelimit limit* variations by product are the following:  *   **Real-Time Metrics:** 20 requests per minute. *   **Real-Time Purge:** 200 requests per minute; except for the Wildcard, which is 2000 a day.       > The rate-limit values are based on the client_id.  * * *  **Optional Parameters**  In this version, it is possible to include some optional parameters as part of the GET method, which can help and modify the form in which your data will be returned.  You can combine these parameters to get the result you want.  They are:  | Parameter | Description | Accepted values: | | --- | --- | --- | | order_by | Identifies which field the return should be sorted by. The default ordering is ascending. | Depends on the fields available from the endpoint structure | | sort | Defines which ordering to be used: ascending or descending. | asc  <br>  <br>desc | | page | Identifies which page should be returned, if the return is paginated. The default value is 1. | Page number. | | page_size | Identifies how many items should be returned per page. The default value is 10. | Desired number of items. |  * * *  **Request Exemple**  You can use one parameter, or a combination. See the example below, which uses all of them in the same request.  ``` GET /domains?order_by=name&page_size=20&sort=desc&page=3 Accept: application/json; version=3 Authorization: token 2909f3932069047f4736dc87e72baaddd19c9f75  ```  * * *  # Authentication  Authentication and authorization of operations via Azion API is done through Tokens.  The first step is to create the Token through authenticating a user registered in [Real-Time Manager](https://sso.azion.com/login).  * * *  ## Encoding Username and Password in Base64  Only token creation and cancelling operations are performed through Basic Authentication, that is, with a username and password. You can create and cancel the token through the API itself, but for that you need to encode your username and password in base64.  Base64 encoding can be done from the command line on a Unix terminal:  ``` $ echo 'user@domain:password'|base64 dXNlckBkb21haW46cGFzc3dvcmQK  ```  If you do not have a Unix terminal available, you can use the free online service at [https://www.base64encode.org/](https://www.base64encode.org/)
 *
 * The version of the OpenAPI document: 1.0.0
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
 * EdgeApplicationsCacheSettingsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EdgeApplicationsCacheSettingsApi
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
        'edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDelete' => [
            'application/json',
        ],
        'edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet' => [
            'application/json',
        ],
        'edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut' => [
            'application/json; version=3',
        ],
        'edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatch' => [
            'application/json; version=3',
        ],
        'edgeApplicationsEdgeApplicationIdCacheSettingsGet' => [
            'application/json',
        ],
        'edgeApplicationsEdgeApplicationIdCacheSettingsPost' => [
            'application/json; version=3',
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
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDelete
     *
     * /edge_applications/:edge_application_id:/cache_settings/:cache_settings:
     *
     * @param  int $edge_application_id edge_application_id (required)
     * @param  int $cache_settings cache_settings (required)
     * @param  string $accept accept (optional)
     * @param  string $content_type The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDelete'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDelete($edge_application_id, $cache_settings, $accept = null, $content_type = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDelete'][0])
    {
        $this->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDeleteWithHttpInfo($edge_application_id, $cache_settings, $accept, $content_type, $contentType);
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDeleteWithHttpInfo
     *
     * /edge_applications/:edge_application_id:/cache_settings/:cache_settings:
     *
     * @param  int $edge_application_id (required)
     * @param  int $cache_settings (required)
     * @param  string $accept (optional)
     * @param  string $content_type The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDelete'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDeleteWithHttpInfo($edge_application_id, $cache_settings, $accept = null, $content_type = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDelete'][0])
    {
        $request = $this->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDeleteRequest($edge_application_id, $cache_settings, $accept, $content_type, $contentType);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDeleteAsync
     *
     * /edge_applications/:edge_application_id:/cache_settings/:cache_settings:
     *
     * @param  int $edge_application_id (required)
     * @param  int $cache_settings (required)
     * @param  string $accept (optional)
     * @param  string $content_type The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDeleteAsync($edge_application_id, $cache_settings, $accept = null, $content_type = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDelete'][0])
    {
        return $this->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDeleteAsyncWithHttpInfo($edge_application_id, $cache_settings, $accept, $content_type, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDeleteAsyncWithHttpInfo
     *
     * /edge_applications/:edge_application_id:/cache_settings/:cache_settings:
     *
     * @param  int $edge_application_id (required)
     * @param  int $cache_settings (required)
     * @param  string $accept (optional)
     * @param  string $content_type The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDeleteAsyncWithHttpInfo($edge_application_id, $cache_settings, $accept = null, $content_type = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDelete'][0])
    {
        $returnType = '';
        $request = $this->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDeleteRequest($edge_application_id, $cache_settings, $accept, $content_type, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDelete'
     *
     * @param  int $edge_application_id (required)
     * @param  int $cache_settings (required)
     * @param  string $accept (optional)
     * @param  string $content_type The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDeleteRequest($edge_application_id, $cache_settings, $accept = null, $content_type = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDelete'][0])
    {

        // verify the required parameter 'edge_application_id' is set
        if ($edge_application_id === null || (is_array($edge_application_id) && count($edge_application_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $edge_application_id when calling edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDelete'
            );
        }

        // verify the required parameter 'cache_settings' is set
        if ($cache_settings === null || (is_array($cache_settings) && count($cache_settings) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cache_settings when calling edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsDelete'
            );
        }




        $resourcePath = '/edge_applications/{edge_application_id}/cache_settings/{cache_settings}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }

        // path params
        if ($edge_application_id !== null) {
            $resourcePath = str_replace(
                '{' . 'edge_application_id' . '}',
                ObjectSerializer::toPathValue($edge_application_id),
                $resourcePath
            );
        }
        // path params
        if ($cache_settings !== null) {
            $resourcePath = str_replace(
                '{' . 'cache_settings' . '}',
                ObjectSerializer::toPathValue($cache_settings),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            [],
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
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet
     *
     * /edge_applications/:edge_application_id:/cache_settings/:cache_settings_id:
     *
     * @param  int $edge_application_id edge_application_id (required)
     * @param  int $cache_settings_id cache_settings_id (required)
     * @param  string $accept accept (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\ApplicationCacheGetOneResponse
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet($edge_application_id, $cache_settings_id, $accept = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet'][0])
    {
        list($response) = $this->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGetWithHttpInfo($edge_application_id, $cache_settings_id, $accept, $contentType);
        return $response;
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGetWithHttpInfo
     *
     * /edge_applications/:edge_application_id:/cache_settings/:cache_settings_id:
     *
     * @param  int $edge_application_id (required)
     * @param  int $cache_settings_id (required)
     * @param  string $accept (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\ApplicationCacheGetOneResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGetWithHttpInfo($edge_application_id, $cache_settings_id, $accept = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet'][0])
    {
        $request = $this->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGetRequest($edge_application_id, $cache_settings_id, $accept, $contentType);

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
                    if ('\OpenAPI\Client\Model\ApplicationCacheGetOneResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ApplicationCacheGetOneResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ApplicationCacheGetOneResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\ApplicationCacheGetOneResponse';
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
                        '\OpenAPI\Client\Model\ApplicationCacheGetOneResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGetAsync
     *
     * /edge_applications/:edge_application_id:/cache_settings/:cache_settings_id:
     *
     * @param  int $edge_application_id (required)
     * @param  int $cache_settings_id (required)
     * @param  string $accept (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGetAsync($edge_application_id, $cache_settings_id, $accept = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet'][0])
    {
        return $this->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGetAsyncWithHttpInfo($edge_application_id, $cache_settings_id, $accept, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGetAsyncWithHttpInfo
     *
     * /edge_applications/:edge_application_id:/cache_settings/:cache_settings_id:
     *
     * @param  int $edge_application_id (required)
     * @param  int $cache_settings_id (required)
     * @param  string $accept (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGetAsyncWithHttpInfo($edge_application_id, $cache_settings_id, $accept = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet'][0])
    {
        $returnType = '\OpenAPI\Client\Model\ApplicationCacheGetOneResponse';
        $request = $this->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGetRequest($edge_application_id, $cache_settings_id, $accept, $contentType);

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
     * Create request for operation 'edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet'
     *
     * @param  int $edge_application_id (required)
     * @param  int $cache_settings_id (required)
     * @param  string $accept (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGetRequest($edge_application_id, $cache_settings_id, $accept = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet'][0])
    {

        // verify the required parameter 'edge_application_id' is set
        if ($edge_application_id === null || (is_array($edge_application_id) && count($edge_application_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $edge_application_id when calling edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet'
            );
        }

        // verify the required parameter 'cache_settings_id' is set
        if ($cache_settings_id === null || (is_array($cache_settings_id) && count($cache_settings_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cache_settings_id when calling edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdGet'
            );
        }



        $resourcePath = '/edge_applications/{edge_application_id}/cache_settings/{cache_settings_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }

        // path params
        if ($edge_application_id !== null) {
            $resourcePath = str_replace(
                '{' . 'edge_application_id' . '}',
                ObjectSerializer::toPathValue($edge_application_id),
                $resourcePath
            );
        }
        // path params
        if ($cache_settings_id !== null) {
            $resourcePath = str_replace(
                '{' . 'cache_settings_id' . '}',
                ObjectSerializer::toPathValue($cache_settings_id),
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
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut
     *
     * /edge_applications/:edge_application_id:/cache_settings/ca
     *
     * @param  int $edge_application_id edge_application_id (required)
     * @param  int $cache_settings_id cache_settings_id (required)
     * @param  string $accept accept (optional)
     * @param  string $content_type The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json (optional)
     * @param  \OpenAPI\Client\Model\ApplicationCachePutRequest $application_cache_put_request application_cache_put_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\ApplicationCachePutResponse
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut($edge_application_id, $cache_settings_id, $accept = null, $content_type = null, $application_cache_put_request = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut'][0])
    {
        list($response) = $this->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPutWithHttpInfo($edge_application_id, $cache_settings_id, $accept, $content_type, $application_cache_put_request, $contentType);
        return $response;
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPutWithHttpInfo
     *
     * /edge_applications/:edge_application_id:/cache_settings/ca
     *
     * @param  int $edge_application_id (required)
     * @param  int $cache_settings_id (required)
     * @param  string $accept (optional)
     * @param  string $content_type The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json (optional)
     * @param  \OpenAPI\Client\Model\ApplicationCachePutRequest $application_cache_put_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\ApplicationCachePutResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPutWithHttpInfo($edge_application_id, $cache_settings_id, $accept = null, $content_type = null, $application_cache_put_request = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut'][0])
    {
        $request = $this->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPutRequest($edge_application_id, $cache_settings_id, $accept, $content_type, $application_cache_put_request, $contentType);

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
                    if ('\OpenAPI\Client\Model\ApplicationCachePutResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ApplicationCachePutResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ApplicationCachePutResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\ApplicationCachePutResponse';
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
                        '\OpenAPI\Client\Model\ApplicationCachePutResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPutAsync
     *
     * /edge_applications/:edge_application_id:/cache_settings/ca
     *
     * @param  int $edge_application_id (required)
     * @param  int $cache_settings_id (required)
     * @param  string $accept (optional)
     * @param  string $content_type The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json (optional)
     * @param  \OpenAPI\Client\Model\ApplicationCachePutRequest $application_cache_put_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPutAsync($edge_application_id, $cache_settings_id, $accept = null, $content_type = null, $application_cache_put_request = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut'][0])
    {
        return $this->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPutAsyncWithHttpInfo($edge_application_id, $cache_settings_id, $accept, $content_type, $application_cache_put_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPutAsyncWithHttpInfo
     *
     * /edge_applications/:edge_application_id:/cache_settings/ca
     *
     * @param  int $edge_application_id (required)
     * @param  int $cache_settings_id (required)
     * @param  string $accept (optional)
     * @param  string $content_type The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json (optional)
     * @param  \OpenAPI\Client\Model\ApplicationCachePutRequest $application_cache_put_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPutAsyncWithHttpInfo($edge_application_id, $cache_settings_id, $accept = null, $content_type = null, $application_cache_put_request = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut'][0])
    {
        $returnType = '\OpenAPI\Client\Model\ApplicationCachePutResponse';
        $request = $this->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPutRequest($edge_application_id, $cache_settings_id, $accept, $content_type, $application_cache_put_request, $contentType);

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
     * Create request for operation 'edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut'
     *
     * @param  int $edge_application_id (required)
     * @param  int $cache_settings_id (required)
     * @param  string $accept (optional)
     * @param  string $content_type The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json (optional)
     * @param  \OpenAPI\Client\Model\ApplicationCachePutRequest $application_cache_put_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPutRequest($edge_application_id, $cache_settings_id, $accept = null, $content_type = null, $application_cache_put_request = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut'][0])
    {

        // verify the required parameter 'edge_application_id' is set
        if ($edge_application_id === null || (is_array($edge_application_id) && count($edge_application_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $edge_application_id when calling edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut'
            );
        }

        // verify the required parameter 'cache_settings_id' is set
        if ($cache_settings_id === null || (is_array($cache_settings_id) && count($cache_settings_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cache_settings_id when calling edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsIdPut'
            );
        }





        $resourcePath = '/edge_applications/{edge_application_id}/cache_settings/{cache_settings_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }

        // path params
        if ($edge_application_id !== null) {
            $resourcePath = str_replace(
                '{' . 'edge_application_id' . '}',
                ObjectSerializer::toPathValue($edge_application_id),
                $resourcePath
            );
        }
        // path params
        if ($cache_settings_id !== null) {
            $resourcePath = str_replace(
                '{' . 'cache_settings_id' . '}',
                ObjectSerializer::toPathValue($cache_settings_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json; version=3', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($application_cache_put_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($application_cache_put_request));
            } else {
                $httpBody = $application_cache_put_request;
            }
        } elseif (count($formParams) > 0) {
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
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatch
     *
     * /edge_applications/:edge_application_id:/cache_settings/:cache_settings_id:
     *
     * @param  int $edge_application_id edge_application_id (required)
     * @param  int $cache_settings cache_settings (required)
     * @param  string $accept accept (optional)
     * @param  \OpenAPI\Client\Model\ApplicationCachePatchRequest $application_cache_patch_request application_cache_patch_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatch'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\ApplicationCachePatchResponse
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatch($edge_application_id, $cache_settings, $accept = null, $application_cache_patch_request = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatch'][0])
    {
        list($response) = $this->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatchWithHttpInfo($edge_application_id, $cache_settings, $accept, $application_cache_patch_request, $contentType);
        return $response;
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatchWithHttpInfo
     *
     * /edge_applications/:edge_application_id:/cache_settings/:cache_settings_id:
     *
     * @param  int $edge_application_id (required)
     * @param  int $cache_settings (required)
     * @param  string $accept (optional)
     * @param  \OpenAPI\Client\Model\ApplicationCachePatchRequest $application_cache_patch_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatch'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\ApplicationCachePatchResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatchWithHttpInfo($edge_application_id, $cache_settings, $accept = null, $application_cache_patch_request = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatch'][0])
    {
        $request = $this->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatchRequest($edge_application_id, $cache_settings, $accept, $application_cache_patch_request, $contentType);

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
                    if ('\OpenAPI\Client\Model\ApplicationCachePatchResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ApplicationCachePatchResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ApplicationCachePatchResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\ApplicationCachePatchResponse';
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
                        '\OpenAPI\Client\Model\ApplicationCachePatchResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatchAsync
     *
     * /edge_applications/:edge_application_id:/cache_settings/:cache_settings_id:
     *
     * @param  int $edge_application_id (required)
     * @param  int $cache_settings (required)
     * @param  string $accept (optional)
     * @param  \OpenAPI\Client\Model\ApplicationCachePatchRequest $application_cache_patch_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatchAsync($edge_application_id, $cache_settings, $accept = null, $application_cache_patch_request = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatch'][0])
    {
        return $this->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatchAsyncWithHttpInfo($edge_application_id, $cache_settings, $accept, $application_cache_patch_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatchAsyncWithHttpInfo
     *
     * /edge_applications/:edge_application_id:/cache_settings/:cache_settings_id:
     *
     * @param  int $edge_application_id (required)
     * @param  int $cache_settings (required)
     * @param  string $accept (optional)
     * @param  \OpenAPI\Client\Model\ApplicationCachePatchRequest $application_cache_patch_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatchAsyncWithHttpInfo($edge_application_id, $cache_settings, $accept = null, $application_cache_patch_request = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatch'][0])
    {
        $returnType = '\OpenAPI\Client\Model\ApplicationCachePatchResponse';
        $request = $this->edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatchRequest($edge_application_id, $cache_settings, $accept, $application_cache_patch_request, $contentType);

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
     * Create request for operation 'edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatch'
     *
     * @param  int $edge_application_id (required)
     * @param  int $cache_settings (required)
     * @param  string $accept (optional)
     * @param  \OpenAPI\Client\Model\ApplicationCachePatchRequest $application_cache_patch_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatch'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatchRequest($edge_application_id, $cache_settings, $accept = null, $application_cache_patch_request = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatch'][0])
    {

        // verify the required parameter 'edge_application_id' is set
        if ($edge_application_id === null || (is_array($edge_application_id) && count($edge_application_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $edge_application_id when calling edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatch'
            );
        }

        // verify the required parameter 'cache_settings' is set
        if ($cache_settings === null || (is_array($cache_settings) && count($cache_settings) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cache_settings when calling edgeApplicationsEdgeApplicationIdCacheSettingsCacheSettingsPatch'
            );
        }




        $resourcePath = '/edge_applications/{edge_application_id}/cache_settings/{cache_settings}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }

        // path params
        if ($edge_application_id !== null) {
            $resourcePath = str_replace(
                '{' . 'edge_application_id' . '}',
                ObjectSerializer::toPathValue($edge_application_id),
                $resourcePath
            );
        }
        // path params
        if ($cache_settings !== null) {
            $resourcePath = str_replace(
                '{' . 'cache_settings' . '}',
                ObjectSerializer::toPathValue($cache_settings),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json; version=3', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($application_cache_patch_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($application_cache_patch_request));
            } else {
                $httpBody = $application_cache_patch_request;
            }
        } elseif (count($formParams) > 0) {
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
            'PATCH',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsGet
     *
     * /edge_applications/{edge_application_id}/cache_settings
     *
     * @param  int $edge_application_id edge_application_id (required)
     * @param  int $page page (optional)
     * @param  int $page_size page_size (optional)
     * @param  string $filter filter (optional)
     * @param  string $order_by order_by (optional)
     * @param  string $sort sort (optional)
     * @param  string $accept accept (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsGet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\ApplicationCacheGetResponse
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsGet($edge_application_id, $page = null, $page_size = null, $filter = null, $order_by = null, $sort = null, $accept = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsGet'][0])
    {
        list($response) = $this->edgeApplicationsEdgeApplicationIdCacheSettingsGetWithHttpInfo($edge_application_id, $page, $page_size, $filter, $order_by, $sort, $accept, $contentType);
        return $response;
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsGetWithHttpInfo
     *
     * /edge_applications/{edge_application_id}/cache_settings
     *
     * @param  int $edge_application_id (required)
     * @param  int $page (optional)
     * @param  int $page_size (optional)
     * @param  string $filter (optional)
     * @param  string $order_by (optional)
     * @param  string $sort (optional)
     * @param  string $accept (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsGet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\ApplicationCacheGetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsGetWithHttpInfo($edge_application_id, $page = null, $page_size = null, $filter = null, $order_by = null, $sort = null, $accept = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsGet'][0])
    {
        $request = $this->edgeApplicationsEdgeApplicationIdCacheSettingsGetRequest($edge_application_id, $page, $page_size, $filter, $order_by, $sort, $accept, $contentType);

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
                    if ('\OpenAPI\Client\Model\ApplicationCacheGetResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ApplicationCacheGetResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ApplicationCacheGetResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\ApplicationCacheGetResponse';
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
                        '\OpenAPI\Client\Model\ApplicationCacheGetResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsGetAsync
     *
     * /edge_applications/{edge_application_id}/cache_settings
     *
     * @param  int $edge_application_id (required)
     * @param  int $page (optional)
     * @param  int $page_size (optional)
     * @param  string $filter (optional)
     * @param  string $order_by (optional)
     * @param  string $sort (optional)
     * @param  string $accept (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsGetAsync($edge_application_id, $page = null, $page_size = null, $filter = null, $order_by = null, $sort = null, $accept = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsGet'][0])
    {
        return $this->edgeApplicationsEdgeApplicationIdCacheSettingsGetAsyncWithHttpInfo($edge_application_id, $page, $page_size, $filter, $order_by, $sort, $accept, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsGetAsyncWithHttpInfo
     *
     * /edge_applications/{edge_application_id}/cache_settings
     *
     * @param  int $edge_application_id (required)
     * @param  int $page (optional)
     * @param  int $page_size (optional)
     * @param  string $filter (optional)
     * @param  string $order_by (optional)
     * @param  string $sort (optional)
     * @param  string $accept (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsGetAsyncWithHttpInfo($edge_application_id, $page = null, $page_size = null, $filter = null, $order_by = null, $sort = null, $accept = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsGet'][0])
    {
        $returnType = '\OpenAPI\Client\Model\ApplicationCacheGetResponse';
        $request = $this->edgeApplicationsEdgeApplicationIdCacheSettingsGetRequest($edge_application_id, $page, $page_size, $filter, $order_by, $sort, $accept, $contentType);

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
     * Create request for operation 'edgeApplicationsEdgeApplicationIdCacheSettingsGet'
     *
     * @param  int $edge_application_id (required)
     * @param  int $page (optional)
     * @param  int $page_size (optional)
     * @param  string $filter (optional)
     * @param  string $order_by (optional)
     * @param  string $sort (optional)
     * @param  string $accept (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsGetRequest($edge_application_id, $page = null, $page_size = null, $filter = null, $order_by = null, $sort = null, $accept = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsGet'][0])
    {

        // verify the required parameter 'edge_application_id' is set
        if ($edge_application_id === null || (is_array($edge_application_id) && count($edge_application_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $edge_application_id when calling edgeApplicationsEdgeApplicationIdCacheSettingsGet'
            );
        }








        $resourcePath = '/edge_applications/{edge_application_id}/cache_settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page_size,
            'page_size', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter,
            'filter', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order_by,
            'order_by', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }

        // path params
        if ($edge_application_id !== null) {
            $resourcePath = str_replace(
                '{' . 'edge_application_id' . '}',
                ObjectSerializer::toPathValue($edge_application_id),
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
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsPost
     *
     * /edge_applications/:edge_application_id:/cache_settings
     *
     * @param  int $edge_application_id edge_application_id (required)
     * @param  string $accept accept (optional)
     * @param  string $content_type The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json (optional)
     * @param  \OpenAPI\Client\Model\ApplicationCacheCreateRequest $application_cache_create_request application_cache_create_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsPost'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\ApplicationCacheCreateResponse
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsPost($edge_application_id, $accept = null, $content_type = null, $application_cache_create_request = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsPost'][0])
    {
        list($response) = $this->edgeApplicationsEdgeApplicationIdCacheSettingsPostWithHttpInfo($edge_application_id, $accept, $content_type, $application_cache_create_request, $contentType);
        return $response;
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsPostWithHttpInfo
     *
     * /edge_applications/:edge_application_id:/cache_settings
     *
     * @param  int $edge_application_id (required)
     * @param  string $accept (optional)
     * @param  string $content_type The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json (optional)
     * @param  \OpenAPI\Client\Model\ApplicationCacheCreateRequest $application_cache_create_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsPost'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\ApplicationCacheCreateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsPostWithHttpInfo($edge_application_id, $accept = null, $content_type = null, $application_cache_create_request = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsPost'][0])
    {
        $request = $this->edgeApplicationsEdgeApplicationIdCacheSettingsPostRequest($edge_application_id, $accept, $content_type, $application_cache_create_request, $contentType);

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
                    if ('\OpenAPI\Client\Model\ApplicationCacheCreateResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ApplicationCacheCreateResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ApplicationCacheCreateResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\ApplicationCacheCreateResponse';
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
                        '\OpenAPI\Client\Model\ApplicationCacheCreateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsPostAsync
     *
     * /edge_applications/:edge_application_id:/cache_settings
     *
     * @param  int $edge_application_id (required)
     * @param  string $accept (optional)
     * @param  string $content_type The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json (optional)
     * @param  \OpenAPI\Client\Model\ApplicationCacheCreateRequest $application_cache_create_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsPostAsync($edge_application_id, $accept = null, $content_type = null, $application_cache_create_request = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsPost'][0])
    {
        return $this->edgeApplicationsEdgeApplicationIdCacheSettingsPostAsyncWithHttpInfo($edge_application_id, $accept, $content_type, $application_cache_create_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation edgeApplicationsEdgeApplicationIdCacheSettingsPostAsyncWithHttpInfo
     *
     * /edge_applications/:edge_application_id:/cache_settings
     *
     * @param  int $edge_application_id (required)
     * @param  string $accept (optional)
     * @param  string $content_type The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json (optional)
     * @param  \OpenAPI\Client\Model\ApplicationCacheCreateRequest $application_cache_create_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsPostAsyncWithHttpInfo($edge_application_id, $accept = null, $content_type = null, $application_cache_create_request = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsPost'][0])
    {
        $returnType = '\OpenAPI\Client\Model\ApplicationCacheCreateResponse';
        $request = $this->edgeApplicationsEdgeApplicationIdCacheSettingsPostRequest($edge_application_id, $accept, $content_type, $application_cache_create_request, $contentType);

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
     * Create request for operation 'edgeApplicationsEdgeApplicationIdCacheSettingsPost'
     *
     * @param  int $edge_application_id (required)
     * @param  string $accept (optional)
     * @param  string $content_type The type of coding used in the Body (application/json). &lt;br&gt;  Example: Content-Type: application/json (optional)
     * @param  \OpenAPI\Client\Model\ApplicationCacheCreateRequest $application_cache_create_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function edgeApplicationsEdgeApplicationIdCacheSettingsPostRequest($edge_application_id, $accept = null, $content_type = null, $application_cache_create_request = null, string $contentType = self::contentTypes['edgeApplicationsEdgeApplicationIdCacheSettingsPost'][0])
    {

        // verify the required parameter 'edge_application_id' is set
        if ($edge_application_id === null || (is_array($edge_application_id) && count($edge_application_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $edge_application_id when calling edgeApplicationsEdgeApplicationIdCacheSettingsPost'
            );
        }





        $resourcePath = '/edge_applications/{edge_application_id}/cache_settings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }

        // path params
        if ($edge_application_id !== null) {
            $resourcePath = str_replace(
                '{' . 'edge_application_id' . '}',
                ObjectSerializer::toPathValue($edge_application_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json; version=3', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($application_cache_create_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($application_cache_create_request));
            } else {
                $httpBody = $application_cache_create_request;
            }
        } elseif (count($formParams) > 0) {
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
            'POST',
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
