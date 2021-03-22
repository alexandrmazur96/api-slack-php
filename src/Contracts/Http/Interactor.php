<?php

namespace Frlnc\Slack\Contracts\Http;

interface Interactor
{
    /**
     * Send a get request to a URL.
     *
     * @param array<string, string> $parameters
     * @param array<string, string> $headers
     */
    public function get(string $url, array $parameters = [], array $headers = []): Response;

    /**
     * Send a post request to a URL.
     *
     *
     * @param array<string, string> $urlParameters
     * @param array<string, string> $postParameters
     * @param array<string, string> $headers
     */
    public function post(
        string $url,
        array $urlParameters = [],
        array $postParameters = [],
        array $headers = []
    ): Response;

    /**
     * Sets the response factory to use.
     */
    public function setResponseFactory(ResponseFactory $factory): self;
}
