PHP Slack
=========

> Easy in use, lightweight library for interaction with Slack API.

An original repository - https://github.com/Frlnc/php-slack, but seems it's abandoned.

### Install

```
composer require olexandrmazur/api-slack-php 
```

### Provides

* Frlnc\Slack\Contracts

  A small set of contracts to allow for the consumption of the Slack API. **Interactor**, **Response** and **
  ResponseFactory**.

    * **Interactor** is in charge of providing the Http GET/POST methods.
    * **Response** is in charge of providing a simple Http response wrapper for holding the body, headers and status
      code.
    * **ResponseFactory** is in charge of providing a factory to instantiate and build the **Response**.

To use this package, it's simple. Though _please note_ that this implementation is very lightweight meaning you'll need
to do some more work than usual. This package doesn't provide methods such as `Chat::postMessage(string message)`, it
literally provides one method (`Commander::execute(string command, array parameters = [])`).

Here is a very simple example of using this package:

```php
<?php

use Frlnc\Slack\Http\SlackResponseFactory;
use Frlnc\Slack\Http\CurlInteractor;
use Frlnc\Slack\Core\Commander;

$interactor = new CurlInteractor();
$interactor->setResponseFactory(new SlackResponseFactory());

// or
// $interactor = new CurlInteractor(new SlackResponseFactory());

const API_TOKEN = 'xoxb-some-token-for-slack';
const CHANNEL_ID = 'C01SF1KFPPP';

$commander = new Commander(API_TOKEN, $interactor);

$response = $commander->execute(
    'chat.postMessage', 
    [
        'channel' => CHANNEL_ID,
        'text' => 'Hello, world!'
    ]
);

if ($response['ok']) {
    // Command worked
} else {
    // Command didn't work
}
```

Note that Commander will automatically format most inputs to Slack's requirements but attachments are not supported -
you will need to manually call `$text = Commander::format($text)` to convert it.

### TODO

- [x] Add all available Slack API methods
- [ ] Fix some known bugs (allow overwriting command "format", fix files.upload with file name containing "@" symbol)
- [ ] Add handling rate limits
- [ ] Check mandatory parameters presented before interaction with API
- [ ] Add unit tests
- [ ] Add code sniffer
- [ ] Add Psalm (or else static analysis tool) 
- [ ] Provide github actions
- [ ] Add more explanations about tokens and other Slack-related things to readme
- [ ] Add more code examples to readme (or /doc folder?)
- [ ] Consider adding something like Laravel facades
- [ ] Consider reworking response format
