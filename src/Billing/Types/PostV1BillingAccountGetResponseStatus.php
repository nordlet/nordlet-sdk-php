<?php

namespace Nordlet\Billing\Types;

enum PostV1BillingAccountGetResponseStatus: string
{
    case Trial = "trial";
    case Active = "active";
    case Suspended = "suspended";
}
