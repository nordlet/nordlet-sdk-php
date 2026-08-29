<?php

namespace Nordlet\Billing\Types;

enum PostV1BillingAccountSetPlanResponseStatus: string
{
    case Trial = "trial";
    case Active = "active";
    case Suspended = "suspended";
}
