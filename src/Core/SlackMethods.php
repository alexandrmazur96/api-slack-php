<?php

namespace Frlnc\Slack\Core;

/**
 * @link https://api.slack.com/methods
 */
class SlackMethods
{
    protected static $AVAILABLE_COMMANDS = [
        'admin.analytics.getFile' => [
            'endpoint' => '/admin.analytics.getFile',
            'token' => true,
        ],
        'admin.apps.remove' => [
            'endpoint' => '/admin.apps.remove',
            'token' => true,
            'post' => true,
        ],
        'admin.apps.clearResolution' => [
            'endpoint' => '/admin.apps.clearResolution',
            'token' => true,
            'post' => true,
        ],
        'admin.apps.restrict' => [
            'endpoint' => '/admin.apps.restrict',
            'token' => true,
            'post' => true,
        ],
        'admin.apps.approved.list' => [
            'endpoint' => '/admin.apps.approved.list',
            'token' => true,
        ],
        'admin.apps.requests.list' => [
            'endpoint' => '/admin.apps.requests.list',
            'token' => true,
        ],
        'admin.apps.restricted.list' => [
            'endpoint' => '/admin.apps.restricted.list',
            'token' => true,
        ],
        'admin.barriers.create' => [
            'endpoint' => '/admin.barriers.create',
            'token' => true,
        ],
        'admin.barriers.delete' => [
            'endpoint' => '/admin.barriers.delete',
            'token' => true,
        ],
        'admin.barriers.list' => [
            'endpoint' => '/admin.barriers.list',
            'token' => true,
        ],
        'admin.barriers.update' => [
            'endpoint' => '/admin.barriers.update',
            'token' => true,
        ],
        'admin.conversations.archive' => [
            'endpoint' => '/admin.conversations.archive',
            'token' => true,
            'post' => true,
        ],
        'admin.conversations.convertToPrivate' => [
            'endpoint' => '/admin.conversations.convertToPrivate',
            'token' => true,
            'post' => true,
        ],
        'admin.conversations.create' => [
            'endpoint' => '/admin.conversations.create',
            'token' => true,
            'post' => true,
        ],
        'admin.conversations.delete' => [
            'endpoint' => '/admin.conversations.delete',
            'token' => true,
            'post' => true,
        ],
        'admin.conversations.getConversationPrefs' => [
            'endpoint' => '/admin.conversations.getConversationPrefs',
            'token' => true,
            'post' => true,
        ],
        'admin.conversations.getCustomRetention' => [
            'endpoint' => '/admin.conversations.getCustomRetention',
            'token' => true,
            'post' => true,
        ],
        'admin.conversations.getTeams' => [
            'endpoint' => '/admin.conversations.getTeams',
            'token' => true,
            'post' => true,
        ],
        'admin.conversations.invite' => [
            'endpoint' => '/admin.conversations.invite',
            'token' => true,
            'post' => true,
        ],
        'admin.conversations.removeCustomRetention' => [
            'endpoint' => '/admin.conversations.removeCustomRetention',
            'token' => true,
            'post' => true,
        ],
        'admin.conversations.rename' => [
            'endpoint' => '/admin.conversations.rename',
            'token' => true,
            'post' => true,
        ],
        'admin.conversations.search' => [
            'endpoint' => '/admin.conversations.search',
            'token' => true,
            'post' => true,
        ],
        'admin.conversations.setConversationPrefs' => [
            'endpoint' => '/admin.conversations.setConversationPrefs',
            'token' => true,
            'post' => true,
        ],
        'admin.conversations.setCustomRetention' => [
            'endpoint' => '/admin.conversations.setCustomRetention',
            'token' => true,
            'post' => true,
        ],
        'admin.conversations.setTeams' => [
            'endpoint' => '/admin.conversations.setTeams',
            'token' => true,
            'post' => true,
        ],
        'admin.conversations.unarchive' => [
            'endpoint' => '/admin.conversations.unarchive',
            'token' => true,
            'post' => true,
        ],
        'admin.conversations.ekm.listOriginalConnectedChannelInfo' => [
            'endpoint' => '/admin.conversations.ekm.listOriginalConnectedChannelInfo',
            'token' => true,
        ],
        'admin.conversations.restrictAccess.addGroup' => [
            'endpoint' => '/admin.conversations.restrictAccess.addGroup',
            'token' => true,
        ],
        'admin.conversations.restrictAccess.listGroups' => [
            'endpoint' => '/admin.conversations.restrictAccess.listGroups',
            'token' => true,
        ],
        'admin.conversations.restrictAccess.removeGroup' => [
            'endpoint' => '/admin.conversations.restrictAccess.removeGroup',
            'token' => true,
        ],
        'admin.emoji.add' => [
            'endpoint' => '/admin.emoji.add',
            'token' => true,
        ],
        'admin.emoji.addAlias' => [
            'endpoint' => '/admin.emoji.addAlias',
            'token' => true,
        ],
        'admin.emoji.list' => [
            'endpoint' => '/admin.emoji.list',
            'token' => true,
        ],
        'admin.emoji.remove' => [
            'endpoint' => '/admin.emoji.remove',
            'token' => true,
        ],
        'admin.emoji.rename' => [
            'endpoint' => '/admin.emoji.rename',
            'token' => true,
        ],
        'admin.inviteRequests.approve' => [
            'endpoint' => '/admin.inviteRequests.approve',
            'token' => true,
            'post' => true,
        ],
        'admin.inviteRequests.deny' => [
            'endpoint' => '/admin.inviteRequests.deny',
            'token' => true,
            'post' => true,
        ],
        'admin.inviteRequests.list' => [
            'endpoint' => '/admin.inviteRequests.list',
            'token' => true,
            'post' => true,
        ],
        'admin.inviteRequests.approved.list' => [
            'endpoint' => '/admin.inviteRequests.approved.list',
            'token' => true,
            'post' => true,
        ],
        'admin.inviteRequests.denied.list' => [
            'endpoint' => '/admin.inviteRequests.denied.list',
            'token' => true,
            'post' => true,
        ],
        'admin.teams.admins.list' => [
            'endpoint' => '/admin.teams.admins.list',
            'token' => true,
        ],
        'admin.teams.create' => [
            'endpoint' => '/admin.teams.create',
            'token' => true,
            'post' => true,
        ],
        'admin.teams.list' => [
            'endpoint' => '/admin.teams.list',
            'token' => true,
            'post' => true,
        ],
        'admin.teams.owners.list' => [
            'endpoint' => '/admin.teams.owners.list',
            'token' => true,
        ],
        'admin.teams.settings.info' => [
            'endpoint' => '/admin.teams.settings.info',
            'token' => true,
            'post' => true,
        ],
        'admin.teams.settings.setDefaultChannels' => [
            'endpoint' => '/admin.teams.settings.setDefaultChannels',
            'token' => true,
        ],
        'admin.teams.settings.setDescription' => [
            'endpoint' => '/admin.teams.settings.setDescription',
            'token' => true,
            'post' => true,
        ],
        'admin.teams.settings.setDiscoverability' => [
            'endpoint' => '/admin.teams.settings.setDiscoverability',
            'token' => true,
            'post' => true,
        ],
        'admin.teams.settings.setIcon' => [
            'endpoint' => '/admin.teams.settings.setIcon',
            'token' => true,
        ],
        'admin.teams.settings.setName' => [
            'endpoint' => '/admin.teams.settings.setName',
            'token' => true,
            'post' => true,
        ],
        'admin.usergroups.addChannels' => [
            'endpoint' => '/admin.usergroups.addChannels',
            'token' => true,
            'post' => true,
        ],
        'admin.usergroups.addTeams' => [
            'endpoint' => '/admin.usergroups.addTeams',
            'token' => true,
            'post' => true,
        ],
        'admin.usergroups.listChannels' => [
            'endpoint' => '/admin.usergroups.listChannels',
            'token' => true,
            'post' => true,
        ],
        'admin.usergroups.removeChannels' => [
            'endpoint' => '/admin.usergroups.removeChannels',
            'token' => true,
            'post' => true,
        ],
        'admin.users.assign' => [
            'endpoint' => '/admin.users.assign',
            'token' => true,
            'post' => true,
        ],
        'admin.users.invite' => [
            'endpoint' => '/admin.users.invite',
            'token' => true,
            'post' => true,
        ],
        'admin.users.list' => [
            'endpoint' => '/admin.users.list',
            'token' => true,
            'post' => true,
        ],
        'admin.users.remove' => [
            'endpoint' => '/admin.users.remove',
            'token' => true,
            'post' => true,
        ],
        'admin.users.setAdmin' => [
            'endpoint' => '/admin.users.setAdmin',
            'token' => true,
            'post' => true,
        ],
        'admin.users.setExpiration' => [
            'endpoint' => '/admin.users.setExpiration',
            'token' => true,
            'post' => true,
        ],
        'admin.users.setOwner' => [
            'endpoint' => '/admin.users.setOwner',
            'token' => true,
            'post' => true,
        ],
        'admin.users.setRegular' => [
            'endpoint' => '/admin.users.setRegular',
            'token' => true,
            'post' => true,
        ],
        'admin.users.session.clearSettings' => [
            'endpoint' => '/admin.users.session.clearSettings',
            'token' => true,
            'post' => true,
        ],
        'admin.users.session.getSettings' => [
            'endpoint' => '/admin.users.session.getSettings',
            'token' => true,
            'post' => true,
        ],
        'admin.users.session.invalidate' => [
            'endpoint' => '/admin.users.session.invalidate',
            'token' => true,
            'post' => true,
        ],
        'admin.users.session.list' => [
            'endpoint' => '/admin.users.session.list',
            'token' => true,
            'post' => true,
        ],
        'admin.users.session.reset' => [
            'endpoint' => '/admin.users.session.reset',
            'token' => true,
            'post' => true,
        ],
        'admin.users.session.setSettings' => [
            'endpoint' => '/admin.users.session.setSettings',
            'token' => true,
            'post' => true,
        ],
        'api.test' => [
            'endpoint' => '/api.test',
            'token' => false,
            'post' => true,
        ],
        'apps.connections.open' => [
            'endpoint' => '/apps.connections.open',
            'token' => true,
            'post' => true,
        ],
        'apps.event.authorizations.list' => [
            'endpoint' => '/apps.event.authorizations.list',
            'token' => true,
            'post' => true,
        ],
        'apps.uninstall' => [
            'endpoint' => '/apps.uninstall',
            'token' => true,
        ],
        'auth.revoke' => [
            'endpoint' => '/auth.revoke',
            'token' => true,
        ],
        'auth.test' => [
            'endpoint' => '/auth.test',
            'token' => true,
            'post' => true,
        ],
        'auth.teams.list' => [
            'endpoint' => '/auth.teams.list',
            'token' => true,
        ],
        'bots.info' => [
            'endpoint' => '/bots.info',
            'token' => true,
        ],
        'calls.add' => [
            'endpoint' => '/calls.add',
            'token' => true,
            'post' => true,
        ],
        'calls.end' => [
            'endpoint' => '/calls.end',
            'token' => true,
            'post' => true,
        ],
        'calls.info' => [
            'endpoint' => '/calls.info',
            'token' => true,
            'post' => true,
        ],
        'calls.update' => [
            'endpoint' => '/calls.update',
            'token' => true,
            'post' => true,
        ],
        'calls.participants.add' => [
            'endpoint' => '/calls.participants.add',
            'token' => true,
            'post' => true,
        ],
        'calls.participants.remove' => [
            'endpoint' => '/calls.participants.remove',
            'token' => true,
            'post' => true,
        ],
        'chat.delete' => [
            'endpoint' => '/chat.delete',
            'token' => true,
            'post' => true,
        ],
        'chat.deleteScheduledMessage' => [
            'endpoint' => '/chat.deleteScheduledMessage',
            'token' => true,
            'post' => true,
        ],
        'chat.getPermalink' => [
            'endpoint' => '/chat.getPermalink',
            'token' => true,
        ],
        'chat.meMessage' => [
            'endpoint' => '/chat.meMessage',
            'token' => true,
            'post' => true,
        ],
        'chat.postEphemeral' => [
            'endpoint' => '/chat.postEphemeral',
            'token' => true,
            'post' => true,
        ],
        'chat.postMessage' => [
            'endpoint' => '/chat.postMessage',
            'token' => true,
            'post' => true,
            'format' => [
                'text',
                'username',
            ],
        ],
        'chat.scheduleMessage' => [
            'endpoint' => '/chat.scheduleMessage',
            'token' => true,
            'post' => true,
        ],
        'chat.unfurl' => [
            'endpoint' => '/chat.unfurl',
            'token' => true,
            'post' => true,
        ],
        'chat.update' => [
            'endpoint' => '/chat.update',
            'token' => true,
            'post' => true,
            'format' => [
                'text',
            ],
        ],
        'chat.scheduledMessages.list' => [
            'endpoint' => '/chat.scheduledMessages.list',
            'token' => true,
            'post' => true,
        ],
        'conversations.archive' => [
            'endpoint' => '/conversations.archive',
            'token' => true,
            'post' => true,
        ],
        'conversations.close' => [
            'endpoint' => '/conversations.close',
            'token' => true,
            'post' => true,
        ],
        'conversations.create' => [
            'endpoint' => '/conversations.create',
            'token' => true,
            'post' => true,
        ],
        'conversations.history' => [
            'endpoint' => '/conversations.history',
            'token' => true,
        ],
        'conversations.info' => [
            'endpoint' => '/conversations.info',
            'token' => true,
        ],
        'conversations.invite' => [
            'endpoint' => '/conversations.invite',
            'token' => true,
            'post' => true,
        ],
        'conversations.join' => [
            'endpoint' => '/conversations.join',
            'token' => true,
            'post' => true,
        ],
        'conversations.kick' => [
            'endpoint' => '/conversations.kick',
            'token' => true,
            'post' => true,
        ],
        'conversations.leave' => [
            'endpoint' => '/conversations.leave',
            'token' => true,
            'post' => true,
        ],
        'conversations.list' => [
            'endpoint' => '/conversations.list',
            'token' => true,
        ],
        'conversations.mark' => [
            'endpoint' => '/conversations.mark',
            'token' => true,
            'post' => true,
        ],
        'conversations.members' => [
            'endpoint' => '/conversations.members',
            'token' => true,
        ],
        'conversations.open' => [
            'endpoint' => '/conversations.open',
            'token' => true,
            'post' => true,
        ],
        'conversations.rename' => [
            'endpoint' => '/conversations.rename',
            'token' => true,
            'post' => true,
        ],
        'conversations.replies' => [
            'endpoint' => '/conversations.replies',
            'token' => true,
        ],
        'conversations.setPurpose' => [
            'endpoint' => '/conversations.setPurpose',
            'token' => true,
            'post' => true,
        ],
        'conversations.setTopic' => [
            'endpoint' => '/conversations.setTopic',
            'token' => true,
            'post' => true,
        ],
        'conversations.unarchive' => [
            'endpoint' => '/conversations.unarchive',
            'token' => true,
            'post' => true,
        ],
        'dialog.open' => [
            'endpoint' => '/dialog.open',
            'token' => true,
            'post' => true,
        ],
        'dnd.endDnd' => [
            'endpoint' => '/dnd.endDnd',
            'token' => true,
            'post' => true,
        ],
        'dnd.endSnooze' => [
            'endpoint' => '/dnd.endSnooze',
            'token' => true,
            'post' => true,
        ],
        'dnd.info' => [
            'endpoint' => '/dnd.info',
            'token' => true,
        ],
        'dnd.setSnooze' => [
            'endpoint' => '/dnd.setSnooze',
            'token' => true,
        ],
        'dnd.teamInfo' => [
            'endpoint' => '/dnd.teamInfo',
            'token' => true,
        ],
        'emoji.list' => [
            'endpoint' => '/emoji.list',
            'token' => true,
        ],
        'files.comments.delete' => [
            'endpoint' => '/files.comments.delete',
            'token' => true,
            'post' => true,
        ],
        'files.delete' => [
            'endpoint' => '/files.delete',
            'token' => true,
            'post' => true,
        ],
        'files.info' => [
            'endpoint' => '/files.info',
            'token' => true,
        ],
        'files.list' => [
            'endpoint' => '/files.list',
            'token' => true,
        ],
        'files.revokePublicURL' => [
            'endpoint' => '/files.revokePublicURL',
            'token' => true,
            'post' => true,
        ],
        'files.sharedPublicURL' => [
            'endpoint' => '/files.sharedPublicURL',
            'token' => true,
            'post' => true,
        ],
        'files.upload' => [
            'endpoint' => '/files.upload',
            'token' => true,
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
        'files.remote.add' => [
            'endpoint' => '/files.remote.add',
            'token' => true,
        ],
        'files.remote.info' => [
            'endpoint' => '/files.remote.info',
            'token' => true,
        ],
        'files.remote.list' => [
            'endpoint' => '/files.remote.list',
            'token' => true,
        ],
        'files.remote.remove' => [
            'endpoint' => '/files.remote.remove',
            'token' => true,
        ],
        'files.remote.share' => [
            'endpoint' => '/files.remote.share',
            'token' => true,
        ],
        'files.remote.update' => [
            'endpoint' => '/files.remote.update',
            'token' => true,
        ],
        'migration.exchange' => [
            'endpoint' => '/migration.exchange',
            'token' => true,
        ],
        /**
         * This is a legacy method only used by classic Slack apps.
         * Use oauth.v2.access for new Slack apps.
         */
        'oauth.access' => [
            'endpoint' => '/oauth.access',
            'token' => false,
            'post' => true,
        ],
        /**
         * This deprecated method allowed you to exchange a temporary OAuth verifier
         * code for a "workspace token".
         * Use oauth.access to retrieve workspace tokens instead.
         */
        'oauth.token' => [
            'endpoint' => '/oauth.token',
            'token' => true,
            'post' => true,
        ],
        'oauth.v2.access' => [
            'endpoint' => '/oauth.v2.access',
            'token' => false,
            'post' => true,
        ],
        'pins.add' => [
            'endpoint' => '/pins.add',
            'token' => true,
            'post' => true,
        ],
        'pins.list' => [
            'endpoint' => '/pins.list',
            'token' => true,
        ],
        'pins.remove' => [
            'endpoint' => '/pins.remove',
            'token' => true,
            'post' => true,
        ],
        'reactions.add' => [
            'endpoint' => '/reactions.add',
            'token' => true,
            'post' => true,
        ],
        'reactions.get' => [
            'endpoint' => '/reactions.get',
            'token' => true,
        ],
        'reactions.list' => [
            'endpoint' => '/reactions.list',
            'token' => true,
        ],
        'reactions.remove' => [
            'endpoint' => '/reactions.remove',
            'token' => true,
            'post' => true,
        ],
        'reminders.add' => [
            'endpoint' => '/reminders.add',
            'token' => true,
            'post' => true,
        ],
        'reminders.complete' => [
            'endpoint' => '/reminders.complete',
            'token' => true,
            'post' => true,
        ],
        'reminders.delete' => [
            'endpoint' => '/reminders.delete',
            'token' => true,
            'post' => true,
        ],
        'reminders.info' => [
            'endpoint' => '/reminders.info',
            'token' => true,
        ],
        'reminders.list' => [
            'endpoint' => '/reminders.list',
            'token' => true,
        ],
        'rtm.connect' => [
            'endpoint' => '/rtm.connect',
            'token' => true,
        ],
        'rtm.start' => [
            'endpoint' => '/rtm.start',
            'token' => true,
        ],
        'search.all' => [
            'endpoint' => '/search.all',
            'token' => true,
        ],
        'search.files' => [
            'endpoint' => '/search.files',
            'token' => true,
        ],
        'search.messages' => [
            'endpoint' => '/search.messages',
            'token' => true,
        ],
        'stars.add' => [
            'endpoint' => '/stars.add',
            'token' => true,
            'post' => true,
        ],
        'stars.list' => [
            'endpoint' => '/stars.list',
            'token' => true,
        ],
        'stars.remove' => [
            'endpoint' => '/stars.remove',
            'token' => true,
            'post' => true,
        ],
        'team.accessLogs' => [
            'endpoint' => '/team.accessLogs',
            'token' => true,
        ],
        'team.billableInfo' => [
            'endpoint' => '/team.billableInfo',
            'token' => true,
        ],
        'team.info' => [
            'endpoint' => '/team.info',
            'token' => true,
        ],
        'team.integrationLogs' => [
            'endpoint' => '/team.integrationLogs',
            'token' => true,
        ],
        'team.profile.get' => [
            'endpoint' => '/team.profile.get',
            'token' => true,
        ],
        'usergroups.create' => [
            'endpoint' => '/usergroups.create',
            'token' => true,
            'post' => true,
        ],
        'usergroups.disable' => [
            'endpoint' => '/usergroups.disable',
            'token' => true,
            'post' => true,
        ],
        'usergroups.enable' => [
            'endpoint' => '/usergroups.enable',
            'token' => true,
            'post' => true,
        ],
        'usergroups.list' => [
            'endpoint' => '/usergroups.list',
            'token' => true,
        ],
        'usergroups.update' => [
            'endpoint' => '/usergroups.update',
            'token' => true,
            'post' => true,
        ],
        'usergroups.users.list' => [
            'endpoint' => '/usergroups.users.list',
            'token' => true,
        ],
        'usergroups.users.update' => [
            'endpoint' => '/usergroups.users.update',
            'token' => true,
            'post' => true,
        ],
        'users.conversations' => [
            'endpoint' => '/users.conversations',
            'token' => true,
        ],
        'users.deletePhoto' => [
            'endpoint' => '/users.deletePhoto',
            'token' => true,
        ],
        'users.getPresence' => [
            'endpoint' => '/users.getPresence',
            'token' => true,
        ],
        'users.identity' => [
            'endpoint' => '/users.identity',
            'token' => true,
        ],
        'users.info' => [
            'endpoint' => '/users.info',
            'token' => true,
        ],
        'users.list' => [
            'endpoint' => '/users.list',
            'token' => true,
        ],
        'users.lookupByEmail' => [
            'endpoint' => '/users.lookupByEmail',
            'token' => true,
        ],
        /**
         * @deprecated This method is no longer functional
         * and the behavior it controlled is no longer offered.
         */
        'users.setActive' => [
            'endpoint' => '/users.setActive',
            'token' => true,
            'post' => true,
        ],
        'users.setPhoto' => [
            'endpoint' => '/users.setPhoto',
            'token' => true,
            'post' => true,
        ],
        'users.setPresence' => [
            'endpoint' => '/users.setPresence',
            'token' => true,
            'post' => true,
        ],
        'users.profile.get' => [
            'endpoint' => '/users.profile.get',
            'token' => true,
        ],
        'users.profile.set' => [
            'endpoint' => '/users.profile.set',
            'token' => true,
            'post' => true,
        ],
        'views.open' => [
            'endpoint' => '/views.open',
            'token' => true,
            'post' => true,
        ],
        'views.publish' => [
            'endpoint' => '/views.publish',
            'token' => true,
            'post' => true,
        ],
        'views.push' => [
            'endpoint' => '/views.push',
            'token' => true,
            'post' => true,
        ],
        'views.update' => [
            'endpoint' => '/views.update',
            'token' => true,
            'post' => true,
        ],
        'workflows.stepCompleted' => [
            'endpoint' => '/workflows.stepCompleted',
            'token' => true,
            'post' => true,
        ],
        'workflows.stepFailed' => [
            'endpoint' => '/workflows.stepFailed',
            'token' => true,
            'post' => true,
        ],
        'workflows.updateStep' => [
            'endpoint' => '/workflows.updateStep',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated */
        'apps.permissions.info' => [
            'endpoint' => '/apps.permissions.info',
            'token' => true,
        ],
        /** @deprecated */
        'apps.permissions.request' => [
            'endpoint' => '/apps.permissions.request',
            'token' => true,
        ],
        /** @deprecated */
        'apps.permissions.resources.list' => [
            'endpoint' => '/apps.permissions.resources.list',
            'token' => true,
        ],
        /** @deprecated  */
        'apps.permissions.scopes.list' => [
            'endpoint' => '/apps.permissions.scopes.list',
            'token' => true,
        ],
        /** @deprecated */
        'apps.permissions.users.list' => [
            'endpoint' => '/apps.permissions.users.list',
            'token' => true,
        ],
        /** @deprecated */
        'apps.permissions.users.request' => [
            'endpoint' => '/apps.permissions.users.request',
            'token' => true,
        ],
        /** @deprecated please use this method instead: conversations.archive */
        'channels.archive' => [
            'endpoint' => '/channels.archive',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.create */
        'channels.create' => [
            'endpoint' => '/channels.create',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.history */
        'channels.history' => [
            'endpoint' => '/channels.history',
            'token' => true,
        ],
        /** @deprecated please use this method instead: conversations.info */
        'channels.info' => [
            'endpoint' => '/channels.info',
            'token' => true,
        ],
        /** @deprecated please use this method instead: conversations.invite */
        'channels.invite' => [
            'endpoint' => '/channels.invite',
            'token' => true,
        ],
        /** @deprecated please use this method instead: conversations.join */
        'channels.join' => [
            'endpoint' => '/channels.join',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.kick */
        'channels.kick' => [
            'endpoint' => '/channels.kick',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.leave */
        'channels.leave' => [
            'endpoint' => '/channels.leave',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.list */
        'channels.list' => [
            'endpoint' => '/channels.list',
            'token' => true,
        ],
        /** @deprecated please use this method instead: conversations.mark */
        'channels.mark' => [
            'endpoint' => '/channels.mark',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.rename */
        'channels.rename' => [
            'endpoint' => '/channels.rename',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.replies */
        'channels.replies' => [
            'endpoint' => '/channels.replies',
            'token' => true,
        ],
        /** @deprecated please use this method instead: conversations.setPurpose */
        'channels.setPurpose' => [
            'endpoint' => '/channels.setPurpose',
            'token' => true,
            'format' => [
                'purpose',
            ],
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.setTopic */
        'channels.setTopic' => [
            'endpoint' => '/channels.setTopic',
            'token' => true,
            'format' => [
                'topic',
            ],
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.unarchive */
        'channels.unarchive' => [
            'endpoint' => '/channels.unarchive',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.archive */
        'groups.archive' => [
            'endpoint' => '/groups.archive',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.create */
        'groups.create' => [
            'endpoint' => '/groups.create',
            'token' => true,
            'format' => [
                'name',
            ],
            'post' => true,
        ],
        /** @deprecated There are no exact Conversations API equivalents for this method. */
        'groups.createChild' => [
            'endpoint' => '/groups.createChild',
            'token' => true,
        ],
        /** @deprecated please use this method instead: conversations.history */
        'groups.history' => [
            'endpoint' => '/groups.history',
            'token' => true,
        ],
        /** @deprecated please use this method instead: conversations.info */
        'groups.info' => [
            'endpoint' => '/groups.info',
            'token' => true,
        ],
        /** @deprecated please use this method instead: conversations.invite */
        'groups.invite' => [
            'endpoint' => '/groups.invite',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.kick */
        'groups.kick' => [
            'endpoint' => '/groups.kick',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.leave */
        'groups.leave' => [
            'endpoint' => '/groups.leave',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use these methods instead: conversations.list or users.conversations */
        'groups.list' => [
            'endpoint' => '/groups.list',
            'token' => true,
        ],
        /** @deprecated please use this method instead: conversations.mark */
        'groups.mark' => [
            'endpoint' => '/groups.mark',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated There are no exact Conversations API equivalents for this method. */
        'groups.open' => [
            'endpoint' => '/groups.open',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.rename */
        'groups.rename' => [
            'endpoint' => '/groups.rename',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.replies */
        'groups.replies' => [
            'endpoint' => '/groups.replies',
            'token' => true,
        ],
        /** @deprecated please use this method instead: conversations.setPurpose */
        'groups.setPurpose' => [
            'endpoint' => '/groups.setPurpose',
            'token' => true,
            'format' => [
                'purpose',
            ],
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.setTopic */
        'groups.setTopic' => [
            'endpoint' => '/groups.setTopic',
            'token' => true,
            'format' => [
                'topic',
            ],
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.unarchive */
        'groups.unarchive' => [
            'endpoint' => '/groups.unarchive',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.close */
        'im.close' => [
            'endpoint' => '/im.close',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.history */
        'im.history' => [
            'endpoint' => '/im.history',
            'token' => true,
        ],
        /** @deprecated please use these methods instead: conversations.list or users.conversations */
        'im.list' => [
            'endpoint' => '/im.list',
            'token' => true,
        ],
        /** @deprecated please use this method instead: conversations.mark */
        'im.mark' => [
            'endpoint' => '/im.mark',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.open */
        'im.open' => [
            'endpoint' => '/im.open',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.replies */
        'im.replies' => [
            'endpoint' => '/im.replies',
            'token' => true,
        ],
        /** @deprecated please use this method instead: conversations.close */
        'mpim.close' => [
            'endpoint' => '/mpim.close',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.history */
        'mpim.history' => [
            'endpoint' => '/mpmim.history',
            'token' => true,
        ],
        /** @deprecated please use these methods instead: conversations.list or users.conversations */
        'mpim.list' => [
            'endpoint' => '/mpim.list',
            'token' => true,
        ],
        /** @deprecated please use this method instead: conversations.mark */
        'mpim.mark' => [
            'endpoint' => '/mpim.mark',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.open */
        'mpim.open' => [
            'endpoint' => '/mpim.open',
            'token' => true,
            'post' => true,
        ],
        /** @deprecated please use this method instead: conversations.replies */
        'mpim.replies' => [
            'endpoint' => '/mpim.replies',
            'token' => true,
        ],
    ];

    /**
     * Check that requested command is available for using by this library.
     */
    public static function available(string $commandName): bool
    {
        return array_key_exists($commandName, static::$AVAILABLE_COMMANDS);
    }

    /**
     * Return requested command configuration.
     */
    public static function get(string $commandName): array
    {
        return static::$AVAILABLE_COMMANDS[$commandName];
    }

    /**
     * Extend available commands by new one.
     */
    public static function extend(string $commandName, array $config): void
    {
        static::$AVAILABLE_COMMANDS[$commandName] = $config;
    }
}
