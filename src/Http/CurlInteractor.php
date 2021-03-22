<?php

namespace Frlnc\Slack\Http;

use Frlnc\Slack\Contracts\Http\Interactor;
use Frlnc\Slack\Contracts\Http\Response;
use Frlnc\Slack\Contracts\Http\ResponseFactory;

class CurlInteractor implements Interactor
{

    /**
     * The response factory to use.
     *
     * @var ResponseFactory
     */
    protected $factory;

    /**
     * {@inheritdoc}
     */
    public function get(string $url, array $parameters = [], array $headers = []): Response
    {
        $request = $this->prepareRequest($url, $parameters, $headers);

        return $this->executeRequest($request);
    }

    /**
     * {@inheritdoc}
     */
    public function post(
        string $url,
        array $urlParameters = [],
        array $postParameters = [],
        array $headers = []
    ): Response {
        $request = $this->prepareRequest($url, $urlParameters, $headers);

        curl_setopt($request, CURLOPT_POST, count($postParameters));
        curl_setopt($request, CURLOPT_POSTFIELDS, http_build_query($postParameters));

        return $this->executeRequest($request);
    }

    /**
     * Executes a curl request.
     *
     * @param resource $request
     */
    public function executeRequest($request): Response
    {
        $body = curl_exec($request);
        $info = curl_getinfo($request);

        curl_close($request);

        $statusCode = $info['http_code'];
        $headers = $info['request_header'];

        if (function_exists('http_parse_headers')) {
            $headers = http_parse_headers($headers);
        } else {
            $header_text = substr($headers, 0, strpos($headers, "\r\n\r\n"));
            $headers = [];

            foreach (explode("\r\n", $header_text) as $i => $line) {
                if ($i === 0) {
                    continue;
                } else {
                    list ($key, $value) = explode(': ', $line);

                    $headers[$key] = $value;
                }
            }
        }

        return $this->factory->build($body, $headers, $statusCode);
    }

    /**
     * {@inheritdoc}
     */
    public function setResponseFactory(ResponseFactory $factory): self
    {
        $this->factory = $factory;

        return $this;
    }

    /**
     * Prepares a request using curl.
     *
     * @param string $url [description]
     * @param array $parameters [description]
     * @param array $headers [description]
     * @return resource
     */
    protected static function prepareRequest($url, $parameters = [], $headers = [])
    {
        $request = curl_init();

        if ($query = http_build_query($parameters)) {
            $url .= '?' . $query;
        }

        curl_setopt($request, CURLOPT_URL, $url);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($request, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($request, CURLINFO_HEADER_OUT, true);
        curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false);

        return $request;
    }
}
