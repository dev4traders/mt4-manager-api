<?php
/**
 * OnlineApi
 * PHP version 5
 *
 * @category Class
 * @package  D4T\MT4Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Metatrader 4 Rest Api
 *
 * MetaTrader microservice. Call /init/ to get token, which is required in other methods.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: mikha.dev@gmail.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.30
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace D4T\MT4Sdk\MT4Manager;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use D4T\MT4Sdk\ApiException;
use D4T\MT4Sdk\Configuration;
use D4T\MT4Sdk\HeaderSelector;
use D4T\MT4Sdk\ObjectSerializer;

/**
 * OnlineApi Class Doc Comment
 *
 * @category Class
 * @package  D4T\MT4Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OnlineApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation tradesOnlineUserLoginGet
     *
     * Get list of live trades for the user
     *
     * @param  string $token Session token (required)
     * @param  string $user_login The login that needs to be fetched for. (required)
     *
     * @throws \D4T\MT4Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \D4T\MT4Sdk\Models\ArrayOfTrades
     */
    public function tradesOnlineUserLoginGet($token, $user_login)
    {
        list($response) = $this->tradesOnlineUserLoginGetWithHttpInfo($token, $user_login);
        return $response;
    }

    /**
     * Operation tradesOnlineUserLoginGetWithHttpInfo
     *
     * Get list of live trades for the user
     *
     * @param  string $token Session token (required)
     * @param  string $user_login The login that needs to be fetched for. (required)
     *
     * @throws \D4T\MT4Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \D4T\MT4Sdk\Models\ArrayOfTrades, HTTP status code, HTTP response headers (array of strings)
     */
    public function tradesOnlineUserLoginGetWithHttpInfo($token, $user_login)
    {
        $returnType = '\D4T\MT4Sdk\Models\ArrayOfTrades';
        $request = $this->tradesOnlineUserLoginGetRequest($token, $user_login);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\D4T\MT4Sdk\Models\ArrayOfTrades',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\D4T\MT4Sdk\Models\ReturnType',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation tradesOnlineUserLoginGetAsync
     *
     * Get list of live trades for the user
     *
     * @param  string $token Session token (required)
     * @param  string $user_login The login that needs to be fetched for. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tradesOnlineUserLoginGetAsync($token, $user_login)
    {
        return $this->tradesOnlineUserLoginGetAsyncWithHttpInfo($token, $user_login)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tradesOnlineUserLoginGetAsyncWithHttpInfo
     *
     * Get list of live trades for the user
     *
     * @param  string $token Session token (required)
     * @param  string $user_login The login that needs to be fetched for. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tradesOnlineUserLoginGetAsyncWithHttpInfo($token, $user_login)
    {
        $returnType = '\D4T\MT4Sdk\Models\ArrayOfTrades';
        $request = $this->tradesOnlineUserLoginGetRequest($token, $user_login);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'tradesOnlineUserLoginGet'
     *
     * @param  string $token Session token (required)
     * @param  string $user_login The login that needs to be fetched for. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function tradesOnlineUserLoginGetRequest($token, $user_login)
    {
        // verify the required parameter 'token' is set
        if ($token === null || (is_array($token) && count($token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $token when calling tradesOnlineUserLoginGet'
            );
        }
        // verify the required parameter 'user_login' is set
        if ($user_login === null || (is_array($user_login) && count($user_login) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_login when calling tradesOnlineUserLoginGet'
            );
        }

        $resourcePath = '/trades/online/{user_login}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($token !== null) {
            $queryParams['token'] = ObjectSerializer::toQueryValue($token);
        }

        // path params
        if ($user_login !== null) {
            $resourcePath = str_replace(
                '{' . 'user_login' . '}',
                ObjectSerializer::toPathValue($user_login),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation usersOnlineGet
     *
     * Get list of online users
     *
     * @param  string $token Session token (required)
     *
     * @throws \D4T\MT4Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \D4T\MT4Sdk\Models\ArrayOfOnlineUsers
     */
    public function usersOnlineGet($token)
    {
        list($response) = $this->usersOnlineGetWithHttpInfo($token);
        return $response;
    }

    /**
     * Operation usersOnlineGetWithHttpInfo
     *
     * Get list of online users
     *
     * @param  string $token Session token (required)
     *
     * @throws \D4T\MT4Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \D4T\MT4Sdk\Models\ArrayOfOnlineUsers, HTTP status code, HTTP response headers (array of strings)
     */
    public function usersOnlineGetWithHttpInfo($token)
    {
        $returnType = '\D4T\MT4Sdk\Models\ArrayOfOnlineUsers';
        $request = $this->usersOnlineGetRequest($token);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\D4T\MT4Sdk\Models\ArrayOfOnlineUsers',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\D4T\MT4Sdk\Models\ReturnType',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation usersOnlineGetAsync
     *
     * Get list of online users
     *
     * @param  string $token Session token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function usersOnlineGetAsync($token)
    {
        return $this->usersOnlineGetAsyncWithHttpInfo($token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation usersOnlineGetAsyncWithHttpInfo
     *
     * Get list of online users
     *
     * @param  string $token Session token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function usersOnlineGetAsyncWithHttpInfo($token)
    {
        $returnType = '\D4T\MT4Sdk\Models\ArrayOfOnlineUsers';
        $request = $this->usersOnlineGetRequest($token);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'usersOnlineGet'
     *
     * @param  string $token Session token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function usersOnlineGetRequest($token)
    {
        // verify the required parameter 'token' is set
        if ($token === null || (is_array($token) && count($token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $token when calling usersOnlineGet'
            );
        }

        $resourcePath = '/users/online';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($token !== null) {
            $queryParams['token'] = ObjectSerializer::toQueryValue($token);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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