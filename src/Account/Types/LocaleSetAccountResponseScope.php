<?php

namespace Nordlet\Account\Types;

enum LocaleSetAccountResponseScope: string
{
    case Membership = "membership";
    case User = "user";
}
