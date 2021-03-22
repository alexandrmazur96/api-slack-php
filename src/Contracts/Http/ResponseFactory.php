<?php

namespace Frlnc\Slack\Contracts\Http;

interface ResponseFactory
{

    /**
     * Builds the response.
     *
     * @param array<string, string> $headers
     */
    public function build(string $body, array $headers, int $statusCode): Response;
}
