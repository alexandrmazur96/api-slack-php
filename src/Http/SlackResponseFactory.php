<?php

namespace Frlnc\Slack\Http;

use Frlnc\Slack\Contracts\Http\Response;
use Frlnc\Slack\Contracts\Http\ResponseFactory;

final class SlackResponseFactory implements ResponseFactory {

    /**
     * {@inheritdoc}
     */
    public function build(string $body, array $headers, int $statusCode): Response
    {
        return new SlackResponse($body, $headers, $statusCode);
    }
}
