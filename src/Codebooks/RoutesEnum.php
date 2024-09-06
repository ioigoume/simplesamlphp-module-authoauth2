<?php

declare(strict_types=1);

namespace SimpleSAML\Module\authoauth2\Codebooks;

enum RoutesEnum: string
{
    case Callback = 'callback';
    case Logout = 'logout';
    case LoggedOut = 'loggedout';
    case Consent = 'consent';
}
