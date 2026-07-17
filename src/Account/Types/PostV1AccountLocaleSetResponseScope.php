<?php

namespace Nordlet\Account\Types;

enum PostV1AccountLocaleSetResponseScope: string
{
    case Membership = "membership";
    case User = "user";
}
