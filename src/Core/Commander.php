<?php

namespace Frlnc\Slack\Core;

use Frlnc\Slack\Contracts\Http\Interactor;
use Frlnc\Slack\Contracts\Http\Response;
use InvalidArgumentException;

class Commander
{

    /**
     * The default command headers.
     *
     * @var array<string, string>
     */
    protected static $defaultHeaders = [];

    /**
     * The commands.
     *
     * @var array
     * @link https://api.slack.com/methods
     */
    protected static $commands = [
        'api.test' => [
            'endpoint' => '/api.test',
            'token' => false,
            'post' => true,
        ],
        'auth.test' => [
            'endpoint' => '/auth.test',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.archive */
        'channels.archive' => [
            'token' => true,
            'endpoint' => '/channels.archive',
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.create */
        'channels.create' => [
            'token' => true,
            'endpoint' => '/channels.create',
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.history */
        'channels.history' => [
            'token' => true,
            'endpoint' => '/channels.history',
        ],
        /** @deprecated please use this method instead: conversations.info */
        'channels.info' => [
            'token' => true,
            'endpoint' => '/channels.info',
        ],
        /** @deprecated please use this method instead: conversations.invite */
        'channels.invite' => [
            'token' => true,
            'endpoint' => '/channels.invite',
        ],
        /** @deprecated please use this method instead: conversations.join */
        'channels.join' => [
            'token' => true,
            'endpoint' => '/channels.join',
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.kick */
        'channels.kick' => [
            'token' => true,
            'endpoint' => '/channels.kick',
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.leave */
        'channels.leave' => [
            'token' => true,
            'endpoint' => '/channels.leave',
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.list */
        'channels.list' => [
            'token' => true,
            'endpoint' => '/channels.list',
        ],
        /** @deprecated please use this method instead: conversations.mark */
        'channels.mark' => [
            'token' => true,
            'endpoint' => '/channels.mark',
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.rename */
        'channels.rename' => [
            'token' => true,
            'endpoint' => '/channels.rename',
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.setPurpose */
        'channels.setPurpose' => [
            'token' => true,
            'endpoint' => '/channels.setPurpose',
            'format' => [
                'purpose',
            ],
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.setTopic */
        'channels.setTopic' => [
            'token' => true,
            'endpoint' => '/channels.setTopic',
            'format' => [
                'topic',
            ],
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.unarchive */
        'channels.unarchive' => [
            'token' => true,
            'endpoint' => '/channels.unarchive',
            'post' => true,
        ],
        'chat.delete' => [
            'token' => true,
            'endpoint' => '/chat.delete',
            'post' => true,
        ],
        'chat.postMessage' => [
            'token' => true,
            'endpoint' => '/chat.postMessage',
            'format' => [
                'text',
                'username',
            ],
            'post' => true,
        ],
        'chat.update' => [
            'token' => true,
            'endpoint' => '/chat.update',
            'format' => [
                'text',
            ],
            'post' => true,
        ],
        'dnd.endDnd' => [
            'token' => true,
            'endpoint' => '/dnd.endDnd',
            'post' => true,
        ],
        'dnd.endSnooze' => [
            'token' => true,
            'endpoint' => '/dnd.endSnooze',
            'post' => true,
        ],
        'dnd.info' => [
            'token' => true,
            'endpoint' => '/dnd.info',
        ],
        'dnd.setSnooze' => [
            'token' => true,
            'endpoint' => '/dnd.setSnooze',
        ],
        'dnd.teamInfo' => [
            'token' => true,
            'endpoint' => '/dnd.teamInfo',
        ],
        'emoji.list' => [
            'token' => true,
            'endpoint' => '/emoji.list',
        ],
        'files.comments.delete' => [
            'token' => true,
            'endpoint' => '/files.comments.delete',
            'post' => true,
        ],
        'files.delete' => [
            'token' => true,
            'endpoint' => '/files.delete',
            'post' => true,
        ],
        'files.info' => [
            'token' => true,
            'endpoint' => '/files.info',
        ],
        'files.list' => [
            'token' => true,
            'endpoint' => '/files.list',
        ],
        'files.revokePublicURL' => [
            'token' => true,
            'endpoint' => '/files.revokePublicURL',
            'post' => true,
        ],
        'files.sharedPublicURL' => [
            'token' => true,
            'endpoint' => '/files.sharedPublicURL',
            'post' => true,
        ],
        'files.upload' => [
            'token' => true,
            'endpoint' => '/files.upload',
            'post' => true,
            'headers' => [
                'Content-Type' => 'multipart/form-data',
            ],
            'format' => [
                'filename',
                'title',
                'initial_comment',
            ],
        ],
        /** @deprecated please use this method instead: conversations.archive */
        'groups.archive' => [
            'token' => true,
            'endpoint' => '/groups.archive',
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.create */
        'groups.create' => [
            'token' => true,
            'endpoint' => '/groups.create',
            'format' => [
                'name',
            ],
            'post' => true,
        ],
        /** @deprecated There are no exact Conversations API equivalents for this method. */
        'groups.createChild' => [
            'token' => true,
            'endpoint' => '/groups.createChild',
        ],
        /** @deprecated please use this method instead: conversations.history */
        'groups.history' => [
            'token' => true,
            'endpoint' => '/groups.history',
        ],
        /** @deprecated please use this method instead: conversations.info */
        'groups.info' => [
            'token' => true,
            'endpoint' => '/groups.info',
        ],
        /** @deprecated please use this method instead: conversations.invite */
        'groups.invite' => [
            'token' => true,
            'endpoint' => '/groups.invite',
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.kick */
        'groups.kick' => [
            'token' => true,
            'endpoint' => '/groups.kick',
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.leave */
        'groups.leave' => [
            'token' => true,
            'endpoint' => '/groups.leave',
            'post' => true,
        ],
        /** @deprecated please use these methods instead: conversations.list or users.conversations */
        'groups.list' => [
            'token' => true,
            'endpoint' => '/groups.list',
        ],
        /** @deprecated please use this method instead: conversations.mark */
        'groups.mark' => [
            'token' => true,
            'endpoint' => '/groups.mark',
            'post' => true,
        ],
        /** @deprecated There are no exact Conversations API equivalents for this method. */
        'groups.open' => [
            'token' => true,
            'endpoint' => '/groups.open',
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.rename */
        'groups.rename' => [
            'token' => true,
            'endpoint' => '/groups.rename',
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.setPurpose */
        'groups.setPurpose' => [
            'token' => true,
            'endpoint' => '/groups.setPurpose',
            'format' => [
                'purpose',
            ],
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.setTopic */
        'groups.setTopic' => [
            'token' => true,
            'endpoint' => '/groups.setTopic',
            'format' => [
                'topic',
            ],
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.unarchive */
        'groups.unarchive' => [
            'token' => true,
            'endpoint' => '/groups.unarchive',
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.close */
        'im.close' => [
            'token' => true,
            'endpoint' => '/im.close',
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.history */
        'im.history' => [
            'token' => true,
            'endpoint' => '/im.history',
        ],
        /** @deprecated please use these methods instead: conversations.list or users.conversations */
        'im.list' => [
            'token' => true,
            'endpoint' => '/im.list',
        ],
        /** @deprecated please use this method instead: conversations.mark */
        'im.mark' => [
            'token' => true,
            'endpoint' => '/im.mark',
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.open */
        'im.open' => [
            'token' => true,
            'endpoint' => '/im.open',
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.close */
        'mpim.close' => [
            'token' => true,
            'endpoint' => '/mpim.close',
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.history */
        'mpim.history' => [
            'token' => true,
            'endpoint' => '/mpmim.history',
        ],
        /** @deprecated please use these methods instead: conversations.list or users.conversations */
        'mpim.list' => [
            'token' => true,
            'endpoint' => '/mpim.list',
        ],
        /** @deprecated please use this method instead: conversations.mark */
        'mpim.mark' => [
            'token' => true,
            'endpoint' => '/mpim.mark',
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.open */
        'mpim.open' => [
            'token' => true,
            'endpoint' => '/mpim.open',
            'post' => true,
        ],
        /**
         * This is a legacy method only used by classic Slack apps.
         * Use oauth.v2.access for new Slack apps.
         */
        'oauth.access' => [
            'token' => false,
            'endpoint' => '/oauth.access',
            'post' => true,
        ],
        'pins.add' => [
            'token' => true,
            'endpoint' => '/pins.add',
            'post' => true,
        ],
        'pins.list' => [
            'token' => true,
            'endpoint' => '/pins.list',
        ],
        'pins.remove' => [
            'token' => true,
            'endpoint' => '/pins.remove',
            'post' => true,
        ],
        'reactions.add' => [
            'token' => true,
            'endpoint' => '/reactions.add',
            'post' => true,
        ],
        'reactions.get' => [
            'token' => true,
            'endpoint' => '/reactions.get',
        ],
        'reactions.list' => [
            'token' => true,
            'endpoint' => '/reactions.list',
        ],
        'reactions.remove' => [
            'token' => true,
            'endpoint' => '/reactions.remove',
            'post' => true,
        ],
        'rtm.start' => [
            'token' => true,
            'endpoint' => '/rtm.start',
        ],
        'search.all' => [
            'token' => true,
            'endpoint' => '/search.all',
        ],
        'search.files' => [
            'token' => true,
            'endpoint' => '/search.files',
        ],
        'search.messages' => [
            'token' => true,
            'endpoint' => '/search.messages',
        ],
        'stars.add' => [
            'token' => true,
            'endpoint' => '/stars.add',
            'post' => true,
        ],
        'stars.list' => [
            'token' => true,
            'endpoint' => '/stars.list',
        ],
        'stars.remove' => [
            'token' => true,
            'endpoint' => '/stars.remove',
            'post' => true,
        ],
        'team.accessLogs' => [
            'token' => true,
            'endpoint' => '/team.accessLogs',
        ],
        'team.info' => [
            'token' => true,
            'endpoint' => '/team.info',
        ],
        'team.integrationLogs' => [
            'token' => true,
            'endpoint' => '/team.integrationLogs',
        ],
        'usergroups.create' => [
            'token' => true,
            'endpoint' => '/usergroups.create',
            'post' => true,
        ],
        'usergroups.disable' => [
            'token' => true,
            'endpoint' => '/usergroups.disable',
            'post' => true,
        ],
        'usergroups.enable' => [
            'token' => true,
            'endpoint' => '/usergroups.enable',
            'post' => true,
        ],
        'usergroups.list' => [
            'token' => true,
            'endpoint' => '/usergroups.list',
        ],
        'usergroups.update' => [
            'token' => true,
            'endpoint' => '/usergroups.update',
            'post' => true,
        ],
        'usergroups.users.list' => [
            'token' => true,
            'endpoint' => '/usergroups.users.list',
        ],
        'usergroups.users.update' => [
            'token' => true,
            'endpoint' => '/usergroups.users.update',
            'post' => true,
        ],
        'users.getPresence' => [
            'token' => true,
            'endpoint' => '/users.getPresence',
        ],
        'users.info' => [
            'token' => true,
            'endpoint' => '/users.info',
        ],
        'users.list' => [
            'token' => true,
            'endpoint' => '/users.list',
        ],
        /**
         * @deprecated This method is no longer functional
         * and the behavior it controlled is no longer offered.
         */
        'users.setActive' => [
            'token' => true,
            'endpoint' => '/users.setActive',
            'post' => true,
        ],
        'users.setPresence' => [
            'token' => true,
            'endpoint' => '/users.setPresence',
            'post' => true,
        ],
    ];

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
    public function execute($command, array $parameters = []): Response
    {
        if (!isset(self::$commands[$command])) {
            throw new InvalidArgumentException(
                "The command '{$command}' is not currently supported"
            );
        }

        $command = self::$commands[$command];

        if ($command['token']) {
            $parameters = array_merge($parameters, ['token' => $this->token]);
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
