<?php

namespace Nordlet\Account\Types;

enum PostV1AccountMeResponseBillingStatus: string
{
    case Trial = "trial";
    case Active = "active";
    case Suspended = "suspended";
}
