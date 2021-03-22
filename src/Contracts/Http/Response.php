<?php

namespace Frlnc\Slack\Contracts\Http;

interface Response
{

    /**
     * Gets the body of the response.
     */
    public function getBody(): string;

    /**
     * Gets the headers of the response.
     *
     * @return array<string, string>
     */
    public function getHeaders(): array;

    /**
     * Gets the status code of the response.
     */
    public function getStatusCode(): int;
}
