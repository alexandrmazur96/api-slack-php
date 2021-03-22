<?php

namespace Frlnc\Slack\Core;

use Frlnc\Slack\Contracts\Http\Interactor;
use Frlnc\Slack\Contracts\Http\Response;
use InvalidArgumentException;

class Commander
{
    /**
     * The base URL.
     *
     * @var string
     */
    protected static $baseUrl = 'https://slack.com/api';

    /**
     * The API token.
     *
     * @var string
     */
    protected $token;

    /**
     * The Http interactor.
     *
     * @var Interactor
     */
    protected $interactor;

    public function __construct(string $token, Interactor $interactor)
    {
        $this->token = $token;
        $this->interactor = $interactor;
    }

    /**
     * Formats a string for Slack.
     */
    public static function format(string $string): string
    {
        $string = str_replace('&', '&amp;', $string);
        $string = str_replace('<', '&lt;', $string);
        $string = str_replace('>', '&gt;', $string);

        return $string;
    }

    /**
     * Executes a command.
     *
     * @param array<string, string> $parameters
     */
    public function execute(string $commandName, array $parameters = []): Response
    {
        if (!SlackMethods::available($commandName)) {
            throw new InvalidArgumentException(
                "The command '{$commandName}' is not currently supported"
            );
        }

        $command = SlackMethods::get($commandName);

        if ($command['token']) {
            if (array_key_exists('post', $command) && $command['post']) {
                // Authorization for POST method can be provided as request parameter.
                $parameters = array_merge($parameters, ['token' => $this->token]);
            } else {
                // Authorization for GET method should be provided in Authorization header.
                $command['headers'] = array_merge(
                    $command['headers'],
                    ['Authorization' => 'Bearer ' . $this->token]
                );
            }
        }

        if (isset($command['format'])) {
            foreach ($command['format'] as $format) {
                if (isset($parameters[$format])) {
                    $parameters[$format] = self::format($parameters[$format]);
                }
            }
        }

        $headers = [];
        if (isset($command['headers'])) {
            $headers = $command['headers'];
        }

        $url = self::$baseUrl . $command['endpoint'];

        if (isset($command['post']) && $command['post']) {
            return $this->interactor->post($url, [], $parameters, $headers);
        }

        return $this->interactor->get($url, $parameters, $headers);
    }

    /**
     * Sets the token.
     */
    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }
}
