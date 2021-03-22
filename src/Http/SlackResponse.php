<?php

namespace Frlnc\Slack\Http;

use Frlnc\Slack\Contracts\Http\Response;
use JsonSerializable;
use RuntimeException;

class SlackResponse implements Response, JsonSerializable
{
    /**
     * The response body.
     *
     * @var string
     */
    protected $body;

    /**
     * The response headers.
     *
     * @var array<string, string>
     */
    protected $headers;

    /**
     * The response status code.
     *
     * @var integer
     */
    protected $statusCode;

    /**
     * @param array<string, string> $headers
     */
    public function __construct(string $body, array $headers = [], int $statusCode = 404)
    {
        if (!extension_loaded('json')) {
            throw new RuntimeException('ext-json is missing');
        }
        $this->body = json_decode($body, true);
        $this->headers = $headers;
        $this->statusCode = $statusCode;
    }

    /**
     * {@inheritdoc}
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * {@inheritdoc}
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    /**
     * Converts the response to an array.
     *
     * @return array<string, int|string|array<string, string>>
     */
    public function toArray(): array
    {
        return [
            'status_code' => $this->getStatusCode(),
            'headers' => $this->getHeaders(),
            'body' => $this->getBody(),
        ];
    }

}
