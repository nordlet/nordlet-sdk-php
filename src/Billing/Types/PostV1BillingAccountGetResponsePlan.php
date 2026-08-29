<?php

namespace Nordlet\Billing\Types;

enum PostV1BillingAccountGetResponsePlan: string
{
    case Starter = "starter";
    case Business = "business";
    case Scale = "scale";
}
